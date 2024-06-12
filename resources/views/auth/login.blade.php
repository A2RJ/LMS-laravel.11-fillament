<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SAMADA</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex w-screen text-slate-800">
        <div class="flex w-full flex-col">
            <div class="flex justify-center pt-12 md:justify-start md:pl-12">
                <a href="/" class="text-2xl font-bold text-blue-600">SAMADA</a>
            </div>
            <div class="my-auto mx-auto flex flex-col justify-center px-6 pt-8 md:justify-start lg:w-[28rem]">
                <p class="text-center text-3xl font-bold md:leading-tight md:text-left md:text-5xl">
                    Halo, <span class="text-blue-600">Silamo.</span>
                </p>

                <p class="mt-3 text-center font-medium md:text-left">Log in to your account below</p>
                <a href="{{ route('login.google') }}"
                    class="flex items-center justify-center my-4 bg-white dark:bg-slate-900 border border-slate-300 rounded-lg shadow-md px-6 py-2 text-sm font-medium text-slate-800 dark:text-white hover:bg-slate-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-500">
                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="-0.5 0 48 48"
                        version="1.1">
                        <title>Google-color</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Color-" transform="translate(-401.000000, -860.000000)">
                                <g id="Google" transform="translate(401.000000, 860.000000)">
                                    <path
                                        d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24"
                                        id="Fill-1" fill="#FBBC05"> </path>
                                    <path
                                        d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333"
                                        id="Fill-2" fill="#EB4335"> </path>
                                    <path
                                        d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667"
                                        id="Fill-3" fill="#34A853"> </path>
                                    <path
                                        d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24"
                                        id="Fill-4" fill="#4285F4"> </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span>Continue with Google</span>
                </a>

                <p class="text-center text-slate-500 font-medium md:text-left">or sign in with your cridential.</p>

                <form method="post" action="{{ route('login') }}" class="flex flex-col items-stretch pt-3">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <div class="relative flex overflow-hidden">
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                class="w-full flex-shrink appearance-none rounded-md border-slate-300 bg-white py-2 px-4 text-base text-slate-700 placeholder-slate-400 focus:outline-none @error('email') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror" />
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span>
                                {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <div class="relative flex overflow-hidden">
                            <input type="password" name="password" placeholder="Password"
                                class="w-full flex-shrink appearance-none rounded-md border-slate-300 bg-white py-2 px-4 text-base text-slate-700 placeholder-slate-400 focus:outline-none @error('password') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror" />
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span>
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <a href="#" class="mb-6 text-center text-sm font-medium text-slate-600 md:text-left">Forgot
                        password?</a>
                    <button type="submit"
                        class="rounded-lg bg-blue-600 px-4 py-2 text-center text-base font-semibold text-white shadow-md outline-none ring-blue-500 ring-offset-0 transition hover:bg-blue-700 focus:ring-0 md:w-32">Log
                        in</button>
                </form>
                <div class="py-12 text-center">
                    <p class="text-slate-600">
                        Don't have an account?
                        <a href="{{ route('register') }}"
                            class="whitespace-nowrap font-semibold text-blue-500 underline underline-offset-4">Sign up
                            for free.</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="relative hidden h-screen select-none bg-blue-600 bg-gradient-to-br md:block md:w-1/2">
            <div class="py-16 px-8 text-white xl:w-[40rem]">
                <span class="rounded-full bg-white px-3 py-1 font-medium text-blue-600">Fitur Baru</span>
                <p class="my-6 text-3xl font-semibold leading-10">Cara baru belajar budaya Samawa dengan <span
                        class="abg-white whitespace-nowrap py-2 text-cyan-300">SAMADA (Samawa Daring)</span>.</p>
                <p class="mb-4">Kini, belajar budaya Samawa lebih mudah dan menyenangkan. Jelajahi materi pembelajaran
                    daring yang interaktif dan menarik.</p>
            </div>
            <img class="ml-8 w-8/12 max-w-lg rounded-lg object-cover" src="{{ asset('/balawas.webp') }}" />
        </div>
    </div>

</body>

</html>
