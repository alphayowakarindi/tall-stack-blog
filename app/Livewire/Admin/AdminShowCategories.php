<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AdminShowCategories extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.admin-show-categories');
    }
}
