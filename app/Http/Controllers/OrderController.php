<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipment;
use App\Models\Shoe;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function add($id) {
        $shoe = Shoe::find($id);
        $shipments = Shipment::all();
        return view('addOrder', compact('shoe', 'shipments'));
    }

    function add1(Request $request) {
        $request->validate([
            'ShoesId' => ['required'],
            'ShipmentId' => ['required'],
            'CustomerName' => ['required'],
            'Destination' => ['required'],
            'Quantity' => ['required']
        ]);

        $shoe = Shoe::find($request->ShoesId);
        $TotalPrice = $request->Quantity*$shoe->Price;

        $shipment = Shipment::find($request->ShipmentId);
        $divide = (integer) $request->Quantity/$shipment->MaxQuantity;
        $remain = $request->Quantity%$shipment->MaxQuantity;

        $TotalPrice = $TotalPrice+$shipment->Cost*$divide;
        if($remain > 0) {
            $TotalPrice += $shipment->Cost;
        }

        Order::create([
            'ShoesId' => $request->ShoesId,
            'ShipmentId' => $request->ShipmentId,
            'CustomerName' => $request->CustomerName,
            'Destination' => $request->Destination,
            'Quantity' => $request->Quantity,
            'TotalPrice' => $TotalPrice
        ]);

        return redirect('/product');
    }
}
