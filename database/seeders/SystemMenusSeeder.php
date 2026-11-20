<?php

namespace Database\Seeders;

use Celios\Core\Models\Menu;
use Illuminate\Database\Seeder;

class SystemMenusSeeder extends Seeder
{
    public function run(): void
    {
        $systemMenus = [
            'header' => 'Glavna navigacija (Header)',
            'footer' => 'Podnožje (Footer)',
        ];

        foreach ($systemMenus as $key => $name) {
            Menu::firstOrCreate(
                ['key' => $key],
                ['name' => $name]
            );
        }
    }
}
