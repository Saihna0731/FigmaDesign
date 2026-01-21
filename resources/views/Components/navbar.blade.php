<!-- Main Navbar -->
<nav class="w-full bg-white border-b border-[#e4e4e7]">
    <div class="max-w-[1280px] mx-auto px-8 py-3">
        <div class="flex items-center justify-between gap-8">
            <!-- Logo Section -->
            <div class="flex items-center gap-[11px]">
                <img src="/images/canadaLogo.png" alt="Canada Logo" class="h-[64.8px] w-[162px] object-cover" />
                <img src="/images/EJAMLogo.png" alt="EJAM Logo" class="w-[100px] h-[100px] object-contain" />
            </div>
            
            <!-- Right Section -->
            <div class="flex-1 flex items-center justify-end gap-3">
                <!-- Search Button -->
                <button class="flex items-center gap-3 h-10 px-5 bg-white border border-[#dfe4ea] rounded-full w-[205px]">
                    <svg class="w-4 h-4 text-[#6b7280]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.333 12.667A5.333 5.333 0 107.333 2a5.333 5.333 0 000 10.667zM14 14l-2.9-2.9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-[#9ca3af] text-sm font-medium font-['Manrope']">Search</span>
                    <svg class="w-4 h-4 text-[#6b7280] ml-auto" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <!-- Login Button -->
                <a href="#" class="flex items-center justify-center h-10 px-4 bg-[#0069e5] hover:bg-blue-700 rounded-full text-white text-sm font-medium font-['Manrope'] transition">
                    Log In
                </a>
                
                <!-- Language Dropdown -->
                <button class="flex items-center gap-2 h-10 px-4 rounded-full">
                    <svg class="w-4 h-4 text-[#62748e]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 1.5c1.657 0 3 2.91 3 6.5s-1.343 6.5-3 6.5-3-2.91-3-6.5 1.343-6.5 3-6.5z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M1.5 8h13" stroke="currentColor" stroke-width="1.5"/>
                    </svg>
                    <span class="text-[#62748e] text-sm font-medium font-['Manrope']">EN</span>
                    <svg class="w-4 h-4 text-[#62748e]" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Sub Navbar -->
<nav class="w-full bg-[#fbfaf5] border-b border-[#e4e4e7]">
    <div class="max-w-[1280px] mx-auto px-10">
        <div class="flex items-center gap-6">
            <!-- Home -->
            <a href="#" class="py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                Home
            </a>
            
            <!-- About the Project (with dropdown) -->
            <div class="relative group">
                <button class="flex items-center gap-2 py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                    About the Project
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <!-- News & Activities (with dropdown) -->
            <div class="relative group">
                <button class="flex items-center gap-2 py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                    News & Activities
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <!-- Publications -->
            <a href="#" class="py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                Publications
            </a>
            
            <!-- Media -->
            <a href="#" class="py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                Media
            </a>
            
            <!-- Contact -->
            <a href="#" class="py-4 text-[#62748e] text-sm font-medium font-['Manrope'] hover:text-[#0069e5] transition">
                Contact
            </a>
        </div>
    </div>
</nav>
