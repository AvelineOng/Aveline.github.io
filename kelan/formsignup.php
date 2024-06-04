<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Atlantic Fishing</title>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-food.css">
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        input[type="text"], input[type="password"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .logo {
            margin-bottom: 20px;
            width: 150px; /* Ubah ukuran gambar sesuai kebutuhan */
            height: auto; /* Biarkan tinggi otomatis mengikuti proporsi aslinya */
        }
    </style>

    <form id="signupForm" action="add_user.php" method="post">
        <img src="gambar/logo.web.png" alt="Company Logo" class="logo">
        <h2>Sign Up</h2>
        <input type="text" name="userid" placeholder="User ID" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <input type="submit" value="Sign Up">

        <div class="already-account">
          <p style="font-size: 12px;">Already has account? <a href="formsignin.php">Sign In</a></p>
      </div>
    </form>
    


</body>
</html>
