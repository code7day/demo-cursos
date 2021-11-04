<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="px-10 py-5 overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <ul>
            @forelse ($courses as $course)
                    <li>{{ $course->name }}</li>
            @empty
                    <li>No hay datos</li>
            @endforelse
                </ul>

        </div>
    </div>
</div>
