# Datatables-server-side-laravel
Simple implementation datatable server side with laravel

## Installation
```bash
composer install
``` 
## Referensi
-

## To Do 
- [ ] Read All Data
- [ ] Filter
- [ ] Sort

### Instal mongoDB Library for Laravel

Installation using composer:
```bash
composer require jenssegers/mongodb
```

*config/app.php* please add: 
```php
Jenssegers\Mongodb\MongodbServiceProvider::class,
```

*config/database.php* please add:
```php
'mongodb' => [
    'driver'   => 'mongodb',
    'host'     => env('DB_HOST', 'localhost'),
    'port'     => env('DB_PORT', 27017),
    'database' => env('DB_DATABASE'),
    'username' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),
    'options'  => [
        'database' => 'admin' // sets the authentication database required by mongo 3
    ]
],
```

 *default* at database.php change to *mongodb*

*Model Examples*

```php
<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class News extends Eloquent
{

    protected $table = 'news';
    use HybridRelations;
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipe_berita',
        'judul',
        'status',
        'deskripsi_singkat',
        'deskripsi_berita',
        'gambar',
        'event_id',
        'link_eksternal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
```

Add to controller

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
     $news = News:where('event_id', '')->where('status', '1')->first();
     $data = ['news' => $news];
     return view('index', $data);
    }
}
```