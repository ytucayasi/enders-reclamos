<?php

namespace App\Livewire\Reclamos;

use App\Models\Reclamo;
use Livewire\Component;
use Livewire\WithPagination;

class ReclamoList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.reclamos.reclamo-list', [
            'reclamos' => Reclamo::latest()->paginate(10)
        ]);
    }
}
