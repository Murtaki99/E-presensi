@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Your classes</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <table class="table table-sm">
                        <thead class="bg-primary text-light text-lg-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Local</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-lg-center">
                            @foreach ($locals as $local )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $local->class }}</td>
                                <td>{{ $local->local }}</td>
                                <td>
                                    <a href="#" class="badge badge-success" data-toggle="modal" data-target="#Update{{ $local->id }}">Edit</a>
                                    <form action="/dashboard/locals/{{ $local->slug }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge badge-danger border-0" onclick="return confirm('are youe sure')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add new class</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <form method="post" action="{{ route('locals.store') }}">
                        @csrf
                        <div class="form-group">
                            <small>Class name</small>
                            <input type="number" name="class" id="class" class="form-control form-control-sm @error('class') is-invalid @enderror" value="{{ old('class') }}">
                            @error('class')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                            <small>Local name</small>
                            <input type="text" name="local" id="local" class="form-control form-control-sm @error('local') is-invalid @enderror" value="{{ old('local') }}" required>
                            @error('local')
                            <small class="invalid-feedback">{{ $message }}</small>
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
@endsection
