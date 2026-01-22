@extends('components.Header')

@section('content')
<section class="py-6 md:py-10 px-4 md:px-16 bg-[#fbfaf5]">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-6 md:gap-8 items-start w-full"><div class="flex flex-col gap-2 items-start w-full">
                <h1 class="font-semibold text-xl md:text-2xl leading-[28px] md:leading-[30px] text-[#111928]">
                    Search results:
                </h1>
            </div><div class="w-full h-px bg-slate-200"></div><div class="flex flex-col gap-10 items-start w-full"><div class="flex flex-col gap-8 items-start w-full">
                    <h2 class="font-semibold text-lg leading-[26px] text-[#637381]">
                        News & Activities
                    </h2>

                    <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-start w-full"><div class="flex flex-[1_0_0] flex-col gap-6 md:gap-8 items-start w-full md:w-auto">
                            @for($i = 1; $i <= 3; $i++)
                            <div class="bg-white flex gap-3 items-start overflow-hidden p-3 rounded-lg w-full cursor-pointer hover:shadow-md transition-shadow">
                                <div class="h-[103px] rounded-md w-[120px] overflow-hidden flex-shrink-0">
                                    <img src="{{ asset('images/Content/search-result.png') }}" alt="News {{ $i }}" class="w-full h-full object-cover rounded-md" />
                                </div>
                                <div class="flex flex-[1_0_0] flex-col items-start justify-between self-stretch">
                                    <p class="font-medium text-base leading-6 text-[#111928]">
                                        Set the standard for packaging excellence in your industry.
                                    </p>
                                    <div class="flex flex-col gap-2 items-start opacity-80">
                                        <p class="font-normal text-sm leading-[22px] text-[#637381]">
                                            2025-10-14 • 10:00 AM
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div><div class="flex flex-[1_0_0] flex-col gap-6 md:gap-8 items-start w-full md:w-auto">
                            @for($i = 4; $i <= 6; $i++)
                            <div class="bg-white flex gap-3 items-start overflow-hidden p-3 rounded-lg w-full cursor-pointer hover:shadow-md transition-shadow">
                                <div class="h-[103px] rounded-md w-[120px] overflow-hidden flex-shrink-0">
                                    <img src="{{ asset('images/Content/search-result.png') }}" alt="News {{ $i }}" class="w-full h-full object-cover rounded-md" />
                                </div>
                                <div class="flex flex-[1_0_0] flex-col items-start justify-between self-stretch">
                                    <p class="font-medium text-base leading-6 text-[#111928]">
                                        Set the standard for packaging excellence in your industry.
                                    </p>
                                    <div class="flex flex-col gap-2 items-start opacity-80">
                                        <p class="font-normal text-sm leading-[22px] text-[#637381]">
                                            2025-10-14 • 10:00 AM
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div><div class="w-full h-px bg-slate-200"></div><div class="flex flex-col gap-8 items-start w-full">
                    <h2 class="font-semibold text-lg leading-[26px] text-[#637381]">
                        Events
                    </h2>

                    @for($i = 1; $i <= 2; $i++)
                    <div class="bg-white flex gap-3 items-start overflow-hidden p-3 rounded-lg w-full md:w-[565px] cursor-pointer hover:shadow-md transition-shadow">
                        <div class="h-[103px] rounded-md w-[120px] overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/Content/event' . $i . '.png') }}" alt="Event {{ $i }}" class="w-full h-full object-cover rounded-md" />
                        </div>
                        <div class="flex flex-[1_0_0] flex-col items-start justify-between self-stretch">
                            <p class="font-medium text-base leading-6 text-[#111928]">
                                Сургалтын мэдээлэл энд байна
                            </p>
                            <div class="flex flex-col items-start w-full">
                                <div class="flex gap-1.5 h-[22px] items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] text-[#637381]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <p class="font-normal text-sm leading-[22px] text-[#637381]">
                                        2025-10-14 • 10:00 цаг
                                    </p>
                                </div>
                                <div class="flex gap-1.5 items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] text-[#637381] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <p class="flex-1 font-normal text-sm leading-[22px] text-[#637381]">
                                        Сүхбаатрын талбай, Union Building, 303 тоот
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div><div class="w-full h-px bg-slate-200"></div><div class="flex flex-col gap-8 items-start w-full">
                    <h2 class="font-semibold text-lg leading-[26px] text-[#637381]">
                        Media
                    </h2>

                    <div class="bg-white flex gap-3 items-start overflow-hidden p-3 rounded-lg w-full md:w-[560px] cursor-pointer hover:shadow-md transition-shadow">
                        <div class="h-[80px] md:h-[103px] rounded-md w-[100px] md:w-[120px] overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/Content/search-result.png') }}" alt="Media" class="w-full h-full object-cover rounded-md" />
                        </div>
                        <div class="flex flex-[1_0_0] flex-col items-start justify-between self-stretch">
                            <p class="font-medium text-base leading-6 text-[#111928]">
                                Нийт шүүгчийн хуралдаан, Шүүгчдийн зөвлөгөөн боллоо
                            </p>
                            <div class="flex flex-col gap-2 items-start opacity-80">
                                <p class="font-normal text-sm leading-[22px] text-[#637381]">
                                    2025-10-14 • 10:00 цаг
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
