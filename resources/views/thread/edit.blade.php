<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="rounded-md bg-gradient-to-r from-slate-700 to-slate-900 mb-4">
            <div class="p-4">
                <h2 class="mb-4 text-xl font-semibold text-white/90">
                    <i class="fas fa-pen mr-1"></i> Editar Pregunta:
                </h2>
                <form action="{{ route('threads.update', $thread) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('thread.form')

                    <button
                        type="submit"
                        class="w-full py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/60 font-bold text-sm rounded-md"
                    >
                        <i class="fas fa-download fa-fw"></i> Guardar Cambios
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
