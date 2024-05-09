<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PurchaseRequest;
use App\Models\Pay;

class PurchaseController extends Controller
{
    public function purchase(PurchaseRequest $request)
    {
        $pay = new Pay();
        $pay->card_number = $request->input('card_number');
        $pay->expiration_date = $request->input('expiration_date');
        $pay->cvv = $request->input('cvv');
        $pay->name = $request->input('name');
        $pay->save();
        return redirect()->route('contact-page')->with('succes', 'Успешная операция!');
    }
    public function allData(){
        $purchase = new Pay;
        return view('massages',['data'=>Pay::all()]);
        // dd($purchase->all());
    }

    public function detailMassage($id){
        $pay = new Pay;
        return view('detail-massage',['data'=>$pay->find($id)]);
    }




    // public function updateMassage($id){
    //     $pay = new Pay;
    //     return view('update-massage', ['id' => $id]);
    // }

    public function updateMassage($id){
        $pay = new Pay;
        return view('update-massage', ['data'=>$pay->find($id)], ['id' => $id]);
     }
     



    public function updateMassageSubmit($id, PurchaseRequest $request)
    {
        $pay = Pay::find($id);
        $pay->card_number = $request->input('card_number');
        $pay->expiration_date = $request->input('expiration_date');
        $pay->cvv = $request->input('cvv');
        $pay->name = $request->input('name');
        $pay->save();
        return redirect()->route('purchase-detail', $id)->with('success', 'Успешная операция!');

    }
    



    
    public function deleteMassage($id)
    {
        Pay::find($id)->delete();
        return redirect()->route('purchase-data')->with('success', 'Successfully deleted');
    }
}
