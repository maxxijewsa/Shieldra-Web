<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shieldra Security</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <style>
        html {
            scroll-behavior: smooth; /* Native smooth scrolling */
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #000000; /* Solid black background */
            color: #fff;
            overflow-x: hidden;
        }

        .blur-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(20px);
            z-index: -1;
        }

        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        header {
            padding: 80px 0;
            animation: fadeIn 1s ease-in-out;
        }

        header h1 {
            font-size: 4em;
            color: #ff0000;
            text-shadow: 0 0 15px #ff0000;
            margin: 0;
            font-weight: 700;
        }

        header p {
            font-size: 1.5em;
            color: #ccc;
            margin: 20px 0;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            background: #ff0000;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.2em;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #ff0000;
        }

        .section {
            padding: 60px 0;
            animation: fadeInUp 1s ease-in-out;
        }

        .section h2 {
            font-size: 2.8em;
            color: #ff0000;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid #ff0000;
            border-radius: 10px;
            padding: 25px;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: fadeIn 1.5s ease-in-out;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 0 15px #ff0000;
        }

        .feature-card h3 {
            font-size: 1.8em;
            color: #fff;
            margin: 0 0 10px;
        }

        .feature-card p {
            color: #ccc;
            font-size: 1.1em;
        }

        footer {
            padding: 30px;
            background: rgba(0, 0, 0, 0.9);
            text-align: center;
            color: #ccc;
            margin-top: 50px;
            font-size: 1em;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            header h1 { font-size: 2.8em; }
            header p { font-size: 1.2em; }
            .section h2 { font-size: 2em; }
            .btn { font-size: 1em; padding: 12px 25px; }
        }
    </style>
</head>
<body>
    <div class="blur-overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
        <header>
            <h1>Shieldra Security</h1>
            <p>Elevate your Discord server with the ultimate bot experience!</p>
            <a href="#features" class="btn">Discover Features</a>
            <a href="https://discord.com/oauth2/authorize?client_id=1388085106282991616" class="btn">Invite Bot</a>
        </header>

        <section id="features" class="section">
            <h2>Why Choose Shieldra Security?</h2>
            <div class="features">
                <div class="feature-card">
                    <h3>Powerful Moderation</h3>
                    <p>Keep your server safe with advanced tools to manage users and content.</p>
                </div>
                <div class="feature-card">
                    <h3>Powerful Security Commands</h3>
                    <p>Powerful Anti-nuke feature with all latest commands which protect your server from every thread. Emergency feture, Server Backup.</p>
                </div>
                <div class="feature-card">
                    <h3>Music Commands</h3>
                    <p>Give a crystal clear concert like sound to your members to vibe and lighten your vc.</p>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>© 2025 Shieldra Security. All rights reserved.</p>
    </footer>

    <script>
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: '#ff0000' },
                shape: { type: 'circle' },
                opacity: { value: 0.5, random: false },
                size: { value: 3, random: true },
                line_linked: { enable: true, distance: 150, color: '#ff0000', opacity: 0.4, width: 1 },
                move: { enable: true, speed: 6, direction: 'none', random: false, straight: false, out_mode: 'out', bounce: false }
            },
            interactivity: {
                detect_on: 'canvas',
                events: { onhover: { enable: true, mode: 'repulse' }, onclick: { enable: true, mode: 'push' }, resize: true },
                modes: { repulse: { distance: 100, duration: 0.4 }, push: { particles_nb: 4 } }
            },
            retina_detect: true
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>