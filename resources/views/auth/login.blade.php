<!DOCTYPE html>
<html>

<head>
    <link href="/panel/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family: 'IRANSansWeb';
            background: rgb(236, 236, 247);
            background: linear-gradient(96deg, rgba(236, 236, 247, 1) 0%, rgba(56, 164, 239, 1) 100%);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 600px;
            margin: 0 auto;
            padding: 50px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: #3591a1;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 36px;
            color: #8beaff;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        label {
            margin-bottom: 10px;
            font-size: 18px;
            text-align: end;
            color: #555
        }

        .nav-login {
            background: aliceblue;
            box-shadow: 1px 1px 5px 2px gray;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        input {
            padding: 12px;
            border: none;
            border-radius: 5px;
            text-align: end;
            margin-bottom: 20px;
            font-size: 16px;
            color: #000000;
            background-color: #9e9e9eb0;
        }

        .shekayat-btn {

            padding: 10px;
            background-color: rgba(201, 60, 60, 0.897) !important;
            text-align: center;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.2s ease-in-out;

        }

        .navlink {
            color: red !important;
        }

        /* .shekayat-btn:hover{
 

 background: #8bdeff!important;

 color: rgba(201, 60, 60, 0.897)!important;


} */
        button {
            padding: 10px;
            background-color: #8bdeff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.2s ease-in-out;
        }

        button:hover {
            background-color: #5fa4b2;
        }

        .shekayat-btn:hover {
            background-color: rgba(210, 89, 89, 0.897) !important;
            color: #fff !important;
        }

        /* .shekayat-btn {
      text-decoration: none;
      color: #8be0ff;
      font-size: 18px;
      transition: color 0.2s ease-in-out;
    } */


        p {
            text-align: center;
            margin: 8px;
        }

        .bg-svg {
            position: absolute;
            z-index: -1;
            width: 100%;
            opacity: .25;
            min-width: 100%;
            min-height: 100%;
            height: 100%;
        }
    </style>
    <title>صفحه با ورودی و دکمه</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="bg-svg">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
            xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 1422 800">
            <g shape-rendering="crispEdges" stroke-linejoin="round" fill="none" stroke-width="1" stroke="#5998dc">
                <polygon points="1422,0 1422,100 1244.25,0"></polygon>
                <polygon points="1066.5,100 1244.25,100 1066.5,0"></polygon>
                <polygon points="1244.25,100 1155.375,100 1244.25,150"></polygon>
                <polygon points="1155.375,150 1066.5,150 1155.375,100"></polygon>
                <polygon points="1155.375,200 1155.375,150 1066.5,200"></polygon>
                <polygon points="1244.25,200 1155.375,150 1155.375,200"></polygon>
                <polygon points="1422,200 1244.25,100 1422,100"></polygon>
                <polygon points="1066.5,0 1066.5,100 888.75,0"></polygon>
                <polygon points="888.75,0 799.875,0 799.875,50"></polygon>
                <polygon points="799.875,0 799.875,50 711,50"></polygon>
                <polygon points="799.875,100 799.875,50 711,50"></polygon>
                <polygon points="888.75,100 799.875,50 888.75,50"></polygon>
                <polygon points="799.875,150 888.75,100 799.875,100"></polygon>
                <polygon points="799.875,100 711,150 799.875,150"></polygon>
                <polygon points="799.875,150 799.875,200 711,200"></polygon>
                <polygon points="888.75,200 799.875,200 799.875,150"></polygon>
                <polygon points="1066.5,100 1066.5,200 888.75,100"></polygon>
                <polygon points="888.75,300 888.75,200 1066.5,200"></polygon>
                <polygon points="888.75,300 711,200 888.75,200"></polygon>
                <polygon points="888.75,300 888.75,350 799.875,300"></polygon>
                <polygon points="711,350 799.875,300 711,300"></polygon>
                <polygon points="799.875,400 799.875,350 711,400"></polygon>
                <polygon points="888.75,400 799.875,350 888.75,350"></polygon>
                <polygon points="977.625,350 977.625,300 1066.5,300"></polygon>
                <polygon points="977.625,350 888.75,300 888.75,350"></polygon>
                <polygon points="977.625,400 977.625,350 888.75,350"></polygon>
                <polygon points="1066.5,400 1066.5,350 977.625,400"></polygon>
                <polygon points="1422,200 1244.25,200 1244.25,300"></polygon>
                <polygon points="1244.25,300 1244.25,200 1066.5,300"></polygon>
                <polygon points="1155.375,300 1244.25,350 1244.25,300"></polygon>
                <polygon points="1155.375,300 1066.5,300 1155.375,350"></polygon>
                <polygon points="1155.375,350 1155.375,400 1066.5,350"></polygon>
                <polygon points="1155.375,350 1244.25,400 1155.375,400"></polygon>
                <polygon points="1244.25,400 1422,300 1244.25,300"></polygon>
                <polygon points="533.25,0 533.25,100 711,0"></polygon>
                <polygon points="533.25,100 533.25,0 355.5,100"></polygon>
                <polygon points="533.25,150 533.25,100 444.375,150"></polygon>
                <polygon points="355.5,100 444.375,150 444.375,100"></polygon>
                <polygon points="355.5,200 444.375,200 355.5,150"></polygon>
                <polygon points="533.25,200 533.25,150 444.375,150"></polygon>
                <polygon points="711,100 533.25,100 711,200"></polygon>
                <polygon points="355.5,0 177.75,0 355.5,100"></polygon>
                <polygon points="177.75,0 0,100 177.75,100"></polygon>
                <polygon points="177.75,100 0,100 177.75,200"></polygon>
                <polygon points="177.75,200 177.75,100 355.5,200"></polygon>
                <polygon points="355.5,200 355.5,300 177.75,300"></polygon>
                <polygon points="177.75,200 177.75,300 0,300"></polygon>
                <polygon points="177.75,400 0,400 177.75,300"></polygon>
                <polygon points="355.5,350 266.625,300 355.5,300"></polygon>
                <polygon points="266.625,350 266.625,300 177.75,300"></polygon>
                <polygon points="177.75,400 266.625,350 177.75,350"></polygon>
                <polygon points="355.5,350 355.5,400 266.625,350"></polygon>
                <polygon points="711,200 711,250 622.125,250"></polygon>
                <polygon points="533.25,250 622.125,200 533.25,200"></polygon>
                <polygon points="533.25,250 622.125,300 533.25,300"></polygon>
                <polygon points="711,300 711,250 622.125,250"></polygon>
                <polygon points="533.25,250 533.25,200 444.375,250"></polygon>
                <polygon points="444.375,250 444.375,200 355.5,250"></polygon>
                <polygon points="355.5,300 444.375,250 355.5,250"></polygon>
                <polygon points="444.375,250 444.375,300 533.25,300"></polygon>
                <polygon points="533.25,300 533.25,350 444.375,300"></polygon>
                <polygon points="355.5,350 444.375,300 355.5,300"></polygon>
                <polygon points="355.5,350 444.375,350 444.375,400"></polygon>
                <polygon points="533.25,400 444.375,350 444.375,400"></polygon>
                <polygon points="622.125,300 711,300 711,350"></polygon>
                <polygon points="533.25,300 622.125,350 622.125,300"></polygon>
                <polygon points="622.125,400 622.125,350 533.25,350"></polygon>
                <polygon points="622.125,350 711,400 711,350"></polygon>
                <polygon points="711,450 622.125,450 711,400"></polygon>
                <polygon points="622.125,450 533.25,450 533.25,400"></polygon>
                <polygon points="622.125,500 622.125,450 533.25,450"></polygon>
                <polygon points="711,450 622.125,500 622.125,450"></polygon>
                <polygon points="533.25,450 444.375,400 533.25,400"></polygon>
                <polygon points="355.5,400 444.375,450 355.5,450"></polygon>
                <polygon points="444.375,500 355.5,450 355.5,500"></polygon>
                <polygon points="533.25,450 444.375,450 533.25,500"></polygon>
                <polygon points="355.5,500 533.25,600 355.5,600"></polygon>
                <polygon points="711,500 711,600 533.25,600"></polygon>
                <polygon points="355.5,400 177.75,400 355.5,500"></polygon>
                <polygon points="0,500 177.75,400 0,400"></polygon>
                <polygon points="0,500 177.75,500 0,600"></polygon>
                <polygon points="355.5,550 266.625,500 355.5,500"></polygon>
                <polygon points="266.625,550 266.625,500 177.75,550"></polygon>
                <polygon points="266.625,550 177.75,550 266.625,600"></polygon>
                <polygon points="355.5,600 266.625,550 355.5,550"></polygon>
                <polygon points="355.5,600 355.5,700 177.75,600"></polygon>
                <polygon points="177.75,600 0,600 0,700"></polygon>
                <polygon points="177.75,700 0,700 0,800"></polygon>
                <polygon points="355.5,800 355.5,700 177.75,800"></polygon>
                <polygon points="533.25,600 533.25,700 711,700"></polygon>
                <polygon points="355.5,600 533.25,700 355.5,700"></polygon>
                <polygon points="533.25,800 355.5,700 533.25,700"></polygon>
                <polygon points="711,800 711,700 533.25,800"></polygon>
                <polygon points="1422,500 1244.25,500 1422,400"></polygon>
                <polygon points="1244.25,400 1244.25,500 1066.5,400"></polygon>
                <polygon points="1244.25,550 1155.375,500 1244.25,500"></polygon>
                <polygon points="1155.375,550 1066.5,550 1155.375,500"></polygon>
                <polygon points="1155.375,600 1066.5,550 1066.5,600"></polygon>
                <polygon points="1244.25,600 1244.25,550 1155.375,600"></polygon>
                <polygon points="1244.25,500 1422,500 1244.25,600"></polygon>
                <polygon points="977.625,400 1066.5,450 1066.5,400"></polygon>
                <polygon points="888.75,400 977.625,450 977.625,400"></polygon>
                <polygon points="977.625,450 977.625,500 888.75,500"></polygon>
                <polygon points="977.625,450 1066.5,500 977.625,500"></polygon>
                <polygon points="799.875,450 888.75,450 888.75,400"></polygon>
                <polygon points="711,450 711,400 799.875,450"></polygon>
                <polygon points="799.875,500 711,500 711,450"></polygon>
                <polygon points="799.875,500 888.75,500 888.75,450"></polygon>
                <polygon points="888.75,500 799.875,500 799.875,550"></polygon>
                <polygon points="799.875,500 799.875,550 711,500"></polygon>
                <polygon points="799.875,600 711,600 799.875,550"></polygon>
                <polygon points="799.875,550 799.875,600 888.75,550"></polygon>
                <polygon points="1066.5,500 1066.5,600 888.75,600"></polygon>
                <polygon points="1066.5,600 1066.5,700 888.75,600"></polygon>
                <polygon points="888.75,600 888.75,650 799.875,650"></polygon>
                <polygon points="799.875,650 799.875,600 711,650"></polygon>
                <polygon points="799.875,650 799.875,700 711,700"></polygon>
                <polygon points="799.875,650 799.875,700 888.75,650"></polygon>
                <polygon points="888.75,800 888.75,700 711,700"></polygon>
                <polygon points="1066.5,700 1066.5,800 888.75,700"></polygon>
                <polygon points="1244.25,600 1422,600 1244.25,700"></polygon>
                <polygon points="1244.25,700 1244.25,600 1066.5,700"></polygon>
                <polygon points="1244.25,800 1244.25,700 1066.5,700"></polygon>
                <polygon points="1422,700 1244.25,700 1422,800"></polygon>
            </g>
            <g fill="hsl(220, 62%, 45%)" stroke-width="3" stroke="hsl(220, 43%, 13%)"></g>
        </svg>
    </div>
    <div class="container">
        <div class="form-container" id="login-form">
            <h1>گارانتی</h1>
            <form method="POST" id="kt_ecommerce_add_product_form"action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                  <x-text-input id="login-form" type="email" name="email" :value="old('')" required autofocus
                  autocomplete="username" />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <x-input-label for="email" :value="__('ایمیل')" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                  
                  <x-text-input id="password" type="password" name="password" required
                  autocomplete="current-password" />
                  
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <x-input-label for="password" :value="__('پسورد')" />
                  </div>
                  
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me"></label>
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('بخاطر بسپار') }}</span>

                </div>

                <div @if (Route::has('password.request')) <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('پسورد فراموش کردید؟') }}
                </a> @endif
                    <x-primary-button class="ml-3">
                    {{ __('ورود') }}
                    </x-primary-button>
                </div>
            </form>


        </div>
        <script>
            const loginForm = document.getElementById('login-form');
            const signupForm = document.getElementById('signup-form');
            const loginLink = document.getElementById('login-link');
            const signupLink = document.getElementById('signup-link');

            loginLink.addEventListener('click', (event) => {
                event.preventDefault();
                signupForm.style.display = 'none';
                loginForm.style.display = 'block';

                setTimeout(() => {
                    signupForm.style.opacity = 0;
                    loginForm.style.opacity = 1;
                }, 10);
            });

            signupLink.addEventListener('click', (event) => {
                event.preventDefault();
                loginForm.style.display = 'none';
                signupForm.style.display = 'block';

                setTimeout(() => {
                    loginForm.style.opacity = 0;
                    signupForm.style.opacity = 1;
                }, 10);
            });
        </script>
</body>

</html>
