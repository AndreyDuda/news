@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<h1>Добавить новость</h1>

<form method="post" action="{{ route('postAdd') }} ">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlInput1">Заголовок новости</label>
        <input type="name" name="title" class="form-control" id="exampleFormControlInput1" value="{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Описание новости</label>
        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" placeholder="">{{ old('desc') }}</textarea>
    </div>
    <button type="submit">Опубликовать</button>
</form>