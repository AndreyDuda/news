<form method="post" action="{{ route('email') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Текст</label>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3" placeholder="">{{ old('text') }}</textarea>
    </div>
        <button type="submit">Опубликовать</button>
</form>