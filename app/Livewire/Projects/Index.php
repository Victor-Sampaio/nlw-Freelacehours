<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

use function Pest\Laravel\get;

class Index extends Component
{
    public function render()
    {
        
        // dd($projects);
        return view('livewire.projects.index');
    }

    #[Computed()]

    public function projects()
    {
        return Project::query()->inRandomOrder()->get();
    }
}
