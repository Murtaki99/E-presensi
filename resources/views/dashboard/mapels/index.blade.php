@extends('dashboard.layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-xl-8 col-lg-7 col-xs-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
            </div>
            <div class="card-body">
                <div class="">
                    <form class="form-inline d-xs-block" method="POST" action="{{ route('mapels.store') }}">
                        <div class="form-group mx-sm-3 mb-2">
                            @csrf
                            <input type="text" class="form-control form-control-sm  @error('mapel') is-invalid @enderror" id="mapel" name="mapel" placeholder="Create new mapel" value="{{ old('mapel') }}" required>
                            @error('mapel')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                            <input type="hidden" id="slug" name="slug" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mb-2">save</button>
                    </form>
                    <div class="mt-3 mb-3" style="max-height: 300px; overflow-y: auto;">

                        <table class="table text-dark">
                            @foreach ($mapels as $mapel )
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $mapel->mapel }}</td>
                                <td>@mdo</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
