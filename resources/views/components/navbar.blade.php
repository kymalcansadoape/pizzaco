<nav class="w-full flex fixed duration-[0.7s] top-0 z-100 justify-between text-white mx-auto md:px-[90px] md:pt-[25px] items-center" :class="{ 'bg-white text-black shadow transition duration-[0.7s] md:pt-[15px]' : showBar }"
@scroll.window="showBar = (window.pageYOffset > 20) ? true : false">
    <div class="w-[190px]">
        <img class="w-full" src="{{ asset('img/img/logo.png') }}" alt="Logo">
    </div>
    <div class="w-[50%] flex justify-center space-x-[50px] text-[25px] font-light">
        <div x-data="{open: false}" @mouseleave="open = false" >
            <a class="decoration-none" @mouseover="open = true"  href="#">
                Home
                <span class="ml-[5px] inline-block border-r-[3px] rounded-br-[4.5px] border-b-[3px] border-white w-[18px] h-[18px] rotate-45 -translate-y-[3.5px]"></span>
            </a>
            <div x-show="open" class="bg-white text-black text-[16px] px-2 py-1 rounded-md">
                <ul>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div>
            <a class="decoration-none" href="#">Menu</a>
        </div>
        <div>
            <a class="decoration-none" href="#">About
                <span class="ml-[5px] inline-block border-r-[3px] rounded-br-[4.5px]
                border-b-[3px] border-white w-[18px] h-[18px] rotate-45 -translate-y-[3.5px]"></span>
            </a>
        </div>
        <div>
            <a class="decoration-none" href="#">Contact</a>
        </div>
    </div>
    <div class="md:w-[190px] flex justify-end">
        <svg class="text-[#FB8F2D]" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
            class="bi bi-cart4" viewBox="0 0 16 16">
            <path
                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
        </svg>
    </div>
</nav>
