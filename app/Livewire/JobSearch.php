<?php

namespace App\Livewire;

use App\Models\Job;
use App\Models\Tag;
use Livewire\Attributes\Layout;
use Livewire\Component;

class JobSearch extends Component
{

    public $searchQuery;



    #[Layout('components.layout')]
    public function render()
    {
        $jobs = Job::latest()
                    ->with(['employer', 'tags'])
                    ->where('title', 'LIKE', '%'. $this->searchQuery .'%')
                    ->get()
                    ->groupBy('featured');

        return view('livewire.job-search', [
            'jobs' => $jobs[0] ?? collect(),
            'featuredJobs' => $jobs[1] ?? collect(),
            'tags' => Tag::all(),
        ]);
    }
}
