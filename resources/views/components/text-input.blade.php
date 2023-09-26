<div class="relative">
    @if($formRef)
        <button type="button" class="absolute top-0 right-0 flex h-full items-center pr-2"
                @click="$refs['input-{{ $name }}'].value = ''; $refs['{{ $formRef }}'].submit();"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-slate-500 hover:text-slate-700">
                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
            </svg>
        </button>
    @endif
    <input
        x-ref="input-{{ $name }}"
        class="w-full rounded-md border-0 pr-8 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2"
           type="text" placeholder="{{$placeholder}}"
           name="{{$name}}"
           id="{{$name}}"
           value="{{$value}}"
    />
</div>

