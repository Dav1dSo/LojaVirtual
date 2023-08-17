<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Full-Ecommerce</title>
    @include('includes.headerbootstrap')

</head>
<style>
    * {
        margin: 0, padding: 0;
    }

    #tableContainer {
        margin-top: 20vh;
    }

</style>
    
<body>
    
        @include('includes.navManagement')

        <div class="mt-5 d-flex justify-content-center">
        <table class="table w-50">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td class="d-flex"> 
                    <a class="btn btn-primary" href="#">Editar</a> 
                  <form action="/#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ms-1">Deletar</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>      
        </div>
    </div>
</body>
    @include('includes.scriptsbootstrap')
</html>
