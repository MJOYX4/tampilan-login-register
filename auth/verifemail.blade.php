<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Your Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen flex items-center justify-center font-sans">
    <div class="bg-white shadow-xl rounded-3xl p-10 max-w-md w-full text-center animate-fade-in">
        <!-- Gmail Icon -->
        <div class="flex justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-red-600" viewBox="0 0 48 48">
                <path fill="#EA4335" d="M24 24L4 10v28h8V21l12 9 12-9v17h8V10z"/>
                <path fill="#34A853" d="M4 10l20 14 20-14H4z"/>
            </svg>
        </div>

        <!-- Title -->
        <h1 class="text-2xl font-extrabold text-gray-800 mb-2">Verify Your Email</h1>
        <p class="text-gray-600 mb-6">
            We’ve sent a verification link to your email. Please check your inbox and click the link to activate your account.
        </p>

        <!-- Resend Button -->
        <form method="POST" action="/email/resend">
            <!-- @csrf -->
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300 shadow-md">
                Resend Verification Email
            </button>
        </form>

        <!-- Additional Note -->
        <p class="text-sm text-gray-500 mt-5">
            Didn’t receive the email? Check your spam or click the button above to resend.
        </p>
    </div>

    <!-- Animation -->
    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fade-in 0.6s ease-out;
        }
    </style>
</body>
</html>
