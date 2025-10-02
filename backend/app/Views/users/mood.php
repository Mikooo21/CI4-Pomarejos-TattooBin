<!--
    Moodboard View for Tattoo Parlor
    Data contract: none (static view)
    Colors: Black (#000), White (#fff), Blue (#2563eb - Tailwind blue-600)
    Usage:
-->
<body class="bg-black text-white min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-gradient-to-r from-black via-blue-900 to-black py-6 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-3xl font-bold tracking-widest text-blue-400">TATTOO BIN</h1>
            <nav>
                <a href="/" class="mx-3 text-white hover:text-blue-400 transition">Home</a>
                <a href="/login" class="mx-3 text-white hover:text-blue-400 transition">Login</a>
                <a href="/mood" class="mx-3 text-white hover:text-blue-400 transition">Mood Board</a>
                <a href="/road" class="mx-3 text-white hover:text-blue-400 transition">RoadMap</a>
            </nav>
        </div>
    </header>

<div class="min-h-screen bg-white flex flex-col items-center py-12 px-4">
    <h1 class="text-4xl font-bold mb-6 text-black tracking-tight">Tattoo Parlor Moodboard</h1>
    <div class="w-full max-w-5xl mb-10">
        <h2 class="text-2xl font-bold mb-4 text-black">Color Palette</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Black -->
            <div class="flex flex-col items-center">
                <div class="w-32 h-32 rounded-lg bg-black border-4 border-gray-200 mb-4"></div>
                <span class="text-lg font-semibold text-black">Black</span>
                <span class="text-gray-500 text-sm">#000000</span>
                <p class="mt-2 text-center text-gray-700 text-sm">Classic, bold lines. Represents tradition and strength in tattoo art.</p>
            </div>

            <!-- White -->
            <div class="flex flex-col items-center">
                <div class="w-32 h-32 rounded-lg bg-white border-4 border-gray-300 mb-4"></div>
                <span class="text-lg font-semibold text-black">White</span>
                <span class="text-gray-500 text-sm">#ffffff</span>
                <p class="mt-2 text-center text-gray-700 text-sm">Clean, minimalist. Used for highlights and negative space.</p>
            </div>

            <!-- Blue -->
            <div class="flex flex-col items-center">
                <div class="w-32 h-32 rounded-lg mb-4" style="background-color: #2563eb; border: 4px solid #dbeafe;"></div>
                <span class="text-lg font-semibold text-blue-600">Blue</span>
                <span class="text-gray-500 text-sm">#2563eb</span>
                <p class="mt-2 text-center text-gray-700 text-sm">Modern, cool accent. Adds vibrancy and depth to designs.</p>
            </div>
        </div>
    </div>

    <div class="w-full max-w-5xl mt-12">
        <h2 class="text-2xl font-bold mb-4 text-black text-left">Cards</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Inspiration Images (replace src with your own assets if available) -->
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80" alt="Tattoo Studio" class="rounded-lg shadow-lg w-64 h-40 object-cover mb-2">
                <span class="text-sm text-gray-600">Studio Ambience</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Tattoo Art" class="rounded-lg shadow-lg w-64 h-40 object-cover mb-2">
                <span class="text-sm text-gray-600">Linework Example</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Blue Ink Tattoo" class="rounded-lg shadow-lg w-64 h-40 object-cover mb-2">
                <span class="text-sm text-gray-600">Blue Accent</span>
            </div>
        </div>
    </div>
    <!-- Fonts Section -->
    <div class="mt-16 w-full max-w-5xl">
        <h2 class="text-2xl font-bold mb-4 text-black">Typography</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Sans Serif -->
            <div class="flex flex-col items-center">
                <span class="text-lg font-semibold text-black mb-2">Sans Serif (Montserrat)</span>
                <p class="font-sans text-xl mb-1" style="font-family: 'Montserrat', Arial, sans-serif;">POMAREJOS TATTOO BIN</p>
                <span class="text-gray-500 text-sm">Headings, navigation</span>
            </div>
            <!-- Serif -->
            <div class="flex flex-col items-center">
                <span class="text-lg font-semibold text-black mb-2">Serif (Merriweather)</span>
                <p class="font-serif text-xl mb-1" style="font-family: 'Merriweather', Georgia, serif;">Tradition &amp; Strength</p>
                <span class="text-gray-500 text-sm">Quotes, highlights</span>
            </div>
            <!-- Monospace -->
            <div class="flex flex-col items-center">
                <span class="text-lg font-semibold text-black mb-2">Monospace (Fira Mono)</span>
                <p class="font-mono text-xl mb-1" style="font-family: 'Fira Mono', monospace;">#2563eb</p>
                <span class="text-gray-500 text-sm">Accent, code, numbers</span>
            </div>
        </div>
    </div>
    <!-- Action Buttons -->
    <div class="w-full max-w-5xl mt-12 flex flex-col items-start">
        <h2 class="text-2xl font-bold text-black mb-4">Buttons</h2>
        <div class="flex flex-row justify-center items-center w-full space-x-6">
            <a href="/booking" class="px-8 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition font-bold text-lg">
                Book Appointment
            </a>
            <a href="/gallery" class="px-8 py-3 bg-black text-blue-400 border-2 border-blue-600 rounded-lg shadow hover:bg-blue-900 hover:text-white transition font-bold text-lg">
                View Gallery
            </a>
        </div>
    </div>
    
    <!-- Google Fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&family=Merriweather:wght@700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        .font-sans { font-family: 'Montserrat', Arial, sans-serif; }
        .font-serif { font-family: 'Merriweather', Georgia, serif; }
        .font-mono { font-family: 'Fira Mono', monospace; }
    </style>

</div>
<!-- Tailwind CDN (for local dev/demo, remove if already included globally) -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Footer -->
    <footer class="bg-black py-6 text-center text-blue-400 text-sm">
        &copy; <?= date('Y') ?> Pomarejos Tattoo Bin. All rights reserved.
    </footer>
