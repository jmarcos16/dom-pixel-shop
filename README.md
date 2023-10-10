## DompixelShop

Módulo responsavel pelo cadastros dos itens da loja DompixeShop, esse módulo consite basicamente em quatro partes, a listagem dos itens, o cadastro dos itens, a edição dos itens e o deleção dos mesmos, o projeto foi construido ultizando as seguintes tecnologias.

---

- [PHP v8+](https://www.php.net/).
- [Laravel 10+](https://laravel.com/docs/10.x).
- [Tailwind CSS](https://tailwindcss.com/docs/).
- [Node 18+](https://nodejs.org/en).

Para instalação desse projeto será necessário ter o PHP, Composer e Node instalado em sua maquina.

## Instalação

Para instalação basta rodar os seguintes comandos, uma linha por vez.
```bash
git clone https://github.com/jmarcos16/dom-pixel-shop.git

cd dom-pixel-shop

cp .env-example .env
```

Em seguida acesse o arquivo .env com o seu editor de código preferido e altere o seguinte bloco codigo.

```env
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dom_pixel_shop
DB_USERNAME=root
DB_PASSWORD=
```
Esse código acima é o responsavel pela conexão com o banco de dados, nesse caso configure com o banco instalado no seu ambiente.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
