@if (session('success'))
    <div class="bg-green-300 text-green-700 p-4 rounded my-4">
        <i class="fas fa-check-double mr-2"></i> {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="bg-red-300 text-red-700 p-4 rounded my-4">
        <i class="fas fa-exclamation-triangle mr-2"></i> {{ session('error') }}
    </div>
@endif
