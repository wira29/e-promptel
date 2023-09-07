<a href="{{ route('categories.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
<a href="#"
   data-toggle="modal"
   data-target="#exampleModal"
   data-id='{{ $data->id }}'
   class="btn btn-outline-danger delete-alert">Hapus</a>
