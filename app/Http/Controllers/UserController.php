<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FruitService;

class UserController extends Controller
{
    public function index(FruitService $fruitService)
    {
        $userFavouriteFruits = (new FruitService)->userFavouriteFruits();

        return view(
            'user_favourite_fruits', 
            compact('userFavouriteFruits')
        );
    }

    //...
}
