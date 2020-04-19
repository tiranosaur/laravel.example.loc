<?php

namespace App\Http\Controllers;

use App\Jobs\MyTestJob;

class MainController extends Controller
{
    public function index()
    {
//        MyTestJob::dispatch(5)->delay(Carbon::now()->addMinute(1)); //with delay
//        $jobId =
//            app(Dispatcher::class)->dispatch((new MyTestJob(5))
//                ->onQueue(config('queue.queues.myTestWorker')));
        $jobId = $this->dispatch((new MyTestJob(5))->onQueue(config('queue.queues.myTestWorker')));
//        return response()->json(['jobId' => $jobId->id]);
        return response()->json(['jobId' => $jobId->getId()]);
    }
}
