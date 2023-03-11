<div>
    <header class="bg-white px-6 shadow">
        <div x-data="{ open: false }" class="flex justify-between h-16 items-center max-w-6xl mx-auto">
            <button @click="open = true"
                    class="focus:ring-1 focus:ring-slate-200 text-slate-500 hover:bg-sky-500 rounded hover:text-slate-100 p-1 -ml-1 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div class="flex -mr-4 items-center">
                <a class="text-sky-500 hover:rotate-6 duration-200" href="#">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                    </svg>
                </a>
                <div x-data="{ open : false}" class="space-x-8 ml-8 hidden md:flex justify-between items-center">
                    <a class="px-3 py-2 text-sky-500" href="">Inicio</a>
                    <a class="text-slate-600 px-3 py-2 hover:text-sky-500 transition-colors" href="#">Acerca de</a>
                    <a class="text-slate-600 px-3 py-2 hover:text-sky-500 transition-colors" href="">Contacto</a>
                    <div class="relative inline-block text-left">
                        <div>
                            <button @click="open = true" type="button" class="inline-flex flex justify-between items-center w-full justify-center rounded-md bg-white text-slate-600 px-3 py-2 hover:text-sky-500 transition-colors shadow-sm hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Alumnos
                                <svg class="-mr-1 mt-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div x-show="open" @click.outside="open = false" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                                <form method="POST" action="#" role="none">
                                    <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex">
                <button class="focus:ring-1
                                    focus:ring-slate-200 focus:ring-offset-1
                                    text-slate-500
                                    rounded-full hover:text-sky-500 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                </button>
                <button class="focus:ring-1 ml-4
                                    focus:ring-slate-200 focus:ring-offset-1
                                    text-slate-500
                                    rounded-full hover:text-sky-500 transition-colors">
                    <img class="h-6 w-6 rounded-full" src="https://ui-avatars.com/api?name=Rutilo+Arrieta"
                         alt="Rutilo Arrieta">
                </button>
            </div>
        </div>

        <div x-data="{open : false}" class="space-y-1 pb-3 pt-2 border-t hidden">
            <button  @click="open = true">

            </button>
                <div x-show="open" @click.outside="open = false">
                    <a class="px-3 py-2 block text-white bg-sky-500 rounded-md" href="#">Home1</a>
                    <a class="px-3 py-2 transition-colors block text-slate-700 hover:text-white hover:bg-sky-500 rounded-md"
                       href="#">About</a>
                    <a class="px-3 py-2 transition-colors block text-slate-700 hover:text-white hover:bg-sky-500 rounded-md"
                       href="#">Contact</a>
                    <a class="px-3 py-2 transition-colors block text-slate-700 hover:text-white hover:bg-sky-500 rounded-md"
                       href="#">Blog</a>
                </div>
        </div>

    </header>
</div>
