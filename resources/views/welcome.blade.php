@extends('layouts.master')

@section('title', '')

@section('styles')
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
    }

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
@endsection

@section('content')
    <div class="content">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="title">Crosscraft</div>

        <?php if ($isHuman): ?>
            <a href="<?php print url('quiz'); ?>" class="btn btn-lg btn-primary">Играть</a>
        <?php else: ?>
            {!! Form::open(array('url' => 'quiz/init')) !!}
            {!! Form::token() !!}
            {!! Recaptcha::render() !!}
            {!! Form::submit('Играть', ['class' => 'btn btn-lg btn-primary']) !!}
            {!! Form::close() !!}
        <?php endif; ?>
    </div>
@endsection
