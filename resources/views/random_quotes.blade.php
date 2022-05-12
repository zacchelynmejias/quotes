@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <a href="{{ route('home.create') }}" class="btn btn-sm btn-primary mb-2">Add New</a>

                    @foreach ($data as $i => $d)
                        <div class="card mb-2" style="width: 50rem;">
                            <div class="card-body">
                                <h5 class="card-title">No.{{ ++$i }}</h5>
                                <p class="card-text">"{{ $d->quotes }}"</p>
                                <footer class="blockquote-footer text-right">{{ $d->name }}</footer>
                                <div class="col-md-12 text-center">
								<form action="{{ route('home.destroy',$d->id) }}" method="POST">
									@csrf
									@method('DELETE')
								 <a class="btn btn-success btn-xs" href="{{ route('home.edit',$d->id) }}">Edit<a>

									<button type="submit" href="{{ route('home.destroy',$d->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')">Delete</button>
								</form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
