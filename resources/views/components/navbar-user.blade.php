<section class="flex items-center gap-5">
    <p class="text-slate-700 sm:block hidden">Sesión iniciada como
        <span class="font-bold">{{ auth()->user()->name }}</span>
    </p>
    <button class="size-9 flex min-w-9 justify-center items-center bg-blue-400 rounded-full">
        <x-tabler-user class="size-4 text-blue-950" />
    </button>
</section>
