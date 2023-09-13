{{-- Uses out layout and card as a component that fits in the slot section of layout --}}
<x-layout>
    @foreach($jobs as $job)
        <x-card class="mb-4">
            <div class="flex justify-between mb-2">
                <h2 class="text-lg font-medium">{{ $job->title }}</h2>
                <div class="text-sm text-slate-500">{{"£" . number_format($job->salary)}}</div>
            </div>
            <div class="mb-4 flex items-center justify-between text-sm text-slate-500">
                <div class="flex space-x-4">
                    <div>
                        Company Name
                    </div>
                    <div>
                        {{ $job->location }}
                    </div>
                </div>
                <div class="flex space-x-1 text-xs">
                    <div class="rounded-md border px-2 py-1">
                        {{ ucfirst($job->experience) }}
                    </div>
                    <div class="rounded-md border px-2 py-1">
                        {{ $job->category }}
                    </div>
                </div>
            </div>
            <p>
                {!! nl2br(e($job->description)) !!}
            </p>

        </x-card>
    @endforeach
</x-layout>
