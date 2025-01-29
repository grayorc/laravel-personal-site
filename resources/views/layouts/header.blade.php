<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>


    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>
    <meta name="author" content="علیرضا وحدانی ,Alireza10up, Alireza Vahdani"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="theme-color" content="#304cfd">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Developer, Backend Developer, Alireza Vahdani, Vahdani, Alireza, علیرضا وحدانی , Alireza10up, طراح سایت, علیرضا, وحدانی">

    <!-- Twitter data -->
    {{--    <meta name="twitter:card" content="summary_large_image">--}}
    {{--    <meta name="twitter:site" content="@ArtTemplates">--}}
    {{--    <meta name="twitter:title" content="@yield('title')">--}}
    {{--    <meta name="twitter:description" content="@yield('description')">--}}
    {{--    <meta name="twitter:image" content="../assets/images/social.html">--}}

    <!-- Open Graph data -->
    {{--    <meta property="og:title" content="ArtTemplate" />--}}
    {{--    <meta property="og:type" content="website" />--}}
    {{--    <meta property="og:url" content="your url website" />--}}
    {{--    <meta property="og:image" content="../assets/images/social.html" />--}}
    {{--    <meta property="og:description" content="vCard" />--}}
    {{--    <meta property="og:site_name" content="vCard" />--}}

    <!-- Favicons -->
    {{--    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicons/apple-touch-icon-144x144.png">--}}
    {{--    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicons/apple-touch-icon-114x114.png">--}}
    {{--    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicons/apple-touch-icon-72x72.png">--}}
    {{--    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/favicons/apple-touch-icon-57x57.png">--}}
    <link rel="shortcut icon" href="{{asset('assets/images/favicons/favicon.ico')}}" type="image/png">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/style-rtl-demo.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/style-rtl.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/demo/style-demo.css')}}"/>
    <style>
        .comment-form {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Add some space between form elements */
        }

        .comment-form .form-control {
            margin-bottom: 10px; /* Add margin to the bottom of each input element */
        }

        .comment-form .btn {
            align-self: flex-start; /* Align the button to the start of the form */
        }

        .dropdown.dropup {
            align-self: flex-start; /* Align the dropdown to the start of the form */
        }

        .emoji-wrap {
            display: flex;
            flex-wrap: wrap; /* Arrange emojis in a flexible, wrapped layout */
            gap: 5px; /* Add some space between emojis */
        }


    </style>
</head>
