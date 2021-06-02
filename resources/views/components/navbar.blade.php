<nav class="p-6 grid gap-4 items-center sm:flex sm:justify-between">
  <ul class="grid gap-4 sm:flex">
    <li>
      <a href="{{ route('home') }}" class="bg-white py-1 px-2">Home</a>
    </li>
    @auth
      <li>
        <a href="{{ route('dashboard') }}" class="bg-white py-1 px-2">Dashboard</a>
      </li>
    @endauth
  </ul>
  <ul class="grid gap-4 sm:flex">

    @auth
      <li>
        <a href="#" class="bg-white py-1 px-2">{{ auth()->user()->name }}</a>
      </li>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
      </form>
    @endauth

    @guest
      <li>
        <a href="{{ route('login') }}" class="bg-white py-1 px-2">Log in</a>
      </li>
      <li>
        <a href="{{ route('register') }}" class="bg-white py-1 px-2">Register</a>
      </li>  
    @endguest

  </ul>
</nav>