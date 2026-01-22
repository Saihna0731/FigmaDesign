@extends('Components.Header')

@section('title', 'All News - EJAM Project')

@section('content')
<section class="w-full bg-[#fbfaf5] py-8 md:py-16 px-4 md:px-8 overflow-hidden relative">
    <div class="absolute top-[-108px] left-[-96px] w-[1053px] h-[998px] rotate-[155deg] opacity-10 pointer-events-none hidden md:block">
        <img src="{{ asset('images/Design/news-bg-shape.png') }}" alt="" class="w-full h-full" />
    </div>

    <div class="max-w-[1280px] mx-auto relative z-10">
        <div class="flex flex-col items-center gap-3 mb-6 md:mb-10">
            <p class="text-[#0069e5] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[26px]">
                News & Activities
            </p>
            <h2 class="text-[#111928] text-[24px] md:text-[30px] font-bold font-['Manrope'] leading-[32px] md:leading-[38px] text-center">
                Latest News
            </h2>
        </div>

        <div class="flex flex-col gap-4 md:gap-8 items-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-full">
                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/news1.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-12</span>
                                <span>•</span>
                                <span>09:25:10</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    The Third All Judges Assembly begins
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Judicial Training, Research, and Information Academy, in collaboration with the Office of the Commissioner for Federal Judicial Affairs Canada...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/news2.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-19</span>
                                <span>•</span>
                                <span>14:55:22</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    The Equal Justice for All in Mongolia (EJAM) project launched
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/news3.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-07</span>
                                <span>•</span>
                                <span>18:59:00</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    High-Level Meeting on Judicial Integrity for South and Southeast Asia was organized
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-full">
                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/news4.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-19</span>
                                <span>•</span>
                                <span>14:55:22</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    Chief Justice Meets with Leader of EU-Funded Twinning Project
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    Chief Justice of the Supreme Court D.Ganzorig expressed his gratitude in cooperation between the judicial authorities of Mongolia and Canada...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/news5.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-07</span>
                                <span>•</span>
                                <span>18:59:00</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    A meeting was held with journalists regarding the digitalization of the courts and live broadcasting
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The project will be led by the Office of the Commissioner for Federal Judicial Affairs of Canada...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/news6.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-12</span>
                                <span>•</span>
                                <span>09:25:10</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    The Supreme Court of Mongolia signs a Memorandum of Understanding with Office of the Commissioner for Federal Judicial Affairs of Canada.
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The launch of the "Equal justice for all in Mongolia" project, which aims to improve and enhance judicial independence...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-full">
                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/meeting-1.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-12</span>
                                <span>•</span>
                                <span>09:25:10</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    Meeting was held with experts from the European Union member states.
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/meeting-2.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-19</span>
                                <span>•</span>
                                <span>14:55:22</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    Legal education event was held in cooperation with the Embassy of the Socialist Republic of Vietnam
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/meeting-3.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-07</span>
                                <span>•</span>
                                <span>18:59:00</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    The Third All Judges Assembly has concluded.
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-full">
                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/meeting-4.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-12</span>
                                <span>•</span>
                                <span>09:25:10</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    Meeting was held with experts from the European Union member states.
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/meeting-5.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-19</span>
                                <span>•</span>
                                <span>14:55:22</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    Legal education event was held in cooperation with the Embassy of the Socialist Republic of Vietnam
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                    <div class="h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Content/meeting-6.png') }}" alt="News" class="w-full h-full object-cover" />
                    </div>
                    <div class="p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-1 text-[#6a7282] text-[14px] font-normal font-['Manrope'] leading-[22px] opacity-80">
                                <span>2025-12-07</span>
                                <span>•</span>
                                <span>18:59:00</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] line-clamp-2">
                                    The Third All Judges Assembly has concluded.
                                </h3>
                                <p class="text-[#6a7282] text-base font-normal font-['Manrope'] leading-6 truncate">
                                    The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center md:justify-end mt-8 md:mt-16 px-4 md:px-8">
            <div class="bg-white border border-[#dfe4ea] rounded-[10px] p-3 inline-flex gap-2 items-center">
                <button class="w-[34px] h-[34px] bg-white border border-[#dfe4ea] rounded-[6px] flex items-center justify-center hover:bg-gray-50">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 5L7 9L11 13" stroke="#637381" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <button class="w-[34px] h-[34px] bg-[#0069e5] rounded-[6px] flex items-center justify-center text-white text-base font-normal font-['Inter']">
                    1
                </button>
                <button class="w-[34px] h-[34px] bg-white border border-[#dfe4ea] rounded-[6px] flex items-center justify-center text-[#637381] text-base font-normal font-['Inter'] hover:bg-gray-50">
                    2
                </button>
                <button class="w-[34px] h-[34px] bg-white border border-[#dfe4ea] rounded-[6px] flex items-center justify-center text-[#637381] text-base font-normal font-['Inter'] hover:bg-gray-50">
                    3
                </button>
                <button class="w-[34px] h-[34px] bg-white border border-[#dfe4ea] rounded-[6px] flex items-center justify-center text-[#637381] text-base font-normal font-['Inter'] hover:bg-gray-50">
                    4
                </button>
                
                <button class="w-[34px] h-[34px] bg-white border border-[#dfe4ea] rounded-[6px] flex items-center justify-center hover:bg-gray-50">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 5L11 9L7 13" stroke="#637381" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

