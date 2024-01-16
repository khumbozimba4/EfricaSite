<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Efrica Website</title>
        @vite('resources/css/app.css')

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body class="dark:bg-black">
    
        <header
          class="header top-0 left-0 z-40 flex w-full items-center bg-transparent absolute"
        >
          <div class="container">
            <div class="relative -mx-4 flex items-center justify-between">
              <div class="w-60 max-w-full px-4 xl:mr-12">
                <a class="header-logo block w-full py-8 -ml-3 fill-blue-500" href="/"
                  ><img
                    alt="logo"
                    src="{{asset('images/efricalogo.svg')}}"
                    width="140"
                    height="30"
                    decoding="async"
                    data-nimg="1"
                    class="w-full dark:hidden "
                    loading="lazy"
                    style="color: white" />
                    <img
                    alt="logo"
                    src="{{asset('images/efricalogo.svg')}}"
                    width="140"
                    height="30"
                    decoding="async"
                    data-nimg="1"
                    class="hidden w-full dark:block"
                    loading="lazy"
                    style="color: white"
                /></a>
              </div>
              <div class="flex w-full items-center justify-between px-4">
                <div>
                  <button
                    id="navbarToggler"
                    aria-label="Mobile Menu"
                    class="absolute right-4 top-1/2 block translate-y-[-50%] rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
                  >
                    <span
                      class="relative my-1.5 block h-0.5 w-[30px] bg-black transition-all duration-300 dark:bg-white"
                    ></span
                    ><span
                      class="relative my-1.5 block h-0.5 w-[30px] bg-black transition-all duration-300 dark:bg-white"
                    ></span
                    ><span
                      class="relative my-1.5 block h-0.5 w-[30px] bg-black transition-all duration-300 dark:bg-white"
                    ></span>
                  </button>
                  <!--<nav
                    id="navbarCollapse"
                    class="navbar absolute right-0 z-30 w-[250px] rounded border-[.5px] border-body-color/50 bg-white py-4 px-6 duration-300 
                    dark:border-body-color/20 dark:bg-dark lg:visible lg:static lg:w-auto lg:border-none lg:!bg-transparent lg:p-0 lg:opacity-100 invisible top-[120%] opacity-0"
                  >
                    <ul class="block lg:flex lg:space-x-12">
                      <li class="group relative">
                        <a
                          class="flex py-2 text-base text-dark group-hover:opacity-70 dark:text-white lg:mr-0 lg:inline-flex lg:py-6 lg:px-0"
                          href="/"
                          >Home</a
                        >
                      </li>
                      <li class="group relative">
                        <a class="flex cursor-pointer items-center justify-between py-2 text-base text-dark group-hover:opacity-70 dark:text-white lg:mr-0 lg:inline-flex lg:py-6 lg:px-0">Solutions
                          <span class="pl-3">
                            <svg width="15" height="14" viewBox="0 0 15 14">
                              <path
                                d="M7.81602 9.97495C7.68477 9.97495 7.57539 9.9312 7.46602 9.8437L2.43477 4.89995C2.23789 4.70308 2.23789 4.39683 2.43477 4.19995C2.63164 4.00308 2.93789 4.00308 3.13477 4.19995L7.81602 8.77183L12.4973 4.1562C12.6941 3.95933 13.0004 3.95933 13.1973 4.1562C13.3941 4.35308 13.3941 4.65933 13.1973 4.8562L8.16601 9.79995C8.05664 9.90933 7.94727 9.97495 7.81602 9.97495Z"
                                fill="currentColor">
                              </path>
                            </svg>
                          </span>
                        </a>
                        <div class="relative top-full left-0 rounded-md bg-white transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark lg:invisible lg:absolute lg:top-[110%] lg:block lg:w-full lg:p-4 lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full hidden">
                        <a class="block rounded py-2.5 text-sm text-dark hover:border hover:border-t-4 hover:border-orange-300 hover:opacity-70 dark:text-white lg:px-3" href="#">
                          Not Yet
                        </a>
                      
                          {{-- <a
                            class="block rounded py-2.5 text-sm text-dark hover:opacity-70 dark:text-white lg:px-3"
                            href="contact"
                            >Contact Page</a>
                            <a
                            class="block rounded py-2.5 text-sm text-dark hover:opacity-70 dark:text-white lg:px-3"
                            href="blog"
                            >Blog Grid Page</a>
                            <a
                            class="block rounded py-2.5 text-sm text-dark hover:opacity-70 dark:text-white lg:px-3"
                            href="blog-sidebar"
                            >Blog Sidebar Page</a
                          ><a
                            class="block rounded py-2.5 text-sm text-dark hover:opacity-70 dark:text-white lg:px-3"
                            href="blog-details"
                            >Blog Details Page</a
                          ><a
                            class="block rounded py-2.5 text-sm text-dark hover:opacity-70 dark:text-white lg:px-3"
                            href="signin"
                            >Sign In Page</a
                          ><a
                            class="block rounded py-2.5 text-sm text-dark hover:opacity-70 dark:text-white lg:px-3"
                            href="signup"
                            >Sign Up Page</a
                          ><a
                            class="block rounded py-2.5 text-sm text-dark hover:opacity-70 dark:text-white lg:px-3"
                            href="error"
                            >Error Page</a
                          > --}}
                        </div>
                      </li>
                      <li class="group relative">
                        <a
                          class="flex py-2 text-base text-dark group-hover:opacity-70 dark:text-white lg:mr-0 lg:inline-flex lg:py-6 lg:px-0"
                          href="{{route('blogs')}}"
                          >Blogs</a
                        >
                      </li>
                      <li class="group relative">
                        <a
                          class="flex py-2 text-base text-dark group-hover:opacity-70 dark:text-white lg:mr-0 lg:inline-flex lg:py-6 lg:px-0"
                          href="{{route('contact')}}"
                          >Contact Us</a
                        >
                      </li>
                      <li class="group relative">
                        <a
                          class="flex py-2 text-base text-dark group-hover:opacity-70 dark:text-white lg:mr-0 lg:inline-flex lg:py-6 lg:px-0"
                          href="{{route('about')}}"
                          >About</a
                        >
                      </li>
                      
                      
                    
                    </ul>
                  </nav>-->
                </div>
                <nav class="navbar mx-auto w-full" >
                   <ul class="nav-links">
                    <li style="position: relative;"><a href="#">Home</a></li>
                    <li class="has-submenu flex cursor-pointer items-center justify-between ">
                      <a href="#" >Services</a>
                      <span class="">
                            <svg width="15" height="14" viewBox="0 0 15 14">
                              <path
                                d="M7.81602 9.97495C7.68477 9.97495 7.57539 9.9312 7.46602 9.8437L2.43477 4.89995C2.23789 4.70308 2.23789 4.39683 2.43477 4.19995C2.63164 4.00308 2.93789 4.00308 3.13477 4.19995L7.81602 8.77183L12.4973 4.1562C12.6941 3.95933 13.0004 3.95933 13.1973 4.1562C13.3941 4.35308 13.3941 4.65933 13.1973 4.8562L8.16601 9.79995C8.05664 9.90933 7.94727 9.97495 7.81602 9.97495Z"
                                fill="currentColor">
                              </path>
                            </svg>
                      </span>
                        <ul class="submenu" >
                          <li><a href="#">Service 1</a></li>
                          <li><a href="#">Service 2</a></li>
                          <li><a href="#">Service 3</a></li>
                        </ul>
                    </li>
                   <li style="position: relative;"><a href="#">About</a></li>
                  <!-- Add more list items as needed -->
                    </ul>
                   </nav>
                <div class="flex items-center justify-end pr-16 lg:pr-0">
                  <a
                    class="hidden py-3 px-7 text-base font-bold text-dark hover:opacity-70 dark:text-white md:block"
                    href="signin"
                    >Sign In</a
                  ><a
                    class="ease-in-up hidden rounded-md bg-primary py-3 px-8 text-base font-bold text-white transition duration-300 hover:bg-opacity-90 hover:shadow-signUp md:block md:px-9 lg:px-6 xl:px-9"
                    href="signup"
                    >Sign Up</a
                  >
               
                </div>
              </div>
            </div>
          </div>
        </header>


             @yield('content')
             <x-footer />
             <script src="{{ asset('axios/dist/axios.min.js') }}"></script>

    </body>
</html>
<script>
  document.getElementById('ajaxForm').addEventListener('submit', function (event) {
      event.preventDefault();

      // Get form data
      var formData = new FormData(this);

      // Make AJAX request with Axios
      axios.post('{{ route('sendMessage') }}', formData)
          .then(function (response) {
              console.log(response.data);
              // Handle success
          })
          .catch(function (error) {
              console.error(error);
              // Handle error
          });
  });
</script>
