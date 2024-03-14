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

    {{-- NAVBAR --}}
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
        {{-- NAVBAR END --}}

        {{-- FOOTER --}}
        <footer>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="0.6" d="M0,128L8.6,133.3C17.1,139,34,149,51,138.7C68.6,128,86,96,103,85.3C120,75,137,85,154,90.7C171.4,96,189,96,206,117.3C222.9,139,240,181,257,202.7C274.3,224,291,224,309,202.7C325.7,181,343,139,360,122.7C377.1,107,394,117,411,112C428.6,107,446,85,463,90.7C480,96,497,128,514,138.7C531.4,
                149,549,139,566,165.3C582.9,192,600,256,617,282.7C634.3,309,651,299,669,261.3C685.7,224,703,160,720,144C737.1,128,
                754,160,771,181.3C788.6,203,806,213,823,202.7C840,192,857,160,874,122.7C891.4,85,909,43,926,26.7C942.9,11,960,21,977,32C994.3,43,1011,53,1029,53.3C1045.7,53,1063,43,1080,48C1097.1,53,1114,75,1131,101.3C1148.6,128,1166,160,1183,176C1200,192,1217,192,1234,192C1251.4,192,1269,192,1286,197.3C1302.9,203,1320,213,1337,224C1354.3,235,1371,245,1389,224C1405.7,203,1423,149,1431,
                122.7L1440,96L1440,320L1431.4,320C1422.9,320,1406,320,1389,320C1371.4,320,1354,320,1337,320C1320,320,1303,320,1286,320C1268.6,320,1251,320,1234,320C1217.1,320,1200,320,1183,320C1165.7,320,1149,320,1131,320C1114.3,320,1097,320,1080,320C1062.9,320,1046,320,1029,320C1011.4,320,994,320,977,320C960,320,943,320,926,320C908.6,320,891,320,874,320C857.1,320,840,320,823,320C805.7,
                320,789,320,771,320C754.3,320,737,320,720,320C702.9,320,686,320,669,320C651.4,320,634,320,617,320C600,320,583,320,566,320C548.6,320,531,320,514,320C497.1,320,480,320,463,320C445.7,320,429,320,411,320C394.3,320,377,320,360,320C342.9,320,326,320,309,320C291.4,320,274,320,257,320C240,320,223,320,206,320C188.6,320,171,320,154,320C137.1,320,120,320,103,320C85.7,320,69,320,51,320C34.3,320,17,320,9,320L0,320Z"></path></svg>
        </footer>

        <script>
            const navLinks = document.querySelector('.nav-links')
            function onToggleMenu(e){
                e.name = e.name === 'menu' ? 'close' : 'menu'
                navLinks.classList.toggle('top-[9%]')
            }
        </script>
    </body>

    </html>