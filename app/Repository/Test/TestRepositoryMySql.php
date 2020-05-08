<?php


namespace App\Repository\Test;


use App\Author;

class TestRepositoryMySql implements TestRepositoryInterface
{

    public function getByName(string $name)
    {
       return Author::with('foo')->where('name', 'like', 'a%')->get();
    }
}
