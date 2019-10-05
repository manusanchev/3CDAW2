# 3CDAW2
El objetivo de este proyecto es proporcionar datos reales sobre la calidad de Internet en el centro donde estudio, por lo que este proyecto recogerá datos estadísticos sobre lo que se ha dicho anteriormente.

## ¿Qué herramientas he utilizado para este proyecto?

- He utilizado una libreria en php para generar el grafico llamada [ChartPHP](https://www.chartphp.com/).
- Herramientas para ejecutar aplicacion en local(phpMyAdmin,xampp...).

## ¿Qué debo saber antes de ejecutar el proyecto?
**Para ejecutar el .bat que llama al script deberas crear una tarea mediante la linea de comandos.**

`schtasks /create /tn "nombre tarea" /tr "ruta archivo .bat" /sc minute /mo "minutos" /st "hora de comienzo" /et "hora finalizacion" /k`

Ejemplo:

`schtasks /create /tn "cronJob" /tr C:\xampp\htdocs\carpeta\cronJob.bat /sc minute /mo 60 /st 20:57 /et 20:59 /k`

Para mas informacion sobre el comando [schtasks](https://docs.microsoft.com/en-us/windows-server/administration/windows-commands/schtasks)

Verifique en el .bat si la direccion al ejecutable de su navegador esta disponible y si la ruta al script es correcta

**Deberás modificar los archivos para garantizar la conexion con la base de datos.**

 - config.php
 - conexion.bd

Y por ultimo y no por ello menos importante para obtener el ping por defecto utilizo la DNS de google, si no obtiene el dato reviselo. :+1:
