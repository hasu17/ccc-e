<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="body">
@include('components.navbar')
    <h1 class="title">
        Coming Soon
    </h1>

    <div class="countdown-container">
        <div class="countdown-divider">
            <div class="countdown-divider-bar"></div>
        </div>

        <div id="hours-container" class="countdown-unit-container">
            <div class="unit-background">
                <div class="background-top"></div>
                <div class="background-bottom"></div>
            </div>
            <div id="hours" class="unit-digit"><span>00</span></div>
            <div class="middle-line">
                <div></div>
            </div>
        </div>

        <div id="minutes-container" class="countdown-unit-container">
            <div class="unit-background">
                <div class="background-top"></div>
                <div class="background-bottom"></div>
            </div>
            <div id="minutes" class="unit-digit"><span>00</span></div>
            <div class="middle-line">
                <div></div>
            </div>
        </div>

        <div id="seconds-container" class="countdown-unit-container">
            <div class="unit-background">
                <div class="background-top"></div>
                <div class="background-bottom"></div>
            </div>
            <div id="seconds" class="unit-digit"><span>00</span></div>
            <div class="middle-line">
                <div></div>
            </div>
        </div>
        
    </div>
@include('components.footer')
    <script>
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            updateDigit('hours', hours);
            updateDigit('minutes', minutes);
            updateDigit('seconds', seconds);
        }

        function updateDigit(id, newValue) {
            const element = document.getElementById(id);
            if (element.textContent !== newValue) {
                element.textContent = newValue;
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateClock();
            setInterval(updateClock, 1000);
        });
    </script>
    
</body>
</html>