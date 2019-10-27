@extends('layouts.app')


@section('style')

	<style type="text/css">
		div.card-header {
			font-size: 25px;
			font-family: sans-serif;
		}
	</style>

@endsection


@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header text-center">Gallery</div>

	                <div class="card-body">
	                    <table class="table table-striped">
	                      <thead class="thead-dark">
	                        <tr>
	                          <th scope="col">Name</th>
	                          <th scope="col">Model</th>
	                          <th scope="col">Action</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                        @foreach($cars as $car)

								<tr>
	                          		<td scope="row">{{ $car->name }}</td>
	                          		<td scope="row">{{ $car->model }}</td>
	                          		<td>
	                          			<a href="{{ route('cars.show', $car->id) }}" class="btn btn-primary btn-sm">More Details</a>
	                          		</td>
	                        	</tr> 							

	                        @endforeach 
	                      </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
