@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>
    <!-- Message -->
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="col-12">
        <div class="card-header">
            <form method="GET" action="{{ route('users.index') }}">
                <div class="form-row align-items-center">
                    <div class="col">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                            placeholder="Type here to search">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2 float-left">Search</button>
                    </div>
                    <div class="col">
                        <a href="{{ route('users.create') }}" class="btn btn-primary mb-2 float-right">Create</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="card-body">
            <div style="overflow-x: auto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
              </table>
            </div>
        </div>
    </div>

@endsection
