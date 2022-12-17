<?php

namespace App\Http\Livewire\Admin;

use App\Models\Rol;
use Livewire\Component;
use Livewire\withPagination;

class RolsIndex extends Component
{

    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $rols = Rol::where('descripcion','like','%'.$this->search.'%')->paginate(5);
        return view('livewire.admin.rols-index', compact("rols"));
    }
}
