<nav class="w-full bg-white border-b border-[#e4e4e7] relative z-50">
    <div class="max-w-[1280px] mx-auto px-3 sm:px-4 md:px-8 py-2 md:py-3">
        <div class="flex items-center justify-between gap-2 sm:gap-4 md:gap-8">
            <div class="flex items-center gap-1 sm:gap-2 md:gap-[11px] flex-shrink-0">
                <img src="{{ asset('images/logo/canadaLogo.png') }}" alt="Canada Logo" class="h-[32px] sm:h-[40px] md:h-[64.8px] w-auto object-cover" />
                <img src="{{ asset('images/logo/EJAMLogo.png') }}" alt="EJAM Logo" class="w-[40px] sm:w-[50px] md:w-[100px] h-[40px] sm:h-[50px] md:h-[100px] object-contain" />
            </div>
            
            <button id="mobileMenuBtn" class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg hover:bg-gray-100 transition">
                <svg class="w-6 h-6 text-[#62748e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            
            <div class="hidden md:flex flex-1 items-center justify-end gap-3">
                <div class="relative" id="searchContainer">
                    <button id="searchBtn" class="flex items-center gap-3 h-10 px-5 bg-white border border-[#dfe4ea] rounded-full w-[205px] hover:border-[#bedbff] hover:border-2 transition-all focus:border-[#bedbff] focus:border-2">
                        <svg class="w-4 h-4 text-[#6b7280]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.333 12.667A5.333 5.333 0 107.333 2a5.333 5.333 0 000 10.667zM14 14l-2.9-2.9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="text-[#9ca3af] text-sm font-medium font-['Manrope']">Search</span>
                        <svg class="w-4 h-4 text-[#6b7280] ml-auto transition-transform" id="searchChevron" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    
                    <div id="searchDropdown" class="hidden absolute top-[48px] left-0 w-[361px] bg-white rounded-xl shadow-[0px_5px_12px_0px_rgba(0,0,0,0.1)] p-4 z-50">
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded-lg cursor-pointer group">
                                <span class="text-[#111928] text-base font-medium font-['Manrope']">хуулийн тухай</span>
                                <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="w-5 h-5 text-[#62748e]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5l10 10M15 5L5 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded-lg cursor-pointer group">
                                <span class="text-[#111928] text-base font-medium font-['Manrope'] truncate">сүүлд зохион байгуулагдсан сургалтууд</span>
                                <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity flex-shrink-0">
                                    <svg class="w-5 h-5 text-[#62748e]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5l10 10M15 5L5 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded-lg cursor-pointer group">
                                <span class="text-[#111928] text-base font-medium font-['Manrope']">Шинэ гарын авлаг</span>
                                <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="w-5 h-5 text-[#62748e]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5l10 10M15 5L5 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center justify-between p-2 hover:bg-gray-50 rounded-lg cursor-pointer group">
                                <span class="text-[#111928] text-base font-medium font-['Manrope']">ил тод байдлын лавлагаа</span>
                                <button class="p-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="w-5 h-5 text-[#62748e]" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 5l10 10M15 5L5 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="flex items-center justify-center h-10 px-4 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-sm font-medium font-['Manrope'] transition">
                    Log In
                </a>
                
                <div class="relative" id="langContainer">
                    <button id="langBtn" class="flex items-center gap-2 h-10 px-4 rounded-full hover:bg-gray-100 transition">
                        <svg class="w-4 h-4 text-[#62748e]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M8 1.5c1.657 0 3 2.91 3 6.5s-1.343 6.5-3 6.5-3-2.91-3-6.5 1.343-6.5 3-6.5z" stroke="currentColor" stroke-width="1.5"/>
                            <path d="M1.5 8h13" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                        <span id="currentLang" class="text-[#62748e] text-sm font-medium font-['Manrope']">EN</span>
                        <svg class="w-4 h-4 text-[#62748e] transition-transform" id="langChevron" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    
                    <div id="langDropdown" class="hidden absolute top-[47px] right-0 w-[212px] bg-white border border-[#cbd5e1] rounded-md shadow-sm p-1 z-50">
                        <button class="langOption w-full flex items-center gap-2 px-8 py-1.5 rounded-md bg-[#f1f5f9] text-[#0f172a] text-sm font-medium font-['Manrope'] relative" data-lang="EN">
                            <svg class="absolute left-2 w-4 h-4 text-[#0f172a]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 8l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            English
                        </button>
                        <button class="langOption w-full flex items-center gap-2 px-8 py-1.5 rounded-md hover:bg-[#f1f5f9] text-[#0f172a] text-sm font-medium font-['Manrope']" data-lang="MN">
                            Mongolian
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav class="w-full bg-[#fbfaf5] border-b border-[#e4e4e7] relative z-40">
    <div class="max-w-[1280px] mx-auto px-4 md:px-10">
        <div class="hidden md:flex items-center gap-5">
            <a href="{{ url('/') }}" class="py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                Home
            </a>
            
            <div class="relative" id="aboutMenuContainer">
                <button id="aboutMenuBtn" class="flex items-center gap-2 py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                    About the Project
                    <svg class="w-4 h-4 transition-transform" id="aboutChevron" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <div id="aboutDropdown" class="hidden absolute top-[62px] left-0 w-[421px] bg-white rounded-xl shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-6 z-50">
                    <div class="flex flex-col gap-3">
                        <a href="{{ url('/about-us') }}" class="group flex items-center gap-3.5 p-3 bg-[#f8fafc] hover:bg-[#e6f0ff] rounded-md transition">
                            <div class="w-[50px] h-[50px] bg-white rounded flex items-center justify-center">
                                <svg class="w-[26px] h-[26px] text-[#62748e] group-hover:text-[#0069e5] transition" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/>
                                    <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="1.5"/>
                                    <circle cx="12" cy="12" r="2" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[#111928] group-hover:text-[#0069e5] text-base font-semibold font-['Manrope'] transition">Төслийн зорилт</span>
                                <span class="text-[#637381] text-xs font-medium font-['Manrope']">Үндсэн зорилт, хамрах хүрээ</span>
                            </div>
                        </a>
                        <a href="{{ url('/about-us') }}" class="group flex items-center gap-3.5 p-3 hover:bg-[#e6f0ff] rounded-md transition">
                            <div class="w-[50px] h-[50px] bg-[#f3f4f6] rounded flex items-center justify-center">
                                <svg class="w-[26px] h-[26px] text-[#62748e] group-hover:text-[#0069e5] transition" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[#111928] group-hover:text-[#0069e5] text-base font-semibold font-['Manrope'] transition">Төслийн түнш</span>
                                <span class="text-[#637381] text-xs font-medium font-['Manrope']">Хамтрагч байгууллагууд</span>
                            </div>
                        </a>
                        <!-- {{ url('/contact') }} -->
                        <a href="#" class="group flex items-center gap-3.5 p-3 hover:bg-[#e6f0ff] rounded-md transition">
                            <div class="w-[50px] h-[50px] bg-[#f3f4f6] rounded flex items-center justify-center">
                                <svg class="w-[26px] h-[26px] text-[#62748e] group-hover:text-[#0069e5] transition" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="5" r="3" stroke="currentColor" stroke-width="1.5"/>
                                    <circle cx="5" cy="19" r="3" stroke="currentColor" stroke-width="1.5"/>
                                    <circle cx="19" cy="19" r="3" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M12 8v4M8 16l2-4M16 16l-2-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[#111928] group-hover:text-[#0069e5] text-base font-semibold font-['Manrope'] transition">Төслийн удирдлага</span>
                                <span class="text-[#637381] text-xs font-medium font-['Manrope']">Зохион байгуулалт, дэлгэрэнгүй мэдээлэл</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="relative" id="newsMenuContainer">
                <button id="newsMenuBtn" class="flex items-center gap-2 py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                    News & Activities
                    <svg class="w-4 h-4 transition-transform" id="newsChevron" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <div id="newsDropdown" class="hidden absolute top-[62px] left-0 w-[300px] bg-white rounded-xl shadow-[0px_1px_3px_0px_rgba(166,175,195,0.4)] p-4 z-50">
                    <div class="flex flex-col gap-2">
                        <a href="{{ url('/all-news') }}" class="group flex items-center gap-3 p-3 hover:bg-[#e6f0ff] rounded-md transition">
                            <svg class="w-5 h-5 text-[#62748e] group-hover:text-[#0069e5] transition" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2z" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M7 7h10M7 11h10M7 15h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            <span class="text-[#111928] group-hover:text-[#0069e5] text-sm font-medium font-['Manrope'] transition">All News</span>
                        </a>
                        <a href="{{ url('/news-activities') }}" class="group flex items-center gap-3 p-3 hover:bg-[#e6f0ff] rounded-md transition">
                            <svg class="w-5 h-5 text-[#62748e] group-hover:text-[#0069e5] transition" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M16 2v4M8 2v4M3 10h18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            <span class="text-[#111928] group-hover:text-[#0069e5] text-sm font-medium font-['Manrope'] transition">Events & Activities</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <a href="{{ url('/publications') }}" class="py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                Publications
            </a>
            
            <a href="{{ url('/media') }}" class="py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                Media
            </a>
            
            <a href="{{ url('/contact') }}" class="py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                Contact
            </a>
        </div>
    </div>
</nav>

<div id="mobileMenuOverlay" 
    class="fixed inset-0 bg-black/40 backdrop-blur-md z-[100] hidden md:hidden transition-all duration-300">
</div>
<!-- <div id="mobileMenuOverlay" class="fixed inset-0 bg-blur-sm bg-opacity-50 z-[100] hidden md:hidden"></div> -->

<div id="mobileMenu" class="fixed top-0 right-0 h-full w-[300px] bg-white shadow-xl z-[101] transform translate-x-full transition-transform duration-300 md:hidden overflow-y-auto">
    <div class="p-4">
        <div class="flex justify-end mb-4">
            <button id="closeMobileMenu" class="p-2 hover:bg-gray-100 rounded-lg transition">
                <svg class="w-6 h-6 text-[#62748e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <div class="mb-6">
            <div class="flex items-center gap-3 h-10 px-4 bg-gray-100 rounded-full">
                <svg class="w-4 h-4 text-[#6b7280]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.333 12.667A5.333 5.333 0 107.333 2a5.333 5.333 0 000 10.667zM14 14l-2.9-2.9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <input type="text" placeholder="Search..." class="flex-1 bg-transparent text-sm font-['Manrope'] outline-none" />
            </div>
        </div>
        
        <div class="flex flex-col gap-2">
            <a href="{{ url('/') }}" class="py-3 px-4 text-[#111928] text-base font-medium font-['Manrope'] hover:bg-gray-50 rounded-lg transition">
                Home
            </a>
            
            <div class="mobile-accordion">
                <button class="mobile-accordion-btn w-full flex items-center justify-between py-3 px-4 text-[#111928] text-base font-medium font-['Manrope'] hover:bg-gray-50 rounded-lg transition">
                    About the Project
                    <svg class="w-4 h-4 transition-transform" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="mobile-accordion-content hidden pl-4">
                    <a href="{{ url('/about-us') }}" class="block py-2 px-4 text-[#637381] text-sm font-medium font-['Manrope'] hover:text-[#0069e5]">Төслийн зорилт</a>
                    <a href="{{ url('/about-us') }}#partners" class="block py-2 px-4 text-[#637381] text-sm font-medium font-['Manrope'] hover:text-[#0069e5]">Төслийн түнш</a>
                    <a href="{{ url('/contact') }}" class="block py-2 px-4 text-[#637381] text-sm font-medium font-['Manrope'] hover:text-[#0069e5]">Төслийн удирдлага</a>
                </div>
            </div>
            
            <div class="mobile-accordion">
                <button class="mobile-accordion-btn w-full flex items-center justify-between py-3 px-4 text-[#111928] text-base font-medium font-['Manrope'] hover:bg-gray-50 rounded-lg transition">
                    News & Activities
                    <svg class="w-4 h-4 transition-transform" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="mobile-accordion-content hidden pl-4">
                    <a href="{{ url('/all-news') }}" class="block py-2 px-4 text-[#637381] text-sm font-medium font-['Manrope'] hover:text-[#0069e5]">All News</a>
                    <a href="{{ url('/news-activities') }}" class="block py-2 px-4 text-[#637381] text-sm font-medium font-['Manrope'] hover:text-[#0069e5]">Events & Activities</a>
                </div>
            </div>
            
            <a href="{{ url('/publications') }}" class="py-3 px-4 text-[#111928] text-base font-medium font-['Manrope'] hover:bg-gray-50 rounded-lg transition">
                Publications
            </a>
            
            <a href="{{ url('/media') }}" class="py-3 px-4 text-[#111928] text-base font-medium font-['Manrope'] hover:bg-gray-50 rounded-lg transition">
                Media
            </a>
            
            <a href="{{ url('/contact') }}" class="py-3 px-4 text-[#111928] text-base font-medium font-['Manrope'] hover:bg-gray-50 rounded-lg transition">
                Contact
            </a>
        </div>
        
        <div class="mt-6 border-t border-gray-200 pt-4">
            <p class="text-xs text-[#637381] font-medium font-['Manrope'] mb-2 px-4">Language</p>
            <div class="flex gap-2 px-4">
                <button class="mobile-lang-btn flex-1 py-2 px-4 text-sm font-medium font-['Manrope'] rounded-lg bg-[#0069e5] text-white" data-lang="EN">English</button>
                <button class="mobile-lang-btn flex-1 py-2 px-4 text-sm font-medium font-['Manrope'] rounded-lg bg-gray-100 text-[#111928] hover:bg-gray-200" data-lang="MN">Mongolian</button>
            </div>
        </div>
        
        <div class="mt-4 px-4">
            <a href="#" class="flex items-center justify-center w-full h-10 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-sm font-medium font-['Manrope'] transition">
                Log In
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    const closeMobileMenu = document.getElementById('closeMobileMenu');
    
    function openMobileMenu() {
        mobileMenu.classList.remove('translate-x-full');
        mobileMenuOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    function closeMobileMenuFn() {
        mobileMenu.classList.add('translate-x-full');
        mobileMenuOverlay.classList.add('hidden');
        document.body.style.overflow = '';
    }
    
    mobileMenuBtn?.addEventListener('click', openMobileMenu);
    closeMobileMenu?.addEventListener('click', closeMobileMenuFn);
    mobileMenuOverlay?.addEventListener('click', closeMobileMenuFn);
    
    // Mobile accordion
    document.querySelectorAll('.mobile-accordion-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const chevron = this.querySelector('svg');
            content.classList.toggle('hidden');
            chevron.classList.toggle('rotate-180');
        });
    });
    
    // Search dropdown
    const searchBtn = document.getElementById('searchBtn');
    const searchDropdown = document.getElementById('searchDropdown');
    const searchChevron = document.getElementById('searchChevron');
    
    searchBtn?.addEventListener('click', function(e) {
        e.stopPropagation();
        searchDropdown.classList.toggle('hidden');
        searchChevron.classList.toggle('rotate-180');
        langDropdown?.classList.add('hidden');
        aboutDropdown?.classList.add('hidden');
        newsDropdown?.classList.add('hidden');
    });
    
    // Language dropdown
    const langBtn = document.getElementById('langBtn');
    const langDropdown = document.getElementById('langDropdown');
    const langChevron = document.getElementById('langChevron');
    const currentLang = document.getElementById('currentLang');
    
    langBtn?.addEventListener('click', function(e) {
        e.stopPropagation();
        langDropdown.classList.toggle('hidden');
        langChevron.classList.toggle('rotate-180');
        searchDropdown?.classList.add('hidden');
        aboutDropdown?.classList.add('hidden');
        newsDropdown?.classList.add('hidden');
    });
    
    // Language selection
    document.querySelectorAll('.langOption').forEach(option => {
        option.addEventListener('click', function() {
            const lang = this.dataset.lang;
            currentLang.textContent = lang;
            
            document.querySelectorAll('.langOption').forEach(opt => {
                opt.classList.remove('bg-[#f1f5f9]');
                opt.querySelector('svg')?.remove();
            });
            
            this.classList.add('bg-[#f1f5f9]');
            const checkIcon = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            checkIcon.setAttribute('class', 'absolute left-2 w-4 h-4 text-[#0f172a]');
            checkIcon.setAttribute('viewBox', '0 0 16 16');
            checkIcon.setAttribute('fill', 'none');
            checkIcon.innerHTML = '<path d="M3 8l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
            this.insertBefore(checkIcon, this.firstChild);
            
            langDropdown.classList.add('hidden');
            langChevron.classList.remove('rotate-180');
        });
    });
    
    // Mobile language selection
    document.querySelectorAll('.mobile-lang-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const lang = this.dataset.lang;
            document.querySelectorAll('.mobile-lang-btn').forEach(b => {
                b.classList.remove('bg-[#0069e5]', 'text-white');
                b.classList.add('bg-gray-100', 'text-[#111928]');
            });
            this.classList.remove('bg-gray-100', 'text-[#111928]');
            this.classList.add('bg-[#0069e5]', 'text-white');
            if (currentLang) currentLang.textContent = lang;
        });
    });
    
    // About dropdown
    const aboutMenuBtn = document.getElementById('aboutMenuBtn');
    const aboutDropdown = document.getElementById('aboutDropdown');
    const aboutChevron = document.getElementById('aboutChevron');
    
    aboutMenuBtn?.addEventListener('click', function(e) {
        e.stopPropagation();
        aboutDropdown.classList.toggle('hidden');
        aboutChevron.classList.toggle('rotate-180');
        this.classList.toggle('text-[#0069e5]');
        searchDropdown?.classList.add('hidden');
        langDropdown?.classList.add('hidden');
        newsDropdown?.classList.add('hidden');
    });
    
    // News dropdown
    const newsMenuBtn = document.getElementById('newsMenuBtn');
    const newsDropdown = document.getElementById('newsDropdown');
    const newsChevron = document.getElementById('newsChevron');
    
    newsMenuBtn?.addEventListener('click', function(e) {
        e.stopPropagation();
        newsDropdown.classList.toggle('hidden');
        newsChevron.classList.toggle('rotate-180');
        this.classList.toggle('text-[#0069e5]');
        searchDropdown?.classList.add('hidden');
        langDropdown?.classList.add('hidden');
        aboutDropdown?.classList.add('hidden');
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('#searchContainer')) {
            searchDropdown?.classList.add('hidden');
            searchChevron?.classList.remove('rotate-180');
        }
        if (!e.target.closest('#langContainer')) {
            langDropdown?.classList.add('hidden');
            langChevron?.classList.remove('rotate-180');
        }
        if (!e.target.closest('#aboutMenuContainer')) {
            aboutDropdown?.classList.add('hidden');
            aboutChevron?.classList.remove('rotate-180');
            aboutMenuBtn?.classList.remove('text-[#0069e5]');
        }
        if (!e.target.closest('#newsMenuContainer')) {
            newsDropdown?.classList.add('hidden');
            newsChevron?.classList.remove('rotate-180');
            newsMenuBtn?.classList.remove('text-[#0069e5]');
        }
    });
});
</script>
