@section('header')
<nav
   class="flex py-2 px-4 md:px-8 bg-white border-b border-slate-300 min-h-17 relative z-20"
   aria-label="Main navigation">
   <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
      <div class="flex-1 flex">
         <a href="#"
            class="min-w-9 inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
            <span class="sr-only">Your Company</span>
            <img src="{{ asset('img/image.png') }}" alt="readymadeui logo" class="h-9 w-auto" />
         </a>
      </div>

      <div id="collapseMenu" tabindex="-1"
         class="hidden lg:block max-lg:bg-white max-lg:border-l max-lg:border-slate-300 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">

         <div
            class="py-2 px-4 flex justify-between items-center border-b border-slate-300 sticky top-0 bg-white lg:hidden max-lg:min-h-17">
            <a href="#"
               class="inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
               <span class="sr-only">Your Company</span>
               <img src="{{ asset('img/image.png') }}" alt="readymadeui logo" class="h-9 w-auto" />
            </a>
            <button type="button" aria-controls="collapseMenu" id="toggleClose"
               class="cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
               <span class="sr-only">Close main menu</span>
               <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-slate-900"
                  aria-hidden="true" viewBox="0 0 329.269 329">
                  <path
                     d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0"
                     data-original="#000000" />
               </svg>
            </button>
         </div>

         <ul class="flex flex-col gap-8 font-semibold text-sm text-slate-900 lg:flex-row max-lg:p-6">
            <li>
               <a href="/"
                  class="hover:text-blue-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded"
                  aria-current="page">Home</a>
            </li>
            <li>
               <a href="/blog"
                  class="hover:text-blue-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Blog</a>
            </li>
            <li>
               <a href="/about"
                  class="hover:text-blue-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">About</a>
            </li>
            <li>
               <a href="/contact"
                  class="hover:text-blue-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">Contact</a>
            </li>
         </ul>
      </div>
   </div>
</nav>