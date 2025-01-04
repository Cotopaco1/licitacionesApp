<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierStoreRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public static function store(SupplierStoreRequest $request){

        $validated = $request->validated();

        $supplier = Supplier::create($validated);

        return response([
            'supplier' => $supplier
        ]);
    }
}
