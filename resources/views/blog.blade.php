@extends('layouts.app')

@section('content')
    @forelse ($blogs as $blogs)
        <article class="card max-w-2xl mx-auto">
            {{-- Tambahkan utility class 'flex' di awal agar layout flexbox aktif --}}
            <div class="flex flex-col-reverse sm:flex-row sm:items-center gap-6">
                <div>
                    <h2>{{ $blogs -> title }}</h2>
                    <p>{{ $blogs -> content }}</p>
                </div>
                <img src="{{ $blogs -> thumbnail }}" alt="">
            </div>
        </article>
        @empty
    @endforelse
@endsection