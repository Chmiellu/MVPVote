<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <h1 class="text-center text-info p-3">Wybierz zawodnika meczu</h1>
    <div class="container bg-info text-center py-2">
    <h2 class="text-center">Zarejstruj się</h2>
        <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto"
                placeholder="Podaj nazwę użytkownika" required="required"
                name="username">
             </div>
            <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Podaj swój numer telefonu..." required="required" maxLength="9" minLength="9">
            </div>
            <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Podaj hasło..." required="required">
            </div>
            <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="confirmpassword" placeholder="Potwierdź hasło..." required="required">
            </div>
            <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" name="photo" required="required">
            </div>
            <div class="mb-3">
                <select name="std" class="form-select w-50 m-auto">
                    <option value="voter">Głosuję</option>
                    <option value="group">Dodaję się</option>
                </select>              
                </div>
                <button type="submit" class="btn btn-secondary my-4">Zarejstruj się</button>
                <p>Posiadasz konto? <a href="../" class="text-white">Zaloguj się</a></p>
</form>

</div>
</div>
</div>
    
</body>
</html>