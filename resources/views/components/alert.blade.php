<div {{$attributes->merge(['class'=>' text-white p-3 mb-2 rounded '.$typeClass()])}} >
    <div>{{$message}}
    {{$slot}}</div>
</div>