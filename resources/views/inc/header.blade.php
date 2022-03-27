<nav class="font-sans text-center content-center sm:flex-row sm:text-left sm:justify-between flex flex-col d-flex px-6 py-2 shadow-lg w-full">
  <div class="mb-2 sm:mb-0 inner">
    <a href="{{route('rec-data')}}" class="">
        <span class="text-2xl">Minimalism Blog</span>
    </a> 
  </div>
  <div class="sm:mb-0 self-center space-x-4">
    <a class="" href="{{route('rec-data')}}">Статьи</a>
    @if(Auth::check() and Auth::user()->role==1)
    <a class="" href="{{route('rec')}}">Новая</a> 
    @endif
    @if(Auth::check() == false)
    <a class="bg-gray-600 p-2 rounded-lg hover:bg-gray-500" href="{{route('login')}}">Войти</a>
    @endif
    @if(Auth::check())
    <a class="bg-gray-600 p-2 rounded-lg hover:bg-gray-500" href="{{route('logout')}}">Выйти</a>
    @endif
  </div>    
</nav>