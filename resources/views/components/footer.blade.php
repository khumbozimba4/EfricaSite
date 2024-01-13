<section id="contact" class="overflow-hidden py-16 md:py-20 lg:py-28">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
          <div
            class="wow fadeInUp mb-12 rounded-md bg-primary/[3%] py-11 px-8  sm:p-[55px] lg:mb-5 lg:px-8 xl:p-[55px]"
            data-wow-delay=".15s "
          >
            <h2
              class="mb-3 text-2xl font-bold text-black dark:text-white sm:text-3xl lg:text-2xl xl:text-3xl"
            >
              Need Help? Open a Ticket
            </h2>
            <p class="mb-12 text-base font-medium text-body-color">
              Our support team will get back to you ASAP via email.
            </p>
            @if ($errors->any())
                @foreach ($errors->all() as $item)
                    <p class="text-red-500">{{$item}}</p>
                @endforeach
            @endif
           <div class=" justify-center " id="EmailSentSuccessfully"></div>
            <form  id="ajaxForm">
              <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2">
                  <div class="mb-8">
                    <label
                      for="name"
                      class="mb-3 block text-sm font-medium text-dark dark:text-white"
                      >Your Name</label
                    ><input
                      type="text" name="name"
                      placeholder="Enter your name"
                      id="vdocumentSerialNumber"
                      class="w-full rounded-md border border-transparent py-3 px-6 text-base text-body-color placeholder-body-color shadow-one outline-none focus:border-primary focus-visible:shadow-none dark:bg-[#242B51] dark:shadow-signUp"
                    />
                  </div>
                </div>
                <div class="w-full px-4 md:w-1/2">
                  <div class="mb-8">
                    <label
                      for="email"
                      class="mb-3 block text-sm font-medium text-dark dark:text-white"
                      >Your Email</label
                    ><input
                      type="email" name="email"
                      placeholder="Enter your email"
                      id="vdocumentSerialNumberEmail"
                      class="w-full rounded-md border border-transparent py-3 px-6 text-base text-body-color placeholder-body-color shadow-one outline-none focus:border-primary focus-visible:shadow-none dark:bg-[#242B51] dark:shadow-signUp"
                    />
                  </div>
                </div>
                <div class="w-full px-4">
                  <div class="mb-8">
                    <label
                      for="message"
                      class="mb-3 block text-sm font-medium text-dark dark:text-white"
                      >Your Message</label
                    ><textarea
                      name="message"
                      rows="5" 
                      placeholder="Enter your Message"
                      id="vdocumentSerialNumberMessage"
                      class="w-full resize-none rounded-md border border-transparent py-3 px-6 text-base text-body-color placeholder-body-color shadow-one outline-none focus:border-primary focus-visible:shadow-none dark:bg-[#242B51] dark:shadow-signUp"
                    ></textarea>
                  </div>
                </div>
                <div class="w-full px-4">
                  <button
                    class="rounded-md bg-primary py-4 px-9 text-base font-medium hover:border-yellow-400 text-white transition duration-300 ease-in-out hover:bg-opacity-80 hover:shadow-signUp"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
          <div
            class="wow fadeInUp relative z-10 rounded-md bg-primary/[3%] p-8 dark:bg-primary/10 sm:p-11 lg:p-8 xl:p-11"
            data-wow-delay=".2s"
          >
            <h3
              class="mb-4 text-2xl font-bold leading-tight text-black dark:text-white"
            >
              Stay Updated
            </h3>
            <div id="duntu" class="d "></div>
            <form onsubmit="return ShowDuntu()" method="post">
              <input id="naming"
                type="text"
                name="name"
                placeholder="Enter your name" 
                class="mb-4 w-full rounded-md border border-body-color border-opacity-10 py-3 px-6 text-base font-medium text-body-color placeholder-body-color outline-none focus:border-primary focus:border-opacity-100 focus-visible:shadow-none dark:border-white dark:border-opacity-10 dark:bg-[#242B51] focus:dark:border-opacity-50"
              /><input
                type="email" id="emailing"
                name="email" 
                placeholder="Enter your email"
                class="mb-4 w-full rounded-md border border-body-color border-opacity-10 py-3 px-6 text-base font-medium text-body-color placeholder-body-color outline-none focus:border-primary focus:border-opacity-100 focus-visible:shadow-none dark:border-white dark:border-opacity-10 dark:bg-[#242B51] focus:dark:border-opacity-50"
              /><input
                type="submit"
                class="duration-80 mb-4 w-full cursor-pointer rounded-md border border-transparent bg-primary py-3 px-6 text-center text-base font-medium text-white outline-none transition ease-in-out hover:bg-opacity-80 hover:shadow-signUp focus-visible:shadow-none"
                value="Subscribe"
              />
              
            </form>
            <div class="absolute top-0 left-0 z-[-1]">
              <svg
                width="370"
                height="596"
                viewBox="0 0 370 596"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <mask
                  id="mask0_88:141"
                  style="mask-type: alpha"
                  maskUnits="userSpaceOnUse"
                  x="0"
                  y="0"
                  width="370"
                  height="596"
                >
                  <rect width="370" height="596" rx="2" fill="#1D2144"></rect>
                </mask>
                <g mask="url(#mask0_88:141)">
                  <path
                    opacity="0.15"
                    d="M15.4076 50.9571L54.1541 99.0711L71.4489 35.1605L15.4076 50.9571Z"
                    fill="url(#paint0_linear_88:141)"
                  ></path>
                  <path
                    opacity="0.15"
                    d="M20.7137 501.422L44.6431 474.241L6 470.624L20.7137 501.422Z"
                    fill="url(#paint1_linear_88:141)"
                  ></path>
                  <path
                    opacity="0.1"
                    d="M331.676 198.309C344.398 204.636 359.168 194.704 358.107 180.536C357.12 167.363 342.941 159.531 331.265 165.71C318.077 172.69 318.317 191.664 331.676 198.309Z"
                    fill="url(#paint2_linear_88:141)"
                  ></path>
                  <g opacity="0.3">
                    <path
                      d="M209 89.9999C216 77.3332 235.7 50.7999 258.5 45.9999C287 39.9999 303 41.9999 314 30.4999C325 18.9999 334 -3.50014 357 -3.50014C380 -3.50014 395 4.99986 408.5 -8.50014C422 -22.0001 418.5 -46.0001 452 -37.5001C478.8 -30.7001 515.167 -45 530 -53"
                      stroke="url(#paint3_linear_88:141)"
                    ></path>
                    <path
                      d="M251 64.9999C258 52.3332 277.7 25.7999 300.5 20.9999C329 14.9999 345 16.9999 356 5.49986C367 -6.00014 376 -28.5001 399 -28.5001C422 -28.5001 437 -20.0001 450.5 -33.5001C464 -47.0001 460.5 -71.0001 494 -62.5001C520.8 -55.7001 557.167 -70 572 -78"
                      stroke="url(#paint4_linear_88:141)"
                    ></path>
                    <path
                      d="M212 73.9999C219 61.3332 238.7 34.7999 261.5 29.9999C290 23.9999 306 25.9999 317 14.4999C328 2.99986 337 -19.5001 360 -19.5001C383 -19.5001 398 -11.0001 411.5 -24.5001C425 -38.0001 421.5 -62.0001 455 -53.5001C481.8 -46.7001 518.167 -61 533 -69"
                      stroke="url(#paint5_linear_88:141)"
                    ></path>
                    <path
                      d="M249 40.9999C256 28.3332 275.7 1.79986 298.5 -3.00014C327 -9.00014 343 -7.00014 354 -18.5001C365 -30.0001 374 -52.5001 397 -52.5001C420 -52.5001 435 -44.0001 448.5 -57.5001C462 -71.0001 458.5 -95.0001 492 -86.5001C518.8 -79.7001 555.167 -94 570 -102"
                      stroke="url(#paint6_linear_88:141)"
                    ></path>
                  </g>
                </g>
                <defs>
                  <lineargradient
                    id="paint0_linear_88:141"
                    x1="13.4497"
                    y1="63.5059"
                    x2="81.144"
                    y2="41.5072"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white"></stop>
                    <stop
                      offset="1"
                      stop-color="white"
                      stop-opacity="0"
                    ></stop>
                  </lineargradient>
                  <lineargradient
                    id="paint1_linear_88:141"
                    x1="28.1579"
                    y1="501.301"
                    x2="8.69936"
                    y2="464.391"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white"></stop>
                    <stop
                      offset="1"
                      stop-color="white"
                      stop-opacity="0"
                    ></stop>
                  </lineargradient>
                  <lineargradient
                    id="paint2_linear_88:141"
                    x1="338"
                    y1="167"
                    x2="349.488"
                    y2="200.004"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white"></stop>
                    <stop
                      offset="1"
                      stop-color="white"
                      stop-opacity="0"
                    ></stop>
                  </lineargradient>
                  <lineargradient
                    id="paint3_linear_88:141"
                    x1="369.5"
                    y1="-53"
                    x2="369.5"
                    y2="89.9999"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white"></stop>
                    <stop
                      offset="1"
                      stop-color="white"
                      stop-opacity="0"
                    ></stop>
                  </lineargradient>
                  <lineargradient
                    id="paint4_linear_88:141"
                    x1="411.5"
                    y1="-78"
                    x2="411.5"
                    y2="64.9999"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white"></stop>
                    <stop
                      offset="1"
                      stop-color="white"
                      stop-opacity="0"
                    ></stop>
                  </lineargradient>
                  <lineargradient
                    id="paint5_linear_88:141"
                    x1="372.5"
                    y1="-69"
                    x2="372.5"
                    y2="73.9999"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white"></stop>
                    <stop
                      offset="1"
                      stop-color="white"
                      stop-opacity="0"
                    ></stop>
                  </lineargradient>
                  <lineargradient
                    id="paint6_linear_88:141"
                    x1="409.5"
                    y1="-102"
                    x2="409.5"
                    y2="40.9999"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white"></stop>
                    <stop
                      offset="1"
                      stop-color="white"
                      stop-opacity="0"
                    ></stop>
                  </lineargradient>
                </defs>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer
    class="wow fadeInUp relative z-10 bg-primary bg-opacity-5 pt-16 md:pt-20 lg:pt-24"
    data-wow-delay=".1s"
  >
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-1/2 lg:w-4/12 xl:w-5/12">
          <div class="max-w-[360px]">
         
            <p
              class="mb-9 text-base font-medium leading-relaxed text-body-color"
            >
              We are expertise in software development and cybersecurity
            </p>
            <div class="flex items-center">
              <a target="__blank"
                href="https://www.facebook.com/profile.php?id=100095158642476"
                aria-label="social-link"
                class="mr-6 text-[#CED3F6] hover:text-primary"
                ><svg
                  width="9"
                  height="18"
                  viewBox="0 0 9 18"
                  class="fill-current"
                >
                  <path
                    d="M8.13643 7H6.78036H6.29605V6.43548V4.68548V4.12097H6.78036H7.79741C8.06378 4.12097 8.28172 3.89516 8.28172 3.55645V0.564516C8.28172 0.254032 8.088 0 7.79741 0H6.02968C4.11665 0 2.78479 1.58064 2.78479 3.92339V6.37903V6.94355H2.30048H0.65382C0.314802 6.94355 0 7.25403 0 7.70564V9.7379C0 10.1331 0.266371 10.5 0.65382 10.5H2.25205H2.73636V11.0645V16.7379C2.73636 17.1331 3.00273 17.5 3.39018 17.5H5.66644C5.81174 17.5 5.93281 17.4153 6.02968 17.3024C6.12654 17.1895 6.19919 16.9919 6.19919 16.8226V11.0927V10.5282H6.70771H7.79741C8.11222 10.5282 8.35437 10.3024 8.4028 9.96371V9.93548V9.90726L8.74182 7.95968C8.76604 7.7621 8.74182 7.53629 8.59653 7.31048C8.54809 7.16935 8.33016 7.02823 8.13643 7Z"
                  ></path></svg></a
              ><a
                href="#"
                aria-label="social-link"
                class="mr-6 text-[#CED3F6] hover:text-primary"
                ><svg
                  width="19"
                  height="14"
                  viewBox="0 0 19 14"
                  class="fill-current"
                >
                  <path
                    d="M16.3024 2.26027L17.375 1.0274C17.6855 0.693493 17.7702 0.436644 17.7984 0.308219C16.9516 0.770548 16.1613 0.924658 15.6532 0.924658H15.4556L15.3427 0.821918C14.6653 0.282534 13.8185 0 12.9153 0C10.9395 0 9.3871 1.48973 9.3871 3.21062C9.3871 3.31336 9.3871 3.46747 9.41532 3.57021L9.5 4.0839L8.90726 4.05822C5.29435 3.95548 2.33065 1.13014 1.85081 0.642123C1.06048 1.92637 1.5121 3.15925 1.99194 3.92979L2.95161 5.36815L1.42742 4.5976C1.45565 5.67637 1.90726 6.52397 2.78226 7.14041L3.54435 7.65411L2.78226 7.93665C3.2621 9.24658 4.33468 9.78596 5.125 9.99144L6.16935 10.2483L5.18145 10.8647C3.60081 11.8921 1.625 11.8151 0.75 11.738C2.52823 12.8682 4.64516 13.125 6.1129 13.125C7.21371 13.125 8.03226 13.0223 8.22984 12.9452C16.1331 11.25 16.5 4.82877 16.5 3.54452V3.36473L16.6694 3.26199C17.629 2.44007 18.0242 2.00342 18.25 1.74658C18.1653 1.77226 18.0524 1.82363 17.9395 1.84932L16.3024 2.26027Z"
                  ></path></svg></a
              ><a
                href="#"
                aria-label="social-link"
                class="mr-6 text-[#CED3F6] hover:text-primary"
                ><svg
                  width="18"
                  height="14"
                  viewBox="0 0 18 14"
                  class="fill-current"
                >
                  <path
                    d="M17.5058 2.07119C17.3068 1.2488 16.7099 0.609173 15.9423 0.395963C14.5778 7.26191e-08 9.0627 0 9.0627 0C9.0627 0 3.54766 7.26191e-08 2.18311 0.395963C1.41555 0.609173 0.818561 1.2488 0.619565 2.07119C0.25 3.56366 0.25 6.60953 0.25 6.60953C0.25 6.60953 0.25 9.68585 0.619565 11.1479C0.818561 11.9703 1.41555 12.6099 2.18311 12.8231C3.54766 13.2191 9.0627 13.2191 9.0627 13.2191C9.0627 13.2191 14.5778 13.2191 15.9423 12.8231C16.7099 12.6099 17.3068 11.9703 17.5058 11.1479C17.8754 9.68585 17.8754 6.60953 17.8754 6.60953C17.8754 6.60953 17.8754 3.56366 17.5058 2.07119ZM7.30016 9.44218V3.77687L11.8771 6.60953L7.30016 9.44218Z"
                  ></path></svg></a
              ><a target="__blank"
                href="https://www.linkedin.com/company/efrica-ltd/"
                aria-label="social-link"
                class="mr-6 text-[#CED3F6] hover:text-primary"
                ><svg
                  width="17"
                  height="16"
                  viewBox="0 0 17 16"
                  class="fill-current"
                >
                  <path
                    d="M15.2196 0H1.99991C1.37516 0 0.875366 0.497491 0.875366 1.11936V14.3029C0.875366 14.8999 1.37516 15.4222 1.99991 15.4222H15.1696C15.7943 15.4222 16.2941 14.9247 16.2941 14.3029V1.09448C16.3441 0.497491 15.8443 0 15.2196 0ZM5.44852 13.1089H3.17444V5.7709H5.44852V13.1089ZM4.29899 4.75104C3.54929 4.75104 2.97452 4.15405 2.97452 3.43269C2.97452 2.71133 3.57428 2.11434 4.29899 2.11434C5.02369 2.11434 5.62345 2.71133 5.62345 3.43269C5.62345 4.15405 5.07367 4.75104 4.29899 4.75104ZM14.07 13.1089H11.796V9.55183C11.796 8.7061 11.771 7.58674 10.5964 7.58674C9.39693 7.58674 9.222 8.53198 9.222 9.47721V13.1089H6.94792V5.7709H9.17202V6.79076H9.19701C9.52188 6.19377 10.2466 5.59678 11.3711 5.59678C13.6952 5.59678 14.12 7.08925 14.12 9.12897V13.1089H14.07Z"
                  ></path></svg></a>
            </div>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12">
          <div class="mb-12 lg:mb-16">
            <h2 class="mb-10 text-xl font-bold text-black dark:text-white">
              Useful Links
            </h2>
            <ul>
              <li>
                <a
                  href="{{route('blogs')}}"
                  class="mb-4 inline-block text-base font-medium text-body-color hover:text-primary"
                >
                  <!-- -->Articles<!-- -->
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="mb-4 inline-block text-base font-medium text-body-color hover:text-primary"
                >
                  <!-- -->Solutions<!-- -->
                </a>
              </li>
             
            </ul>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12">
          <div class="mb-12 lg:mb-16">
            <h2 class="mb-10 text-xl font-bold text-black dark:text-white">
              Contacts
            </h2>
            <ul>
              <li>
                <a 
                class="mb-4 inline-block text-base font-medium text-body-color hover:text-primary"

                href="tel:+265993466931">+265993466931</a>
              
              </li>
              <li>
                <a
                  href="mailto:efricamw@efricamw.com"
                  class="mb-4 inline-block text-base font-medium text-body-color hover:text-primary"
                >
                efricamw@efricamw.com
                </a>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-4/12 xl:w-3/12">
          <div class="mb-12 lg:mb-16">
            <h2 class="mb-10 text-xl font-bold text-black dark:text-white">
              Support &amp; Help
            </h2>
            <ul>
              <li>
                <a
                  href="{{route('contact')}}"
                  class="mb-4 inline-block text-base font-medium text-body-color hover:text-primary"
                >
                  <!-- -->submit  query<!-- -->
                </a>
              </li>
              <li>
                <a
                  href="{{route('terms')}}"
                  class="mb-4 inline-block text-base font-medium text-body-color hover:text-primary"
                >
                  <!-- -->Terms of Use<!-- -->
                </a>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="absolute right-0 top-14 z-[-1]">
      <svg
        width="55"
        height="99"
        viewBox="0 0 55 99"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle
          opacity="0.8"
          cx="49.5"
          cy="49.5"
          r="49.5"
          fill="#959CB1"
        ></circle>
        <mask
          id="mask0_94:899"
          style="mask-type: alpha"
          maskUnits="userSpaceOnUse"
          x="0"
          y="0"
          width="99"
          height="99"
        >
          <circle
            opacity="0.8"
            cx="49.5"
            cy="49.5"
            r="49.5"
            fill="#4A6CF7"
          ></circle>
        </mask>
        <g mask="url(#mask0_94:899)">
          <circle
            opacity="0.8"
            cx="49.5"
            cy="49.5"
            r="49.5"
            fill="url(#paint0_radial_94:899)"
          ></circle>
          <g opacity="0.8" filter="url(#filter0_f_94:899)">
            <circle
              cx="53.8676"
              cy="26.2061"
              r="20.3824"
              fill="white"
            ></circle>
          </g>
        </g>
        <defs>
          <filter
            id="filter0_f_94:899"
            x="12.4852"
            y="-15.1763"
            width="82.7646"
            height="82.7646"
            filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB"
          >
            <feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
            <feblend
              mode="normal"
              in="SourceGraphic"
              in2="BackgroundImageFix"
              result="shape"
            ></feblend>
            <fegaussianblur
              stdDeviation="10.5"
              result="effect1_foregroundBlur_94:899"
            ></fegaussianblur>
          </filter>
          <radialgradient
            id="paint0_radial_94:899"
            cx="0"
            cy="0"
            r="1"
            gradientUnits="userSpaceOnUse"
            gradientTransform="translate(49.5 49.5) rotate(90) scale(53.1397)"
          >
            <stop stop-opacity="0.47"></stop>
            <stop offset="1" stop-opacity="0"></stop>
          </radialgradient>
        </defs>
      </svg>
    </div>
    <div class="absolute left-0 bottom-24 z-[-1]">
      <svg
        width="79"
        height="94"
        viewBox="0 0 79 94"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <rect
          opacity="0.3"
          x="-41"
          y="26.9426"
          width="66.6675"
          height="66.6675"
          transform="rotate(-22.9007 -41 26.9426)"
          fill="url(#paint0_linear_94:889)"
        ></rect>
        <rect
          x="-41"
          y="26.9426"
          width="66.6675"
          height="66.6675"
          transform="rotate(-22.9007 -41 26.9426)"
          stroke="url(#paint1_linear_94:889)"
          stroke-width="0.7"
        ></rect>
        <path
          opacity="0.3"
          d="M50.5215 7.42229L20.325 1.14771L46.2077 62.3249L77.1885 68.2073L50.5215 7.42229Z"
          fill="url(#paint2_linear_94:889)"
        ></path>
        <path
          d="M50.5215 7.42229L20.325 1.14771L46.2077 62.3249L76.7963 68.2073L50.5215 7.42229Z"
          stroke="url(#paint3_linear_94:889)"
          stroke-width="0.7"
        ></path>
        <path
          opacity="0.3"
          d="M17.9721 93.3057L-14.9695 88.2076L46.2077 62.325L77.1885 68.2074L17.9721 93.3057Z"
          fill="url(#paint4_linear_94:889)"
        ></path>
        <path
          d="M17.972 93.3057L-14.1852 88.2076L46.2077 62.325L77.1884 68.2074L17.972 93.3057Z"
          stroke="url(#paint5_linear_94:889)"
          stroke-width="0.7"
        ></path>
        <defs>
          <lineargradient
            id="paint0_linear_94:889"
            x1="-41"
            y1="21.8445"
            x2="36.9671"
            y2="59.8878"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
          </lineargradient>
          <lineargradient
            id="paint1_linear_94:889"
            x1="25.6675"
            y1="95.9631"
            x2="-42.9608"
            y2="20.668"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.51"></stop>
          </lineargradient>
          <lineargradient
            id="paint2_linear_94:889"
            x1="20.325"
            y1="-3.98039"
            x2="90.6248"
            y2="25.1062"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
          </lineargradient>
          <lineargradient
            id="paint3_linear_94:889"
            x1="18.3642"
            y1="-1.59742"
            x2="113.9"
            y2="80.6826"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.51"></stop>
          </lineargradient>
          <lineargradient
            id="paint4_linear_94:889"
            x1="61.1098"
            y1="62.3249"
            x2="-8.82468"
            y2="58.2156"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#4A6CF7" stop-opacity="0.62"></stop>
            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
          </lineargradient>
          <lineargradient
            id="paint5_linear_94:889"
            x1="65.4236"
            y1="65.0701"
            x2="24.0178"
            y2="41.6598"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.51"></stop>
          </lineargradient>
        </defs>
      </svg>
    </div>
  </footer>
  <div class="fixed bottom-8 right-8 z-[99]"></div>