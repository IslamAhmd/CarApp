@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Users</div>

                <div class="card-body">
                    <table class="table table-striped">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)

                            <tr>
                              <th scope="row">{{ $user->name }}</th>
                              <td>{{ $user->email }}</td>
                              <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                              <td>
                                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                  <form action="{{ route('users.destroy', $user->id) }}" method="post" class="float-right">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                  </form>
                              </td>
                            </tr> 

                        @endforeach    
                      </tbody>
                    </table>
                    <div>{{ $users->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
