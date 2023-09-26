@foreach ( $students as $student )
 <div class="modal fade" id="Delete{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Delete student</h6>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('students.destroy', ['student'=> $student->id]) }}">
                    @method('delete')
                    @csrf
                     <input type="hidden" name="id" value="{{ $student->id }}">
                     <p>Are you sure you want to delete this data ?</p>
                  <div class="modal-footer">
                      <button class="btn btn-secondary col-4" type="button" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-success col-4">Yes</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

