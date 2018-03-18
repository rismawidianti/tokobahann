<?php

use Illuminate\Database\Seeder;


use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Pemilik Toko";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        $admin = new User();
        $admin->name="Pemilik Toko";
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User();
        $member->name="Member Toko";
        $member->email="member@gmail.com";
        $member->password=bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);

    }
}