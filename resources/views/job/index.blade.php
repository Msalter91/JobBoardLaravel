{{-- Uses out layout and card as a component that fits in the slot section of layout --}}
<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />
    <x-card class="mb-4 text-sm" x-data="">
        <form action="{{route('jobs.index')}}" method="GET" id="filteringForm" x-ref="filters">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">
                        Search
                    </div>
                    <x-text-input name="search" value="{{request('search')}}" placeholder="Search" form-ref="filters"/>
                </div>
                <div>
                    <div class="mb-1 font-semibold">
                        Salary
                    </div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="{{request('min_salary')}}" placeholder="From" form-ref="filters"/>
                        <x-text-input name="max_salary" value="{{request('max_salary')}}" placeholder="To" form-ref="filters"/>
                    </div>
                </div>
                <div>
                    <div class="font-semibold mb-1">Experience</div>

                    <x-radio-group name="experience" :options="\App\Models\Job::$experience">

                    </x-radio-group>
                </div>

                <div>
                    <div class="font-semibold mb-1">Category</div>
                    <x-radio-group name="category" :options="\App\Models\Job::$categories">

                    </x-radio-group>
                </div>
            </div>
            <x-button class="w-full">
                Filter
            </x-button>
        </form>
    </x-card>
    @foreach($jobs as $job)
        <x-job-card class="mb-4" :job="$job">
                <div>
                    {{--                When passing things like href to components we need this : based syntax followed by a php expression--}}
                    <x-link-button :href="route('jobs.show', $job)">
                        More...
                    </x-link-button>
                </div>
        </x-job-card>
    @endforeach
</x-layout>
