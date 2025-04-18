@extends('layouts.app')

@section('content')
<style>
    .navbar {
        display: none !important;
    }
    .help-container {
        display: flex;
        min-height: 100vh;
    }

    .help-content {
        flex: 1;
        padding: 2rem;
        margin-left: 250px;
    }

    .help-header {
        text-align: center;
        margin-bottom: 3rem;
        padding: 2rem;
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        border-radius: 15px;
        color: white;
    }

    .help-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
    }

    .help-header p {
        font-size: 1.1rem;
        opacity: 0.9;
        max-width: 700px;
        margin: 0 auto;
    }

    .help-sections {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .help-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .help-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .help-card h2 {
        color: var(--primary);
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .help-card h2 i {
        font-size: 1.8rem;
        color: var(--primary);
    }

    .help-card p {
        color: var(--text-light);
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    .help-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .help-list li {
        margin-bottom: 1rem;
        padding-left: 1.5rem;
        position: relative;
        color: var(--text-light);
    }

    .help-list li::before {
        content: '•';
        color: var(--primary);
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .support-section {
        margin-top: 4rem;
        padding: 2rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .support-section h2 {
        color: var(--primary);
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 2rem;
        text-align: center;
    }

    .support-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .support-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .support-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .support-card h3 {
        color: var(--primary);
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .support-card h3 i {
        font-size: 1.5rem;
        color: var(--primary);
    }

    .contact-form {
        margin-top: 3rem;
        padding: 2rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .contact-form h3 {
        color: var(--primary);
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-light);
        font-weight: 600;
    }

    .form-control {
        width: 100%;
        padding: 0.8rem;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 2px rgba(var(--primary-rgb), 0.1);
        outline: none;
    }

    .btn-primary {
        background: var(--primary);
        color: white;
        padding: 0.8rem 2rem;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: var(--primary-dark);
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .help-content {
            margin-left: 0;
            padding: 1rem;
        }

        .help-header {
            padding: 1.5rem;
        }

        .help-header h1 {
            font-size: 2rem;
        }
    }
</style>

<div class="help-container">
    <x-sidebar />

    <div class="help-content">
        <div class="help-header">
            <h1>Centre d'aide</h1>
            <p>Bienvenue dans notre centre d'aide. Trouvez rapidement les réponses à vos questions et découvrez comment utiliser au mieux notre plateforme.</p>
        </div>

        <div class="help-sections">
            <div class="help-card">
                <h2><i class="bi bi-file-earmark-text"></i>Gestion des documents</h2>
                <p>Apprenez à gérer vos documents efficacement sur notre plateforme.</p>
                <ul class="help-list">
                    <li>Téléchargez vos documents en format PDF, DOCX ou JPG</li>
                    <li>Organisez vos documents dans des dossiers personnalisés</li>
                    <li>Suivez l'état de vos documents en temps réel</li>
                    <li>Archivez vos documents signés pour un accès ultérieur</li>
                </ul>
            </div>

            <div class="help-card">
                <h2><i class="bi bi-pen"></i>Signature électronique</h2>
                <p>Tout ce que vous devez savoir sur la signature électronique.</p>
                <ul class="help-list">
                    <li>Signez vos documents en quelques clics</li>
                    <li>Choisissez parmi différents types de signatures</li>
                    <li>Bénéficiez d'une valeur juridique équivalente à la signature manuscrite</li>
                    <li>Profitez d'une sécurité maximale pour vos signatures</li>
                </ul>
            </div>

            <div class="help-card">
                <h2><i class="bi bi-people"></i>Gestion des utilisateurs</h2>
                <p>Gérez efficacement les utilisateurs et les permissions.</p>
                <ul class="help-list">
                    <li>Ajoutez des utilisateurs à votre équipe</li>
                    <li>Définissez des rôles et permissions personnalisés</li>
                    <li>Protégez les accès avec l'authentification à deux facteurs</li>
                    <li>Récupérez facilement votre mot de passe en cas d'oubli</li>
                </ul>
            </div>

            <div class="help-card">
                <h2><i class="bi bi-shield-check"></i>Sécurité et confidentialité</h2>
                <p>Protégez vos données et respectez les normes de sécurité.</p>
                <ul class="help-list">
                    <li>Vos documents sont cryptés de bout en bout</li>
                    <li>Conformité totale avec le RGPD</li>
                    <li>Audit complet des actions effectuées</li>
                    <li>Protection contre les accès non autorisés</li>
                </ul>
            </div>
        </div>

        <div class="help-section">
            <h2>Guides pratiques</h2>
            <div class="guide-grid">
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
        </div>

        <div class="support-section">
            <h2>Support technique</h2>
            <div class="support-grid">
                <div class="support-card">
                    <h3><i class="bi bi-telephone"></i>Téléphone</h3>
                    <p>Appelez-nous pour une assistance immédiate.</p>
                    <p><strong>Support technique :</strong> +212 600 000 000</p>
                    <p><strong>Horaires :</strong> Lun-Ven, 9h-18h</p>
                </div>
            </div>

            <div class="contact-form">
                <h3>Formulaire de contact</h3>
                <form action="{{ route('support.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary">
                        <i class="bi bi-send me-2"></i>Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .guide-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .guide-card {
        background: white;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .guide-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .guide-card h3 {
        color: var(--primary);
        font-size: 1.3rem;
        font-weight: 700;
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
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .guide-steps li {
        margin-bottom: 1rem;
        padding-left: 2rem;
        position: relative;
        color: var(--text-light);
        line-height: 1.6;
    }

    .guide-steps li:before {
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
</style>
@endsection 