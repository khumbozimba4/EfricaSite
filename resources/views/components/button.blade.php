<button {{ $attributes->merge(['class' => 'bg-' . $color . ' text-white', 'rounded-full']) }}>
    {{ $slot }}
</button>
