@extends('layouts.app')

@section('title-block')
    Details
@endsection

@section('content')
    <h1>Update Purchase</h1>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm" style="background-color: #e8f4e5; padding: 20px;">
                    <div class="card-body text-center">
                        <h2 class="mb-4">Update Purchase</h2>
                        <form action="{{ route('purchase-update-submit', ['id' => $id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="album">Select Album:</label>
                                <select name="album" id="album" class="form-control">
                                    @foreach(['Abbey Road', 'The Dark Side of the Moon', 'A Night at the Opera'] as $album)
                                        <option value="{{ $album }}" {{ $album == $data->album ? 'selected' : '' }}>{{ $album }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="card_number">Card Number:</label>
                                <input type="text" name="card_number" id="card_number" class="form-control" placeholder="Enter card number" value="{{ $data->card_number }}">
                            </div>
                            <div class="form-group">
                                <label for="expiration_date">Expiration Date:</label>
                                <input type="text" name="expiration_date" id="expiration_date" class="form-control" placeholder="MM/YY" value="{{ $data->expiration_date }}">
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV:</label>
                                <input type="text" name="cvv" id="cvv" class="form-control" placeholder="Enter CVV" value="{{ $data->cvv }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Name on Card:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter name on card" value="{{ $data->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Purchase</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
