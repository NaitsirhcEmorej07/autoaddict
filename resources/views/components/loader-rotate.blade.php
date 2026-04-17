<div id="app-loader"
    class="fixed inset-0 z-[9999]  flex items-center justify-center 
            bg-white dark:bg-gray-900 
            transition-opacity duration-500">

    <div class="flex flex-col items-center gap-3 animate-fade-in">

        <!-- Logo -->
        <img src="{{ asset('images/logo_250.png') }}"
            class="h-24 w-auto animate-rotate-soft 
                    dark:opacity-90">

    </div>

</div>

<style>
    /* 🔹 Fade in (entry) */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }

    /* 🔥 Rotate + Ease (subtle movement) */
    @keyframes rotateSoft {
        0% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(1.5deg);
        }

        50% {
            transform: rotate(0deg);
        }

        75% {
            transform: rotate(-1.5deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    .animate-rotate-soft {
        animation: rotateSoft 2s ease-in-out infinite;
    }
</style>

<script>
    window.addEventListener('load', () => {
        const loader = document.getElementById('app-loader');

        // small delay for premium feel
        setTimeout(() => {
            loader.style.opacity = '0';
            loader.style.transition = 'opacity 0.5s ease';

            setTimeout(() => {
                loader.remove();
            }, 500);

        }, 1200);
    });
</script>
