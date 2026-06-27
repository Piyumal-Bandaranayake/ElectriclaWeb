<?php
// Include configuration parameters
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fast, reliable and professional home-visit electrical service by <?php echo $business_name; ?>. Licensed electricians offering same-day installations, repairs, and safety checks.">
    <title><?php echo $business_name; ?> | Professional Residential Electrician Services</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons (v6) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>">

<?php if (basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
    <!-- Preloader Styles (home page only) -->
    <style>
        #sitePreloader {
            position: fixed; inset: 0; z-index: 99999;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(255,107,0,.18) 0%, transparent 70%),
                        linear-gradient(160deg, #1A1A1A 0%, #111111 50%, #0D0D0D 100%);
            transition: opacity .65s ease, transform .65s ease;
        }
        #sitePreloader.pl-hidden { opacity: 0; transform: scale(1.05); pointer-events: none; }

        .pl-grid {
            position: absolute; inset: 0;
            background-image: linear-gradient(rgba(255,107,0,.06) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255,107,0,.06) 1px, transparent 1px);
            background-size: 60px 60px;
            animation: plGridPulse 4s ease-in-out infinite;
        }
        @keyframes plGridPulse { 0%,100%{opacity:.5} 50%{opacity:1} }

        .pl-streak {
            position: absolute; width: 2px; border-radius: 2px;
            background: linear-gradient(180deg, transparent, #FF6B00, transparent);
            opacity: 0; animation: plStreakFall linear infinite;
        }
        .pl-streak:nth-child(1){left:12%;height:90px;animation-duration:3.2s;animation-delay:0s}
        .pl-streak:nth-child(2){left:32%;height:55px;animation-duration:4.1s;animation-delay:1.3s}
        .pl-streak:nth-child(3){left:62%;height:110px;animation-duration:3.7s;animation-delay:2.1s}
        .pl-streak:nth-child(4){left:84%;height:65px;animation-duration:5s;animation-delay:.7s}
        .pl-streak:nth-child(5){left:7%;height:75px;animation-duration:4.6s;animation-delay:1.9s;background:linear-gradient(180deg,transparent,#E05A00,transparent)}
        @keyframes plStreakFall{0%{top:-120px;opacity:0}10%{opacity:.7}90%{opacity:.3}100%{top:110%;opacity:0}}

        .pl-particles { position:absolute;inset:0;overflow:hidden;pointer-events:none; }
        .pl-particle  { position:absolute;border-radius:50%;background:#FF6B00;opacity:0;animation:plFloat linear infinite; }
        .pl-particle:nth-child(1){width:4px;height:4px;left:10%;animation-duration:6s;animation-delay:0s}
        .pl-particle:nth-child(2){width:6px;height:6px;left:25%;animation-duration:8s;animation-delay:1s}
        .pl-particle:nth-child(3){width:3px;height:3px;left:42%;animation-duration:5s;animation-delay:2s}
        .pl-particle:nth-child(4){width:5px;height:5px;left:60%;animation-duration:7s;animation-delay:.5s}
        .pl-particle:nth-child(5){width:4px;height:4px;left:76%;animation-duration:9s;animation-delay:1.5s}
        .pl-particle:nth-child(6){width:6px;height:6px;left:50%;animation-duration:7s;animation-delay:2.5s;background:rgba(224,90,0,.7)}
        @keyframes plFloat{0%{bottom:-10px;opacity:0;transform:translateX(0) scale(.5)}10%{opacity:.8}90%{opacity:.4}100%{bottom:105%;opacity:0;transform:translateX(30px) scale(1)}}

        .pl-content { position:relative;z-index:10;display:flex;flex-direction:column;align-items:center; }

        .pl-bolt-ring { position:relative;width:150px;height:150px;margin-bottom:36px; }
        .pl-glow-ring { position:absolute;inset:-10px;border-radius:50%;border:2px solid rgba(255,107,0,.25);animation:plGlow 1.9s ease-in-out infinite; }
        @keyframes plGlow{0%,100%{transform:scale(1);opacity:.3}50%{transform:scale(1.1);opacity:1}}
        svg.pl-spin { position:absolute;inset:0;width:100%;height:100%;animation:plSpin 2.5s linear infinite; }
        @keyframes plSpin{to{transform:rotate(360deg)}}
        svg.pl-spin circle{fill:none;stroke-width:3.5;stroke-linecap:round;stroke-dasharray:290;stroke-dashoffset:65;stroke:url(#plRingGrad)}
        .pl-bolt-center { position:absolute;inset:0;display:flex;align-items:center;justify-content:center; }
        .pl-bolt-center .pl-logo-img { width:80px;height:80px;object-fit:contain;animation:plBolt 1.3s ease-in-out infinite;filter:drop-shadow(0 0 18px rgba(255,107,0,.8)); }
        @keyframes plBolt{0%,100%{transform:scale(1);filter:drop-shadow(0 0 14px rgba(255,107,0,.7))}50%{transform:scale(1.2);filter:drop-shadow(0 0 34px rgba(255,107,0,1))}}

        .pl-brand { font-family:'Poppins',sans-serif;font-size:clamp(28px,5vw,44px);font-weight:900;letter-spacing:7px;color:#fff;text-transform:uppercase;animation:plFadeUp .8s ease .3s both; }
        .pl-brand span { color:#FF6B00; }
        .pl-sub { font-family:'Poppins',sans-serif;font-size:clamp(11px,2vw,14px);font-weight:400;letter-spacing:5px;color:rgba(255,255,255,.5);text-transform:uppercase;margin-top:8px;animation:plFadeUp .8s ease .5s both; }
        .pl-tagline { font-family:'Poppins',sans-serif;font-size:13px;font-weight:300;color:rgba(255,255,255,.38);margin-top:16px;letter-spacing:1px;animation:plFadeUp .8s ease .7s both; }
        @keyframes plFadeUp{from{opacity:0;transform:translateY(22px)}to{opacity:1;transform:translateY(0)}}

        .pl-progress-wrap { margin-top:48px;width:clamp(240px,42vw,380px);animation:plFadeUp .8s ease .9s both; }
        .pl-progress-labels { display:flex;justify-content:space-between;margin-bottom:10px; }
        .pl-progress-labels span { font-family:'Poppins',sans-serif;font-size:11px;letter-spacing:1.5px;color:rgba(255,255,255,.32);text-transform:uppercase; }
        .pl-progress-labels .pl-pct { color:#FF6B00;font-weight:700; }
        .pl-track { width:100%;height:5px;background:rgba(255,255,255,.08);border-radius:99px;overflow:hidden; }
        .pl-fill  { height:100%;width:0%;border-radius:99px;background:linear-gradient(90deg,#FF6B00,#E05A00);box-shadow:0 0 14px rgba(255,107,0,.6);transition:width .05s linear; }

        .pl-dots { display:flex;gap:10px;margin-top:30px;animation:plFadeUp .8s ease 1.1s both; }
        .pl-dots span { width:9px;height:9px;border-radius:50%;background:#FF6B00;animation:plDot 1.3s ease-in-out infinite; }
        .pl-dots span:nth-child(2){animation-delay:.22s}
        .pl-dots span:nth-child(3){animation-delay:.44s}
        @keyframes plDot{0%,80%,100%{transform:scale(.55);opacity:.35}40%{transform:scale(1.25);opacity:1}}
    </style>
<?php endif; ?>
</head>
<body>
 
<?php if (basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
    <!-- ══ SITE PRELOADER OVERLAY (home page only) ══ -->
    <div id="sitePreloader">
        <div class="pl-grid"></div>
        <div class="pl-streak"></div>
        <div class="pl-streak"></div>
        <div class="pl-streak"></div>
        <div class="pl-streak"></div>
        <div class="pl-streak"></div>
        <div class="pl-particles">
            <div class="pl-particle"></div>
            <div class="pl-particle"></div>
            <div class="pl-particle"></div>
            <div class="pl-particle"></div>
            <div class="pl-particle"></div>
            <div class="pl-particle"></div>
        </div>
        <div class="pl-content">
            <div class="pl-bolt-ring">
                <div class="pl-glow-ring"></div>
                <svg class="pl-spin" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="plRingGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#FF6B00"/>
                            <stop offset="100%" stop-color="#E05A00"/>
                        </linearGradient>
                    </defs>
                    <circle cx="75" cy="75" r="68"/>
                </svg>
            <div class="pl-bolt-center">
                    <img src="assets/logo2.png" alt="Logo" class="pl-logo-img">
                </div>
            </div>
            <div class="pl-brand">DAU<span>GLAS</span></div>
            <div class="pl-sub">Electrical Solution</div>
            <div class="pl-tagline">Powering Colombo with Premium Electrical Services</div>
            <div class="pl-progress-wrap">
                <div class="pl-progress-labels">
                    <span>Loading</span>
                    <span class="pl-pct" id="plPct">0%</span>
                </div>
                <div class="pl-track"><div class="pl-fill" id="plFill"></div></div>
            </div>
            <div class="pl-dots"><span></span><span></span><span></span></div>
        </div>
    </div>

    <script>
    (function () {
        document.body.style.overflow = 'hidden';
        var fill   = document.getElementById('plFill');
        var label  = document.getElementById('plPct');
        var loader = document.getElementById('sitePreloader');
        var total  = 5000;
        var step   = 30;
        function easeOut(t) { return 1 - Math.pow(1 - t, 3); }
        var start  = Date.now();
        var timer  = setInterval(function () {
            var pct = Math.round(easeOut(Math.min((Date.now() - start) / total, 1)) * 100);
            fill.style.width  = pct + '%';
            label.textContent = pct + '%';
            if (pct >= 100) {
                clearInterval(timer);
                setTimeout(function () {
                    loader.classList.add('pl-hidden');
                    setTimeout(function () {
                        loader.style.display = 'none';
                        document.body.style.overflow = '';
                    }, 700);
                }, 150);
            }
        }, step);
    })();
    </script>
<?php endif; ?>


    <!-- Sticky Navigation Bar -->
    <header class="navbar">
        <div class="container nav-container">
            <!-- Logo Section -->
            <a href="index.php" class="logo" id="headerLogo" aria-label="<?php echo $business_name; ?> Home">
                <img src="assets/logo2.png" alt="<?php echo $business_name; ?> Logo" class="logo-icon-img">
                <span class="logo-text">
                    DAUGLAS
                    <span class="logo-sub">Electrical Solution</span>
                </span>
            </a>

            <!-- Navigation Menu -->
            <nav class="nav-menu" id="navMenu" aria-label="Main Navigation">
                <a href="index.php" class="nav-link">Home</a>
                <a href="about.php" class="nav-link">About</a>
                <a href="services.php" class="nav-link">Services</a>
                <a href="contact.php" class="nav-link">Contact</a>
            </nav>

            <!-- Navigation Call-to-Action (Visible on desktop) -->
            <div class="nav-cta">
                <a href="tel:<?php echo $phone_number_raw; ?>" class="btn btn-amber btn-pill" id="navCallBtn">
                    <i class="fa-solid fa-phone" aria-hidden="true"></i>
                    <span>Call </span>
                </a>
            </div>

            <!-- Mobile Hamburger Toggle -->
            <button class="hamburger" id="hamburgerToggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
