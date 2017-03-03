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
        $info = array(
            array('name' => 'Philip','couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'RomanNaumov', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Teddy', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Arina', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Dasha', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Vika', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Janis', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Roman', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Vitalij', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Stas', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Stas', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'NikitaNaumov', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Dan', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Laurynas', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Julia', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Lera', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Ksenija', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Emma', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Krissi', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Karoline', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Marijana', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'KsenijaP', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'TimaP', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Aleksandr', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Nadezhda', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'AndrejM', 'couple' => 0, 'coming' => 0, 'checked' => 0, 'quested' => 0),
            array('name' => 'Pavlik', 'couple' => 1, 'coming' => 0, 'checked' => 0, 'quested' => 0),

        );
        
        $number = count($info);

        for ($row = 0; $row < $number; $row++){

            $name = null;
            $couple = 0;

            foreach($info[$row] as $key => $value) {

                $name = $info[$row]['name'];
                $couple = $info[$row]['couple'];

            }


            DB::table('users')->insert([
                'name' => $name,
                'couple' =>  $couple,
                'coming' =>  0,
                'checked' =>  0,
                'quested' => 0,

            ]);
        }



    }




}
