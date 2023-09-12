{{-- Uses out layout and card as a component that fits in the slot section of layout --}}
<x-layout>
    @foreach($jobs as $job)
        <x-card class="mb-4">
            {{ $job->title }}
        </x-card>
    @endforeach
</x-layout>
