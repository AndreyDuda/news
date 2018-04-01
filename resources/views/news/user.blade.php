@foreach($user as $item)
    <div class="col" style="border:1px solid grey; margin:10px;">
        <span style="text-align: center; font-weight: 600; font-size: 1.1em;">Имя :</span>
        <span style="text-align: center; font-weight: 900; font-size: 1.1em;">{!! $item->name !!}</span><br />
        <span style="text-align: center; font-weight: 600; font-size: 1.1em;">email :</span>
        <span style="text-align: center; font-weight: 900; font-size: 1.1em;"> {!! $item->email !!}</span><br />
    </div>

@endforeach

