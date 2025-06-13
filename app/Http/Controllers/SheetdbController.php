<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;

class SheetdbController extends Controller
{
    public function index(Request $request)
    {
        $sheetdb = new SheetDB('d48ol7yqgt7k0');
        $data = collect($sheetdb->get());
        $paginatedData = paginate($data, 100, null, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);


        $sheetdb1 = new SheetDB('x7304qg0ccpzu');
        $dataasuransi = collect($sheetdb1->get());
        $dataasuransi = $dataasuransi->filter(function ($row) {
            return !empty($row->apname) && !empty($row->hp) && !empty($row->napel);
        });
        $paginated = paginate($dataasuransi, 100, null, [
            'path' => $request->url(),
            'query' => $request ->query()
        ]);

        // apname down dari datasuransi
        $apnameharian = $data->pluck('AP_NAME')->filter()->unique();
        $filterdatadown = $dataasuransi->filter(function($item) use ($apnameharian){
            return isset($item->apname) && $apnameharian->contains($item->apname);
        });

        $paginatedfilterapdown = paginate($filterdatadown, 100, null, [
            'path' =>$request->url(),
            'query' =>$request->query(),
        ]);
        //dd($filterdata);


        // apname up dari datasuransi
        $filterdataup = $dataasuransi->filter(function($item) use ($apnameharian){
            return isset($item->apname) && !$apnameharian->contains($item->apname);
        });

        $paginatedfilterapup = paginate($filterdataup, 100, null, [
            'path' =>$request->url(),
            'query' =>$request->query(),
        ]);
        //dd($paginatedfilterapdown);

        return view('welcome', [
            'data' => $paginatedData,
            'dataasuransi' => $paginated,
            'datagaul' => $paginatedfilterapdown,
            'dataup' => $paginatedfilterapup
        ]);
    }
}
