<div class="d-flex justify-content-center">
    <a href="/editeProduct/{{ $id }}" name="edit" id="{{ $id }}" data-original-title="Edit" class="edit btn btn-info text-white">Editar</a>
    {{-- <a href="javascript:void(0)" name="edit" id="{{$id}}" data-original-title="Edit" data-toggle="modal" data-target="#exampleModalCenter" class="edit btn btn-info text-white">Editar</a> --}}
    <form method="POST" action="/deleteProduct/{{ $id }}">
        @csrf
        <button class="ms-2 btn btn-danger" type="submit">Excluir</button>
    </form>
</div>
