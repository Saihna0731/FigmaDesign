@extends('Components.Header')

@section('title', 'About Us - EJAM Project')

@section('content')

<section class="w-full bg-[#fbfaf5] py-8 md:py-16 px-4 md:px-16 overflow-hidden relative">
    <div class="absolute top-0 left-[-462px] w-[1053px] h-[998px] rotate-[155deg] opacity-10 pointer-events-none hidden md:block">
        <img src="{{ asset('images/components/news-bg-shape.svg') }}" alt="" class="w-full h-full" />
    </div>

    <div class="max-w-[1280px] mx-auto relative z-10">
        <div class="flex flex-col gap-3 mb-6">
            <p class="text-[#0069e5] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[26px]">
                About the Project
            </p>
            <h2 class="text-[#111928] text-[24px] md:text-[30px] font-bold font-['Manrope'] leading-[32px] md:leading-[38px]">
                "Equal Justice for All in Mongolia (EJAM)" project
            </h2>
        </div>

        <div class="flex flex-col lg:flex-row gap-6 md:gap-8 items-start">
            <div class="flex-1 flex flex-col gap-[18px] text-[#637381] text-sm md:text-base font-medium font-['Manrope'] leading-6">
                <p>
                    Equal Justice for All in Mongolia (EJAM) is a five-year initiative (2025–2030) implemented by the Office of the Commissioner for Federal Judicial Affairs Canada (FJA), in collaboration with Mongolia's key judicial institutions and the National Judicial Institute of Canada (NJI). Built on two years of engagement under the Technical Assistance Partnership (TAP), EJAM aligns with Mongolia's Vision 2050 and the Judicial Development Policy of Mongolia (JDPM, 2024–2034) to strengthen the rule of law through judicial independence, integrity, accessibility, and public confidence.
                </p>
                <p>
                    EJAM works with key institutions, including the Supreme Court of Mongolia, the Judicial General Council, the Judicial Disciplinary Committee, the Mongolian Judges Association, and the Judicial Academy, as well as civil society and women's organizations that shape public perception, influence justice mechanisms, and drive systemic reform in Mongolia. This comprehensive partnership will integrate diverse perspectives and expertise, ensuring a holistic approach to enhancing the judicial system and reinforcing the rule of law.
                </p>
            </div>

            <div class="w-full lg:w-[387px] bg-white rounded-xl shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-4 md:p-6 flex flex-col gap-4 md:gap-6">
                <div class="flex gap-[14px] items-center">
                    <div class="w-[50px] h-[50px] bg-[#d5e4f6] rounded-[3px] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-[#0069e5]">
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-[#637381] text-[14px] font-normal font-['Manrope'] leading-[22px]">
                            Project Implementation period:
                        </p>
                        <p class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px]">
                            2025 - 2030
                        </p>
                    </div>
                </div>

                <div class="flex gap-[14px] items-center">
                    <div class="w-[50px] h-[50px] bg-[#d5e4f6] rounded-[3px] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-[#0069e5]">
                            <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-[#637381] text-[14px] font-normal font-['Manrope'] leading-[22px]">
                            Budget:
                        </p>
                        <p class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px]">
                            CAD 6.5 million
                        </p>
                    </div>
                </div>

                <div class="flex gap-[14px] items-start">
                    <div class="w-[50px] h-[50px] bg-[#d5e4f6] rounded-[3px] flex items-center justify-center flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-[#0069e5]">
                            <path d="M11.584 2.376a.75.75 0 0 1 .832 0l9 6a.75.75 0 1 1-.832 1.248L12 3.901 3.416 9.624a.75.75 0 0 1-.832-1.248l9-6Z" />
                            <path fill-rule="evenodd" d="M20.25 10.332v9.918H21a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1 0-1.5h.75v-9.918a.75.75 0 0 1 .634-.74A49.109 49.109 0 0 1 12 9c2.59 0 5.134.202 7.616.592a.75.75 0 0 1 .634.74Zm-7.5 2.418a.75.75 0 0 0-1.5 0v6.75a.75.75 0 0 0 1.5 0v-6.75Zm3-.75a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 1-1.5 0v-6.75a.75.75 0 0 1 .75-.75ZM9 12.75a.75.75 0 0 0-1.5 0v6.75a.75.75 0 0 0 1.5 0v-6.75Z" clip-rule="evenodd" />
                            <path d="M12 7.875a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z" />
                        </svg>
                    </div>
                    <div class="flex flex-col flex-1">
                        <p class="text-[#637381] text-[14px] font-normal font-['Manrope'] leading-[22px]">
                            Project Implementer:
                        </p>
                        <a href="https://www.fja.gc.ca/home-accueil/index-eng.html" target="_blank" class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] underline hover:text-[#0069e5]">
                            Office of the Commissioner for Federal Judicial Affairs Canada
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="opacity-40 mt-4 hidden lg:block">
    <img class="w-[450px] h-[450px] left-0 top-0 mt-80 ml-180 absolute" src="{{ asset('images/Page2/scale-decoration.png') }}" />
</div>

<section class="w-full bg-[#fbfaf5] py-8 md:py-16 px-4 md:px-16 relative overflow-hidden">
    <div class="max-w-[1280px] mx-auto relative">
        <div class="flex flex-col items-center relative z-10">
            <p class="text-[#0069e5] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[26px] text-center mb-3">
                Goals
            </p>
            <h2 class="text-[#111928] text-[24px] md:text-[30px] font-bold font-['Manrope'] leading-[32px] md:leading-[38px] text-center mb-6 md:mb-10">
                The Project works in three areas:
            </h2>
        </div>

        <div class="flex flex-col md:flex-row gap-4 md:gap-8 justify-center">
            <div class="w-full md:w-[362px] bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10 relative overflow-hidden">
                <div class="w-12 md:w-16 h-12 md:h-16 border border-[#0069e5] rounded-[15px] shadow-[0px_4px_11px_0px_rgba(0,0,0,0.06)] flex items-center justify-center mb-4 md:mb-8">
                    <span class="text-[#0069e5] text-[24px] md:text-[32px] font-extralight font-['Manrope'] leading-[26px]">1</span>
                </div>
                <p class="text-[#030712] text-base md:text-[18px] font-medium font-['Manrope'] leading-[24px] md:leading-[26px]">
                    Advancing gender-sensitive citizen-centred justice in Mongolia and strengthening judicial independence, skills, accountability and leadership
                </p>
                <div class="absolute right-[20px] md:right-[40px] top-[10px] md:top-[19px] w-[100px] md:w-[169px] h-[100px] md:h-[169px] opacity-20 text-[#0069e5]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
                        <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v.756a49.106 49.106 0 0 1 9.152 1 .75.75 0 0 1-.152 1.485h-1.918l2.474 10.124a.75.75 0 0 1-.375.84A6.723 6.723 0 0 1 18.75 18a6.723 6.723 0 0 1-3.181-.795.75.75 0 0 1-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 0 1-.262 1.453h-8.37a.75.75 0 0 1-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 0 1-.375.84A6.723 6.723 0 0 1 5.25 18a6.723 6.723 0 0 1-3.181-.795.75.75 0 0 1-.375-.84L4.168 6.241H2.25a.75.75 0 0 1-.152-1.485 49.105 49.105 0 0 1 9.152-1V3a.75.75 0 0 1 .75-.75Zm4.878 13.543 1.872-7.662 1.872 7.662h-3.744Zm-9.756 0L5.25 8.131l-1.872 7.662h3.744Z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div class="w-full md:w-[362px] bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10 relative overflow-hidden">
                <div class="w-12 md:w-16 h-12 md:h-16 border border-[#0069e5] rounded-[15px] shadow-[0px_4px_11px_0px_rgba(0,0,0,0.06)] flex items-center justify-center mb-4 md:mb-8">
                    <span class="text-[#0069e5] text-[24px] md:text-[32px] font-extralight font-['Manrope'] leading-[26px]">2</span>
                </div>
                <p class="text-[#111928] text-base md:text-[18px] font-medium font-['Manrope'] leading-[24px] md:leading-[26px]">
                    Building public knowledge of and trust in the judiciary
                </p>
                <div class="absolute right-[20px] md:right-[40px] top-[10px] md:top-[19px] w-[100px] md:w-[169px] h-[100px] md:h-[169px] opacity-20 text-[#0069e5]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
                        <path fill-rule="evenodd" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" clip-rule="evenodd" />
                    </svg>

                </div>
            </div>

            <div class="w-full md:w-[362px] bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10 relative overflow-hidden">
                <div class="w-12 md:w-16 h-12 md:h-16 border border-[#0069e5] rounded-[15px] shadow-[0px_4px_11px_0px_rgba(0,0,0,0.06)] flex items-center justify-center mb-4 md:mb-8">
                    <span class="text-[#0069e5] text-[24px] md:text-[32px] font-extralight font-['Manrope'] leading-[26px]">3</span>
                </div>
                <p class="text-[#111928] text-base md:text-[18px] font-medium font-['Manrope'] leading-[24px] md:leading-[26px]">
                    Improving access to justice for Mongolian citizens, particularly women, girls and members of marginalized groups
                </p>
                <div class="absolute right-[20px] md:right-[40px] top-[10px] md:top-[19px] w-[100px] md:w-[169px] h-[100px] md:h-[169px] opacity-20 text-[#0069e5]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full h-full">
                        <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-[#f6f4e9] py-10 md:py-20 px-4 md:px-16 shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)]">
    <div class="max-w-[1280px] mx-auto">
        <div class="flex flex-col items-center gap-2 mb-6 md:mb-10">
            <h2 class="text-[#111928] text-[24px] md:text-[30px] font-bold font-['Manrope'] leading-[32px] md:leading-[38px] text-center">
                Canadian Implementing Partners
            </h2>
        </div>

        <div class="flex flex-col md:flex-row gap-4 md:gap-8 justify-center">
            <div class="flex-1 w-full md:max-w-[560px] bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10">
                <div class="w-[50px] md:w-[70px] h-[50px] md:h-[70px] mb-4">
                    <img src="{{ asset('images/Page2/partner-fja.png') }}" alt="FJA Logo" class="w-full h-full object-contain" />
                </div>
                <h3 class="text-[#111928] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[24px] md:leading-[26px] mb-3 md:mb-[14px]">
                    Office of the Commissioner for Federal Judicial Affairs Canada (FJA)
                </h3>
                <p class="text-[#637381] text-sm md:text-base font-normal font-['Manrope'] leading-6">
                    Principal implementing agency; project governance, coordination, and technical assistance.
                </p>
            </div>

            <div class="flex-1 w-full md:max-w-[560px] bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10">
                <div class="w-[70px] h-[70px] mb-4">
                    <img src="{{ asset('images/Page2/partner-nji.png') }}" alt="NJI Logo" class="w-full h-full object-contain" />
                </div>
                <h3 class="text-[#111928] text-[18px] font-semibold font-['Manrope'] leading-[26px] mb-[14px]">
                    National Judicial Institute (NJI)
                </h3>
                <p class="text-[#637381] text-base font-normal font-['Manrope'] leading-6">
                    Responsible for overseeing and implementing the judicial education and training component within the scope of the project.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-[#f6f4e9] py-10 md:py-20 px-4 md:px-16">
    <div class="max-w-[1280px] mx-auto">
        <div class="flex flex-col items-center gap-2 mb-6 md:mb-10">
            <h2 class="text-[#111928] text-[24px] md:text-[30px] font-bold font-['Manrope'] leading-[32px] md:leading-[38px] text-center">
                Mongolian Partner Institutions
            </h2>
        </div>

        <div class="flex flex-col gap-4 md:gap-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 justify-center">
                <div class="w-full bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10">
                    <div class="w-[50px] md:w-[70px] h-[50px] md:h-[70px] mb-4">
                        <img src="{{ asset('images/Page2/partner1.png') }}" alt="Supreme Court Logo" class="w-full h-full object-contain" />
                    </div>
                    <h3 class="text-[#111928] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[24px] md:leading-[26px] mb-3 md:mb-[14px]">
                        Supreme Court of Mongolia
                    </h3>
                    <p class="text-[#637381] text-sm md:text-base font-normal font-['Manrope'] leading-6">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>

                <div class="w-full bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10">
                    <div class="w-[50px] md:w-[70px] h-[50px] md:h-[70px] mb-4">
                        <img src="{{ asset('images/Page2/partner2.png') }}" alt="JGC Logo" class="w-full h-full object-contain" />
                    </div>
                    <h3 class="text-[#111928] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[24px] md:leading-[26px] mb-3 md:mb-[14px]">
                        Judicial General Council of Mongolia
                    </h3>
                    <p class="text-[#637381] text-sm md:text-base font-normal font-['Manrope'] leading-6">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>

                <div class="w-full bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10">
                    <div class="w-[50px] md:w-[70px] h-[50px] md:h-[70px] mb-4">
                        <img src="{{ asset('images/Page2/partner3.png') }}" alt="JDC Logo" class="w-full h-full object-contain" />
                    </div>
                    <h3 class="text-[#111928] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[24px] md:leading-[26px] mb-3 md:mb-[14px]">
                        Judicial Disciplinary Committee
                    </h3>
                    <p class="text-[#637381] text-sm md:text-base font-normal font-['Manrope'] leading-6">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>

                <div class="w-full bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10">
                    <div class="w-[50px] md:w-[70px] h-[50px] md:h-[70px] mb-4">
                        <img src="{{ asset('images/Page2/partner4.png') }}" alt="JA Logo" class="w-full h-full object-contain" />
                    </div>
                    <h3 class="text-[#111928] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[24px] md:leading-[26px] mb-3 md:mb-[14px]">
                        Judicial Academy
                    </h3>
                    <p class="text-[#637381] text-sm md:text-base font-normal font-['Manrope'] leading-6">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>

                <div class="w-full bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10">
                    <div class="w-[50px] md:w-[70px] h-[50px] md:h-[70px] mb-4">
                        <img src="{{ asset('images/Page2/partner5.png') }}" alt="MJA Logo" class="w-full h-full object-contain" />
                    </div>
                    <h3 class="text-[#111928] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[24px] md:leading-[26px] mb-3 md:mb-[14px]">
                        Mongolian Judges Association
                    </h3>
                    <p class="text-[#637381] text-sm md:text-base font-normal font-['Manrope'] leading-6">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>

                <div class="w-full bg-white rounded-[20px] shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 md:p-10">
                    <div class="w-[50px] md:w-[70px] h-[50px] md:h-[70px] mb-4">
                        <img src="{{ asset('images/Page2/partner6.png') }}" alt="LINGO Logo" class="w-full h-full object-contain" />
                    </div>
                    <h3 class="text-[#111928] text-base md:text-[18px] font-semibold font-['Manrope'] leading-[24px] md:leading-[26px] mb-3 md:mb-[14px]">
                        Legal Innovation NGO
                    </h3>
                    <p class="text-[#637381] text-sm md:text-base font-normal font-['Manrope'] leading-6">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-[#fbfaf5] py-8 md:py-16 px-4 md:px-16">
    <div class="max-w-[1280px] mx-auto">
        <div class="flex flex-col items-center gap-2 mb-8 md:mb-[60px]">
            <h2 class="text-[#111928] text-[24px] md:text-[30px] font-bold font-['Manrope'] leading-[32px] md:leading-[38px] text-center">
                Governance Structure
            </h2>
            <p class="text-[#637381] text-base font-normal font-['Manrope'] leading-6 text-center">
                There are many variations of passages of Lorem Ipsum available<br>
                but the majority have suffered alteration in some form.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-4 md:gap-[30px] w-full">
            <div class="w-full lg:w-auto">
                <div class="bg-white border border-[#dfe4ea] rounded-[10px] p-3 md:p-[14px] flex flex-col gap-2 md:gap-[10px]">
                    <button class="bg-[#0069e5] text-white px-4 md:px-[35px] py-2 md:py-3 rounded-[6px] text-sm md:text-base font-medium font-['Manrope'] leading-6 text-center">
                        Project Steering Committee
                    </button>
                    <button class="bg-white text-[#637381] px-4 md:px-[35px] py-2 md:py-3 rounded-[6px] text-sm md:text-base font-medium font-['Manrope'] leading-6 text-center hover:bg-gray-50">
                        Intra-Judicial Working Group
                    </button>
                    <button class="bg-white text-[#637381] px-4 md:px-[35px] py-2 md:py-3 rounded-[6px] text-sm md:text-base font-medium font-['Manrope'] leading-6 text-center hover:bg-gray-50">
                        Project Implementation Committee
                    </button>
                    <button class="bg-white text-[#637381] px-4 md:px-[35px] py-2 md:py-3 rounded-[6px] text-sm md:text-base font-medium font-['Manrope'] leading-6 text-center hover:bg-gray-50">
                        Project Team
                    </button>
                </div>
            </div>

            <div class="flex-1 bg-white border border-[#dfe4ea] rounded-xl shadow-[0px_4px_12px_0px_rgba(13,10,44,0.06)] p-6 md:p-10">
                <div class="flex gap-[6px] items-start mb-4">
                    <svg class="w-6 md:w-[34px] h-6 md:h-[34px] rotate-45 flex-shrink-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" fill="#0069e5"/>
                    </svg>
                    <h3 class="text-[#111928] text-lg md:text-[24px] font-semibold font-['Manrope'] leading-[26px] md:leading-[30px]">
                        Project Steering Committee
                    </h3>
                </div>
                <p class="text-[#637381] text-sm md:text-base font-medium font-['Manrope'] leading-6">
                    The Project Steering Committee (PSC) serves as the project's highest governance body, providing strategic guidance, ensuring alignment with the Project Implementation Plan (PIP) and results framework, and fostering collaboration across all components and stakeholders. It provides strategic oversight, coordination, and decision-making support for the implementation of the project.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

