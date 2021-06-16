
## Sanctum Learn

API simples para cadastrar, mostrar e deletar produtos. 
Resistro, login e logout usando Sanctum.

## Instalação

git clone https://bitbucket.org/RafhaelGigaLucas/sanctum-learn-api.git

```bash
$ cd sanctum-learn-api
```
```bash
$ composer install
```
```bash
$ php artisan migrate
```
```bash
$ php artisan serve
```

## Rotas

### Listagem de produtos (GET) (SUCESS: 200)
>/api/products

### Cadastro de produtos (POST) (SUCESS: 200)
>/api/products

#### Paramêtros
* name (string)
* slug (string)
* description (string)
* price (float)

### Update de produtos (PUT) (SUCESS: 200)
>/api/products/{id}

#### Paramêtros (apenas o(s) que irá(ão) ser atualizado(s))

* name (string)
* slug (string)
* description (string)
* price (float)

### Deletar produtos (DELETE) (SUCESS: 200)
> /api/products/{id}
