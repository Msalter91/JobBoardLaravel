{{-- Uses out layout and card as a component that fits in the slot section of layout --}}
<x-layout>
    @foreach($jobs as $job)
        <x-job-card class="mb-4" :job="$job">
                <div>
                    {{--                When passing things like href to components we need this : based syntax followed by a php expression--}}
                    <x-link-button :href="route('jobs.show', $job)">
                        ...More
                    </x-link-button>
                </div>
        </x-job-card>
    @endforeach
</x-layout>
