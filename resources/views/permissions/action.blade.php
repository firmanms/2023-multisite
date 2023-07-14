    <div class="btn-group" role="group" aria-label="...">
        <a href="{{ route('permissions.show',$id) }}" class="btn btn-info"><i class="fas fa-solid fa-eye"></i></a>
        <a href="{{ route('permissions.edit',$id) }}" class="btn btn-warning"><i class="fas fa-solid fa-pencil-alt"></i></a>
        <a href="javascript:void(0)" data-id="{{ $id }}" data-toggle="tooltip" data-original-title="Delete" class="delete btn btn-danger"><i class="fas fa-solid fa-trash"></i></a>
      </div>
