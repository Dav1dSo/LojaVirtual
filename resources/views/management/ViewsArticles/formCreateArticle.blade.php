<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Article</title>
    @include('includes.headerbootstrap')
    <script src="https://cdn.tiny.cloud/1/oslnenen8snf9kzj3259wgbeoxbc552wjb3ga1xoyvzmxgel/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<style>
    #formArticle {
        margin-top: 20vh;

    }

    #backColor {
        background-color: rgba(57, 105, 87, 0.5);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        padding: 20px;
    }
</style>

<body>
    @include('includes.navbar')

    <div class="container-fluid glass-effect" id="formArticle">
        <div class="row justify-content-center">
            <div id="backColor" class="col-md-8">
                <h2 class="text-center mb-4">Criar Artigo</h2>
                <form action="{{ route('management_create_article') }}" method="post" enctype="multipart/form-data"
                    class="mt-4">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="titulo" class="form-label">Título do artigo:</label>
                            <input placeholder="Título do artigo:" type="text" id="titulo" name="titulo"
                                class="form-control">
                            @if ($errors->has('titulo'))
                                <div>
                                    <p class="text-danger text-end p-2">{{ $errors->first('titulo') }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <label for="imagem" class="form-label">Imagem de capa:</label>
                            <input type="file" id="imagem" name="imagem" class="form-control">
                            @if ($errors->has('imagem'))
                                <div>
                                    <p class="text-danger text-end p-2">{{ $errors->first('imagem') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="textContent" class="form-label">Texto do artigo:</label>
                        <textarea id="textContent" name="textContent" class="form-control" rows="16"></textarea>
                        @if ($errors->has('textContent'))
                            <div>
                                <p class="text-danger text-end p-3">{{ $errors->first('textContent') }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Salvar Artigo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
@include('includes.scriptsbootstrap')
<script>
    tinymce.init({
        selector: '#textContent'
    });

    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'paste link image',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | link image',
            menubar: false,
            setup: function(editor) {
                editor.on('init', function() {
                    var tinymceDiv = document.querySelector('.tox .tox-tinymce');
                    tinymceDiv.classList.add('rounded');
                });
            }
        });
    });
</script>
