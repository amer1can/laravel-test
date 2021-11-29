@extends('mylayouts.app')

@section('title', 'Каталог статей')

@section('content')

    <h1>Каталог статей</h1>

    <all-articles-component :all='@json($allArticles)'></all-articles-component>

    <div class="pagination">
        {{ $allArticles->links() }}
    </div>

@endsection
