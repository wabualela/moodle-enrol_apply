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
 * @package    enrol_apply
 * @copyright  emeneo.com (http://emeneo.com/)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     emeneo.com (http://emeneo.com/)
 * @author     Johannes Burk <johannes.burk@sudile.com>
 */

// The name of your plug-in. Displayed on admin menus.
$string['enrolname']       = 'تأكيد تسجيل الدورة';
$string['pluginname']      = 'تأكيد تسجيل الدورة';
$string['pluginname_desc'] = 'باستخدام هذا المكون الإضافي، يمكن للمستخدمين التقدم للتسجيل في دورة. يجب على المعلم أو مدير الموقع الموافقة على التسجيل قبل أن يتم تسجيل المستخدم.';

$string['confirmmail_heading']     = 'البريد الإلكتروني للتأكيد';
$string['confirmmail_desc']        = '';
$string['confirmmailsubject']      = 'موضوع البريد الإلكتروني للتأكيد';
$string['confirmmailsubject_desc'] = '';
$string['confirmmailcontent']      = 'محتوى البريد الإلكتروني للتأكيد';
$string['confirmmailcontent_desc'] = 'يرجى استخدام العلامات الخاصة التالية لاستبدال محتوى البريد الإلكتروني ببيانات من Moodle.<br/>{firstname}: الاسم الأول للمستخدم؛ {content}: اسم الدورة؛ {lastname}: اسم العائلة للمستخدم؛ {username}: اسم المستخدم المسجل؛ {timeend}: تاريخ انتهاء التسجيل';

$string['waitmail_heading']     = 'البريد الإلكتروني لقائمة الانتظار';
$string['waitmail_desc']        = '';
$string['waitmailsubject']      = 'موضوع البريد الإلكتروني لقائمة الانتظار';
$string['waitmailsubject_desc'] = '';
$string['waitmailcontent']      = 'محتوى البريد الإلكتروني لقائمة الانتظار';
$string['waitmailcontent_desc'] = 'يرجى استخدام العلامات الخاصة التالية لاستبدال محتوى البريد الإلكتروني ببيانات من Moodle.<br/>{firstname}: الاسم الأول للمستخدم؛ {content}: اسم الدورة؛ {lastname}: اسم العائلة للمستخدم؛ {username}: اسم المستخدم المسجل';

$string['cancelmail_heading']     = 'البريد الإلكتروني للإلغاء';
$string['cancelmail_desc']        = '';
$string['cancelmailsubject']      = 'موضوع البريد الإلكتروني للإلغاء';
$string['cancelmailsubject_desc'] = '';
$string['cancelmailcontent']      = 'محتوى البريد الإلكتروني للإلغاء';
$string['cancelmailcontent_desc'] = 'يرجى استخدام العلامات الخاصة التالية لاستبدال محتوى البريد الإلكتروني ببيانات من Moodle.<br/>{firstname}: الاسم الأول للمستخدم؛ {content}: اسم الدورة؛ {lastname}: اسم العائلة للمستخدم؛ {username}: اسم المستخدم المسجل';

$string['notify_heading']         = 'إعدادات الإشعارات';
$string['notify_desc']            = 'حدد من يتم إبلاغه بطلبات التسجيل الجديدة.';
$string['notifycoursebased']      = "إشعار طلب التسجيل الجديد (مستند إلى الدورة، مثل المعلمين)";
$string['notifycoursebased_desc'] = "الإعداد الافتراضي للحالات الجديدة: إبلاغ كل من لديه القدرة على 'إدارة تسجيل الطلب' للدورة المعنية (مثل المعلمين والمديرين)";
$string['notifyglobal']           = "إشعار طلب التسجيل الجديد (عالمي، مثل المديرين العالميين والمسؤولين)";
$string['notifyglobal_desc']      = "حدد من يتم إبلاغه بطلبات التسجيل الجديدة لأي دورة.";

$string['messageprovider:application']  = 'إشعارات طلب التسجيل في الدورة';
$string['messageprovider:confirmation'] = 'إشعارات تأكيد طلب التسجيل في الدورة';
$string['messageprovider:cancelation']  = 'إشعارات إلغاء طلب التسجيل في الدورة';
$string['messageprovider:waitinglist']  = 'إشعارات تأجيل طلب التسجيل في الدورة';

$string['newapplicationnotification']       = 'هناك طلب تسجيل جديد في الدورة بانتظار المراجعة.';
$string['applicationconfirmednotification'] = 'تم تأكيد طلب تسجيلك في الدورة.';
$string['applicationcancelednotification']  = 'تم إلغاء طلب تسجيلك في الدورة.';
$string['applicationdeferrednotification']  = 'تم تأجيل طلب تسجيلك في الدورة (أنت حاليًا في قائمة الانتظار).';

$string['confirmusers']      = 'تأكيد التسجيل';
$string['confirmusers_desc'] = 'المستخدمون في الصفوف ذات اللون الرمادي هم في قائمة الانتظار.';

$string['coursename']    = 'الدورة';
$string['applyuser']     = 'الاسم الأول / اسم العائلة';
$string['applyusermail'] = 'البريد الإلكتروني';
$string['applydate']     = 'تاريخ التسجيل';
$string['btnconfirm']    = 'تأكيد الطلبات';
$string['btnwait']       = 'تأجيل الطلبات';
$string['btncancel']     = 'إلغاء الطلبات';
$string['enrolusers']    = 'تسجيل المستخدمين';

$string['status']       = 'السماح بتأكيد تسجيل الدورة';
$string['newenrols']    = 'السماح بطلبات التسجيل الجديدة في الدورة';
$string['confirmenrol'] = 'إدارة الطلبات';

$string['apply:config']             = 'تكوين حالات التسجيل';
$string['apply:manage']             = 'إدارة تسجيل المستخدمين';
$string['apply:manageapplications'] = 'إدارة تسجيل الطلبات';
$string['apply:unenrol']            = 'إلغاء تسجيل المستخدمين من الدورة';
$string['apply:unenrolself']        = 'إلغاء التسجيل الذاتي من الدورة';

$string['notification'] = '<b>تم إرسال طلب التسجيل بنجاح</b>. <br/><br/>سيتم إبلاغك عبر البريد الإلكتروني عند تأكيد تسجيلك.';

$string['mailtoteacher_suject'] = 'طلب تسجيل جديد!';
$string['editdescription']      = 'وصف منطقة النص';
$string['comment']              = 'تعليق';
$string['applycomment']         = 'تعليق';
$string['applymanage']          = 'إدارة طلبات التسجيل';

$string['status_desc']  = 'السماح بالوصول إلى الدورة للمستخدمين المسجلين داخليًا.';
$string['user_profile'] = 'ملف المستخدم';

$string['show_standard_user_profile'] = 'عرض حقول ملف المستخدم القياسية على شاشة التسجيل';
$string['show_extra_user_profile']    = 'عرض حقول ملف المستخدم الإضافية على شاشة التسجيل';

//$string['custom_label'] = 'تسمية مخصصة "{replace_title}"';
$string['custom_label'] = 'تسمية مخصصة';

$string['maxenrolled']              = 'الحد الأقصى للمستخدمين المسجلين';
$string['maxenrolled_help']         = 'يحدد الحد الأقصى لعدد المستخدمين الذين يمكنهم التسجيل الذاتي. 0 يعني لا يوجد حد.';
$string['maxenrolledreached_left']  = 'تم الوصول إلى الحد الأقصى لعدد المستخدمين المسموح به';
$string['maxenrolledreached_right'] = 'تم الوصول إليه بالفعل.';

$string['cantenrol'] = 'التسجيل معطل أو غير نشط';

$string['maxenrolled_tip_1'] = 'من';
$string['maxenrolled_tip_2'] = 'المقاعد المحجوزة بالفعل.';

$string['defaultperiod']      = 'مدة التسجيل الافتراضية';
$string['defaultperiod_desc'] = 'المدة الافتراضية التي يكون فيها التسجيل صالحًا. إذا تم تعيينه على الصفر، ستكون مدة التسجيل غير محدودة بشكل افتراضي.';
$string['defaultperiod_help'] = 'المدة الافتراضية التي يكون فيها التسجيل صالحًا، بدءًا من لحظة تسجيل المستخدم. إذا تم تعطيله، ستكون مدة التسجيل غير محدودة بشكل افتراضي.';
$string['expiry_heading']     = 'إعدادات انتهاء الصلاحية';
$string['expiry_desc']        = '';
$string['expiredaction']      = 'إجراء انتهاء صلاحية التسجيل';
$string['expiredaction_help'] = 'حدد الإجراء الذي سيتم تنفيذه عند انتهاء صلاحية تسجيل المستخدم. يرجى ملاحظة أن بعض بيانات المستخدم والإعدادات يتم حذفها من الدورة أثناء إلغاء التسجيل.';

$string['submitted_info']   = 'معلومات التسجيل';
$string['privacy:metadata'] = 'لا يخزن مكون تأكيد تسجيل الدورة أي بيانات شخصية.';

$string['enrolperiod']      = 'مدة التسجيل';
$string['enrolperiod_desc'] = 'المدة الافتراضية التي يكون فيها التسجيل صالحًا. إذا تم تعيينه على الصفر، ستكون مدة التسجيل غير محدودة بشكل افتراضي.';
$string['enrolperiod_help'] = 'المدة التي يكون فيها التسجيل صالحًا، بدءًا من لحظة تسجيل المستخدم نفسه. إذا تم تعطيله، ستكون مدة التسجيل غير محدودة.';

$string['expirynotifyall']      = 'المعلم والمستخدم المسجل';
$string['expirynotifyenroller'] = 'المعلم فقط';

$string['group']      = 'تعيين المجموعة';
$string['group_help'] = 'يمكنك تعيين عدم وجود مجموعات أو مجموعات متعددة';

$string['opt_commentaryzone']      = 'حقل التعليق';
$string['opt_commentaryzone_help'] = 'نعم -> تمكين حقل التعليق في نموذج التسجيل';

$string['expirymessageenrollersubject'] = 'إشعار انتهاء صلاحية التسجيل';
$string['expirymessageenrollerbody']    = 'سينتهي التسجيل في الدورة \'{$a->course}\' خلال {$a->threshold} القادمة للمستخدمين التاليين:

    {$a->users}

لتمديد تسجيلهم، انتقل إلى {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'إشعار انتهاء صلاحية التسجيل';
$string['expirymessageenrolledbody']    = 'عزيزي {$a->user}،

هذا إشعار بأن تسجيلك في الدورة \'{$a->course}\' سينتهي في {$a->timeend}.

إذا كنت بحاجة إلى مساعدة، يرجى الاتصال بـ {$a->enroller}.';

$string['sendexpirynotificationstask'] = "مهمة إرسال إشعارات انتهاء صلاحية التسجيل";

$string['messageprovider:expiry_notification'] = 'إشعارات انتهاء صلاحية التسجيل';

$string["profileoption"] = "حقل الملف الشخصي لعرضه في الجدول";


$string['enrolmentconfirmed'] = 'تم تأكيد التسجيل';
$string['enrolmentwaited']    = 'تم تأجيل التسجيل';
$string['enrolmentcanceled']  = 'تم إلغاء التسجيل';