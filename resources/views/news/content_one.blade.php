<meta name="csrf-token" content="{{ csrf_token() }}">
<h1>Одна статья</h1>

    <div class="col">
        <span style="text-align: center; font-weight: 900; color:red; font-size: 1.1em;"> {!! $news->title !!}</span><br />
        <span style="font-weight: 600; font-size: 13px;"> {!! $news->desc !!}</span><br />
        <span style="font-weight: 900">Автор : {{ $news->user->name }} <button id="userUp" type="button" class="btn">подписаться на автора</button></span>
        <span style="float:right; font-weight: 900"> {!! $news->created_at !!}</span>
        <div style="height: 1px; background: red; width: 100%" ></div>
        <br />
    </div>


<h1>Комментарии</h1>

<form method="post" action="{{ route('addComment') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="hidden" name="news_id" value="{{ $news->id}}">
        <label for="exampleFormControlTextarea1">Комментарий</label>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3" placeholder="">{{ old('text') }}</textarea>
    </div>
    @if(Auth::check())
        <button type="submit">Опубликовать</button>
    @else
        комментировать могут только зарегистрированные пользователи
    @endif
</form>

@foreach($news->comments as $comments)
    <div class="col">
        <span style="text-align: center; font-weight: 900; color:blue; font-size: 1.1em;"> {!! $comments->user->name !!}</span><br />
        <span style="text-align: center; font-weight: 900; color:black; font-size: 1.1em;"> {!! $comments->text !!}</span><br />
        <div style="height: 1px; background: red; width: 100%" ></div>
        <br />
        <br />
    </div>
@endforeach
