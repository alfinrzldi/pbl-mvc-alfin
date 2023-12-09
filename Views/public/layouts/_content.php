<!-- Bagian Carousel -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-52 md:h-52 lg:h-96 overflow-hidden rounded-sm">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="public/images/carousel/Keripik Pisang Lumer.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="public/images/carousel/Banana Lava & Banana Crispy Nugget.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="public/images/carousel/Header.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96" alt="...">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="public/images/carousel/Keripik Seblak.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-52 lg:h-96"  alt="...">
      </div>
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>

<!-- Bagian Category -->
<section>
<div>
  <h3 class="flex justify-center font-bold text-2xl md:text-4xl mt-6 text-button"> 
    Category
  </h3>
</div>

<div class="p-1 flex flex-wrap items-center justify-center">

  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-pinknamara rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
          style="transform: scale(1.5); opacity: 0.1;">
          <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
          <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
          <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
              style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
          </div>
          <img class="relative w-40" src="public/images/card/Pisang-lumer.png" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
          <span class="block opacity-75 -mb-1">Category</span>
          <div class="flex justify-between">
              <span class="block font-semibold text-xl">Pisang</span>
              <a href="">
              <button class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button></a>
          </div>
      </div>
  </div>
  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-button rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
          style="transform: scale(1.5); opacity: 0.1;">
          <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
          <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
          <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
              style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
          </div>
          <img class="relative w-40" src="public/images/card/kerupuk-seblak.png" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
          <span class="block opacity-75 -mb-1">Category</span>
          <div class="flex justify-between">
              <span class="block font-semibold text-lg">Seblak</span>
              <a href="">
             <button class="bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button>
            </a>
          </div>
      </div>
  </div>

  <div class="flex-shrink-0 m-6 relative overflow-hidden bg-pinknamara   rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
          style="transform: scale(1.5); opacity: 0.1;">
          <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
          <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
          <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
              style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
          </div>
          <img class="relative w-40" src="public/images/card/kerupuk-basreng.png" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
          <span class="block opacity-75 -mb-1">Category</span>
          <div class="flex justify-between">
              <span class="block font-semibold text-xl">Basreng</span>
              <a href="">
              <button class="bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
            </a>
          </div>
      </div>
  </div>
  </div>  
</section>


<!-- Bagian Produk Test -->
<section>
    <div>
      <h3 class="flex justify-center font-bold text-2xl md:text-4xl mt-6 text-button"> 
        Produk Lainnya
      </h3>
    </div>
    
    <div class="p-1 flex flex-wrap items-center justify-center">
    
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500 rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
          <div class="relative pt-10 px-10 flex items-center justify-center">
              <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
              </div>
              <img class="relative w-40" src="public/images/card/Pisang-lumer.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
              <span class="block opacity-75 -mb-1">Produk</span>
              <div class="flex justify-between">
                  <span class="block font-semibold text-xl">Pisang Lumer</span>
                  <a href="">
                  <button class="block bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button></a>
              </div>
          </div>
      </div>
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500 rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
          <div class="relative pt-10 px-10 flex items-center justify-center">
              <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
              </div>
              <img class="relative w-40" src="public/images/card/kerupuk-seblak.png" alt="">
          </div>
          <div class="relative text-white px-6 pb-6 mt-6">
              <span class="block opacity-75 -mb-1">Produk</span>
              <div class="flex justify-between">
                  <span class="block font-semibold text-lg">Kerupuk Seblak</span>
                  <a href="">
                 <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button>
                </a>
                        </div>
          </div>
      </div>
    
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500 rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
          <div class="relative pt-10 px-10 flex items-center justify-center">
              <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                  style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
              </div>
              <img class="relative w-40" src="public/images/card/kerupuk-basreng.png" alt="">
                      </div>
          <div class="relative text-white px-6 pb-6 mt-6">
              <span class="block opacity-75 -mb-1">Produk</span>
              <div class="flex justify-between">
                  <span class="block font-semibold text-xl">Basreng</span>
                  <a href="">
                  <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
                </a>
              </div>
          </div>
      </div>
      <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500   rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
        
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40" src="public/images/card/pisanglumerbanget.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Produk</span>
            <div class="flex justify-between">
                <span class="block font-semibold text-lg">Banana Nugget</span>
                <a href="">
                <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
              </a>
            </div>
        </div>
    </div>
    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500   rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
       
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40 h-[215px]" src="public/images/card/pisangkrispilumer.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Produk</span>
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">Keju Aroma</span>
                <a href="">
                <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
              </a>
            </div>
        </div>
    </div>
    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-gray-500   rounded-xl max-w-xs shadow-xl duration-500 hover:scale-105 hover:shadow-xl w-48 md:w-64" data-aos="zoom-out-up" data-aos-duration="500" data-aos-delay="200">
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40 h-[215px]" src="public/images/card/pisangkrispikejucoklaat.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            <span class="block opacity-75 -mb-1">Produk</span>
            <div class="flex justify-between">
                <span class="block font-semibold text-xl">Banana Lava</span>
                <a href="">
                <button class="bg-white rounded-full text-gray-500 text-xs font-bold px-3 py-2 leading-none flex items-center duration-500 hover:scale-125 hover:shadow-xl">Go</button> 
              </a>
            </div>
        </div>
    </div>
    
      </div>  
    </section>
        