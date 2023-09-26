@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-xl-10 col-lg-12 col-md-9 bg-light rounded shadow-lg my-4">
            <div class="">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex bg-login-image">
                            <img class="bg-login-image" src="/assets/img/img.jpg" width="400">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-lg-5 p-2">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ $title }}</h1>
                                </div>
                                <form method="post" action="{{ route('students.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <small>Nama Santri</small>
                                        <input type="text" name="name" id="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                        @error('name')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                        <small>Nama Induk Siswa</small>
                                        <input type="number" name="nisn" id="nisn" class="form-control form-control-sm @error('nisn') is-invalid @enderror" value="{{ old('nisn') }}">
                                        @error('nisn')
                                        <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                        <input type="hidden" id="slug" name="slug" required value="{{ old('slug') }}">
                                        <small>Kelas & Lokal</small>
                                        <select class="custom-select custom-select-sm @error('local_id') is-invalid @enderror" name="local_id" id="local_id">
                                            <option value="" selected disabled>Select Kelas & Lokal</option>
                                            @foreach ($locals as $local)
                                            <option value="{{ $local->id }}" {{ old('local_id') == $local->id ? 'selected' : '' }}>
                                                {{ $local->class }}-{{ $local->local }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('local_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm btn-user btn-block">Create</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const nisn = document.querySelector('#nisn');
        const slug = document.querySelector('#slug');

        nisn.addEventListener('change', function() {
            fetch('/dashboard/students/checkSlug?nisn=' + nisn.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

    </script>
    @endsection
