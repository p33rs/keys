<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Athena',
            'description' => 'The Gladiator',
            'email' => 'devops@sitecompli.com',
            'password' => bcrypt('secret'),
            'is_admin' => true,
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Wilhelm',
            'description' => 'The Enforcer',
            'email' => 'wilhelm@example.org',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Nisha',
            'description' => 'The Lawbringer',
            'email' => 'nisha@example.org',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Claptrap',
            'description' => 'The Fragtrap',
            'email' => 'claptrap@example.org',
            'password' => bcrypt('secret'),
        ]);
        DB::table('groups')->insert([
            'name' => 'Boys',
            'description' => '♂'
        ]);
        DB::table('groups')->insert([
            'name' => 'Girls',
            'description' => '♀'
        ]);
        DB::table('memberships')->insert([
            'userid' => 1, 'groupid' => 2
        ]);
        DB::table('memberships')->insert([
            'userid' => 2, 'groupid' => 1
        ]);
        DB::table('memberships')->insert([
            'userid' => 3, 'groupid' => 2
        ]);
        DB::table('memberships')->insert([
            'userid' => 4, 'groupid' => 1
        ]);
        DB::table('usernames')->insert([
            'userid' => 1, 'username' => 'athena'
        ]);
        DB::table('usernames')->insert([
            'userid' => 1, 'username' => 'root'
        ]);
        DB::table('usernames')->insert([
            'userid' => 1, 'username' => 'admin'
        ]);
        DB::table('usernames')->insert([
            'userid' => 2, 'username' => 'wilhelm'
        ]);
        DB::table('usernames')->insert([
            'userid' => 3, 'username' => 'nisha'
        ]);
        DB::table('usernames')->insert([
            'userid' => 4, 'username' => 'claptrap'
        ]);
        DB::table('usernames')->insert([
            'userid' => 4, 'username' => 'thrillho'
        ]);

    }
}
