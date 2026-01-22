@extends('components.Header')

@section('content')
<section class="py-8 md:py-16 px-4 md:px-8 bg-[#fbfaf5]">
    <div class="max-w-[1152px] mx-auto"><div class="flex flex-wrap items-center gap-2 md:gap-3 justify-center py-2 px-4 md:px-8 mb-4 md:mb-6">
            <a href="{{ url('/news-activities') }}" class="text-[#637381] hover:text-[#0069e5] text-sm font-medium font-['Manrope']">News & Activities</a>
            <svg class="w-4 h-4 text-[#637381]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="{{ url('/all-news') }}" class="text-[#637381] hover:text-[#0069e5] text-sm font-medium font-['Manrope']">All news articles</a>
            <svg class="w-4 h-4 text-[#637381]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="text-[#0069e5] text-sm font-medium font-['Manrope']">News</span>
        </div><div class="flex flex-col gap-3 items-center text-center max-w-[696px] mx-auto mb-6 md:mb-8">
            <h1 class="font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928] font-['Manrope']">
                The Equal Justice for All in Mongolia (EJAM) project launched
            </h1>
            <p class="text-[#637381] text-sm font-medium font-['Manrope']">2025-10-06</p>
        </div><div class="flex flex-col gap-8 md:gap-10 items-center"><div class="w-full max-w-[720px] h-[250px] md:h-[405px] rounded-xl overflow-hidden">
                <img src="{{ asset('images/Content/news2.jpg') }}" alt="EJAM Project Launch" class="w-full h-full object-cover" />
            </div><div class="flex flex-col gap-6 items-start max-w-[620px]">
                <p class="text-[#111928] text-base leading-6 font-medium font-['Manrope']">
                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred, gender sensitive judiciary, enhancing public trust, and increasing access to justice and protection of rights—was officially launched on October 6. The five‑year initiative (2025–2030) will be implemented by the Office of the Commissioner for Federal Judicial Affairs Canada (FJA) with support from Global Affairs Canada.
                </p>
                <p class="text-[#111928] text-base leading-6 font-medium font-['Manrope']">
                    Canada's Ambassador to Mongolia, H.E. Steven Doughty, opened the event by underscoring the project's significance in deepening the partnership between the two countries, grounded in shared commitments to democracy, human rights, and the rule of law.
                </p>
            </div><div class="w-full max-w-[720px] grid grid-cols-2 gap-3">
                <div class="h-[150px] md:h-[199px] rounded-md overflow-hidden">
                    <img src="{{ asset('images/Content/pic1.jpg') }}" alt="Event Photo 1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="h-[150px] md:h-[199px] rounded-md overflow-hidden">
                    <img src="{{ asset('images/Content/pic2.jpg') }}" alt="Event Photo 2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="h-[150px] md:h-[199px] rounded-md overflow-hidden">
                    <img src="{{ asset('images/Content/pic3.jpg') }}" alt="Event Photo 3" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="h-[150px] md:h-[199px] rounded-md overflow-hidden">
                    <img src="{{ asset('images/Content/pic4.jpg') }}" alt="Event Photo 4" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                </div>
            </div><div class="flex flex-col gap-6 items-start max-w-[620px]">
                <p class="text-[#111928] text-base leading-6 font-medium font-['Manrope']">
                    Chief Justice D. Ganzorig welcomed the continuation of cooperation between the judicial institutions of Mongolia and Canada. He emphasized that the new collaboration will advance efforts to increase transparency within the courts, strengthen public legal education, and safeguard the rights of marginalized groups—particularly girls and women—to access judicial remedies.
                </p>
                <p class="text-[#111928] text-base leading-6 font-medium font-['Manrope']">
                    Chairperson of the Judicial General Council, N. Munguntsetseg, expressed her appreciation for the launch of this five‑year initiative and highlighted that its activities will benefit all citizens, including women and girls across Mongolia.
                </p>
            </div><div class="w-full max-w-[720px] grid grid-cols-2 gap-3">
                <div class="h-[150px] md:h-[199px] rounded-md overflow-hidden">
                    <img src="{{ asset('images/Content/pic5.jpg') }}" alt="Event Photo 5" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="h-[150px] md:h-[199px] rounded-md overflow-hidden">
                    <img src="{{ asset('images/Content/pic6.jpg') }}" alt="Event Photo 6" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="h-[150px] md:h-[199px] rounded-md overflow-hidden">
                    <img src="{{ asset('images/Content/pic7.jpg') }}" alt="Event Photo 7" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="h-[150px] md:h-[199px] rounded-md overflow-hidden">
                    <img src="{{ asset('images/Content/pic8.jpg') }}" alt="Event Photo 8" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                </div>
            </div><div class="flex flex-col gap-6 items-start max-w-[620px]">
                <p class="text-[#111928] text-base leading-6 font-medium font-['Manrope']">
                    During the ceremony, the Supreme Court of Mongolia, Judicial General Council, Judicial Disciplinary Committee, Judicial Academy, Mongolian Judges Association, and Legal Innovation NGO signed Memoranda of Understanding (MOUs) with the Office of the Commissioner for Federal Judicial Affairs Canada, formally establishing bilateral cooperation.
                </p>
                <p class="text-[#111928] text-base leading-6 font-medium font-['Manrope']">
                    The launch event was attended by H.E. Steven Doughty, Ambassador of Canada to Mongolia; Errolyn Humphreys, Deputy Commissioner of the FJA; D. Ganzorig, Chief Justice of the Supreme Court of Mongolia; N. Munguntsetseg, Chair of the Judicial General Council; D.Ariuntuya, Chair of the Judicial Disciplinary Committee; D. Erdenechimeg, Director of the Judicial Academy; D. Batbaatar, Head of the Mongolian Judges Association; and T. Altangerel, Chair of the Board of the Legal Innovation NGO, along with other distinguished guests.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-10 md:py-16 px-4 md:px-8 bg-[#f6f4e9] border-t border-[#d1d5dc]">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-8 md:gap-10 items-center"><div class="flex flex-col gap-3 items-center">
                <p class="font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928] text-center font-['Manrope']">
                    More news
                </p>
            </div><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 w-full"><div class="bg-white rounded-lg overflow-hidden shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] hover:shadow-md transition-shadow">
                    <div class="h-[200px] md:h-[212px] overflow-hidden">
                        <img src="{{ asset('images/Content/more-news1.jpg') }}" alt="Meeting with EU experts" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-1 text-sm text-[#6a7282] opacity-80 mb-3 font-['Manrope']">
                            <span>2025-12-12</span>
                            <span>•</span>
                            <span>09:25:10</span>
                        </div>
                        <h4 class="font-semibold text-lg leading-[26px] text-[#111928] mb-2 font-['Manrope']">
                            Meeting was held with experts from the European Union member states.
                        </h4>
                        <p class="text-base text-[#6a7282] line-clamp-1 font-['Manrope']">
                            The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,
                        </p>
                    </div>
                </div><div class="bg-white rounded-lg overflow-hidden shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] hover:shadow-md transition-shadow">
                    <div class="h-[200px] md:h-[212px] overflow-hidden">
                        <img src="{{ asset('images/Content/more-news2.jpg') }}" alt="Vietnam Embassy event" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-1 text-sm text-[#6a7282] opacity-80 mb-3 font-['Manrope']">
                            <span>2025-12-19</span>
                            <span>•</span>
                            <span>14:55:22</span>
                        </div>
                        <h4 class="font-semibold text-lg leading-[26px] text-[#111928] mb-2 font-['Manrope']">
                            Legal education event was held in cooperation with the Embassy of the Socialist Republic of Vietnam
                        </h4>
                        <p class="text-base text-[#6a7282] line-clamp-1 font-['Manrope']">
                            The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,
                        </p>
                    </div>
                </div><div class="bg-white rounded-lg overflow-hidden shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] hover:shadow-md transition-shadow">
                    <div class="h-[200px] md:h-[212px] overflow-hidden">
                        <img src="{{ asset('images/Content/more-news3.jpg') }}" alt="All Judges Assembly" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-1 text-sm text-[#6a7282] opacity-80 mb-3 font-['Manrope']">
                            <span>2025-12-07</span>
                            <span>•</span>
                            <span>18:59:00</span>
                        </div>
                        <h4 class="font-semibold text-lg leading-[26px] text-[#111928] mb-2 font-['Manrope']">
                            The Third All Judges Assembly has concluded.
                        </h4>
                        <p class="text-base text-[#6a7282] line-clamp-1 font-['Manrope']">
                            The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,
                        </p>
                    </div>
                </div>
            </div><a href="{{ url('/all-news') }}" class="inline-flex items-center justify-center h-10 px-4 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-sm font-medium font-['Manrope'] transition">
                All news articles
            </a>
        </div>
    </div>
</section>
@endsection
