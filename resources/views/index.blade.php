<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <title>Raka's Portfolio</title>
</head>
<body>
    <!-- navbar -->
    <header class="absolute top-0 left-0 w-full z-50 bg-transparent">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="pl-8 py-3 text-xl md:text-3xl font-bold text-white"><span class="text-blue-300">Raka</span> Wisesa</a>
            <ul class="hidden sm:flex items-center pr-10 text-base font-semibold cursor-pointer">
                <li class="p-4 text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300 ease-in-out"><a href="#home">Home</a></li>
                <li class="p-4 text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300 ease-in-out"><a href="#about">About Me</a></li>
                <li class="p-4 text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300 ease-in-out"><a href="#projects">Projects</a></li>
                <li class="p-4 text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300 ease-in-out"><a href="#contacts">Contacts</a></li>
            </ul>
            <button class="block sm:hidden py-3 px-4 mx-2 focus:outline-none group">
                <i class="fa-solid fa-bars text-white"></i>
                <div class="fixed top-0 -right-full h-screen w-6/12 bg-slate-900/95 border-none opacity-0 rounded-xl shadow-xl
                group-focus:right-0 group-focus:opacity-100 transition-all duration-500">
                    <ul class="flex flex-col items-center w-full text-base font-semibold cursor-pointer pt-10">
                        <li class="text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300 ease-in-out mb-2"><a href="#home">Home</a></li>
                        <li class="text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300 ease-in-out mb-2"><a href="#about">About Me</a></li>
                        <li class="text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300 ease-in-out mb-2"><a href="#projects">Projects</a></li>
                        <li class="text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300 ease-in-out mb-2"><a href="#contacts">Contacts</a></li>
                    </ul>
                </div>
            </button>
        </div>
    </header>

    <!-- home section -->
    <section id="home" class="bg-gradient-to-b from-blue-800 via-slate-900 to-slate-900 light:bg-light">
        <div class="min-h-screen flex flex-col justify-center relative">
            <!-- content -->
            <div class="container mx-auto flex flex-wrap items-center mt-20 lg:mt-0">
                <div class="w-full lg:w-1/2 self-center flex flex-col justify-center">
                    <div class="pl-10 pr-10">
                        <h1 class="text-4xl font-bold lg:text-6xl text-white">Hello, I am <br><span class="text-blue-300">Raka</span></h1>
                        <p class="mt-5 leading-relaxed text-white text-md lg:text-lg">Junior Full-stack Developer | Junior Network Engineer</p>
                    </div>
                    <div class="pl-10 mt-10">
                        <a href="#about" class="bg-transparent border-2 border-blue-300 
                        hover:bg-blue-300 hover:text-slate-900 hover:shadow-lg duration-300 px-8 py-3 text-white font-semibold rounded-xl">Read More</a>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 self-center relative mt-0 lg:mt-0">
                    <div class="relative lg:right-10 flex justify-center lg:justify-end">
                        <div class="relative flex justify-center items-center">
                            <span class="absolute inset-0 flex justify-center items-center overflow-visible">
                                <svg width="700" height="700" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#1D4ED8" d="M46.9,-63.7C56.7,-57.5,57.6,-38.2,61.1,-21.3C64.6,-4.3,70.7,10.3,68.2,
                                    23.4C65.6,36.5,54.5,48.1,41.7,59.8C28.9,71.4,14.5,83.2,1.8,80.7C-11,78.3,-21.9,61.8,-34.4,50C-46.9,
                                    38.3,-60.9,31.3,-69.5,19.2C-78,7.1,-81.1,-10.1,-77.4,-26.2C-73.6,-42.3,-63.1,-57.3,-49.1,-62.2C-35,-67,
                                    -17.5,-61.6,0.5,-62.4C18.6,-63.1,37.2,-69.9,46.9,-63.7Z"
                                    transform="translate(100 100) scale(1.2)"/>
                                </svg>
                            </span>
                            <img src="{{asset('img/pp.png')}}" alt="Raka Wisesa" class="max-w-sm lg:max-w-md relative z-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about section -->
    <section id="about" class="pt-32 pb-32 bg-slate-900">
        <div class="container">
            <div class="flex items-center flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="flex pl-10 pr-10">
                        <img src="{{asset('img/ngetik.JPG')}}" alt="Typing" class="rounded-xl shadow-2xl">
                    </div>
                </div>
                <div class="w-full px-4 sm:pt-10 md:pt-0 lg:w-1/2">
                    <div class="pl-10 pr-10">
                        <h3 class="font-semibold text-lg text-sky-100">About Me</h3>
                        <h1 class="text-3xl font-bold lg:text-4xl text-blue-300">a.k.a My Intro</h1>
                        <p class="mt-5 leading-relaxed text-justify text-white">Hello, I am Muhammad Raka Andra Wisesa,
                            one of students majoring in Information System, Network, and Application (SIJA) 
                            at SMK Negeri 2 Depok, Sleman, Yogyakarta.
                        </p>
                        <p class="mt-5 mb-5 leading-relaxed text-justify text-white">
                            I have some experience in programming such as creating inventory system applications and simple websites, 
                            and also in the network field I have experience in creating cloud servers and local servers, 
                            as well as creating and managing network systems.
                        </p>
                        <a href="https://linkedin.com/in/raka-wisesa" target="blank" class="flex items-center font-bold md:text-xl space-x-2 
                        text-white border-2 border-transparent rounded-xl">
                            <i class="fa-brands fa-linkedin text-blue-300 text-4xl"></i>
                            <span>Muhammad Raka Andra Wisesa</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- projects section -->
    <section id="projects" class="pt-20 bg-slate-900">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 items-center pb-10">
                    <h3 class="font-semibold text-lg text-white text-center">My Projects</h3>
                    <h1 class="font-bold text-3xl lg:text-4xl text-blue-300 text-center">Here are my some previous projects</h1>
                </div>
            </div>
            <div class="pl-10 pr-10 pb-5">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">
                    <div class="relative flex flex-col bg-sky-100 bg-clip-border rounded-xl group">
                        <div class="relative mx-4 mt-4 overflow-hidden rounded-xl w-90 grayscale group-hover:grayscale-0 duration-300">
                            <img src="{{asset('img/project_1.png')}}" alt="library_inventory"/>
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-2xl font-semibold text-slate-900">School Library Inventory</h3>
                            <div class="flex justify-center p-4 gap-6">
                                <i class="fa-brands fa-php text-slate-900 text-4xl group-hover:text-indigo-500 duration-300"></i>
                                <i class="fa-brands fa-bootstrap text-slate-900 text-4xl group-hover:text-purple-800 duration-300"></i>
                            </div>
                            <div class="p-4">
                                <a href="https://github.com/youngwiez/perpustakaan" target="blank" class="bg-transparent border-2 border-slate-700 hover:bg-slate-700 
                                    hover:text-sky-100 hover:shadow-xl duration-300 px-2 md:px-8 py-3 text-slate-900 font-semibold rounded-xl">
                                    <i class="fa-brands fa-github space-x-2"></i>
                                    Repository
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-sky-100 bg-clip-border rounded-xl group">
                        <div class="relative mx-4 mt-4 overflow-hidden rounded-xl w-90 grayscale group-hover:grayscale-0 duration-300">
                            <img src="{{asset('img/project_2.png')}}" alt="my_portfolio_website"/>
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-2xl font-semibold text-slate-900">My Portfolio Website</h3>
                            <div class="flex justify-center items-center p-2 pt-4 gap-5">
                                <i class="fa-brands fa-laravel text-slate-900 text-4xl group-hover:text-orange-600 duration-300"></i>
                                <svg class="w-12 h-12 fill-current group-hover:text-sky-400 duration-300" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.036c-2.667 0-4.333 1.325-5 3.976 1-1.325 2.167-1.822
                                    3.5-1.491.761.189 1.305.738 1.906 1.345C13.387 10.855 14.522 12 17 12c2.667 0 4.333-1.325 5-3.976-1 1.325-2.166
                                    1.822-3.5 1.491-.761-.189-1.305-.738-1.907-1.345-.98-.99-2.114-2.134-4.593-2.134zM7 12c-2.667 0-4.333 1.325-5 3.976
                                    1-1.326 2.167-1.822 3.5-1.491.761.189 1.305.738 1.907 1.345.98.989 2.115 2.134 4.594 2.134 2.667 0 4.333-1.325 5-3.976-1
                                    1.325-2.167 1.822-3.5 1.491-.761-.189-1.305-.738-1.906-1.345C10.613 13.145 9.478 12 7 12z"/>
                                </svg>
                            </div>
                            <div class="p-4">
                                <a href="https://github.com/youngwiez/portfolio" target="blank" class="bg-transparent border-2 border-slate-700 hover:bg-slate-700 
                                    hover:text-sky-100 hover:shadow-xl duration-300 px-2 md:px-8 py-3 text-slate-900 font-semibold rounded-xl">
                                    <i class="fa-brands fa-github space-x-2"></i>
                                    Repository
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-sky-100 bg-clip-border rounded-xl group">
                        <div class="relative mx-4 mt-4 overflow-hidden rounded-xl w-90 grayscale group-hover:grayscale-0 duration-300">
                            <img src="{{asset('img/project_3.png')}}" alt="students_db_website"/>
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-2xl font-semibold text-slate-900">Students Database Website</h3>
                            <div class="flex justify-center p-4 gap-6">
                                <i class="fa-brands fa-laravel text-slate-900 text-4xl group-hover:text-orange-600 duration-300"></i>
                                <i class="fa-brands fa-bootstrap text-slate-900 text-4xl group-hover:text-purple-800 duration-300"></i>
                            </div>
                            <div class="p-4">
                                <a href="https://github.com/youngwiez/lspp1" target="blank" class="bg-transparent border-2 border-slate-700 hover:bg-slate-700 
                                    hover:text-sky-100 hover:shadow-xl duration-300 px-2 md:px-8 py-3 text-slate-900 font-semibold rounded-xl">
                                    <i class="fa-brands fa-github space-x-2"></i>
                                    Repository
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 pb-10">
                <div class="p-4 text-center">
                    <h3 class="font-semibold text-lg text-white pb-5">Find more at</h3>
                    <a href="https://github.com/youngwiez/" target="blank" class="bg-transparent border-2 border-blue-300 hover:bg-blue-300 
                        hover:text-slate-900 hover:shadow-lg duration-300 px-2 py-3 md:px-8 text-white font-semibold rounded-xl">
                        <i class="fa-brands fa-github space-x-2 text-xl"></i>
                        <span>github.com/youngwiez</span>
                    </a>
                    <!-- <a href="https://github.com/youngwiez/" target="blank" class="bg-transparent border-2 border-blue-300 hover:bg-blue-300 
                        flex items-center justify-center hover:text-slate-900 hover:shadow-lg duration-300 px-3 py-3 md:px-0 text-white font-semibold space-x-2 rounded-xl
                        max-w-sm mx-auto">
                        <i class="fa-brands fa-github text-xl"></i>
                        <span>github.com/youngwiez</span>
                    </a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- contacts section -->
    <!-- <section id="contacts" class="pt-20 pb-20 bg-slate-700">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="flex items-center px-4 sm:w-1/2">
                    <div class="pl-10 pr-10 w-full">
                        <h1 class="text-3xl md:text-4xl lg:text-6xl sm:text-right font-bold text-sky-100">Contact Me</h1>
                    </div>
                </div>
                <div class="flex items-center px-4 sm:w-1/2">
                    <div class="pl-10 pr-10 w-full">
                        <a href="https://wa.me/+6285877160617" target="blank" 
                        class="text-white font-semibold text-xl">
                            <i class="fa-brands fa-whatsapp space-x-2"></i>
                            (+62)85877160617
                        </a>
                        <br>
                        <a href="https://instagram.com/rakandrw" target="blank" 
                        class="text-white font-semibold text-xl">
                            <i class="fa-brands fa-instagram space-x-2"></i>
                            rakandrw
                        </a>
                        <br>
                        <a href="mailto:rakaawisesa@gmail.com" target="blank" 
                        class="text-white font-semibold text-xl">
                            <i class="fa-regular fa-envelope space-x-2"></i>
                            rakaawisesa@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="contacts" class="pt-24 pb-12 bg-slate-800">
        <div class="container">
            <div class="flex flex-wrap text-white">
                <div class="w-full px-4 mb-5 md:mb-0 font-medium md:w-1/3">
                    <h2 class="font-bold text-3xl md:text-4xl"><span class="text-blue-300">Raka</span> Wisesa</h2>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl mb-5">Contact Me</h3>
                    <ul>
                        <li>
                            <a href="#home" target="blank" class="inline-block text-base hover:text-blue-300 duration-300 ease-in-out mb-3">+6285877160617</a>
                        </li>
                        <li>
                            <a href="#about" target="blank" class="inline-block text-base hover:text-blue-300 duration-300 ease-in-out mb-3">Muhammad Raka Andra Wisesa</a>
                        </li>
                        <li>
                            <a href="#projects" target="blank" class="inline-block text-base hover:text-blue-300 duration-300 ease-in-out mb-3">rakaawisesa@gmail.com</a>
                        </li>
                        <li>
                            <a href="https://github.com/youngwiez" target="blank" class="inline-block text-base hover:text-blue-300 duration-300 ease-in-out mb-3">youngwiez</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl mb-5">Contact Me</h3>
                    <ul>
                        <li>
                            <a href="https://wa.me/+6285877160617" target="blank" class="inline-block text-base hover:text-blue-300 duration-300 ease-in-out mb-3">+6285877160617</a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/in/raka-wisesa" target="blank" class="inline-block text-base hover:text-blue-300 duration-300 ease-in-out mb-3">Muhammad Raka Andra Wisesa</a>
                        </li>
                        <li>
                            <a href="mailto:rakaawisesa@gmail.com" target="blank" class="inline-block text-base hover:text-blue-300 duration-300 ease-in-out mb-3">rakaawisesa@gmail.com</a>
                        </li>
                        <li>
                            <a href="https://github.com/youngwiez" target="blank" class="inline-block text-base hover:text-blue-300 duration-300 ease-in-out mb-3">youngwiez</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <section id="footer" class="pt-10 pb-10 bg-slate-800">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 items-center">
                    <h3 class="sm:text-sm md:text-md text-white text-center">© 2024 | Made by Love from Muhammad Raka Andra Wisesa</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- <a href="#home" class="fixed bottom-4 right-4 z-[9999] h-14 w-14 rounded-full 
    bg-sky-100/70 p-4 hover:bg-sky-100 hover:shadow-xl duration-300 flex justify-center">
        <i class="fa-solid fa-arrow-up text-slate-900/70 hover:text-slate-900 duration-300 text-2xl"></i>
    </a> -->
    <script src="{{asset('script/script.js')}}"></script>
</body>
</html>