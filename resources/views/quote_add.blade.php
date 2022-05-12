@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
				<h2 class="text-center text-success mb-3">Add New Quotes</h2>
				<div class="container">
					<form action="{{ route('home.store') }}" method="post">
						@csrf
			
						<div class="form-outline mb-2">
							<label class="form-label" for="name">Name</label>
							<input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control" />
							@error('name')
								  <span style="color: red">{{ $message }}</span>
							@enderror
						  </div>
					  
						<div class="form-outline mb-2">
						   <label class="form-label" for="quotes">Quotes</label>
							<textarea class="form-control" name="quotes" id="quotes" value="{{ old('quotes') }}" rows="3"></textarea>
						 @error('quotes')
							<span style="color: red">{{ $message }}</span>
					     @enderror
						</div>
						<button type="submit" class="btn btn-primary btn-block">Sign in</button>
					  </form>
				</div>
            </div>
        </div>
    </div>
@endsection
