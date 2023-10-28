<div>
    <button data-toggle="modal" data-target="#AddCategorieModal" style="padding: 0 5px 0 5px;" type="button"
        id="addCategorie" class="btn btn-success">+</button>
</div>
<div style="margin-top: 30vh" id="AddCategorieModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> + Nova Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <label for="NewCategorie">Acicionar Categoria</label>
                    <input value="{{ old('NewCategorie') }}" type="text"
                        class="form-control @error('NewCategorie') is-invalid @enderror" id="NewCategorie"
                        placeholder="Digite a nova Categoria:" name="NewCategorie">
                    @error('NewCategorie')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="d-flex justify-content-end mt-3">
                        <button type="button" class="btn btn-secondary">Voltar</button>
                        <button type="button" class="ms-2 addCategorie btn btn-success">Enviar</button>
                    </div>
            </div>
        </div>
    </div>
</div>