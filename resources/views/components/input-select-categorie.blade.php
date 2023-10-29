<select value="{{ old('categoria') }}" id="categoria" class="form-control @error('categoria') is-invalid @enderror" name="categoria">
    @if (old('categoria'))
        <option value="{{ old('categoria') }}" >{{ old('categoria') }}</option>
    @endif
    <option value="0">Selecione...</option>
    @foreach ($categorias as $categoria)
        <option value="{{ $categoria->categoria }}" >{{ $categoria->categoria }}</option>
    @endforeach
</select>
@error('categoria')
    <p class="text-danger">{{ $message }}</p>
@enderror