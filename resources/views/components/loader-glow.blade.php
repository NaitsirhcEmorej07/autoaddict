<div id="app-loader"
    class="fixed inset-0 z-[9999] flex items-center justify-center bg-white dark:bg-gray-900 transition-opacity duration-500">

    <div class="flex flex-col items-center gap-3 animate-fade-in">

        <!-- Logo -->
        <img src="{{ asset('images/logo_250.png') }}" class="h-24 w-auto animate-glow">

    </div>

</div>

<style>
    /* Fade in */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* 🔥 Glow effect (LIGHT + DARK adaptive) */
    @keyframes glow {
        0% {
            transform: scale(1);
            filter: drop-shadow(0 0 0px rgba(0, 0, 0, 0));
        }

        50% {
            transform: scale(1.03);
            /* light mode glow */
            filter: drop-shadow(0 0 12px rgba(0, 0, 0, 0.25));
        }

        100% {
            transform: scale(1);
            filter: drop-shadow(0 0 0px rgba(0, 0, 0, 0));
        }
    }

    /* 🌙 Dark mode override (stronger glow, white-based) */
    .dark .animate-glow {
        animation: glow-dark 1.5s ease-in-out infinite;
    }

    @keyframes glow-dark {
        0% {
            transform: scale(1);
            filter: drop-shadow(0 0 0px rgba(255, 255, 255, 0));
        }

        50% {
            transform: scale(1.03);
            filter: drop-shadow(0 0 14px rgba(255, 255, 255, 0.25));
        }

        100% {
            transform: scale(1);
            filter: drop-shadow(0 0 0px rgba(255, 255, 255, 0));
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }

    .animate-glow {
        animation: glow 1.5s ease-in-out infinite;
    }
</style>

<script>
    window.addEventListener('load', () => {
        const loader = document.getElementById('app-loader');

        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => loader.remove(), 500);
        }, 1200);
    });
</script>
