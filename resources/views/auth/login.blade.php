<x-layout>




    <form method="POST" action="/login" class="max-w-sm p-5 bg-slate-300 rounded mx-auto">
        @csrf
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@flowbite.com" required />
            @error('email')
                <span class="text-red-600 font-bold"> {{ $message }} </span>
            @enderror
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                password</label>
            <input type="password" id="password" name="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
            @error('password')
                <span class="text-red-600 font-bold"> {{ $message }} </span>
            @enderror
        </div>


        @session('error')
            <span class=" text-red-500 font-bold text-xl mb-4 font-mono">{{ session('error') }}</span>
        @endsession
        <div class="flex items-start  mb-5">
            <div class="flex items-center  h-5">
                <label for="remember" class="pe-4">
                    <input type="checkbox" name="remember" id="remember">
                    Remember Me
                </label>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </form>

</x-layout>
