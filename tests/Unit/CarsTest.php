<?php

namespace Tests\Unit;

use App\Cars;
use PHPUnit\Framework\Constraint\IsType;
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
        $car = Cars::find(5);
        $car->year='2000';
        $this->assertTrue($car->save());
    }
    public function testDeleteCar()
    {
        $car= Cars::find(15);
        $this->assertTrue($car->delete());
    }
    public function testCountCar()
    {
        $car=Cars::all();
        $count=$car->count();
        $this->assertTrue($count==50);
    }
    public function testCarYear()
{
        $user=Cars::find(6);
        $this->assertInternalType(IsType::TYPE_INT,$user->year);
    }
    public function testModelType(){
        $user=Cars::find(9);
        $this->assertInternalType(IsType::TYPE_STRING,$user->model);
    }
    public function testMakeType(){
        $user=Cars::find(9);
        $this->assertInternalType(IsType::TYPE_ARRAY,$user->model);
    }
}
