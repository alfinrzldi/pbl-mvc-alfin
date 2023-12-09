<section class="bg-gradient-to-r from-gray-300 to-pink-200 font-Poppins">
    <div class="flex flex-col items-center justify-center px  -6 py-8 mx-auto md:h-screen lg:py-0 bg-gradient-to-br">
      <a href="index.html" class="flex items-center mb-1  font-regular text-black text-4xl">
        <span class="font-regular text-button">Namara<span class="font-light text-buttontext">Snack</span>
      </a>
      <div class="w-full bg-yellow-300 rounded-3xl md:mt-0 sm:max-w-md xl:p-0 shadow-xl">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1
            class=" text-xl font-regular leading-tight tracking-tight text-black md:text-2xl justify-center flex font-regular">
            Sign in
          </h1>
          <form class="space-y-4 md:space-y-6" action="/verifylogin" method="POST">
            <div>
              <label for="username" class="block mb-2 text-sm font-regular text-black">Email</label>
              <input type="email" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 focus:rounded-lg block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="username" required="">
            </div>
            <div>
              <label for="password" class="block mb-2 text-sm font-regular text-black ">Password</label>
              <input type="password" name="password" id="password" placeholder="••••••••••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="">
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-start">
              </div>
              <a href="#" class="text-sm font-medium text-primary-600 hover:underline ">Forgot password?</a>
            </div>
            <button type="submit" name="submit"
              class="w-full text-black border-2 border-gray-900 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-regular rounded-lg text-sm px-5 py-2.5 text-center">Sign
              in</button>
            <p class="text-sm font-light text-gray-600">
              Don’t have an account yet? <a href="Register.html"
                class="font-medium text-primary-600 hover:underline">Sign up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>