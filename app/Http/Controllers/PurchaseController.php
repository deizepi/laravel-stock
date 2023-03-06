<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Http\Requests\PurchaseRequest;

class PurchaseController extends Controller {
    
    public function index()
    {
        $purchases = Purchase::get();

    	return view('purchases.index', compact('purchases'));
    }

    public function create()
    {
        $products = \App\Product::get();
        $suppliers = \App\Supplier::get();

    	return view('purchases.create', compact('products', 'suppliers'));
    }

    public function store(PurchaseRequest $request)
    {        
    	$purchase = new Purchase;

        $purchase->addPurchase($request->only([
            'product_id',
            'quantity',
            'purchase_date',
            'supplier_id'
        ]));

        session()->flash('message', 'Purchase data added successfully');

        return redirect('purchase');
    }

    public function edit(Purchase $purchase)
    {
        $products = \App\Product::get();
        $suppliers = \App\Supplier::get();

        return view('purchases.edit', compact('purchase', 'products', 'suppliers'));
    }

    public function update(PurchaseRequest $request, Purchase $purchase)
    {
        $purchase->update($request->only([
            'product_id',
            'quantity',
            'purchase_date',
            'supplier_id'
        ]));

        session()->flash('message', 'Purchase data successfully updated');

        return redirect('purchase');
    }

    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        session()->flash('message', 'Purchase data successfully deleted');

        return redirect('purchase');
    }
}
