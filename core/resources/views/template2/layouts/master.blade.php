
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title> {{__($general->sitename)}} {{  '| '.__($pt) }}</title>
        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/x-icon">

        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/plugins/accure-icon/style.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/owl.carousel.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/nouislider.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/nouislider.pips.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/jquery.bootstrap-touchspin.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/magnific-popup.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/animate.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/hover-min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/plugins/icofont/css/icofont.css">
        <link rel="stylesheet" href="{{asset('assets/admin/css/sweetalert.css')}}">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/style.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/responsive.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/front2/css/color.php?color={{$general->color}}&color2={{$general->color_two}}">
        @yield('style')
        <style>
            .d-none{
                display: none;
            }
        </style>
    </head>
    <body>

    <div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->

    <header class="header home-page-one">
        <div class="top-bar">
            <div class="thm-container clearfix">
                <div class="contact-info pull-left">
                    <ul class="list-inline">
                        <li class="language-select">
                            <i class="icofont icofont-earth"></i>
                            <div class="select-box">
                                <select class="selectpicker" id="langSel" name="languages">
                                    <option style="color: black" value="en"> @lang('English')</option>
                                    @foreach($lang as $data)
                                        <option value="{{$data->code}}" @if(Session::get('lang') === $data->code) selected  @endif style="color: black">{{__($data->name)}}</option>
                                    @endforeach
                                </select>
                            </div><!-- /.select-box -->
                        </li><!--
                    --><li class="phone"><a href="tel:{{$general->phone}}"><i class="icofont icofont-phone"></i> {{__($general->phone)}}</a></li><!--
                    --><li class="enquery"><a href="mailto:{{$general->email}}"><i class="icofont icofont-envelope"></i> {{$general->email}}</a></li>
                    </ul><!-- /.list-inline -->
                </div><!-- /.contact-info pull-left -->
                <div class="social-box pull-right">

                    <div class="social-icon">
                        <span>@lang('Follow us'):</span>
                        @foreach($social as $key => $data)
                            <a href="{{$data->link}}" target="_blank"><i class="fa fa-{{$data->icon}}"></i></a>
                        @endforeach
                    </div><!-- /.social-icon -->
                </div><!-- /.social -->
            </div><!-- /.thm-container-fluid -->
        </div><!-- /.top-bar -->
        <nav class="navbar navbar-default header-navigation stricky">
            <div class="thm-container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false">
                        <span class="sr-only">@lang('Toggle navigation')</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img style="max-width: 160px;" src="{{asset('assets/images/logo/logo.png')}}" alt="logo image"/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-navigation mainmenu one-page-scroll-menu" id="main-nav-bar">


                    <ul class="nav navbar-nav navigation-box @auth pranto-nav-pad @endauth">
                        
                            <li class="scrollToLink"><a href="{{url('/home')}}">@lang('Dashboard')</a></li>

                            <li class="dropdown scrollToLink">
                                <a href="#" style="border: none" class="btn btn-default dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    @lang('Investment')
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="{{route('user.plan.index')}}">@lang('Investment Plans')</a></li>
                                    <li> <a href="{{route('user.interest.log')}} ">@lang('Return Interest Log')</a></li>
                                </ul>
                            </li>

                            <li class="dropdown scrollToLink">
                                <a href="#" style="border: none" class="btn btn-default dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    @lang('Deposit')
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <li><a href="{{route('user.deposit')}}">@lang('Deposit Now')</a></li>
                                    <li><a href="{{route('pin.recharge')}} ">@lang('E-Pin Recharge')</a></li>
                                    <li><a href="{{route('user.deposit.history')}} ">@lang('Deposit History')</a></li>
                                </ul>
                            </li>

                            <li class="dropdown scrollToLink">
                                <a href="#" style="border: none" class="btn btn-default dropdown-toggle"  id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    @lang('Withdraw')
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                    <li><a href="{{route('user.withdraw')}}">@lang('Withdraw Now')</a></li>
                                    <li><a href="{{route('withdraw.history')}}">@lang('Withdraw History')</a></li>
                                </ul>
                            </li>

                            <li class="dropdown scrollToLink">
                                <a href="#" style="border: none" class="btn btn-default dropdown-toggle"  id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    @lang('Transaction')
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu5">
                                    <li><a class="dropdown-item" href="{{route('user.balance.transfer')}}">@lang('Balance Transfer')</a></li>
                                    <li><a class="dropdown-item" href="{{route('user.transaction')}}">@lang('Transaction History')</a></li>
                                    <li><a class="dropdown-item" href="{{route('my.referral.com')}}">@lang('Referral Statistic')</a></li>
                                    <li><a class="dropdown-item" href="{{route('user.referral.com')}}">@lang('Referral Commission')</a></li>
                                </ul>
                            </li>

                            <li class="dropdown scrollToLink">
                                <a href="#" style="border: none" class="btn btn-default dropdown-toggle"  id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                    <li> <a  href="{{route('user.profile')}}">@lang('Profile')</a></li>
                                    <li><a  href="{{route('support.index.customer')}}">@lang('Support Ticket')</a></li>
                                    <li><a  href="{{route('two.factor.index')}}">@lang('2Fa Security')</a></li>
                                    <li><a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();" >@lang('Logout')
                                        </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </li>

                    </ul>

                </div><!-- /.navbar-collapse -->

            </div><!-- /.container -->
        </nav>
    </header><!-- /.header -->

    <div id="app">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="footer-top">
            <div class="thm-container clearfix">
                <a href="#" class="footer-logo pull-left"><img style="max-width: 160px;" src="{{asset('assets/images/logo/logo.png')}}" alt="Awesome Image"/></a>
                <div class="footer-right pull-right">
                    <div class="footer-menu">
                        <ul>
                            @foreach($menu as $data)
                                <li>
                                    <a href="{{route('menu.index.front', ['id'=>$data->id,'any'=> Replace($data->name)])}}">  {{__($data->name)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- /.footer-menu -->
                    <div class="footer-social">
                        @foreach($social as $key=> $data)
                            <a href="{{$data->link}}" ><i class="fa fa-{{$data->icon}}"></i></a>
                        @endforeach
                    </div><!-- /.footer-social -->
                </div><!-- /.footer-right pull-right -->
            </div><!-- /.thm-container -->
        </div><!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="thm-container">
                <p> {{__($general->footer)}}</p>
            </div><!-- /.thm-container -->
        </div><!-- /.footer-bottom -->
    </footer><!-- /.footer -->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

    <script src="{{url('/')}}/assets/front2/js/jquery.js"></script>

    <script src="{{url('/')}}/assets/front2/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/assets/front2/js/bootstrap-select.min.js"></script>
    <script src="{{url('/')}}/assets/front2/js/jquery.validate.min.js"></script>
    <script src="{{url('/')}}/assets/front2/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/assets/front2/js/isotope.js"></script>
    <script src="{{url('/')}}/assets/front2/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/assets/front2/js/waypoints.min.js"></script>
    <script src="{{url('/')}}/assets/front2/js/jquery.counterup.min.js"></script>
    <script src="{{url('/')}}/assets/front2/js/wow.min.js"></script>

    <!-- google map helper -->
    <script src="{{url('/')}}/assets/front2/js/jquery.easing.min.js"></script>
    <script src="{{url('/')}}/assets/front2/js/custom.js"></script>

    <script src="{{asset('assets/admin/js/sweetalert.js')}}"></script>

    <script>
        $(document).on('change', '#langSel', function () {
            var code = $(this).val();
            window.location.href = "{{url('/')}}/change-lang/"+code ;
        });
    </script>

    @yield('script')
    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
    </script>


    <script>
        $(document).ready(function(){
            var winheight = $(window).height() -150;
            $('#justify-height').css('min-height',winheight+'px');
        });
    </script>

    @if (Session::has('message'))
        <script type="text/javascript">
            $(document).ready(function () {
                swal("{{ __(Session::get('message')) }}","", "success");
            });
        </script>
    @endif

    @if (Session::has('success'))
        <script type="text/javascript">
            $(document).ready(function () {
                swal("{{ __(Session::get('success')) }}","", "success");
            });
        </script>
    @endif

    @if (Session::has('alert'))
        <script type="text/javascript">
            $(document).ready(function () {
                swal("{{ __(Session::get('alert')) }}","", "warning");
            });
        </script>
    @endif

    </body>
    </html>