<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Restaurant El Cojina à La Marsa, cuisine tunisienne authentique, couscous, ojja, pâtes, plats maison et réservation en ligne.">
  <meta name="theme-color" content="#0d0d0d">
  <meta property="og:title" content="Restaurant El Cojina - La Marsa">
  <meta property="og:description" content="Saveurs authentiques de Tunisie dans une ambiance chaleureuse et élégante.">
  <meta property="og:image" content="https://placehold.co/1200x630/1a1200/D4AF37?text=Restaurant+El+Cojina">
  <meta property="og:type" content="website">
  <title>Restaurant El Cojina | الكوجينا</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Cairo:wght@400;600;700&family=Cormorant+Garamond:wght@500;600;700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" defer></script>
  <style>
    /* SECTION: Design Tokens */
    :root {
      color-scheme: dark;
      --bg: #0d0d0d;
      --bg-2: #15110d;
      --surface: rgba(22, 18, 13, 0.88);
      --surface-solid: #17120d;
      --surface-soft: rgba(255, 255, 255, 0.055);
      --text: #f7edd9;
      --muted: #c9bda5;
      --gold: #d4af37;
      --gold-2: #f1d77a;
      --copper: #b86f3b;
      --teal: #1f7972;
      --olive: #72824b;
      --terracotta: #9f4d35;
      --danger: #d95f4f;
      --success: #72b47d;
      --border: rgba(212, 175, 55, 0.28);
      --shadow: 0 22px 70px rgba(0, 0, 0, 0.38);
      --radius: 8px;
      --header-h: 74px;
      --sticky-tabs-h: 58px;
      --serif: "Cormorant Garamond", Georgia, serif;
      --body: "Lato", Arial, sans-serif;
      --arabic: "Cairo", "Amiri", serif;
    }

    body.light {
      color-scheme: light;
      --bg: #faf6ed;
      --bg-2: #f0e2c8;
      --surface: rgba(255, 252, 245, 0.92);
      --surface-solid: #fffaf0;
      --surface-soft: rgba(44, 26, 14, 0.055);
      --text: #2c1a0e;
      --muted: #6f5c44;
      --border: rgba(162, 118, 26, 0.28);
      --shadow: 0 20px 58px rgba(99, 69, 31, 0.18);
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; background: var(--bg); }

    body {
      margin: 0;
      font-family: var(--body);
      background:
        linear-gradient(180deg, rgba(15, 11, 8, 0.55), transparent 420px),
        radial-gradient(circle at 12% 4%, rgba(212, 175, 55, 0.08), transparent 28rem),
        var(--bg);
      color: var(--text);
      line-height: 1.65;
      transition: background-color 400ms ease, color 400ms ease;
      overflow-x: hidden;
    }

    body.lang-ar { font-family: var(--arabic); }
    a { color: inherit; text-decoration: none; }
    img { display: block; max-width: 100%; }
    button, input, select, textarea { font: inherit; }
    button { cursor: pointer; }
    ::selection { background: rgba(212, 175, 55, 0.35); color: var(--text); }

    .page-fade { opacity: 0; transform: translateY(10px); animation: pageIn 700ms ease forwards; }
    @keyframes pageIn { to { opacity: 1; transform: translateY(0); } }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        scroll-behavior: auto !important;
        transition-duration: 0.01ms !important;
      }
    }

    /* SECTION: Layout */
    .container { width: min(1180px, calc(100% - 32px)); margin: 0 auto; }
    .section { position: relative; padding: 92px 0; }
    .section.compact { padding: 70px 0; }

    .section-kicker {
      display: inline-flex; gap: 10px; align-items: center;
      margin-bottom: 10px; color: var(--gold-2);
      font-size: 0.78rem; font-weight: 900; letter-spacing: 0.14em; text-transform: uppercase;
    }
    .section-kicker::before { content: ""; width: 28px; height: 1px; background: var(--gold); }

    .section-title {
      margin: 0; font-family: var(--serif);
      font-size: clamp(2.3rem, 6vw, 4.9rem); line-height: 0.94;
    }

    body.lang-ar .section-title,
    body.lang-ar .brand-title,
    body.lang-ar .hero-title,
    body.lang-ar .card-title { font-family: "Amiri", var(--arabic); line-height: 1.16; }

    .section-lead { max-width: 710px; margin: 18px 0 0; color: var(--muted); font-size: 1.08rem; }

    .ornament { position: relative; width: min(260px, 60%); height: 26px; margin: 28px auto 0; overflow: hidden; }
    .ornament::before, .ornament::after {
      content: ""; position: absolute; top: 50%; width: 44%; height: 1px;
      background: linear-gradient(90deg, transparent, var(--gold), transparent);
      animation: shimmerLine 2.6s ease-in-out infinite;
    }
    .ornament::before { left: 0; }
    .ornament::after { right: 0; animation-delay: 0.4s; }
    .ornament span {
      position: absolute; inset: 0; margin: auto; width: 10px; height: 10px;
      border: 1px solid var(--gold); transform: rotate(45deg);
      box-shadow: 0 0 18px rgba(212, 175, 55, 0.44);
    }
    @keyframes shimmerLine {
      0%, 100% { opacity: 0.45; transform: scaleX(0.86); }
      50% { opacity: 1; transform: scaleX(1); }
    }

    .reveal { opacity: 0; transform: translateY(24px); transition: opacity 700ms ease, transform 700ms ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    .reveal[data-delay="1"] { transition-delay: 90ms; }
    .reveal[data-delay="2"] { transition-delay: 180ms; }
    .reveal[data-delay="3"] { transition-delay: 270ms; }

    /* SECTION: Header */
    .site-header {
      position: sticky; top: 0; z-index: 50; height: var(--header-h);
      background: color-mix(in srgb, var(--bg) 84%, transparent);
      border-bottom: 1px solid rgba(212, 175, 55, 0.16);
      backdrop-filter: blur(18px);
    }

    .nav-shell { height: 100%; display: flex; align-items: center; justify-content: space-between; gap: 18px; }

    .brand { display: inline-flex; align-items: center; gap: 12px; min-width: 190px; }
    .brand-mark {
      display: grid; place-items: center; width: 42px; aspect-ratio: 1;
      border: 1px solid var(--border); border-radius: 50%;
      background: linear-gradient(135deg, rgba(212, 175, 55, 0.22), rgba(184, 111, 59, 0.12));
      color: var(--gold); box-shadow: inset 0 0 18px rgba(212, 175, 55, 0.14);
    }
    .brand-title { display: block; font-family: var(--serif); font-size: 1.55rem; font-weight: 700; line-height: 1; }
    .brand-sub { display: block; color: var(--muted); font-size: 0.74rem; letter-spacing: 0.16em; text-transform: uppercase; }

    .nav-links { display: flex; align-items: center; justify-content: center; gap: 2px; }
    .nav-links a {
      position: relative; padding: 10px 12px; color: var(--muted);
      font-size: 0.91rem; font-weight: 700; transition: color 200ms ease;
    }
    .nav-links a::after {
      content: ""; position: absolute; left: 12px; right: 12px; bottom: 6px;
      height: 1px; background: var(--gold); transform: scaleX(0);
      transform-origin: center; transition: transform 220ms ease;
    }
    .nav-links a:hover, .nav-links a:focus-visible { color: var(--text); }
    .nav-links a:hover::after, .nav-links a:focus-visible::after { transform: scaleX(1); }

    .nav-actions { display: flex; align-items: center; gap: 8px; }

    .icon-button, .hamburger {
      display: inline-grid; place-items: center; width: 42px; aspect-ratio: 1;
      border: 1px solid var(--border); border-radius: var(--radius);
      background: var(--surface-soft); color: var(--text);
      transition: transform 180ms ease, border-color 180ms ease, color 180ms ease;
    }
    .icon-button:hover, .hamburger:hover { transform: translateY(-1px); border-color: var(--gold); color: var(--gold-2); }

    .lang-switch {
      min-width: 76px; padding: 0 10px;
      display: inline-flex; gap: 6px; align-items: center; justify-content: center;
      font-weight: 900; font-size: 0.8rem;
    }
    .hamburger { display: none; }

    /* SECTION: STICKY MENU TABS BAR */
    .sticky-tabs-bar {
      position: sticky;
      top: var(--header-h);
      z-index: 40;
      background: color-mix(in srgb, var(--bg) 92%, transparent);
      border-bottom: 1px solid rgba(212, 175, 55, 0.18);
      backdrop-filter: blur(18px);
      height: var(--sticky-tabs-h);
      display: none; /* shown only when menu section is in viewport or below */
    }
    .sticky-tabs-bar.visible { display: block; }

    .sticky-tabs-inner {
      height: 100%;
      display: flex;
      align-items: center;
      gap: 8px;
      overflow-x: auto;
      scrollbar-width: none;
      padding: 0 4px;
    }
    .sticky-tabs-inner::-webkit-scrollbar { display: none; }

    .sticky-tab-btn {
      flex: 0 0 auto;
      min-height: 36px;
      padding: 0 14px;
      border: 1px solid var(--border);
      border-radius: var(--radius);
      background: var(--surface);
      color: var(--muted);
      font-weight: 900;
      font-size: 0.88rem;
      transition: color 180ms ease, border-color 180ms ease, background 180ms ease;
      white-space: nowrap;
    }
    .sticky-tab-btn:hover, .sticky-tab-btn.active {
      color: var(--text);
      border-color: var(--gold);
      background: rgba(212, 175, 55, 0.1);
    }
    .sticky-tab-btn.active { color: var(--gold-2); }

    /* SECTION: Hero */
    .hero {
      position: relative; min-height: calc(100vh - 34px);
      display: grid; align-items: center; overflow: hidden;
      isolation: isolate; border-bottom: 1px solid rgba(212, 175, 55, 0.14);
    }
    .hero::before {
      content: ""; position: absolute; inset: -12% 0 -8%; z-index: -2;
      background:
        linear-gradient(90deg, rgba(10, 8, 5, 0.92), rgba(10, 8, 5, 0.58) 48%, rgba(10, 8, 5, 0.82)),
        url("https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1800&q=82") center/cover;
      transform: translateY(var(--hero-shift, 0px)) scale(1.03);
      will-change: transform;
    }
    .hero::after {
      content: ""; position: absolute; inset: auto 0 0; height: 36%; z-index: -1;
      background: linear-gradient(0deg, var(--bg), transparent);
    }

    .hero-content { width: min(960px, 100%); padding: calc(var(--header-h) + 36px) 0 62px; }
    .hero-eyebrow {
      display: inline-flex; align-items: center; gap: 10px; margin-bottom: 18px;
      color: var(--gold-2); font-size: 0.82rem; font-weight: 900; letter-spacing: 0.18em; text-transform: uppercase;
    }
    .hero-eyebrow::before { content: ""; width: 38px; height: 1px; background: var(--gold); }

    .hero-title {
      margin: 0; font-family: var(--serif);
      font-size: clamp(4rem, 12vw, 9.4rem); line-height: 0.86; max-width: 900px;
      text-shadow: 0 22px 72px rgba(0, 0, 0, 0.6);
    }
    .hero-ar {
      display: block; margin-top: 14px;
      font-family: "Amiri", var(--arabic); font-size: clamp(2.3rem, 6.6vw, 5.8rem);
      color: var(--gold-2); line-height: 1.05;
    }
    .hero-lead { max-width: 660px; margin: 28px 0 0; color: #f7ead1; font-size: clamp(1.05rem, 2vw, 1.28rem); }
    .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 34px; }
    .hero-meta { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 30px; }
    .hero-chip {
      display: inline-flex; align-items: center; gap: 8px; padding: 9px 12px;
      border: 1px solid rgba(212, 175, 55, 0.28); border-radius: var(--radius);
      background: rgba(12, 10, 8, 0.42); color: #f6ead2; font-size: 0.92rem;
    }
    .scroll-cue {
      position: absolute; left: 50%; bottom: 16px; display: inline-grid; place-items: center;
      width: 38px; aspect-ratio: 1; transform: translateX(-50%);
      border: 1px solid rgba(212, 175, 55, 0.32); border-radius: 50%; color: var(--gold-2);
      animation: floatCue 1.8s ease-in-out infinite;
    }
    @keyframes floatCue { 0%, 100% { transform: translate(-50%, 0); } 50% { transform: translate(-50%, 7px); } }

    /* SECTION: Buttons */
    .btn {
      display: inline-flex; align-items: center; justify-content: center; gap: 10px;
      min-height: 46px; padding: 0 18px; border: 1px solid var(--border);
      border-radius: var(--radius); background: var(--surface-soft); color: var(--text);
      font-weight: 900; transition: transform 180ms ease, box-shadow 180ms ease, border-color 180ms ease, background 180ms ease;
    }
    .btn:hover, .btn:focus-visible { transform: translateY(-2px); border-color: var(--gold); box-shadow: 0 14px 34px rgba(212, 175, 55, 0.16); }
    .btn.primary { background: linear-gradient(135deg, var(--gold), #9e6e18); border-color: rgba(241, 215, 122, 0.72); color: #1d1208; }
    .btn.ghost { background: rgba(0, 0, 0, 0.18); }
    .btn.danger { border-color: rgba(217, 95, 79, 0.42); color: #ffd6d0; }
    body.light .btn.danger { color: #7b2117; }
    .btn.small { min-height: 36px; padding: 0 12px; font-size: 0.86rem; }
    .btn.whatsapp { background: linear-gradient(135deg, #25d366, #128c52); border-color: rgba(37,211,102,0.5); color: #fff; }

    /* SECTION: About */
    .about-grid { display: grid; grid-template-columns: minmax(0, 1fr) minmax(320px, 0.82fr); gap: 46px; align-items: center; }
    .about-visual {
      position: relative; overflow: hidden; min-height: 480px;
      border: 1px solid var(--border); border-radius: var(--radius);
      background:
        linear-gradient(180deg, rgba(13, 13, 13, 0.08), rgba(13, 13, 13, 0.82)),
        url("https://images.unsplash.com/photo-1543352634-a1c51d9f1fa7?auto=format&fit=crop&w=1000&q=80") center/cover;
      box-shadow: var(--shadow);
    }
    .about-plate {
      position: absolute; left: 18px; right: 18px; bottom: 18px; padding: 18px;
      border: 1px solid rgba(212, 175, 55, 0.22); border-radius: var(--radius);
      background: rgba(13, 13, 13, 0.72); backdrop-filter: blur(14px);
    }
    .about-plate strong { display: block; font-family: var(--serif); font-size: 1.55rem; color: var(--gold-2); }

    .stats-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; margin-top: 34px; }
    .stat-card { padding: 18px; border: 1px solid var(--border); border-radius: var(--radius); background: var(--surface); box-shadow: 0 16px 42px rgba(0, 0, 0, 0.16); }
    .stat-value { display: block; color: var(--gold-2); font-family: var(--serif); font-size: 2.4rem; font-weight: 700; line-height: 1; }
    .stat-label { color: var(--muted); font-size: 0.88rem; font-weight: 700; }

    /* SECTION: Daily Special */
    .daily-wrap {
      overflow: hidden; border: 1px solid var(--border); border-radius: var(--radius);
      background:
        linear-gradient(135deg, rgba(212, 175, 55, 0.13), transparent 32%),
        linear-gradient(180deg, var(--surface), color-mix(in srgb, var(--surface-solid) 74%, transparent));
      box-shadow: var(--shadow);
    }
    .daily-card {
      position: relative; display: grid;
      grid-template-columns: minmax(280px, 0.88fr) minmax(0, 1fr);
      gap: 0; min-height: 430px;
    }
    .daily-card::after {
      content: ""; position: absolute; inset: 1px; pointer-events: none;
      border-radius: var(--radius);
      background: linear-gradient(120deg, transparent, rgba(241, 215, 122, 0.24), transparent);
      transform: translateX(-100%); animation: goldSweep 4.6s ease-in-out infinite;
    }
    @keyframes goldSweep {
      0%, 42% { transform: translateX(-105%); opacity: 0; }
      58% { opacity: 1; }
      100% { transform: translateX(105%); opacity: 0; }
    }
    .daily-media { min-height: 360px; background-size: cover; background-position: center; }
    .daily-content { padding: clamp(28px, 5vw, 54px); }
    .badge-pulse {
      display: inline-flex; align-items: center; gap: 8px; padding: 7px 11px; border-radius: 999px;
      background: rgba(212, 175, 55, 0.17); color: var(--gold-2);
      border: 1px solid rgba(212, 175, 55, 0.36); font-size: 0.76rem; font-weight: 900;
      letter-spacing: 0.12em; text-transform: uppercase; animation: badgePulse 1.9s ease-in-out infinite;
    }
    @keyframes badgePulse {
      0%, 100% { box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.22); }
      50% { box-shadow: 0 0 0 9px rgba(212, 175, 55, 0); }
    }
    .daily-title { margin: 20px 0 8px; font-family: var(--serif); font-size: clamp(2.1rem, 5vw, 4.2rem); line-height: 0.96; }
    .daily-ar { display: block; margin-top: 8px; color: var(--gold-2); font-family: "Amiri", var(--arabic); font-size: 0.72em; }
    .daily-price { display: inline-flex; margin-top: 18px; align-items: baseline; gap: 6px; color: var(--gold-2); font-family: var(--serif); font-size: 2rem; font-weight: 700; }

    .notify-form, .reservation-form { display: grid; gap: 12px; margin-top: 22px; }
    .inline-form { display: grid; grid-template-columns: minmax(0, 1fr) auto; gap: 10px; }

    .field, .textarea, .select {
      width: 100%; min-height: 46px; padding: 0 13px;
      border: 1px solid var(--border); border-radius: var(--radius);
      background: color-mix(in srgb, var(--surface-solid) 88%, transparent);
      color: var(--text); outline: none;
      transition: border-color 180ms ease, box-shadow 180ms ease, background 180ms ease;
    }
    .textarea { min-height: 112px; resize: vertical; padding-top: 12px; }
    .field:focus, .textarea:focus, .select:focus { border-color: var(--gold); box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.12); }
    .form-label { display: grid; gap: 6px; color: var(--muted); font-size: 0.86rem; font-weight: 900; }

    /* SECTION: Opening Hours Table */
    .hours-table { width: 100%; border-collapse: collapse; margin-top: 12px; }
    .hours-table tr { border-bottom: 1px solid rgba(212, 175, 55, 0.12); }
    .hours-table tr:last-child { border-bottom: none; }
    .hours-table td { padding: 8px 4px; font-size: 0.92rem; color: var(--muted); }
    .hours-table td:first-child { font-weight: 700; color: var(--text); }
    .hours-table td:last-child { text-align: end; }
    .hours-table .closed { color: var(--danger); }
    .hours-table .today-row td { color: var(--gold-2); }

    /* SECTION: Menu */
    .menu-head { display: grid; grid-template-columns: minmax(0, 1fr) minmax(280px, 430px); gap: 22px; align-items: end; }
    .search-shell { position: relative; }
    .search-shell i { position: absolute; top: 50%; inset-inline-start: 14px; transform: translateY(-50%); color: var(--gold); }
    .search-shell .field { padding-inline-start: 42px; }

    .tabs {
      position: relative; display: flex; gap: 8px; margin: 30px 0 26px;
      padding-bottom: 8px; overflow-x: auto; scrollbar-width: thin;
    }
    .tab-button {
      position: relative; flex: 0 0 auto; min-height: 42px; padding: 0 14px;
      border: 1px solid var(--border); border-radius: var(--radius);
      background: var(--surface); color: var(--muted); font-weight: 900;
      transition: color 180ms ease, border-color 180ms ease, transform 180ms ease;
    }
    .tab-button:hover, .tab-button.active { color: var(--text); border-color: var(--gold); transform: translateY(-1px); }
    .tab-indicator { position: absolute; bottom: 0; height: 2px; width: 42px; background: linear-gradient(90deg, transparent, var(--gold), transparent); transition: transform 240ms ease, width 240ms ease; }

    .menu-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }

    .dish-card {
      position: relative; overflow: hidden; min-height: 100%;
      border: 1px solid var(--border); border-radius: var(--radius);
      background: var(--surface); box-shadow: 0 18px 48px rgba(0, 0, 0, 0.18);
      transition: transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
    }
    .dish-card:hover { transform: translateY(-6px); border-color: var(--gold); box-shadow: 0 24px 68px rgba(212, 175, 55, 0.18); }

    .dish-media { position: relative; min-height: 156px; background: var(--bg-2); overflow: hidden; }
    .dish-media img {
      display: block; width: 100%; height: 100%; min-height: 156px; object-fit: cover;
    }

    .dish-badge {
      position: absolute; top: 12px; inset-inline-start: 12px; z-index: 2;
      display: inline-flex; align-items: center; gap: 6px; padding: 5px 9px;
      border-radius: 999px; background: rgba(0, 0, 0, 0.52); color: var(--gold-2);
      border: 1px solid rgba(212, 175, 55, 0.34); font-size: 0.72rem; font-weight: 900;
    }
    .sold-out { color: #ffd5d0; border-color: rgba(217, 95, 79, 0.55); background: rgba(122, 27, 20, 0.62); }

    .dish-body { display: grid; gap: 10px; padding: 18px; }
    .dish-top { display: flex; gap: 12px; justify-content: space-between; align-items: start; }
    .card-title { margin: 0; font-family: var(--serif); font-size: 1.55rem; line-height: 1; }
    .arabic-name { display: block; margin-top: 4px; color: var(--muted); font-family: "Amiri", var(--arabic); font-size: 1.05rem; line-height: 1.3; }
    .price {
      flex: 0 0 auto; display: inline-flex; align-items: center; justify-content: center;
      min-width: 58px; min-height: 38px; padding: 0 10px;
      border: 1px solid rgba(212, 175, 55, 0.36); border-radius: var(--radius);
      color: var(--gold-2); font-weight: 900; white-space: nowrap;
    }
    .dish-desc { margin: 0; color: var(--muted); font-size: 0.94rem; }

    mark { padding: 0 2px; background: rgba(212, 175, 55, 0.3); color: var(--gold-2); border-radius: 3px; }

    .rating-line { display: flex; align-items: center; justify-content: space-between; gap: 12px; color: var(--muted); font-size: 0.88rem; }
    .stars { display: inline-flex; gap: 2px; color: var(--gold); letter-spacing: 0; }

    .empty-state {
      grid-column: 1 / -1; min-height: 180px; display: grid; place-items: center;
      text-align: center; border: 1px dashed var(--border); border-radius: var(--radius);
      color: var(--muted); animation: emptyPulse 1.8s ease-in-out infinite;
    }
    @keyframes emptyPulse { 0%, 100% { border-color: var(--border); } 50% { border-color: var(--gold); } }

    /* SECTION: Builder — Multi-select */
    .builder-grid { display: grid; grid-template-columns: minmax(0, 1fr) 330px; gap: 20px; align-items: start; }
    .builder-steps { display: grid; gap: 18px; }

    .builder-step,
    .summary-panel,
    .reservation-panel,
    .review-card,
    .find-card,
    .admin-card {
      border: 1px solid var(--border); border-radius: var(--radius);
      background: var(--surface); box-shadow: 0 16px 42px rgba(0, 0, 0, 0.14);
    }
    .builder-step { padding: 18px; }
    .step-head { display: flex; align-items: center; justify-content: space-between; gap: 12px; margin-bottom: 12px; }
    .step-title { margin: 0; font-family: var(--serif); font-size: 1.55rem; line-height: 1; }
    .step-hint { font-size: 0.8rem; color: var(--muted); }

    .table-badge { display: inline-flex; align-items: center; gap: 8px; padding: 8px 10px; border: 1px solid rgba(212, 175, 55, 0.42); border-radius: var(--radius); color: var(--gold-2); font-weight: 900; }

    /* Multi-select cards */
    .builder-options { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
    .select-card {
      position: relative; min-height: 80px; padding: 10px 12px;
      border: 1px solid var(--border); border-radius: var(--radius);
      background: color-mix(in srgb, var(--surface-solid) 84%, transparent);
      color: var(--text); text-align: start;
      transition: border-color 180ms ease, transform 180ms ease, background 180ms ease;
    }
    .select-card:hover { border-color: rgba(212, 175, 55, 0.6); transform: translateY(-2px); }
    .select-card.selected {
      border-color: var(--gold);
      background: rgba(212, 175, 55, 0.12);
      box-shadow: 0 0 0 1px var(--gold);
    }
    .select-card .check-icon {
      position: absolute; top: 7px; inset-inline-end: 7px;
      width: 18px; height: 18px; border-radius: 50%;
      background: var(--gold); color: #1d1208;
      display: none; place-items: center; font-size: 0.68rem;
    }
    .select-card.selected .check-icon { display: grid; }
    .select-card strong { display: block; line-height: 1.18; font-size: 0.9rem; }
    .select-card span { display: block; margin-top: 3px; color: var(--muted); font-size: 0.82rem; }
    .select-count { display: inline-flex; align-items: center; gap: 6px; padding: 4px 10px; border-radius: 999px; background: rgba(212, 175, 55, 0.15); color: var(--gold-2); font-size: 0.78rem; font-weight: 900; }

    .summary-panel { position: sticky; top: calc(var(--header-h) + var(--sticky-tabs-h) + 18px); padding: 18px; }
    .summary-row { display: flex; justify-content: space-between; gap: 14px; padding: 10px 0; border-bottom: 1px solid rgba(212, 175, 55, 0.14); color: var(--muted); }
    .summary-row strong { color: var(--text); }
    .summary-items { font-size: 0.86rem; color: var(--muted); margin-top: 2px; }
    .total { display: flex; align-items: baseline; justify-content: space-between; gap: 12px; margin: 18px 0; color: var(--gold-2); font-family: var(--serif); font-size: 2.2rem; font-weight: 700; }
    .order-confirm { margin-top: 12px; padding: 12px; border: 1px solid rgba(114, 180, 125, 0.38); border-radius: var(--radius); color: var(--success); background: rgba(114, 180, 125, 0.08); }

    /* SECTION: Reservation */
    .reservation-grid { display: grid; grid-template-columns: minmax(0, 0.82fr) minmax(300px, 1fr); gap: 30px; align-items: start; }
    .reservation-panel { padding: 20px; }
    .form-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px; }
    .form-grid .wide { grid-column: 1 / -1; }

    .map-frame { overflow: hidden; min-height: 460px; border: 1px solid var(--border); border-radius: var(--radius); background: var(--surface); box-shadow: var(--shadow); }
    .map-frame iframe { display: block; width: 100%; min-height: 460px; border: 0; filter: saturate(0.88) contrast(0.98); }

    /* SECTION: Rating Modal */
    .rate-btn {
      display: inline-flex; align-items: center; gap: 6px;
      padding: 5px 10px; border: 1px solid var(--border); border-radius: 999px;
      background: transparent; color: var(--muted); font-size: 0.8rem; font-weight: 700;
      transition: border-color 180ms, color 180ms, background 180ms;
      cursor: pointer;
    }
    .rate-btn:hover { border-color: var(--gold); color: var(--gold-2); background: rgba(212,175,55,0.08); }

    .star-picker { display: flex; gap: 6px; justify-content: center; margin: 18px 0 8px; }
    .star-picker button {
      background: none; border: none; font-size: 2.2rem; color: var(--border);
      cursor: pointer; transition: color 150ms, transform 150ms;
      line-height: 1; padding: 0 2px;
    }
  
.star-picker {
    display: flex;
    justify-content: center;
    gap: 6px;
}

.star-picker button {
    background: none;
    border: none;
    font-size: 2.2rem;
    cursor: pointer;
    color: rgba(212,175,55,.25);
    transition: .2s;
}
.star-picker button.lit {
    color: var(--gold);
    transform: scale(1.15);
}

.star-picker button.active {
    color: var(--gold);
}

.star-picker button:hover {
    transform: scale(1.15);
}
    .rate-dish-name { font-family: var(--serif); font-size: 1.5rem; text-align: center; margin: 0 0 4px; }
    .rate-chosen { text-align: center; color: var(--gold-2); font-weight: 900; font-size: 1rem; min-height: 1.4em; margin-bottom: 4px; }

    /* SECTION: Reviews — Admin Only */
    .reviews-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; margin-top: 28px; }
    .review-card { padding: 18px; }
    .review-card p { margin: 12px 0; color: var(--muted); }
    .review-meta { display: flex; justify-content: space-between; gap: 12px; color: var(--muted); font-size: 0.86rem; }

    /* SECTION: Find Us */
    .find-grid { display: grid; grid-template-columns: minmax(300px, 0.82fr) minmax(0, 1fr); gap: 24px; align-items: stretch; }
    .find-card { padding: 22px; }
    .contact-list { display: grid; gap: 14px; margin: 24px 0; }
    .contact-list a, .contact-item { display: flex; align-items: flex-start; gap: 12px; color: var(--muted); }
    .contact-list i { width: 22px; margin-top: 5px; color: var(--gold); }
    .social-row { display: flex; flex-wrap: wrap; gap: 10px; }

    /* SECTION: Footer */
    .footer { padding: 38px 0; border-top: 1px solid rgba(212, 175, 55, 0.15); background: color-mix(in srgb, var(--bg-2) 78%, var(--bg)); }
    .footer-grid { display: grid; grid-template-columns: minmax(0, 1fr) auto; gap: 18px; align-items: center; }
    .footer-links { display: flex; flex-wrap: wrap; gap: 12px; color: var(--muted); font-weight: 700; font-size: 0.92rem; }
    .admin-link { border: 0; background: transparent; color: var(--muted); font-weight: 900; }
    .admin-link:hover { color: var(--gold-2); }

    /* SECTION: Modals */
    .modal { position: fixed; inset: 0; z-index: 100; display: none; place-items: center; padding: 18px; background: rgba(0, 0, 0, 0.72); backdrop-filter: blur(10px); }
    .modal.open { display: grid; animation: modalFade 180ms ease; }
    @keyframes modalFade { from { opacity: 0; } to { opacity: 1; } }

    .modal-dialog {
      width: min(560px, 100%); max-height: min(96vh, 820px); overflow: auto;
      border: 1px solid var(--border); border-radius: var(--radius);
      background: var(--surface-solid); color: var(--text); box-shadow: var(--shadow);
      animation: dialogIn 240ms ease;
    }
    @keyframes dialogIn { from { opacity: 0; transform: translateY(14px) scale(0.98); } to { opacity: 1; transform: translateY(0) scale(1); } }

    .modal-head {
      position: sticky; top: 0; z-index: 2; display: flex; justify-content: space-between;
      align-items: center; gap: 12px; padding: 16px 18px;
      border-bottom: 1px solid rgba(212, 175, 55, 0.18);
      background: color-mix(in srgb, var(--surface-solid) 92%, transparent); backdrop-filter: blur(12px);
    }
    .modal-title { margin: 0; font-family: var(--serif); font-size: 1.8rem; line-height: 1; }
    .modal-body { padding: 18px; }

    .star-picker { display: inline-flex; flex-direction: row-reverse; gap: 4px; margin: 8px 0 14px; }
    .star-picker input { position: absolute; opacity: 0; pointer-events: none; }
    .star-picker label { color: rgba(212, 175, 55, 0.28); font-size: 2rem; transition: color 140ms ease, transform 140ms ease; cursor: pointer; }
    .star-picker label:hover,
    .star-picker label:hover ~ label,
    .star-picker input:checked ~ label { color: var(--gold); transform: translateY(-2px); }

    .admin-modal { align-items:flex-start; justify-content:center; padding:6px; }
    .admin-shell {
      width: min(1380px, calc(100vw - 12px)); height: min(96vh, calc(100vh - 12px)); margin: 6px auto 0; display: grid; grid-template-rows: auto minmax(0, 1fr);
      overflow: hidden; border: 1px solid var(--border); border-radius: var(--radius);
      background: var(--surface-solid); box-shadow: var(--shadow);
    }
    .admin-main { min-height: 0; display: grid; grid-template-columns: 230px minmax(0, 1fr); }
    .admin-tabs {
      display: flex; flex-direction: column; gap: 6px; padding: 14px;
      border-inline-end: 1px solid rgba(212, 175, 55, 0.16); overflow: auto;
    }
    .admin-tab {
      min-height: 40px; padding: 0 12px; border: 1px solid transparent; border-radius: var(--radius);
      background: transparent; color: var(--muted); text-align: start; font-weight: 900;
    }
    .admin-tab.active, .admin-tab:hover { border-color: var(--border); background: var(--surface-soft); color: var(--gold-2); }
    .admin-content { min-height: 0; overflow: auto; padding: 18px; }

    .admin-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 12px; }
    .admin-card { padding: 16px; min-height: 128px; }
    .admin-card strong { display: block; color: var(--gold-2); font-size: 1.6rem; line-height: 1.1; }
    .admin-card span, .admin-card small { color: var(--muted); }

    .admin-list { display: grid; gap: 10px; margin-top: 14px; }
    .admin-row {
      display: grid;
      grid-template-columns: minmax(160px, 1fr) minmax(120px, 0.8fr) 90px 90px auto;
      gap: 8px; align-items: center; padding: 10px;
      border: 1px solid rgba(212, 175, 55, 0.18); border-radius: var(--radius); background: var(--surface-soft);
    }
    .admin-row.wide { grid-template-columns: minmax(160px, 1fr) minmax(180px, 1fr) auto; }

    .admin-table { width: 100%; border-collapse: collapse; margin-top: 14px; font-size: 0.92rem; }
    .admin-table th, .admin-table td { padding: 10px; border-bottom: 1px solid rgba(212, 175, 55, 0.16); text-align: start; vertical-align: top; }
    .admin-table th { color: var(--gold-2); font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.08em; }

    /* Feedback section in admin */
    .feedback-preview {
      display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; margin-top: 14px;
    }
    .feedback-card {
      padding: 14px; border: 1px solid rgba(212, 175, 55, 0.18); border-radius: var(--radius);
      background: var(--surface-soft);
    }
    .feedback-card p { margin: 8px 0; color: var(--muted); font-size: 0.9rem; }

    #qr-box { display: grid; place-items: center; width: 118px; aspect-ratio: 1; padding: 8px; background: #fff; border-radius: var(--radius); }

    /* SECTION: Toast */
    .toast {
      position: fixed; inset-inline: 18px auto; bottom: 18px; z-index: 120; display: none;
      max-width: min(420px, calc(100vw - 36px)); padding: 13px 15px;
      border: 1px solid rgba(212, 175, 55, 0.36); border-radius: var(--radius);
      background: var(--surface-solid); color: var(--text); box-shadow: var(--shadow);
    }
    .toast.show { display: block; animation: toastIn 240ms ease; }
    @keyframes toastIn { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }

    /* SECTION: Responsive */
    @media (max-width: 1080px) {
      .menu-grid, .reviews-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .builder-grid, .reservation-grid, .find-grid, .about-grid { grid-template-columns: 1fr; }
      .summary-panel { position: sticky; bottom: 0; top: auto; z-index: 8; }
      .admin-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .feedback-preview { grid-template-columns: 1fr; }
    }

    @media (max-width: 860px) {
      .site-header { height: 68px; }
      .hamburger { display: inline-grid; }
      .nav-links {
        position: fixed; top: 68px; inset-inline: 0; display: none;
        padding: 14px 18px 18px; flex-direction: column; align-items: stretch;
        background: var(--surface-solid); border-bottom: 1px solid var(--border);
      }
      .nav-links.open { display: flex; }
      .nav-links a { padding: 12px; }
      .brand-sub { display: none; }
      .hero { min-height: 92vh; }
      .hero-content { padding-top: 92px; }
      .menu-head, .daily-card { grid-template-columns: 1fr; }
      .daily-media { min-height: 260px; }
      .builder-options { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .admin-main { grid-template-columns: 1fr; grid-template-rows: auto minmax(0, 1fr); }
      .admin-tabs { flex-direction: row; overflow-x: auto; border-inline-end: 0; border-bottom: 1px solid rgba(212, 175, 55, 0.16); }
      .admin-tab { flex: 0 0 auto; }
      .admin-row, .admin-row.wide { grid-template-columns: 1fr; }
      .sticky-tabs-bar { --sticky-tabs-h: 52px; }
    }

    @media (max-width: 620px) {
      .container { width: min(100% - 22px, 1180px); }
      .section { padding: 68px 0; }
      .nav-actions { gap: 5px; }
      .icon-button, .hamburger { width: 38px; }
      .lang-switch { min-width: 62px; font-size: 0.72rem; }
      .hero-actions, .inline-form, .footer-grid, .form-grid { grid-template-columns: 1fr; }
      .hero-actions, .footer-grid { display: grid; }
      .btn, .inline-form .btn { width: 100%; }
      .stats-grid, .menu-grid, .reviews-grid, .builder-options { grid-template-columns: 1fr; }
      .about-visual { min-height: 360px; }
      .admin-grid { grid-template-columns: 1fr; }
      .admin-shell { width: calc(100vw - 12px); height: calc(100vh - 12px); }
    }
  </style>
</head>
<body class="page-fade">

  <!-- SECTION: Header -->
  <header class="site-header" id="top">
    <div class="container nav-shell">
      <a href="#top" class="brand" aria-label="Restaurant El Cojina">
        <span class="brand-mark"><i class="fa-solid fa-utensils"></i></span>
        <span>
          <span class="brand-title">El Cojina</span>
          <span class="brand-sub">La Marsa</span>
        </span>
      </a>
      <nav class="nav-links" id="nav-links" aria-label="Navigation principale">
        <a href="#about" data-i18n="navAbout">Maison</a>
        <a href="#daily" data-i18n="navDaily">Plat du jour</a>
        <a href="#menu" data-i18n="navMenu">Menu</a>
        <a href="#builder" data-i18n="navBuilder">Composer</a>
        <a href="#reservation" data-i18n="navReserve">Réserver</a>
        <a href="#find" data-i18n="navFind">Nous trouver</a>
      </nav>
      <div class="nav-actions">
        <button class="icon-button lang-switch" id="lang-toggle" type="button" aria-label="Changer la langue">
          <span>FR</span><span>|</span><span>ع</span>
        </button>
        <button class="icon-button" id="theme-toggle" type="button" aria-label="Mode sombre / clair">
          <i class="fa-solid fa-moon"></i>
        </button>
        <button class="hamburger" id="menu-toggle" type="button" aria-label="Ouvrir le menu">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- SECTION: Sticky Menu Tabs Bar -->
  <div class="sticky-tabs-bar" id="sticky-tabs-bar" aria-label="Catégories rapides">
    <div class="container sticky-tabs-inner" id="sticky-tabs-inner"></div>
  </div>

  <main>
    <!-- SECTION: Hero -->
    <section class="hero" aria-labelledby="hero-title">
      <div class="container hero-content">
        <div class="hero-eyebrow reveal" data-i18n="heroEyebrow">Cuisine tunisienne à La Marsa</div>
        <h1 class="hero-title reveal" data-delay="1" id="hero-title">
          Restaurant El Cojina
          <span class="hero-ar">مطعم الكوجينا</span>
        </h1>
        <p class="hero-lead reveal" data-delay="2" data-i18n="heroLead">Saveurs authentiques de Tunisie, plats maison généreux et accueil chaleureux au cœur de La Marsa.</p>
        <div class="hero-actions reveal" data-delay="3">
          <a class="btn primary" href="#reservation"><i class="fa-regular fa-calendar-check"></i><span data-i18n="ctaReserve">Réserver une table</span></a>
          <a class="btn ghost" href="#menu"><i class="fa-solid fa-book-open"></i><span data-i18n="ctaMenu">Voir le menu</span></a>
          <a class="btn whatsapp" href="https://wa.me/21622892746" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i><span data-i18n="ctaWhatsapp">WhatsApp</span></a>
        </div>
        <div class="hero-meta reveal" data-delay="3">
          <span class="hero-chip"><i class="fa-solid fa-location-dot"></i> Rue Salambo, La Marsa</span>
          <span class="hero-chip"><i class="fa-solid fa-star"></i> 4.8 Tripadvisor</span>
          <span class="hero-chip"><i class="fa-solid fa-phone"></i> +216 22 892 746</span>
        </div>
      </div>
      <a class="scroll-cue" href="#about" aria-label="Descendre"><i class="fa-solid fa-chevron-down"></i></a>
    </section>

    <!-- SECTION: About -->
    <section class="section" id="about">
      <div class="container about-grid">
        <div class="about-copy reveal">
          <span class="section-kicker" data-i18n="aboutKicker">L'esprit El Cojina</span>
          <h2 class="section-title" data-i18n="aboutTitle">Une table tunisienne, sincère et raffinée.</h2>
          <p class="section-lead" data-i18n="aboutLead">El Cojina met à l'honneur les recettes tunisiennes : couscous parfumé, ojja généreuse, brik croustillant, poisson grillé et plats mijotés comme à la maison.</p>
          <div class="stats-grid">
            <div class="stat-card reveal" data-delay="1"><span class="stat-value counter" data-target="10">0</span><span class="stat-label" data-i18n="statYears">années de passion</span></div>
            <div class="stat-card reveal" data-delay="2"><span class="stat-value counter" data-target="12000">0</span><span class="stat-label" data-i18n="statGuests">clients servis</span></div>
            <div class="stat-card reveal" data-delay="3"><span class="stat-value counter" data-target="4.8" data-decimals="1">0</span><span class="stat-label" data-i18n="statRating">note voyageurs</span></div>
          </div>
        </div>
        <div class="about-visual reveal" data-delay="2" aria-label="Ambiance du restaurant">
          <div class="about-plate">
            <strong data-i18n="aboutVisualTitle">Cuisine de tradition</strong>
            <span data-i18n="aboutVisualText">Produits frais, sauces mijotées et gestes transmis de génération en génération.</span>
          </div>
        </div>
      </div>
      <div class="ornament" aria-hidden="true"><span></span></div>
    </section>

    <!-- SECTION: Daily Special -->
    <section class="section compact" id="daily">
      <div class="container">
        <div class="reveal">
          <span class="section-kicker" data-i18n="dailyKicker">Aujourd'hui</span>
          <h2 class="section-title" data-i18n="dailyHeading">Le plat du jour</h2>
          <p class="section-lead" data-i18n="dailyLead">Un rendez-vous gourmand mis à jour chaque jour par l'équipe.</p>
        </div>
        <div class="daily-wrap reveal" data-delay="1" id="daily-container"></div>
      </div>
    </section>

    <!-- SECTION: Menu -->
    <section class="section" id="menu">
      <div class="container">
        <div class="menu-head reveal">
          <div>
            <span class="section-kicker" data-i18n="menuKicker">Carte complète</span>
            <h2 class="section-title" data-i18n="menuHeading">Menu & spécialités</h2>
            <p class="section-lead" data-i18n="menuLead">Entrées, pâtes, ojjas, plats chauds et couscous. Prix en dinars tunisiens.</p>
          </div>
          <label class="search-shell" for="menu-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input class="field" id="menu-search" type="search" autocomplete="off" data-i18n-placeholder="searchPlaceholder" placeholder="Rechercher un plat...">
          </label>
        </div>
        <div class="tabs reveal" data-delay="1" id="menu-tabs" role="tablist" aria-label="Catégories"></div>
        <div class="menu-grid reveal" data-delay="2" id="menu-grid"></div>
      </div>
    </section>

    <!-- SECTION: Meal Builder — Multi-select -->
    <section class="section compact" id="builder">
      <div class="container">
        <div class="reveal">
          <span class="section-kicker" data-i18n="builderKicker">Commande à table</span>
          <h2 class="section-title" data-i18n="builderHeading">Composez votre assiette</h2>
          <p class="section-lead" data-i18n="builderLead">Choisissez votre table, vos entrées, vos plats et un extra. Le total se met à jour instantanément.</p>
        </div>
        <div class="builder-grid reveal" data-delay="1">
          <div class="builder-steps" id="builder-steps"></div>
          <aside class="summary-panel" id="builder-summary" aria-live="polite"></aside>
        </div>
      </div>
    </section>

    <!-- SECTION: Reservation -->
    <section class="section" id="reservation">
      <div class="container reservation-grid">
        <div class="reveal">
          <span class="section-kicker" data-i18n="reserveKicker">Votre table</span>
          <h2 class="section-title" data-i18n="reserveHeading">Réservation</h2>
          <p class="section-lead" data-i18n="reserveLead">Envoyez votre demande en quelques secondes. L'équipe vous contactera pour confirmer.</p>
        </div>
        <div class="reservation-panel reveal" data-delay="1">
          <form class="reservation-form" id="reservation-form">
            <div class="form-grid">
              <label class="form-label"><span data-i18n="labelName">Nom</span><input class="field" name="name" required autocomplete="name"></label>
              <label class="form-label"><span data-i18n="labelPhone">Téléphone</span><input class="field" name="phone" required autocomplete="tel"></label>
              <label class="form-label"><span data-i18n="labelDate">Date</span><input class="field" name="date" type="date" required></label>
              <label class="form-label"><span data-i18n="labelTime">Heure</span><select class="select" name="time" id="time-select" required></select></label>
              <label class="form-label"><span data-i18n="labelGuests">Invités</span><input class="field" name="guests" type="number" min="1" max="20" step="1" value="2" required></label>
              <label class="form-label wide"><span data-i18n="labelRequests">Demandes spéciales</span><textarea class="textarea" name="requests" placeholder="Allergies, occasion, préférences..."></textarea></label>
            </div>
            <button class="btn primary" type="submit"><i class="fa-regular fa-paper-plane"></i><span data-i18n="sendReservation">Envoyer la demande</span></button>
            <div id="reservation-confirm" aria-live="polite"></div>
          </form>
        </div>
      </div>
    </section>

    <!-- SECTION: Find Us -->
    <section class="section" id="find">
      <div class="container find-grid">
        <div class="find-card reveal">
          <span class="section-kicker" data-i18n="findKicker">Nous trouver</span>
          <h2 class="section-title" data-i18n="findHeading">Au cœur de La Marsa</h2>
          <div class="contact-list">
            <a href="https://maps.app.goo.gl/FJZpoBCs1a96jchK6" target="_blank" rel="noopener"><i class="fa-solid fa-location-dot"></i><span>Rue Salambo, La Marsa, Tunisie</span></a>
            <a href="tel:+21622892746"><i class="fa-solid fa-phone"></i><span>+216 22 892 746</span></a>
            <a href="https://wa.me/21622892746" target="_blank" rel="noopener" style="color: #25d366;"><i class="fa-brands fa-whatsapp"></i><span data-i18n="whatsappText">Écrire sur WhatsApp</span></a>
            <div class="contact-item"><i class="fa-regular fa-clock"></i>
              <div>
                <strong data-i18n="hoursTitle">Horaires d'ouverture</strong>
                <table class="hours-table" id="hours-table"></table>
              </div>
            </div>
          </div>
          <div class="social-row">
            <a class="btn small" href="https://www.instagram.com/elcojina/" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i> Instagram</a>
            <a class="btn small" href="https://maps.app.goo.gl/FJZpoBCs1a96jchK6" target="_blank" rel="noopener"><i class="fa-solid fa-map-location-dot"></i> Google Maps</a>
            <a class="btn small whatsapp" href="https://wa.me/21622892746" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
          </div>
        </div>
        <div class="map-frame reveal" data-delay="1">
          <iframe
            title="Carte Restaurant El Cojina La Marsa"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793.1!2d10.3308707!3d36.8843081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2b5dc8fe01e53%3A0x6ae67a7671bc3e5!2sLa%20Cojina!5e0!3m2!1sfr!2stn!4v1700000000000!5m2!1sfr!2stn">
          </iframe>
        </div>
      </div>
    </section>
  </main>

  <!-- SECTION: Footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <strong class="brand-title">Restaurant El Cojina</strong>
        <div class="footer-links">
          <a href="#daily" data-i18n="navDaily">Plat du jour</a>
          <a href="#menu" data-i18n="navMenu">Menu</a>
          <a href="#reservation" data-i18n="navReserve">Réserver</a>
          <a href="#find" data-i18n="navFind">Nous trouver</a>
        </div>
      </div>
      <button class="admin-link" id="admin-open" type="button"><i class="fa-solid fa-gear"></i> Admin</button>
    </div>
  </footer>

  <!-- SECTION: Admin Modal -->
  <div class="modal admin-modal" id="admin-modal" role="dialog" aria-modal="true" aria-labelledby="admin-title">
    <div class="admin-shell">
      <div class="modal-head">
        <h2 class="modal-title" id="admin-title">El Cojina Admin</h2>
        <div style="display:flex; gap:8px;">
          <button class="btn small" id="admin-logout" type="button" hidden><i class="fa-solid fa-right-from-bracket"></i> Déconnexion</button>
          <button class="icon-button modal-close" type="button" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
        </div>
      </div>
      <div id="admin-login" class="modal-body" style="max-width:520px; margin:0 auto;">
        <p class="section-lead">Entrez le mot de passe administrateur.</p>
        <form id="admin-login-form" class="notify-form">
          <label class="form-label"><span>Mot de passe</span><input class="field" name="password" type="password" required autocomplete="current-password"></label>
          <button class="btn primary" type="submit"><i class="fa-solid fa-lock-open"></i> Connexion</button>
          <div id="admin-error" class="admin-error" aria-live="polite"></div>
        </form>
      </div>
      <div id="admin-panel" class="admin-main" hidden>
        <nav class="admin-tabs" id="admin-tabs"></nav>
        <div class="admin-content" id="admin-content"></div>
      </div>
    </div>
  </div>

  <!-- SECTION: Rate Dish Modal -->
  <div class="modal" id="rate-modal" role="dialog" aria-modal="true" aria-labelledby="rate-modal-title">
    <div class="modal-dialog">
      <div class="modal-head">
        <h2 class="modal-title" id="rate-modal-title">Noter ce plat</h2>
        <button class="icon-button modal-close" type="button" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="modal-body" style="display:grid;gap:14px;">
        <p id="rate-dish-name" class="rate-dish-name"></p>
        <div class="star-picker" id="star-picker">
          <button type="button" data-star="1" aria-label="1 étoile">★</button>
          <button type="button" data-star="2" aria-label="2 étoiles">★</button>
          <button type="button" data-star="3" aria-label="3 étoiles">★</button>
          <button type="button" data-star="4" aria-label="4 étoiles">★</button>
          <button type="button" data-star="5" aria-label="5 étoiles">★</button>
        </div>
        <div id="rate-chosen" class="rate-chosen"></div>
        <label class="form-label">Votre prénom<input class="field" id="rate-name" type="text" autocomplete="given-name" maxlength="40"></label>
        <label class="form-label">Commentaire (optionnel)<textarea class="textarea" id="rate-comment" rows="3" maxlength="300"></textarea></label>
        <button class="btn primary" id="rate-submit" type="button" style="width:100%;"><i class="fa-solid fa-star"></i> Envoyer mon avis</button>
        <div id="rate-error" style="color:var(--danger);font-size:0.88rem;min-height:1.2em;"></div>
      </div>
    </div>
  </div>

  <div class="toast" id="toast" role="status" aria-live="polite"></div>

  <script>
    // SECTION: Data Model
    const KEYS = {
      menu: "elcojina_menu",
      reviews: "elcojina_reviews",
      reservations: "elcojina_reservations",
      orders: "elcojina_orders",
      daily: "elcojina_daily",
      subscribers: "elcojina_subscribers",
      categories: "elcojina_categories",
      lang: "elcojina_lang",
      theme: "elcojina_theme"
    };

    const defaultCategories = [
      //{id: "all",      fr: "Tout",         ar: "الكل",          a: "#d4af37", b: "#735515" },
      { id: "entrees",  fr: "Les entrées",   ar: "المقبلات",      a: "#b86f3b", b: "#51351f" },
      { id: "pates",    fr: "Les pâtes",     ar: "المعجنات",      a: "#9f4d35", b: "#39231b" },
      { id: "ojjas",    fr: "Les ojjas",     ar: "العجة",         a: "#c1693c", b: "#51251b" },
      { id: "chauds",   fr: "Plats chauds",  ar: "أطباق ساخنة",  a: "#1f7972", b: "#142f34" },
      { id: "couscous", fr: "Nos couscous",  ar: "الكسكسي",       a: "#72824b", b: "#30361f" }
    ];
    let categories = defaultCategories;

    const menuSeed = [
      { id:"salade-tunisienne",   cat:"entrees",  fr:"Salade tunisienne",                   ar:"سلطة تونسية",              price:12 },
      { id:"salade-mechwiya",     cat:"entrees",  fr:"Salade mechwiya fait maison",          ar:"سلطة مشوية دياري",         price:12 },
      { id:"brick-thon",          cat:"entrees",  fr:"Brick traditionnel au thon",           ar:"بريك تقليدي بالتن",        price:8  },
      { id:"brick-chevrettes",    cat:"entrees",  fr:"Brick aux chevrettes",                 ar:"بريك بالشفرات",            price:9  },
      { id:"doigts-fatma",        cat:"entrees",  fr:"Doigts de Fatma",                      ar:"صوابع فاطمة",              price:4  },
      { id:"soupe",               cat:"entrees",  fr:"Soupe",                                ar:"شربة",                     price:8  },
      { id:"spaghetti-agneau",    cat:"pates",    fr:"Spaghetti à la viande d'agneau",       ar:"سباقتي علوش",              price:35 },
      { id:"spaghetti-poulet",    cat:"pates",    fr:"Spaghetti au poulet",                  ar:"سباقتي دجاج",              price:29 },
      { id:"pate-boulettes",      cat:"pates",    fr:"Pâte aux boulettes",                   ar:"مقرونة بنادق",             price:33 },
      { id:"spaghetti-fruits-mer",cat:"pates",    fr:"Spaghetti Royal fruits de mer",        ar:"سباقتي رويال غلال البحر",  price:38 },
      { id:"pate-poissons",       cat:"pates",    fr:"Pâte Royale aux poissons",             ar:"مقرونة رويال حوت",         price:38 },
      { id:"ojja-merguez",        cat:"ojjas",    fr:"Ojja Merguez",                         ar:"عجة مرقاز",                price:33 },
      { id:"ojja-boulettes",      cat:"ojjas",    fr:"Ojja aux boulettes",                   ar:"عجة بنادق",                price:33 },
      { id:"ojja-kaddid",         cat:"ojjas",    fr:"Ojja Kaddid",                          ar:"عجة قديد",                 price:35 },
      { id:"ojja-fruits-mer",     cat:"ojjas",    fr:"Ojja Royal fruits de mer",             ar:"عجة رويال غلال البحر",     price:38 },
      { id:"ojja-coujina",        cat:"ojjas",    fr:"Ojja Royal La Coujina",                ar:"عجة رويال الكوجينا",       price:38 },
      { id:"ojja-okod",           cat:"ojjas",    fr:"Ojja Okod",                            ar:"عجة عقد",                  price:33 },
      { id:"ojja-vegetarienne",   cat:"ojjas",    fr:"Ojja Végétarienne",                    ar:"عجة خضار",                 price:22 },
      { id:"assiette-okod",       cat:"ojjas",    fr:"Assiette Okod",                        ar:"صحن عقد",                  price:30 },
      { id:"mloukhia",            cat:"chauds",   fr:"Mloukhia fait maison",                 ar:"ملوخية دياري",             price:35 },
      { id:"madfouna",            cat:"chauds",   fr:"Madfouna traditionnelle",              ar:"مدفونة تقليدية",           price:38 },
      { id:"kamounia-fruits-mer", cat:"chauds",   fr:"Kamounia Royale aux fruits de mer",    ar:"كمونية رويال غلال البحر",  price:38 },
      { id:"roti-poulet",         cat:"chauds",   fr:"Rôti de poulet",                       ar:"بطاطا محمرة دجاج",         price:29 },
      { id:"poisson-grille",      cat:"chauds",   fr:"Poisson grillé",                       ar:"حوت مشوي",                 price:38 },
      { id:"couscous-vegetarien", cat:"couscous", fr:"Couscous Végétarien",                  ar:"كسكسي خضار",               price:22 },
      { id:"couscous-poulet",     cat:"couscous", fr:"Couscous au poulet",                   ar:"كسكسي دجاج",               price:29 },
      { id:"couscous-merguez",    cat:"couscous", fr:"Couscous Merguez",                     ar:"كسكسي مرقاز",              price:35 },
      { id:"couscous-agneau",     cat:"couscous", fr:"Couscous à l'agneau",                  ar:"كسكسي علوش",               price:35 },
      { id:"couscous-kaddid",     cat:"couscous", fr:"Couscous Kaddid fait maison",          ar:"كسكسي قديد صنع منزلي",     price:33 },
      { id:"couscous-osbane",     cat:"couscous", fr:"Couscous Osbane fait maison",          ar:"كسكسي عصبان صنع منزلي",    price:38 },
      { id:"couscous-poisson",    cat:"couscous", fr:"Couscous au poisson",                  ar:"كسكسي حوت",                price:38 },
      { id:"couscous-poulpe",     cat:"couscous", fr:"Couscous Royal au poulpe",             ar:"كسكسي رويال قرنيط",        price:45 },
      { id:"couscous-calamar",    cat:"couscous", fr:"Couscous Royal au calamar farci",      ar:"كسكسي رويال كلمار محشي",   price:45 },
      { id:"couscous-fruits-mer", cat:"couscous", fr:"Couscous Royal Fruits de mer",         ar:"كسكسي رويال غلال البحر",   price:45 }
    ];

    const extras = [
      { id:"drink",   price:5,  fr:"Boisson",        ar:"مشروب" },
      { id:"bread",   price:5,  fr:"Pain",            ar:"خبز"   },
      { id:"dessert", price:5,  fr:"Dessert du jour", ar:"حلوى اليوم" }
    ];

    const hoursData = [
      { day:"Lundi",    dayAr:"الاثنين",   open:"12h00", close:"23h00", closed:false },
      { day:"Mardi",    dayAr:"الثلاثاء",  open:"12h00", close:"23h00", closed:false },
      { day:"Mercredi", dayAr:"الأربعاء",  open:"12h00", close:"23h00", closed:false },
      { day:"Jeudi",    dayAr:"الخميس",    open:"12h00", close:"23h00", closed:false },
      { day:"Vendredi", dayAr:"الجمعة",    open:"12h00", close:"23h00", closed:false },
      { day:"Samedi",   dayAr:"السبت",     open:"12h00", close:"23h00", closed:false },
      { day:"Dimanche", dayAr:"الأحد",     open:"12h00", close:"22h00", closed:false }
    ];

    const translations = {
      fr: {
        navAbout:"Maison", navDaily:"Plat du jour", navMenu:"Menu", navBuilder:"Composer", navReserve:"Réserver", navFind:"Nous trouver",
        heroEyebrow:"Cuisine tunisienne à La Marsa",
        heroLead:"Saveurs authentiques de Tunisie, plats maison généreux et accueil chaleureux au cœur de La Marsa.",
        ctaReserve:"Réserver une table", ctaMenu:"Voir le menu", ctaWhatsapp:"WhatsApp",
        aboutKicker:"L'esprit El Cojina", aboutTitle:"Une table tunisienne, sincère et raffinée.",
        aboutLead:"El Cojina met à l'honneur les recettes tunisiennes : couscous parfumé, ojja généreuse, brik croustillant, poisson grillé et plats mijotés comme à la maison.",
        aboutVisualTitle:"Cuisine de tradition", aboutVisualText:"Produits frais, sauces mijotées et gestes transmis de génération en génération.",
        statYears:"années de passion", statGuests:"clients servis", statRating:"note voyageurs",
        dailyKicker:"Aujourd'hui", dailyHeading:"Le plat du jour", dailyLead:"Un rendez-vous gourmand mis à jour chaque jour par l'équipe.",
        todayBadge:"Aujourd'hui", notifyTitle:"Soyez le premier informé du plat du jour !", notifyPlaceholder:"Téléphone ou email",
        notifyButton:"Me notifier", notified:"Vous serez notifié !", dailyFallback:"Le plat du jour sera annoncé bientôt par l'équipe.",
        menuKicker:"Carte complète", menuHeading:"Menu & spécialités", menuLead:"Entrées, pâtes, ojjas, plats chauds et couscous. Prix en dinars tunisiens.",
        searchPlaceholder:"Rechercher un plat...", noResults:"Aucun plat trouvé. Essayez une autre recherche.",
        soldOut:"Épuisé", ratingEmpty:"Pas encore noté",
        builderKicker:"Commande à table", builderHeading:"Composez votre assiette",
        builderLead:"Choisissez votre table, vos entrées, vos plats et un extra. Le total se met à jour instantanément.",
        tableStep:"1. Table", starterStep:"2. Entrées", mainStep:"3. Plats principaux", sideStep:"4. Extra",
        tableLabel:"Numéro de table", skip:"Passer", multiHint:"Sélection multiple possible",
        sideDrink:"Boisson", sideBread:"Pain", sideDessert:"Dessert du jour",
        summary:"Votre commande", table:"Table", starters:"Entrées", mains:"Plats", side:"Extra",
        none:"Aucun", total:"Total", sendOrder:"Envoyer ma commande", orderSaved:"Commande envoyée en cuisine.",
        reserveKicker:"Votre table", reserveHeading:"Réservation",
        reserveLead:"Envoyez votre demande en quelques secondes. L'équipe vous contactera pour confirmer.",
        labelName:"Nom", labelPhone:"Téléphone", labelDate:"Date", labelTime:"Heure",
        labelGuests:"Invités", labelRequests:"Demandes spéciales",
        sendReservation:"Envoyer la demande", reservationSaved:"Demande reçue. Nous vous contacterons pour confirmer.",
        findKicker:"Nous trouver", findHeading:"Au cœur de La Marsa",
        hoursTitle:"Horaires d'ouverture", whatsappText:"Écrire sur WhatsApp", hoursClosed:"Fermé",
        adminSaved:"Modification enregistrée.", adminDeleted:"Élément supprimé.", markServed:"Marquer servie",
        dashboard:"Dashboard", dailyAdmin:"Plat du jour", menuAdmin:"Menu Manager",
        reservations:"Réservations", orders:"Commandes", feedbackAdmin:"Avis & Feedback", subscribers:"Abonnés",
        wrongPassword:"Mot de passe incorrect.",
        rateBtn:"Noter", ratePlaceholderName:"Votre prénom", rateSubmit:"Envoyer mon avis", rateThanks:"Merci pour votre avis !", rateErrorStar:"Choisissez une note (1–5 étoiles).", rateErrorName:"Entrez votre prénom.", rateModalTitle:"Noter ce plat",
        rateLabel1:"Mauvais", rateLabel2:"Bof", rateLabel3:"Bien", rateLabel4:"Très bien", rateLabel5:"Excellent !"
      },
      ar: {
        navAbout:"الدار", navDaily:"طبق اليوم", navMenu:"القائمة", navBuilder:"ركّب طبقك", navReserve:"احجز", navFind:"العنوان",
        heroEyebrow:"مطبخ تونسي في المرسى",
        heroLead:"نكهات تونسية أصيلة، أطباق منزلية سخية واستقبال دافئ في قلب المرسى.",
        ctaReserve:"احجز طاولة", ctaMenu:"شاهد القائمة", ctaWhatsapp:"واتساب",
        aboutKicker:"روح الكوجينا", aboutTitle:"طاولة تونسية أصيلة وأنيقة.",
        aboutLead:"الكوجينا تحتفي بوصفات تونسية محبوبة: كسكسي معطر، عجة سخية، بريك مقرمش، حوت مشوي وأطباق دياري.",
        aboutVisualTitle:"مطبخ تقليدي", aboutVisualText:"منتجات طازجة وصلصات مطبوخة ببطء ولمسات متوارثة جيلًا بعد جيل.",
        statYears:"سنوات شغف", statGuests:"حريف مستمتع", statRating:"تقييم المسافرين",
        dailyKicker:"اليوم", dailyHeading:"طبق اليوم", dailyLead:"موعد يومي شهي تحدّثه إدارة المطعم.",
        todayBadge:"اليوم", notifyTitle:"كن أول من يعرف طبق اليوم!", notifyPlaceholder:"هاتف أو بريد",
        notifyButton:"نبّهني", notified:"سيتم تنبيهك!", dailyFallback:"عودوا قريبًا: سيتم إعلان طبق اليوم قريبًا.",
        menuKicker:"القائمة الكاملة", menuHeading:"القائمة والاختصاصات", menuLead:"مقبلات، معجنات، عجة، أطباق ساخنة وكسكسي. الأسعار بالدينار التونسي.",
        searchPlaceholder:"ابحث عن طبق...", noResults:"لم يتم العثور على طبق. جرّب بحثًا آخر.",
        soldOut:"غير متوفر", ratingEmpty:"لا يوجد تقييم بعد",
        builderKicker:"طلب على الطاولة", builderHeading:"ركّب طبقك",
        builderLead:"اختر رقم الطاولة، مقبلاتك، أطباقك وإضافة. السعر يتحدث مباشرة.",
        tableStep:"1. الطاولة", starterStep:"2. المقبلات", mainStep:"3. الأطباق الرئيسية", sideStep:"4. إضافة",
        tableLabel:"رقم الطاولة", skip:"تجاوز", multiHint:"يمكن اختيار أكثر من صنف",
        summary:"طلبك", table:"الطاولة", starters:"المقبلات", mains:"الأطباق", side:"الإضافة",
        none:"لا شيء", total:"المجموع", sendOrder:"أرسل الطلب", orderSaved:"تم إرسال الطلب للمطبخ.",
        reserveKicker:"طاولتك", reserveHeading:"الحجز",
        reserveLead:"أرسل طلبك في ثوانٍ. سيتصل بك الفريق للتأكيد.",
        labelName:"الاسم", labelPhone:"الهاتف", labelDate:"التاريخ", labelTime:"الوقت",
        labelGuests:"الضيوف", labelRequests:"طلبات خاصة",
        sendReservation:"أرسل الطلب", reservationSaved:"تم استلام الطلب. سنتصل بك للتأكيد.",
        findKicker:"العنوان", findHeading:"في قلب المرسى",
        hoursTitle:"أوقات العمل", whatsappText:"تواصل على واتساب", hoursClosed:"مغلق",
        adminSaved:"تم حفظ التعديل.", adminDeleted:"تم حذف العنصر.", markServed:"تم التقديم",
        dashboard:"لوحة التحكم", dailyAdmin:"طبق اليوم", menuAdmin:"إدارة القائمة",
        reservations:"الحجوزات", orders:"الطلبات", feedbackAdmin:"الآراء والتقييمات", subscribers:"المشتركون",
        wrongPassword:"كلمة المرور غير صحيحة.",
        rateBtn:"قيّم", ratePlaceholderName:"اسمك", rateSubmit:"أرسل رأيك", rateThanks:"شكرًا على تقييمك!", rateErrorStar:"اختر تقييمًا (1–5 نجوم).", rateErrorName:"أدخل اسمك.", rateModalTitle:"قيّم هذا الطبق",
        rateLabel1:"سيئ", rateLabel2:"مقبول", rateLabel3:"جيد", rateLabel4:"جيد جدًا", rateLabel5:"ممتاز!"
      }
    };

    const state = {
      lang: localStorage.getItem(KEYS.lang) || "fr",
      theme: localStorage.getItem(KEYS.theme) || "dark",
      activeCategory: "entrees",
      search: "",
      builder: { table: 1, starters: [], mains: [], side: null },
      adminTab: "dashboard",
      lastFocus: null
    };

    // SECTION: Storage Helpers (PostgreSQL via api/store.php)
    const DATA_API = "api/store.php";
    const SERVER_KEYS = new Set([
      KEYS.menu, KEYS.reviews, KEYS.reservations, KEYS.orders,
      KEYS.daily, KEYS.subscribers, KEYS.categories
    ]);
    const serverCache = {};
    let storeReady = false;

    async function loadStore() {
      try {
        const res = await fetch(DATA_API, { credentials: "same-origin" });
        const payload = await res.json();
        if (payload.ok && payload.data) {
          for (const k of SERVER_KEYS) delete serverCache[k];
          Object.assign(serverCache, payload.data);
        }
      } catch (err) {
        console.warn("Store load failed, using defaults.", err);
      }
      const storedCategories = serverCache[KEYS.categories];
      if (Array.isArray(storedCategories) && storedCategories.length) categories = storedCategories;
      storeReady = true;
    }

    function readJSON(key, fallback) {
      if (SERVER_KEYS.has(key)) {
        const value = serverCache[key];
        return value !== undefined && value !== null ? value : fallback;
      }
      try { const r = localStorage.getItem(key); return r ? JSON.parse(r) : fallback; }
      catch { return fallback; }
    }

    function writeJSON(key, value) {
      if (SERVER_KEYS.has(key)) {
        serverCache[key] = value;
        fetch(DATA_API, {
          method: "PUT",
          headers: { "Content-Type": "application/json" },
          credentials: "same-origin",
          body: JSON.stringify({ key, value })
        }).then(res => res.json()).then(payload => {
          if (!payload.ok) console.error("Save failed:", key, payload.message);
        }).catch(err => console.error("Save failed:", key, err));
        return;
      }
      localStorage.setItem(key, JSON.stringify(value));
    }
    function categoryById(id) { return categories.find(c => c.id === id) || categories[0]; }

    function makeDescription(item, lang = "fr") {
      const tpl = {
        entrees: {
          fr:`${item.fr} ouvre le repas avec une touche fraîche et franche, préparée dans l'esprit des tables tunisiennes. Une bouchée simple, soignée et idéale pour commencer en douceur.`,
          ar:`${item.ar} بداية شهية بنكهة تونسية واضحة ومحضرة بعناية. اختيار خفيف ومناسب لافتتاح الوجبة براحة.`
        },
        pates: {
          fr:`${item.fr} associe sauce généreuse, épices chaudes et cuisson gourmande. Un plat réconfortant, servi bien chaud pour les amateurs de saveurs profondes.`,
          ar:`${item.ar} يجمع صلصة سخية وبهارات دافئة وطبخًا غنيًا. طبق مريح يقدم ساخنًا لعشاق النكهات العميقة.`
        },
        ojjas: {
          fr:`${item.fr} révèle toute l'intensité de l'ojja tunisienne, mijotée dans une sauce vive et parfumée. Chaque assiette garde ce goût convivial qui appelle le pain chaud.`,
          ar:`${item.ar} تكشف قوة العجة التونسية في صلصة حية ومعطرة. طبق دافئ يدعو للمشاركة مع خبز سخون.`
        },
        chauds: {
          fr:`${item.fr} est préparé comme un plat de maison, avec une sauce patiente et une garniture généreuse. C'est une assiette chaleureuse, pleine de caractère et de tradition.`,
          ar:`${item.ar} يحضر بروح الأكل الدياري مع صلصة مطبوخة على مهل وغارني سخية. طبق دافئ مليء بالشخصية والتقاليد.`
        },
        couscous: {
          fr:`${item.fr} met en valeur une semoule fine, un bouillon parfumé et une garniture savoureuse. Un classique tunisien généreux, pensé pour être dégusté lentement.`,
          ar:`${item.ar} يبرز سميدًا ناعمًا ومرقًا معطرًا وغارني شهية. كسكسي تونسي سخي يستحق التذوق على مهل.`
        }
      };
      return tpl[item.cat]?.[lang] || "";
    }

    function fallbackImage(text = "El Cojina") {
      return `https://placehold.co/400x280/1a1200/D4AF37?text=${encodeURIComponent(text)}`;
    }

    function normalizeMenu(items) {
      return items.map(item => ({
        soldOut: false,
        image: fallbackImage("El Cojina"),
        ...item,
        descFr: item.descFr || makeDescription(item, "fr"),
        descAr: item.descAr || makeDescription(item, "ar")
      }));
    }

    function getMenu() {
      const stored = readJSON(KEYS.menu, null);
      if (!stored) { const s = normalizeMenu(menuSeed); writeJSON(KEYS.menu, s); return s; }
      return normalizeMenu(stored);
    }

    function getDaily() {
      const stored = readJSON(KEYS.daily, null);
      if (stored) return stored;
      const d = {
        nameFr:"Couscous Royal Fruits de mer", nameAr:"كسكسي رويال غلال البحر", price:45,
        descriptionFr:"Semoule fine, bouillon parfumé et fruits de mer dans une assiette royale. Le fleuron de la cuisine El Cojina.",
        descriptionAr:"سميد ناعم ومرق معطر وغلال بحر في طبق رويال سخي. تاج مطبخ الكوجينا.",
        image:"https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?auto=format&fit=crop&w=1000&q=82",
        updatedAt: Date.now()
      };
      writeJSON(KEYS.daily, d); return d;
    }

    function seedReviews() {
      if (readJSON(KEYS.reviews, null)) return;
      writeJSON(KEYS.reviews, [
        { id:crypto.randomUUID(), dishId:"couscous-poisson", dishFr:"Couscous au poisson", dishAr:"كسكسي حوت", name:"Meriem", rating:5, comment:"Couscous parfumé, poisson frais et service très chaleureux.", createdAt: Date.now()-1000*60*60*32 },
        { id:crypto.randomUUID(), dishId:"brick-chevrettes", dishFr:"Brick aux chevrettes", dishAr:"بريك بالشفرات", name:"Karim", rating:5, comment:"Le brik est croustillant, généreux et parfaitement assaisonné.", createdAt: Date.now()-1000*60*60*72 },
        { id:crypto.randomUUID(), dishId:"mloukhia", dishFr:"Mloukhia fait maison", dishAr:"ملوخية دياري", name:"Sarra", rating:4, comment:"Une vraie saveur de maison, riche et bien servie.", createdAt: Date.now()-1000*60*60*108 }
      ]);
    }

    // SECTION: Formatting Helpers
    function t(key) { return translations[state.lang][key] || translations.fr[key] || key; }

    function esc(v) {
      return String(v ?? "").replace(/[&<>"']/g, c => ({"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#039;"})[c]);
    }
    function normSearch(v) { return String(v||"").toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g,""); }
    function highlight(text, query) {
      const s = esc(text);
      if (!query.trim()) return s;
      return s.replace(new RegExp(esc(query.trim()).replace(/[.*+?^${}()|[\]\\]/g,"\\$&"),"gi"),"<mark>$&</mark>");
    }
    function formatPrice(price) { return `${Number(price||0).toFixed(Number(price)%1?1:0)} TND`; }
    function stars(rating) { const f=Math.round(Number(rating||0)); return `<span class="stars" aria-label="${rating} étoiles">${"★".repeat(f)}${"☆".repeat(Math.max(0,5-f))}</span>`; }
    function relativeDate(ts) {
      const d=Math.floor(Math.max(1,Date.now()-Number(ts||Date.now()))/86400000);
      const h=Math.floor(Math.max(1,Date.now()-Number(ts||Date.now()))/3600000);
      if(state.lang==="ar"){ if(d>0) return `منذ ${d} يوم`; if(h>0) return `منذ ${h} ساعة`; return "منذ قليل"; }
      if(d>0) return `il y a ${d} jour${d>1?"s":""}`;
      if(h>0) return `il y a ${h} heure${h>1?"s":""}`;
      return "à l'instant";
    }

    function showToast(msg) {
      const el = document.getElementById("toast");
      el.textContent = msg; el.classList.add("show");
      clearTimeout(showToast._t);
      showToast._t = setTimeout(() => el.classList.remove("show"), 2800);
    }
    function debounce(fn, w=200) { let t; return (...a) => { clearTimeout(t); t = setTimeout(()=>fn(...a),w); }; }

    // SECTION: Language & Theme
    function applyLanguage() {
      document.documentElement.lang = state.lang;
      document.documentElement.dir = state.lang === "ar" ? "rtl" : "ltr";
      document.body.classList.toggle("lang-ar", state.lang === "ar");
      document.querySelectorAll("[data-i18n]").forEach(el => { el.textContent = t(el.dataset.i18n); });
      document.querySelectorAll("[data-i18n-placeholder]").forEach(el => { el.placeholder = t(el.dataset.i18nPlaceholder); });
      localStorage.setItem(KEYS.lang, state.lang);
    }

    function applyTheme() {
      document.body.classList.toggle("light", state.theme === "light");
      document.getElementById("theme-toggle").innerHTML = state.theme === "light"
        ? '<i class="fa-solid fa-sun"></i>' : '<i class="fa-solid fa-moon"></i>';
      localStorage.setItem(KEYS.theme, state.theme);
    }

    function rerenderAll() {
      applyLanguage();
      renderHoursTable();
      renderDaily();
      renderMenuTabs();
      renderStickyTabs();
      renderMenu();
      renderBuilder();
      if (!document.getElementById("admin-panel").hidden) renderAdmin();
    }

    // SECTION: Opening Hours Table
    function renderHoursTable() {
      const today = new Date().getDay(); // 0=Sun,1=Mon,...6=Sat
      const dayMap = [6,0,1,2,3,4,5]; // Sun->6, Mon->0...
      const todayIdx = dayMap[today];
      const tbl = document.getElementById("hours-table");
      if (!tbl) return;
      tbl.innerHTML = hoursData.map((row, i) => `
        <tr class="${i === todayIdx ? "today-row" : ""}">
          <td>${state.lang === "ar" ? esc(row.dayAr) : esc(row.day)}</td>
          <td class="${row.closed ? "closed" : ""}">
            ${row.closed ? t("hoursClosed") : `${row.open} – ${row.close}`}
          </td>
        </tr>
      `).join("");
    }

    // SECTION: Observers, Counters, Parallax, Lazy
    function setupObservers() {
      const ro = new IntersectionObserver(entries => {
        entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add("visible"); ro.unobserve(e.target); } });
      }, { threshold: 0.13 });
      document.querySelectorAll(".reveal").forEach(el => ro.observe(el));

      const co = new IntersectionObserver(entries => {
        entries.forEach(e => { if(!e.isIntersecting) return; animateCounter(e.target); co.unobserve(e.target); });
      }, { threshold: 0.5 });
      document.querySelectorAll(".counter").forEach(el => co.observe(el));
    }

    function animateCounter(el) {
      const target = Number(el.dataset.target), decimals = Number(el.dataset.decimals||0), dur = 1300, start = performance.now();
      function frame(now) {
        const p = Math.min(1,(now-start)/dur), e = 1-Math.pow(1-p,3), v = target*e;
        el.textContent = decimals ? v.toFixed(decimals) : Math.floor(v).toLocaleString(state.lang==="ar"?"ar-TN":"fr-FR");
        if(p<1) requestAnimationFrame(frame);
      }
      requestAnimationFrame(frame);
    }

    function setupParallax() {
      let ticking = false;
      window.addEventListener("scroll", () => {
        if(ticking) return; ticking = true;
        requestAnimationFrame(() => {
          document.querySelector(".hero").style.setProperty("--hero-shift", `${Math.min(90,window.scrollY*0.08)}px`);
          ticking = false;
        });
      }, { passive:true });
    }

    let lazyObs;
    function observeLazyImages() {
      if(!lazyObs) lazyObs = new IntersectionObserver(entries => {
        entries.forEach(e => { if(!e.isIntersecting) return; const img=e.target; img.src=img.dataset.src; img.removeAttribute("data-src"); lazyObs.unobserve(img); });
      }, { rootMargin:"220px" });
      document.querySelectorAll("img[data-src]").forEach(img => lazyObs.observe(img));
    }

    // SECTION: Sticky Category Tabs
    function renderStickyTabs() {
      const inner = document.getElementById("sticky-tabs-inner");
      inner.innerHTML = categories.map(cat => `
        <button class="sticky-tab-btn ${state.activeCategory===cat.id?"active":""}" type="button" data-sticky-cat="${cat.id}">
          ${esc(state.lang==="ar" ? cat.ar : cat.fr)}
        </button>
      `).join("");
    }

    function setupStickyTabsVisibility() {
      const menuSection = document.getElementById("menu");
      const stickyBar = document.getElementById("sticky-tabs-bar");
      function update() {
        const rect = menuSection.getBoundingClientRect();
        const headerH = parseInt(getComputedStyle(document.documentElement).getPropertyValue("--header-h")||"74");
        // Show as soon as the top of the menu section scrolls to/past the header
        stickyBar.classList.toggle("visible", rect.top <= headerH);
      }
      window.addEventListener("scroll", update, { passive: true });
      update();
    }

    // SECTION: Daily Special
    function renderDaily() {
      const daily = getDaily();
      const hasDaily = daily && daily.nameFr;
      const date = new Intl.DateTimeFormat(state.lang==="ar"?"ar-TN":"fr-FR",{dateStyle:"full"}).format(new Date());
      const title = state.lang==="ar" ? daily.nameAr : daily.nameFr;
      const other = state.lang==="ar" ? daily.nameFr : daily.nameAr;
      const desc  = state.lang==="ar" ? daily.descriptionAr : daily.descriptionFr;
      const img   = daily.image || fallbackImage("Plat du Jour");
      const c = document.getElementById("daily-container");
      c.innerHTML = hasDaily ? `
        <article class="daily-card">
          <div class="daily-media" style="background:linear-gradient(180deg,rgba(13,13,13,.05),rgba(13,13,13,.72)),url('${esc(img)}') center/cover;"></div>
          <div class="daily-content">
            <span class="badge-pulse"><i class="fa-solid fa-bell-concierge"></i>${t("todayBadge")}</span>
            <p class="section-lead" style="margin-top:14px;">${esc(date)}</p>
            <h3 class="daily-title">${esc(title)}<span class="daily-ar">${esc(other)}</span></h3>
            <p class="section-lead">${esc(desc)}</p>
            <div class="daily-price">${formatPrice(daily.price)}</div>
            <form class="notify-form" id="notify-form">
              <strong>${t("notifyTitle")}</strong>
              <div class="inline-form">
                <input class="field" name="contact" required placeholder="${t("notifyPlaceholder")}" autocomplete="email">
                <button class="btn primary" type="submit"><i class="fa-regular fa-bell"></i><span>${t("notifyButton")}</span></button>
              </div>
            </form>
          </div>
        </article>
      ` : `
        <div class="daily-content" style="padding:clamp(28px,5vw,54px);">
          <span class="badge-pulse">${t("todayBadge")}</span>
          <h3 class="daily-title">${t("dailyFallback")}</h3>
          <form class="notify-form" id="notify-form">
            <strong>${t("notifyTitle")}</strong>
            <div class="inline-form">
              <input class="field" name="contact" required placeholder="${t("notifyPlaceholder")}" autocomplete="email">
              <button class="btn primary" type="submit"><i class="fa-regular fa-bell"></i><span>${t("notifyButton")}</span></button>
            </div>
          </form>
        </div>
      `;
      document.getElementById("notify-form")?.addEventListener("submit", e => {
        e.preventDefault();
        const contact = e.currentTarget.contact.value.trim();
        if(!contact) return;
        const subs = readJSON(KEYS.subscribers,[]);
        subs.unshift({id:crypto.randomUUID(), contact, createdAt:Date.now()});
        writeJSON(KEYS.subscribers, subs);
        e.currentTarget.reset();
        showToast(`✓ ${t("notified")}`);
      });
    }

    // SECTION: Menu Rendering
    function renderMenuTabs() {
      const tabs = document.getElementById("menu-tabs");
      tabs.innerHTML = categories.map(cat => `
        <button class="tab-button ${state.activeCategory===cat.id?"active":""}" type="button" role="tab" data-cat="${cat.id}">
          ${esc(state.lang==="ar" ? cat.ar : cat.fr)}
        </button>
      `).join("") + `<span class="tab-indicator" aria-hidden="true"></span>`;
      updateTabIndicator();
    }

    function updateTabIndicator() {
      requestAnimationFrame(() => {
        const tabs = document.getElementById("menu-tabs");
        const active = tabs.querySelector(".tab-button.active");
        const indicator = tabs.querySelector(".tab-indicator");
        if(!active||!indicator) return;
        indicator.style.width = `${active.offsetWidth}px`;
        indicator.style.transform = `translateX(${active.offsetLeft}px)`;
      });
    }

    function dishRating(dishId) {
      const revs = readJSON(KEYS.reviews,[]).filter(r => r.dishId===dishId);
      if(!revs.length) return null;
      return { avg: revs.reduce((s,r)=>s+Number(r.rating||0),0)/revs.length, count: revs.length };
    }

    function renderMenu() {
      const grid = document.getElementById("menu-grid");
      const menu = getMenu();
      const q = state.search.trim();
      const query = normSearch(q);
      const items = menu.filter(item => {
        const txt = `${item.fr} ${item.ar} ${item.descFr} ${item.descAr}`;
        const matches = !query || normSearch(txt).includes(query);
        const inCat = q ? true : state.activeCategory==="all" || item.cat===state.activeCategory;
        return matches && inCat;
      });
      if(!items.length) {
        grid.innerHTML = `<div class="empty-state"><strong>${t("noResults")}</strong></div>`;
        return;
      }
      grid.innerHTML = items.map(item => {
        const cat = categoryById(item.cat);
        const title = state.lang==="ar" ? item.ar : item.fr;
        const subtitle = state.lang==="ar" ? item.fr : item.ar;
        const desc = state.lang==="ar" ? item.descAr : item.descFr;
        const rating = dishRating(item.id);
        return `
          <article class="dish-card" style="--cat-a:${cat.a};--cat-b:${cat.b};">
            <div class="dish-media">
              <img data-src="${esc(item.image||fallbackImage(title))}" alt="${esc(title)}" loading="lazy">
              <span class="dish-badge ${item.soldOut?"sold-out":""}">${item.soldOut ? t("soldOut") : esc(state.lang==="ar"?cat.ar:cat.fr)}</span>
            </div>
            <div class="dish-body">
              <div class="dish-top">
                <h3 class="card-title">${highlight(title,q)}<span class="arabic-name">${highlight(subtitle,q)}</span></h3>
                <span class="price">${formatPrice(item.price)}</span>
              </div>
              <p class="dish-desc">${highlight(desc,q)}</p>
              <div class="rating-line">
                <span>${rating ? stars(rating.avg)+` ${rating.avg.toFixed(1)} (${rating.count})` : t("ratingEmpty")}</span>
                ${!item.soldOut ? `<button class="rate-btn" type="button" data-rate-id="${esc(item.id)}" data-rate-fr="${esc(item.fr)}" data-rate-ar="${esc(item.ar)}"><i class="fa-solid fa-star"></i> ${t("rateBtn")}</button>` : ""}
              </div>
            </div>
          </article>
        `;
      }).join("");
      observeLazyImages();
    }

    // SECTION: Build My Plate — Multi-select
    function toggleBuilderItem(type, id) {
      if(type === "starter") {
        const arr = state.builder.starters;
        const idx = arr.indexOf(id);
        if(idx>=0) arr.splice(idx,1); else arr.push(id);
      } else if(type === "main") {
        const arr = state.builder.mains;
        const idx = arr.indexOf(id);
        if(idx>=0) arr.splice(idx,1); else arr.push(id);
      } else if(type === "side") {
        state.builder.side = state.builder.side === id ? null : id;
      }
    }

    function getSelectedItems(type) {
      if(type === "starter") return getMenu().filter(it => state.builder.starters.includes(it.id));
      if(type === "main")    return getMenu().filter(it => state.builder.mains.includes(it.id));
      if(type === "side")    return extras.filter(it => it.id === state.builder.side);
      return [];
    }

    function builderTotal() {
      const starterSum = getSelectedItems("starter").reduce((s,it)=>s+Number(it.price||0),0);
      const mainSum    = getSelectedItems("main").reduce((s,it)=>s+Number(it.price||0),0);
      const sideSum    = getSelectedItems("side").reduce((s,it)=>s+Number(it.price||0),0);
      return starterSum + mainSum + sideSum;
    }

    function buildOptionCards(items, type) {
      const selectedIds = type==="starter" ? state.builder.starters : type==="main" ? state.builder.mains : (state.builder.side ? [state.builder.side] : []);
      return items.map(item => {
        const name = state.lang==="ar" ? (item.ar||item.fr) : (item.fr||item.ar);
        const sel = selectedIds.includes(item.id);
        return `
          <button class="select-card ${sel?"selected":""}" type="button" data-build-type="${type}" data-build-id="${item.id}">
            <span class="check-icon" aria-hidden="true">✓</span>
            <strong>${esc(name)}</strong>
            <span>${formatPrice(item.price)}</span>
          </button>
        `;
      }).join("");
    }

    function renderBuilder() {
      const menu = getMenu().filter(it => !it.soldOut);
      const starters = menu.filter(it => it.cat==="entrees");
      const mains = menu.filter(it => ["pates","ojjas","chauds","couscous"].includes(it.cat));
      const b = document.getElementById("builder-steps");
      b.innerHTML = `
        <section class="builder-step">
          <div class="step-head"><h3 class="step-title">${t("tableStep")}</h3><span class="table-badge">${t("table")} N°${state.builder.table}</span></div>
          <label class="form-label">${t("tableLabel")}<input class="field" id="table-number" type="number" min="1" max="30" value="${state.builder.table}"></label>
        </section>

        <section class="builder-step">
          <div class="step-head">
            <div>
              <h3 class="step-title">${t("starterStep")}</h3>
              <small class="step-hint">${t("multiHint")}</small>
            </div>
            <div style="display:flex;gap:8px;align-items:center;">
              ${state.builder.starters.length ? `<span class="select-count">${state.builder.starters.length} sélectionné${state.builder.starters.length>1?"s":""}</span>` : ""}
              <button class="btn small" type="button" data-build-clear="starter">${t("skip")}</button>
            </div>
          </div>
          <div class="builder-options">${buildOptionCards(starters,"starter")}</div>
        </section>

        <section class="builder-step">
          <div class="step-head">
            <div>
              <h3 class="step-title">${t("mainStep")}</h3>
              <small class="step-hint">${t("multiHint")}</small>
            </div>
            ${state.builder.mains.length ? `<span class="select-count">${state.builder.mains.length} sélectionné${state.builder.mains.length>1?"s":""}</span>` : ""}
          </div>
          <div class="builder-options">${buildOptionCards(mains,"main")}</div>
        </section>

        <section class="builder-step">
          <div class="step-head">
            <h3 class="step-title">${t("sideStep")}</h3>
            <button class="btn small" type="button" data-build-clear="side">${t("skip")}</button>
          </div>
          <div class="builder-options">${extras.map(ex => {
            const name = state.lang==="ar" ? ex.ar : ex.fr;
            const sel  = state.builder.side === ex.id;
            return `<button class="select-card ${sel?"selected":""}" type="button" data-build-type="side" data-build-id="${ex.id}"><span class="check-icon" aria-hidden="true">✓</span><strong>${esc(name)}</strong><span>${formatPrice(ex.price)}</span></button>`;
          }).join("")}</div>
        </section>
      `;
      renderBuilderSummary();
    }

    function renderBuilderSummary(confirmText = "") {
      const panel = document.getElementById("builder-summary");
      const starterItems = getSelectedItems("starter");
      const mainItems    = getSelectedItems("main");
      const sideItem     = getSelectedItems("side")[0];

      const itemList = arr => arr.length
        ? arr.map(it => esc(state.lang==="ar"?it.ar:it.fr)).join(", ")
        : `<em style="opacity:.6">${t("none")}</em>`;

      panel.innerHTML = `
        <h3 class="step-title" style="margin-bottom:12px;">${t("summary")}</h3>
        <div class="summary-row"><span>${t("table")}</span><strong>N°${state.builder.table}</strong></div>
        <div class="summary-row">
          <span>${t("starters")}</span>
          <div class="summary-items">${itemList(starterItems)}</div>
        </div>
        <div class="summary-row">
          <span>${t("mains")}</span>
          <div class="summary-items">${itemList(mainItems)}</div>
        </div>
        <div class="summary-row">
          <span>${t("side")}</span>
          <strong>${sideItem ? esc(state.lang==="ar"?sideItem.ar:sideItem.fr) : `<em style="opacity:.6">${t("none")}</em>`}</strong>
        </div>
        <div class="total"><span>${t("total")}</span><span>${formatPrice(builderTotal())}</span></div>
        <button class="btn primary" type="button" id="send-order" style="width:100%;">
          <i class="fa-solid fa-bell-concierge"></i><span>${t("sendOrder")}</span>
        </button>
        ${confirmText ? `<div class="order-confirm">${esc(confirmText)}</div>` : ""}
      `;
    }

    function sendOrder() {
      if(Number(state.builder.table)<1) { showToast(t("tableLabel")); return; }
      if(!state.builder.mains.length)   { showToast(t("mainStep")); return; }
      const order = {
        id: crypto.randomUUID(),
        table: Number(state.builder.table),
        starters: getSelectedItems("starter"),
        mains: getSelectedItems("main"),
        side: getSelectedItems("side")[0] || null,
        total: builderTotal(),
        status: "pending",
        createdAt: Date.now()
      };
      const orders = readJSON(KEYS.orders,[]);
      orders.unshift(order);
      writeJSON(KEYS.orders, orders);
      renderBuilderSummary(`${t("orderSaved")} ${t("total")}: ${formatPrice(order.total)}`);
      if(!document.getElementById("admin-panel").hidden) renderAdmin();
    }

    // SECTION: Reservation
    function setupReservationForm() {
      const dateInput = document.querySelector('input[name="date"]');
      dateInput.min = new Date().toISOString().slice(0,10);
      const ts = document.getElementById("time-select");
      const opts = [];
      for(let h=12;h<=23;h++) for(const m of [0,30]) {
        if(h===23&&m===30) continue;
        const v = `${String(h).padStart(2,"0")}:${String(m).padStart(2,"0")}`;
        opts.push(`<option value="${v}">${v.replace(":",":")}h</option>`);
      }
      ts.innerHTML = opts.join("");
      document.getElementById("reservation-form").addEventListener("submit", e => {
        e.preventDefault();
        const data = Object.fromEntries(new FormData(e.currentTarget));
        const reservations = readJSON(KEYS.reservations,[]);
        reservations.unshift({id:crypto.randomUUID(),...data,createdAt:Date.now()});
        writeJSON(KEYS.reservations, reservations);
        document.getElementById("reservation-confirm").innerHTML =
          `<div class="order-confirm">${t("reservationSaved")}<br><strong>${esc(data.name)} - ${esc(data.date)} ${esc(data.time)} - ${esc(data.guests)} ${t("labelGuests")}</strong></div>`;
        e.currentTarget.reset();
        dateInput.min = new Date().toISOString().slice(0,10);
        if(!document.getElementById("admin-panel").hidden) renderAdmin();
      });
    }

    // SECTION: Admin
    const adminTabDefs = [
      { id:"dashboard",    key:"dashboard",    icon:"fa-chart-line"       },
      { id:"daily",        key:"dailyAdmin",   icon:"fa-calendar-day"     },
      { id:"menu",         key:"menuAdmin",    icon:"fa-utensils"         },
      { id:"reservations", key:"reservations", icon:"fa-calendar-check"   },
      { id:"orders",       key:"orders",       icon:"fa-bell-concierge"   },
      { id:"feedback",     key:"feedbackAdmin",icon:"fa-comments"         },
      { id:"subscribers",  key:"subscribers",  icon:"fa-bell"             }
    ];

    const ADMIN_API = "api/admin";
    let adminLoggedIn = false;

    function setAdminView(logged) {
      adminLoggedIn = !!logged;
      document.getElementById("admin-login").hidden = logged;
      document.getElementById("admin-panel").hidden = !logged;
      document.getElementById("admin-logout").hidden = !logged;
      document.getElementById("admin-error").textContent = "";
      if(!logged) {
        document.getElementById("admin-login-form")?.reset();
        document.getElementById("admin-tabs").innerHTML = "";
        document.getElementById("admin-content").innerHTML = "";
      }
    }

    async function checkAdminSession() {
      try {
        const res = await fetch(`${ADMIN_API}/status.php`, { credentials: "same-origin" });
        const data = await res.json();
        const wasLoggedIn = adminLoggedIn;
        setAdminView(!!data.loggedIn);
        if (data.loggedIn && !wasLoggedIn) await loadStore();
        if (data.loggedIn) renderAdmin();
      } catch {
        setAdminView(false);
      }
    }

    async function openAdmin() {
      if (!adminLoggedIn) await checkAdminSession();
      if (adminLoggedIn) await loadStore();
      openModal(document.getElementById("admin-modal"));
      if (adminLoggedIn) renderAdmin();
    }

    function renderAdmin() {
      document.getElementById("admin-tabs").innerHTML = adminTabDefs.map(tab => `
        <button class="admin-tab ${state.adminTab===tab.id?"active":""}" type="button" data-admin-tab="${tab.id}">
          <i class="fa-solid ${tab.icon}"></i> ${t(tab.key)}
        </button>
      `).join("");
      const renderers = {
        dashboard: renderAdminDashboard,
        daily: renderAdminDaily,
        menu: renderAdminMenu,
        reservations: renderAdminReservations,
        orders: renderAdminOrders,
        feedback: renderAdminFeedback,
        subscribers: renderAdminSubscribers
      };
      document.getElementById("admin-content").innerHTML = (renderers[state.adminTab] || renderAdminDashboard)();
      setupAdminContentEvents();
      if(state.adminTab==="dashboard") renderQRCode();
    }

    function getAverageRating() {
      const revs = readJSON(KEYS.reviews,[]);
      if(!revs.length) return 0;
      return revs.reduce((s,r)=>s+Number(r.rating||0),0)/revs.length;
    }

    function getTopRatedDish() {
      const revs = readJSON(KEYS.reviews,[]);
      const g = revs.reduce((acc,r) => {
        acc[r.dishId] ||= {total:0,count:0,dishFr:r.dishFr,dishAr:r.dishAr};
        acc[r.dishId].total+=Number(r.rating||0); acc[r.dishId].count+=1; return acc;
      },{});
      return Object.values(g).sort((a,b)=>(b.total/b.count)-(a.total/a.count))[0];
    }

    function reservationsThisWeek() {
      const ws = new Date(); ws.setDate(ws.getDate()-ws.getDay()); ws.setHours(0,0,0,0);
      return readJSON(KEYS.reservations,[]).filter(r=>new Date(r.date)>=ws).length;
    }

    function renderAdminDashboard() {
      const menu = getMenu(), revs = readJSON(KEYS.reviews,[]);
      const orders = readJSON(KEYS.orders,[]), subs = readJSON(KEYS.subscribers,[]);
      const top = getTopRatedDish();
      return `
        <div class="admin-grid">
          <div class="admin-card"><span>Total plats</span><strong>${menu.length}</strong><small>Menu</small></div>
          <div class="admin-card"><span>Note globale</span><strong>${getAverageRating().toFixed(1)} ★</strong><small>${revs.length} avis</small></div>
          <div class="admin-card" style="cursor:pointer;" onclick="state.adminTab='feedback';renderAdmin();"><span>Plat top noté ↗</span><strong style="font-size:1.1rem;">${top?(state.lang==="ar"?top.dishAr:top.dishFr):"-"}</strong><small>${top?(top.total/top.count).toFixed(1)+" ★":"0"}</small></div>
          <div class="admin-card"><span>Réservations semaine</span><strong>${reservationsThisWeek()}</strong><small>Cette semaine</small></div>
          <div class="admin-card"><span>Abonnés Plat du jour</span><strong>${subs.length}</strong><small>Notifications</small></div>
          <div class="admin-card"><span>Commandes en attente</span><strong>${orders.filter(o=>o.status==="pending").length}</strong><small>Build My Plate</small></div>
          <div class="admin-card" style="cursor:pointer;" onclick="state.adminTab='feedback';renderAdmin();"><span>Total avis ↗</span><strong>${revs.length}</strong><small>Voir les avis</small></div>
          <div class="admin-card"><span>Plats épuisés</span><strong>${menu.filter(it=>it.soldOut).length}</strong><small>Sold out</small></div>
        </div>
        <div class="admin-card" style="margin-top:14px;display:flex;gap:18px;align-items:center;flex-wrap:wrap;min-height:auto;">
          <div id="qr-box"></div>
          <div><strong>QR Menu</strong><br><small>Scannez pour ouvrir sur mobile.</small></div>
        </div>
        <h3 class="step-title" style="margin-top:20px;">Commandes en attente</h3>
        ${adminOrdersList(true)}
      `;
    }

    function renderAdminDaily() {
      const d = getDaily();
      return `
        <form id="admin-daily-form" class="notify-form">
          <label class="form-label">Nom FR<input class="field" name="nameFr" value="${esc(d.nameFr||"")}" required></label>
          <label class="form-label">Nom AR<input class="field" name="nameAr" value="${esc(d.nameAr||"")}" dir="rtl" required></label>
          <label class="form-label">Prix<input class="field" name="price" type="number" min="0" step="0.5" value="${esc(d.price||0)}" required></label>
          <label class="form-label">Upload image<input class="field" type="file" name="imageFile" accept="image/*"></label>
          <label class="form-label">Image URL<input class="field" name="image" value="${esc(d.image||"")}" placeholder="https://example.com/photo.jpg"></label>
          <label class="form-label">Description FR<textarea class="textarea" name="descriptionFr" required>${esc(d.descriptionFr||"")}</textarea></label>
          <label class="form-label">Description AR<textarea class="textarea" name="descriptionAr" dir="rtl" required>${esc(d.descriptionAr||"")}</textarea></label>
          <button class="btn primary" type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer</button>
        </form>
      `;
    }

    function renderAdminMenu() {
      const menu = getMenu();
      return `
        <form id="admin-add-dish" class="admin-row" style="margin-bottom:16px;" enctype="multipart/form-data">
          <select class="select" name="cat">${categories.filter(c=>c.id!=="all").map(c=>`<option value="${c.id}">${esc(c.fr)}</option>`).join("")}</select>
          <input class="field" name="fr" placeholder="Nom FR" required>
          <input class="field" name="ar" placeholder="اسم عربي" dir="rtl" required>
          <input class="field" name="price" type="number" min="0" step="0.5" placeholder="Prix" required>
          <label class="form-label" style="width:100%;margin:0;">
            Image <input class="field" type="file" name="imageFile" accept="image/*">
          </label>
          <input class="field" name="image" placeholder="Image URL (optionnel)">
          <button class="btn small primary" type="submit"><i class="fa-solid fa-plus"></i> Ajouter</button>
        </form>
        <div class="admin-list">
          ${menu.map(item=>`
            <div class="admin-row" data-admin-dish="${item.id}">
              <input class="field" name="fr" value="${esc(item.fr)}">
              <input class="field" name="ar" value="${esc(item.ar)}" dir="rtl">
              <input class="field" name="price" type="number" min="0" step="0.5" value="${esc(item.price)}">
              <label style="color:var(--muted);font-weight:900;"><input type="checkbox" name="soldOut" ${item.soldOut?"checked":""}> Épuisé</label>
              <textarea class="textarea" name="descFr" placeholder="Description FR">${esc(item.descFr||"")}</textarea>
              <textarea class="textarea" name="descAr" dir="rtl" placeholder="Description AR">${esc(item.descAr||"")}</textarea>
              <div style="display:flex;gap:8px;align-items:flex-start;flex-wrap:wrap;width:100%;">
                <img class="dish-img-preview" src="${esc(item.image||"")}" alt="" style="width:72px;height:54px;object-fit:cover;border-radius:6px;border:1px solid var(--border);flex-shrink:0;${item.image?"":"display:none;"}">
                <label style="flex:1;min-width:160px;color:var(--muted);font-weight:700;font-size:0.86rem;display:flex;flex-direction:column;gap:4px;">
                  Photo
                  <input class="field" type="file" name="imageFile" accept="image/*" style="padding:6px;">
                </label>
              </div>
              <div style="display:flex;gap:6px;flex-wrap:wrap;">
                <button class="btn small" type="button" data-admin-save-dish="${item.id}"><i class="fa-solid fa-floppy-disk"></i></button>
                <button class="btn small danger" type="button" data-admin-delete-dish="${item.id}"><i class="fa-solid fa-trash"></i></button>
              </div>
            </div>
          `).join("")}
        </div>
      `;
    }

    function renderAdminReservations() {
      const reservations = readJSON(KEYS.reservations,[]).sort((a,b)=>`${a.date}${a.time}`.localeCompare(`${b.date}${b.time}`));
      return `
        <table class="admin-table">
          <thead><tr><th>Nom</th><th>Date</th><th>Heure</th><th>Invités</th><th>Téléphone</th><th>Demandes</th><th></th></tr></thead>
          <tbody>${reservations.map(r=>`
            <tr><td>${esc(r.name)}</td><td>${esc(r.date)}</td><td>${esc(r.time)}</td><td>${esc(r.guests)}</td><td>${esc(r.phone)}</td><td>${esc(r.requests||"")}</td>
            <td><button class="btn small danger" data-delete-reservation="${r.id}"><i class="fa-solid fa-trash"></i></button></td></tr>
          `).join("") || `<tr><td colspan="7">Aucune réservation</td></tr>`}</tbody>
        </table>
      `;
    }

    function adminOrdersList(pendingOnly=false) {
      const orders = readJSON(KEYS.orders,[])
        .filter(o=>!pendingOnly||o.status==="pending")
        .sort((a,b)=>Number(a.table)-Number(b.table));
      return `<div class="admin-list">${orders.map(o=>{
        const starterNames = (o.starters||[]).map(it=>state.lang==="ar"?it.ar:it.fr).join(", ")||"-";
        const mainNames    = (o.mains||[]).map(it=>state.lang==="ar"?it.ar:it.fr).join(", ")||"-";
        const sideName     = o.side ? (state.lang==="ar"?o.side.ar:o.side.fr) : "-";
        return `
          <div class="admin-row wide">
            <div>
              <strong>Table N°${esc(o.table)}</strong><br>
              <small>Entrées: ${esc(starterNames)}</small><br>
              <small>Plats: ${esc(mainNames)}</small><br>
              <small>Extra: ${esc(sideName)}</small>
            </div>
            <div><strong>${formatPrice(o.total)}</strong><br><span>${relativeDate(o.createdAt)} — ${esc(o.status)}</span></div>
            ${o.status==="pending"?`<button class="btn small primary" type="button" data-serve-order="${o.id}">${t("markServed")}</button>`:""}
          </div>
        `;
      }).join("") || `<div class="empty-state">Aucune commande</div>`}</div>`;
    }

    function renderAdminOrders() { return adminOrdersList(false); }

    // SECTION: Admin Feedback — only visible in admin panel
    function renderAdminFeedback() {
      const revs = readJSON(KEYS.reviews,[]);
      const avg = revs.length ? (revs.reduce((s,r)=>s+Number(r.rating||0),0)/revs.length).toFixed(1) : "0.0";

      // Per-dish summary
      const byDish = {};
      revs.forEach(r => {
        if (!byDish[r.dishId]) byDish[r.dishId] = { dishFr:r.dishFr, dishAr:r.dishAr, total:0, count:0 };
        byDish[r.dishId].total += Number(r.rating||0);
        byDish[r.dishId].count += 1;
      });
      const dishRows = Object.values(byDish).sort((a,b)=>(b.total/b.count)-(a.total/a.count));

      return `
        <div style="display:flex;align-items:center;gap:18px;margin-bottom:18px;padding:14px;border:1px solid var(--border);border-radius:var(--radius);background:var(--surface-soft);">
          <strong style="font-family:var(--serif);font-size:2.4rem;color:var(--gold-2);">${avg}</strong>
          <div>${stars(avg)}<br><small style="color:var(--muted);">${revs.length} avis total</small></div>
        </div>

        ${dishRows.length ? `
        <h3 class="step-title" style="margin:0 0 10px;">Classement des plats</h3>
        <table class="admin-table" style="margin-bottom:24px;">
          <thead><tr><th>Plat</th><th>Note moy.</th><th>Avis</th></tr></thead>
          <tbody>${dishRows.map(d=>`
            <tr>
              <td>${esc(state.lang==="ar"?d.dishAr:d.dishFr)}</td>
              <td>${stars(d.total/d.count)} ${(d.total/d.count).toFixed(1)}</td>
              <td>${d.count}</td>
            </tr>
          `).join("")}</tbody>
        </table>` : ""}

        <h3 class="step-title" style="margin:0 0 10px;">Tous les avis</h3>
        <div class="feedback-preview">
          ${revs.map(r=>`
            <div class="feedback-card">
              <div style="display:flex;justify-content:space-between;align-items:center;gap:8px;">
                <strong>${esc(r.name)}</strong>${stars(r.rating)}
              </div>
              ${r.comment ? `<p>${esc(r.comment)}</p>` : ""}
              <div style="display:flex;justify-content:space-between;align-items:center;font-size:0.82rem;color:var(--muted);">
                <span style="font-weight:700;color:var(--gold-2);">${esc(state.lang==="ar"?r.dishAr:r.dishFr)}</span>
                <div style="display:flex;gap:6px;align-items:center;">
                  <span>${relativeDate(r.createdAt)}</span>
                  <button class="btn small danger" data-delete-review="${r.id}"><i class="fa-solid fa-trash"></i></button>
                </div>
              </div>
            </div>
          `).join("") || "<div class='empty-state'>Aucun avis pour l'instant</div>"}
        </div>
      `;
    }

    function renderAdminSubscribers() {
      const subs = readJSON(KEYS.subscribers,[]);
      return `
        <table class="admin-table">
          <thead><tr><th>Contact</th><th>Date</th><th></th></tr></thead>
          <tbody>${subs.map(s=>`
            <tr><td>${esc(s.contact)}</td><td>${relativeDate(s.createdAt)}</td>
            <td><button class="btn small danger" data-delete-subscriber="${s.id}"><i class="fa-solid fa-trash"></i></button></td></tr>
          `).join("") || `<tr><td colspan="3">Aucun abonné</td></tr>`}</tbody>
        </table>
      `;
    }

    function setupAdminContentEvents() {
      document.getElementById("admin-daily-form")?.addEventListener("submit", e => {
        e.preventDefault();
        const form = e.currentTarget;
        const fileInput = form.querySelector('[name="imageFile"]');
        const formData = new FormData(form);
        const data = Object.fromEntries([...formData].filter(([key]) => key !== "imageFile"));
        const saveDaily = image => {
          if (image !== undefined) data.image = image;
          writeJSON(KEYS.daily, {...data, price:Number(data.price), updatedAt:Date.now()});
          renderDaily();
          showToast(t("adminSaved"));
        };

        if (fileInput?.files?.length) {
          const file = fileInput.files[0];
          const reader = new FileReader();
          reader.onload = () => saveDaily(reader.result);
          reader.readAsDataURL(file);
        } else {
          saveDaily();
        }
      });

      document.getElementById("admin-add-category")?.addEventListener("submit", e => {
        e.preventDefault();
        const data = Object.fromEntries(new FormData(e.currentTarget));
        const idBase = normalizeCategoryId(data.catFr || data.catAr);
        let id = idBase;
        let suffix = 1;
        while (categories.some(c => c.id === id)) {
          id = `${idBase}-${suffix++}`;
        }
        const colors = pickCategoryColors(categories.length);
        const category = {
          id,
          fr: data.catFr.trim(),
          ar: data.catAr.trim(),
          a: colors.a,
          b: colors.b
        };
        categories.push(category);
        writeJSON(KEYS.categories, categories);
        renderAdmin(); renderMenuTabs(); renderStickyTabs(); renderMenu(); renderBuilder();
        showToast(t("adminSaved"));
      });

      document.getElementById("admin-add-dish")?.addEventListener("submit", e => {
        e.preventDefault();
        const form = e.currentTarget;
        const fileInput = form.querySelector('[name="imageFile"]');
        const formData = new FormData(form);
        const data = Object.fromEntries([...formData].filter(([key]) => key !== "imageFile"));
        const saveItem = image => {
          if (image !== undefined) data.image = image;
          const item = normalizeMenu([{id:`${data.cat}-${Date.now()}`, cat:data.cat, fr:data.fr, ar:data.ar, price:Number(data.price), image:data.image}])[0];
          const menu = getMenu(); menu.unshift(item); writeJSON(KEYS.menu, menu);
          renderAdmin(); renderMenuTabs(); renderStickyTabs(); renderMenu(); renderBuilder();
          showToast(t("adminSaved"));
        };

        if (fileInput?.files?.length) {
          const file = fileInput.files[0];
          const reader = new FileReader();
          reader.onload = () => saveItem(reader.result);
          reader.readAsDataURL(file);
        } else {
          saveItem();
        }
      });

      // Live image preview for all file inputs in admin content
      document.getElementById("admin-content")?.addEventListener("change", e => {
        const input = e.target;
        if(input.type !== "file" || input.name !== "imageFile" || !input.files?.length) return;
        const reader = new FileReader();
        reader.onload = ev => {
          // find nearest preview img (in dish row) or daily form preview
          const row = input.closest("[data-admin-dish]");
          if(row) {
            let preview = row.querySelector(".dish-img-preview");
            if(!preview) {
              preview = document.createElement("img");
              preview.className = "dish-img-preview";
              preview.style.cssText = "width:72px;height:54px;object-fit:cover;border-radius:6px;border:1px solid var(--border);flex-shrink:0;";
              input.closest("div").prepend(preview);
            }
            preview.src = ev.target.result;
            preview.style.display = "";
          }
          // daily form
          const dailyForm = input.closest("#admin-daily-form");
          if(dailyForm) {
            let preview = dailyForm.querySelector(".dish-img-preview");
            if(!preview) {
              preview = document.createElement("img");
              preview.className = "dish-img-preview";
              preview.style.cssText = "width:120px;height:80px;object-fit:cover;border-radius:6px;border:1px solid var(--border);margin-top:4px;display:block;";
              input.parentElement.after(preview);
            }
            preview.src = ev.target.result;
          }
        };
        reader.readAsDataURL(input.files[0]);
      });
    }

    function renderQRCode() {
      const box = document.getElementById("qr-box");
      if(!box||!window.QRCode) return;
      box.innerHTML="";
      new QRCode(box,{text:window.location.href,width:98,height:98,colorDark:"#111111",colorLight:"#ffffff",correctLevel:QRCode.CorrectLevel.H});
    }

    function saveDishFromAdmin(id) {
      const row = document.querySelector(`[data-admin-dish="${CSS.escape(id)}"]`);
      const menu = getMenu(); const item = menu.find(d=>d.id===id);
      if(!row||!item) return;
      item.fr = row.querySelector('[name="fr"]').value.trim();
      item.ar = row.querySelector('[name="ar"]').value.trim();
      item.price = Number(row.querySelector('[name="price"]').value||0);
      item.soldOut = row.querySelector('[name="soldOut"]').checked;
      item.descFr = row.querySelector('[name="descFr"]')?.value.trim() || makeDescription(item,"fr");
      item.descAr = row.querySelector('[name="descAr"]')?.value.trim() || makeDescription(item,"ar");

      const fileInput = row.querySelector('[name="imageFile"]');
      const doSave = () => {
        writeJSON(KEYS.menu, menu);
        renderMenu(); renderBuilder(); showToast(t("adminSaved"));
        const preview = row.querySelector('.dish-img-preview');
        if(preview && item.image) { preview.src = item.image; preview.style.display = ""; }
      };
      if(fileInput?.files?.length) {
        const reader = new FileReader();
        reader.onload = () => { item.image = reader.result; doSave(); };
        reader.readAsDataURL(fileInput.files[0]);
      } else {
        doSave();
      }
    }

    function deleteById(key, id) { writeJSON(key, readJSON(key,[]).filter(it=>it.id!==id)); }

    // SECTION: Modal Helpers
    function openModal(modal) {
      state.lastFocus = document.activeElement;
      modal.classList.add("open");
      document.body.style.overflow = "hidden";
      setTimeout(() => { modal.querySelector('button,[href],input,select,textarea,[tabindex]:not([tabindex="-1"])')?.focus(); }, 30);
    }

    function closeModal(modal) {
      modal.classList.remove("open");
      if(!document.querySelector(".modal.open")) document.body.style.overflow="";
      state.lastFocus?.focus?.();
    }

    function setupModalBehavior() {
      document.querySelectorAll(".modal-close").forEach(btn => {
        btn.addEventListener("click", () => closeModal(btn.closest(".modal")));
      });
      document.querySelectorAll(".modal").forEach(modal => {
        modal.addEventListener("click", e => { if(e.target===modal) closeModal(modal); });
      });
      document.addEventListener("keydown", e => {
        const modal = document.querySelector(".modal.open");
        if(!modal) return;
        if(e.key==="Escape") { closeModal(modal); return; }
        if(e.key!=="Tab") return;
        const fs = [...modal.querySelectorAll('button,[href],input,select,textarea,[tabindex]:not([tabindex="-1"])')].filter(el=>!el.hidden&&!el.disabled);
        if(!fs.length) return;
        if(e.shiftKey&&document.activeElement===fs[0]) { e.preventDefault(); fs[fs.length-1].focus(); }
        else if(!e.shiftKey&&document.activeElement===fs[fs.length-1]) { e.preventDefault(); fs[0].focus(); }
      });
    }

    // SECTION: Event Wiring
    function setupEvents() {
      document.getElementById("theme-toggle").addEventListener("click", () => {
        state.theme = state.theme==="dark"?"light":"dark"; applyTheme();
      });

      document.getElementById("lang-toggle").addEventListener("click", () => {
        document.body.style.opacity = "0.35";
        setTimeout(() => { state.lang = state.lang==="fr"?"ar":"fr"; rerenderAll(); document.body.style.opacity=""; }, 180);
      });

      document.getElementById("menu-toggle").addEventListener("click", () => {
        document.getElementById("nav-links").classList.toggle("open");
      });
      document.getElementById("nav-links").addEventListener("click", () => {
        document.getElementById("nav-links").classList.remove("open");
      });

      // Menu tabs
      document.getElementById("menu-tabs").addEventListener("click", e => {
        const btn = e.target.closest("[data-cat]");
        if(!btn) return;
        state.activeCategory = btn.dataset.cat;
        state.search = ""; document.getElementById("menu-search").value = "";
        renderMenuTabs(); renderStickyTabs(); renderMenu();
      });

      // Sticky tabs
      document.getElementById("sticky-tabs-inner").addEventListener("click", e => {
        const btn = e.target.closest("[data-sticky-cat]");
        if(!btn) return;
        state.activeCategory = btn.dataset.stickyCat;
        state.search = ""; document.getElementById("menu-search").value = "";
        renderMenuTabs(); renderStickyTabs(); renderMenu();
        // Scroll to menu section
        document.getElementById("menu").scrollIntoView({behavior:"smooth", block:"start"});
      });

      // Search
      document.getElementById("menu-search").addEventListener("input", debounce(e => {
        state.search = e.target.value; renderMenu();
      }, 200));

      // Builder multi-select
      document.getElementById("builder-steps").addEventListener("click", e => {
        const clearBtn = e.target.closest("[data-build-clear]");
        const card = e.target.closest("[data-build-type]");
        if(clearBtn) {
          const type = clearBtn.dataset.buildClear;
          if(type==="starter") state.builder.starters=[];
          else if(type==="main") state.builder.mains=[];
          else if(type==="side") state.builder.side=null;
          renderBuilder();
        }
        if(card) {
          toggleBuilderItem(card.dataset.buildType, card.dataset.buildId);
          renderBuilder();
        }
      });

      // Table number
      document.getElementById("builder-steps").addEventListener("input", e => {
        if(e.target.id!=="table-number") return;
        state.builder.table = Math.min(30, Math.max(1, Number(e.target.value||1)));
        renderBuilderSummary();
        document.querySelector(".table-badge").textContent = `${t("table")} N°${state.builder.table}`;
      });

      // Send order
      document.getElementById("builder-summary").addEventListener("click", e => {
        if(e.target.closest("#send-order")) sendOrder();
      });

      // Admin
      document.getElementById("admin-open").addEventListener("click", openAdmin);

      document.getElementById("admin-login-form").addEventListener("submit", async e => {
        e.preventDefault();
        const errorBox = document.getElementById("admin-error");
        errorBox.textContent = "";
        const password = e.currentTarget.password.value;
        try {
          const res = await fetch(`${ADMIN_API}/login.php`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            credentials: "same-origin",
            body: JSON.stringify({ password })
          });
          const data = await res.json();
          if(data.ok) {
            setAdminView(true);
            state.adminTab = "dashboard";
            await loadStore();
            renderAdmin();
          } else {
            errorBox.textContent = data.message || t("wrongPassword");
          }
        } catch {
          errorBox.textContent = "Connexion impossible. Réessayez.";
        }
      });

      document.getElementById("admin-logout").addEventListener("click", async () => {
        try {
          await fetch(`${ADMIN_API}/logout.php`, { method:"POST", credentials:"same-origin" });
        } finally {
          setAdminView(false);
          state.adminTab = "dashboard";
          document.getElementById("admin-content").innerHTML = "";
          document.getElementById("admin-tabs").innerHTML = "";
          closeModal(document.getElementById("admin-modal"));
        }
      });

      document.getElementById("admin-tabs").addEventListener("click", e => {
        const tab = e.target.closest("[data-admin-tab]");
        if(!tab) return;
        state.adminTab = tab.dataset.adminTab; renderAdmin();
      });

      document.getElementById("admin-content").addEventListener("click", e => {
        const saveDish   = e.target.closest("[data-admin-save-dish]");
        const deleteDish = e.target.closest("[data-admin-delete-dish]");
        const delRes     = e.target.closest("[data-delete-reservation]");
        const serve      = e.target.closest("[data-serve-order]");
        const delRev     = e.target.closest("[data-delete-review]");
        const delSub     = e.target.closest("[data-delete-subscriber]");

        if(saveDish) saveDishFromAdmin(saveDish.dataset.adminSaveDish);
        if(deleteDish) { writeJSON(KEYS.menu, getMenu().filter(it=>it.id!==deleteDish.dataset.adminDeleteDish)); renderAdmin(); renderMenu(); renderBuilder(); showToast(t("adminDeleted")); }
        if(delRes) { deleteById(KEYS.reservations, delRes.dataset.deleteReservation); renderAdmin(); showToast(t("adminDeleted")); }
        if(serve) {
          const orders = readJSON(KEYS.orders,[]); const o = orders.find(x=>x.id===serve.dataset.serveOrder);
          if(o) o.status="served"; writeJSON(KEYS.orders, orders); renderAdmin(); showToast(t("adminSaved"));
        }
        if(delRev) { deleteById(KEYS.reviews, delRev.dataset.deleteReview); renderAdmin(); renderMenu(); showToast(t("adminDeleted")); }
        if(delSub) { deleteById(KEYS.subscribers, delSub.dataset.deleteSubscriber); renderAdmin(); showToast(t("adminDeleted")); }
      });

      window.addEventListener("resize", () => { updateTabIndicator(); });
    }

    // SECTION: Rating Modal
    const rateState = { dishId: null, dishFr: null, dishAr: null, stars: 0 };
    const starLabels = { fr: ["","Mauvais","Bof","Bien","Très bien","Excellent !"], ar: ["","سيئ","مقبول","جيد","جيد جدًا","ممتاز!"] };

    function openRateModal(dishId, dishFr, dishAr) {
      rateState.dishId = dishId;
      rateState.dishFr = dishFr;
      rateState.dishAr = dishAr;
      rateState.stars = 0;
      document.getElementById("rate-dish-name").textContent = state.lang === "ar" ? dishAr : dishFr;
      document.getElementById("rate-modal-title").textContent = t("rateModalTitle");
      document.getElementById("rate-name").value = "";
      document.getElementById("rate-comment").value = "";
      document.getElementById("rate-error").textContent = "";
      document.getElementById("rate-chosen").textContent = "";
      updateStarPicker(0);
      openModal(document.getElementById("rate-modal"));
    }

    function updateStarPicker(val) {
      document.querySelectorAll("#star-picker button").forEach(btn => {
        btn.classList.toggle("lit", Number(btn.dataset.star) <= val);
      });
      document.getElementById("rate-chosen").textContent = val ? (starLabels[state.lang]?.[val] || "") : "";
    }

    function setupRatingModal() {
      document.getElementById("star-picker").addEventListener("click", e => {
        const btn = e.target.closest("[data-star]");
        if (!btn) return;
        rateState.stars = Number(btn.dataset.star);
        updateStarPicker(rateState.stars);
      });

      document.getElementById("star-picker").addEventListener("mouseover", e => {
        const btn = e.target.closest("[data-star]");
        if (btn) updateStarPicker(Number(btn.dataset.star));
      });
      document.getElementById("star-picker").addEventListener("mouseleave", () => {
        updateStarPicker(rateState.stars);
      });

      document.getElementById("rate-submit").addEventListener("click", () => {
        const err = document.getElementById("rate-error");
        if (!rateState.stars) { err.textContent = t("rateErrorStar"); return; }
        const name = document.getElementById("rate-name").value.trim();
        if (!name) { err.textContent = t("rateErrorName"); return; }
        err.textContent = "";
        const review = {
          id: crypto.randomUUID(),
          dishId: rateState.dishId,
          dishFr: rateState.dishFr,
          dishAr: rateState.dishAr,
          name,
          rating: rateState.stars,
          comment: document.getElementById("rate-comment").value.trim(),
          createdAt: Date.now()
        };
        const revs = readJSON(KEYS.reviews, []);
        revs.unshift(review);
        writeJSON(KEYS.reviews, revs);
        closeModal(document.getElementById("rate-modal"));
        showToast(t("rateThanks"));
        renderMenu(); // refresh star display on card
      });

      // Open modal on rate button click (delegated on menu grid)
      document.getElementById("menu-grid").addEventListener("click", e => {
        const btn = e.target.closest("[data-rate-id]");
        if (!btn) return;
        openRateModal(btn.dataset.rateId, btn.dataset.rateFr, btn.dataset.rateAr);
      });
    }

    // SECTION: Boot
    document.addEventListener("DOMContentLoaded", async () => {
      await loadStore();
      seedReviews();
      getMenu();
      getDaily();
      applyTheme();
      applyLanguage();
      renderHoursTable();
      renderDaily();
      renderMenuTabs();
      renderStickyTabs();
      renderMenu();
      renderBuilder();
      setupReservationForm();
      setupModalBehavior();
      setupEvents();
      setupObservers();
      setupParallax();
      setupStickyTabsVisibility();
      setupRatingModal();
      checkAdminSession();
    });
  </script>
</body>
</html>
