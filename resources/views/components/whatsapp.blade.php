{{-- WhatsApp chat link with a pre-filled message. "location" is sent with the click-tracking event. --}}
@props(['message' => null, 'location' => 'unknown'])

@php
    $text = $message ?? config('portfolio.contact.whatsapp_message');
    $href = 'https://wa.me/' . config('portfolio.contact.whatsapp') . '?text=' . rawurlencode($text);
@endphp

<a href="{{ $href }}" target="_blank" rel="noopener" data-track="whatsapp_click" data-track-location="{{ $location }}" {{ $attributes }}>
    {{ $slot }}
</a>
