<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Http\Requests\InquiryRequest;

class TestController extends Controller
{
    public function index(){
        return view('index');
    }
    public function index2(Request $request){
        $items = $request->all();
        Inquiry::create($items);
        $aa = [
            'aa' => "dd",
        ];
        return view('thanks',$aa);
    }
}