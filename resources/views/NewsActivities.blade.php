@extends('Components.Header')

@section('content')

<section class="relative bg-gradient-to-b from-[#fbfaf5] to-[#f6f4e9] py-8 md:py-16 px-4 md:px-8 overflow-hidden">
    <div class="absolute left-[115px] top-[683px] w-[1052px] h-[997px] flex items-center justify-center opacity-30 pointer-events-none">
        <div class="rotate-[155deg]">
            <img src="{{ asset('images/components/news-bg-shape.png') }}" alt="" class="w-[830px] h-[720px] object-contain">
        </div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto flex flex-col items-center gap-6 md:gap-10"><div class="flex flex-col items-center gap-3 w-full max-w-full max-w-[430px] text-center">
            <p class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#0069e5]">News & Activities</p>
            <h2 class="font-['Manrope'] font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928]">Latest News</h2>
        </div><div class="flex flex-col gap-8"><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8"><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[180px] md:h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Page4/news-page-1.png') }}" alt="News" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex gap-1 items-center text-sm text-gray-500 opacity-80 font-['Manrope']">
                                <span>2025-12-12</span>
                                <span>•</span>
                                <span>09:25:10</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928]">The Third All Judges Assembly begins</h3>
                                <p class="font-['Manrope'] text-base text-gray-500 leading-6 overflow-hidden whitespace-nowrap text-ellipsis">The Judicial Training, Research, and Information Academy, in collaboration with the Office of the Commissioner for Federal Judicial Affairs Canada, held discussion meetings on May 13 and 15, 2025, regarding the upcoming project titled "Equal Justice for All in Mongolia (EJAM)."</p>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[180px] md:h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Page4/news-page-2.png') }}" alt="News" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex gap-1 items-center text-sm text-gray-500 opacity-80 font-['Manrope']">
                                <span>2025-12-19</span>
                                <span>•</span>
                                <span>14:55:22</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928]">The Equal Justice for All in Mongolia (EJAM) project launched</h3>
                                <p class="font-['Manrope'] text-base text-gray-500 leading-6 overflow-hidden whitespace-nowrap text-ellipsis">The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,</p>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[180px] md:h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Page4/news-page-3.png') }}" alt="News" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex gap-1 items-center text-sm text-gray-500 opacity-80 font-['Manrope']">
                                <span>2025-12-07</span>
                                <span>•</span>
                                <span>18:59:00</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928]">High-Level Meeting on Judicial Integrity for South and Southeast Asia was organized</h3>
                                <p class="font-['Manrope'] text-base text-gray-500 leading-6 overflow-hidden whitespace-nowrap text-ellipsis">The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8"><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[180px] md:h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Page4/news-page-4.png') }}" alt="News" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex gap-1 items-center text-sm text-gray-500 opacity-80 font-['Manrope']">
                                <span>2025-12-12</span>
                                <span>•</span>
                                <span>09:25:10</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928]">Meeting was held with experts from the European Union member states.</h3>
                                <p class="font-['Manrope'] text-base text-gray-500 leading-6 overflow-hidden whitespace-nowrap text-ellipsis">The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,</p>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[180px] md:h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Page4/news-page-5.png') }}" alt="News" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex gap-1 items-center text-sm text-gray-500 opacity-80 font-['Manrope']">
                                <span>2025-12-19</span>
                                <span>•</span>
                                <span>14:55:22</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928]">Legal education event was held in cooperation with the Embassy of the Socialist Republic of Vietnam</h3>
                                <p class="font-['Manrope'] text-base text-gray-500 leading-6 overflow-hidden whitespace-nowrap text-ellipsis">The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,</p>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[180px] md:h-[180px] md:h-[212px] w-full">
                        <img src="{{ asset('images/Page4/news-page-6.png') }}" alt="News" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-5">
                        <div class="flex flex-col gap-3">
                            <div class="flex gap-1 items-center text-sm text-gray-500 opacity-80 font-['Manrope']">
                                <span>2025-12-07</span>
                                <span>•</span>
                                <span>18:59:00</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928]">The Third All Judges Assembly has concluded.</h3>
                                <p class="font-['Manrope'] text-base text-gray-500 leading-6 overflow-hidden whitespace-nowrap text-ellipsis">The Equal Justice for All in Mongolia (EJAM) project—aimed at strengthening citizen-centred,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a href="#" class="bg-[#0069e5] px-4 py-2 rounded-full flex items-center gap-2 min-h-[40px] min-w-[40px]">
            <span class="font-['Manrope'] font-medium text-sm text-white text-center">Expand</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
            </svg>
        </a>
    </div>
</section>

<section class="bg-[#fbfaf5] py-16 px-8">
    <div class="max-w-7xl mx-auto flex flex-col items-center gap-6"><div class="flex flex-col items-center gap-3 w-full max-w-[430px] text-center">
            <p class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#0069e5]">Activities</p>
            <h2 class="font-['Manrope'] font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928]">Trainings</h2>
        </div>

        <div class="flex flex-col gap-10 w-full"><div class="flex justify-between items-center w-full"><div class="flex gap-10 px-6">
                    <div class="border-b-2 border-[#0069e5] py-4">
                        <span class="font-['Manrope'] font-medium text-base text-[#0069e5]">Upcoming</span>
                    </div>
                    <div class="py-4">
                        <span class="font-['Manrope'] font-medium text-base text-[#637381]">Past</span>
                    </div>
                    <div class="py-4">
                        <span class="font-['Manrope'] font-medium text-base text-[#637381]">All trainings</span>
                    </div>
                </div><div class="flex gap-6 items-center px-3 py-2">
                    <button class="w-[35px] h-[35px] rounded-full border border-[#0069e5] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#0069e5" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="w-[35px] h-[35px] rounded-full border border-[#0069e5] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#0069e5" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8"><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[195px] w-full">
                        <img src="{{ asset('images/Page3/training-1.png') }}" alt="Training" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-4">
                        <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928] w-[300px]">Training on the topic "Issues to be considered in the application of the constitution" to be organized</h3>
                        <div class="flex flex-col gap-1 opacity-80">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[195px] w-full">
                        <img src="{{ asset('images/Page3/training-2.png') }}" alt="Training" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-4">
                        <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928] w-[300px]">Training on the topic "Issues to be considered in the application of the constitution" to be organized</h3>
                        <div class="flex flex-col gap-1 opacity-80">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden flex flex-col">
                    <div class="h-[195px] w-full">
                        <img src="{{ asset('images/Page3/training-1.png') }}" alt="Training" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white p-5 flex flex-col gap-4">
                        <h3 class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#111928] w-[300px]">Training on the topic "Issues to be considered in the application of the constitution" to be organized</h3>
                        <div class="flex flex-col gap-1 opacity-80">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 px-8" style="background: linear-gradient(180deg, #fbfaf5 50%, #f6f4e9 100%);">
    <div class="max-w-7xl mx-auto flex flex-col items-center gap-10"><div class="flex flex-col items-center gap-2 w-full max-w-[430px] text-center">
            <p class="font-['Manrope'] font-semibold text-lg leading-[26px] text-[#0069e5]">Activities</p>
            <h2 class="font-['Manrope'] font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928]">Meetings & Events</h2>
        </div><div class="flex flex-col gap-8"><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8"><div class="w-full flex flex-col gap-[10px]">
                    <div class="h-[190px] w-[270px] rounded-[5px] overflow-hidden">
                        <img src="{{ asset('images/Page3/meeting-1.png') }}" alt="Meeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-['Manrope'] font-semibold text-base leading-6 text-[#030712] overflow-hidden">Proceedings of the International Conference on "Specialized Courts: The Best Interests of the Child and the Family" Now Published</h3>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-start">
                                <div class="pt-[2px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full flex flex-col gap-[10px]">
                    <div class="h-[190px] w-[270px] rounded-[5px] overflow-hidden">
                        <img src="{{ asset('images/Page3/meeting-2.png') }}" alt="Meeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-['Manrope'] font-semibold text-base leading-6 text-[#030712] overflow-hidden">Proceedings of the International Conference on "Specialized Courts: The Best Interests of the Child and the Family" Now Published</h3>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-start">
                                <div class="pt-[2px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full flex flex-col gap-[10px]">
                    <div class="h-[190px] w-[270px] rounded-[5px] overflow-hidden">
                        <img src="{{ asset('images/Page3/meeting-3.png') }}" alt="Meeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-['Manrope'] font-semibold text-base leading-6 text-[#030712] overflow-hidden">Proceedings of the International Conference on "Specialized Courts: The Best Interests of the Child and the Family" Now Published</h3>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-start">
                                <div class="pt-[2px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full flex flex-col gap-[10px]">
                    <div class="h-[190px] w-[270px] rounded-[5px] overflow-hidden">
                        <img src="{{ asset('images/Page3/meeting-4.png') }}" alt="Meeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-['Manrope'] font-semibold text-base leading-6 text-[#030712] overflow-hidden">Proceedings of the International Conference on "Specialized Courts: The Best Interests of the Child and the Family" Now Published</h3>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-start">
                                <div class="pt-[2px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8"><div class="w-full flex flex-col gap-[10px]">
                    <div class="h-[190px] w-[270px] rounded-[5px] overflow-hidden">
                        <img src="{{ asset('images/Page3/meeting-5.png') }}" alt="Meeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-['Manrope'] font-semibold text-base leading-6 text-[#030712] overflow-hidden">Proceedings of the International Conference on "Specialized Courts: The Best Interests of the Child and the Family" Now Published</h3>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-start">
                                <div class="pt-[2px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full flex flex-col gap-[10px]">
                    <div class="h-[190px] w-[270px] rounded-[5px] overflow-hidden">
                        <img src="{{ asset('images/Page3/meeting-6.png') }}" alt="Meeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-['Manrope'] font-semibold text-base leading-6 text-[#030712] overflow-hidden">Proceedings of the International Conference on "Specialized Courts: The Best Interests of the Child and the Family" Now Published</h3>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-start">
                                <div class="pt-[2px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full flex flex-col gap-[10px]">
                    <div class="h-[190px] w-[270px] rounded-[5px] overflow-hidden">
                        <img src="{{ asset('images/Page3/meeting-7.png') }}" alt="Meeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-['Manrope'] font-semibold text-base leading-6 text-[#030712] overflow-hidden">Proceedings of the International Conference on "Specialized Courts: The Best Interests of the Child and the Family" Now Published</h3>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-start">
                                <div class="pt-[2px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div><div class="w-full flex flex-col gap-[10px]">
                    <div class="h-[190px] w-[270px] rounded-[5px] overflow-hidden">
                        <img src="{{ asset('images/Page3/meeting-8.png') }}" alt="Meeting" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-['Manrope'] font-semibold text-base leading-6 text-[#030712] overflow-hidden">Proceedings of the International Conference on "Specialized Courts: The Best Interests of the Child and the Family" Now Published</h3>
                        <div class="flex flex-col gap-1">
                            <div class="flex gap-[6px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">2025-10-14 • 10:00 AM</span>
                            </div>
                            <div class="flex gap-[6px] items-start">
                                <div class="pt-[2px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="#4a5565" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="font-['Manrope'] text-sm text-[#4a5565]">Sukhbaatar square, Union Building, Room 303</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a href="#" class="bg-[#0069e5] px-4 py-2 rounded-full flex items-center gap-2 min-h-[40px] min-w-[40px]">
            <span class="font-['Manrope'] font-medium text-sm text-white text-center">All meetings</span>
        </a>
    </div>
</section>

@endsection


