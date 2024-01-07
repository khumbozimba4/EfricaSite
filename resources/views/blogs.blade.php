@extends('layouts.app')
    @section('content')
     
     
<section class="relative z-10 overflow-hidden pt-28 lg:pt-[150px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4 md:w-8/12 lg:w-7/12">
          <div class="mb-8 max-w-[570px] md:mb-0 lg:mb-12">
            <h1
              class="mb-5 text-2xl font-bold text-black dark:text-white sm:text-3xl"
            >
              Blog Grid
            </h1>
            <p class="text-base font-medium leading-relaxed text-body-color">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              varius eros eget sapien consectetur ultrices. Ut quis dapibus
              libero.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-4/12 lg:w-5/12">
          <div class="text-end">
            <ul class="flex items-center md:justify-end">
              <li class="flex items-center">
                <a
                  class="pr-1 text-base font-medium text-body-color hover:text-primary"
                  href="/"
                  >Home</a
                ><span
                  class="mr-3 block h-2 w-2 rotate-45 border-t-2 border-r-2 border-body-color"
                ></span>
              </li>
              <li class="text-base font-medium text-primary">Blog Grid</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div>
      <span class="absolute top-0 left-0 z-[-1]"
        ><svg
          width="287"
          height="254"
          viewBox="0 0 287 254"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            opacity="0.1"
            d="M286.5 0.5L-14.5 254.5V69.5L286.5 0.5Z"
            fill="url(#paint0_linear_111:578)"
          ></path>
          <defs>
            <linearGradient
              id="paint0_linear_111:578"
              x1="-40.5"
              y1="117"
              x2="301.926"
              y2="-97.1485"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#4A6CF7"></stop>
              <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
            </linearGradient>
          </defs></svg></span
      ><span class="absolute right-0 top-0 z-[-1]"
        ><svg
          width="628"
          height="258"
          viewBox="0 0 628 258"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            opacity="0.1"
            d="M669.125 257.002L345.875 31.9983L524.571 -15.8832L669.125 257.002Z"
            fill="url(#paint0_linear_0:1)"
          ></path>
          <path
            opacity="0.1"
            d="M0.0716344 182.78L101.988 -15.0769L142.154 81.4093L0.0716344 182.78Z"
            fill="url(#paint1_linear_0:1)"
          ></path>
          <defs>
            <linearGradient
              id="paint0_linear_0:1"
              x1="644"
              y1="221"
              x2="429.946"
              y2="37.0429"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#4A6CF7"></stop>
              <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
            </linearGradient>
            <linearGradient
              id="paint1_linear_0:1"
              x1="18.3648"
              y1="166.016"
              x2="105.377"
              y2="32.3398"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#4A6CF7"></stop>
              <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
            </linearGradient>
          </defs>
        </svg>
      </span>
    </div>
  </section>
  <section class="pt-[120px] pb-[120px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap justify-center">
        @if ($blogs !=null)
            @foreach ($blogs as $blog)
            <div class="w-full px-4 mb-2 md:w-2/3 lg:w-1/2 xl:w-1/3">
              <div class="wow fadeInUp relative overflow-hidden rounded-md bg-white shadow-one dark:bg-dark" data-wow-delay=".1s">
                <a class="relative block h-[220px] w-full" href="{{route('blogread',['slug'=>$blog["slug"]])}}"
                  ><span
                    class="absolute top-6 right-6 z-20 inline-flex items-center justify-center rounded-full bg-primary py-2 px-4 text-sm font-semibold capitalize text-white"
                    >creative</span
                  ><img
                    alt="image"
                    sizes="100vw"
                    src="{{$blog["featured_image"]}}"
                    decoding="async"
                    data-nimg="fill"
                    loading="lazy"
                    style="
                      position: absolute;
                      height: 100%;
                      width: 100%;
                      left: 0;
                      top: 0;
                      right: 0;
                      bottom: 0;
                      color: transparent;
                    "
                /></a>
                <div class="p-6 sm:p-8 md:py-8 md:px-6 lg:p-8 xl:py-8 xl:px-5 2xl:p-8">
                  <h3>
                    <a
                      class="mb-4 block text-xl font-bold text-black hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl"
                      href="{{route('blogread',['slug'=>$blog["slug"]])}}"
                      >{{$blog["name"]}}</a
                    >
                  </h3>
                  <p
                    class="mb-6 border-b border-body-color border-opacity-10 pb-6 text-base font-medium text-body-color dark:border-white dark:border-opacity-10"
                  >
                  {{\Illuminate\Support\Str::limit($blog["intro"],100)}}
                  </p>
                  <div class="flex items-center">
                    <div class="mr-5 flex items-center border-r border-body-color border-opacity-10 pr-5 dark:border-white dark:border-opacity-10 xl:mr-3 xl:pr-3 2xl:mr-5 2xl:pr-5">
                     
                      <div class="w-full">
                        <h4
                          class="mb-1 text-sm font-medium text-dark dark:text-white"
                        >
                          By {{$blog["created_by_name"]}}
                        </h4>
                        <p class="text-xs text-body-color">{{$blog["category_name"]}}</p>
                      </div>
                    </div>
                    <div class="inline-block">
                      <h4
                        class="mb-1 text-sm font-medium text-dark dark:text-white"
                      >
                        Date
                      </h4>
                      <p class="text-xs text-body-color">
                        {{ \Carbon\Carbon::parse($blog["published_at"])->format('Y-m-d') }}

                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        @else
        No blogs found

        @endif
        
        
      </div>
     
    </div>
  </section>
  @endsection