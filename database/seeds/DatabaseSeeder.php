<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('MoneySettingTableSeeder');
        Model::reguard();
    }
}

class MoneySettingTableSeeder extends Seeder {
    public function run() {
        $setting = [
            'CNY' => '人民币',
            'JPY' => '日元'
        ];
        DB::table('money_setting')->insert(['name' => 'moneyType', 'settings' => json_encode($setting)]);
    }
}
