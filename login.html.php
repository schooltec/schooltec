
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schooltec | Ingresa o registrate</title>
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="social-icons">
                <a href="index.html">
                    <img src="img/favicon.png" alt="" >
                </a>
            </div>
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="Login()">Ingresa</button>
                <button type="button" class="toggle-btn" onclick="Register()">Registrate</button>
            </div>
            <form id="login" class="input-group" action="login.php" method="POST">
                <input type="text" name="email" class="input-field" placeholder="Email" required>
                <input type="text" name="password" class="input-field" placeholder="Contraseña" required>
                <input type="checkbox"  class="chech-box"><span>Recordar contraseña</span>
                <button type="submit" value="submit" class="submit-btn">Ingresar</button>
            </form>
            <form method="post" id="register" class="input-group">
                <input type="text" name="Nombre" class="input-field" placeholder="Nombre" required>
                <input type="number" name="Telefono" class="input-field" placeholder="Teléfono" required>
                <input type="email" name="Email" class="input-field" placeholder="Email" required>
                <input type="password" name="Contraseña" class="input-field" placeholder="Contraseña" required>
                <input type="checkbox" class="chech-box"><span>Acepto terminos y condiciones</span>
                <button type="submit" value="register" class="submit-btn">Registrate</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function Register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }

        function Login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>

</body>
</html>