<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Vishal Dutt Gour - Urologist</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-screen bg-gray-100 font-sans">

    <nav x-data="{ open: false }" class="fixed top-4 md:top-10 left-1/2 -translate-x-1/2 w-[95%] max-w-7xl z-50">
        <div class="bg-white/95 backdrop-blur-md rounded-2xl md:rounded-full px-6 py-3 shadow-lg transition-all duration-300">
            
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="bg-blue-100 p-2 rounded-lg text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital"><path d="M12 7v4"/><path d="M14 21v-3a2 2 0 0 0-4 0v3"/><path d="M14 9h-4"/><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"/><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                    <div>
                        <span class="text-sm md:text-lg font-bold text-gray-900 block leading-tight">
                            Dr. Vishal Dutt Gour
                        </span>
                        <span class="hidden sm:block text-[8px] uppercase tracking-wider text-gray-600 font-bold">
MBBS, MS – General Surgery, MCh – Urology
                        </span>
                        <span class="hidden sm:block text-[8px] uppercase tracking-wider text-blue-600 font-bold">
Urologist, Andrologist and Male Fertility Specialist
                        </span>
                    </div>
                </div>

                <ul class="hidden text-sm lg:flex items-center gap-8 text-gray-600 font-medium">
                    <li class="hover:text-blue-600 transition cursor-pointer">About</li>
                    <li class="hover:text-blue-600 transition cursor-pointer">Treatments</li>
                    <li class="hover:text-blue-600 transition cursor-pointer">Services</li>
                    <li class="hover:text-blue-600 transition cursor-pointer">Success Stories</li>
                    <li class="hover:text-blue-600 transition cursor-pointer">Hospitals</li>
                    <li class="hover:text-blue-600 transition cursor-pointer">Blog</li>
                    <li class="hover:text-blue-600 transition cursor-pointer">ContactUs</li>
                </ul>

                <div class="flex items-center gap-4">
                    <button class="hidden sm:flex bg-blue-600 hover:bg-blue-700 text-white text-sm px-6 py-2.5 rounded-full transition items-center gap-2 shadow-md shadow-blue-200">
                        Book Consultation
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </button>

                    <button @click="open = !open" class="lg:hidden p-2 text-gray-600">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                </div>
            </div>

            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="lg:hidden mt-4 pb-4 border-t border-gray-100">
                <ul class="flex flex-col list-none gap-4 pt-4 text-gray-700 font-medium">
                    <li class="hover:text-blue-600 list-none transition py-2 border-b border-gray-50">About</li>
                    <li class="hover:text-blue-600 list-none transition py-2 border-b border-gray-50">Services</li>
                    <li class="hover:text-blue-600 list-none transition py-2 border-b border-gray-50">Treatments</li>
                    <li class="hover:text-blue-600 list-none transition py-2 border-b border-gray-50">Hospitals</li>
                    <li class="hover:text-blue-600 list-none transition py-2 border-b border-gray-50">Blog</li>
                    <li class="hover:text-blue-600 list-none transition py-2 border-b border-gray-50">Contact</li>
                    <li>
                        <button class="w-full bg-blue-600 text-white py-3 rounded-xl mt-2">Book Consultation</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="relative min-h-screen w-full flex items-center">
        <img

            src="https://media.istockphoto.com/id/1080665440/photo/asian-senior-man-lying-on-sofa-while-his-wife-holding-and-looking-to-thermometer.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=kAR_8ss1zK4EEPxEzyDIkiAJrOr8YWuGA1EYY517gjk=" 
            class="absolute inset-0 w-full h-full object-cover"
            alt="Medical Background"
        />

       <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>

        <div class="relative z-10 w-full px-6">
            <div class="max-w-5xl mx-auto">
                <div class="max-w-2xl text-white">
                   
                    <h1 class="text-3xl md:text-6xl font-bold leading-tight">
                        Expert Care for Male Fertility & Urological Health
                     </h1>

                    <p class="mt-6   text-gray-200 leading-relaxed">
Dr. Vishal Dutt Gour is a trusted Urologist, Andrologist & Male Fertility Specialist in Delhi, helping men overcome fertility challenges with advanced, evidence-based treatments and compassionate care.                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <button class="bg-white text-black px-8 py-4 rounded-full font-bold hover:bg-gray-200 transition shadow-lg shadow-blue-900/20">
                            Book Appointment
                        </button>

                        <button class="backdrop-blur-sm border border-white/40 bg-white/10 text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-black transition">
                            Our Services
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>