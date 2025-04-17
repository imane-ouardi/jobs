<x-layout>
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
    
        <x-forms.form action="/search" class="mt-6">
            <div class="bg-white flex px-1 py-1 rounded-full border border-orange-500 overflow-hidden max-w-md mx-auto justify-between">
                <x-forms.input 
                    :label="false" 
                    name="q" 
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
                <x-tag :$tag />
            @endforeach
        </div>
    </section>
    <section class="mt-6">
        <x-page-heading>Results</x-page-heading>

        <div class="space-y-6">
            @foreach($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        </div>
    </section>
</x-layout>
