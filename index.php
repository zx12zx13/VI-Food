<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VI Food</title>
</head>
<body>
    <!-- Hero -->
    <div class="flex container mx-auto max-w-5xl min-h-screen items-center text-center lg:px-12 lg:text-start">
        <div class="space-y-3 flex flex-col items-center mx-auto lg:items-start">
            <img src="./public/logo.svg" alt="logo" class="h-5">
            <h1 class="font-bold text-4xl">Sistem Pelayanan Khusus Tempat Makan</h1>
            <p>VI-Food memudahkan pemesanan makanan dan tempat makan dengan sistem pembayaran online</p>
            <div class="pt-2"></div>
            <a href="#tentang-kami" class="px-8 py-3 bg-primary text-white rounded-lg font-bold hover:bg-primary/70">Lebih Lanjut</a>
        </div>
        <div class="hidden lg:block self-start">
            <img src="./public/hero-image.png" alt="" class="max-h-[80vh]">
        </div>
    </div>
    <!-- Tentang Kami -->
    <section id="tentang-kami" class="flex flex-col-reverse justify-center container mx-auto lg:px-12 max-w-5xl min-h-screen text-center lg:items-center lg:text-start lg:flex-row">
        <img src="./public/about-us.png" alt="" class="max-h-[80vh] mx-7 lg:max-w-[50%] lg:m-0">
        <div class="pt-6 pl-6"></div>
        <div class="space-y-3">
            <h2 class="font-bold text-3xl">Tentang Kami</h2>
            <p>VI-Food merupakan sebuah aplikasi untuk pelanggan VIP di sebuah Tempat Makan yang menyediakan layanan VIP. Dengan Aplikasi ini, pelanggan bisa mendaftar sebagai pelanggan VIP dengan mudah. Aplikasi ini menyediakan berbagai fitur seperti pemesanan online sehingga pelanggan tidak perlu mengantri, dan fitur untuk mengecek kesediaan tempat makan di slot VIP.</p>
        </div>
    </section>
    <!-- Layanan Kami -->
    <section id="layanan-kami" class="container mx-auto lg:px-12 max-w-5xl min-h-screen py-8 flex flex-col gap-6">
        <h2 class="font-bold text-3xl text-center">Layanan Kami</h2>
        <!-- List Layanan -->
        <div class="flex flex-wrap justify-center gap-4">
            <div class="space-y-3 text-center">
                <img src="./public/layanan-1.png" alt="" class="md:w-[300px] lg-w-[200px]">
                <p>Mudah Memesan Lewat App</p>
            </div>
            <div class="space-y-3 text-center">
                <img src="./public/layanan-2.png" alt="" class="md:w-[300px] lg-w-[200px]">
                <p>Pesanan Cepat Disajikan </p>
            </div>
            <div class="space-y-3 text-center">
                <img src="./public/layanan-3.png" alt="" class="md:w-[300px] lg-w-[200px]">
                <p>Menyediakan Layanan Khusus</p>
            </div>
            <div class="space-y-3 text-center">
                <img src="./public/layanan-4.png" alt="" class="md:w-[300px] lg-w-[200px]">
                <p>Mengutamakan Pesanan Anda</p>
            </div>
        </div>
    </section>
    <?php require "css/style-tag.php" ?>
</body>
</html>
