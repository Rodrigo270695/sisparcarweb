<?php

namespace App\Http\Livewire\Admin;

use App\Models\Entry;
use Livewire\Component;
use Livewire\withPagination;

class EntriesIndex extends Component
{

    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $entries = Entry::select('entries.id','entries.placa','entries.fecha_ingreso','entries.fecha_salida','entries.monto','vehicles.descripcion as descripcion')
        ->join('rates','rates.id','=','entries.rate_id')
        ->join('vehicles','vehicles.id','=','rates.vehicle_id')
        ->where('vehicles.descripcion','like','%'.$this->search.'%')->paginate(5);
        return view('livewire.admin.entries-index', compact("entries"));
    }
}
