<?php

namespace Tests\Unit;

use Hamcrest\Type\IsInteger;
use PHPUnit\Framework\Constraint\IsType;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
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
    public function testUserTest()
    {
        $user=new User();
        $user->name='john';
        $user->email='abcdsaef@gmail.com';
        $user->password='$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm';
        $user->remember_token=str_random(10);
        $this->assertTrue($user->save());
    }
    public function testUpdateUser()
    {
        $user= User::find(26);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertTrue($user->update());
    }
//    public function testDeleteUser()
//    {
//        $user= User::find(15);
//        dd($user);
//        $this->assertTrue($user->delete());
//    }
//        public function testCountUser(){
//        $user=User::all();
//
//        $count=$user->count();
//
//            $this->assertTrue($count==50);
//        }

}
