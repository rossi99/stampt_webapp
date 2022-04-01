<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class loyaltyCardShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            // card info return
            'id' => $this->id,
            'title' => $this->cardTitle,
            'description' => $this->cardDesc,
            'reward' => $this->cardReward,
            'stampsRequired' => $this->cardStampsRequired,
            'progressMethod' => $this->cardProgressMethod,
            'status' => $this->cardStatus,

            // card layout return
            'background' => $this->cardBackgroundColour,
            'font' => $this->cardFontColour,
            'logoPosition' => $this->cardLogoPosition,
            'logoShape' => $this->cardLogoShape,
            'numOfStamps' => $this->cardNumOfStamps,
            'slotOne' => $this->cardSlotOne,
            'slotTwo' => $this->cardSlotTwo,
            'slotThree' => $this->cardSlotThree,
            'slotFour' => $this->cardSlotFour,
            'slotFive' => $this->cardSlotFive,
            'slotSix' => $this->cardSlotSix,
            'slotSeven' => $this->cardSlotSeven,
            'slotEight' => $this->cardSlotEight,
            'slotNine' => $this->cardSlotNine,
            'slotTen' => $this->cardSlotTen
        ];
    }
}
