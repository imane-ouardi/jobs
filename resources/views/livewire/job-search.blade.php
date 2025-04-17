
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
        
            <x-forms.form class="mt-6">
                <div class="bg-white flex px-1 py-1 rounded-full border border-orange-500 overflow-hidden max-w-md mx-auto justify-between">
                    <x-forms.input 
                        :label="false" 
                        name="q" 
                        wire:model="searchQuery"
                        placeholder="Web Developer..." 
                        class="w-full outline-none bg-white pl-4 text-sm border-none shadow-none" 
                    />
                    <button type='submit'
                        class="bg-orange-600 hover:bg-orange-700 transition-all text-white text-sm rounded-full px-5 py-2.5">
                        Search
                    </button>
                </div>
            </x-forms.form>

            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag wire:model="tagsQuery" />
                @endforeach
            </div>
        </section>
    
       
        

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

      

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>

    {{-- @foreach($tags as $tag)
        <input type="hidden" name="tags[]" value="{{ $tag->id }}">
    @endforeach --}}
