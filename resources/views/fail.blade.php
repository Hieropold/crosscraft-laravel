@extends('layouts.master')

@section('title', 'Ошибка...')
@section('content')
    <h1>
        <div class="alert alert-danger" role="alert">
            <strong>Вы ошиблись...</strong> Попытайтесь отгадать следующее слово.
        </div>
    </h1>

    <h1><a href="<?php print url('quiz'); ?>"type="button" class="btn btn-lg btn-primary">Попробовать следующее слово</a></h1>
@endsection
