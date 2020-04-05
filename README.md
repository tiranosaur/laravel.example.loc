https://jwt-auth.readthedocs.io/en/docs/quick-start/

1. composer require tymon/jwt-auth
2. config/app.php
    'providers' => [\
        ...
        Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
    ]
3. php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
4. php artisan jwt:secret. \
    This will update your .env file with something like JWT_SECRET=foobar
5. class User extends Authenticatable <strong>implements JWTSubject</strong>
6. Make the following changes to the file:
   
   'defaults' => [
       'guard' => 'api',
       'passwords' => 'users',
   ],
   
   ...
   
   'guards' => [
       'api' => [
           'driver' => 'jwt',
           'provider' => 'users',
       ],
   ],
7. Route;
8. AuthController    
9. RegisterController RegisterRequest
