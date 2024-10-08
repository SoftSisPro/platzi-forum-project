<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row gap-10 lg:py-12">
    <!-- Vista menu sidebar -->
    <div class="w-full lg:w-64">
        <a
            href="{{ route('threads.create') }}"
            class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/60 font-bold text-xs text-center rounded-md"
        >
            <i class="fas fa-comment mr-1"></i> Preguntar
        </a>
        <ul>
        @foreach ($categories as $category)

            <li class="mb-2">
                <a href="#" wire:click.prevent="filterByCategory('{{ $category->id }}')" class="p-2 rounded-md flex bg-slate-700 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                    <span class="w-2 h-2 rounded-full" style="background-color: {{ $category->color }};"></span>
                    {{ $category->name }}
                </a>
            </li>

        @endforeach
            <li>
                <a href="#" wire:click.prevent="filterByCategory('')" class="p-2 rounded-md flex bg-slate-700 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                    <span class="w-2 h-2 rounded-full" style="background-color: #000;"></span>
                    Todos los Resultados
                </a>
            </li>
        </ul>
    </div>
    <!-- Vista de preguntas -->
    <div class="w-full lg:w-auto">
        <form class="mb-4">
            <input
                type="text"
                placeholder="Buscar..."
                class="bg-slate-700 border-0 rounded-md w-1/3 p-2 text-white/60 text-xs"
                wire:model.live="search"
            >
        </form>

        @foreach ($threads as $thread)
            <div class="rounded-md bg-gradient-to-r from-slate-700 to-slate-900 hover:to-slate-700 mb-4">
                <div class="p-4 flex gap-4">
                    <div>
                        <img src="{{ $thread->user->avatar() }}" alt="{{ $thread->user->name }}" class="rounded-md">
                    </div>
                    <div class="w-full">
                        <h2 class="mb-4 flex items-start justify-between">
                            <a href="{{ route('thread', $thread) }}" class="text-xl font-semibold text-white/80">
                                {{ $thread->title }}
                            </a>
                            <span
                                class="rounded-full text-xs py-2 px-4 capitalize"
                                style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->color }};"
                            >
                                {{ $thread->category->name }}
                            </span>
                        </h2>
                        <p class="flex items-center justify-between w-full text-xs">
                            <span class="text-blue-600 font-semibold">
                                {{ $thread->user->name }}
                                <span class="text-white/80">{{ $thread->created_at->diffForHumans() }}</span>
                            </span>
                            <span class="text-slate-600">
                                <i class="fas fa-comment mr-1"></i>
                                {{ $thread->replies_count }}
                                Respuesta{{ $thread->replies_count > 1 ? 's' : '' }}
                                @can ('update', $thread)
                                    &nbsp;|&nbsp;
                                    <a href="{{ route('threads.edit', $thread) }}" class="hover:text-white">
                                        <i class="fas fa-pen text-xs"></i> Editar
                                    </a>
                                @endcan
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="mt-4">
            {{ $threads->links() }}
        </div>
    </div>
</div>
