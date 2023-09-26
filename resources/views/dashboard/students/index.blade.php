@extends('dashboard.layouts.main')
@section('container')
<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
        <a class="btn btn-success btn-sm" href="/dashboard/students/create"><i class="fas fa-fw fa-plus"></i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="bg-primary text-light ">
                    <tr>
                        <th class="text-">N0</th>
                        <th>Nama Lengkap</th>
                        <th>Nisn</th>
                        <th>Kelas/Lokal</th>
                        <th>Qr Code</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $student->name }}</th>
                        <th>{{ $student->nisn }}</th>
                        <th>{{ $student->local_id }}</th>
                        <th> {!! QrCode::generate($student->slug) !!}</th>
                        <th>
                            <a href="#" class="badge badge-success" data-toggle="modal"
                                data-target="#Update{{ $student->slug }}"> <i class="fas fa-fw fa-edit"></i></a>
                            {{-- BUTTON DELETE --}}
                            <form action="{{ route('students.destroy', $student->slug) }}" method="post" id="deleteForm">
                                @method('delete')
                                @csrf
                                <button type="button" class="btn btn-danger" id="deleteButton">Delete</button>
                            </form>
                            {{-- END BUTTON --}}
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('dashboard.students.edit')
@include('dashboard.students.delete')
<script>
    // Attach a click event listener to the delete button
        document.getElementById('deleteButton').addEventListener('click', function() {
            // Display a SweetAlert confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this student!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            });
        });
</script>
@endsection
