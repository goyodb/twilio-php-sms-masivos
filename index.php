<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h2>Formulario de SMS masivos</h2>

        <form action="send_sms.php" method="post">
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea class="form-control" id="message" name="message">#FelizNavidad 😍 Agenda tu cita de Pestañas Pelo a Pelo en NanyStudio. WhatsApp linktr.ee/nany.eyelashes - @nany.eyelashes ❤️</textarea>
            </div>
            <div class="form-group">
                <label for="numbers">Números de teléfono (separados por comas y con codigo de area ejem: +573160445315):</label>
                <textarea class="form-control" id="numbers" name="numbers">+573160445315, </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>