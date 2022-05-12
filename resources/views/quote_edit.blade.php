@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center text-success mb-3">Edit Quotes</h2>
                <div class="container">
                    <form action="{{ route('home.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-outline mb-2">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="@if (old($data->name)) {{ $data->name }}	@else {{ $data->name }} @endif" />
								@error('name')
								<span style="color: red">{{ $message }}</span>
							    @enderror
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="quotes">Quotes</label>
                            <textarea class="form-control" name="quotes" id="quotes" rows="3">@if (old($data->quotes)) {{ $data->quotes }}	@else {{ $data->quotes }} @endif</textarea>
                        </div>
								@error('quotes')
								<span style="color: red">{{ $message }}</span>
								@enderror
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
