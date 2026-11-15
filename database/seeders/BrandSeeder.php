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
        $siteName = function_exists('setting') ? setting('site_name', 'Celios') : 'Celios';

        Brand::firstOrCreate(
            ['slug' => 'celios'],
            [
                'name' => $siteName ?: 'Celios',
                'headline' => 'Modern Modular Digital Experience Platform',
                'description' => 'Enterprise headless CMS and digital application suite built with Laravel & Filament.',
                'copyright_text' => '© '.date('Y').' '.($siteName ?: 'Celios').'. All rights reserved.',
                'primary_domain' => 'localhost',
                'domains' => ['127.0.0.1', 'celios.test'],
                'company_name' => 'Celios Digital Solutions',
                'email' => 'contact@celios.io',
                'phone' => '+381 11 123 4567',
                'address' => 'Bulevar Mihajla Pupina 10',
                'city' => 'Belgrade',
                'postal_code' => '11000',
                'country' => 'Serbia',
                'social_links' => [
                    'instagram' => 'https://instagram.com/celios',
                    'linkedin' => 'https://linkedin.com/company/celios',
                    'github' => 'https://github.com/celios',
                ],
                'default_locale' => 'sr',
                'supported_locales' => ['sr', 'en', 'it'],
                'default_currency' => 'EUR',
                'supported_currencies' => ['EUR', 'RSD', 'USD'],
                'currency_symbol_position' => 'after',
                'is_default' => true,
                'is_active' => true,
            ]
        );
    }
}
