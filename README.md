![image](https://github.com/goyodb/twilio-php-sms-masivos/assets/43941761/d00f8d0a-ef97-4de1-b975-f39a71f6327e)

# Proyecto de envío de SMS con Twilio

Twilio PHP SMS Masivos

Este proyecto es una aplicación PHP simple que utiliza la API de Twilio para enviar mensajes SMS.

## Requisitos

- PHP 7.4 o superior
- Composer
- Cuenta de Twilio

## Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/username/proyecto.git
    ```
2. Navega al directorio del proyecto:
    ```bash
    cd proyecto
    ```
3. Instala las dependencias con Composer:
    ```bash
    composer install
    ```
4. Configura tus credenciales de Twilio en el código. Abre el archivo `send_sms.php` y reemplaza `SID_CODE`, `TOKEN_CODE` y `YOUR_NUMBER` con tu SID de cuenta de Twilio, tu token de autenticación de Twilio y tu número de Twilio, respectivamente.

## Uso

Para usar esta aplicación, debes hacer una solicitud POST a `send_sms.php` con los siguientes parámetros:

- `message`: El mensaje que deseas enviar.
- `numbers`: Una cadena de números de teléfono separados por comas a los que deseas enviar el mensaje.

Después de enviar el mensaje, serás redirigido a la página de la que viniste.

## Contribución

Si deseas contribuir a este proyecto, por favor, haz un fork del repositorio y envía un pull request.

## Licencia

Este proyecto está licenciado bajo los términos de la licencia MIT.
