<?php
namespace Database\Seeders;

use App\Helpers\Constant;
use App\Models\Employee;
use App\Models\Link;
use App\Models\ModelPermission;
use App\Models\ModelRole;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class InstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = (new Employee());
        $Admin->setName('Dashboard');
        $Admin->setEmail('admin@admin.com');
        $Admin->setPassword('123456');
        $Admin->save();
        $Role = new Role();
        $Role->setName('Super Dashboard');
        $Role->setNameAr('مدير عام');
        $Role->save();
        $Role->refresh();
        $PermissionsAndLinks = [
            'Images'=>[
                'name'=>'Images',
                'name_ar'=>'الصور',
                'key'=>'images',
                'icon'=>'image',
                'Children'=>[]
            ],
            'Tags'=>[
                'name'=>'Tags',
                'name_ar'=>'التاقات',
                'key'=>'tags',
                'icon'=>'card_membership',
                'Children'=>[]
            ],
        ];
        foreach ($PermissionsAndLinks as $object){
            $Permission = new Permission();
            $Permission->setName($object['name']);
            $Permission->setNameAr($object['name_ar']);
            $Permission->setKey($object['key']);
            $Permission->save();
            $Link = new Link();
            $Link->setName($object['name']);
            $Link->setNameAr($object['name_ar']);
            $Link->setUrl($object['key']);
            $Link->setIcon($object['icon'] ?? null);
            $Link->setPermissionId($Permission->getId());
            $Link->save();
            foreach ($object['Children'] as $child){
                $CPermission = new Permission();
                $CPermission->setName($child['name']);
                $CPermission->setNameAr($child['name_ar']);
                $CPermission->setKey($child['key']);
                $CPermission->setParentId($Permission->getId());
                $CPermission->save();
                $CLink = new Link();
                $CLink->setName($child['name']);
                $CLink->setNameAr($child['name_ar']);
                $CLink->setUrl($child['key']);
                $CLink->setIcon($child['icon']);
                $CLink->setParentId($Link->getId());
                $CLink->setPermissionId($CPermission->getId());
                $CLink->save();
            }
        }
        foreach (Permission::all() as $permission){
            $RolePermission = new RolePermission();
            $RolePermission->setPermissionId($permission->getId());
            $RolePermission->setRoleId($Role->getId());
            $RolePermission->save();
        }
        foreach (Role::all() as $role){
            $ModelRole = new ModelRole();
            $ModelRole->setModelId($Admin->id);
            $ModelRole->setRoleId($role->getId());
            $ModelRole->save();
        }
        foreach (Permission::all() as $permission){
            $ModelPermission = new ModelPermission();
            $ModelPermission->setModelId($Admin->id);
            $ModelPermission->setPermissionId($permission->getId());
            $ModelPermission->save();
        }
    }
}
