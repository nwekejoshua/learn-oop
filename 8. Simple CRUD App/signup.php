<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Signup Form</h2>
        <form action="signupProcess.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" placeholder="First Name.." required>
            
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" placeholder="Last Name.." required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Address.." required>
            
            <button type="submit" name="submit" id="submit" value="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>