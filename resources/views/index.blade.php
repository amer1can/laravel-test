@extends('mylayouts.app')

@section('title', 'Laravel-Test')

@section('hero')

    <section class="hero">
        <h1>Успех</h1>
        <p>Для молодых и успешных.</p>
    </section>

    <div class="d-flex row g-4 py-5 row-cols-1 row-cols-lg-3">
        <lastsix-component :data='@json($lastArticles)'></lastsix-component>
    </div>

@endsection
