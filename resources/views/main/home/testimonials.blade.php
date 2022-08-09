 @push('styles')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
 @endpush

 {{-- https://randomuser.me/api/portraits/men/11.jpg --}}

 <section id="testimonials" class="relative w-full h-full my-14">

    <div class="absolute z-10 w-full h-full overflow-hidden">
        <img class="object-cover w-full h-full bg-cover" src="{{ asset('img/img/pizza-1.jpg') }}" width="100px"
            alt="">
    </div>
    <div class="bg-[#FB8F2D]/80 z-20 w-full h-full absolute "></div>
    <div class="relative z-30 w-full h-full">
        <div class="pt-8 text-center text-white">
            <p class="text-3xl">Testimonials</p>
            <p class="text-5xl font-semibold">What our customers says about our food</p>
        </div>
        <div class="z-50 w-full px-10 py-12 md:px-[90px]">
            <div class="flex gap-5 py-20 my-slider">
                <div class="relative w-[35%]  pb-16 bg-white rounded-xl">
                    <img class="w-[135px] h-[135px] rounded-full border-white border-8 absolute  -translate-y-[50%] left-[50%] -translate-x-[50%]"
                        src="https://randomuser.me/api/portraits/men/40.jpg " alt="">
                    <p class="px-10 pt-16 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, modi earum incidunt laboriosam fugiat in numquam asperiores sunt?</p>
                </div>
                <div class="relative w-[35%]  pb-16 bg-white rounded-xl">
                    <img class="w-[135px] h-[135px] rounded-full border-white border-8 absolute  -translate-y-[50%] left-[50%] -translate-x-[50%]"
                        src="https://randomuser.me/api/portraits/men/41.jpg " alt="">
                    <p class="px-10 pt-16 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, modi earum incidunt laboriosam fugiat in numquam asperiores sunt?</p>
                </div>
                <div class="relative w-[35%]  pb-16 bg-white rounded-xl">
                    <img class="w-[135px] h-[135px] rounded-full border-white border-8 absolute  -translate-y-[50%] left-[50%] -translate-x-[50%]"
                        src="https://randomuser.me/api/portraits/men/42.jpg " alt="">
                    <p class="px-10 pt-16 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, modi earum incidunt laboriosam fugiat in numquam asperiores sunt?</p>
                </div>
                <div class="relative w-[35%]  pb-16 bg-white rounded-xl">
                    <img class="w-[135px] h-[135px] rounded-full border-white border-8 absolute  -translate-y-[50%] left-[50%] -translate-x-[50%]"
                        src="https://randomuser.me/api/portraits/men/43.jpg " alt="">
                    <p class="px-10 pt-16 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, modi earum incidunt laboriosam fugiat in numquam asperiores sunt?</p>
                </div>
                <div class="relative w-[35%]  pb-16 bg-white rounded-xl">
                    <img class="w-[135px] h-[135px] rounded-full border-white border-8 absolute  -translate-y-[50%] left-[50%] -translate-x-[50%]"
                        src="https://randomuser.me/api/portraits/men/44.jpg " alt="">
                    <p class="px-10 pt-16 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, modi earum incidunt laboriosam fugiat in numquam asperiores sunt?</p>
                </div>
                <div class="relative w-[35%]  pb-16 bg-white rounded-xl">
                    <img class="w-[135px] h-[135px] rounded-full border-white border-8 absolute  -translate-y-[50%] left-[50%] -translate-x-[50%]"
                        src="https://randomuser.me/api/portraits/men/45.jpg " alt="">
                    <p class="px-10 pt-16 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, modi earum incidunt laboriosam fugiat in numquam asperiores sunt?</p>
                </div>

            </div>
        </div>
    </div>

</section>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script>
        var slider = tns({
            container: '.my-slider',
            "items": 1,
            "gutter": 10,
            "swipeAngle": false,
            "speed": 400,
            nav: false,
            controls: false,
            autoplay: true,
            mouseDrag: true,
            loop: true,
            slideBy: 'page',
            edgePadding: 40,
            responsive:  {
                640: {
                    items: 1,
                },
                768: {
                    items: 3,
                }
            }
        });
    </script>
@endpush
