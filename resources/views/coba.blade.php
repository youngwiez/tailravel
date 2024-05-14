<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Raka's Portfolio</title>
</head>
<body>
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-bold md:text-xl lg:text-3xl">Hello, I'm <span class="mt-1 block text-5xl lg:text-6xl text-blue-600 mb-5">Raka</span></h1>
                    <p class="font-medium leading-relaxed mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#about" class="text-base text-white font-semibold bg-blue-400 hover:bg-blue-600 hover:shadow-lg duration-300 px-8 py-3 rounded-xl">Read More</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="{{asset('img/pp_nobg.png')}}" alt="Raka Wisesa" class="max-w-full mx-auto">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="350" height="350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#2563EB" d="M46.9,-63.7C56.7,-57.5,57.6,-38.2,61.1,-21.3C64.6,-4.3,70.7,10.3,68.2,23.4C65.6,36.5,54.5,48.1,41.7,59.8C28.9,71.4,14.5,83.2,1.8,80.7C-11,78.3,-21.9,61.8,-34.4,50C-46.9,38.3,-60.9,31.3,-69.5,19.2C-78,7.1,-81.1,-10.1,-77.4,-26.2C-73.6,-42.3,-63.1,-57.3,-49.1,-62.2C-35,-67,-17.5,-61.6,0.5,-62.4C18.6,-63.1,37.2,-69.9,46.9,-63.7Z"
                                transform="translate(100 100) scale(1.1)"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="pt-36 pb-32 bg-blue-200">

    </section>
</body>
</html>