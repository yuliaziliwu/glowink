    <!doctype html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </head>

    {{-- <body class="font-[Poppins] bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen"> --}}
    <body class="font-[Poppins] bg-[#A0CADB] h-screen">
        <header class="bg-white">
            <nav class="flex justify-between items-center w-[92%]  mx-auto">
                <div class="items">
                    <ion-icon name="menu-outline" style="font-size: 24px" class="text-3xl"  ></ion-icon>
                    {{-- <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon> --}}
                </div>
                <div>
                    <img class="w-16 cursor-pointer" src="{{ asset('images/logo.png') }}" alt="images">
                </div>
                {{-- <main class="flex h-screen w-screen items-center justify-center bg-gray-900"> --}}
                    <div class="flex items-center justify-center w-full max-w-xl h-12 rounded bg-[#A0CADB] outline-none">
                        <input type="search" name="search" id="search" placeholder="Search here" class="flex-grow border-none bg-transparent px-4 py-1 text-gray-900 outline-none">
                        <ion-icon name="search-outline" class="text-gray-900 ml-auto" style="font-size: 24px;"></ion-icon>
                    </div>
                <div class="flex items-center gap-6">
                    <a href="#"><ion-icon name="bag-handle-outline" style="font-size: 24px"></ion-icon></a>
                    <a href="#"><ion-icon name="person-circle-outline" style="font-size: 24px"></ion-icon></a>
                </div>
            </nav>
        </header>



        <script>
            const navLinks = document.querySelector('.nav-links')
            function onToggleMenu(e){
                e.name = e.name === 'menu' ? 'close' : 'menu'
                navLinks.classList.toggle('top-[9%]')
            }
        </script>
    </body>

    </html>