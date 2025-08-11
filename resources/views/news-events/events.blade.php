<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Coming Soon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* This CSS handles the flip animation, similar to Framer Motion's effect */
        .flip-clock-digit {
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s;
            transform-style: preserve-3d;
        }

        .flip-clock-enter {
            transform: rotateX(90deg);
            opacity: 0;
        }
        .flip-clock-active {
            transform: rotateX(0deg);
            opacity: 1;
        }
        .flip-clock-exit {
            transform: rotateX(-90deg);
            opacity: 0;
        }
    </style>
</head>
<body class="h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-600 to-purple-600 px-4">

    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-8 opacity-80 text-center">
        Coming Soon
    </h1>

    <div class="relative font-mono font-extrabold text-5xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl grid grid-cols-3 text-center text-white shadow-2xl gap-x-2 sm:gap-x-4 border-4 sm:border-8 border-yellow-100 rounded-lg opacity-90">
        <div class="absolute inset-x-0 -bottom-5 mx-auto flex justify-center">
            <div class="w-3/4 h-3 sm:h-5 bg-yellow-100 rounded"></div>
        </div>

        <div id="hours-container" class="relative py-4 sm:py-8 px-3 sm:px-5 overflow-hidden">
            <div class="absolute inset-0 w-full h-full grid grid-rows-2 opacity-60">
                <div class="bg-gradient-to-br from-gray-800 to-gray-900"></div>
                <div class="bg-gradient-to-br from-gray-700 to-gray-900"></div>
            </div>
            <div id="hours" class="relative flip-clock-digit">00</div>
            <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                <div class="h-px w-full bg-gray-800"></div>
            </div>
        </div>

        <div id="minutes-container" class="relative py-4 sm:py-8 px-3 sm:px-5 overflow-hidden">
            <div class="absolute inset-0 w-full h-full grid grid-rows-2 opacity-60">
                <div class="bg-gradient-to-br from-gray-800 to-gray-900"></div>
                <div class="bg-gradient-to-br from-gray-700 to-gray-900"></div>
            </div>
            <div id="minutes" class="relative flip-clock-digit">00</div>
            <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                <div class="h-px w-full bg-gray-800"></div>
            </div>
        </div>

        <div id="seconds-container" class="relative py-4 sm:py-8 px-3 sm:px-5 overflow-hidden">
            <div class="absolute inset-0 w-full h-full grid grid-rows-2 opacity-60">
                <div class="bg-gradient-to-br from-gray-800 to-gray-900"></div>
                <div class="bg-gradient-to-br from-gray-700 to-gray-900"></div>
            </div>
            <div id="seconds" class="relative flip-clock-digit">00</div>
            <div class="absolute inset-0 w-full h-full flex items-center justify-center">
                <div class="h-px w-full bg-gray-800"></div>
            </div>
        </div>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            const hoursEl = document.getElementById('hours');
            const minutesEl = document.getElementById('minutes');
            const secondsEl = document.getElementById('seconds');

            if (hoursEl.textContent !== hours) {
                animateFlip(hoursEl, hours);
            }
            if (minutesEl.textContent !== minutes) {
                animateFlip(minutesEl, minutes);
            }
            if (secondsEl.textContent !== seconds) {
                animateFlip(secondsEl, seconds);
            }
        }

        function animateFlip(element, newValue) {
            // Create a temporary element to hold the new value
            const newElement = document.createElement('div');
            newElement.textContent = newValue;
            newElement.className = 'relative flip-clock-digit flip-clock-enter';

            // Animate the current element out
            element.classList.add('flip-clock-exit');

            // Append the new element and let the transitions run
            element.parentElement.appendChild(newElement);

            setTimeout(() => {
                // After a short delay, animate the new element in
                newElement.classList.remove('flip-clock-enter');
                newElement.classList.add('flip-clock-active');
            }, 10);

            setTimeout(() => {
                // After the animation is complete, update the original element and remove the temporary one
                element.textContent = newValue;
                element.classList.remove('flip-clock-exit');
                newElement.remove();
            }, 500); // This should match your CSS transition duration
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateClock(); // Initial call
            setInterval(updateClock, 1000);
        });
    </script>
</body>
</html>