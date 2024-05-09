@extends('layouts.app')

@section('title-block')
    Details
@endsection

@section('content')
    <h1>All massages</h1>
    
    <div class="alert alert-info">
        <h2>{{ $data->name }}</h2>
        <p>{{ $data->card_number }}</p>
        <a href="{{ route('purchase-update', $data->id) }}">
            <button class="btn btn-primary">Edit</button>
        </a>
        <a href="{{ route('purchase-delete', $data->id) }}">
            <button class="btn btn-primary">Delete</button>
        </a>
    </div>
@endsection
