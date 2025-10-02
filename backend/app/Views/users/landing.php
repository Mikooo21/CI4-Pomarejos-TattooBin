<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POMAREJOS TATTOO BIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-gradient-to-r from-black via-blue-900 to-black py-6 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-3xl font-bold tracking-widest text-blue-400">POMAREJOS TATTOO BIN</h1>
            <nav>
                <a href="#artists" class="mx-3 text-white hover:text-blue-400 transition">Login</a>
                <a href="#gallery" class="mx-3 text-white hover:text-blue-400 transition">Mood Board</a>
                <a href="#contact" class="mx-3 text-white hover:text-blue-400 transition">RoadMap</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="flex-1 flex flex-col justify-center items-center text-center py-16 px-4 bg-black">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-white">Ink Your Story</h2>
        <p class="text-lg md:text-xl text-blue-200 mb-8 max-w-2xl">
            Welcome to Pomarejos Tattoo Bin — where art meets skin. Our talented artists specialize in custom tattoos, traditional Filipino designs, and modern styles. Clean, safe, and unforgettable.
        </p>
        <a href="#contact" class="inline-block bg-blue-600 hover:bg-blue-800 text-white font-semibold px-8 py-3 rounded-full shadow-lg transition">
            Book a Session
        </a>
    </section>

    <!-- Artists Section -->
    <section id="artists" class="py-16 bg-gradient-to-b from-black via-blue-950 to-black">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-blue-400 mb-8 text-center">Meet Our Artists</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Artist Card Example -->
                <div class="bg-black border border-blue-800 rounded-lg p-6 text-center shadow-lg">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Artist 1" class="w-24 h-24 mx-auto rounded-full border-4 border-blue-600 mb-4">
                    <h4 class="text-xl font-semibold text-white mb-2">Jay Pomarejos</h4>
                    <p class="text-blue-200">Traditional & Tribal Specialist</p>
                </div>
                <div class="bg-black border border-blue-800 rounded-lg p-6 text-center shadow-lg">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Artist 2" class="w-24 h-24 mx-auto rounded-full border-4 border-blue-600 mb-4">
                    <h4 class="text-xl font-semibold text-white mb-2">Mika Santos</h4>
                    <p class="text-blue-200">Minimalist & Fine Line</p>
                </div>
                <div class="bg-black border border-blue-800 rounded-lg p-6 text-center shadow-lg">
                    <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Artist 3" class="w-24 h-24 mx-auto rounded-full border-4 border-blue-600 mb-4">
                    <h4 class="text-xl font-semibold text-white mb-2">Rico Dela Cruz</h4>
                    <p class="text-blue-200">Realism & Portraits</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-6 text-center text-blue-400 text-sm">
        &copy; <?= date('Y') ?> Pomarejos Tattoo Bin. All rights reserved.
    </footer>
</body>
</html>