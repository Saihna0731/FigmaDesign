@extends('Components.Header')
@section('content')

<!-- Hero Section -->
<div class="w-full h-[450px] relative bg-[#fbfaf5] overflow-hidden">
    <!-- Background Gradient SVG -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -left-40 top-52 w-[830px] h-[720px] opacity-60">
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
        <div class="absolute right-[-50px] top-[-330px] w-[900px] h-[800px] opacity-50 rotate-[235deg]">
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
        <div class="absolute right-[368px] top-[-224px] w-[657px] h-[586px] opacity-40">
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
    
    <!-- Hero Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 px-4">
        <div class="max-w-[707px] text-center">
            <h1 class="text-[#0f172a] text-[40px] font-bold font-['Manrope'] leading-[48px] mb-5">
                "Equal Justice for All in Mongolia (EJAM)" project
            </h1>
            <p class="text-[#0f172a] text-[18px] font-medium font-['Manrope'] leading-[26px] mb-10">
                Strengthening judicial independence, public trust, and access to justice in Mongolia
            </p>
            <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-sm font-medium font-['Manrope'] transition min-h-[40px]">
                Learn more
            </a>
        </div>
    </div>
    
    <!-- Decorative Images -->
    <img class="absolute left-[160px] top-[278px] w-[137px] h-[137px] object-cover hidden lg:block" 
         src="/images/DecorationBook.png" alt="Decoration Book" />
    <img class="absolute right-[126px] top-[98px] w-[161px] h-[162px] object-cover opacity-40 hidden lg:block" 
         src="/images/DecorationJinluur.png" alt="Decoration Jinluur" />
</div>

<!-- News & Activities Section -->
<section class="w-full bg-[#fbfaf5] px-8 py-16 overflow-hidden">
    <div class="max-w-7xl mx-auto flex flex-col items-center gap-10">
        <!-- Section Title -->
        <div class="text-center max-w-[430px]">
            <p class="text-[#0069e5] text-[18px] font-semibold font-['Manrope'] leading-[26px] mb-3">
                News & Activities
            </p>
            <h2 class="text-[#111928] text-[30px] font-bold font-['Manrope'] leading-[38px]">
                Latest News
            </h2>
        </div>
        
        <!-- News Cards -->
        <div class="flex flex-wrap justify-center gap-8">
            <!-- News Card 1 -->
            <div class="w-[362px] bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                <div class="w-[362px] h-[212px]">
                    <img class="w-full h-full object-cover" src="/images/news1.png" alt="News Image" />
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
            </div>

            <!-- News Card 2 -->
            <a href="#" class="w-[362px] bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden hover:shadow-lg transition cursor-pointer">
                <div class="w-[362px] h-[212px]">
                    <img class="w-full h-full object-cover" src="/images/news2.png" alt="News Image" />
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

            <!-- News Card 3 -->
            <div class="w-[362px] bg-white rounded-lg shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] overflow-hidden">
                <div class="w-[362px] h-[212px]">
                    <img class="w-full h-full object-cover" src="/images/news3.png" alt="News Image" />
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

        <!-- All News Button -->
        <a href="#" class="inline-flex items-center justify-center px-4 py-2 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-sm font-medium font-['Manrope'] transition min-h-[40px]">
            All news articles
        </a>
    </div>
</section>

<!-- Partner Institutions Section -->
<section class="w-full bg-white py-16 px-16">
    <div class="max-w-[1280px] mx-auto flex flex-col items-center gap-10">
        <!-- Tag -->
        <div class="bg-[#eff6ff] px-[14px] py-[5px] rounded-full">
            <span class="text-[#0069e5] text-sm font-medium font-['Manrope'] leading-[22px]">
                Partner Institutions
            </span>
        </div>

        <!-- Partners Grid -->
        <div class="w-full flex flex-wrap justify-between items-start gap-6">
            <!-- Partner 1 -->
            <div class="flex items-center gap-3 w-[200px] rounded-[20px]">
                <img src="/images/partner1.png" alt="Partner" class="w-10 h-10 object-cover" />
                <p class="text-[#111928] text-sm font-normal font-['Manrope'] leading-[22px]">
                    The Supreme Court of Mongolia
                </p>
            </div>
            <!-- Partner 2 -->
            <div class="flex items-start gap-3 w-[200px] rounded-[20px]">
                <img src="/images/partner2.png" alt="Partner" class="w-10 h-10 object-cover" />
                <p class="text-[#111928] text-sm font-normal font-['Manrope'] leading-[22px] flex-1">
                    Judicial General Council of Mongolia
                </p>
            </div>
            <!-- Partner 3 -->
            <div class="flex items-center gap-3 w-[200px] rounded-[20px]">
                <img src="/images/partner3.png" alt="Partner" class="w-10 h-10 object-cover" />
                <p class="text-[#111928] text-sm font-normal font-['Manrope'] leading-[22px] flex-1">
                    Judicial Disciplinary Committee
                </p>
            </div>
            <!-- Partner 4 -->
            <div class="flex items-center gap-3 w-[200px] rounded-[20px]">
                <img src="/images/partner4.png" alt="Partner" class="w-10 h-10 object-cover" />
                <p class="text-[#111928] text-sm font-normal font-['Manrope'] leading-[22px]">
                    Judicial Academy
                </p>
            </div>
            <!-- Partner 5 -->
            <div class="flex items-center gap-3 w-[200px] rounded-[20px]">
                <img src="/images/partner5.png" alt="Partner" class="w-10 h-10 object-cover" />
                <p class="text-[#111928] text-sm font-normal font-['Manrope'] leading-[22px]">
                    Mongolian Judges Association
                </p>
            </div>
            <!-- Partner 6 -->
            <div class="flex items-center gap-3 w-[200px] rounded-[20px]">
                <img src="/images/partner6.png" alt="Partner" class="w-10 h-10 object-cover" />
                <p class="text-[#111928] text-sm font-normal font-['Manrope'] leading-[22px]">
                    Legal Innovation NGO
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact / Footer Section -->
<section class="w-full bg-[#fbfaf5] border-t border-[#e5e7eb]">
    <div class="max-w-[1280px] mx-auto px-16 py-10">
        <div class="flex flex-wrap justify-between items-start gap-8">
            <!-- Left Side - Contact Info -->
            <div class="flex-1 min-w-[400px] pt-5">
                <div class="flex flex-col gap-8">
                    <!-- Section Title -->
                    <div class="flex flex-col gap-3">
                        <p class="text-[#0069e5] text-[18px] font-semibold font-['Manrope'] leading-[26px]">
                            Contact
                        </p>
                        <div class="flex flex-col gap-3">
                            <h2 class="text-[#111928] text-[30px] font-bold font-['Manrope'] leading-[38px]">
                                Connect with us
                            </h2>
                            <p class="text-[#637381] text-base font-normal font-['Manrope'] leading-6">
                                Reach out to us using the form or the information below
                            </p>
                        </div>
                    </div>

                    <!-- Contact Details -->
                    <div class="flex flex-col gap-9">
                        <!-- Address -->
                        <div class="flex gap-6 items-start">
                            <div class="relative w-16 h-16">
                                <div class="w-16 h-16 bg-[#0069e5] opacity-[0.05] rounded-[5px]"></div>
                                <img src="/images/icon-address.svg" alt="Address" class="absolute top-[17px] left-[17px] w-[29px] h-[29px]" />
                            </div>
                            <div class="flex-1 flex flex-col gap-[10px]">
                                <p class="text-[#111928] text-[18px] font-semibold font-['Inter'] leading-[26px]">
                                    Address:
                                </p>
                                <p class="text-[#637381] text-base font-normal font-['Inter'] leading-6">
                                    Сан бизнес төв, 4 давхар, 401 тоот Ерөнхий сайд Амарын гудамж - 29, Сүхбаатар дүүрэг, Улаанбаатар хот
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex gap-6 items-start">
                            <div class="relative w-16 h-16">
                                <div class="w-16 h-16 bg-[#0069e5] opacity-[0.05] rounded-[5px]"></div>
                                <img src="/images/icon-phone1.svg" alt="Phone" class="absolute top-[17px] left-[17px] w-[29px] h-[29px]" />
                            </div>
                            <div class="flex flex-col gap-[10px]">
                                <p class="text-[#111928] text-[18px] font-semibold font-['Inter'] leading-[26px]">
                                    Phone number:
                                </p>
                                <p class="text-[#637381] text-base font-normal font-['Inter'] leading-6">
                                    +976 9988 7766
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <!-- Email -->
                        <div class="flex gap-6 items-start">
                            <div class="relative w-16 h-16">
                                <div class="w-16 h-16 bg-[#0069e5] opacity-[0.05] rounded-[5px]"></div>
                                <img src="/images/icon-email.svg" alt="Email" class="absolute top-[17px] left-[17px] w-[29px] h-[29px]" />
                            </div>
                            <div class="flex flex-col gap-[10px]">
                                <p class="text-[#111928] text-[18px] font-semibold font-['Inter'] leading-[26px]">
                                    Email:
                                </p>
                                <p class="text-[#637381] text-base font-normal font-['Inter'] leading-6">
                                    EJAM@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Funding Note -->
                    <p class="text-[#637381] text-base font-normal font-['Manrope'] leading-6 max-w-[487px]">
                        This project is funded by the Government of Canada through Global Affairs Canada.
                    </p>
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div class="relative mt-15">
                <!-- Decorative Elements -->
                <img src="/images/frame35.svg" alt="Canada Logo" class="absolute right-[-40px] top-[-54px] w-[100px] h-[100px] hidden lg:block" />
                <img src="/images/dotted-shape.svg" alt="Dotted" class="absolute right-[-40px] top-[63px] w-[106px] h-[134px] rotate-180 hidden lg:block" />
                <img src="/images/dotted-shape.svg" alt="Dotted" class="absolute left-[-20px] bottom-[-20px] w-[106px] h-[134px] rotate-180 hidden lg:block" />

                <!-- Form Card -->
                <div class="w-[470px] bg-white rounded-lg shadow-[0px_4px_18px_0px_rgba(0,0,0,0.07)] p-[50px] relative z-10">
                    <form class="flex flex-col gap-[25px]">
                        <div class="w-full h-[50px]">
                            <input type="text" placeholder="Name" 
                                   class="w-full h-full px-5 py-3 bg-white border border-[#0069e5] rounded-md text-base font-normal font-['Manrope'] text-[#9ca3af] focus:outline-none focus:ring-2 focus:ring-[#0069e5]" />
                        </div>
                        <div class="w-full h-[50px]">
                            <input type="email" placeholder="Email" 
                                   class="w-full h-full px-5 py-3 bg-white border border-[#dfe4ea] rounded-md text-base font-normal font-['Manrope'] text-[#9ca3af] focus:outline-none focus:ring-2 focus:ring-[#0069e5]" />
                        </div>
                        <div class="w-full h-[50px]">
                            <input type="tel" placeholder="Phone Number" 
                                   class="w-full h-full px-5 py-3 bg-white border border-[#dfe4ea] rounded-md text-base font-normal font-['Manrope'] text-[#9ca3af] focus:outline-none focus:ring-2 focus:ring-[#0069e5]" />
                        </div>
                        <div class="w-full h-[130px]">
                            <textarea placeholder="Short message" 
                                      class="w-full h-full px-5 py-5 bg-white border border-[#dfe4ea] rounded-md text-base font-normal font-['Manrope'] text-[#9ca3af] focus:outline-none focus:ring-2 focus:ring-[#0069e5] resize-none"></textarea>
                        </div>
                        <button type="submit" 
                                class="w-full py-[13px] px-7 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-base font-medium font-['Manrope'] leading-6 transition">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Copyright -->
    <div class="w-full px-16 pb-5">
        <div class="max-w-[1280px] mx-auto">
            <div class="border-t border-[#cbd5e1] pt-8">
                <p class="text-[#637381] text-base font-normal font-['Manrope'] leading-6 text-center">
                    © 2025 EJAM. All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
