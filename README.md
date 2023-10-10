## DompixelShop

Módulo responsavel pelo cadastros dos itens da loja DompixeShop, esse módulo consite basicamente em quatro partes, a listagem dos itens, o cadastro dos itens, a edição dos itens e o deleção dos mesmos, o projeto foi construido ultizando as seguintes tecnologias.

---

- [PHP v8+](https://www.php.net/).
- [Laravel 10+](https://laravel.com/docs/10.x).
- [Tailwind CSS](https://tailwindcss.com/docs/).
- [Node 18+](https://nodejs.org/en).
- [Docker CE 19+](https://docs.docker.com/engine/reference/commandline/system_prune/)

Para instalação desse projeto será necessário ter Docker e o Docker Compose na ultima versão de preferência.

## Instalação

Para instalação basta rodar os seguintes comandos.
```bash
git clone https://github.com/jmarcos16/dom-pixel-shop.git
```
```bash
cd dom-pixel-shop
```
```bash
cp .env-example .env
```

Em seguida acesse o arquivo .env com o seu editor de código preferido e altere o seguinte bloco codigo, coloque as credencias que vão ser usadas no seu banco de dados.

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=dom_pixel_shop
DB_USERNAME=dafault
DB_PASSWORD=secret
```
Em seguida rode o seguinte comando, ele ira buildar as imagens, e subir os container de serviço.

```bash
docker compose up -d
```

Em seguida rode rode os seguintes comandos.

```bash
composer install
```
```bash
npm install
```
```bash
npm run build
```
Em seguida basta rodar o seguinte comando para subir o ambiente.

```bash
php artisan serve
```

Caso queira criar alguns produtos fakes, para simular a aplicação basta roda o seguinte comando.

```bash
php artisan db:seed
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
