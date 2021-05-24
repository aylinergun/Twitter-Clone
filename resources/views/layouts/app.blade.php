<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">

    <title>Twitter Clone</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
    <link rel="stylesheet" href="assets/css/stylesheets/screen.css">

    <link rel="stylesheet" href="assets/css/lib/LineIcons.min.css">
</head>

<body class="bg-white">

    <!-- wrapper start -->
    <div class="">
        <!-- container start -->
        <div class="container mx-auto">
            <div class="flex md:flex-no-wrap flex-wrap">

                <!-- left column start -->
                <div class="md:w-1/2 w-full bg-white">
                    <div class="inner pr-12 px-4 py-1" id="leftNavbar">
                        <!-- logo start -->
                        <div class="logo twitter-color w-12 transition-3 twitter-light-blue-on-hover p-2 ml-2 cursor-pointer rounded-full">
                            <svg viewBox="0 0 24 24"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
                        </div>
                        <!-- logo end -->

                        <!-- side navigation start -->
                          @include('layouts.side-navigation')
                       <!-- side navigation end -->
                    </div>
                </div>
                <!-- left column end -->


                <!-- left column start -->
                <div class="w-full py-0 border border-t-0 border-b-0 ">
                    <!-- middle column header start -->
                      @include('layouts.header')
                    <!-- middle column header end -->

                    <!-- new tweet textarea start -->
                      @include('layouts.new-tweet')
                    <!-- new tweet textarea end -->

                    <div class="hr-bar">
                        <hr class="block h-3 w-full">
                    </div>

                    <!-- tweets wrapper start -->
                    <div class="tweets-wrapper">
                        <div class="innner">
                          @include('layouts.tweet')
                        </div>
                    </div>
                    <!-- tweets wrapper end -->
                </div>
                <!-- middle colulmn end -->


                <!-- left colulmn start -->
                <div class="md:w-2/3 w-full px-4 py-0">
                    <!-- inner start -->
                    <div class="inner right-column" id="rightSide">

                        <!-- block seach block start -->
                          @include('layouts.search')
                        <!-- block seach block end -->

                        <!-- block trend block start -->
                          @include('layouts.trend')
                        <!-- block trend block end -->

                        <!-- block who to follow block start -->
                          @include('layouts.who-to-follow')
                        <!-- block who to follow block end -->

                        <!-- block footer block start -->
                          @include('layouts.footer')
                        <!-- block footer block end -->

                    </div>
                    <!-- inner end -->
                </div>
                <!-- right column end -->
            </div>
        </div>
        <!-- container end -->

    </div>
    <!-- wrapper end-->


    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.sticky.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>
