<?php

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
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'teacher']);
        factory(\App\Role::class, 1)->create(['name' => 'student']);

        factory(\App\User::class, 1)->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'role_id' => \App\Role::ADMIN
        ])
        ->each(function(\App\User $u){
           factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 50)->create()
            ->each(function(\App\User $u){
                factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 20)->create()
            ->each(function(\App\User $u){
                factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
                factory(\App\Teacher::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\Lavel::class, 1)->create(['name' => 'Beginner']);
        factory(\App\Lavel::class, 1)->create(['name' => 'Intermediate']);
        factory(\App\Lavel::class, 1)->create(['name' => 'Advanced']);
        factory(\App\Categories::class, 5)->create();

        factory(\App\Course::class, 50)
            ->create()
            ->each(function (\App\Course $c){
                $c->goals()->saveMany(factory(\App\Goal::class, 2)->create());
                $c->requirements()->saveMany(factory(\App\Requirement::class, 4)->create());
            });

    }
}
