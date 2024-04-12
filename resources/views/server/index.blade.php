@extends('layouts.app')

@section('content')
    <header class="flex items-center justify-between w-full max-w-[1100px]">
        <h1 class="uppercase text-3xl font-bold text-slate-950">Servidores</h1>
        @include('components.navbar-user')
    </header>
    <form action=""
        class="focus-within:border-blue-500 h-9 flex rounded-xl bg-white border border-slate-300 items-center w-full max-w-[1100px]">
        <figure class="size-9 flex items-center justify-center roundex-l-xl">
            <x-tabler-search class="size-3.5" />
        </figure>
        <input class="outline-none h-full w-full px-2.5 placeholder:text-slate-500 text-slate-950" type="text"
            placeholder="Buscar servidor..." name="search" id="search">
        <button id="clear" type="button" class="size-9 flex items-center justify-center rounded-r-xl opacity-0">
            <x-tabler-x class="size-3.5 text-blue-500" />
        </button>
    </form>
    <section class="flex flex-wrap justify-between py-9 max-w-[1000px] w-full gap-5">
        @for ($i = 0; $i < 10; $i++)
            <section
                class="mx-auto group flex flex-col gap-5 p-5 bg-white border border-slate-300 max-w-80 w-full rounded-xl">
                <header class="flex items-center justify-between w-full">
                    <aside class="flex flex-col gap-0.5">
                        <a href="#"
                            class="group-hover:text-blue-500 group-hover:decoration-blue-500 underline decoration-transparent text-base font-medium text-slate-950">
                            Nombre del servidor
                        </a>
                        <p class="text-xs text-slate-500">Dirección del servidor</p>
                    </aside>
                    <button class="size-9 flex justify-center items-center rounded-md hover:bg-slate-100 transition-all">
                        <x-tabler-dots-vertical class="size-5 text-slate-500" />
                    </button>
                </header>
                <p class="text-slate-700 px-5 py-1 bg-slate-100 rounded-lg w-fit">89.321.45.238</p>
            </section>
        @endfor
    </section>
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
