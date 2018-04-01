<h1>Одна статья</h1>
@foreach($news as $item)
    <div class="col">
        <span style="text-align: center; font-weight: 900; color:red; font-size: 1.1em;"> {!! $item->title !!}</span><br />
        <span style="float:right;font-weight: 600"></span>
        <span> {!! $item->desc !!}</span><br /><span style="font-weight: 900">Автор : {{ $item->user->name }}</span> <span style="float:right; font-weight: 900"> {!! $item->created_at !!}</span>
        <div style="height: 1px; background: red; width: 100%" ></div>
        <br />
    </div>
@endforeach