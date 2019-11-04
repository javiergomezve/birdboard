<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_user_has_projects()
    {
        $user = factory('App\User')->create();

        $this->assertInstanceOf(HasMany::class, $user->projects());
    }
}
