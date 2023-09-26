<x-layout>
{{--    We're going to pass the breadcrums an array of links to use so that the nav is configurable--}}
<x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#' ]" />
    <x-job-card :job="$job">
        <p class="mb-4 text-sm text-slate-500">
            {!! nl2br(e($job->description)) !!}
        </p>
    </x-job-card>
</x-layout>
