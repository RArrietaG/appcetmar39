<div>
    <div  x-data={open:false} class="bg-white shadow sticky top-0" style="z-index: 200">
        <header>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-6">
                <div class="flex items-center justify-between h-20">
                    <a href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" class="h-12">
                    </a>
                    <div class="flex">
                        <nav class="hidden lg:block">
                            <ul class="flex space-x-4">
                                <li>
                                    <a class="inline-block text-sm hover:text-blue-600 border-y-2 border-transparent text-blue-600 border-b-blue-600 font-semibold" style="line-height: 4rem" href="/">
                                        Inicio
                                    </a>
                                </li>
                                <li>
                                    <a title="Sistema de gestión integral" class="inline-block text-sm hover:text-blue-600 border-y-2 border-transparent text-gray-700" style="line-height: 4rem" href="{{ route('dashboard') }}">
                                        SGI
                                    </a>
                                </li>
                                <li>
                                    <a class="inline-block text-sm hover:text-blue-600 border-y-2 border-transparent text-gray-700" style="line-height: 4rem" href="#">
                                        Galería
                                    </a>
                                </li>
                                <li>
                                    <a class="inline-block text-sm hover:text-blue-600 border-y-2 border-transparent text-gray-700" style="line-height: 4rem" href="#">
                                        Nosotros
                                    </a>
                                </li>
                                <li>
                                    <a class="inline-block text-sm hover:text-blue-600 border-y-2 border-transparent text-gray-700" style="line-height: 4rem" href="{{ route('registration') }}">
                                        Preinscripciones
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="flex items-center space-x-4 ml-6">
                            <a href="https://www.facebook.com/CETMAR39" target="_blank" class="hidden lg:block">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                     width="24" height="24"
                                     viewBox="0 0 172 172"
                                     style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#0478c6"><path d="M136.16667,21.5h-100.33333c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v100.33333c0,7.91917 6.41417,14.33333 14.33333,14.33333h54.61717v-49.88717h-16.7915v-19.52917h16.7915v-14.36917c0,-16.65533 10.18383,-25.7355 25.0475,-25.7355c5.0095,-0.01433 10.01183,0.24367 14.99267,0.7525v17.415h-10.234c-8.09833,0 -9.675,3.827 -9.675,9.47433v12.43417h19.35l-2.5155,19.52917h-16.94917v49.91583h25.69967c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-100.33333c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333z"></path></g></g>
                                </svg>
                            </a>
                        </div>
                        <button x-on:click="open = true" type="button" aria-label="toggle menu" class="lg:hidden text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 ml-4">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
    
        <!-- Mobil menu con alpine JS -->
    
        <div x-on:click="open = true" style="z-index: 300;" class="fixed left-0 top-0 w-screen h-screen z-20 bg-black bg-opacity-25 lg:hidden">
            <div  x-show="open" @click.away="open = false"  style="height: 100vh" class="flex flex-col w-72 h-screen px-4 py-8 bg-white border-r overflow-y-auto">
    
                <div class="flex w-full justify-center">
                    <a href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" class="h-16">
                    </a>
                </div>
    
                <div class="mt-6">
                    <nav class="s space-y-5">
                        <a class="flex items-center px-4 py-2 text-white transition-colors duration-200 transform rounded-md hover:bg-gray-200 hover:text-gray-700 bg-blue-600" href="/">
                            <span class="mx-4 font-medium font-semibold">Inicio</span>
                        </a>
    
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-200 transform rounded-md hover:bg-blue-600 hover:text-white" href="{{ route('dashboard') }}">
                            <span class="mx-4 font-medium font-semibold">SGI</span>
                        </a>
    
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-200 transform rounded-md hover:bg-blue-600 hover:text-white" href="#">
                            <span class="mx-4 font-medium font-semibold">Galeria</span>
                        </a>
    
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-200 transform rounded-md hover:bg-blue-600 hover:text-white" href="#">
                            <span class="mx-4 font-medium font-semibold">Nosotros</span>
                        </a>
                        <a class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-200 transform rounded-md hover:bg-blue-600 hover:text-white" href="#">
                            <span class="mx-4 font-medium font-semibold">Preinscripciones</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>