<?php

namespace App\Http\Livewire\Admin;

use App\Models\Vehicle;
use Livewire\Component;
use Livewire\withPagination;

class VehiclesIndex extends Component
{

    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $vehicles = Vehicle::where('descripcion','like','%'.$this->search.'%')->paginate(5);
        return view('livewire.admin.vehicles-index', compact("vehicles"));
    }
}
