<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">


      <!-- This example requires Tailwind CSS v2.0+ -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
       Hai  {{ Auth::user()->name }} Selamat Datang
       <x-slot name="trigger">
        <span class="inline-flex rounded-md">
            
               
        </span>
    </x-slot>
        </p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
         
        </p>
      </div>
  
      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900"> {{ Auth::user()->currentTeam->name }}</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Anda dapat membuat team's pada bagian {{ __('Manage Team') }}
            </dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/scale -->
               <a href="{{ route('todo.index') }}"> <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
            </a>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Todo</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Anda dapat menuliskan  <a href="{{ route('todo.index') }}" class="text-blue-800">TODO</a>
            </dd>
          </div>
  
        </dl>
      </div>
    </div>
  </div>
  

</div>

</body>
</html>