<!DOCTYPE html>
<html lang="en" class="scroll-smooth md:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Aryanando - Dashboard Portofolio</title>
    <style>
        .typed-cursor {
            color: greenyellow;
            font-size: 2.25rem;
        }
    </style>
</head>

<body class=" bg-white">
    @include('dashboard.partials.navbar')
    @include('dashboard.partials.sidenav')

    @yield('section1')
    @yield('section2')
    @yield('section3')
    @yield('section4')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
        const button = document.querySelector('#menu-button');
        const menu = document.querySelector('#menu');

        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
    <script>
        VANTA.FOG({
            el: "#start-section",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0x4d4d4d,
            midtoneColor: 0x8c7c7a,
            lowlightColor: 0x7f7aa0,
            baseColor: 0x90707
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 100,
            startDelay: 200,
            backSpeed: 100,
            backDelay: 700,
            loop: true,
            loopCount: Infinity,
            cursorChar: '_',
        });
    </script>
    <script src="/custom/js/panelsnap.js" defer></script>
    <script>
        var defaultOptions = {
            container: document.body,
            panelSelector: '> section',
            directionThreshold: 50,
            delay: 0,
            duration: 300,
            easing: function(t) {
                return t
            },
        };
        document.addEventListener("DOMContentLoaded", function() {
            new PanelSnap();
        });
    </script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <script>
        const sections = document.querySelectorAll("section");
        const navLi = document.querySelectorAll("#side-nav ul li");
        window.onscroll = () => {
            var current = "";

            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop) {
                    current = section.getAttribute("id");
                }
            });

            navLi.forEach((li) => {
                li.querySelector('div svg').classList.remove("h-6");
                li.querySelector('div span').classList.add("hidden");
                if (li.classList.contains(current)) {
                    li.querySelector('div svg').classList.add("h-6");
                    li.querySelector('div span').classList.remove("hidden");
                }
            });
        };
    </script>

</body>

</html>
