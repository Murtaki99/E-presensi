@foreach ( $students as $student )
<div class="modal fade" id="Update{{ $student->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Update data Santri</h6>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('students.update', ['student'=> $student->id]) }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $student->slug }}">
                        <small>Nama Lengkap</small>
                        <input type="text" name="name" id="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name', $student->name) }}" required>
                        @error('name')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        <small>Nama Induk Siswa</small>
                        <input type="text" name="nisn" id="nisn" class="form-control form-control-sm @error('nisn') is-invalid @enderror" value="{{ old('nisn',  $student->nisn) }}" required>
                        @error('nisn')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        {{-- <inputtype="hidden"name="qrcode"id="qrcode"class="form-controlform-control-sm"readonly> --}}
                        <small>Kelas</small>
                        <input type="number" name="class" id="class" class="form-control form-control-sm @error('class') is-invalid @enderror" value="{{ old('class',  $student->class) }}" required>
                        @error('class')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        <small>Lokal</small>
                        <input type="text" name="local" class="form-control form-control-sm" id="local @error('local') is-invalid @enderror" value="{{ old('local',  $student->local) }}" required>
                        @error('local')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm btn-user btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
