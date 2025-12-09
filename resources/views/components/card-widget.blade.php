<div class="bg-white border rounded-xl shadow p-4 w-full max-w-md text-left">
    <!-- Icon -->
    <div
        class="w-10 h-10 p-1.5 bg-gradient-to-b from-blue-500 to-blue-700
                rounded-lg flex items-center justify-center mb-4">
        <x-icons :name="$nameIcon" class="w-6 h-6 text-white"/>
    </div>

    <h3 class="text-blue-700  font-semibold text-2xl mb-1">
        {{ $title }}
    </h3>

    <p class="text-gray-600 text-m max-w-sm leading-relaxed">
        {{ $description }}
    </p>
</div>
