<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <title>Raka's Portfolio</title>
</head>
<body>
    <!-- bg-gradient-to-br from-white to-sky-300 -->
    <section id="home" class="bg-gradient-to-b from-slate-900 via-slate-900 to-blue-700">
    <div class="min-h-screen flex flex-col justify-center relative">
        <!-- navbar -->
        <nav class="fixed top-0 left-0 w-full z-50 bg-slate-900 shadow-xl">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="pl-8 py-3 text-3xl font-bold text-white"><span class="text-blue-300">Raka</span> Wisesa</a>
                <ul class="hidden sm:flex items-center pr-10 text-base font-semibold cursor-pointer">
                    <li class="p-4 text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300"><a href="/">Home</a></li>
                    <li class="p-4 text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300"><a href="#about">About Me</a></li>
                    <li class="p-4 text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300"><a href="/">Projects</a></li>
                    <li class="p-4 text-white border-b-2 border-blue-300 border-opacity-0 hover:border-opacity-100 duration-300"><a href="/">Contacts</a></li>
                </ul>
                <button class="block sm:hidden py-3 px-4 mx-2 focus:outline-none group">
                    <i class="fa-solid fa-bars text-white"></i>
                    <div class="fixed top-0 -right-full h-screen w-6/12 bg-slate-900/95 border-none opacity-0 rounded-xl shadow-xl
                    group-focus:right-0 group-focus:opacity-100 transition-all duration-500">
                        <ul class="flex flex-col items-center w-full text-base font-semibold cursor-pointer pt-10">
                            <li class="text-white hover:border-2 hover:border-blue-300 rounded-xl py-2 px-4 duration-300 w-full"><a href="/">Home</a></li>
                            <li class="text-white hover:border-2 hover:border-blue-300 rounded-xl py-2 px-4 duration-300 w-full"><a href="#about">About Me</a></li>
                            <li class="text-white hover:border-2 hover:border-blue-300 rounded-xl py-2 px-4 duration-300 w-full"><a href="/">Projects</a></li>
                            <li class="text-white hover:border-2 hover:border-blue-300 rounded-xl py-2 px-4 duration-300 w-full"><a href="/">Contacts</a></li>
                        </ul>
                    </div>
                </button>
            </div>
        </nav>
        <!-- content -->
        <div class="container mx-auto flex flex-wrap items-center mt-20 lg:mt-0">
            <div class="w-full lg:w-1/2 self-center flex flex-col justify-center">
                <div class="pl-10 pr-10">
                    <h1 class="text-4xl font-bold lg:text-6xl text-white">Hello, I'm <br><span class="text-blue-300">Raka</span></h1>
                    <p class="mt-5 leading-relaxed text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="pl-10 mt-10">
                    <a href="#about" class="bg-transparent border-2 border-blue-300 hover:bg-blue-300 hover:shadow-lg duration-300 px-8 py-3 text-white font-semibold rounded-xl">Read More</a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 self-center relative mt-0 lg:mt-0">
                <div class="relative lg:right-10 flex justify-center lg:justify-end">
                    <div class="relative flex justify-center items-center">
                        <span class="absolute inset-0 flex justify-center items-center overflow-visible">
                            <svg width="700" height="700" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#1D4ED8" d="M46.9,-63.7C56.7,-57.5,57.6,-38.2,61.1,-21.3C64.6,-4.3,70.7,10.3,68.2,23.4C65.6,36.5,54.5,48.1,41.7,59.8C28.9,71.4,14.5,83.2,1.8,80.7C-11,78.3,-21.9,61.8,-34.4,50C-46.9,38.3,-60.9,31.3,-69.5,19.2C-78,7.1,-81.1,-10.1,-77.4,-26.2C-73.6,-42.3,-63.1,-57.3,-49.1,-62.2C-35,-67,-17.5,-61.6,0.5,-62.4C18.6,-63.1,37.2,-69.9,46.9,-63.7Z"
                                transform="translate(100 100) scale(1.2)"/>
                            </svg>
                        </span>
                        <img src="{{asset('img/pp.png')}}" alt="Raka Wisesa" class="max-w-sm lg:max-w-sm relative z-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section id="about" class="pt-36 pb-32 bg-sky-50">
        <div class="container flex flex-wrap">
            <div class="w-full px-4 mb-10">
                <div class="pl-10 pr-10">
                    <h1 class="text-3xl font-bold lg:text-4xl">About Me</h1>
                    <p class="mt-5 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis iusto cum fugiat ducimus animi ratione aliquid porro reiciendis quos earum!</p>
                </div>
            </div>
            <div class="w-full px-4 mb-10">
                <div class="pl-10 pr-10">
                    <h1 class="text-3xl font-bold lg:text-4xl">Another Side</h1>
                    <p class="mt-5 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est temporibus vero nemo voluptate soluta iste vitae sunt accusamus, harum quod.</p>
                </div>
            </div>
        </div>    
        
    </section>
</body>
</html>