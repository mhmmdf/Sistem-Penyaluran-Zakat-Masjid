<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Muhammad Fikri Arzyah">
    <link rel="icon" href="{{url('cuba/assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('cuba/assets/images/icon-192.png')}}" type="image/x-icon">
    <title>@yield('title', 'Masjid Nur Ilahi')</title>
    @include('includes.backend.style')

    <style>
        #loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        .sidebar-submenu {
            display: none;
            padding-left: 20px;
            /* Agar submenu terindetasi sedikit */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .hamburger-menu {
            background: none;
            border: none;
            font-size: 24px;
            color: #333;
            padding: 8px;
            margin-left: 10px;
            cursor: pointer;
        }

        @media (min-width: 768px) {
            .hamburger-menu {
                display: none;
            }
        }

        .sidebar-wrapper.closed {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>