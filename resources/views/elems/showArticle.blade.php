@extends('mylayouts.app')

@section('title', 'Статья')

@section('content')

  <article-component :article='@json($article)'></article-component>

@endsection
