<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <div class="flex justify-center mb-8">
                <button id="signupBtn" class="mr-2 px-4 py-2 bg-blue-500 text-white rounded focus:outline-none">Sign Up</button>
                <button id="loginBtn" class="ml-2 px-4 py-2 bg-gray-200 text-gray-700 rounded focus:outline-none">Login</button>
            </div>

            <!-- Sign Up Form -->
            <form id="signupForm" action="process.php" method="POST" class="">
                <input type="hidden" name="action" value="signup">
                <div class="mb-4">
                    <label class="block text-gray-700">Username</label>
                    <input type="text" name="username" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="userid" name="userid" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Sign Up</button>
            </form>

            <!-- Login Form -->
            <form id="loginForm" action="process.php" method="POST" class="hidden">
                <input type="hidden" name="action" value="login">
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="userid" name="userid" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Login</button>
            </form>
        </div>
    </div>

    <script>
        const signupForm = document.getElementById('signupForm');
        const loginForm = document.getElementById('loginForm');
        const signupBtn = document.getElementById('signupBtn');
        const loginBtn = document.getElementById('loginBtn');

        signupBtn.addEventListener('click', () => {
            signupForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
            signupBtn.classList.add('bg-blue-500', 'text-white');
            signupBtn.classList.remove('bg-gray-200', 'text-gray-700');
            loginBtn.classList.add('bg-gray-200', 'text-gray-700');
            loginBtn.classList.remove('bg-blue-500', 'text-white');
        });

        loginBtn.addEventListener('click', () => {
            loginForm.classList.remove('hidden');
            signupForm.classList.add('hidden');
            loginBtn.classList.add('bg-blue-500', 'text-white');
            loginBtn.classList.remove('bg-gray-200', 'text-gray-700');
            signupBtn.classList.add('bg-gray-200', 'text-gray-700');
            signupBtn.classList.remove('bg-blue-500', 'text-white');
        });
    </script>
</body>
</html>
