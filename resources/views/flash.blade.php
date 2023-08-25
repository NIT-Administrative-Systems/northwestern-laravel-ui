@php
    /*
     * Determine the alert type and contextual icon based on a populated session key.
     *
     * Default to "info" for backward compatibility (versions < v2.1.0)
     */
    $statusDefinitions = collect([
        'status-info' => ['type' => 'info', 'icon' => 'circle-info'],
        'status-success' => ['type' => 'success', 'icon' => 'circle-check'],
        'status-warning' => ['type' => 'warning', 'icon' => 'triangle-exclamation'],
        'status-danger' => ['type' => 'danger', 'icon' => 'circle-exclamation'],
        'status' => ['type' => 'info', 'icon' => 'circle-info'],
    ]);

    $currentStatus = $statusDefinitions->first(fn($definition, $key) => session()->has($key));

    $statusType = $currentStatus['type'] ?? null;
    $statusIcon = $currentStatus['icon'] ?? null;
@endphp

@if ($statusType && $statusIcon)
    <div class="alert alert-{{ $statusType }} alert-dismissible fade show w-100" role="alert">
        <i class="fas fa-{{ $statusIcon }} me-1" aria-hidden="true"></i>
        {{-- Retrieve the specific status type value, or 'status' as a fallback --}}
        {{ session('status-' . $statusType, session('status')) }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
