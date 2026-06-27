<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $business_name; ?> | Loading...</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --navy:  #1A1A1A;
            --amber: #FF6B00;
            --red:   #E05A00;
            --white: #ffffff;
        }

        html, body {
            width: 100%; height: 100%;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
            background: var(--navy);
        }

        /* ── PRELOADER WRAPPER ── */
        .preloader {
            position: fixed; inset: 0;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            background:
                radial-gradient(ellipse 80% 60% at 50% 0%, rgba(255,107,0,.18) 0%, transparent 70%),
                linear-gradient(160deg, #1A1A1A 0%, #111111 50%, #0D0D0D 100%);
            z-index: 9999;
            transition: opacity .65s ease, transform .65s ease;
        }
        .preloader.fade-out { opacity: 0; transform: scale(1.05); pointer-events: none; }

        /* ── GRID ── */
        .grid-bg {
            position: absolute; inset: 0;
            background-image:
                linear-gradient(rgba(255,107,0,.06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,107,0,.06) 1px, transparent 1px);
            background-size: 60px 60px;
            animation: gridPulse 4s ease-in-out infinite;
        }
        @keyframes gridPulse { 0%,100%{opacity:.5} 50%{opacity:1} }

        /* ── LIGHTNING STREAKS ── */
        .streak {
            position: absolute; width: 2px; border-radius: 2px;
            background: linear-gradient(180deg, transparent, var(--amber), transparent);
            opacity: 0; animation: streakFall linear infinite;
        }
        .streak:nth-child(1) { left: 12%;  height: 90px;  animation-duration: 3.2s; animation-delay: 0s;   }
        .streak:nth-child(2) { left: 32%;  height: 55px;  animation-duration: 4.1s; animation-delay: 1.3s; }
        .streak:nth-child(3) { left: 62%;  height: 110px; animation-duration: 3.7s; animation-delay: 2.1s; }
        .streak:nth-child(4) { left: 84%;  height: 65px;  animation-duration: 5.0s; animation-delay: 0.7s; }
        .streak:nth-child(5) { left: 7%;   height: 75px;  animation-duration: 4.6s; animation-delay: 1.9s; background: linear-gradient(180deg, transparent, var(--red), transparent); }
        @keyframes streakFall {
            0%   { top: -120px; opacity: 0; }
            10%  { opacity: .7; }
            90%  { opacity: .3; }
            100% { top: 110%;  opacity: 0; }
        }

        /* ── FLOATING PARTICLES ── */
        .particles { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
        .particle  { position: absolute; border-radius: 50%; background: var(--amber); opacity: 0; animation: floatUp linear infinite; }
        .particle:nth-child(1) { width:4px; height:4px; left:10%; animation-duration:6s;  animation-delay:0s;   }
        .particle:nth-child(2) { width:6px; height:6px; left:25%; animation-duration:8s;  animation-delay:1s;   }
        .particle:nth-child(3) { width:3px; height:3px; left:42%; animation-duration:5s;  animation-delay:2s;   }
        .particle:nth-child(4) { width:5px; height:5px; left:60%; animation-duration:7s;  animation-delay:.5s;  }
        .particle:nth-child(5) { width:4px; height:4px; left:76%; animation-duration:9s;  animation-delay:1.5s; }
        .particle:nth-child(6) { width:3px; height:3px; left:89%; animation-duration:6s;  animation-delay:3s;   }
        .particle:nth-child(7) { width:6px; height:6px; left:50%; animation-duration:7s;  animation-delay:2.5s; background: rgba(224,90,0,.7); }
        .particle:nth-child(8) { width:4px; height:4px; left:34%; animation-duration:8s;  animation-delay:4s;   }
        @keyframes floatUp {
            0%   { bottom: -10px; opacity: 0; transform: translateX(0) scale(.5); }
            10%  { opacity: .8; }
            90%  { opacity: .4; }
            100% { bottom: 105%; opacity: 0; transform: translateX(30px) scale(1); }
        }

        /* ── CONTENT ── */
        .preloader-content {
            position: relative; z-index: 10;
            display: flex; flex-direction: column;
            align-items: center;
        }

        /* ── BOLT RING ── */
        .bolt-ring { position: relative; width: 150px; height: 150px; margin-bottom: 36px; }

        .glow-ring {
            position: absolute; inset: -10px; border-radius: 50%;
            border: 2px solid rgba(255, 107, 0, 0.25);
            animation: glowPulse 1.9s ease-in-out infinite;
        }
        @keyframes glowPulse { 0%,100%{ transform:scale(1);   opacity:.3; } 50%{ transform:scale(1.1); opacity:1; } }

        svg.spin-ring {
            position: absolute; inset: 0; width: 100%; height: 100%;
            animation: spinRing 2.5s linear infinite;
        }
        @keyframes spinRing { to { transform: rotate(360deg); } }

        svg.spin-ring circle {
            fill: none; stroke-width: 3.5; stroke-linecap: round;
            stroke-dasharray: 290; stroke-dashoffset: 65;
            stroke: url(#ringGrad);
        }

        .bolt-center {
            position: absolute; inset: 0;
            display: flex; align-items: center; justify-content: center;
        }
        .bolt-center i {
            font-size: 56px; color: var(--amber);
            animation: boltPulse 1.3s ease-in-out infinite;
            filter: drop-shadow(0 0 18px rgba(255, 107, 0, 0.8));
        }
        @keyframes boltPulse {
            0%,100% { transform: scale(1);    filter: drop-shadow(0 0 14px rgba(255, 107, 0, 0.7)); }
            50%      { transform: scale(1.2);  filter: drop-shadow(0 0 34px rgba(255, 107, 0, 1));  }
        }

        /* ── BRAND ── */
        .brand-name {
            font-size: clamp(30px, 5.5vw, 46px); font-weight: 900;
            letter-spacing: 7px; color: var(--white); text-transform: uppercase;
            animation: fadeUp .8s ease .3s both;
        }
        .brand-name span { color: var(--amber); }

        .brand-sub {
            font-size: clamp(11px, 2vw, 14px); font-weight: 400;
            letter-spacing: 5px; color: rgba(255,255,255,.5);
            text-transform: uppercase; margin-top: 8px;
            animation: fadeUp .8s ease .5s both;
        }

        .tagline {
            font-size: 13px; font-weight: 300;
            color: rgba(255,255,255,.38); margin-top: 16px; letter-spacing: 1px;
            animation: fadeUp .8s ease .7s both;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(22px); }
            to   { opacity: 1; transform: translateY(0);    }
        }

        /* ── PROGRESS ── */
        .progress-wrap {
            margin-top: 52px;
            width: clamp(240px, 42vw, 380px);
            animation: fadeUp .8s ease .9s both;
        }
        .progress-labels { display:flex; justify-content:space-between; margin-bottom:10px; }
        .progress-labels span { font-size:11px; letter-spacing:1.5px; color:rgba(255,255,255,.32); text-transform:uppercase; }
        .progress-labels .pct { color: var(--amber); font-weight: 700; }

        .progress-track { width:100%; height:5px; background:rgba(255,255,255,.08); border-radius:99px; overflow:hidden; }
        .progress-fill  { height:100%; width:0%; border-radius:99px; background:linear-gradient(90deg,var(--amber),var(--red)); box-shadow:0 0 14px rgba(255, 107, 0, 0.6); transition:width .05s linear; }

        /* ── DOTS ── */
        .loading-dots { display:flex; gap:10px; margin-top:30px; animation:fadeUp .8s ease 1.1s both; }
        .loading-dots span { width:9px; height:9px; border-radius:50%; background:var(--amber); animation:dotBounce 1.3s ease-in-out infinite; }
        .loading-dots span:nth-child(2) { animation-delay:.22s; }
        .loading-dots span:nth-child(3) { animation-delay:.44s; }
        @keyframes dotBounce { 0%,80%,100%{transform:scale(.55);opacity:.35} 40%{transform:scale(1.25);opacity:1} }
    </style>
</head>
<body>

<div class="preloader" id="preloader">

    <div class="grid-bg"></div>

    <!-- Streaks -->
    <div class="streak"></div>
    <div class="streak"></div>
    <div class="streak"></div>
    <div class="streak"></div>
    <div class="streak"></div>

    <!-- Particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Main content -->
    <div class="preloader-content">

        <!-- Bolt ring icon -->
        <div class="bolt-ring">
            <div class="glow-ring"></div>
            <svg class="spin-ring" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="ringGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%"   stop-color="#FF6B00"/>
                        <stop offset="100%" stop-color="#E05A00"/>
                    </linearGradient>
                </defs>
                <circle cx="75" cy="75" r="68"/>
            </svg>
            <div class="bolt-center">
                <i class="fa-solid fa-bolt-lightning"></i>
            </div>
        </div>

        <!-- Brand name -->
        <div class="brand-name">DAU<span>GLAS</span></div>
        <div class="brand-sub">Electrical Solution</div>
        <div class="tagline">Powering Colombo with Premium Electrical Services</div>

        <!-- Progress bar -->
        <div class="progress-wrap">
            <div class="progress-labels">
                <span>Loading</span>
                <span class="pct" id="pctLabel">0%</span>
            </div>
            <div class="progress-track">
                <div class="progress-fill" id="progressFill"></div>
            </div>
        </div>

        <!-- Animated dots -->
        <div class="loading-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
</div>

<script>
(function () {
    var fill     = document.getElementById('progressFill');
    var label    = document.getElementById('pctLabel');
    var loader   = document.getElementById('preloader');
    var progress = 0;
    var total    = 5000; // total animation ms
    var step     = 30;   // tick interval ms

    function easeOut(t) { return 1 - Math.pow(1 - t, 3); }

    var start    = Date.now();
    var interval = setInterval(function () {
        var elapsed  = Date.now() - start;
        var raw      = Math.min(elapsed / total, 1);
        progress     = Math.round(easeOut(raw) * 100);

        fill.style.width  = progress + '%';
        label.textContent = progress + '%';

        if (progress >= 100) {
            clearInterval(interval);
            setTimeout(function () {
                loader.classList.add('fade-out');
                setTimeout(function () {
                    window.location.href = 'index.php';
                }, 680);
            }, 200);
        }
    }, step);
})();
</script>

</body>
</html>
