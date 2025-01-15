<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    


<div class="flex min-h-full flex-col justify-center px-6 py-40 lg:px-8 ">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <a href="/"><img class="mx-auto h-10 w-auto" src="{{asset('assets/images/black-logo.png')}}" alt="Your Company"></a>
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign up your account </h2>
    <h4 class=" text-center block text-sm/6 font-medium text-gray-900">To post or apply to jobs</h4>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/create" method="POST">
        @csrf
        <div>
                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">User type</label>
                  <select id="category" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                      <option selected="">Candidate</option>
                      <option value="recruiter">Recruiter</option>
                      
                      
                  </select>
                  @error('category')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
        <div class="mt-2">
          <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-slate-600 sm:text-sm/6">
        </div>
        @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
          @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
        </div>
        <div class="mt-2">
          <input type="password" name="password_confirmation" id="password" autocomplete="current-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-slate-600 sm:text-sm/6">
        </div>
        @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
      </div>
      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Confirm password</label>
          
        </div>
        <div class="mt-2">
          <input type="password" name="password" id="password" autocomplete="current-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-slate-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-slate-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-slate-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-500">
      Already a member?
      <a href="/login" class="font-semibold text-slate-600 hover:text-slate-500">Sign in</a>
    </p>
  </div>
</div>

</body>
</html>