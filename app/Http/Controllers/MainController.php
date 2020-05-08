<?php

namespace App\Http\Controllers;

use App\Service\TestService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function index(){
       return response()->json($this->testService->gbn())   ;
   }
}
