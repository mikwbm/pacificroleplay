<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Pacific Roleplay</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://media.discordapp.net/attachments/1143628752128065657/1202830795899928576/Add_a_heading_5.png?ex=65cee279&is=65bc6d79&hm=c7a755280c142cad175f7b177583f674786f62d8855d6acc3c16332eba24da9b&=&format=webp&quality=lossless&width=1289&height=683');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; /* Prevent background from repeating */
            background-attachment: fixed; /* Keep background fixed */
            color: #fff; /* Text color */
            text-align: center;
        }

        .container {
            padding: 50px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .admin-login {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Pacific Roleplay</h1>
        <p>Explore our community and start your roleplaying journey with us.</p>
        <form action="admin_panel.php" method="post">
            <input type="text" name="admin_key" placeholder="Enter admin key">
            <input type="submit" value="Login">
        </form>
    </div>

    <script>
        document.getElementById('admin-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('admin-login').style.display = 'block';
        });
    </script>
</body>
</html>
