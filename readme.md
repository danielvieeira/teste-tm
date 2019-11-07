## Requisitos

- PHP >= 7.2
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Processo para execução

1 - Instale as dependências utilizando o composer:
```shell
php composer.phar install --no-dev
```

2 - Crie uma cópia do arquivo .env.example e renomeie-a como .env:
```shell
cp .env.example .env
```

3 - Altere as linhas 2 e 4 do arquivo .env alterando as variáveis APP_ENV e APP_DEBUG
```shell
APP_ENV=production
APP_DEBUG=false
```

4 - Incie um servidor usando um dos comandos a seguir:
```shell
php artisan serve
```
ou
```shell
php -S 127.0.0.1:8000 -t ./public
```

5 - Acesse o site pela url <a href="127.0.0.1:8000">127.0.0.1:8000</a> ou <a href="localhost:8000">localhost:8000</a>
