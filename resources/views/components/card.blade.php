{{--Attributes merge allows us to have a default set of classes
(or any attribute that we can then stick on them) and it will merge this with the x-component declaration --}}
<article {{$attributes->merge(['class'=>'rounded-md border-2 border-slate-300 bg-white p-4 shadow-sm'])}}>
    {{ $slot }}
</article>
