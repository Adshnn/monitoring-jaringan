<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SheetDB\SheetDB;

class SheetdbController extends Controller
{
    public function getharian(){
        $sheetdb = new SheetDB('d48ol7yqgt7k0');
        //dd($sheetdb->get()); 
        $data = $sheetdb->get();
        
        return view('welcome', compact('data'));

    }

    public function getAsuransi(){
        $sheetdb = new SheetDB('x7304qg0ccpzu');
        $datasuransi = $sheetdb->get();
        return view('sheet.dataharian', compact('datasuransi'));
    }

}
