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
        <div class="relative hidden h-screen select-none flex-col justify-center bg-blue-600 text-center md:flex md:w-1/2">
            <div class="mx-auto py-16 px-8 text-white xl:w-[40rem]">
                <span class="rounded-full bg-white px-3 py-1 font-medium text-blue-600">Fitur Baru</span>
                <p class="my-6 text-3xl font-semibold leading-10">Temukan cara baru belajar <span class="whitespace-nowrap rounded-lg bg-orange-400 px-1 text-white">budaya</span> dengan <span class="whitespace-nowrap rounded-lg bg-orange-400 px-1 text-white">teknologi</span> terbaru</p>
                <p class="mb-4">Gabungkan budaya dan teknologi dalam pengalaman belajar yang interaktif dan menyenangkan. Jelajahi materi budaya yang kaya dengan metode pembelajaran terkini.</p>
            </div>
        </div>

        <div class="flex w-full flex-col md:w-1/2">
            <div class="flex justify-center pt-12 md:justify-start md:pl-12">
                <a href="/" class="text-2xl font-bold text-blue-600"> SAMADA</a>
            </div>
            <div class="my-auto mx-auto flex flex-col justify-center px-6 pt-8 md:justify-start lg:w-[28rem]">
                <p class="text-center text-3xl font-bold md:text-left md:leading-tight">Create your free account</p>
                <p class="mt-6 text-center font-medium md:text-left">
                    Already using SAMADA?
                    <a href="{{ route('login') }}" class="whitespace-nowrap font-semibold text-blue-700">Login here</a>
                </p>

                <div class="text-sm pt-8 text-gray-500">Complete the form below to finish registration.</div>
                <form method="post" action="{{ route('register') }}" class="flex flex-col items-stretch">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <div class="relative flex overflow-hidden">
                            <input type="text" name="name" placeholder="name" value="{{ old('name') }}" class="w-full flex-shrink appearance-none rounded-md border-slate-300 bg-white py-2 px-4 text-base text-slate-700 placeholder-slate-400 focus:outline-none @error('name') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror" />
                        </div>
                        @error('name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <div class="relative flex overflow-hidden">
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="w-full flex-shrink appearance-none rounded-md border-slate-300 bg-white py-2 px-4 text-base text-slate-700 placeholder-slate-400 focus:outline-none @error('email') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror" />
                        </div>
                        @error('email')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <div class="relative flex overflow-hidden">
                            <input type="password" name="password" placeholder="Password" class="w-full flex-shrink appearance-none rounded-md border-slate-300 bg-white py-2 px-4 text-base text-slate-700 placeholder-slate-400 focus:outline-none @error('password') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror" />
                        </div>
                        @error('password')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <div class="relative flex overflow-hidden">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full flex-shrink appearance-none rounded-md border-slate-300 bg-white py-2 px-4 text-base text-slate-700 placeholder-slate-400 focus:outline-none @error('password_confirmation') border-red-500 bg-red-50 text-red-900 placeholder-red-700 @enderror" />
                        </div>
                        @error('password_confirmation')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="block mt-4">
                        <input class="mr-2 h-5 w-5 appearance-none rounded border border-gray-300 bg-contain bg-no-repeat align-top text-black shadow checked:bg-blue-600 focus:border-blue-600 focus:shadow" type="checkbox" id="remember-me" checked />
                        <label class="inline-block" for="remember-me"> I agree to the <a class="underline" href="#">Terms and Conditions</a></label>
                    </div>
                    <button type="submit" class="mt-2 rounded-lg bg-blue-600 px-4 py-2 text-center text-base font-semibold text-white shadow-md outline-none ring-blue-500 ring-offset-0 transition hover:bg-blue-700 focus:ring-0 md:w-32">Register</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>