<?php


namespace App\Service;


use App\Repository\Test\TestRepositoryInterface;
use App\Repository\Test\TestRepositoryMySql;

class TestService
{
    private $testRepo;

    /**
     * TestService constructor.
     * @param $testRepo
     */
    public function __construct(TestRepositoryMySql $testRepo)
    {
        $this->testRepo = $testRepo;
    }

    public function gbn(){
       return $this->testRepo->getByName('a');
    }
}
