@extends('components.Header')

@section('content')
<section class="py-8 md:py-16 px-4 md:px-8 overflow-hidden bg-[#fbfaf5]">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-4 md:gap-6 items-center"><div class="flex flex-col gap-3 items-center max-w-[430px]">
                <p class="font-semibold text-base md:text-lg leading-[26px] text-[#0069e5] text-center">
                    Publications
                </p>
                <p class="font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928] text-center">
                    Manuals, guidelines
                </p>
            </div><div class="flex flex-col gap-6 md:gap-10 items-center w-full">
                <div class="flex gap-4 md:gap-10 items-start px-2 md:px-6 w-full max-w-[1216px] overflow-x-auto">
                    <button class="border-b-2 border-[#0069e5] py-2 md:py-[15px] whitespace-nowrap">
                        <span class="font-medium text-sm md:text-base leading-6 text-[#0069e5] text-center">All works</span>
                    </button>
                    <button class="py-2 md:py-[15px] whitespace-nowrap">
                        <span class="font-medium text-sm md:text-base leading-6 text-[#637381] text-center">Manuals</span>
                    </button>
                    <button class="py-2 md:py-[15px] whitespace-nowrap">
                        <span class="font-medium text-sm md:text-base leading-6 text-[#637381] text-center">Guidelines</span>
                    </button>
                </div><div class="flex flex-col gap-8 md:gap-[60px] items-start w-full"><div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8 w-full">
                        @for($i = 1; $i <= 4; $i++)
                        <div class="flex flex-col gap-2 md:gap-3 items-start w-full">
                            <div class="h-[200px] md:h-[340px] rounded-md w-full overflow-hidden">
                                <img src="{{ asset('images/Content/publication' . $i . '.png') }}" alt="Publication {{ $i }}" class="w-full h-full object-cover rounded-md" />
                            </div>
                            <button class="border border-[#dfe4ea] flex gap-2 items-center justify-center px-4 md:px-7 py-2 md:py-3 rounded-full w-full hover:bg-[#0069e5] hover:text-white transition-colors group">
                                <span class="font-medium text-sm md:text-base text-[#0069e5] group-hover:text-white">Download</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 md:w-4 h-3 md:h-4 text-[#0069e5] group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </button>
                        </div>
                        @endfor
                        @for($i = 5; $i <= 8; $i++)
                        <div class="flex flex-col gap-2 md:gap-3 items-start w-full">
                            <div class="h-[200px] md:h-[340px] rounded-md w-full overflow-hidden">
                                <img src="{{ asset('images/Content/publication' . $i . '.png') }}" alt="Publication {{ $i }}" class="w-full h-full object-cover rounded-md" />
                            </div>
                            <button class="border border-[#dfe4ea] flex gap-2 items-center justify-center px-4 md:px-7 py-2 md:py-3 rounded-full w-full hover:bg-[#0069e5] hover:text-white transition-colors group">
                                <span class="font-medium text-sm md:text-base text-[#0069e5] group-hover:text-white">Download</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 md:w-4 h-3 md:h-4 text-[#0069e5] group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                            </button>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-8 md:py-16 px-4 md:px-8 overflow-hidden bg-[#f6f4e9]">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-6 md:gap-10 items-center"><div class="flex flex-col gap-3 items-center max-w-[430px]">
                <p class="font-semibold text-base md:text-lg leading-[26px] text-[#0069e5] text-center">
                    Media
                </p>
                <p class="font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928] text-center">
                    Video gallery
                </p>
            </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-full">
                @for($i = 1; $i <= 3; $i++)
                <div class="flex flex-col gap-2 md:gap-3 items-start">
                    <div class="h-[160px] md:h-[204px] overflow-hidden relative rounded-xl w-full">
                        <img src="{{ asset('images/Content/video' . $i . '.png') }}" alt="Video {{ $i }}" class="absolute inset-0 w-full h-full object-cover rounded-xl" />
                        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 cursor-pointer hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 md:w-12 h-10 md:h-12 text-white">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm14.024-.983a1.125 1.125 0 0 1 0 1.966l-5.603 3.113A1.125 1.125 0 0 1 9 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1 md:gap-1.5 items-start w-full">
                        <p class="font-normal text-xs md:text-sm leading-[22px] text-[#637381]">
                            2025-10-14
                        </p>
                        <p class="font-semibold text-base md:text-lg leading-[24px] md:leading-[26px] text-[#111928]">
                            @if($i == 1)
                            Recording of latest training session hosted by Supreme Court of Mongolia
                            @elseif($i == 2)
                            Video information and title
                            @else
                            New judge members of the Judicial General Council are elected
                            @endif
                        </p>
                    </div>
                </div>
                @endfor
            </div><a href="#" class="bg-[#0069e5] flex items-center justify-center px-4 py-2 rounded-full w-[162px] hover:bg-[#0058c4] transition-colors">
                <span class="font-medium text-sm leading-5 text-white text-center">All videos</span>
            </a>
        </div>
    </div>
</section>
@endsection
