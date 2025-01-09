<p align="center"><img src="./public/assets/logo-app-500x500.svg" width="200" alt="Laravel Logo"></p>

## About licitacionesApp

LicitacionesApp es una aplicación diseñada para gestionar cotizaciones y controlar los productos cotizados junto con sus fichas técnicas. La aplicación permite guardar cotizaciones realizadas por terceros y generar nuevas cotizaciones utilizando los datos previamente guardados. De esta manera, podrás mantener una base de datos con los productos que ya has cotizado y generar cotizaciones futuras aplicando un porcentaje de ganancia personalizado.

## Tecnologias utilizadas

- **Vue.js 3**: Usado para el frontend y la creación de interfaces dinámicas.
- **Laravel**: Framework PHP utilizado para el backend y la gestión de la lógica del servidor.
- **Inertia.js**: Puente que conecta Vue.js con Laravel para una experiencia de página única (SPA) sin necesidad de usar una API REST completa.

## Guia instalacion

- Ejecutar el comando app:initial-settings
- Insertara la informacion del impuesto IVA (19%) - Se aplicara a las cotizaciones.
- Pedirá un correo electronico para el administrador y una contraseña.
- Crear la carpeta temp en el siguiente directorio : `/storage/app/private/temp`
- Instalar dependencias e iniciar el servidor.

## PHP Settings

### Extensiones requeridas:

- `php_zip` (habilitada)
- `php_xml` (habilitada)
- `php_gd2` (habilitada; también funciona con `php_gd`)
- `php_iconv` (habilitada)
- `php_simplexml` (habilitada)
- `php_xmlreader` (habilitada)
- `php_zlib` (habilitada)
- `sqlite3` (habilitada)
- `pdo_sqlite` (habilitada)

Este proyecto fue desarrollado con PHP versión **8.3.7**.

## License

El software licitacionesAPP tiene la siguiente licencia [gpl-3-0 license](https://opensource.org/license/gpl-3-0).
