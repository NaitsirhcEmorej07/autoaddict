<div id="app-loader"
    class="fixed inset-0 z-[9999] flex items-center justify-center bg-white dark:bg-gray-900 transition-opacity duration-500">

    <div class="flex flex-col items-center gap-3 animate-fade-in">

        <!-- Logo -->
        <img src="{{ asset('images/logo_250.png') }}"
            class="h-24 w-auto animate-scale drop-shadow-md dark:drop-shadow-[0_0_15px_rgba(255,255,255,0.2)]">

    </div>

</div>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes scale {
        0% {
            transform: scale(0.9);
            opacity: 0.6;
        }

        50% {
            transform: scale(1.05);
            opacity: 1;
        }

        100% {
            transform: scale(1);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }

    .animate-scale {
        animation: scale 1.5s ease-in-out infinite;
    }
</style>

<script>
    window.addEventListener('load', () => {
        const loader = document.getElementById('app-loader');

        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => loader.remove(), 500);
        }, 1300);
    });
</script>
