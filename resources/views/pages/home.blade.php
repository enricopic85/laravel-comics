@extends('layouts.default')

@section('content')
<main>
    <div class="card-container">
        @foreach ($data as $value)
        <div class="item" >
            <div class="card" >
                <img src={{$value["thumb"]}} alt="">
            </div>
            <p>{{$value["series"]}}</p>
        </div>
        @endforeach  
    </div>
</main>
@endsection