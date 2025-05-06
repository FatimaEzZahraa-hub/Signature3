<!-- resources/views/accueil.blade.php -->
@extends('layouts.app')

@section('content')
<style>
    .hero {
        background: white;
        padding: 4rem 0;
    }
    .lawn {
        color: #3d0072;
        font-weight: 700;
    }
    .hero h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }
    .hero p {
        font-size: 1.1rem;
        color: #495057;
        margin-bottom: 2rem;
    }
    .btn-primary {
        background-color: #3d0072;
        border-color: #3d0072;
        padding: 0.8rem 2rem;
        font-size: 1.1rem;
        border-radius: 50px;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #2b0052;
        border-color: #2b0052;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(61, 0, 114, 0.2);
    }
    .section-title {
        color: #3d0072;
        font-weight: 700;
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 1rem;
    }
    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: #3d0072;
    }
    .feature-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 15px;
        padding: 2rem;
        height: 100%;
        background: white;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    .feature-card h4 {
        color: #3d0072;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    .feature-card p {
        color: #6c757d;
        margin-bottom: 0;
    }
    .target-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        height: 100%;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    .target-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    .target-card h4 {
        color: #3d0072;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    .target-card p {
        color: #6c757d;
        margin-bottom: 0;
    }
    .help-section {
        background: white;
        padding: 4rem 0;
    }
    .help-section h2 {
        color: var(--primary);
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    .help-section p {
        color: var(--text-light);
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }
    .help-image-container {
        position: relative;
        display: inline-block;
        padding: 1rem;
    }
    .help-image {
        max-width: 80%;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        transition: all 0.4s ease;
        transform: perspective(1000px) rotateY(-5deg);
        border: 5px solid var(--white);
    }
    .help-image:hover {
        transform: perspective(1000px) rotateY(0deg) translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    .help-image-container::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: linear-gradient(45deg, var(--primary) 0%, var(--primary-light) 100%);
        border-radius: 25px;
        z-index: -1;
        opacity: 0.1;
        transition: all 0.4s ease;
    }
    .help-image-container:hover::before {
        opacity: 0.2;
        transform: scale(1.02);
    }
    @media (max-width: 768px) {
        .help-section {
            padding: 3rem 0;
        }
        .help-section .row {
            flex-direction: column-reverse;
        }
        .help-section .col-lg-6 {
            margin-bottom: 2rem;
        }
        .help-image {
            max-width: 70%;
        }
    }
    .footer {
        background-color: #3d0072;
        color: white;
        padding: 4rem 0 2rem;
        margin-top: 0;
        position: relative;
        width: 100%;
    }
    .footer h5 {
        color: white;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }
    .footer p {
        color: rgba(255, 255, 255, 0.8);
    }
    .footer-links {
        list-style: none;
        padding: 0;
    }
    .footer-links li {
        margin-bottom: 0.8rem;
    }
    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }
    .social-links {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
    }
    .social-links a {
        color: white;
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }
    .social-links a:hover {
        transform: translateY(-3px);
        color: rgba(255, 255, 255, 0.8);
    }
    .copyright {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 2rem;
        margin-top: 3rem;
        text-align: center;
        color: rgba(255, 255, 255, 0.6);
    }
    .help-section .btn-primary {
        background-color: #3d0072;
        border-color: #3d0072;
        color: white;
        transition: all 0.3s ease;
    }
    
    .help-section .btn-primary:hover {
        background-color: #2b0052;
        border-color: #2b0052;
        transform: translateY(-2px);
    }
    
    .help-section .btn-outline-primary {
        border-color: #3d0072;
        color: #3d0072;
        transition: all 0.3s ease;
    }
    
    .help-section .btn-outline-primary:hover {
        background-color: #3d0072;
        border-color: #3d0072;
        color: white;
        transform: translateY(-2px);
    }
    .feature-card i {
        color: #5c1a9e;
        font-size: 2rem;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .feature-card:hover i {
        color: #3d0072;
        transform: scale(1.1);
    }
</style>

<section class="hero py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h1><span class="lawn">EduTrustSign </span>: Sécurisez et signez vos documents en toute <span class="lawn">confiance.</span></h1>
                <br>
                <p class="lead">
                    EduTrustSign, plateforme de signature électronique dédiée au secteur éducatif, constitue une solution complète et sécurisée pour la gestion, la validation et l'authentification des documents académiques et administratifs. Conçue pour répondre aux exigences des établissements scolaires et universitaires, cette solution permet aux étudiants, enseignants et personnels administratifs de signer électroniquement leurs documents, d'émettre des demandes officielles et de vérifier la légitimité des pièces transmises, tout en assurant une traçabilité rigoureuse.
                    <br><br>
                    Grâce à une interface conviviale et ergonomique, EduTrustSign offre une expérience optimisée qui facilite le traitement des procédures documentaires de manière rapide et fiable. Ainsi, l'ensemble des démarches se réalise en ligne, éliminant la nécessité d'imprimer ou de se déplacer, et garantissant ainsi une gestion documentaire moderne et efficiente.
                </p>
                <center><a href="/login" class="btn btn-primary btn-lg">Se connecter</a></center>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('images/2.png') }}" alt="Bannière EduTrustSign" class="img-fluid rounded" />
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Fonctionnalités Clés</h2>
        <div class="row g-4 mt-4">
            <div class="col-md-3">
                <div class="feature-card">
                    <i class="bi bi-pen-fill"></i>
                    <h4>Signature Rapide</h4>
                    <p>Signez vos documents en quelques clics, directement depuis votre navigateur.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-card">
                    <i class="bi bi-clock-history"></i>
                    <h4>Suivi en Temps Réel</h4>
                    <p>Visualisez l'état de vos documents et parapheurs en temps réel.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-card">
                    <i class="bi bi-shield-lock"></i>
                    <h4>Sécurité Avancée</h4>
                    <p>Authentification forte, cryptage des données et journal d'audit complet.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-card">
                    <i class="bi bi-devices"></i>
                    <h4>Accessibilité Multi-Plateforme</h4>
                    <p>Accédez à la plateforme depuis n'importe quel appareil : smartphone, tablette ou PC.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <h2 class="section-title text-center">Pour Qui ?</h2>
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="target-card">
                    <h4><i class="bi bi-building me-2"></i>Administration</h4>
                    <p>Gérez les signatures, organisez des parapheurs et supervisez l'ensemble des opérations administratives.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="target-card">
                    <h4><i class="bi bi-person-workspace me-2"></i>Enseignants</h4>
                    <p>Envoyez des documents officiels, signez rapidement et suivez l'évolution des demandes de signature.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="target-card">
                    <h4><i class="bi bi-mortarboard me-2"></i>Étudiants</h4>
                    <p>Recevez et consultez vos certificats, bulletins et autres documents importants directement en ligne.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="help-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Besoin d'aide ?</h2>
                <p>Notre équipe est là pour vous accompagner dans l'utilisation de notre plateforme.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('faq') }}" class="btn btn-primary">
                        <i class="bi bi-question-circle me-2"></i>Consulter la FAQ
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">
                        <i class="bi bi-envelope me-2"></i>Contactez-nous
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="help-image-container">
                    <img src="{{ asset('images/aide.png') }}" alt="Aide" class="help-image">
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>À propos</h5>
                <p>EduTrustSign est une plateforme de signature électronique dédiée au secteur éducatif, offrant une solution complète et sécurisée pour la gestion des documents académiques.</p>
                <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-md-2 mb-4 mb-md-0">
                <h5>Liens rapides</h5>
                <ul class="footer-links">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/login">Connexion</a></li>
                    <li><a href="/aide">Aide</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <h5>Contact</h5>
                <ul class="footer-links">
                    <li><i class="bi bi-envelope me-2"></i> edutrustsign@gmail.com</li>
                    <li><i class="bi bi-telephone me-2"></i> +212 600 000 000</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Légal</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('legal.conditions') }}">Conditions d'utilisation</a></li>
                    <li><a href="{{ route('legal.confidentialite') }}">Politique de confidentialité</a></li>
                    <li><a href="{{ route('legal.mentions') }}">Mentions légales</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; {{ date('Y') }} EduTrustSign. Tous droits réservés.</p>
        </div>
    </div>
</footer>
@endsection

