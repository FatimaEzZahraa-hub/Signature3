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

    .data-table {
        width: 100%;
        border-collapse: collapse;
        margin: 2rem 0;
    }

    .data-table th,
    .data-table td {
        padding: 1rem;
        border: 1px solid #eee;
        text-align: left;
    }

    .data-table th {
        background: rgba(var(--primary-rgb), 0.05);
        color: var(--primary);
        font-weight: 600;
    }

    .data-table tr:nth-child(even) {
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
            <h1>Politique de Confidentialité</h1>
            <p>Dernière mise à jour : {{ date('d/m/Y') }}</p>
        </div>

        <div class="legal-content">
            <div class="legal-section">
                <h2>1. Introduction</h2>
                <p>Chez EduTrustSign, nous accordons une grande importance à la protection de vos données personnelles. Cette politique de confidentialité explique comment nous collectons, utilisons et protégeons vos informations.</p>
            </div>

            <div class="legal-section">
                <h2>2. Collecte des Données</h2>
                <h3>2.1. Types de Données Collectées</h3>
                <p>Nous collectons les informations suivantes :</p>
                <ul>
                    <li>Informations d'identification (nom, email, numéro de téléphone)</li>
                    <li>Informations professionnelles (établissement, fonction)</li>
                    <li>Données de connexion (adresse IP, logs)</li>
                    <li>Documents soumis à signature</li>
                </ul>

                <h3>2.2. Méthodes de Collecte</h3>
                <p>Les données sont collectées lorsque vous :</p>
                <ul>
                    <li>Créez un compte</li>
                    <li>Utilisez nos services</li>
                    <li>Communiquez avec notre support</li>
                    <li>Partagez des documents</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>3. Utilisation des Données</h2>
                <p>Nous utilisons vos données pour :</p>
                <ul>
                    <li>Fournir et améliorer nos services</li>
                    <li>Assurer la sécurité de la plateforme</li>
                    <li>Communiquer avec vous</li>
                    <li>Respecter nos obligations légales</li>
                </ul>

                <div class="legal-note">
                    <p><strong>Note importante :</strong> Nous ne vendons jamais vos données personnelles à des tiers.</p>
                </div>
            </div>

            <div class="legal-section">
                <h2>4. Protection des Données</h2>
                <h3>4.1. Mesures de Sécurité</h3>
                <p>Nous mettons en œuvre des mesures de sécurité robustes :</p>
                <ul>
                    <li>Cryptage des données en transit et au repos</li>
                    <li>Authentification à deux facteurs</li>
                    <li>Audits de sécurité réguliers</li>
                    <li>Formation du personnel</li>
                </ul>

                <h3>4.2. Conservation des Données</h3>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Type de Donnée</th>
                            <th>Durée de Conservation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Données de compte</td>
                            <td>3 ans après la dernière activité</td>
                        </tr>
                        <tr>
                            <td>Documents signés</td>
                            <td>10 ans</td>
                        </tr>
                        <tr>
                            <td>Logs de connexion</td>
                            <td>1 an</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="legal-section">
                <h2>5. Vos Droits</h2>
                <p>Conformément au RGPD, vous disposez des droits suivants :</p>
                <ul>
                    <li>Droit d'accès à vos données</li>
                    <li>Droit de rectification</li>
                    <li>Droit à l'effacement</li>
                    <li>Droit à la portabilité</li>
                    <li>Droit d'opposition</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>6. Cookies et Technologies Similaires</h2>
                <p>Nous utilisons des cookies pour :</p>
                <ul>
                    <li>Améliorer votre expérience utilisateur</li>
                    <li>Analyser l'utilisation du site</li>
                    <li>Assurer la sécurité</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>7. Transferts Internationaux</h2>
                <p>Vos données sont stockées dans l'Union Européenne. En cas de transfert hors UE, nous nous assurons que des garanties appropriées sont en place.</p>
            </div>

            <div class="legal-section">
                <h2>8. Modifications de la Politique</h2>
                <p>Nous nous réservons le droit de modifier cette politique. Les changements seront notifiés via la plateforme.</p>
            </div>
        </div>
    </div>
</div>
@endsection 