<div class="col" style="text-align: center">
    <h3>Вами статьи</h3>
</div>
@foreach($news as $item)
    <div class="col" style="border:1px solid grey; margin:10px;">
        <span style="text-align: center; font-weight: 900; color:red; font-size: 1.1em; "> {!! $item->title !!}</span><br />

        <span style="font-weight: 600; font-size: 13px;"> {!! $item->desc !!}</span><br />
        <span style="float:right; font-weight: 900"> {!! $item->created_at !!}</span>
        <br />
        <a href="{{ route('oneNews', ['id' => $item->id]) }}"><div class="btn">Подробнее</div></a>
        <div style="height: 1px; background: red; width: 100%" ></div>
        <br />
    </div>
@endforeach