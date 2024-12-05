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
        <h2>পাসওয়ার্ড রিসেট নির্দেশিকা</h2>
        <p>আপনার পাসওয়ার্ড রিসেট করতে নিচের বাটনে ক্লিক করুন:</p>
        <a href="{{ $resetUrl }}" class="button">পাসওয়ার্ড রিসেট করুন</a>
        <p>এই লিঙ্কটি {{ config('auth.passwords.'.config('auth.defaults.passwords').'.expire') }} মিনিটের জন্য বৈধ।</p>
        <p>ধন্যবাদ, <br> {{ config('app.name') }} টিম।</p>
    </div>
</body>
</html>
