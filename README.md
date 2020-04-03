1.install
composer require zircote/swagger-php

2. generate
cd ./vendor/zircote/swagger-php/bin
./openapi path/to/project -o path/to/project/swagger.json

3. copy public swagger from addis or swagger-ui/dist to public swagger

4. console
  4.1 php artisan make:command SwaggerGenerate
  4.2 command for this project (/home/tiranosaur/Documents/docker/www/laravel.example.loc)
 
5. Download SwaggerUI to your Project
    git clone https://github.com/swagger-api/swagger-ui.git

6. Copy dist to public

7. Rename dist to swagger

8. paste to swagger index.php

9. http://{site_url}/swagger
