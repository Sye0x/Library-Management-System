<h2>Hello from folder</h2>


@foreach($names as $name)
    @if($name=='Muneeb')
        <h2>{{$name}} lives in Hyderabad</h2>
    @elseif($name=='Hashir')
        <h2>{{$name}} lives in Rawalpindi</h2>
    @else
        <h2>{{$name}}</h2>
    @endif
@endforeach