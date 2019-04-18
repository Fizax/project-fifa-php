<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Fifa</title>
</head>
<body>
    <h1>Plan je Fifa Wedstrijd!</h1>
    <div class="index">
        <div class="description">
            <h2>Login </h2>
            <form action="loginController.php" method="post">
                <input type="hidden" name="type" value="login">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="password">wachtwoord</label>
                    <input type="password" name="password" id="password">
                </div>

                <div class="button">
                    <input type="submit" value="login">
                </div>

            </form>
        </div>
        <div>
            <h2>Register</h2>
            <form action="loginController.php" method="post">
                <input type="hidden" name="type" value="register">

                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="form-group">
                    <label for="password1">Wachtwoord herhalen</label>
                    <input type="password" name="password1" id="password1" required>
                </div>


                <label class="container">
                    <input type="checkbox" name="boxname" value='itsChecked' required>
                    <span class="checkmark">akoord met algemene voorwaarde</span>
                </label>

                <div class="button">
                    <input type="submit" value="Register" name="button">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>