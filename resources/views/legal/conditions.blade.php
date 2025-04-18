@extends('layouts.app')

@section('content')
<style>
    .legal-page {
        padding: 4rem 0;
        background: linear-gradient(135deg, var(--white) 0%, var(--background) 100%);
        min-height: 100vh;
    }

    .legal-header {
        text-align: center;
        margin-bottom: 4rem;
        padding: 2rem;
        background: var(--white);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .legal-header h1 {
        color: var(--primary);
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
    }

    .legal-header p {
        color: var(--text-light);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .legal-content {
        background: var(--white);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .legal-section {
        margin-bottom: 3rem;
    }

    .legal-section:last-child {
        margin-bottom: 0;
    }

    .legal-section h2 {
        color: var(--primary);
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .legal-section h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--primary);
        border-radius: 2px;
    }

    .legal-section h3 {
        color: var(--primary);
        font-size: 1.4rem;
        font-weight: 600;
        margin: 2rem 0 1rem;
    }

    .legal-section p {
        color: var(--text-light);
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    .legal-section ul {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem;
    }

    .legal-section ul li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 1rem;
        color: var(--text-light);
        line-height: 1.6;
    }

    .legal-section ul li::before {
        content: '•';
        color: var(--primary);
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .legal-note {
        background: rgba(var(--primary-rgb), 0.05);
        border-left: 4px solid var(--primary);
        padding: 1.5rem;
        margin: 2rem 0;
        border-radius: 0 10px 10px 0;
    }

    .legal-note p {
        margin-bottom: 0;
        color: var(--text-light);
    }

    .legal-table {
        width: 100%;
        border-collapse: collapse;
        margin: 2rem 0;
    }

    .legal-table th,
    .legal-table td {
        padding: 1rem;
        border: 1px solid #eee;
        text-align: left;
    }

    .legal-table th {
        background: rgba(var(--primary-rgb), 0.05);
        color: var(--primary);
        font-weight: 600;
    }

    .legal-table tr:nth-child(even) {
        background: rgba(var(--primary-rgb), 0.02);
    }

    @media (max-width: 768px) {
        .legal-page {
            padding: 2rem 0;
        }

        .legal-content {
            padding: 2rem;
        }

        .legal-header h1 {
            font-size: 2rem;
        }
    }
</style>

<div class="legal-page">
    <div class="container">
        <div class="legal-header">
            <h1>Conditions Générales d'Utilisation</h1>
            <p>Dernière mise à jour : {{ date('d/m/Y') }}</p>
        </div>

        <div class="legal-content">
            <div class="legal-section">
                <h2>1. Introduction</h2>
                <p>Bienvenue sur EduTrustSign. Ces conditions générales d'utilisation régissent votre utilisation de notre plateforme de signature électronique. En accédant à notre service, vous acceptez ces conditions dans leur intégralité.</p>
            </div>

            <div class="legal-section">
                <h2>2. Définitions</h2>
                <ul>
                    <li><strong>Plateforme</strong> : Le service de signature électronique EduTrustSign</li>
                    <li><strong>Utilisateur</strong> : Toute personne accédant à la plateforme</li>
                    <li><strong>Document</strong> : Tout fichier soumis à la signature électronique</li>
                    <li><strong>Signature</strong> : La signature électronique apposée sur un document</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>3. Acceptation des Conditions</h2>
                <p>En utilisant notre plateforme, vous déclarez :</p>
                <ul>
                    <li>Avoir pris connaissance des présentes conditions</li>
                    <li>Les accepter sans réserve</li>
                    <li>Être majeur et capable de contracter</li>
                    <li>Disposer des droits nécessaires pour signer les documents</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>4. Utilisation du Service</h2>
                <h3>4.1. Accès et Inscription</h3>
                <p>L'accès à certaines fonctionnalités nécessite une inscription préalable. Vous vous engagez à fournir des informations exactes et à jour.</p>

                <h3>4.2. Responsabilités</h3>
                <p>En tant qu'utilisateur, vous vous engagez à :</p>
                <ul>
                    <li>Utiliser le service conformément à la loi</li>
                    <li>Ne pas perturber le fonctionnement du service</li>
                    <li>Protéger vos identifiants de connexion</li>
                    <li>Respecter les droits de propriété intellectuelle</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>5. Sécurité et Confidentialité</h2>
                <p>Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos données. Cependant, vous êtes responsable de la confidentialité de vos identifiants.</p>
                
                <div class="legal-note">
                    <p><strong>Note importante :</strong> Nous ne stockons jamais vos mots de passe en clair et utilisons des protocoles de sécurité avancés pour protéger vos données.</p>
                </div>
            </div>

            <div class="legal-section">
                <h2>6. Tarification et Paiement</h2>
                <table class="legal-table">
                    <thead>
                        <tr>
                            <th>Plan</th>
                            <th>Fonctionnalités</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gratuit</td>
                            <td>Fonctionnalités de base</td>
                            <td>0€/mois</td>
                        </tr>
                        <tr>
                            <td>Professionnel</td>
                            <td>Fonctionnalités avancées</td>
                            <td>À partir de 9.99€/mois</td>
                        </tr>
                        <tr>
                            <td>Entreprise</td>
                            <td>Fonctionnalités complètes</td>
                            <td>Sur devis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="legal-section">
                <h2>7. Propriété Intellectuelle</h2>
                <p>La plateforme et son contenu sont protégés par des droits de propriété intellectuelle. Toute reproduction ou utilisation non autorisée est interdite.</p>
            </div>

            <div class="legal-section">
                <h2>8. Limitation de Responsabilité</h2>
                <p>Nous nous efforçons de fournir un service de qualité, mais ne pouvons garantir son fonctionnement ininterrompu ou exempt d'erreurs.</p>
            </div>

            <div class="legal-section">
                <h2>9. Modification des Conditions</h2>
                <p>Nous nous réservons le droit de modifier ces conditions à tout moment. Les modifications prendront effet dès leur publication sur la plateforme.</p>
            </div>
        </div>
    </div>
</div>
@endsection 