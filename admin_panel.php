<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('https://media.discordapp.net/attachments/1143628752128065657/1202830795899928576/Add_a_heading_5.png?ex=65cee279&is=65bc6d79&hm=c7a755280c142cad175f7b177583f674786f62d8855d6acc3c16332eba24da9b&=&format=webp&quality=lossless&width=1289&height=683') no-repeat center center fixed;
            background-size: cover;
            color: #fff; /* Text color */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .header p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .floating-buttons {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    max-width: 800px; /* Adjust as needed */
}

.button {
    display: inline-block;
    width: 200px;
    height: 50px;
    color: #fff;
    text-align: center;
    line-height: 50px;
    font-size: 18px;
    border: 2px solid transparent;
    border-radius: 10px;
    margin: 5px; /* Adjust as needed */
    text-decoration: none;
    transition: border-color 0.3s ease;
    animation: rainbow-border 4s linear infinite;
}

        .button:hover {
            color: #000;
        }

        @keyframes rainbow-border {
            0% { border-color: #ff0000; }
            16% { border-color: #ff8000; }
            33% { border-color: #ffff00; }
            50% { border-color: #00ff00; }
            67% { border-color: #00ffff; }
            84% { border-color: #0000ff; }
            100% { border-color: #ff00ff; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Admin Panel</h1>
        </div>
    </div>
    <div class="floating-buttons">
        <a href="#" class="button">CAD</a>
        <a href="#" class="button">Dashboard</a>
        <a href="#" class="button">Settings</a>
        <a href="#" class="button">Discord</a>
        <a href="#" class="button">Join Now</a>
    </div>
</body>
</html>
