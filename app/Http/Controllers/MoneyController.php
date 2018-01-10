<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MoneyRepository;

class MoneyController extends Controller
{
    private $class;

    public function __construct(MoneyRepository $class) {
        $this->class = $class;
    }

    public function index() {
        return view('moneySetting');
    }
}
