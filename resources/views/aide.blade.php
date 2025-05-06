@extends('layouts.app')

@section('content')
<style>
    .help-page {
        padding: 6rem 0 4rem;
        background: linear-gradient(135deg, var(--white) 0%, var(--background) 100%);
        min-height: 100vh;
    }

    .help-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .help-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 1rem;
    }

    .help-header p {
        color: var(--text-light);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .help-content {
        background: var(--white);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .help-section {
        margin-bottom: 3rem;
    }

    .help-section:last-child {
        margin-bottom: 0;
    }

    .help-section h2 {
        color: var(--primary);
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .help-section h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--primary);
        border-radius: 2px;
    }

    .help-section p {
        color: var(--text-light);
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    .help-section ul {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem;
    }

    .help-section ul li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 1rem;
        color: var(--text-light);
        line-height: 1.6;
    }

    .help-section ul li::before {
        content: '•';
        color: var(--primary);
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .guide-card {
        background: var(--white);
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .guide-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .guide-card h3 {
        color: var(--primary);
        font-size: 1.4rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .guide-card h3 i {
        font-size: 1.5rem;
        color: var(--primary);
    }

    .guide-steps {
        list-style: none;
        padding: 0;
        margin: 0;
        counter-reset: step;
    }

    .guide-steps li {
        position: relative;
        padding-left: 2.5rem;
        margin-bottom: 1rem;
        color: var(--text-light);
        line-height: 1.6;
    }

    .guide-steps li::before {
        content: counter(step);
        counter-increment: step;
        position: absolute;
        left: 0;
        background: var(--primary);
        color: white;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .faq-item {
        background: var(--white);
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .faq-item:hover {
        transform: translateX(5px);
    }

    .faq-item h3 {
        color: var(--primary);
        font-size: 1.2rem;
        margin-bottom: 1rem;
    }

    .faq-item p {
        color: var(--text-light);
        margin-bottom: 0;
    }

    .contact-support {
        background: var(--primary);
        color: var(--white);
        padding: 3rem;
        border-radius: 20px;
        text-align: center;
        margin-top: 3rem;
    }

    .contact-support h2 {
        color: var(--white);
        margin-bottom: 1.5rem;
    }

    .contact-support p {
        color: rgba(255,255,255,0.8);
        margin-bottom: 2rem;
    }

    .btn-light {
        background: var(--white);
        color: var(--primary);
        padding: 0.8rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-light:hover {
        background: var(--white);
        color: var(--primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
        .help-page {
            padding: 4rem 0 2rem;
        }

        .help-content {
            padding: 2rem;
        }

        .help-header h1 {
            font-size: 2rem;
        }
    }
</style>

<div class="help-page">
    <div class="container">
        <div class="help-header">
            <h1>Centre d'aide EduTrustSign</h1>
            <p>Découvrez comment utiliser notre plateforme de signature électronique de manière efficace et sécurisée.</p>
        </div>

        <div class="help-content">
            <div class="help-section">
                <h2>Guide de démarrage</h2>
                <p>Bienvenue sur EduTrustSign ! Suivez ces étapes pour commencer à utiliser notre plateforme :</p>
                <ul>
                    <li>Créez votre compte en utilisant votre adresse email professionnelle</li>
                    <li>Complétez votre profil avec vos informations professionnelles</li>
                    <li>Configurez vos préférences de signature</li>
                    <li>Importez vos premiers documents à signer</li>
                </ul>
            </div>

            <div class="help-section">
                <h2>Guides pratiques</h2>
                <div class="guide-card">
                    <h3><i class="bi bi-file-earmark-plus"></i>Créer un nouveau document</h3>
                    <ol class="guide-steps">
                        <li>Cliquez sur "Nouveau document" dans votre tableau de bord</li>
                        <li>Sélectionnez le fichier à télécharger</li>
                        <li>Ajoutez les signataires requis</li>
                        <li>Configurez les options de signature</li>
                        <li>Envoyez le document pour signature</li>
                    </ol>
                </div>

                <div class="guide-card">
                    <h3><i class="bi bi-person-plus"></i>Ajouter un nouveau contact</h3>
                    <ol class="guide-steps">
                        <li>Accédez à la section "Contacts"</li>
                        <li>Cliquez sur "Nouveau contact"</li>
                        <li>Remplissez les informations du contact</li>
                        <li>Définissez les permissions d'accès</li>
                        <li>Enregistrez le contact</li>
                    </ol>
                </div>

                <div class="guide-card">
                    <h3><i class="bi bi-folder-plus"></i>Organiser vos documents</h3>
                    <ol class="guide-steps">
                        <li>Créez des dossiers thématiques</li>
                        <li>Déplacez vos documents dans les dossiers appropriés</li>
                        <li>Utilisez les tags pour une meilleure organisation</li>
                        <li>Configurez les accès par dossier</li>
                        <li>Archivez les documents signés</li>
                    </ol>
                </div>
            </div>

            <div class="help-section">
                <h2>FAQ</h2>
                <div class="faq-item">
                    <h3>Comment fonctionne la signature électronique ?</h3>
                    <p>La signature électronique sur EduTrustSign utilise des certificats numériques pour garantir l'authenticité et l'intégrité des documents. Chaque signature est horodatée et enregistrée de manière sécurisée.</p>
                </div>
                <div class="faq-item">
                    <h3>Quels types de documents puis-je signer ?</h3>
                    <p>Vous pouvez signer tous types de documents académiques et administratifs : contrats, certificats, bulletins, attestations, etc. Les formats supportés sont PDF, DOCX et JPG.</p>
                </div>
                <div class="faq-item">
                    <h3>Comment puis-je suivre l'état de mes documents ?</h3>
                    <p>Un tableau de bord vous permet de suivre en temps réel l'état de tous vos documents : en attente de signature, signés, expirés, etc. Des notifications vous informent des mises à jour importantes.</p>
                </div>
                <div class="faq-item">
                    <h3>Mes documents sont-ils sécurisés ?</h3>
                    <p>Oui, tous les documents sont cryptés et stockés de manière sécurisée. Nous utilisons des protocoles de sécurité avancés et respectons les normes RGPD pour la protection des données.</p>
                </div>
            </div>

            <div class="contact-support">
                <h2>Contactez-nous si vous avez un problème</h2>
                <p>Notre équipe de support est à votre disposition pour vous aider.</p>
                <a href="{{ route('contact') }}" class="btn btn-light">
                    <i class="bi bi-headset me-2"></i>Contactez-nous
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 