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
     * Display a listing of all active loyalty cards.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return loyaltyCardIndexResource::collection(
            loyaltyCard::all()->where('status', 'Active')
        );
    }

    /**
     * Display the specified loyalty card using the ID parameter.
     *
     * @param int $id
     * @return loyaltyCardShowResource
     */
    public function show(int $id): loyaltyCardShowResource
    {
        return new loyaltyCardShowResource(loyaltyCard::findOrFail($id));
    }

    /**
     * Store a newly created loyalty card in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:191',
            'description' => 'required|max:191',
            'reward' => 'required|max:191',
            'progressMethod' => 'required|max:191',
            'logoPosition' => 'required',
            'logoShape' => 'required',
            'stampsRequired' => 'required|in:0,1,2,3,4,5,6,7,8,9,10',
            'stampSlots' => 'required|in:5,10',
            'backgroundColour' => 'required',
            'fontColour' => 'required',
            'status' => 'required',
            'slotOne' => 'required|in:0,1,2,3',
            'slotTwo' => 'required|in:0,1,2,3',
            'slotThree' => 'required|in:0,1,2,3',
            'slotFour' => 'required|in:0,1,2,3',
            'slotFive' => 'required|in:0,1,2,3',
            'slotSix' => 'required|in:0,1,2,3',
            'slotSeven' => 'required|in:0,1,2,3',
            'slotEight' => 'required|in:0,1,2,3',
            'slotNine' => 'required|in:0,1,2,3',
            'slotTen' => 'required|in:0,1,2,3',
        ]);

        // $user = auth()->user();

        $card = loyaltyCard::make($data);

        // Get user ID of who created card
        // $card->createdBy_id = $user->id
        // $card->createdBy_Name = $user->fullName

        $card->save();

        return $card;
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
