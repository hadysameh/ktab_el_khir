
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="/">
                                        
                                <span class="text-white" style='font-size: 45px;'>  كتاب<span style="color: #04D2C8;"> الخير</span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="px-1"><a class=" " href="/" style='font-size:20px'>الرئيسيه</a></li>
                                    
                                    <li class="px-1"><a href="/about" style='font-size:20px'>حول</a></li>
                                    
                                    @if(Auth::check() && auth()->user()->user_type !=1)

                                        <li class="px-1"><a href="/addbook" style='font-size:20px'>اضف كتاب</a></li>

                                        <li class="px-1"><a href="/librarybooks" style='font-size:20px'>كتبنا</a></li>

                                        <li class="px-1"><a href="/search" style='font-size:20px'>  ابحث</a></li>
                                    @endif
                                   
                                    @if(Auth::check() && auth()->user()->user_type ==1)

                                        <li class="px-1"><a href="/search" style='font-size:20px'>  ابحث</a></li>
                                    @endif

                                    @guest
                                    
                                        @if (Route::has('register'))
                                            
                                            <li class="px-1"><a href="/register" style='font-size:20px'>انشاء حساب</a></li>
                                        @endif
                                        <li class="px-1">
                                            <a href="{{ route('login') }}"  dir="ltr" style='font-size:20px'>
                                                <i class="flaticon-user"></i>
                                                <span>تسجيل دخول</span>
                                            </a>
                                        </li>
                                    @else
                                        <li class="px-1">
                                            <a class="" href="{{ route('logout') }}" style='font-size:20px'
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                تسجيل خروج
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>                                                                                                                                
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-center" dir="ltr">
                            
                            
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>