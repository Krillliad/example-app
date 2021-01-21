@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Ab amet aut blanditiis debitis deleniti distinctio eaque,
        eos esse et iure labore molestias natus non nulla reiciendis,
        repellat similique suscipit veritatis.
    </p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
