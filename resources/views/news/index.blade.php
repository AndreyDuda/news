@extends(env('THEME') . '.layouts.site')

@section('menu')
    {!! $menus !!}
@endsection

@section('content')
    {!! $content !!}
@endsection