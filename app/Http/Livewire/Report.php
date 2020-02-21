<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\County;
use App\SubCounty;
use App\PoliceStation;
class Report extends Component
{
  public $counties;
  public $subcounties;
  public $stations;
  public $description;
  public $area;
  public $county;
  public $subcounty;
  public $title;
  public $type;


public function mount(){
  //get the counties
  $this->counties=County::all()->toArray();
  $this->subcounties=SubCounty::all()->toArray();
  $this->stations=PoliceStation::all()->toArray();

}

public function submit() {
  dd("yes");
}
    public function render()
    {
        return view('livewire.report');
    }


}
