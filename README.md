Installation

1. composer require prettus/l5-repository


2. config/app.php add Prettus\Repository\Providers\RepositoryServiceProvider::class 

    'providers' => [ {...}, Prettus\Repository\Providers\RepositoryServiceProvider::class]

3. delete entity
4. create seed factory UserFactory
5. add route app.php
6. ./artisan make:repository User
7. UserRepository rename use App/User
8. Add exeption response app/Exceptions/Handler.php
9. Copy BaseService

10. ./artisan make:criteria UserRole

<h1>Goal</h1>: find all user with remember_token == 3
