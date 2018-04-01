<h1>Одна статья</h1>
@foreach($news as $item)
    <div class="col">
        <span style="text-align: center; font-weight: 900; color:red; font-size: 1.1em;"> {!! $item->title !!}</span><br />
        <span style="font-weight: 600; font-size: 13px;"> {!! $item->desc !!}</span><br />
        <span style="font-weight: 900">Автор : {{ $item->user->name }} <button id="userUp" type="button" class="btn">подписаться на автора</button></span>
        <span style="float:right; font-weight: 900"> {!! $item->created_at !!}</span>
        <div style="height: 1px; background: red; width: 100%" ></div>
        <br />
    </div>
@endforeach

<h1>Комментарии</h1>

<form method="post" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Комментарий</label>
        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" placeholder="">{{ old('text') }}</textarea>
    </div>
    <button type="submit">Опубликовать</button>
</form>


<script>
    $('#userUp').click(function(){
        alert();
    });
</script>