@extends('layouts.master')

@section('title', 'Викторина')

@section('content')
    <div class="jumbotron">
        <h1>Викторина</h1>
        <p>Выберите из 5 вариантов верное определение слова</p>
        <h1><span class="label label-info"><?php print $word; ?></span></h1>
    </div>

    <div class="col-sm-4">
        <div class="list-group">
            <?php foreach ($clues as $cid => $clue): ?>
                <a class="list-group-item" href="<?php print url('quiz/answer/' . $wid . '/' . $cid); ?>"><?php print $clue; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
@endsection