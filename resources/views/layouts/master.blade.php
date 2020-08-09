<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>@yield('title')</title>


    <!-- uikit -->
    <link rel="stylesheet" href="{{url('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{url('assets/icons/flags/flags.min.css')}}" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="{{url('assets/css/style_switcher.min.css')}}" media="all">
    
    <!-- altair admin -->
    <link rel="stylesheet" href="{{url('assets/css/main.min.css')}}" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="{{url('assets/css/themes/themes_combined.min.css')}}" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
        <link rel="stylesheet" href="assets/css/ie.css" media="all">
    <![endif]-->

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form uk-autocomplete" data-uk-autocomplete="{source:'data/search_data.json'}">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
                <script type="text/autocomplete">
                    <ul class="uk-nav uk-nav-autocomplete uk-autocomplete-results">
                        <li >
                            <a href="">
                                <br>
                                <span class="uk-text-muted uk-text-small"></span>
                            </a>
                        </li>
                    </ul>
                </script>
            </form>
        </div>
    </header><!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="assets/img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="index.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
        </div>
        
        <div class="menu_section">
            <ul>
                <li title="Category">
                    <a href="category.html">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Category</span>
                    </a>
                    
                </li>
                <li title="Sub-Category">
                    <a href="sub_category.html">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Sub-Category</span>
                    </a>
                    
                </li>
                <li title="Topic">
                    <a href="topic.html">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Topic</span>
                    </a>
                </li>
                <li title="Topic Content">
                    <a href="topic_content.html">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Topic Content</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->

    @yield('content')

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="{{url('assets/js/common.min.js')}}"></script>
    <!-- uikit functions -->
    <script src="{{url('assets/js/uikit_custom.min.js')}}"></script>
    <!-- altair common functions/helpers -->
    <script src="{{url('assets/js/altair_admin_common.min.js')}}"></script>

    <script src="{{url('angular/angular.min.js')}}"></script>
    @yield('angular')

    <!-- ckeditor -->
    <script src="{{url('bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{url('bower_components/ckeditor/adapters/jquery.js')}}"></script>
    <!--  wysiwyg editors functions -->
    <script src="{{url('assets/js/pages/forms_wysiwyg.min.js')}}"></script>
    

    <!-- page specific plugins -->
    <!-- tablesorter -->
    <script src="{{url('bower_components/tablesorter/dist/js/jquery.tablesorter.min.js')}}"></script>
    <script src="{{url('bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.min.js')}}"></script>
    <script src="{{url('bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js')}}"></script>
    <script src="{{url('bower_components/tablesorter/dist/js/widgets/widget-columnSelector.min.js')}}"></script>
    <script src="{{url('bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js')}}"></script>

    <!--  tablesorter functions -->
    <script src="{{url('assets/js/pages/plugins_tablesorter.min.js')}}"></script>
    @yield('script')
</body>
</html>