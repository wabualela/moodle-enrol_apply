<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package    enrol_apply
 * @copyright  2016 sudile GbR (http://www.sudile.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Johannes Burk <johannes.burk@sudile.com>
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/tablelib.php');

class enrol_apply_manage_table extends table_sql {

    public $is_collapsible = false;

    public function __construct($enrolid = null, $iduserenrol = null, $usersadm = null) {
        parent::__construct('enrol_apply_manage_table');

        global $DB;

        $sqlwhere  = 'ue.status != 0';
        $sqlparams = array();
        if ($enrolid != null) {
            $sqlwhere .= " AND e.id = :enrolid";
            $sqlparams['enrolid'] = $enrolid;
        } else {
            $sqlwhere .= " AND e.enrol = :enrol";
            $sqlparams['enrol'] = 'apply';
        }

        if ($iduserenrol) {
            $sqlwhere .= " AND ue.id = :userenrol";
            $sqlparams['userenrol'] = $iduserenrol;
        }

        if ($usersadm) {
            $sqlwhere .= " AND ue.userid in (" . implode(",", $usersadm) . ")";
        }
        $extra = get_config('enrol_apply', 'profileoption');
        if ($extra) {
            $this->set_sql(
                "ue.id AS userenrolmentid, ue.userid, ue.status AS enrolstatus, ue.timecreated AS applydate,
            ai.comment AS applycomment, u.*, c.fullname as course, c.id as courseid,uid.data as field",
                "{user_enrolments} AS ue
            LEFT JOIN {enrol_apply_applicationinfo} ai ON ai.userenrolmentid = ue.id
            JOIN {user} u ON u.id = ue.userid
            JOIN {enrol} e ON e.id = ue.enrolid
            JOIN {course} c ON c.id = e.courseid
            LEFT OUTER JOIN {user_info_data} uid on uid.userid=u.id and uid.fieldid={$extra}",
                $sqlwhere,
                $sqlparams);
        } else {
            $this->set_sql(
                "ue.id AS userenrolmentid, ue.userid, ue.status AS enrolstatus, ue.timecreated AS applydate,
            ai.comment AS applycomment, u.*, c.fullname as course, c.id as courseid",
                "{user_enrolments} AS ue
            LEFT JOIN {enrol_apply_applicationinfo} ai ON ai.userenrolmentid = ue.id
            JOIN {user} u ON u.id = ue.userid
            JOIN {enrol} e ON e.id = ue.enrolid
            JOIN {course} c ON c.id = e.courseid",
                $sqlwhere,
                $sqlparams);
        }
        $this->no_sorting('checkboxcolumn');
    }

    /**
     * Get any extra classes names to add to this row in the HTML.
     * @param $row array the data for this row. Note (Johannes): this is actually an object with all sql columns.
     * @return string added to the class="" attribute of the tr.
     */
    public function get_row_class($row) {
        if ($row->enrolstatus == 2) {
            return 'enrol_apply_waitinglist_highlight';
        }
        return '';
    }

    public function col_checkboxcolumn($row) {
        return html_writer::checkbox('userenrolments[]', $row->userenrolmentid, false);
    }

    public function col_fullname($row) {
        // The $row variable contains all user fields, see sql query.
        global $OUTPUT;
        $col = $OUTPUT->user_picture($row, array('popup' => true));
        $col .= fullname($row);
        return $col;
    }

    public function col_course($row) {
        global $CFG;
        $col = "<a target='_blank' href='{$CFG->wwwroot}/course/view.php?id={$row->courseid}'>{$row->course}</a>";
        return $col;
    }


    public function col_applydate($row) {
        return date("Y-m-d", $row->applydate);
    }

    public function col_options($row) {
        global $OUTPUT;
        $options = [];
        $options[] = $OUTPUT->action_icon(
            new moodle_url('/enrol/apply/manage.php', array('userenrolment' => $row->userenrolmentid, 'formaction' => 'confirm')),
            new pix_icon('t/approve', get_string('btnconfirm', 'enrol_apply')),
            null,
            array('title' => get_string('btnconfirm', 'enrol_apply'), 'data-action' => 'post')
        );
        $options[] = $OUTPUT->action_icon(
            new moodle_url('/enrol/apply/manage.php', array('userenrolment' => $row->userenrolmentid, 'formaction' => 'wait')),
            new pix_icon('t/lock', get_string('btnwait', 'enrol_apply')),
            null,
            array('title' => get_string('btnwait', 'enrol_apply'), 'data-action' => 'post')
        );
        $options[] = $OUTPUT->action_icon(
            new moodle_url('/enrol/apply/manage.php', array('userenrolment' => $row->userenrolmentid, 'formaction' => 'cancel')),
            new pix_icon('t/block', get_string('btncancel', 'enrol_apply')),
            null,
            array('title' => get_string('btncancel', 'enrol_apply'), 'data-action' => 'post')
        );

        return implode(' ', $options);
    }

    public function col_courses($row) {
        global $DB, $OUTPUT, $CFG;
        $courses = enrol_get_users_courses($row->userid, true, 'id, fullname');
        $tags = array_map(function($course) use ($CFG) {
            return html_writer::tag('span', "<a href='{$CFG->wwwroot}/course/view.php?id={$course->id}'>{$course->fullname}</a>", array('class' => 'tag'));
        }, $courses);

        return implode(' ', $tags);
    }


}
