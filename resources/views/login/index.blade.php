@extends('layouts.login')

@section('content')
    <main class="p-2.5 flex items-center justify-center h-dvh">
        <form method="POST" action="{{ route('login') }}"
            class="rounded-xl grow flex flex-col gap-10 items-center text-center max-w-96 w-full p-10 border border-slate-300 bg-white">
            @csrf
            @if (session('error'))
                <p>
                    {{ session('error') }}
                </p>
            @endif
            <header class="flex flex-col gap-1.5">
                <h1 class="uppercase font-bold text-2xl text-slate-950">Inicia sesión</h1>
                <p class="text-slate-700">para poder continuar</p>
            </header>
            <section
                class="*:text-slate-950 *:rounded-xl *:outline-none *:px-4 *:w-full *:h-9 *:bg-slate-100 *:border *:border-slate-300 *:transition-all flex flex-col gap-2.5 w-full">
                <input type="text" name="username" class="focus:border-blue-500 placeholder:text-slate-500"
                    placeholder="Usuario">
                <input type="password" name="password" class="focus:border-blue-500 placeholder:text-slate-500"
                    placeholder="Contraseña">
            </section>
            <button class="bg-blue-500 h-9 px-5 text-white rounded-xl hover:bg-blue-600 transition-all"
                type="submit">Continuar</button>
        </form>
    </main>
@endsection
