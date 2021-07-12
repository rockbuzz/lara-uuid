# Lara Uuid

Laravel Uuid

## Requirements

PHP: >=7.3

## Install

```bash
$ composer require rockbuzz/lara-uuid
```

```php

Schema::create('workspaces', function (Blueprint $table) {
    $table->uuid('id')->primary();
    ...
});

use Rockbuzz\LaraUuid\Traits\UUid;
	
class User extends Authenticatable
{
    use Uuid;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [
        'id' => 'string',
    ];

    ...
	    
}
```

## License

The Lara Uuid is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).