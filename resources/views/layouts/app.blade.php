<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Efrica Website</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('resources/css/app.css')

        <!-- Owl Stylesheets -->
        <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css')}}">
      
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        {{-- <script src="../assets/vendors/jquery.min.js"></script> --}}
    </head>
    <body class="dark:bg-black">
    
        <header class="header top-0 left-0 z-40 flex w-full items-center bg-transparent absolute">
          <div class="container">
            <div class="relative -mx-4 flex items-center justify-between">
              <div class="w-60 max-w-full px-4 xl:mr-12">
                <a class="header-logo block w-full py-8 -ml-3 fill-blue-500" href="/"
                  ><img
                    alt="logo"
                    src="{{asset('images/backend-logo-small.png')}}"
                    width="140"
                    height="30"
                    decoding="async"
                    data-nimg="1"
                    class="w-full dark:hidden "
                    loading="lazy"
                    style="color: white" />
                    <img
                    alt="logo"
                    src="{{asset('images/backend-logo-small.png')}}"
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
                  <nav
                    id="navbarCollapse"
                    class="navbar absolute right-4 z-30 w-[250px] rounded border-[.5px] border-body-color/50 bg-white py-4 px-6 duration-300 dark:border-body-color/20 dark:bg-dark lg:visible lg:static lg:w-auto lg:border-none lg:!bg-transparent lg:p-0 lg:opacity-100 invisible top-[65%] opacity-0"
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
                        <a
                          class="flex cursor-pointer items-center justify-between py-2 text-base text-dark group-hover:opacity-70 dark:text-white lg:mr-0 lg:inline-flex lg:py-6 lg:px-0"
                          >Solutions<span class="pl-3"
                            ><svg width="15" height="14" viewBox="0 0 15 14">
                              <path
                                d="M7.81602 9.97495C7.68477 9.97495 7.57539 9.9312 7.46602 9.8437L2.43477 4.89995C2.23789 4.70308 2.23789 4.39683 2.43477 4.19995C2.63164 4.00308 2.93789 4.00308 3.13477 4.19995L7.81602 8.77183L12.4973 4.1562C12.6941 3.95933 13.0004 3.95933 13.1973 4.1562C13.3941 4.35308 13.3941 4.65933 13.1973 4.8562L8.16601 9.79995C8.05664 9.90933 7.94727 9.97495 7.81602 9.97495Z"
                                fill="currentColor"
                              ></path></svg></span
                        ></a>
                        <div
                          class="submenu relative top-full left-0 rounded-md bg-white transition-[top] duration-300 group-hover:opacity-100 dark:bg-dark lg:invisible lg:absolute lg:top-[110%] lg:block lg:w-[440px] lg:p-4 lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full hidden"
                        >
                        <div class="grid grid-cols-3 gap-4 lg:grid-cols-3 lg:gap-4">
                          <a class="block rounded hover:indent-2 hover:underline py-2.5 text-sm text-dark hover:opacity-70 hover:text-yellow-600 dark:text-white lg:px-3" href="#">We will be back soon</a>
                          {{-- <a class="block rounded hover:indent-2 hover:underline py-2.5 text-sm text-dark hover:opacity-70 hover:text-yellow-600 dark:text-white lg:px-3" href="contact">Contact Page</a>
                          <a class="block rounded hover:indent-2 hover:underline py-2.5 text-sm text-dark hover:opacity-70 hover:text-yellow-600 dark:text-white lg:px-3" href="blog">Blog Grid Page</a>
                      
                          <a class="block rounded hover:indent-2 hover:underline py-2.5 text-sm text-dark hover:opacity-70 hover:text-yellow-600 dark:text-white lg:px-3" href="blog-sidebar">Blog Sidebar Page</a>
                          <a class="block rounded hover:indent-2 hover:underline py-2.5 text-sm text-dark hover:opacity-70 hover:text-yellow-600 dark:text-white lg:px-3" href="blog-details">Blog Details Page</a>
                          <a class="block rounded hover:indent-2 hover:underline py-2.5 text-sm text-dark hover:opacity-70 hover:text-yellow-600 dark:text-white lg:px-3" href="signin">Sign In Page</a>
                      
                          <a class="block rounded hover:indent-2 hover:underline py-2.5 text-sm text-dark hover:opacity-70 hover:text-yellow-600 dark:text-white lg:px-3" href="signup">Sign Up Page</a>
                          <a class="block rounded hover:indent-2 hover:underline py-2.5 text-sm text-dark hover:opacity-70 hover:text-yellow-600 dark:text-white lg:px-3" href="error">Error Page</a> --}}
                        </div>
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
                  </nav>
                </div>
                <div class="flex items-center justify-end pr-16 lg:pr-0">
                  <a
                    class="hidden py-3 px-7 text-base font-bold text-dark hover:opacity-70 dark:text-white md:block"
                    href="#"
                    >Careers</a
                  >
                  <a
                  class="hidden py-3 px-7 text-base font-bold text-dark hover:opacity-70 dark:text-white md:block"
                  href="{{route('CSR')}}"
                  >CSR</a
                >
                  
               
                </div>
              </div>
            </div>
          </div>
        </header>


             @yield('content')
             <x-footer />
             <script src="{{asset('js/jquery.js')}}"></script>
             <script src="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js')}}"></script>
             <script src="{{asset('OwlCarousel2-2.3.4/docs/assets/vendors/highlight.js')}}"></script>
             <script src="{{asset('OwlCarousel2-2.3.4/docs/assets/js/app.js')}}"></script>
    </body>
</html>
<script>
  document.getElementById('navbarToggler').addEventListener('click', function() {
  var navbarCollapse = document.getElementById('navbarCollapse');
  navbarCollapse.classList.toggle('invisible');
  navbarCollapse.classList.toggle('opacity-0');
});

  document.getElementById('ajaxForm').addEventListener('submit', function (event) {
      event.preventDefault();
      const vdocumentSerialNumberClass = document.getElementById("vdocumentSerialNumber");
      const vdocumentSerialNumberEmail = document.getElementById("vdocumentSerialNumberEmail");
      const vdocumentSerialNumberMessage = document.getElementById("vdocumentSerialNumberMessage");
      var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        var requestData = { 
                            name: vdocumentSerialNumberClass.value, 
                            Email: vdocumentSerialNumberEmail.value, 
                            Message: vdocumentSerialNumberMessage.value, 
                          };
        console.log(JSON.stringify(requestData));
      $.ajax({
         url:'{{ route('sendMessage') }}',
         contentType: "application/json; charset=utf-8",
         dataType: "json",
         cache: false,
         type: "POST", 
         headers: {
          "X-CSRF-TOKEN": csrfToken,
            "Content-Type": "application/json"
         },
        data: JSON.stringify(requestData), 
        success: function (data) {



           document.getElementById("EmailSentSuccessfully").classList.add("text-green-500");
           document.getElementById("EmailSentSuccessfully").innerHTML = "Email sent successfully. We will contact you soon";
        },
        complete: function () {
            console.log("complete");
        },
        error: function (jqXHR, textStatus, errorThrown) {

    try {
        var responseData = JSON.parse(jqXHR.responseText);

        if (responseData.errors) {
          document.getElementById("EmailSentSuccessfully").classList.add("text-danger-500");
          var errorssofar = null;
            for (var field in responseData.errors) {
                if (responseData.errors.hasOwnProperty(field)) {
                    var messages = responseData.errors[field];
                    for (var i = 0; i < messages.length; i++) {
                        document.getElementById("EmailSentSuccessfully").innerHTML += messages[i]+"<br/>";
                    }
                }
            }

        }
    } catch (e) {
        console.log("Error parsing JSON response:", e);
        console.log("Raw response:", jqXHR.responseText);
    }
}

        });
     
      });

 function ShowDuntu(){
  if( document.getElementById("emailing").value.trim().length == 0){
    document.getElementById("duntu").classList.add("text-red-500");
    document.getElementById("duntu").innerHTML = "Email is required";
    return false;
  }
  if( document.getElementById("naming").value.trim().length ===0 ){
    document.getElementById("duntu").classList.add("text-red-500");
    document.getElementById("duntu").innerHTML = "Name is required";
    return false;
  }
  document.getElementById("duntu").classList.add("text-green-500");
  document.getElementById("duntu").innerHTML = "You have successfuly subscribed";
 return false;
 }
</script>
<script>
  $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      items: 3,
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      margin: 20,
      responsiveClass: true,
      responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
    });
    $('.play').on('click', function() {
      owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
      owl.trigger('stop.owl.autoplay')
    })
  })
</script>