<?php

namespace Database\Seeders;

use Celios\Core\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siteName = function_exists('setting') ? setting('site_name', config('app.name', 'My Website')) : config('app.name', 'My Website');

        Brand::firstOrCreate(
            ['slug' => 'default'],
            [
                'name' => $siteName ?: config('app.name', 'My Website'),
                'headline' => 'Welcome to our website',
                'description' => 'Powered by Celios CMS',
                'copyright_text' => '© '.date('Y').' '.($siteName ?: config('app.name', 'My Website')).'. All rights reserved.',
                'primary_domain' => 'localhost',
                'domains' => ['127.0.0.1', 'localhost'],
                'company_name' => $siteName ?: config('app.name', 'Company Name'),
                'email' => 'contact@example.com',
                'phone' => '+381 11 000 0000',
                'address' => 'Glavna 1',
                'city' => 'Belgrade',
                'postal_code' => '11000',
                'country' => 'Serbia',
                'social_links' => [],
                'default_locale' => 'sr',
                'supported_locales' => ['sr', 'en'],
                'default_currency' => 'EUR',
                'supported_currencies' => ['EUR', 'RSD'],
                'currency_symbol_position' => 'after',
                'is_default' => true,
                'is_active' => true,
            ]
        );
    }
}
