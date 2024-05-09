@extends('layouts.app')
@section('title-block')All massages
@endsection

@section('content')
    <h1>All massages</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
          <h3>{{$element->name}}</h3>
          <p>{{$element->card_number}}</p>
          <a href="{{ route('purchase-detail', $element-> id)}}"><button type="submit" style=" height:20px; width:100px; background-color: #e798e7; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
подробнее</button></a>
        </div>
    @endforeach
@endsection