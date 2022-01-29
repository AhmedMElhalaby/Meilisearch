<?php

use App\Helpers\Constant;

return [

    'Employee'=>[
        'crud_names' => 'Employees',
        'crud_name' => 'Employee',
        'crud_the_name' => 'The Employee',
        'name' => 'Name',
        'email' => 'E-Mail',
        'active' => 'Status',
        'image' => 'Personal Image',
    ],

    'Setting'=>[
        'crud_names' => 'Settings',
        'crud_name' => 'Setting',
        'crud_the_name' => 'The Setting',
        'key' => 'Key',
        'name' => 'Name En',
        'name_ar' => 'Name Ar',
        'value' => 'Value',
        'value_ar' => 'Value Ar',
        'pages'=>'Pages',
        'notifications'=>'Notifications',
        'other'=>'Other Settings'
    ],
    'Permission'=>[
        'crud_names' => 'Permissions',
        'crud_name' => 'Permission',
        'crud_the_name' => 'The Permission',
        'id' => '#',
        'name' => 'Name En',
        'name_ar' => 'Name Ar',
    ],
    'Role'=>[
        'crud_names' => 'Roles',
        'crud_name' => 'Role',
        'crud_the_name' => 'The Role',
        'id' => '#',
        'name' => 'Name En',
        'name_ar' => 'Name Ar',
        'permissions' => 'Permissions',
    ],
    'Tag'=>[
        'crud_names' => 'Tags',
        'crud_name' => 'Tag',
        'crud_the_name' => 'The Tag',
        'name' => 'Name',
        'image_id' => 'Image',
    ],
    'Image'=>[
        'crud_names' => 'Images',
        'crud_name' => 'Image',
        'crud_the_name' => 'The Image',
        'name' => 'Name',
    ],
];
