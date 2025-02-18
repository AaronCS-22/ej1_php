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
    └── home.blade.php
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
    return view('home');
});
```

## HomeController
Creamos el controlador ```HomeController.php``` con el siguiente comando en el terminal:
```bash
php artisan make:Controller HomeController
```
Añadimos el siguiente código dentro del fichero creado:

```php
class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
```

En ```web.php```, añadimos la siguiente línea:
```php
ROUTE::get('/', [HomeController::class, 'index'])
-> name('home');
```

## Autenticación
### Cargar layout
En la carpeta ```resources/views/auth``` moficiar todos los ficheros de autenticación (```login.blade.php``` y ```register.blade.php```, etc.) para añadirles el layout que hemos creado.
### Decoración
Dentro de cada ```<x-layouts.layout>``` de los ficheros, englobar el código de la siguiente forma:
```bladehtml
<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-gray-300">
        <div class="bg-white p-4 rounded-xl">
            [...]
            RESTO DEL CÓDIGO
            [...]
        </div>
    </div>
</x-layouts.layout>
```
### Cambiar rutas
Al registrarse, iniciar sesión, etc., se envía al usuario a dashboard.blade.php.

Para corregir el problema, debemos entrar en la carpeta ```app/Http/Controllers``` y modificar en todos los ficheros la ruta ``dashboard`` por la ruta ```main``` (incluyendo los ficheros dentro de la carpeta ```Auth```.

Por ejemplo, en ```ProfileController.php```, hay que cambiar la siguiente línea:

```php
return Redirect::to('dashboard');
```
por:
```php
return Redirect::to('home');
```

Una vez realizado los cambios, se puede eliminar el fichero ```dashboard.blade.php``` junto con su ruta en ```web.php```



(PARA EL FINAL)
npm build y deploy
