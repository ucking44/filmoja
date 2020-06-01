<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //we create a new user
        $user1 = \App\User::create([
            'name' => 'Ndibem Sam',
            'email' => 'sam@gmail.com',
            'username' => 'sammy',
            'password' => Hash::make(123456),
            'role_id' => 1,
            'active'  => 1,
           ]);

           $user2 = \App\User::create([
               'name' => 'Nwideh Ifechukwu',
               'email' => 'ify@gmail.com',
               'username' => 'If-Ide',
               'password' => Hash::make(123456),
               'role_id' => 1,
               'active'  => 1,
              ]);

              $user3 = \App\User::create([
               'name' => 'Ada Loveth',
               'email' => 'love@gmail.com',
               'username' => 'lovey',
               'password' => Hash::make(123456),
               'role_id' => 1,
               'active'  => 1,
              ]);

              $user4 = \App\User::create([
               'name' => 'Preshy Prep',
               'email' => 'preshy@gmail.com',
               'username' => 'Precious',
               'password' => Hash::make(123456),
               'role_id' => 1,
               'active'  => 1,
              ]);

              $user5 = \App\User::create([
               'name' => 'Lola Dayo',
               'email' => 'dayo@gmail.com',
               'username' => 'Lola_d',
               'password' => Hash::make(123456),
               'role_id' => 1,
               'active'  => 1,
              ]);

              $user6 = \App\User::create([
               'name' => 'Deji Dapo',
               'email' => 'deji@gmail.com',
               'username' => 'deji-dapo',
               'password' => Hash::make(123456),
               'role_id' => 1,
               'active'  => 1,
              ]);

             $user7 = \App\User::create([
               'name' => 'Ugonna Jane',
               'email' => 'ugonnawizzy@gmail.com',
               'username' => 'Ugowizzy',
               'password' => Hash::make(123456),
               'role_id' => 1,
               'active'  => 1,
              ]);

             $user8 = \App\User::create([
               'name' => 'Tunde Mike',
               'email' => 'miky@gmail.com',
               'username' => 'Lady-b',
               'password' => Hash::make(123456),
               'role_id' => 1,
               'active'  => 1,
              ]);


              \App\followship::create([
                'user1_id' => $user2->id,//ie this user2 id is the id following me(the user1 id)
                'user2_id' => 1,
            ]);

            \App\followship::create([
             'user1_id' => $user3->id,//ie this user3 id is the id following me(the user1 id)
             'user2_id' => 1,
         ]);

         \App\followship::create([
             'user1_id' => $user4->id,//ie this user4 id is the id following me(the user1 id)
             'user2_id' => 1,
         ]);

         \App\followship::create([
             'user1_id' => $user5->id,//ie this user5 id is the id following me(the user1 id)
             'user2_id' => 1,
         ]);

         \App\followship::create([
             'user1_id' => 1,
             'user2_id' => $user6->id,//ie i am following user6 id
         ]);

         \App\followship::create([
            'user1_id' => 1,
            'user2_id' => $user7->id,//ie i am following user7 id
        ]);

        \App\followship::create([
            'user1_id' => 1,
            'user2_id' => $user8->id,//ie i am following user8 id
        ]);

        \App\role::create([

           'name' => 'User',

        ]);

        \App\role::create([

            'name' => 'Admin',

         ]);

    }
}
