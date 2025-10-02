<!-- app/Views/users/login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In / Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <!-- Sign In Form -->
        <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Sign In</h2>
        <form action="<?= site_url('login') ?>" method="post" class="mb-8">
            <?= csrf_field() ?>
            <div class="mb-4">
                <label for="login_email" class="block text-black mb-1">Email</label>
                <input type="email" id="login_email" name="email" required
                       class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="login_password" class="block text-black mb-1">Password</label>
                <input type="password" id="login_password" name="password" required
                       class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                    class="w-full bg-blue-700 text-white py-2 rounded hover:bg-blue-800 transition">Sign In</button>
        </form>

        <hr class="my-6 border-blue-200">

        <!-- Sign Up Form -->
        <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Sign Up</h2>
        <form action="<?= site_url('register') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-4">
                <label for="signup_email" class="block text-black mb-1">Email</label>
                <input type="email" id="signup_email" name="email" required
                       class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="signup_password" class="block text-black mb-1">Password</label>
                <input type="password" id="signup_password" name="password" required
                       class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="signup_password_confirm" class="block text-black mb-1">Confirm Password</label>
                <input type="password" id="signup_password_confirm" name="password_confirm" required
                       class="w-full px-3 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit"
                    class="w-full bg-blue-700 text-white py-2 rounded hover:bg-blue-800 transition">Sign Up</button>
        </form>
    </div>
</body>
</html>