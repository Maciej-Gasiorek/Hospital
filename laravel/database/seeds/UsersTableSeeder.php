<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Maciej Gasiorek',
            'email'=>'gasiorekmaciek@o2.pl',
            'password'=>bcrypt("password"),
            'phone'=>663353284,
            'address'=>'Warszawa mokotow 33/33',
            'status'=>'active',
            'pesel'=>'93022003999',
            'type'=>'admin'
        
        ]);
        DB::table('users')->insert([
            'name'=>'Jacula',
            'email'=>'jacula@o2.pl',
            'password'=>bcrypt("password"),
            'phone'=>123123123,
            'address'=>'Krakow czyzyny 443/34',
            'status'=>'active',
            'pesel'=>'93022003211',
            'type'=>'patient'
        
        ]);
        DB::table('users')->insert([
            'name'=>'Dareczek',
            'email'=>'dario@o2.pl',
            'password'=>bcrypt("password"),
            'phone'=>134423123,
            'address'=>'Lublin czyzyny 443/34',
            'status'=>'active',
            'pesel'=>'93442003211',
            'type'=>'patient'
        
        ]);
        DB::table('users')->insert([
            'name'=>'Rafalek',
            'email'=>'rafal@o2.pl',
            'password'=>bcrypt("password"),
            'phone'=>123553123,
            'address'=>'Krakow czyzyny 443/34',
            'status'=>'active',
            'pesel'=>'3122003211',
            'type'=>'doctor'
        
        ]);
        DB::table('users')->insert([
            'name'=>'Paddington',
            'email'=>'paddington@o2.pl',
            'password'=>bcrypt("password"),
            'phone'=>123124423,
            'address'=>'Krakow czyzyny 443/34',
            'status'=>'active',
            'pesel'=>'00022003211',
            'type'=>'doctor'
        
        ]);
        DB::table('specializations')->insert([
            'name'=>'oncology'
        ]);
        DB::table('specializations')->insert([
            'name'=>'suregon'
        ]);
        DB::table('specializations')->insert([
            'name'=>'weterynary'
        ]);
}
}
