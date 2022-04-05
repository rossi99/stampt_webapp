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
            'title' => $this->title,
            'description' => $this->description,
            'reward' => $this->reward,
            'progressMethod' => $this->progressMethod,
            'stampsRequired' => $this->stampsRequired,
            'status' => $this->status,

            // card layout return
            'backgroundColour' => $this->backgroundColour,
            'fontColour' => $this->fontColour,
            'logoPosition' => $this->logoPosition,
            'logoShape' => $this->logoShape,
            'stampSlots' => $this->stampSlots,
            'slotOne' => $this->slotOne,
            'slotTwo' => $this->slotTwo,
            'slotThree' => $this->slotThree,
            'slotFour' => $this->slotFour,
            'slotFive' => $this->slotFive,
            'slotSix' => $this->slotSix,
            'slotSeven' => $this->slotSeven,
            'slotEight' => $this->slotEight,
            'slotNine' => $this->slotNine,
            'slotTen' => $this->slotTen
        ];
    }
}
