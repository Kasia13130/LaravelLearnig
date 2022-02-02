@extends('layout')

@section('content')

    <h1>My page</h1>

    <ul>
        <?php foreach ($lists as $list) : ?>

            <li><?= $list; ?></li>

        <?php endforeach; ?>
    </ul>
@endsection