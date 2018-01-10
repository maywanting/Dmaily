<?php namespace App\Repositories;

use App\Models\MoneyListModel;
use App\Models\MoneySettingModel;

class MoneyRepository {
    protected $moneyList;
    protected $moneySetting;

    public function __construct(MoneyListModel $moneyList, MoneySettingModel $moneySetting) {
        $this->moneyList = $moneyList;
        $this->moneySetting = $moneySetting;
    }
}
