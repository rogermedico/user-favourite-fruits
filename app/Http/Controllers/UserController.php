<?php

namespace App\Http\Controllers;

use App\Services\FruitService;

class UserController extends Controller
{
    public function index(FruitService $fruitService)
    {
        // incorrect
        $fruitService = new FruitService();
        $userFavouriteFruits = $fruitService->userFavouriteFruits();

        // correct
        // $userFavouriteFruits = $fruitService->userFavouriteFruits();

        // correct
        // $userFavouriteFruits = app(FruitService::class)->userFavouriteFruits();

        return view(
            'user_favourite_fruits', 
            compact('userFavouriteFruits')
        );
    }

    //...
}
