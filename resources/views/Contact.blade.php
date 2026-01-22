@extends('components.Header')

@section('content')
<section class="py-8 md:py-16 pb-12 md:pb-20 px-4 md:px-8 overflow-hidden bg-white">
    <div class="max-w-[1200px] mx-auto">
        <div class="flex flex-col gap-6 md:gap-10 items-center"><div class="flex flex-col gap-3 items-center max-w-[430px]">
                <p class="font-semibold text-base md:text-lg leading-[26px] text-[#0069e5] text-center">
                    Contact
                </p>
                <p class="font-bold text-[24px] md:text-[30px] leading-[32px] md:leading-[38px] text-[#111928] text-center">
                    Project Team
                </p>
            </div><div class="flex flex-col items-start w-full"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 w-full">
                    <div class="flex gap-4 md:gap-6 items-center p-6 md:p-10 border-b md:border-r border-slate-200">
                        <div class="w-[50px] md:w-[60px] h-[50px] md:h-[60px] rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/Content/team-avatar.png') }}" alt="Team Member" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-2 items-start flex-1">
                            <div class="flex flex-col items-start">
                                <p class="font-semibold text-sm md:text-base leading-6 text-[#111928]">Bat-Erdene Turbold</p>
                                <p class="font-normal text-xs md:text-sm leading-[22px] text-[#637381]">Project manager</p>
                            </div>
                            <div class="flex flex-col gap-0.5 items-start w-full">
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">+976 9988 7766</p>
                                </div>
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">EJAM@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div><div class="flex gap-4 md:gap-6 items-center p-6 md:p-10 border-b border-slate-200">
                        <div class="w-[50px] md:w-[60px] h-[50px] md:h-[60px] rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/Content/team-avatar.png') }}" alt="Team Member" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-2 items-start flex-1">
                            <div class="flex flex-col items-start">
                                <p class="font-semibold text-base leading-6 text-[#111928]">Bat-Erdene Turbold</p>
                                <p class="font-normal text-sm leading-[22px] text-[#637381]">Project manager</p>
                            </div>
                            <div class="flex flex-col gap-0.5 items-start w-full">
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">+976 9988 7766</p>
                                </div>
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">EJAM@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div><div class="flex gap-4 md:gap-6 items-center p-6 md:p-10 border-b lg:border-l border-slate-200">
                        <div class="w-[50px] md:w-[60px] h-[50px] md:h-[60px] rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/Content/team-avatar.png') }}" alt="Team Member" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-2 items-start flex-1">
                            <div class="flex flex-col items-start">
                                <p class="font-semibold text-base leading-6 text-[#111928]">Bat-Erdene Turbold</p>
                                <p class="font-normal text-sm leading-[22px] text-[#637381]">Project manager</p>
                            </div>
                            <div class="flex flex-col gap-0.5 items-start w-full">
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">+976 9988 7766</p>
                                </div>
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">EJAM@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 w-full"><div class="flex gap-4 md:gap-6 items-center p-6 md:p-10 md:border-r border-slate-200">
                        <div class="w-[50px] md:w-[60px] h-[50px] md:h-[60px] rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/Content/team-avatar.png') }}" alt="Team Member" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-2 items-start flex-1">
                            <div class="flex flex-col items-start">
                                <p class="font-semibold text-base leading-6 text-[#111928]">Bat-Erdene Turbold</p>
                                <p class="font-normal text-sm leading-[22px] text-[#637381]">Project manager</p>
                            </div>
                            <div class="flex flex-col gap-0.5 items-start w-full">
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">+976 9988 7766</p>
                                </div>
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">EJAM@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div><div class="flex gap-4 md:gap-6 items-center p-6 md:p-10">
                        <div class="w-[50px] md:w-[60px] h-[50px] md:h-[60px] rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/Content/team-avatar.png') }}" alt="Team Member" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-2 items-start flex-1">
                            <div class="flex flex-col items-start">
                                <p class="font-semibold text-base leading-6 text-[#111928]">Bat-Erdene Turbold</p>
                                <p class="font-normal text-sm leading-[22px] text-[#637381]">Project manager</p>
                            </div>
                            <div class="flex flex-col gap-0.5 items-start w-full">
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">+976 9988 7766</p>
                                </div>
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">EJAM@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div><div class="flex gap-4 md:gap-6 items-center p-6 md:p-10 lg:border-l border-slate-200">
                        <div class="w-[50px] md:w-[60px] h-[50px] md:h-[60px] rounded-full overflow-hidden flex-shrink-0">
                            <img src="{{ asset('images/Content/team-avatar.png') }}" alt="Team Member" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-2 items-start flex-1">
                            <div class="flex flex-col items-start">
                                <p class="font-semibold text-base leading-6 text-[#111928]">Bat-Erdene Turbold</p>
                                <p class="font-normal text-sm leading-[22px] text-[#637381]">Project manager</p>
                            </div>
                            <div class="flex flex-col gap-0.5 items-start w-full">
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">+976 9988 7766</p>
                                </div>
                                <div class="flex gap-2.5 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#0069e5]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <p class="font-normal text-xs leading-5 text-[#111928]">EJAM@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
