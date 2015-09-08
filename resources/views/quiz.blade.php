@extends('layouts.master')

@section('title', 'Викторина')

@section('content')
    <h1>Викторина</h1>

    <h2><?php print $word; ?></h2>

    <ul>
        <?php foreach ($clues as $cid => $clue): ?>
            <li><a href="<?php print url('quiz/answer/' . $wid . '/' . $cid); ?>"><?php print $clue; ?></a></li>
        <?php endforeach; ?>
    </ul>
@endsection