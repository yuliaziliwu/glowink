<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex h-screen">
  <!-- Left Pane -->
  <div class="w-1/2 bg-blue-300">
  
    <!-- Content for Left Pane -->
    <div class="p-4">
      <img class="mx-auto h-auto w-auto justify-items-center" src="{{ asset('images/logo.png') }}">
      <h1 class="mt-0 text-center text-4xl font-bold font-serif">Glowink Store</h1>
    </div>
  </div>

  <!-- Right Pane -->
  <div class="w-1/2 bg-white">
    <!-- Content for Right Pane -->
  
    <div class="container flex h-screen items-center justify-center ">
    <div class="border rounded-lg p-24 mx-auto bg-blue-300">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="text-sm">
            </div>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-white px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 w-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>
  
      <p class="mt-5 text-center text-sm text-gray-500">
        Don't have account?
        <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign up</a>
      </p>
    </div>
  </div>
  </body>
  </html>