@extends('layouts.master')

@section('title', 'Верно!')
@section('content')
    <h1>
    <div class="alert alert-success" role="alert">
        <strong>Абсолютно верно!</strong> Продолжайте в том же духе!
    </div>
    </h1>

    <h1><a href="<?php print url('quiz'); ?>"type="button" class="btn btn-lg btn-primary">Попробовать следующее слово</a></h1>
@endsection