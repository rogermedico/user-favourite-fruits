<?php

namespace Tests\Feature;

use App\Services\FruitService;
use Tests\Feature\MockInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FruitServiceTest extends TestCase
{
    public function testUserFavouriteFruitsReturnCorrectValues()
    {
        $fruitService = new FruitService;

        $this->assertEquals(
            [
                'roger' => '🍊',
                'magda' => '🍒',
                'yuno' => '🍌',
                'arya' => '🍉',
                'charlie' => '🍍'
            ], 
            $fruitService->userFavouriteFruits()
    );
    }
}
