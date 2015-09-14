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
        <div class="title">Crosscraft</div>
        <a href="<?php print url('quiz'); ?>" class="btn btn-lg btn-primary">Играть</a>

        {!! Recaptcha::render() !!}
    </div>
@endsection
