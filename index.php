<!DOCTYPE html>
<html>
<head>
    <title>FIFA 2017-2018 Player Stats</title>
    <link rel="icon" type="image/png" href="soccer-ball.png">
    <link rel="stylesheet" type="text/css" href="fifa.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto|Spectral+SC" rel="stylesheet">
</head>
<body>
<header>
    <h1>FIFA 2016-2017 Player Stats</h1>
    <p>A complete record of statistics for all FIFA players</p>
</header>

<main>
    <section class="description">
        
    </section>

    <section class="form">
        <article>
            <h2>Stats</h2>
            <p>Use the form below to view the stats on players from your favorite club!</p>
        </article>

        <!-- Form -->
        <form method="POST" action="fifa_cgi.py">

            <!-- Club name -->
            <label for="club">Select a club:</label>
            <select name="club" id="club">

                <optgroup label="Spanish Primera Divisi&oacute;n">
                    <option>Athletic Club de Bilbao</option>
                    <option>Athl&eacute;tico Madrid</option>
                    <option>CD Legan&eacute;s</option>
                    <option>Deportivo Alav&eacute;s</option>
                    <option>FC Barcelona</option>
                    <option>Getafe CF</option>
                    <option>Girona CF</option>
                    <option>Levante UD</option>

                </optgroup>
                <optgroup label="English Premier League">
                    <option>Arsenal</option>
                    <option>Aston Villa</option>
                    <option>Blackburn Rovers</option>
                    <option>Bolton Wanderers</option>

                </optgroup>
                <optgroup label="Italian Serie A">
                    <option>Atalanta</option>
                    <option>Benevento Calcio</option>
                    <option>Bologna</option>
                    <option>Cagliari</option>
                    <option>Chievo Verona</option>
                    <option>Crotone</option>
                    <option>Ferrera (SPAL)</option>
                    <option>Fiorentina</option>
                    <option>Genoa</option>
                    <option>Hellas Verona</option>
                    <option>Inter</option>

                </optgroup>
            </select>
            <br><br>

            <!-- Quantity -->
            <label for="quantity">Select a number of players:</label>
            <select name="quantity" id="quantity">
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>20</option>
            </select>
            <br><br>

            <!-- Sorting options -->
            <label for="sorting">How would you like the results sorted?</label>
            <select name="sorting" id="sorting">
                <option value="name">Name</option>
                <option value="age">Age</option>
                <option value="nationality">Nationality</option>
            </select>

            <br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset values">
        </form>
    </section>
</main>

<a href="login.php">login</a>
<footer>
    <p>&copy; Groep1</p>
</footer>
</body>
</html>