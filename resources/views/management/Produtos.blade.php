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

    #imgProduct {
      width: 70px;
    }

</style>
    
<body>
    
        @include('includes.navManagement')

        <div class="mt-5 d-flex justify-content-center">
        <table class="table w-50 text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Nome</th>
                <th scope="col">Valor</th>
                <th scope="col">Descrição</th>
                <th scope="col">Estoque</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td class="p-3"><img id="imgProduct" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6qcJpM-dzt6YKy8QOg9-nhGaV24iq0n2v3SFi8Y-pQx7cAGR0WqGQSD-MTiVo4uDNK9w&usqp=CAU" alt=""></td>
                <td class="p-3">Mark</td>
                <td class="p-3">R$ 2,99</td>
                <td class="p-3">Produto reservado para público de 3 a 5 anos.</td>
                <td class="p-3">20</td>
                <td class="d-flex p-3"> 
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
