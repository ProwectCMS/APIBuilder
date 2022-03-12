# ProwectCMS API Builder

Laravel API Builder based on [spatie/laravel-query-builder](https://github.com/spatie/laravel-query-builder)

## Usage

### Example Controller

```php
<?php

namespace App\Http\Controllers;

use App\Models\User;
use ProwectCMS\ApiBuilder\ApiControllerTrait;
use Spatie\QueryBuilder\QueryBuilder;

class UserController extends Controller
{
    use ApiControllerTrait;

    protected function getQueryBuilder($custom = null) : QueryBuilder
    {
        $query = QueryBuilder::for($custom ? $custom : User::class);

        $query->allowedFields(['id', 'name']);
        
        return $query;
    }

    public function index()
    {
        return $this->getAllPaginated(25);
    }

    public function view(User $user)
    {
        return $this->getSingle($user);
    }

    // other methods ...
}
```

Read more under: [https://spatie.be/docs/laravel-query-builder/v5/introduction](https://spatie.be/docs/laravel-query-builder/v5/introduction)

