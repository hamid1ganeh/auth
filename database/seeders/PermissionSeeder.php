<?php

namespace Database\Seeders;
use App\Enums\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('permissions')->insert([
            'name' => 'admins.index',
            'description' => 'ادمین ها',
            'status'=> Status::Active
        ]);

        DB::table('permissions')->insert([
            'name' => 'admins.create',
            'description' => 'ایجاد ادیمن جدید',
            'status'=> Status::Active
        ]);

        DB::table('permissions')->insert([
            'name' => 'admins.edit',
            'description' => 'ویرایش ادمین',
            'status'=> Status::Active
        ]);

        DB::table('permissions')->insert([
            'name' => 'admins.destroy',
            'description' => 'حذف ادمین',
            'status'=> Status::Active
        ]);


        DB::table('permissions')->insert([
            'name' => 'users.index',
            'description' => 'لیست کاربران',
            'status'=> Status::Active
        ]);

        DB::table('permissions')->insert([
            'name' => 'users.create',
            'description' => 'ایجاد کاربر جدید',
            'status'=> Status::Active
        ]);

        DB::table('permissions')->insert([
            'name' => 'users.edit',
            'description' => 'ویرایش کاربر',
            'status'=> Status::Active
        ]);

        DB::table('permissions')->insert([
            'name' => 'users.destroy',
            'description' => 'حذف کاربر',
            'status'=> Status::Active
        ]);



        DB::table('permissions')->insert([
            'name' => 'roles.index',
            'description' => 'لیست نقش ها',
            'status'=> Status::Active
        ]);


        DB::table('permissions')->insert([
            'name' => 'roles.create',
            'description' => 'افزودن نقش ها',
            'status'=> Status::Active
        ]);


        DB::table('permissions')->insert([
            'name' => 'roles.edit',
            'description' => 'ویرایش نقش ها',
            'status'=> Status::Active
        ]);

        DB::table('permissions')->insert([
            'name' => 'roles.destroy',
            'description' => 'حذف نقش ها',
            'status'=> Status::Active
        ]);

    }
}
