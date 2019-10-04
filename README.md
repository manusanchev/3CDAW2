# 3CDAW2
El objetivo de este proyecto es proporcionar datos reales sobre la calidad de Internet en el centro donde estudio, por lo que este proyecto recogerá datos estadísticos sobre lo que se ha dicho anteriormente.

## ¿Qué herramientas he utilizado para este proyecto?

- He utilizado una libreria en php para generar el grafico llamada [ChartPHP](https://www.chartphp.com/).
- Herramientas para ejecutar aplicacion en local(phpMyAdmin,xampp...).

## ¿Qué debo saber antes de ejecutar el proyecto?
Para ejecutar el .bat que llama al script deberas crear una tarea mediante la linea de comandos.

`schtasks /create /tn "NOMBRE DE LA TAREA" /tr RUTA ABSOLUTA DEL .BAT /sc minute /mo MINUTOS /st HORA DE COMIENZO /et HORA DE FINALIZACION /k`

Ejemplo:

`schtasks /create /tn "cronJob" /tr C:\xampp\htdocs\carpeta\cronJob.bat /sc minute /mo 60 /st 20:57 /et 20:59 /k`

**Deberás modificar los archivos para garantizar la conexion con la base de datos**

 - config.php
 - conexion.bd
 
Y por ultimo y no por ello menos importante para obtener el ping por defecto utilizo la DNS de google, si no obtiene el dato reviselo. :+1:
