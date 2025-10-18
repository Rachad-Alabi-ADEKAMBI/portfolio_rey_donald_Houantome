<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rey-Donald HOUANTOME - Portfolio Design Graphique</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <a href="#" class="logo">RDH Design</a>
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#diplomes">Diplômes</a></li>
                    <li><a href="#contact" class="btn-contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        <span class="greeting">Salut !!!</span>
                        <span class="welcome">et Bienvenue!</span>
                    </h1>
                    <p class="hero-subtitle">
                        Expert en <strong>Design Thinking</strong>, <strong>Branding</strong> et dans la <strong>Communication Visuelle</strong>
                    </p>
                    <p class="hero-description">
                        Je m'appel <strong>Rey-Donald HOUANTOME</strong> quotidiennement surnommé le <em>"Sur-Empathiques"</em> à cause de mon excès de souciance vis à vis des Futurs Utilisateurs de Chacune de mes Conceptions Graphiques.
                    </p>
                    <div class="hero-buttons">
                        <a href="#portfolio" class="btn btn-primary">Voir mes projets</a>
                        <a href="#contact" class="btn btn-secondary">Me contacter</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-wrapper">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-13%20at%2022.54.05-T5gyC4XuzDHGwONmggdlfE6rqqiOs9.jpeg" alt="Rey-Donald HOUANTOME">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mes Services</h2>
                <p class="section-description">Des solutions créatives complètes pour votre identité visuelle</p>
            </div>

            <div class="services-grid">
                <!-- Branding -->
                <div class="service-category">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                <path d="M2 17l10 5 10-5" />
                                <path d="M2 12l10 5 10-5" />
                            </svg>
                        </div>
                        <h3 class="category-title">Branding & Identité Visuelle</h3>
                    </div>
                    <ul class="service-list">
                        <li>Création de logos professionnels</li>
                        <li>Charte graphique complète</li>
                        <li>Rebranding et refonte d'identité</li>
                        <li>Cartes de visite et papeterie</li>
                        <li>Guide d'utilisation de marque</li>
                    </ul>
                </div>

                <!-- Communication Digitale -->
                <div class="service-category">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                                <line x1="8" y1="21" x2="16" y2="21" />
                                <line x1="12" y1="17" x2="12" y2="21" />
                            </svg>
                        </div>
                        <h3 class="category-title">Communication Digitale</h3>
                    </div>
                    <ul class="service-list">
                        <li>Visuels pour réseaux sociaux (Instagram, Facebook, LinkedIn)</li>
                        <li>Templates de stories et posts</li>
                        <li>Bannières publicitaires (Google Ads, Facebook Ads)</li>
                        <li>Infographies et contenus visuels</li>
                        <li>Newsletters et emailings</li>
                    </ul>
                </div>

                <!-- Supports Imprimés -->
                <div class="service-category">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="16" y1="13" x2="8" y2="13" />
                                <line x1="16" y1="17" x2="8" y2="17" />
                                <polyline points="10 9 9 9 8 9" />
                            </svg>
                        </div>
                        <h3 class="category-title">Supports Imprimés</h3>
                    </div>
                    <ul class="service-list">
                        <li>Flyers et dépliants publicitaires</li>
                        <li>Brochures et catalogues</li>
                        <li>Affiches et posters événementiels</li>
                        <li>Packaging et étiquettes produits</li>
                        <li>Menus pour restaurants</li>
                        <li>Cartes de vœux et invitations</li>
                    </ul>
                </div>

                <!-- Autres Services -->
                <div class="service-category">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="16" x2="12" y2="12" />
                                <line x1="12" y1="8" x2="12.01" y2="8" />
                            </svg>
                        </div>
                        <h3 class="category-title">Autres Services</h3>
                    </div>
                    <ul class="service-list">
                        <li>Retouche et montage photo professionnel</li>
                        <li>Vectorisation de logos et illustrations</li>
                        <li>Création de présentations PowerPoint/Keynote</li>
                        <li>Mockups et mises en situation 3D</li>
                        <li>Animations graphiques simples (GIF, vidéos courtes)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Portfolio</h2>
                <p class="section-description">Une sélection de mes réalisations récentes</p>
            </div>

            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-14%20at%2015.19.11-p2BQYBrNH4WKp91IsM6UM8sXJeQAkR.jpeg" alt="Food Palace - Branding Restaurant">
                    </div>
                    <div class="portfolio-info">
                        <h3>Food Palace</h3>
                        <p>Identité visuelle & Communication</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-12%20at%2016.28.55-WUGMzvkTUATp8pj5Twr8EIFjETCc4O.jpeg" alt="Pretty's Perles et Accessoires">
                    </div>
                    <div class="portfolio-info">
                        <h3>Pretty's Perles</h3>
                        <p>Branding & Design d'intérieur</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-12%20at%2016.16.59-bQnZvMf1vTOTO8evwQ4W0IcD5fFmaW.jpeg" alt="Tropi Zest - Cartes de visite">
                    </div>
                    <div class="portfolio-info">
                        <h3>Tropi Zest</h3>
                        <p>Cartes de visite & Identité</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-14%20at%2011.44.11-qMrT95vS3Imm4uBzQRCX7OFNtMZn5w.jpeg" alt="Tropi Zest - Merchandising">
                    </div>
                    <div class="portfolio-info">
                        <h3>Tropi Zest</h3>
                        <p>Merchandising & Packaging</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-14%20at%2011.44.15-u6aLLUGi3F23tuZtCrKtmGZwbdKpyl.jpeg" alt="Les Exquis d'Anie">
                    </div>
                    <div class="portfolio-info">
                        <h3>Les Exquis d'Anie</h3>
                        <p>Logo & Merchandising</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-12%20at%2016.56.58-RQet1Hp4NJF6EsfLcPqg1aywBXyAjp.jpeg" alt="Sacre Party - Night Show">
                    </div>
                    <div class="portfolio-info">
                        <h3>Sacre Party</h3>
                        <p>Affiche événementielle</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-12%20at%2016.28.55%20%281%29-XmLRjB65PE1SRiGPK05yzhYHHyxU0Y.jpeg" alt="Pretty's - Bijoux">
                    </div>
                    <div class="portfolio-info">
                        <h3>Pretty's Jewelry</h3>
                        <p>Photographie produit & Branding</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202025-09-14%20at%2014.09.09-kgA8NtNWJSN9y05jThihQyx0uIKgZw.jpeg" alt="Carte de présentation">
                    </div>
                    <div class="portfolio-info">
                        <h3>Carte Personnelle</h3>
                        <p>Design & Communication</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diplômes Section -->
    <section id="diplomes" class="diplomes">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Diplômes & Certifications</h2>
                <p class="section-description">Mon parcours académique et professionnel</p>
            </div>

            <div class="diplomes-grid">
                <div class="diplome-card">
                    <div class="diplome-year">2023</div>
                    <h3 class="diplome-title">Master en Design Graphique</h3>
                    <p class="diplome-school">École Supérieure d'Arts Appliqués</p>
                    <p class="diplome-description">Spécialisation en identité visuelle et branding</p>
                </div>

                <div class="diplome-card">
                    <div class="diplome-year">2021</div>
                    <h3 class="diplome-title">Licence en Communication Visuelle</h3>
                    <p class="diplome-school">Institut des Beaux-Arts</p>
                    <p class="diplome-description">Formation complète en design et communication</p>
                </div>

                <div class="diplome-card">
                    <div class="diplome-year">2022</div>
                    <h3 class="diplome-title">Certification Adobe Creative Suite</h3>
                    <p class="diplome-school">Adobe Certified Professional</p>
                    <p class="diplome-description">Photoshop, Illustrator, InDesign</p>
                </div>

                <div class="diplome-card">
                    <div class="diplome-year">2023</div>
                    <h3 class="diplome-title">Formation Design Thinking</h3>
                    <p class="diplome-school">Innovation Academy</p>
                    <p class="diplome-description">Méthodologie centrée utilisateur</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contactez-moi</h2>
                <p class="section-description">Discutons de votre projet</p>
            </div>

            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p>contact@rdh-design.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </div>
                        <div>
                            <h4>Téléphone</h4>
                            <p>+229 62 94 93 12</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <div>
                            <h4>Localisation</h4>
                            <p>Cotonou, Bénin</p>
                        </div>
                    </div>
                </div>

                <form class="contact-form" action="send-message.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>RDH Design</h3>
                    <p>Expert en Design Thinking, Branding et Communication Visuelle</p>
                </div>

                <div class="footer-section">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#accueil">Accueil</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#diplomes">Diplômes</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>Réseaux Sociaux</h4>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Rey-Donald HOUANTOME. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>