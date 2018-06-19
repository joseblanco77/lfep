<img src="http://www.grupoperinola.com/library/images/logo_perinola.svg" alt="Grupo Perinola" height="75px">

# Caja verde

## Instrucciones para deploy

- php artisan migrate:fresh
- php artisan module:seed Cajaverde
- php artisan cajaverde:user-permissions-seeder
- php artisan module:seed Paginas
- php artisan cajaverde:paginas-permissions-seeder
- php artisan module:seed Contacto
- php artisan cajaverde:contacto-permissions-seeder