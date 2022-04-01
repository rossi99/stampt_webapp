<?php

namespace App\Http\Controllers;

use App\Http\Resources\loyaltyCardIndexResource;
use App\Http\Resources\loyaltyCardShowResource;
use App\Models\loyaltyCard;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class loyaltyCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return loyaltyCardIndexResource::collection(
            loyaltyCard::all()->where('cardStatus', 'Active')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return loyaltyCardShowResource
     */
    public function show(int $id): loyaltyCardShowResource
    {
        return new loyaltyCardShowResource(loyaltyCard::findOrFail($id));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
