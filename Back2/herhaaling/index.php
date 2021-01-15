<head>
    <script src="https://www.google.com/recaptcha/api.js" ></script>
</head>

<h1>Inloggen</h1>

<form action="login.php" method="post" enctype="multipart/form-data">
    
    <p>
        <label for="username">Gebruiker:</label>
        <input type="text" name="username" id="username" required="required">
    </p>
    
    <p>
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" id="password" required="required">
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="Inloggen">
    </p>

    <div class="g-recaptcha" data-sitekey="6LeJF-IZAAAAAJ_JOP6LjQPPZl48goxZpqvT86bV"></div>


    <br>
    <p>username = admin</p>
    <p>ww = geheim</p>
</form>

