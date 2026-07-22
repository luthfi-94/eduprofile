@props(['status'])

@if ($status)
    <div id="status-alert"
        {{ $attributes->merge(['class' => 'alert alert-success alert-dismissible fade show py-2 px-3 mb-3']) }}
        role="alert">

        {{ $status }}

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    <script>
        setTimeout(function () {
            const alert = document.getElementById('status-alert');

            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('hide');

                setTimeout(() => {
                    alert.remove();
                }, 300);
            }
        }, 3000); // Hilang setelah 3 detik
    </script>
@endif