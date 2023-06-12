@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Position</h1>
    </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mx-auto">
                        <div class="card-header">{{ __('Create Position') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('position.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Salary') }}</label>

                                    <div class="col-md-6">
                                        <input id="v" type="text" class="form-control @error('First Name') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required autocomplete="salary" autofocus>

                                        @error('salary')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                                    <div class="col-md-6">
                                        <select name="status" class="form-control select2 @error('status') is-invalid @enderror">
                                            <option value="">Pilih data</option>
                                            <option value="Staff" {{ 'Staff' == old('status', $position->status ?? '') ? 'selected' : '' }}>Staff</option>
                                            <option value="Daily Worker" {{ 'Daily Worker' == old('status', $position->status ?? '') ? 'selected' : '' }}>Daily Worker</option>
                                        </select>
                                        {{-- <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus> --}}

                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Simpan') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
