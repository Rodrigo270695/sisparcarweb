<?php

namespace App\Http\Livewire\Admin;

use App\Models\Rate;
use Livewire\Component;
use Livewire\withPagination;

class ratesIndex extends Component
{

    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $rates = Rate::select('rates.id','rates.precio_hora','rates.precio_dia','vehicles.descripcion as descripcion')
        ->join('vehicles','vehicles.id','=','rates.vehicle_id')
        ->where('vehicles.descripcion','like','%'.$this->search.'%')->paginate(5);
        /* $vehicles = Vehicle::all(); */
        return view('livewire.admin.rates-index', compact("rates"));
    }
}
