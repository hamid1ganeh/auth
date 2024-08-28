<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'superadmin',
            'description' => 'مدیر اصلی کل سامانه',
        ]);

        foreach(Permission::all() as $permition)
        {
            DB::table('permission_role')->insert([
                'role_id' => 1,
                'permission_id' => $permition->id,
            ]);
        }


    }
}
