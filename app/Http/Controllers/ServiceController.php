<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Service;
use App\Models\Warranty;
use Illuminate\Http\Request;
use Kavenegar;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request  $request)
    {


        $warranty = $request->get("warranty");
        //dd($warranty); haji okaye damt garm fahmidam chi shod

        $product = Product::where('warranty_serial', $warranty)->first();
        $query = [
            'owner_id' => $product->owner_id,
            'product_id' => $product->id,
            'description' => $product->desciption,
            'Date_of_referral_for_repair' => null,
            'The_date_of_leaving_the_repair_shop' => null
        ];
        Service::get_create($query);
        try{
            $sender = "10004346";		//This is the Sender number

            $message = "خدمات پیام کوتاه کاوه نگار";		//The body of SMS

            $receptor = "09336395637";			//Receptors numbers

            $result =Kavenegar::send($sender,$receptor,$message);
            if($result){
                foreach($result as $r){
                    echo "messageid = $r->messageid";
                    echo "message = $r->message";
                    echo "status = $r->status";
                    echo "statustext = $r->statustext";
                    echo "sender = $r->sender";
                    echo "receptor = $r->receptor";
                    echo "date = $r->date";
                    echo "cost = $r->cost";
                }
            }
        }
        catch(\Kavenegar\Exceptions\ApiException $e){
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            echo $e->errorMessage();
        }
        catch(\Kavenegar\Exceptions\HttpException $e){
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            echo $e->errorMessage();
        }catch(\Exceptions $ex){
           // در صورت بروز خطایی دیگر
            echo $ex->getMessage();
        }





        return view('welcome');



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $warranty)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $warranty)
    {

       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }

}
