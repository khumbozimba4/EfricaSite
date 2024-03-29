@extends('layouts.app')
    @section('content')
     
<section class="overflow-hidden pt-[180px] pb-[120px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 lg:w-8/12">
          <div>
            <h2
              class="mb-8 text-3xl font-bold leading-tight text-black dark:text-white sm:text-4xl sm:leading-tight"
            >
             {{$blogs["name"]}}
            </h2>
            <div
              class="mb-10 flex flex-wrap items-center justify-between border-b border-body-color border-opacity-10 pb-4 dark:border-white dark:border-opacity-10"
            >
              <div class="flex flex-wrap items-center">
                <div class="mr-10 mb-5 flex items-center">
                  
                  <div class="w-full">
                    <h4 class="mb-1 text-base font-medium text-body-color">
                      By<span> {{$blogs["created_by_name"]}}</span>
                    </h4>
                  </div>
                </div>
                <div class="mb-5 flex items-center">
                  <p
                    class="mr-5 flex items-center text-base font-medium text-body-color"
                  >
                    <span class="mr-3"
                      ><svg
                        width="15"
                        height="15"
                        viewBox="0 0 15 15"
                        class="fill-current"
                      >
                        <path
                          d="M3.89531 8.67529H3.10666C2.96327 8.67529 2.86768 8.77089 2.86768 8.91428V9.67904C2.86768 9.82243 2.96327 9.91802 3.10666 9.91802H3.89531C4.03871 9.91802 4.1343 9.82243 4.1343 9.67904V8.91428C4.1343 8.77089 4.03871 8.67529 3.89531 8.67529Z"
                        ></path>
                        <path
                          d="M6.429 8.67529H5.64035C5.49696 8.67529 5.40137 8.77089 5.40137 8.91428V9.67904C5.40137 9.82243 5.49696 9.91802 5.64035 9.91802H6.429C6.57239 9.91802 6.66799 9.82243 6.66799 9.67904V8.91428C6.66799 8.77089 6.5485 8.67529 6.429 8.67529Z"
                        ></path>
                        <path
                          d="M8.93828 8.67529H8.14963C8.00624 8.67529 7.91064 8.77089 7.91064 8.91428V9.67904C7.91064 9.82243 8.00624 9.91802 8.14963 9.91802H8.93828C9.08167 9.91802 9.17727 9.82243 9.17727 9.67904V8.91428C9.17727 8.77089 9.08167 8.67529 8.93828 8.67529Z"
                        ></path>
                        <path
                          d="M11.4715 8.67529H10.6828C10.5394 8.67529 10.4438 8.77089 10.4438 8.91428V9.67904C10.4438 9.82243 10.5394 9.91802 10.6828 9.91802H11.4715C11.6149 9.91802 11.7105 9.82243 11.7105 9.67904V8.91428C11.7105 8.77089 11.591 8.67529 11.4715 8.67529Z"
                        ></path>
                        <path
                          d="M3.89531 11.1606H3.10666C2.96327 11.1606 2.86768 11.2562 2.86768 11.3996V12.1644C2.86768 12.3078 2.96327 12.4034 3.10666 12.4034H3.89531C4.03871 12.4034 4.1343 12.3078 4.1343 12.1644V11.3996C4.1343 11.2562 4.03871 11.1606 3.89531 11.1606Z"
                        ></path>
                        <path
                          d="M6.429 11.1606H5.64035C5.49696 11.1606 5.40137 11.2562 5.40137 11.3996V12.1644C5.40137 12.3078 5.49696 12.4034 5.64035 12.4034H6.429C6.57239 12.4034 6.66799 12.3078 6.66799 12.1644V11.3996C6.66799 11.2562 6.5485 11.1606 6.429 11.1606Z"
                        ></path>
                        <path
                          d="M8.93828 11.1606H8.14963C8.00624 11.1606 7.91064 11.2562 7.91064 11.3996V12.1644C7.91064 12.3078 8.00624 12.4034 8.14963 12.4034H8.93828C9.08167 12.4034 9.17727 12.3078 9.17727 12.1644V11.3996C9.17727 11.2562 9.08167 11.1606 8.93828 11.1606Z"
                        ></path>
                        <path
                          d="M11.4715 11.1606H10.6828C10.5394 11.1606 10.4438 11.2562 10.4438 11.3996V12.1644C10.4438 12.3078 10.5394 12.4034 10.6828 12.4034H11.4715C11.6149 12.4034 11.7105 12.3078 11.7105 12.1644V11.3996C11.7105 11.2562 11.591 11.1606 11.4715 11.1606Z"
                        ></path>
                        <path
                          d="M13.2637 3.3697H7.64754V2.58105C8.19721 2.43765 8.62738 1.91189 8.62738 1.31442C8.62738 0.597464 8.02992 0 7.28906 0C6.54821 0 5.95074 0.597464 5.95074 1.31442C5.95074 1.91189 6.35702 2.41376 6.93058 2.58105V3.3697H1.31442C0.597464 3.3697 0 3.96716 0 4.68412V13.2637C0 13.9807 0.597464 14.5781 1.31442 14.5781H13.2637C13.9807 14.5781 14.5781 13.9807 14.5781 13.2637V4.68412C14.5781 3.96716 13.9807 3.3697 13.2637 3.3697ZM6.6677 1.31442C6.6677 0.979841 6.93058 0.716957 7.28906 0.716957C7.62364 0.716957 7.91042 0.979841 7.91042 1.31442C7.91042 1.649 7.64754 1.91189 7.28906 1.91189C6.95448 1.91189 6.6677 1.6251 6.6677 1.31442ZM1.31442 4.08665H13.2637C13.5983 4.08665 13.8612 4.34954 13.8612 4.68412V6.45261H0.716957V4.68412C0.716957 4.34954 0.979841 4.08665 1.31442 4.08665ZM13.2637 13.8612H1.31442C0.979841 13.8612 0.716957 13.5983 0.716957 13.2637V7.16957H13.8612V13.2637C13.8612 13.5983 13.5983 13.8612 13.2637 13.8612Z"
                        ></path></svg></span>
                             {{ \Carbon\Carbon::parse($blogs["published_at"])->format('Y-m-d') }}

                  </p>
                </div>
              </div>
              <div class="mb-5">
                <p class="inline-flex items-center justify-center rounded-full bg-primary py-2 px-4 text-sm font-semibold text-white">
                  {{$blogs["category_name"]}}
                </p>
              </div>
            </div>
            <div>
              <p
                class="mb-10 text-base font-medium leading-relaxed text-body-color sm:text-lg sm:leading-relaxed lg:text-base lg:leading-relaxed xl:text-lg xl:leading-relaxed"
              >
               {{$blogs["intro"]}}
              </p>
              <div class="mb-10 w-full overflow-hidden rounded">
                <div class="relative aspect-[97/60] w-full sm:aspect-[97/44]">
                  <img
                    alt="image"
                    sizes="100vw"
                    src="{{$blogs["featured_image"]}}"
                    decoding="async"
                    data-nimg="fill"
                    class="h-full w-full object-cover object-center"
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
                  />
                </div>
              </div>
              <p class="mb-8 text-base font-medium leading-relaxed text-body-color sm:text-lg sm:leading-relaxed lg:text-base lg:leading-relaxed xl:text-lg xl:leading-relaxed">
               {{$blogs["content"]}}
              </p>
              
           
             
           
              
          
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-4/12">
          <div
            class="mt-12 mb-10 rounded-md bg-primary bg-opacity-5 p-6 dark:bg-opacity-5 lg:mt-0"
          >
            <form class="flex items-center justify-between">
              <input
                type="text"
                placeholder="Search here..."
                class="palceholder-body-color mr-5 w-full rounded-md border border-transparent py-3 px-5 text-base font-medium text-body-color outline-none focus:border-primary dark:bg-white dark:bg-opacity-10"
              /><button
                class="flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-md bg-primary text-white"
              >
                <svg
                  width="20"
                  height="18"
                  viewBox="0 0 20 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.4062 16.8125L13.9375 12.375C14.9375 11.0625 15.5 9.46875 15.5 7.78125C15.5 5.75 14.7188 3.875 13.2812 2.4375C10.3438 -0.5 5.5625 -0.5 2.59375 2.4375C1.1875 3.84375 0.40625 5.75 0.40625 7.75C0.40625 9.78125 1.1875 11.6562 2.625 13.0937C4.09375 14.5625 6.03125 15.3125 7.96875 15.3125C9.875 15.3125 11.75 14.5938 13.2188 13.1875L18.75 17.6562C18.8438 17.75 18.9688 17.7812 19.0938 17.7812C19.25 17.7812 19.4062 17.7188 19.5312 17.5938C19.6875 17.3438 19.6562 17 19.4062 16.8125ZM3.375 12.3438C2.15625 11.125 1.5 9.5 1.5 7.75C1.5 6 2.15625 4.40625 3.40625 3.1875C4.65625 1.9375 6.3125 1.3125 7.96875 1.3125C9.625 1.3125 11.2812 1.9375 12.5312 3.1875C13.75 4.40625 14.4375 6.03125 14.4375 7.75C14.4375 9.46875 13.7188 11.125 12.5 12.3438C10 14.8438 5.90625 14.8438 3.375 12.3438Z"
                    fill="white"
                  ></path>
                </svg>
              </button>
            </form>
          </div>
          <div
            class="mb-10 rounded-md bg-primary bg-opacity-5 dark:bg-opacity-10"
          >
            <h3
              class="border-b border-body-color border-opacity-10 py-4 px-8 text-lg font-semibold text-black dark:border-white dark:border-opacity-10 dark:text-white"
            >
              Related Latest Posts
            </h3>
            <ul class="p-8">
              @if ($related != null)
                  @foreach ($related as $item)
                  <li class="mb-6 border-b border-body-color border-opacity-10 pb-6 dark:border-white dark:border-opacity-10">
                    <div class="flex items-center lg:block xl:flex">
                      <div class="mr-5 lg:mb-3 xl:mb-0">
                        <div class="relative h-[60px] w-[70px] overflow-hidden rounded-md sm:h-[75px] sm:w-[85px]">
                          <img
                            sizes="100vw"
                            src="{{$item['featured_image']}}"
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
                          />
                        </div>
                      </div>
                      <div class="w-full">
                        <h5>
                          <a
                            class="mb-[6px] block text-base font-medium leading-snug text-black hover:text-primary dark:text-white dark:hover:text-primary"
                            href="{{route('blogread',['slug'=>$item['slug']])}}"
                            >{{$item["name"]}}</a
                          >
                        </h5>
                        <p class="text-xs font-medium text-body-color">
                          {{ \Carbon\Carbon::parse($blogs["published_at"])->format('d M Y') }}
                        </p>
                      </div>
                    </div>
                  </li>
                  @endforeach
              @else
                  
              @endif
              
              
            </ul>
          </div>
        
        
          
        </div>
      </div>
    </div>
  </section>
  @endsection