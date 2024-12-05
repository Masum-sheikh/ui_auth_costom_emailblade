<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .button {
            background: #4caf50;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ইমেইল যাচাই করুন</h2>
        <p>আপনার ইমেইল যাচাই করতে নিচের বাটনে ক্লিক করুন:</p>
        <a href="{{ $verificationUrl }}" class="button">ইমেইল যাচাই করুন</a>
        <p>এই লিঙ্ক {{ config('auth.verification.expire', 60) }} মিনিটের জন্য বৈধ।</p>
        <p>ধন্যবাদ, <br> {{ config('app.name') }} টিম।</p>
    </div>
</body>
</html>
