@extends('layouts.app')

@section('content')
    <header class="flex items-center justify-between w-full max-w-[1100px]">
        <h1 class="uppercase text-3xl font-bold text-slate-950">Panel de control</h1>
        @include('components.navbar-user')
    </header>
    <section class="flex justify-around gap-5 flex-wrap w-full max-w-[1100px]">
        <section class="bg-white border border-slate-200 rounded-xl p-5 flex flex-col gap-5 w-full max-w-[350px]">
            <header class="flex items-center justify-between">
                <p class="text-slate-500 uppercase tracking-widest font-medium flex items-center gap-1.5 text-base">
                    <x-tabler-server class="size-5" />
                    Servidores
                </p>
                <a href="#">
                    <x-tabler-link class="size-5 text-blue-500" />
                </a>
            </header>
            <p class="text-3xl font-semibold text-slate-950">
                {{ $server['count'] }}
            </p>
            <footer class="text-slate-700 flex justify-between items-center w-full">
                <p>Servidores</p>
                <p>
                    <b class="font-semibold">
                        {{ $server['troncals'] }}
                    </b> troncales
                </p>
            </footer>
        </section>
        <section class="bg-white border border-slate-200 rounded-xl p-5 flex flex-col gap-5 w-[350px]">
            <header class="flex items-center justify-between">
                <p class="text-slate-500 uppercase tracking-widest font-medium flex items-center gap-1.5 text-base">
                    <x-tabler-tag class="size-5" />
                    Proyectos
                </p>
                <a href="#">
                    <x-tabler-link class="size-5 text-blue-500" />
                </a>
            </header>
            <p class="text-3xl font-semibold text-slate-950">
                {{ $projects['count'] }}
            </p>
            <footer class="text-slate-700 flex justify-between items-center w-full">
                <p>Proyectos</p>
                <p>
                    <b class="font-semibold">
                        {{ $projects['campains'] }}
                    </b> campañas
                </p>
            </footer>
        </section>
        <section class="bg-white border border-slate-200 rounded-xl p-5 flex flex-col gap-5 w-[350px]">
            <header class="flex items-center justify-between">
                <p class="text-slate-500 uppercase tracking-widest font-medium flex items-center gap-1.5 text-base">
                    <x-tabler-phone class="size-5" />
                    DDIS
                </p>
                <a href="#">
                    <x-tabler-link class="size-5 text-blue-500" />
                </a>
            </header>
            <p class="text-3xl font-semibold text-slate-950">
                {{ $ddis['count'] }}
            </p>
            <footer class="text-slate-700 flex justify-between items-center w-full">
                <p>DDIS</p>
                <section class="flex gap-2.5 items-center">
                    <span class="size-1.5 rounded-full bg-red-500"></span>
                    <p>
                        <b class="font-semibold">
                            {{ $ddis['spam'] }}
                        </b> en SPAM
                    </p>
                </section>
            </footer>
        </section>
    </section>
@endsection
