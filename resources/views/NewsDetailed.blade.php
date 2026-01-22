@extends('components.Header')

@section('content')
<section class="py-8 md:py-16 px-4 md:px-8 bg-[#fbfaf5]">
    <div class="max-w-[900px] mx-auto"><div class="flex flex-wrap items-center gap-2 mb-6 md:mb-8">
            <a href="{{ url('/') }}" class="text-[#637381] hover:text-[#0069e5] text-xs md:text-sm">Home</a>
            <span class="text-[#637381]">/</span>
            <a href="{{ url('/news-activities') }}" class="text-[#637381] hover:text-[#0069e5] text-xs md:text-sm">News & Activities</a>
            <span class="text-[#637381]">/</span>
            <span class="text-[#0069e5] text-xs md:text-sm">News Detail</span>
        </div><div class="flex flex-col gap-3 md:gap-4 mb-6 md:mb-8">
            <h1 class="font-bold text-[24px] md:text-[36px] leading-[32px] md:leading-[44px] text-[#111928]">
                The Equal Justice for All in Mongolia (EJAM) project launched
            </h1>
            <div class="flex items-center gap-4">
                <span class="text-[#637381] text-xs md:text-sm">2025-01-15</span>
                <span class="text-[#637381]">•</span>
                <span class="text-[#0069e5] text-xs md:text-sm">News</span>
            </div>
        </div><div class="w-full h-[220px] md:h-[400px] rounded-lg md:rounded-xl overflow-hidden mb-6 md:mb-8">
            <img src="{{ asset('images/Page8/news1.png') }}" alt="EJAM Project Launch" class="w-full h-full object-cover" />
        </div><div class="prose max-w-none mb-8 md:mb-12">
            <p class="text-[#637381] text-sm md:text-base leading-6 md:leading-7 mb-4 md:mb-6">
                The Equal Justice for All in Mongolia (EJAM) project was officially launched with a ceremony attended by key stakeholders from the Government of Mongolia and the Government of Canada. The project aims to strengthen the rule of law and improve access to justice for all Mongolians.
            </p>
            <p class="text-[#637381] text-base leading-7 mb-6">
                EJAM is a five-year initiative funded by Global Affairs Canada that will work with Mongolian justice sector institutions to enhance their capacity to deliver fair, transparent, and accessible justice services. The project will focus on improving court administration, judicial training, and public legal education.
            </p>
            <p class="text-[#637381] text-base leading-7 mb-6">
                "This project represents a significant step forward in our partnership with Mongolia to promote human rights and the rule of law," said the Canadian Ambassador. "We are committed to supporting Mongolia's efforts to build a more just and equitable society."
            </p>
            <p class="text-[#637381] text-base leading-7 mb-6">
                Key activities under the EJAM project include:
            </p>
            <ul class="list-disc list-inside text-[#637381] text-base leading-7 mb-6 ml-4">
                <li class="mb-2">Strengthening court administration and case management systems</li>
                <li class="mb-2">Enhancing judicial training and professional development</li>
                <li class="mb-2">Improving access to legal information and services</li>
                <li class="mb-2">Supporting gender equality and inclusion in the justice sector</li>
            </ul>
            <p class="text-[#637381] text-base leading-7">
                The project will work closely with the Supreme Court of Mongolia, the Judicial General Council, and other key institutions to achieve these objectives.
            </p>
        </div><div class="mb-8 md:mb-12">
            <h3 class="font-semibold text-lg md:text-xl text-[#111928] mb-4 md:mb-6">Photo Gallery</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 md:gap-4">
                @for($i = 1; $i <= 8; $i++)
                <div class="aspect-square rounded-lg overflow-hidden">
                    <img src="{{ asset('images/Page8/meeting-' . $i . '.png') }}" alt="Photo {{ $i }}" class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" />
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>

<section class="py-8 md:py-16 px-4 md:px-8 bg-[#f6f4e9]">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-6 md:gap-10 items-center"><div class="flex flex-col gap-2 md:gap-3 items-center">
                <p class="font-semibold text-base md:text-lg leading-[24px] md:leading-[26px] text-[#0069e5] text-center">
                    Related
                </p>
                <p class="font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928] text-center">
                    More news
                </p>
            </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 w-full">
                @for($i = 1; $i <= 3; $i++)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-[160px] md:h-[200px] overflow-hidden">
                        <img src="{{ asset('images/Page8/news' . $i . '.png') }}" alt="News {{ $i }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-4 md:p-6">
                        <p class="text-xs md:text-sm text-[#637381] mb-2">2025-01-{{ 10 + $i }}</p>
                        <h4 class="font-semibold text-base md:text-lg text-[#111928] mb-2 md:mb-3 line-clamp-2">
                            @if($i == 1)
                            New judge members of the Judicial General Council are elected
                            @elseif($i == 2)
                            Training workshop on court administration completed
                            @else
                            EJAM project quarterly review meeting held
                            @endif
                        </h4>
                        <a href="#" class="text-[#0069e5] text-sm font-medium hover:underline">Read more →</a>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>
@endsection
