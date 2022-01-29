<?php


use App\Helpers\Constant;

return [

    'Employee'=>[
        'crud_names' => 'الموظفين',
        'crud_name' => 'موظف',
        'crud_the_name' => 'الموظف',
        'name' => 'الاسم',
        'email' => 'البريد الالكتروني',
        'active' => 'الحالة',
        'image' => 'الصورة الشخصية',
        ],
    'Setting'=>[
        'crud_names' => 'الإعدادات',
        'crud_name' => 'اعداد',
        'crud_the_name' => 'الاعداد',
        'key' => 'الإعداد',
        'name' => 'الاسم انجليزي',
        'name_ar' => 'الاسم عربي',
        'value' => 'القيمة',
        'value_ar' => 'القيمة عربي',
        'pages'=>'الصفحات الثابته',
        'notifications'=>'الاشعارات',
        'other'=>'اعدادات اخرى'
    ],
    'Permission'=>[
        'crud_names' => 'الصلاحيات',
        'crud_name' => 'صلاحية',
        'crud_the_name' => 'الصلاحية',
        'id' => '#',
        'name' => 'الاسم انجليزي',
        'name_ar' => 'الاسم عربي',
    ],
    'Role'=>[
        'crud_names' => 'الأدوار',
        'crud_name' => 'دور',
        'crud_the_name' => 'الدور',
        'id' => '#',
        'name' => 'الاسم انجليزي',
        'name_ar' => 'الاسم عربي',
        'permissions' => 'الصلاحيات',
    ],
    'Tag'=>[
        'crud_names' => 'التاقات',
        'crud_name' => 'تاق',
        'crud_the_name' => 'التاق',
        'name' => 'الاسم',
        'image_id' => 'الصورة',
    ],
    'Image'=>[
        'crud_names' => 'الصور',
        'crud_name' => 'صورة',
        'crud_the_name' => 'الصورة',
        'name' => 'الاسم',
    ],
];
