@extends('layouts.master')

@section('title', 'Битва')

@section('content')
    <h1>Битва</h1>

    <h2><?php print $word; ?></h2>

    <ul>
        <?php foreach ($clues as $cid => $clue): ?>
            <li><a href="<?php print url('battle/guess/' . $wid . '/' . $cid); ?>"><?php print $clue; ?></a></li>
        <?php endforeach; ?>
    </ul>
@endsection