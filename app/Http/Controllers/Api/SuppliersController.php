<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supplier;
use App\Http\Requests\Api\SupplierCreateRequest;


use App\Http\Requests\Api\SupplierUpdateRequest;



/**
 * @resource Suppliers
 *
 * Recurso para manejar la tabla suppliers
 *
 * @author Pierre Silva <pierremichelsilva@gmail.com>
 * @package Inventory
 */
class SuppliersController extends Controller
{
    /**
     * Index
     *
     * Retorna un listado de todos los proveedores en formato JSON
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suppliers = Supplier::paginate(10);

        return $suppliers;
    }

    /**
     * Create
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store
     *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierCreateRequest $request)
    {
        //
        $supplier = new Supplier();
        $supplier->create($request->all());

        return response([
            'message' => 'El proveedor se creo con exito!',
        ], 200);
    }

    /**
     * Show
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $supplier = Supplier::find($id);
        return $supplier;
    }

    /**
     * Edit
     *
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierUpdateRequest $request, $id)
    {
        //
        Supplier::find($id)->update($request->all());
        return response([
            'message' => 'El proveedor se actualizo con exito!',
        ], 200);

    }

    /**
     * Destroy
     *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Supplier::destroy($id);
         return response([
            'message' => 'El proveedor se elimino con exito!',
        ], 200);
    }
}
