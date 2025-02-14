## Creación del proyecto
```bash
laravel new ej1
```
### Tipo de opciones a elegir:
- **Would you like to install a starter kit?:** `Laravel Breeze`
- **Which Breeze stack would you like to install?:** `Blade with Alpine`
- **Would you like dark mode support?:** `No`
- **Which testing framework do you prefer?:** `PHPUnit`
- **Which database will your application use?:** `SQLite`
- **Would you like to run the default database migrations?:** `Yes`

## Importación DaisyUI

```bash
npm i -D daisyui@latest
```
## Creación de ficheros

```shell
·
└── resources
    ├── views
    │   └── components
    │       └── layouts
    │           ├── footer.blade.php
    │           ├── header.blade.php
    │           ├── layout.blade.php
    │           └── nav.blade.php
    └── main.blade.php
```

***IMPORTANTE***: Redirigir la ruta de la página principal por defecto al `main.blade.php` desde el archivo `routes/web.php`

### Antes:
```php
Route::get('/', function () {
    return view('welcome');
});
```
### Después:
```php
Route::get('/', function () {
    return view('main');
});
```






(PARA EL FINAL)
npm build y deploy
