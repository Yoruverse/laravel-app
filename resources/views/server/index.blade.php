@extends('layouts.app')

@section('content')
    <header class="flex items-center justify-between w-full max-w-[1100px]">
        <h1 class="uppercase text-3xl font-bold text-slate-950">Servidores</h1>
        @include('components.navbar-user')
    </header>
    <form action=""
        class="focus-within:border-blue-500 h-9 flex rounded-xl bg-white border border-slate-200 items-center w-full max-w-[1100px]">
        <figure class="size-9 flex items-center justify-center roundex-l-xl">
            <x-tabler-search class="size-3.5" />
        </figure>
        <input class="outline-none h-full w-full px-2.5 placeholder:text-slate-500 text-slate-950" type="text"
            placeholder="Buscar servidor..." name="search" id="search">
        <button id="clear" type="button" class="size-9 flex items-center justify-center rounded-r-xl opacity-0">
            <x-tabler-x class="size-3.5 text-blue-500" />
        </button>
    </form>
    <script>
        const search = document.getElementById('search');
        const clear = document.getElementById('clear');

        search.addEventListener('input', () => {

            if (search.value.length > 0) {
                clear.classList.add('opacity-100');
                clear.classList.remove('opacity-0');
            } else {
                clear.classList.add('opacity-0');
                clear.classList.remove('opacity-100');
            }
        });

        clear.addEventListener('click', () => {
            search.value = '';
            clear.classList.add('opacity-0');
            clear.classList.remove('opacity-100');
        });
    </script>
@endsection
