@extends('layouts.app')
@section('content')
@forelse ( $about as $about)
<article class="card max-w-2xl mx-auto">
 <div class="flex flex-col-reverse sm:flex-row sm:items-center gap-6">

        <div class="flex-1">
            <h1>Tentang Saya</h1>
            <p class="mt-3 text-slate-600">tes</p>

            <dl class="mt-6 grid grid-cols-[7rem_1fr] gap-y-2 text-sm">
                <dt class="font-semibold text-slate-500">Nama</dt>
                <dd>{{ $about -> nama }}</dd>

                <dt class="font-semibold text-slate-500">Jurusan</dt>
                <dd>{{ $about -> jurusan }}</dd>

                <dt class="font-semibold text-slate-500">Institusi</dt>
                <dd>{{ $about -> institusi }}</dd>

                <dt class="font-semibold text-slate-500">Email</dt>
                <dd><a href="mailto:{{ $about -> email }}" class="text-brand hover:underline">{{ $about -> email }}</a></dd>
            </dl>
        </div>

        <img src="{{ $about -> thumbnail }}"
             class="w-40 h-40 sm:w-48 sm:h-48 rounded-2xl object-cover shadow-md mx-auto sm:mx-0 bg-slate-200">
    </div>
</article>
@empty
@endforelse

@endsection