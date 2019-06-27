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
        $settings = [
            [
                'key' => 'first_image',
            ],
            [
                'key' => 'first_image_responsive',
            ],		
            [
                'key' => 'second_image',
            ],		
            [
                'key' => 'second_image_responsive',
            ],		
            [
                'key' => 'third_image',
            ],		
            [
                'key' => 'third_image_responsive',
            ],		
            [
                'key' => 'home_en_button',
                'value' => true
            ],
            [
                'key' => 'home_es_button',
                'value' => true
            ],
            [
                'key' => 'home_fr_button',
                'value' => true
            ],
            [
                'key' => 'home_title',
                'lang' => 'en'
            ],
            [
                'key' => 'home_detail',
                'lang' => 'en'
            ],
            [
                'key' => 'home_title',
                'lang' => 'es'
            ],
            [
                'key' => 'home_detail',
                'lang' => 'es'
            ],
            [
                'key' => 'home_title', 
                'lang' => 'fr'
            ],
            [
                'key' => 'home_detail',
                'lang' => 'fr'
            ]
        ];
            
        foreach ($settings as $setting_seed) {
            $setting = new \App\Setting();
            $setting->key = $setting_seed['key'];
            if (array_key_exists('value', $setting_seed)) {
                $setting->value =  $setting_seed['value'];
            }
            if (array_key_exists('lang', $setting_seed)) {
                $setting->lang = $setting_seed['lang'];
            }
            $setting->save();
        }
    }
}
