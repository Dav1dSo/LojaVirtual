<div id="form_create" class="container">
    <div class="col-lg-12 my-3">
        <h1 class="text-center"><a class="navbar-brand" href="/">FULL<strong class="text-info">Ecommerce</strong></a></h1>
        <p class="text-center lead">Editar produto</p>
    </div>
    <div class="d-flex justify-content-center">
        <form method="POST" action="{{ route('insert_product') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input value="{{ old('nome') }}" type="text"
                        class="form-control @error('nome') is-invalid @enderror " id="nome"
                        placeholder="Nome do produto:" name="nome">
                    @error('nome')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="valor">Valor</label>
                    <input value="{{ old('valor') }}" type="text" class="form-control  @error('valor') is-invalid @enderror " id="valor"
                        placeholder="Valor R$:" name="valor">
                    @error('valor')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" placeholder="Descrição do produto:" rows="4" name="descricao">{{ old('descricao') }}</textarea>
                @error('descricao')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="imagem">Imagem</label>
                    <input value="{{ old('imagem') }}" type="file" class="form-control  @error('imagem') is-invalid @enderror " id="imagem" name="imagem">
                    @error('imagem')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="categoria">Categoria</label>
                    <select value="{{ old('categoria') }}" id="categoria" class="form-control @error('categoria') is-invalid @enderror" name="categoria">
                        @if (old('categoria'))
                            <option value="{{ old('categoria') }}" >{{ old('categoria') }}</option>
                        @endif
                        <option value="0">Selecione...</option>
                        <option value="Eletrônico" >Eletrônico</option>
                        <option value="Roupa" >Roupa</option>
                        <option value="Alimento" >Alimento</option>
                        <option value="Bijoteria" >Bijoteria</option>
                        <option value="Calçado" >Calçado</option>
                    </select>
                    @error('categoria')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="estoque">Estoque</label>
                    <input value="{{ old('estoque') }}" type="number" class="form-control @error('estoque') is-invalid @enderror" id="estoque"
                        placeholder="0" name="estoque">
                    @error('estoque')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>