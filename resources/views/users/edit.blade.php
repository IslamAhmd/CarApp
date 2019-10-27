@extends('layouts.app')


@section('style')

	<style type="text/css">
		span {
			color: black;
			font-size: 15px;
		}
	</style>

@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit <span> {{ $user->name }} </span></div>

                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="post">
                    	@csrf
                    	@method('put')

                    	@foreach($roles as $role)

							<div class="form-check">
                    			<input type="checkbox" name="roles[]" class="form-check-input" value="{{ $role->id }}" {{ $user->hasRole($role->name)? 'checked' : ''}}>
                    			<label class="form-check-label">{{ $role->name }}</label>
                    		</div>

                    	@endforeach

                    	<button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
