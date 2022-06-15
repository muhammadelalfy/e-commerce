<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_local' => 'ar',
            'default_timezone' => 'Africa/Cairo',
            'reviews_enabled' => true,
            'auto_approve_review' => true,
            'supported_currencies' => ['USD' , 'LE' , 'SAR'],
            'default_currency' => 'USD',
            'store_email' => 'admin@ecommerce.com',
            'search_engin' => 'mysql',
            'local_shipping_cost' => 0,
            'outer_shipping_cost' => 0,
            'free_shipping_cost' => 0,
            'translatable' => [
                'store_name' => 'muhamad store',
                'free_shipping_label' => 'free shipping',
                'local_label' => 'local_shipping',
                'outer_label' => 'outer_label'
            ]


        ]);
    }
}
