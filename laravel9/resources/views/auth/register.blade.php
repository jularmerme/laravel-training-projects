<x-layouts.app title="Contact" meta-description="Contact meta description">

  <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Register</h1>

  <form method="POST" action=" {{ route('register') }}" class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800">
    @csrf
    {{-- @include('posts.form-fields') --}}

    <div class="space-y-4">
      <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">Name: </span>
        <input  class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
                autofocus="autofocus"
                type="text" 
                name="name" 
                id="title" 
                value="{{ old('name') }}" >
        @error('name')
          <small style="color: red" class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
      </label>
      <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">Email: </span>
        <input  class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
                type="email" 
                name="email" 
                id="title" 
                value="{{ old('email') }}" >
        @error('email')
          <small style="color: red" class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
      </label>
      <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">Password: </span>
        <input  class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
                type="password" 
                name="password" 
                id="title" 
                value="" >
        @error('password')
          <small style="color: red" class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
      </label>
      <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">Confirm Password: </span>
        <input  class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
                type="password" 
                name="password_confirmation" 
                id="title" 
                value="" >
        @error('password_confirmation')
          <small style="color: red" class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
      </label>
    </div>

    <div class="flex items-center justify-between mt-4">
      <a a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('posts.index')}}">Login</a>
      <button  class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Register</button>
    </div>
  </form>

</x-layouts.app>