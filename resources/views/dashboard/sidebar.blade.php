
<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">

            @if( isset(auth::user()->avatar) )
                <img src="{{ auth::user()->avatar }}"  class="rounded-circle user-photo" alt="User Profile Picture">
            @else
                <img src="{{ asset('/theme-assets/images/avatar.jpg') }}" class="rounded-circle user-photo" alt="User Profile Picture">
            @endif

            <div class="dropdown">
                <span>مرحبـــــا</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->fullName() }}</strong></a>
                @if( Auth::user()->fullName() != '' )
                <ul class="dropdown-menu dropdown-menu-right account fix_empty">
                @else
                <ul class="dropdown-menu dropdown-menu-right account">
                @endif
                    <li><a href="{{ url('profile') }}"><i class="icon-user"></i>الحســـاب</a></li>
                    <!-- <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li> -->
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="icon-power"></i>الخروج</a></li>
                </ul>
            </div>



        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">القائمة</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">

                        <li class="{{ isActive('dashboard/*') }}">
                            <a href="#Dashboard" class="has-arrow">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i> <span>لــــوحة التحكم</span>
                            </a>
                            <ul>
                                <li class="{{ isActive('dashboard/analytic') }}"><a href="{{ url('/dashboard/analytic') }}">تحــليل</a></li>
                            </ul>
                        </li>

                        <li class="{{ isActive('website/*') }}">
                            <a href="#Dashboard" class="has-arrow">
                                <i class="fa fa-globe" aria-hidden="true"></i> <span>الموقع</span>
                            </a>
                            <ul>
                                <li class="{{ isActive('website/websiteConfig') }}"><a href="{{ url('/website/websiteConfig') }}"> اعدادات الموقع</a></li>
                                 <li class="{{ isActive('website/images') }}"><a href="{{ url('/website/images') }}">صور الموقع</a></li>
                                <li class="{{ isActive('website/sliders') }}"><a href="{{ url('/website/sliders') }}">الصور الاعلانية</a></li>
                                <li class="{{ isActive('website/messages') }}"><a href="{{ url('/website/messages') }}">الرسائل</a></li>
                                <li class="{{ isActive('website/complaint') }}"><a href="{{ url('/website/complaint') }}">الشكاوي والاقترحات</a></li>
                            </ul>
                        </li>


                        @role( 'admin')

                        <li class="{{ isActive('users/*') }}">
                            <a href="#Users" class="has-arrow"><i class="fa fa-user-o" aria-hidden="true"></i> <span>المستخدمين</span></a>
                            <ul>
                                <!-- <li class="{{ isActive('companies/create') }}"><a href="{{ url('/companies/create') }}">أضافة</a></li> -->
                                <li class="{{ isActive('users') }}"><a href="{{ url('/users') }}">عرض الكل</a></li>
                            </ul>
                        </li>

                        <li class="{{ isActive('companies/*') }}">
                            <a href="#Companies" class="has-arrow"><i class="fa fa-building-o" aria-hidden="true"></i> <span>شركـــات</span></a>
                            <ul>
                                <!-- <li class="{{ isActive('companies/create') }}"><a href="{{ url('/companies/create') }}">أضافة</a></li> -->
                                <li class="{{ isActive('companies/index') }}"><a href="{{ url('/companies') }}">عرض الكل</a></li>
                            </ul>
                        </li>
                        @endrole

                        @role( 'partner')

                            @if( Auth::user()->company()->count() > 0  )

                            <li class="{{ isActive('companies/*') }} {{ isActive('companyimages/*') }}">
                                <a href="#My-company" class="has-arrow">
                                    <i class="fa fa-university" aria-hidden="true"></i> <span>الشركة </span>
                                </a>
                                <ul>
                                    <li class="{{ isActive('companies/*/edit') }}">
                                        <a href="{{ route('companies.edit', Auth::user()->company()->first()->id ) }}">بينات الشركة </a>
                                    </li>

                                    <li class="{{ isActive('companyimages/create') }}"><a href="{{ route('companyimages.create') }}">أضافة صور</a></li>

                                    @if( Auth::user()->company()->first()->images()->count() > 0  )
                                    <li class="{{ isActive('companyimages/*/edit') }}"><a href="{{ route('companyimages.edit', Auth::user()->company()->first()->images->id ) }}">عرض جميع الصور</a></li>
                                    @endif

                                </ul>
                            </li>

                            @endif

                        @endrole






                        @if (  Auth::user()->hasRole('admin') && !Auth::user()->hasAnyRole('client|partner') )

                        <li class="{{ isActive('cards/*') }}">

                            <a href="#offers" class="has-arrow"><i class="fa fa-gift" aria-hidden="true"></i> <span>البطاقات</span></a>
                            <ul>
                                <li class="{{ isActive('cards/index') }}"><a href="{{ route('cards.index') }}">جميع البطاقات</a></li>
                            </ul>
                        </li>

                        @endif


                        @if (  Auth::user()->hasRole('client') && !Auth::user()->hasAnyRole('admin|partner') )

                        <li class="{{ isActive('cards/*') }}">

                            <a href="#offers" class="has-arrow"><i class="fa fa-gift" aria-hidden="true"></i> <span>البطاقة</span></a>

                            <ul>
                                <li class="{{ isActive('cards/create') }}"><a href="{{ route('cards.create') }}">طلب بطاقة</a></li>
                                <li class="{{ isActive('cards') }}"><a href="{{ route('cards.index') }}">جميع البطاقات</a></li>
                                <li class=""><a href="">الزيارات والتقييم</a></li>
                            </ul>
                        </li>

                        @endif



                        @if ( Auth::user()->hasRole('admin') )

                        <li class="{{ isActive('offers/*') }}">
                            <a href="#offers" class="has-arrow"><i class="fa fa-gift" aria-hidden="true"></i> <span>عروض</span></a>
                            <ul>
                                <li><a href="{{ route('offers.index') }}">عرض الكل</a></li>
                            </ul>
                        </li>

                        @endif


                        @if ( !is_null( Auth::user()->company ) && Auth::user()->hasRole('partner') && !Auth::user()->hasRole('admin') )

                        <li class="{{ isActive('offers/*') }}">
                            <a href="#offers" class="has-arrow"><i class="fa fa-gift" aria-hidden="true"></i> <span>عروض</span></a>
                            <ul>

                                @role( 'partner')
                                <li class="{{ isActive('offers/create') }}"><a href="{{ route('offers.create') }}">أضافة</a></li>
                                @endrole

                                <li class="{{ isActive('offers') }}"><a href="{{ route('offers.index') }}">عرض الكل</a></li>
                            </ul>
                        </li>

                        @endif



                    </ul>
                </nav>
            </div>


            <div class="tab-pane p-l-15 p-r-15" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span>
                    </li>
                </ul>
                <hr>
                <!-- <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Email Redirect</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Notifications</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Auto Updates</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul> -->
            </div>


        </div>
    </div>
</div>
