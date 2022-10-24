<div class="space-y-4">
  <label class="flex flex-col">
    <span class="font-serif text-slate-600 dark:text-slate-400">Title</span>
    <input  class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" type="text" name="title" id="title" value="{{ old('title', $post->title) }}" >
    @error('title')
      <small style="color: red" class="font-bold text-red-500/80">{{ $message }}</small>
    @enderror
  </label>
  <label for="body" class="flex flex-col">
    <span class="font-serif text-slate-600 dark:text-slate-400">Body</span>
    <textarea class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" name="body" id="" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
    @error('body')
      <small style="color: red" class="font-bold text-red-500/80">{{ $message }}</small>
    @enderror
  </label>
</div>