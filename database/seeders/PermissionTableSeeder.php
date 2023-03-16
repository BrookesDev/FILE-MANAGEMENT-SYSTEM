<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //Permissions
          $permissions = [
           'create-user',
           'edit-user',
           'delete-user',
           'add-category',
           'edit-category',
           'delete-category',
           'upload-file',
           'view-upload',
           'edit-upload',
           'delete-upload'
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
