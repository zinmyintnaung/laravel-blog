<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => 'Personal Blog',
            'contact_number'=> '65-0001-1000',
            'contact_email'=> 'myemail@email.com',
            'address'=>'Singapore',
        ]);
    }
}
