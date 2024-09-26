<div>
    <select
        name="category_id"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs capitalize mb-4"
    >
        <option value="">Seleccionar Categoría</option>
        @foreach ($categories as $category)
            <option
                value="{{ $category->id }}"
                @if ($thread->category_id == $category->id)
                    selected
                @endif
            >{{ $category->name }}</option>
        @endforeach
    </select>
    
    <input
        type="text"
        name="title"
        placeholder="Título de la pregunta"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs mb-4"
        value="{{ $thread->title }}"
    >

    <textarea
        name="body"
        rows="10"
        placeholder="Escribe tu pregunta"
        class="bg-slate-700 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs mb-4"
    >{{ $thread->body }}</textarea>
</div>
