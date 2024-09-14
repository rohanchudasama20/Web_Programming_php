<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, #ff5e62, #ff9966);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    
    .form-container {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        width: 100%;
        max-width: 500px;
        animation: fadeIn 1s ease-out;
    }
    
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
        font-size: 24px;
    }
    
    form {
        display: flex;
        flex-direction: column;
    }
    
    .input-group {
        margin-bottom: 15px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="tel"] {
        width: 100%;
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        box-sizing: border-box; /* Ensures padding is included in the width */
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    
    textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        box-sizing: border-box;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        resize: none;

    }
    
    input:focus, textarea:focus {
        border-color: #ff5e62;
        box-shadow: 0 0 8px rgba(255, 94, 98, 0.5);
        outline: none;
    }
    
    button {
        background: linear-gradient(135deg, #ff5e62, #ff9966);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 12px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
    }
    
    button:hover {
        background: linear-gradient(135deg, #ff9966, #ff5e62);
        transform: translateY(-2px);
    }
    
    button:active {
        transform: translateY(1px);
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    </style>
</head>
<body>
    <div class="form-container">
        <h1>Create Your Account</h1>
        <form action="dashboad.php" method="post">
            <div class="input-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter Full Name" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="********" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter Phone No" pattern="[0-9]{10}" maxlength="10" required>
            </div>
            <div class="input-group">
                <label for="comments">Skill:</label>
                <textarea id="comments" name="Skill" placeholder="Enter your skill" rows="4" required></textarea>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
