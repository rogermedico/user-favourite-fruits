<?php

namespace Tests\Feature;

use App\Services\FruitService;
use App\Http\Controllers\UserController;
use Tests\Feature\MockInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function testUserFavouriteFruitsRouteReturnsCorrectViewWithCorrectParameter()
    {
        // Why we are mocking FruitService? because we are testing the controller, not the service.
        $this->partialMock(FruitService::class, function ($fruitServicePartialMock) {
            $fruitServicePartialMock->shouldReceive('userFavouriteFruits')
                ->andReturn(['roger'=> '🍇']);
        });

        $this->get('userfavouritefruits')
            ->assertViewIs('user_favourite_fruits')
            ->assertViewHas('userFavouriteFruits', ['roger' => '🍇'])
            ->assertSee('roger loves 🍇')
            ->assertDontSee('roger loves 🍊')
            ->assertOk();

    }
}
