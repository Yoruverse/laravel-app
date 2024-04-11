<?php

use Illuminate\Support\Facades\Route;
$currentPath = Route::getFacadeRoot()->current()->uri();
$currentPath = '/' . preg_split('/\//', $currentPath)[0];

?>

<nav class="sticky top-0 gap-2.5 h-dvh flex flex-col items-center py-10 w-16 border-r border-slate-300 bg-white p-2">
    <!-- Comprobamos que la url activa sea igual a la id y cambiamos el color -->
    <a href="{{ route('home') }}"
        class="size-9 rounded-md hover:bg-slate-100 transition-all flex items-center justify-center
        {{ $currentPath === '/' ? 'text-slate-950' : 'text-slate-500' }}">
        <x-tabler-layout-grid class="size-6" />
    </a>
    <a href="{{ route('server') }}"
        class="size-9 rounded-md hover:bg-slate-100 transition-all flex items-center justify-center
        {{ $currentPath === '/server' ? 'text-slate-950' : 'text-slate-500' }}">
        <x-tabler-server class="size-6" />
    </a>
</nav>
