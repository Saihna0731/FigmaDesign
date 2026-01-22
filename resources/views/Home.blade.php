@extends('Components.Header')
@section('content')

<div class="w-full h-[350px] md:h-[450px] relative bg-[#fbfaf5] overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -left-40 top-52 w-[830px] h-[720px] opacity-60 hidden md:block">
            <svg viewBox="0 0 830 720" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <defs>
                    <radialGradient id="grad1" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#F87171" stop-opacity="0.3"/>
                        <stop offset="100%" stop-color="#FCD34D" stop-opacity="0"/>
                    </radialGradient>
                </defs>
                <ellipse cx="415" cy="360" rx="415" ry="360" fill="url(#grad1)"/>
            </svg>
        </div>
        <div class="absolute right-[-50px] top-[-330px] w-[900px] h-[800px] opacity-50 rotate-[235deg] hidden md:block">
            <svg viewBox="0 0 900 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <defs>
                    <radialGradient id="grad2" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#3B82F6" stop-opacity="0.25"/>
                        <stop offset="100%" stop-color="#FCD34D" stop-opacity="0"/>
                    </radialGradient>
                </defs>
                <ellipse cx="450" cy="400" rx="450" ry="400" fill="url(#grad2)"/>
            </svg>
        </div>
        <div class="absolute right-[368px] top-[-224px] w-[657px] h-[586px] opacity-40 hidden lg:block">
            <svg viewBox="0 0 657 586" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                <defs>
                    <radialGradient id="grad3" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#F97316" stop-opacity="0.2"/>
                        <stop offset="100%" stop-color="#FCD34D" stop-opacity="0"/>
                    </radialGradient>
                </defs>
                <ellipse cx="328" cy="293" rx="328" ry="293" fill="url(#grad3)"/>
            </svg>
        </div>
    </div>
    
    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 px-4">
        <div class="max-w-[707px] text-center">
            <h1 class="text-[#0f172a] text-[28px] md:text-[40px] font-bold font-['Manrope'] leading-[36px] md:leading-[48px] mb-4 md:mb-5">
                "Equal Justice for All in Mongolia (EJAM)" project
            </h1>
            <p class="text-[#0f172a] text-base md:text-[18px] font-medium font-['Manrope'] leading-[24px] md:leading-[26px] mb-6 md:mb-10">
                Strengthening judicial independence, public trust, and access to justice in Mongolia
            </p>
            <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-sm font-medium font-['Manrope'] transition min-h-[40px]">
                Learn more
            </a>
        </div>
    </div>
    
    <img class="absolute left-[160px] top-[278px] w-[137px] h-[137px] object-cover hidden lg:block" 
         src="{{ asset('images/Design/DecorationBook.png') }}" alt="Decoration Book" />
    <img class="absolute right-[126px] top-[98px] w-[161px] h-[162px] object-cover opacity-40 hidden lg:block" 
         src="{{ asset('images/Design/DecorationJinluur.png') }}" alt="Decoration Jinluur" />
</div>

<section class="w-full bg-[#fbfaf5] px-4 md:px-8 py-10 md:py-16 overflow-hidden">
    <div class="max-w-7xl mx-auto flex flex-col items-center gap-6 md:gap-10">
        <div class="text-center max-w-[430px]">
            <p class="text-[#0069e5] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[26px] mb-3">
                News & Activities
            </p>
            <h2 class="text-[#111928] text-[24px] md:text-[30px] font-bold font-['Manrope'] leading-[32px] md:leading-[38px]">
                Latest News
            </h2>
        </div>
        
        <div class="flex flex-wrap justify-center gap-4 md:gap-8">
            <a href="#" class="w-full max-w-[362px] bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden hover:shadow-lg transition cursor-pointer block">
                <div class="w-full h-[212px]">
                    <img class="w-full h-full object-cover" src="{{ asset('images/Content/news1.png') }}" alt="News Image" />
                </div>
                <div class="p-5 flex flex-col gap-5">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-1 text-[#6a7282] text-sm font-normal font-['Manrope'] leading-[22px] opacity-80">
                            <span>2025-10-09</span>
                            <span>•</span>
                            <span>09:25:10</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px]">
                                New judge members of the Judicial General Council are elected
                            </h3>
                            <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                The third All Judges Assembly continued on the second day, October 10, 2025, and reviewed the reports of the activities of the Judicial General Council and the Disciplinary Committee
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('/news-detail-2') }}" class="w-full max-w-[362px] bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden hover:shadow-lg transition cursor-pointer">
                <div class="w-full h-[212px]">
                    <img class="w-full h-full object-cover" src="{{ asset('images/Content/news2.png') }}" alt="News Image" />
                </div>
                <div class="p-5 flex flex-col gap-5">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-1 text-[#6a7282] text-sm font-normal font-['Manrope'] leading-[22px] opacity-80">
                            <span>2025-12-19</span>
                            <span>•</span>
                            <span>14:55:22</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px]">
                                The Equal Justice for All in Mongolia (EJAM) project launched
                            </h3>
                            <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <div class="w-full max-w-[362px] bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                <div class="w-full h-[212px]">
                    <img class="w-full h-full object-cover" src="{{ asset('images/Content/news3.png') }}" alt="News Image" />
                </div>
                <div class="p-5 flex flex-col gap-5">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-1 text-[#6a7282] text-sm font-normal font-['Manrope'] leading-[22px] opacity-80">
                            <span>2025-12-07</span>
                            <span>•</span>
                            <span>18:59:00</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px]">
                                High-Level Meeting on Judicial Integrity for South and Southeast A...
                            </h3>
                            <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-sm font-medium font-['Manrope'] transition min-h-[40px]">
            All news articles
        </a>
    </div>
</section>

<section class="w-full bg-white py-10 md:py-16 px-4 md:px-16">
    <div class="max-w-[1280px] mx-auto flex flex-col items-center gap-6 md:gap-10">
        <div class="bg-[#eff6ff] px-[14px] py-[5px] rounded-full">
            <span class="text-[#0069e5] text-sm font-medium font-['Manrope'] leading-[22px]">
                Partner Institutions
            </span>
        </div>

        <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6">
            <div class="flex items-center gap-2 md:gap-3 rounded-[20px]">
                <img src="{{ asset('images/Content/partner1.png') }}" alt="Partner" class="w-8 md:w-10 h-8 md:h-10 object-cover flex-shrink-0" />
                <p class="text-[#111928] text-xs md:text-sm font-normal font-['Manrope'] leading-[18px] md:leading-[22px]">
                    The Supreme Court of Mongolia
                </p>
            </div>
            <div class="flex items-start gap-2 md:gap-3 rounded-[20px]">
                <img src="{{ asset('images/Content/partner2.png') }}" alt="Partner" class="w-8 md:w-10 h-8 md:h-10 object-cover flex-shrink-0" />
                <p class="text-[#111928] text-xs md:text-sm font-normal font-['Manrope'] leading-[18px] md:leading-[22px] flex-1">
                    Judicial General Council of Mongolia
                </p>
            </div>
            <div class="flex items-center gap-2 md:gap-3 rounded-[20px]">
                <img src="{{ asset('images/Content/partner3.png') }}" alt="Partner" class="w-8 md:w-10 h-8 md:h-10 object-cover flex-shrink-0" />
                <p class="text-[#111928] text-xs md:text-sm font-normal font-['Manrope'] leading-[18px] md:leading-[22px] flex-1">
                    Judicial Disciplinary Committee
                </p>
            </div>
            <div class="flex items-center gap-2 md:gap-3 rounded-[20px]">
                <img src="{{ asset('images/Content/partner4.png') }}" alt="Partner" class="w-8 md:w-10 h-8 md:h-10 object-cover flex-shrink-0" />
                <p class="text-[#111928] text-xs md:text-sm font-normal font-['Manrope'] leading-[18px] md:leading-[22px]">
                    Judicial Academy
                </p>
            </div>
            <div class="flex items-center gap-2 md:gap-3 rounded-[20px]">
                <img src="{{ asset('images/Content/partner5.png') }}" alt="Partner" class="w-8 md:w-10 h-8 md:h-10 object-cover flex-shrink-0" />
                <p class="text-[#111928] text-xs md:text-sm font-normal font-['Manrope'] leading-[18px] md:leading-[22px]">
                    Mongolian Judges Association
                </p>
            </div>
            <div class="flex items-center gap-2 md:gap-3 rounded-[20px]">
                <img src="{{ asset('images/Content/partner6.png') }}" alt="Partner" class="w-8 md:w-10 h-8 md:h-10 object-cover flex-shrink-0" />
                <p class="text-[#111928] text-xs md:text-sm font-normal font-['Manrope'] leading-[18px] md:leading-[22px]">
                    Legal Innovation NGO
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
