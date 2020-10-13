<?php

namespace App\Http\Controllers;

use App\Broker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BrokerController extends Controller
{
    public function get()
    {
        print_r($tables = DB::select('SELECT count(id) as count FROM brokers'));
    }

    public function add()
    {
        return view('broker/add');
    }

    public function store(Request $request)
    {
        /*
         * 0 - общие брокеры
         * 1 - mt_brokers
         * 2 - cfd_gold_brokers
         * 3 - ecn_brokers
         * 4 - oil_brokers
         * 5 - institutional_brokers
         * 6 - swap_brokers
         */
        $data = $request->toArray();
        if ($request->file('img')) {
            $filename    = $request->img->getClientOriginalName();  //$request->img->hashName();
            $data['img'] = 'upload/brokers/' . $filename;
            $request->file('img')->move(storage_path('upload/brokers'), $filename);
        }
        if ($request->file('img_thumb')) {
            $filename          = $request->img_thumb->getClientOriginalName();   //$request->img_thumb->hashName();
            $data['img_thumb'] = 'upload/brokers/' . $filename;
            $request->file('img_thumb')->move(storage_path('upload/brokers'), $filename);
        }
        $data['text_en']    = json_encode(
            [
                "start"       => $request->json_en_start,
                "country"     => $request->json_en_country,
                "manage"      => $request->json_en_manage,
                "pay"         => $request->json_en_pay,
                "min_account" => $request->json_en_min_account,
                "min_lot"     => $request->json_en_min_lot,
                "leverage"    => $request->json_en_leverage,
                "spreads"     => $request->json_en_spreads,
                "text"        => $request->json_en_text,
            ]
        );
        $data['text']       = json_encode(
            [
                "start"       => $request->json_ru_start,
                "country"     => $request->json_ru_country,
                "manage"      => $request->json_ru_manage,
                "pay"         => $request->json_ru_pay,
                "min_account" => $request->json_ru_min_account,
                "min_lot"     => $request->json_ru_min_lot,
                "leverage"    => $request->json_ru_leverage,
                "spreads"     => $request->json_ru_spreads,
                "text"        => $request->json_ru_text,
            ]
        );
        $data['text'] = iconv("UTF-8", "koi8-r", $data['text']);
        $data['close_date'] = Carbon::now();
        Broker::create($data);
    }
}
