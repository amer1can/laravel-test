@extends('mylayouts.app')

@section('title', 'Laravel-Test')

@section('hero')

    <section class="hero">
        <h1>Успех</h1>
        <p>Для молодых и успешных.</p>
    </section>

    <lastsix-component :data='@json($lastArticles)'></lastsix-component>

@endsection
