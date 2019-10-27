@extends('layouts.app')



@section('style')



@endsection


@section('content')


	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data" class="py-3">
					@csrf

					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Model</label>
						<input type="text" name="model" class="form-control">
					</div>
					<div class="form-group">
						<!-- <label>Image</label> -->
						<input type="file" name="photo" class="form-control">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="number" name="price" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="description" rows="6"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="form-control btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>


@endsection