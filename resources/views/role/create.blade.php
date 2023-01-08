@extends('layouts.backend.master')

@section('content')
<h1 class="text-center mt-5">Create <span class="text-primary">Role</span> </h1>
<br>
<a href="{{ route('role.index') }}">
                                <i class="fas fa-eye text-success float-right"></i>
                            </a>
<div class="continer justify-content-center d-flex mt-5">
    
<form class="col-6" method="post" action="{{ route('role.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="exampleInputName" value="{{ old('name') }}" aria-describedby="Name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputDescription" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                    id="exampleInputDescription" value="{{ old('description') }}" rows="5"></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection