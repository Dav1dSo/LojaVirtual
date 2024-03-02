
# Full Ecommerce
 
Este projeto é voltado para o setor de vendas, no qual o principal objetivo é fornecer ao proprietário uma gestão completa de vendas, pedidos, gerenciamento de estoque, mudanças de estilo no site, relatórios, atendimento de suporte além de ofertar seus produtos de forma dinâmica e intuitiva.


## Rodando localmente



#### Requerimentos necessários:
    - Composer: https://getcomposer.org/download/.
    - PHP versão ^8.1.
    - Laradock: ou XAMP para ambiente. 

      Xamp: https://www.apachefriends.org/pt_br/index.html
      Laradock: https://laradock.io/

Como executar o projeto: 

```bash
    git clone https://github.com/Dav1dSo/LojaVirtual.git
```

- Configure o arquivo .env com suas credenciais.

```
    composer install 
```

- Execute as migrations para criação de tabelas e views no banco de dados.

```
    php artisan migrate 
```

- Execute o servidor local. 

```
    php artisan serve
```

- Crie seu úsuario e atribua a ele a permissão de "superAdmin" para ter acesso a área administrativa.



## Documentação

[Documentação Laravel](https://laravel.com/docs/10.x) || 
[Documentação LaraDock](https://laradock.io/)


