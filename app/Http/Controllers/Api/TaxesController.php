<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\TaxRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Tax;

/**
 * @resource Taxes
 *
 * Class TaxesController
 *
 * @package App\Http\Controllers\Api
 * @athor Pierre Silva <pierremichelsilva@gmail.com>
 */
class TaxesController extends Controller
{
    /**
     * Index
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $taxes = Tax::paginate(10);
        return $taxes;
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
    public function store(TaxRequest $request)
    {
        //
        $tax = new Tax();
        $tax->create($request->all());

        return response([
            'message' => 'El impuesto se creo con exito!',
            'data' => $tax,
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
    public function update(TaxRequest $request, $id)
    {
        //
        $tax = Tax::find($id)->update($request->all());

        return response([
            'message' => 'El impuesto se actualizo con exito!',
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
        Tax::destroy($id);

        return response([
            'message' => 'El impuesto se elimino con exito!',
        ], 200);
    }
}
