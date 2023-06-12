@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Position</h1>
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
            <form method="GET" action="{{ route('position.index') }}">
                <div class="form-row align-items-center">
                    <div class="col">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                            placeholder="Type here to search">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2 float-left">Search</button>
                    </div>
                    <div class="col">
                        <a href="{{ route('position.create') }}" class="btn btn-primary mb-2 float-right">Create</a>
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
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($position as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <span class="badge {{ $item->status == 'Staff' ? 'badge-info' : 'badge-secondary' }}">{{ $item->status ?? '' }}</span>
                                </td>
                                <td>{{ number_format($item->salary ?? '', 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('position.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('position.destroy', $item->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
              </table>
            </div>
        </div>
    </div>

@endsection
