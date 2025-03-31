@extends('layouts.app')

@section('title')
    {{ __('Trang chủ') }}
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative w-[1760px] h-[2579px] -left-[160px]">
        <div
            class="absolute w-[1378px] h-[1378px] top-[133px] left-[382px] rounded-[689.07px] border-[17px] border-solid border-white blur-[10px]">
        </div>
        <img class="w-[1440px] h-[1418px] absolute top-0 left-[160px] object-cover" alt="Museum hero image"
            src="{{ asset('storage/images/AnDuongVuongXoaNen.png') }}">
        <div class="absolute w-[1630px] h-[425px] top-[1087px] left-0 bg-[#0d0d0d]"></div>
        <div class="absolute w-[1440px] h-[452px] top-[893px] left-[160px] bg-gradient-hero"></div>
        <div
            class="absolute w-[853px] h-[853px] top-[1309px] left-[457px] rounded-[426.43px] border-[10px] border-solid border-white blur-[15px]">
        </div>
        <div class="absolute w-[431px] h-[1288px] top-[1292px] left-[160px] bg-black"></div>
        <div class="absolute w-[1665px] h-[765px] top-[1814px] left-[160px] bg-black"></div>
        <h1
            class="absolute w-[1140px] top-[977px] left-[347px] font-bellefair font-normal text-white text-[91.6px] text-center tracking-[0] leading-[normal]">
            CHÀO MỪNG ĐẾN VỚI BẢO TÀNG TƯỢNG DÂN GIAN
        </h1>
        <h2
            class="absolute w-[556px] top-[1377px] left-[269px] font-bellefair font-normal text-white text-[108.5px] tracking-[0] leading-[normal]">
            BẢO TÀNG TƯỢNG
        </h2>

        <p
            class="absolute w-[442px] top-[2016px] left-[280px] font-poppins font-light text-white text-[27.5px] tracking-[0] leading-[38.8px]">
            Museums are important cultural and educational institutions in society, where artifacts of historical, cultural, scientific 
            and artistic value are preserved, researched and displayed to serve the needs of learning, research and enjoyment of the public. 
            Museums are not simply places to store objects of the past but also bridges between history and the present, between people and knowledge.
        </p>

        <p
            class="absolute w-[810px] top-[2114px] left-[735px] font-poppins font-light text-white text-2xl tracking-[0] leading-[39.2px]">
            Bảo tàng là thiết chế văn hóa giáo dục quan trọng trong xã hội, nơi lưu giữ, nghiên cứu và trưng bày các hiện vật có giá trị 
            lịch sử, văn hóa, khoa học và nghệ thuật nhằm phục vụ cho nhu cầu học tập, nghiên cứu và thưởng thức của công chúng. Bảo tàng 
            không chỉ đơn thuần là nơi cất giữ những vật thể quá khứ mà còn là cầu nối giữa lịch sử và hiện tại, giữa con người và tri thức.
        </p>

        
        <img class="w-[735px] h-[875px] absolute top-[1188px] left-[731px] object-cover" alt="Featured statue"
            src="{{ asset('storage/images/AnDuongVuongXoaNen.png') }}">
    </section>

    <!-- Upcoming Events Section -->
    <section class="mt-20">
        <div class="flex justify-between relative">
            <div>
                <hr class="w-[197px] h-1 bg-[#727272]">

                <h2
                    class=" font-bellefair font-normal text-white text-[71.6px] tracking-[0] leading-[normal] whitespace-nowrap my-8">
                    Sự kiện sắp tới
                </h2>

                <hr class="w-[731px] h-1 bg-[#B9B9B9]">
            </div>

            <button class="w-[93px] h-[93px] rounded-[46.62px] border-[0.77px] border-solid border-white bg-transparent">
                <span
                    class="font-bellefair font-normal text-white text-[22.1px] tracking-[0] leading-[normal] whitespace-nowrap">
                    Xem tất cả
                </span>
            </button>
        </div>

        <div
            class="w-full relative p-0 flex items-end mt-12 h-[636px] bg-[url(https://c.animaapp.com/m8peu9m38cRc1i/img/image-02.png)] bg-cover bg-[50%_50%] border-none rounded-none">
            <div class="flex justify-between pb-12 px-8 w-full z-10">
                <div class="flex items-center gap-10">
                    <div
                        class="font-bellefair font-normal text-[#e1e1e1] text-[67.6px] tracking-[0] leading-[normal] whitespace-nowrap">
                        01
                    </div>
                    <div class="space-y-2">
                        <div class="relative">
                            <div class="absolute -left-8 top-1 w-[23px] h-[23px] bg-[#828282] rounded-[11.52px]">
                                <div class="relative w-4 h-4 top-1 left-1 bg-neutral-100 rounded-[7.98px]"></div>
                            </div>
                            <h3 class="font-bellefair font-normal text-white text-[29.2px] tracking-[0] leading-[normal]">
                            LỊCH SỬ
                            </h3>
                        </div>

                        <div class="font-poppins font-normal text-white text-[12.5px] tracking-[0] leading-[normal]">
                            BẮT ĐẦU VÀO: 08:00 GTS. THỨ HAI
                        </div>

                        <p
                            class="w-[629px] text-[15.9px] tracking-[1.03px] leading-[normal] font-poppins font-light text-white">
                            LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. IPSUM ELEMENTUM PHARETRA
                            ELEMENTUM
                            IACULIS CONSEQUAT. LECTUS LEO EGESTAS MAURIS AMET.
                        </p>
                    </div>
                </div>

                <div class="flex items-end justify-end">
                    <div class="relative cursor-pointer">
                        <button
                            class="absolute top-1/2 -left-5 transform -translate-y-1/2 z-1 w-[46px] h-[46px] bg-[#343434] rounded-[23.06px]"></button>

                        <span
                            class="font-poppins font-normal text-white text-[19.7px] tracking-[0] leading-[normal] z-10 relative">
                            Đặt Vé
                        </span>
                    </div>
                </div>
            </div>

            <div
                class="bg-gradient-to-b from-transparent to-[rgba(0,0,0,0.50)] w-full h-[636px] absolute bottom-0 left-0 z-0">
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="mt-12 w-full columns-3 gap-0">
        <!-- Gallery Images -->
        <img class="block max-w-full object-cover" alt="Gallery image 1"
            src="{{ asset('storage/images/ConHo.jpg') }}">
        <img class="block max-w-full object-cover" alt="Gallery image 2"
            src="{{ asset('storage/images/ConRong.jpg') }}">
        <img class="block max-w-full object-cover" alt="Gallery image 3"
            src="{{ asset('storage/images/HoangHau.jpg') }}">
        <img class="block max-w-full object-cover" alt="Gallery image 4"
            src="{{ asset('storage/images/HoPhap.jpg') }}">
        <img class="block max-w-full object-cover" alt="Gallery image 5"
            src="{{ asset('storage/images/LinhVat.jpg') }}">
        <img class="block max-w-full object-cover" alt="Gallery image 6"
            src="{{ asset('storage/images/QuanCong.jpg') }}">
        
    </section>

    <!-- Carousel Section -->
    <div class="py-20 mt-12 bg-neutral-900">
        <div class="flex items-center justify-center">
            <div class="flex items-center justify-center">
                <img class="h-auto w-full object-cover translate-x-12 z-2" alt="Carousel image 1"
                    src="{{ asset('storage/images/AI5.webp') }}">

                <img class="h-auto w-full object-cover z-10" alt="Carousel image 3"
                    src="{{ asset('storage/images/OngToBaNguyet.jpg') }}">

                <img class="h-auto w-full object-cover transform -translate-x-10 z-2" alt="Carousel image 2"
                    src="{{ asset('storage/images/AI7.webp') }}">
            </div>
        </div>
    </div>

    <!-- Products Section -->
    <section class="mt-12">
        <div class="relative text-center flex justify-center overflow-hidden">
            <h2
                class="w-[881px] font-bellefair font-normal text-white text-[176.6px] text-center tracking-[0] leading-[normal]">
                OUR PRODUCT
            </h2>

            <img class="absolute right-0 object-cover top-1/2 transform -translate-y-1/2 z-1 translate-x-28"
                alt="Decorative line" src="{{ asset('storage/images/AI2.webp') }}">
            <img class="absolute left-0 object-cover top-1/2 transform -translate-y-1/2 -translate-x-28 z-1"
                alt="Decorative line" src="{{ asset('storage/images/AI1.webp') }}">
        </div>

        <div class="mt-12 flex gap-4 justify-end">

            <div class="p-0 relative">
                <div class="bg-gradient-to-b from-transparent to-[rgba(0,0,0,0.50)] absolute top-0 left-0 w-full h-full">
                </div>

                <img src="{{ asset('storage/images/PhatBaQuanAm.jpg') }} " alt=""
                    class="w-[521px] h-full object-cover">

                <div class="absolute bottom-0 p-10">
                    <div
                        class="font-bellefair font-normal text-white text-[76.4px] tracking-[0] leading-[normal] whitespace-nowrap">
                        SẢN PHẨM
                    </div>
                </div>
            </div>


            <div>
                <img class="w-[580px] object-cover" alt="Product image"
                    src="{{ asset('storage/images/TuPhap.jpg') }}">
            </div>
        </div>

        <div class="text-center mt-20">
            <button class="relative w-[290px] h-[95px] p-0 cursor-pointer">
                <div class="z-0 absolute w-[95px] h-[95px] top-0 left-0 bg-[#363636] rounded-[47.58px]"></div>

                <span
                    class="relative z-10 font-roboto font-medium text-white text-[54.7px] tracking-[0] leading-[normal] whitespace-nowrap">
                    Ghé thăm cửa hàng
                </span>
            </button>
        </div>
    </section>
@endsection
