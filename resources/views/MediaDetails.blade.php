@extends('components.Header')

@section('content')
<section class="py-8 md:py-16 px-4 md:px-8 bg-[#fbfaf5]">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-6 md:gap-8"><a href="{{ url('/media') }}" class="inline-flex items-center gap-2 text-[#0069e5] hover:underline w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span class="font-medium text-sm md:text-base">Return to Photo Gallery</span>
            </a><div class="flex flex-col gap-3 md:gap-4">
                <h1 class="font-bold text-[22px] md:text-[30px] leading-[30px] md:leading-[38px] text-[#111928]">
                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia
                </h1>
                <div class="flex items-center gap-4">
                    <span class="text-[#637381] text-xs md:text-sm">2025-01-15</span>
                    <span class="text-[#637381]">•</span>
                    <span class="text-[#637381] text-xs md:text-sm">8 photos</span>
                </div>
            </div><div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 md:gap-4">
                @for($i = 1; $i <= 8; $i++)
                <div class="aspect-square rounded-lg overflow-hidden cursor-pointer group relative">
                    <img src="{{ asset('images/Content/meeting-' . $i . '.png') }}" alt="Photo {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300"></div><div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 bg-white/80 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#111928]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg>
                    </div>
                </div>
                @endfor
            </div><div class="mt-6 md:mt-8 p-4 md:p-6 bg-white rounded-lg">
                <h3 class="font-semibold text-base md:text-lg text-[#111928] mb-3 md:mb-4">About this gallery</h3>
                <p class="text-[#637381] text-sm md:text-base leading-6 md:leading-7">
                    This photo gallery captures key moments from the EJAM project activities. The images showcase training sessions, meetings, and collaborative efforts between Canadian and Mongolian partners working together to strengthen the justice sector in Mongolia.
                </p>
            </div><div class="flex items-center justify-between mt-6 md:mt-8">
                <a href="#" class="flex items-center gap-1 md:gap-2 text-[#637381] hover:text-[#0069e5] transition-colors text-sm md:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span class="hidden sm:inline">Previous gallery</span>
                    <span class="sm:hidden">Previous</span>
                </a>
                <a href="#" class="flex items-center gap-1 md:gap-2 text-[#637381] hover:text-[#0069e5] transition-colors text-sm md:text-base">
                    <span class="hidden sm:inline">Next gallery</span>
                    <span class="sm:hidden">Next</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
