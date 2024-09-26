<div>
    {{-- Mostrar mensajes de success y error --}}
    <x-message-status/>

    <select
        name="category_id"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs capitalize mb-4"
    >
        <option value="">Seleccionar Categoría</option>
        @foreach ($categories as $category)
            <option
                value="{{ $category->id }}"
                @if( old('category_id', $thread->category_id) == $category->id)
                    selected
                @endif
            >{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id')
        <p class="text-red-500 text-xs italic mb-4">{{ $message }}</p>
    @enderror

    <input
        type="text"
        name="title"
        placeholder="Título de la pregunta"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs mb-4"
        value="{{ old('title', $thread->title) }}"
    >
    @error('title')
        <p class="text-red-500 text-xs italic mb-4">{{ $message }}</p>
    @enderror

    <textarea
        name="body"
        rows="10"
        placeholder="Escribe tu pregunta"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs mb-4"
    >{{ old('body', $thread->body) }}</textarea>
    @error('body')
        <p class="text-red-500 text-xs italic mb-4">{{ $message }}</p>
    @enderror
</div>
