@extends('components.Header')

@section('content')
<section class="py-8 md:py-16 px-4 md:px-8 bg-[#fbfaf5]">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-6 md:gap-10 items-center"><div class="flex flex-col gap-3 items-center max-w-[430px]">
                <p class="font-semibold text-base md:text-lg leading-[26px] text-[#0069e5] text-center">
                    Media
                </p>
                <p class="font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928] text-center">
                    Photo Gallery
                </p>
            </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-full">
                @for($i = 1; $i <= 9; $i++)
                <a href="{{ url('/media-details') }}" class="group relative overflow-hidden rounded-xl aspect-[4/3]">
                    <img src="{{ asset('images/Content/meeting-' . (($i - 1) % 8 + 1) . '.png') }}" alt="Gallery {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-sm">2025-01-{{ 10 + $i }}</p>
                        <p class="text-white font-medium">Photo album {{ $i }}</p>
                    </div>
                </a>
                @endfor
            </div><button class="border border-[#0069e5] text-[#0069e5] px-6 md:px-8 py-2 md:py-3 rounded-full text-sm md:text-base font-medium hover:bg-[#0069e5] hover:text-white transition-colors">
                Load more
            </button>
        </div>
    </div>
</section>

<section class="py-8 md:py-16 px-4 md:px-8 bg-[#f6f4e9]">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-6 md:gap-10 items-center"><div class="flex flex-col gap-3 items-center max-w-[430px]">
                <p class="font-semibold text-base md:text-lg leading-[26px] text-[#0069e5] text-center">
                    Media
                </p>
                <p class="font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928] text-center">
                    Video Gallery
                </p>
            </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-full">
                @for($i = 1; $i <= 6; $i++)
                <div class="flex flex-col gap-3">
                    <div class="relative overflow-hidden rounded-xl aspect-video cursor-pointer group">
                        <img src="{{ asset('images/Content/meeting-' . (($i - 1) % 8 + 1) . '.png') }}" alt="Video {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300"></div><div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[53px] h-[53px] group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 text-white">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm14.024-.983a1.125 1.125 0 0 1 0 1.966l-5.603 3.113A1.125 1.125 0 0 1 9 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-sm text-[#637381]">2025-01-{{ 10 + $i }}</p>
                        <p class="font-semibold text-base text-[#111928]">
                            @if($i == 1)
                            Recording of latest training session hosted by Supreme Court
                            @elseif($i == 2)
                            EJAM project introduction video
                            @elseif($i == 3)
                            New judge members election ceremony
                            @elseif($i == 4)
                            Court administration workshop highlights
                            @elseif($i == 5)
                            Judicial training program overview
                            @else
                            Project quarterly review meeting
                            @endif
                        </p>
                    </div>
                </div>
                @endfor
            </div><button class="border border-[#0069e5] text-[#0069e5] px-6 md:px-8 py-2 md:py-3 rounded-full text-sm md:text-base font-medium hover:bg-[#0069e5] hover:text-white transition-colors">
                Load more videos
            </button>
        </div>
    </div>
</section>
@endsection
