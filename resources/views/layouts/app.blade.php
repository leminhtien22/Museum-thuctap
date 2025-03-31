<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Museum') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css?family=Baskervville:400|Bellefair:400|Poppins:300,400|Roboto:300,500"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bg-gradient-hero {
            background: linear-gradient(32deg, rgba(17, 17, 17, 1) 0%, rgba(0, 0, 0, 0) 100%);
        }
    </style>
</head>

<body class="bg-[#0d0d0d]">
    <div class="w-[1440px] mx-auto overflow-hidden">
        <!-- Navigation -->
        <nav class="text-center h-24 z-10 relative">
            <ul class="flex gap-16 justify-center items-center">
                <li class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                    <a class="uppercase" href="{{ route('home') }}">{{ __('Trang chủ') }}</a>
                </li>

                <li class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                    <a class="uppercase" href="{{ route('client.exhibition') }}">{{ __('Buổi triển lãm') }}</a>
                </li>

                @guest
                    <li class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                        <a class="uppercase" href="{{ route('client.collection') }}">{{ __('Bộ sưu tập') }}</a>
                    </li>
                @endguest

                <li>
                    <a href="{{ route('home') }}"
                        class="inline-flex flex-col items-center justify-center p-2.5 bg-[#0000001a] backdrop-blur-[5px] backdrop-brightness-[100%] [-webkit-backdrop-filter:blur(5px)_brightness(100%)]">
                        <img class="w-[52.58px] h-[43.75px]" alt="Museum logo"
                            src="https://c.animaapp.com/m8peu9m38cRc1i/img/group-497.png">
                        <div
                            class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                            MUSEUM</div>
                    </a>
                </li>

                @auth
                    <li class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                        <a class="uppercase" href="{{ route('client.collection') }}">{{ __('Bộ sưu tập') }}</a>
                    </li>
                    <li class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                        <a class="uppercase" href="{{ route('client.post') }}">{{ __('Bài viết') }}</a>
                    </li>
                @endauth

                <li class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                    <a class="uppercase" href="{{ route('cart') }}">{{ __('Giỏ hàng') }}</a>
                </li>

                @guest
                    <li class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                        <a class="uppercase" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                    </li>

                    <li class="font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                        <a class="uppercase" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                    </li>
                @else
                    <li class="flex items-center">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user"
                                data-dropdown-placement="bottom-start">
                                <span class="sr-only">{{ __('Open user menu') }}</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="{{ asset('storage/images/QuanCong.jpg') }}"
                                    alt="user photo">
                            </button>
                        </div>

                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{ Auth::user()->name }}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>

                            <ul class="py-1 text-left" role="none">
                                <li>
                                    <button role="menuitem" data-modal-target="popup-modal-logout"
                                        data-modal-toggle="popup-modal-logout"
                                        class="block text-left w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        type="button">
                                        {{ __('Đăng xuất') }}
                                    </button>
                                </li>

                                <li>
                                    <a href="{{ route('client.exhibition.ticket.history') }}"
                                        class="block text-left w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        type="button">
                                        {{ __('Lịch sử đặt vé') }}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('order.history') }}"
                                        class="block text-left w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        type="button">
                                        {{ __('Lịch sử đặt hàng') }}
                                    </a>
                                </li>

                                @if (Auth::user()->is_admin)
                                    <li>
                                        <a href="{{ route('admin.post') }}" role="menuitem"
                                            class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            type="button">
                                            {{ __('Quản trị website') }}
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>

        @yield('content')

        <!-- Footer -->
        <footer class="flex justify-between mt-12">
            <div>
                <div
                    class="inline-flex flex-col items-center justify-center bg-[#0000001a] backdrop-blur-[5px] backdrop-brightness-[100%] [-webkit-backdrop-filter:blur(5px)_brightness(100%)]">
                    <img class="" alt="Museum logo"
                        src="https://c.animaapp.com/m8peu9m38cRc1i/img/group-497-1.png">
                    <div
                        class="w-fit font-baskervville font-normal text-white text-xs text-center tracking-[0] leading-[normal]">
                        MUSEUM
                    </div>
                </div>

                <!-- Footer Links -->
                <div class="mt-12 grid grid-cols-2 gap-12">
                    <div class="w-fit font-baskervville font-normal text-white text-xs tracking-[0] leading-[normal]">
                    TRANG CHỦ</div>
                    <div class="w-fit font-baskervville font-normal text-white text-xs tracking-[0] leading-[normal]">
                    SỰ KIỆN</div>
                    <div class="w-fit font-baskervville font-normal text-white text-xs tracking-[0] leading-[normal]">
                    PHÒNG TRƯNG BÀY</div>
                    <div class="w-fit  font-baskervville font-normal text-white text-xs tracking-[0] leading-[normal]">
                    CẬP NHẬT</div>
                    <div class="w-fit  font-baskervville font-normal text-white text-xs tracking-[0] leading-[normal]">
                    LỊCH SỬ</div>
                    <div class="w-fit  font-baskervville font-normal text-white text-xs tracking-[0] leading-[normal]">
                    LIÊN HỆ</div>
                </div>
            </div>

            <div>
                <div class="font-baskervville font-normal text-white text-[30.2px] tracking-[0] leading-[normal]">
                BẢN TIN
                </div>

                <div class="font-poppins font-light text-white text-[11.6px] tracking-[0] leading-[normal] mt-2">
                NHẬN TIN CẬP NHẬT HÀNG NGÀY VỀ SỰ KIỆN, SẢN PHẨM VÀ NHIỀU THÔNG TIN KHÁC
                </div>

                <div>
                    <div class="my-12">
                        <div class="h-[60px] border border-solid border-white">
                            <input class="w-full h-full bg-transparent border-none text-white px-4"
                                placeholder="ENTER YOUR EMAIL">
                        </div>

                        <button
                            class="bg-[#272727] border border-solid border-white rounded-none px-20 py-4 mt-2 cursor-pointer">
                            <span
                                class="font-baskervville font-normal text-white text-[11.6px] tracking-[0] leading-[normal]">
                                ĐẶT MUA
                            </span>
                        </button>
                    </div>

                    <div class="space-y-4">
                        <div class="font-poppins font-light text-white text-[11.6px] tracking-[0] leading-[normal]">
                        LIÊN HỆ VỚI CHÚNG TÔI
                        </div>


                        <div class="flex gap-4 items-center">
                            <img class="w-6 h-6" alt="Email icon"
                                src="https://c.animaapp.com/m8peu9m38cRc1i/img/frame-1.svg">

                            <div
                                class="font-poppins font-light text-white text-[11.6px] tracking-[0] leading-[normal]">
                                leminhtien020202@gmail.com
                            </div>
                        </div>

                        <div class="flex gap-4 items-center">

                            <img class="w-6 h-6" alt="Location icon"
                                src="https://c.animaapp.com/m8peu9m38cRc1i/img/frame-5.svg">

                            <div
                                class="font-poppins font-light text-white text-[11.6px] tracking-[0] leading-[normal]">
                                Ninh Kiều Cần Thơ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright Section -->
        <section class="flex flex-col items-center text-center mt-12 py-8">
            <div>
                <div class="">
                    <div class="flex flex-col items-center">
                        <div class="font-poppins font-light text-white text-[11.6px] tracking-[0] leading-[normal]">
                        Thiết kế và phát triển bởi Lê Minh Tiến
                        </div>
                        <img class="w-[54px] h-[54px] object-cover" alt="UXM logo"
                            src="https://c.animaapp.com/m8peu9m38cRc1i/img/fav-icon-1.png">
                    </div>

                    <div class="font-poppins font-light text-white text-[11.6px] tracking-[0] leading-[normal]">
                    miễn phí sử dụng cho mục đích thương mại và cá nhân. nếu bạn cần phát triển trang web và ứng 
                    dụng amazon hãy kết nối với id email ở trên
                    </div>
                </div>

                <div class="font-poppins font-light text-white text-[11.6px] tracking-[0] leading-[normal] mt-4">
                nếu bạn đang sử dụng nó xin vui lòng cho chúng tôi một số thông tin
                </div>
            </div>
        </section>
    </div>

    <div id="popup-modal-logout" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[60] bg-gray-200/50 backdrop-blur-sm justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal-logout">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                        Bạn có chắc muốn đăng xuất không?</h3>
                    <button data-modal-hide="popup-modal-logout"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                        type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Đồng ý
                    </button>

                    <button data-modal-hide="popup-modal-logout" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Huỷ
                        bỏ</button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
