<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testCarInsert()
    {
        $car=new Cars();
        $car->make='honda';
        $car->model='civic';
        $car->year='1996';
        $this->assertTrue($car->save());
    }
    public function testCarYearUpdate()
    {
        $car=Cars::find(5);
        $car->year='2000';
        $this->assertTrue($car->save());
    }
    public function testDeleteCar()
    {
        $car= User::find(15);
        $this->assertTrue($car->delete());
    }
    public function testCountCar()
    {
        $car=User::all();
        $count=$car->count();
        $this->assertTrue($count==50);
    }
}
