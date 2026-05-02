<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dark-site Intelligence</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .login-panel {
            border: 3px solid #fff;
            width: 1000px;
            max-width: 90%;
            padding: 60px 40px;
            text-align: center;
        }
        
        .login-panel h1 {
            font-size: 250%;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px dotted #fff;
        }
        
        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            background: #000;
            border: 2px solid #fff;
            color: #fff;
            font-family: 'kode-mono';
            font-size: 16px;
            box-sizing: border-box;
        }
        
        .form-group input:focus {
            outline: none;
            border-style: dotted;
        }
        
        .login-btn {
            width: 100%;
            padding: 15px 30px;
            background: #000;
            border: 2px solid #fff;
            color: #fff;
            font-family: 'kode-mono';
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s, color 0.3s;
        }
        
        .login-btn:hover {
            background: #fff;
            color: #000;
        }
        
        .login-footer {
            margin-top: 30px;
            font-size: 14px;
        }
        
        .login-footer a {
            color: #fff;
            text-decoration: underline;
        }
        
        .login-footer a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-panel">
            <h1>Dark-site Intelligence</h1>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="login">Email or Username</label>
                    <input type="text" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn">[ ACCESS ]</button>
            </form>
            <div class="login-footer">
                <p>No account? <a href="register.php">Initiate Registration</a></p>
            </div>
        </div>
    </div>
</body>
</html>
