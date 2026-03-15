<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | El Hadji Falilou FALL</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --bg-color: #0b1120;
            --card-bg: #1e293b;
            --text-color: #f8fafc;
            --text-muted: #94a3b8;
            --accent-blue: #00d4ff;
            --accent-purple: #5851db;
            --border-color: rgba(255, 255, 255, 0.1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: 0.3s; }
        ul { list-style: none; }

        /* --- NAVIGATION --- */
        header { 
            padding: 1rem 5%; 
            position: fixed; 
            width: 100%; 
            top: 0; 
            z-index: 1000;
            background: rgba(11, 17, 32, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo { font-weight: 800; font-size: 1.5rem; color: var(--accent-blue); }

        .nav-links { display: flex; gap: 2rem; }
        .nav-links a { font-size: 0.9rem; color: var(--text-muted); font-weight: 500; }
        .nav-links a:hover, .nav-links a.active { color: var(--accent-blue); }

        .menu-toggle { display: none; color: white; font-size: 1.5rem; cursor: pointer; }

        /* --- STRUCTURE GLOBALE --- */
        section { padding: 6rem 5% 2rem; max-width: 1200px; margin: 0 auto; }
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: var(--accent-blue);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 0;
        }

        .badge {
            padding: 0.5rem 1.2rem;
            border: 1px solid var(--accent-purple);
            border-radius: 50px;
            font-size: 0.8rem;
            color: #a5b4fc;
            margin-bottom: 1.5rem;
            background: rgba(88, 81, 219, 0.1);
        }

        h1 { font-size: clamp(2.5rem, 6vw, 4.5rem); font-weight: 800; line-height: 1.1; margin-bottom: 1rem; }
        h2 { font-size: clamp(1.5rem, 4vw, 2.5rem); color: var(--text-muted); margin-bottom: 2rem; }
        .highlight { color: var(--accent-blue); }
        .cursor { display: inline-block; width: 3px; background: var(--accent-blue); animation: blink 1s infinite; }

        .hero p { max-width: 700px; color: var(--text-muted); margin-bottom: 3rem; font-size: 1.1rem; }

        .btn-group { display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; }
        .btn { padding: 0.8rem 2rem; border-radius: 8px; font-weight: 600; display: flex; align-items: center; gap: 10px; }
        .btn-primary { background: var(--accent-purple); color: white; box-shadow: 0 4px 15px rgba(88, 81, 219, 0.4); }
        .btn-secondary { border: 1px solid var(--border-color); background: rgba(255,255,255,0.05); }
        .btn:hover { transform: translateY(-3px); }

        /* --- PROFIL (Intro) --- */
        .profil-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; }
        .profil-text h3 { color: var(--accent-blue); margin-bottom: 1rem; }
        .profil-card { background: var(--card-bg); padding: 2rem; border-radius: 15px; border: 1px solid var(--border-color); }

        /* --- TABLEAU SYNTHESE --- */
        .table-container { overflow-x: auto; background: var(--card-bg); border-radius: 10px; padding: 1rem; border: 1px solid var(--border-color); }
        table { width: 100%; border-collapse: collapse; min-width: 600px; }
        th, td { padding: 1rem; text-align: left; border-bottom: 1px solid var(--border-color); }
        th { color: var(--accent-blue); font-weight: 600; }
        .check { color: #10b981; }

        /* --- FICHES D'ACTIVITÉS (Cartes) --- */
        .projects-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; }
        .project-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            transition: 0.3s;
            display: flex;
            flex-direction: column;
        }
        .project-card:hover { transform: translateY(-5px); border-color: var(--accent-blue); }
        .card-header { padding: 1.5rem; background: rgba(0, 212, 255, 0.05); border-bottom: 1px solid var(--border-color); }
        .card-body { padding: 1.5rem; flex-grow: 1; }
        .card-tags { display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 1rem; }
        .tag { font-size: 0.75rem; padding: 0.2rem 0.8rem; background: rgba(255,255,255,0.1); border-radius: 20px; }
        
        /* --- TRANSVERSE & VEILLE --- */
        .transverse-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; }
        .info-box { background: var(--card-bg); padding: 2rem; border-radius: 12px; border-left: 4px solid var(--accent-purple); }
        .info-box h4 { margin-bottom: 1rem; color: white; display: flex; align-items: center; gap: 10px; }
        
        /* --- ANNEXES --- */
        .download-list { display: flex; flex-direction: column; gap: 1rem; max-width: 600px; margin: 0 auto; }
        .download-item { 
            display: flex; justify-content: space-between; align-items: center; 
            padding: 1rem; background: var(--card-bg); border-radius: 8px; border: 1px solid var(--border-color);
        }
        .download-item:hover { border-color: var(--accent-blue); }

        /* --- MODALE (Pop-up Fiche Activité) --- */
        .modal {
            display: none; 
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.8); z-index: 2000;
            justify-content: center; align-items: center;
            backdrop-filter: blur(5px);
            padding: 1rem;
        }
        .modal-content {
            background: #1e293b; width: 100%; max-width: 800px; max-height: 90vh;
            border-radius: 15px; overflow-y: auto; position: relative;
            border: 1px solid var(--accent-blue);
            animation: slideUp 0.3s ease;
        }
        .modal-header { padding: 1.5rem; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; background: #0f172a; }
        .close-modal { font-size: 1.5rem; cursor: pointer; color: white; }
        .modal-body { padding: 2rem; }
        
        .modal-section { margin-bottom: 2rem; }
        .modal-section h4 { color: var(--accent-blue); border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 0.5rem; margin-bottom: 1rem; }
        .modal-list li { margin-bottom: 0.5rem; padding-left: 1.2rem; position: relative; }
        .modal-list li::before { content: '•'; color: var(--accent-purple); position: absolute; left: 0; font-weight: bold; }

        @keyframes slideUp { from { transform: translateY(50px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
        @keyframes blink { 50% { opacity: 0; } }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .menu-toggle { display: block; }
            .profil-grid { grid-template-columns: 1fr; }
            h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="#" class="logo">&lt;BTS SIO /&gt;</a>
            <ul class="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#synthese">Synthèse</a></li>
                <li><a href="#projets">Projets (E4)</a></li>
                <li><a href="#transverse">Veille & Support</a></li>
                <li><a href="#annexes">Annexes</a></li>
            </ul>
            <div class="menu-toggle"><i class="fas fa-bars"></i></div>
        </nav>
    </header>

    <section id="accueil" class="hero">
        <span class="badge">Session 2026 - Candidat Libre / Scolaire</span>
        <h1>El Hadji Falilou FALL</h1>
        <h2>Je suis <span class="highlight" id="typing-text"></span><span class="cursor">|</span></h2>
        
        <p>
            Étudiant en <strong>BTS SIO option SLAM</strong>. 
            Ce portfolio documente mon parcours, mes compétences et mes réalisations professionnelles pour les épreuves E4 et E5.
        </p>

        <div class="btn-group">
            <a href="#projets" class="btn btn-primary"><i class="fas fa-eye"></i> Voir mes Fiches d'Activités</a>
            <a href="#annexes" class="btn btn-secondary"><i class="fas fa-download"></i> Télécharger CV & Tableau E6</a>
        </div>
    </section>

    <section id="profil">
        <h2 class="section-title">Présentation</h2>
        <div class="profil-grid">
            <div class="profil-text">
                <h3><i class="fas fa-user-graduate"></i> Mon Profil</h3>
                <p>Passionné par le développement d'applications et l'architecture logicielle, je me suis orienté vers le BTS SIO option SLAM pour acquérir des compétences solides en développement Full-Stack.</p>
                <br>
                <h3><i class="fas fa-bullseye"></i> Objectifs du Portfolio</h3>
                <p>Ce document numérique sert de support pour l'épreuve U5. Il démontre ma capacité à concevoir, développer et maintenir des solutions applicatives tout en respectant les normes de sécurité et de gestion de projet.</p>
            </div>
            <div class="profil-card">
                <h3>Infos Clés</h3>
                <ul style="margin-top: 1rem; line-height: 2;">
                    <li><strong>Option :</strong> SLAM (Solutions Logicielles)</li>
                    <li><strong>Statut :</strong> Alternance / Initial</li>
                    <li><strong>Session :</strong> 2026</li>
                    <li><strong>Spécialité :</strong> Web & Mobile (Java, PHP, JS)</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="synthese">
        <h2 class="section-title">Synthèse des Compétences</h2>
        <p style="text-align:center; margin-bottom:2rem; color:var(--text-muted);">Croisement entre les compétences du référentiel et mes réalisations.</p>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Compétences (Bloc 1 & 2)</th>
                        <th>Stage 1</th>
                        <th>Stage 2 / Projet</th>
                        <th>Atelier Pro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gérer le patrimoine informatique</td>
                        <td class="check"><i class="fas fa-check-circle"></i></td>
                        <td></td>
                        <td class="check"><i class="fas fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td>Concevoir et développer une solution</td>
                        <td class="check"><i class="fas fa-check-circle"></i></td>
                        <td class="check"><i class="fas fa-check-circle"></i></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Assurer la maintenance corrective</td>
                        <td></td>
                        <td class="check"><i class="fas fa-check-circle"></i></td>
                        <td></td>
                    </tr>
                     <tr>
                        <td>Gérer les données (BDD)</td>
                        <td class="check"><i class="fas fa-check-circle"></i></td>
                        <td class="check"><i class="fas fa-check-circle"></i></td>
                        <td class="check"><i class="fas fa-check-circle"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="projets">
        <h2 class="section-title">Fiches d'Activités Professionnelles</h2>
        <div class="projects-grid">
            
            <div class="project-card">
                <div class="card-header">
                    <h3><i class="fas fa-building"></i> Gestion de Stock</h3>
                    <span style="font-size: 0.8rem; color: var(--accent-blue);">Stage 1ere Année</span>
                </div>
                <div class="card-body">
                    <p class="text-muted">Développement d'une application web pour automatiser la gestion des entrées/sorties de matériel.</p>
                    <div class="card-tags">
                        <span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">MVC</span>
                    </div>
                    <button class="btn btn-primary" style="margin-top: 1.5rem; width:100%;" onclick="openModal('modal1')">
                        Voir la Fiche Détaillée
                    </button>
                </div>
            </div>

            <div class="project-card">
                <div class="card-header">
                    <h3><i class="fas fa-mobile-alt"></i> App Réservation</h3>
                    <span style="font-size: 0.8rem; color: var(--accent-blue);">Projet E4 / E6</span>
                </div>
                <div class="card-body">
                    <p class="text-muted">Création d'une API Rest et d'un client mobile pour la réservation de salles de réunion.</p>
                    <div class="card-tags">
                        <span class="tag">Java</span><span class="tag">Android</span><span class="tag">API Rest</span>
                    </div>
                    <button class="btn btn-primary" style="margin-top: 1.5rem; width:100%;" onclick="openModal('modal2')">
                        Voir la Fiche Détaillée
                    </button>
                </div>
            </div>

        </div>
    </section>

    <section id="transverse">
        <h2 class="section-title">Éléments Transversaux & Veille</h2>
        <div class="transverse-grid">
            
            <div class="info-box">
                <h4><i class="fas fa-tools"></i> Support & Gestion (U5)</h4>
                <p style="margin-bottom:1rem; font-size:0.9rem;">Outils et méthodes utilisés pour le suivi des projets.</p>
                <ul class="modal-list">
                    <li><strong>Ticketing :</strong> Utilisation de GLPI pour le suivi des incidents.</li>
                    <li><strong>Gestion de projet :</strong> Méthode Kanban avec Trello.</li>
                    <li><strong>Versioning :</strong> Git & GitHub pour le travail collaboratif.</li>
                </ul>
            </div>

            <div class="info-box">
                <h4><i class="fas fa-shield-alt"></i> Cybersécurité (U7)</h4>
                <p style="margin-bottom:1rem; font-size:0.9rem;">Intégration de la sécurité dans mes développements.</p>
                <ul class="modal-list">
                    <li>Protection contre les <strong>Injections SQL</strong> (Requêtes préparées).</li>
                    <li>Hachage des mots de passe (Argon2 / Bcrypt).</li>
                    <li>Respect du <strong>RGPD</strong> (Données minimisées).</li>
                </ul>
            </div>

            <div class="info-box">
                <h4><i class="fas fa-satellite-dish"></i> Veille Technologique</h4>
                <p style="margin-bottom:0.5rem;"><strong>Sujet :</strong> L'impact de l'IA sur le code (GitHub Copilot).</p>
                <p style="margin-bottom:1rem;"><strong>Outils :</strong> Feedly, Dev.to, Twitter Tech.</p>
                <a href="#" style="color:var(--accent-blue); text-decoration:underline;">Lire la synthèse de veille</a>
            </div>

        </div>
    </section>

    <section id="annexes" style="padding-bottom: 6rem;">
        <h2 class="section-title">Annexes & Justificatifs</h2>
        <div class="download-list">
            <a href="#" class="download-item">
                <span><i class="fas fa-file-pdf"></i> Tableau de Synthèse E6 (Officiel)</span>
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="download-item">
                <span><i class="fas fa-file-pdf"></i> CV El Hadji Falilou FALL</span>
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="download-item">
                <span><i class="fas fa-file-contract"></i> Attestations de Stage</span>
                <i class="fas fa-download"></i>
            </a>
        </div>
    </section>

    <footer style="text-align: center; padding: 2rem; border-top: 1px solid var(--border-color); color: var(--text-muted); font-size: 0.9rem;">
        <p>&copy; 2026 El Hadji Falilou FALL - BTS SIO Option SLAM</p>
    </footer>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Fiche Activité N°1 : Gestion de Stock</h3>
                <span class="close-modal" onclick="closeModal('modal1')">&times;</span>
            </div>
            <div class="modal-body">
                <div class="modal-section">
                    <h4>1. Contexte de l'activité</h4>
                    <p>Réalisé lors de mon stage de 1ère année chez [Nom Entreprise]. L'entreprise gérait ses stocks sur Excel, ce qui provoquait des erreurs.</p>
                </div>
                <div class="modal-section">
                    <h4>2. Objectifs & Problématique</h4>
                    <ul class="modal-list">
                        <li><strong>Problème :</strong> Perte de temps et désynchronisation des stocks.</li>
                        <li><strong>Objectif :</strong> Créer une interface web centralisée accessible par les magasiniers.</li>
                    </ul>
                </div>
                <div class="modal-section">
                    <h4>3. Réalisations Techniques</h4>
                    <p>Développement d'une application CRUD (Create, Read, Update, Delete).</p>
                    <br>
                    <ul class="modal-list">
                        <li>Conception de la BDD (MCD/MLD) avec SQL Server.</li>
                        <li>Développement Back-end en PHP (Architecture MVC).</li>
                        <li>Interface Front-end responsive (Bootstrap).</li>
                    </ul>
                </div>
                <div class="modal-section">
                    <h4>4. Compétences Validées</h4>
                    <span class="tag">Concevoir une solution</span>
                    <span class="tag">Gérer des données</span>
                    <span class="tag">Travailler en mode projet</span>
                </div>
                <div class="modal-section">
                    <h4>5. Preuves (Annexes)</h4>
                    <p style="font-style: italic; color: #cbd5e1;">[Insérer ici : Captures d'écran de l'application, Schéma de la BDD]</p>
                </div>
            </div>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Fiche Activité N°2 : App Mobile</h3>
                <span class="close-modal" onclick="closeModal('modal2')">&times;</span>
            </div>
            <div class="modal-body">
                <div class="modal-section">
                    <h4>1. Contexte</h4>
                    <p>Projet réalisé en cours pour l'épreuve E4. Besoin d'une solution mobile pour les commerciaux.</p>
                </div>
                <p>Contenu à compléter selon le plan...</p>
            </div>
        </div>
    </div>

    <script>
        // 1. Animation Texte "Typing"
        const textElement = document.getElementById('typing-text');
        const phrases = ["Développeur SLAM", "Futur Expert", "Passionné"];
        let phraseIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function type() {
            const currentPhrase = phrases[phraseIndex];
            
            if (isDeleting) {
                textElement.textContent = currentPhrase.substring(0, charIndex - 1);
                charIndex--;
            } else {
                textElement.textContent = currentPhrase.substring(0, charIndex + 1);
                charIndex++;
            }

            if (!isDeleting && charIndex === currentPhrase.length) {
                isDeleting = true;
                setTimeout(type, 2000); // Pause à la fin du mot
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;
                setTimeout(type, 500);
            } else {
                setTimeout(type, isDeleting ? 50 : 100);
            }
        }
        document.addEventListener('DOMContentLoaded', type);

        // 2. Gestion des Modales (Popups)
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Empêche le scroll derrière
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Fermer si on clique en dehors
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    </script>
</body>
</html>