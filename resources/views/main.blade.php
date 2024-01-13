<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Full Calendar</title>
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('calendar/js/bootstrap-4.4.1.css') }}">
        <link rel="stylesheet" href="{{ asset('calendar/css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('calendar/css/menu.css') }}">
        <link rel="stylesheet" href="{{ asset('calendar/js/bootstrap-select.css') }}">
        <link rel="stylesheet" href="{{ asset('calendar/css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('calendar/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('calendar/css/my-calender/my-calender.css') }}">

        <link rel="stylesheet" href="{{ asset('calendar/js/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('calendar/js/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" />
        @livewireStyles

    </head>
    <body>
        <livewire:Calendar />
        @livewireScripts
        @stack('scripts')
    </body>
    <script>
        $(".dropdownmenu").dropdown();
        $('.c_data').hide();
        $('.d2').show();
        $('#selectField').on("change", function () {
            $('.c_data').hide();
            $('.d' + $(this).val()).show();
        }).val(2);
    </script>
</html>