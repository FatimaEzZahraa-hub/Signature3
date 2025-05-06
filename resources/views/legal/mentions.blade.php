@extends('layouts.app')

@section('content')
<style>
    .legal-page {
        padding: 6rem 0 4rem;
        background: linear-gradient(135deg, var(--white) 0%, var(--background) 100%);
        min-height: 100vh;
    }

    .legal-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .legal-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary);
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

    .back-to-home {
        text-align: center;
        margin-top: 3rem;
    }

    .back-to-home a {
        color: var(--primary);
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }

    .back-to-home a:hover {
        color: var(--primary-dark);
        transform: translateX(-5px);
    }

    @media (max-width: 768px) {
        .legal-page {
            padding: 4rem 0 2rem;
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
            <h1>Mentions légales</h1>
            <p>Dernière mise à jour : {{ date('d/m/Y') }}</p>
        </div>

        <div class="legal-content">
            <div class="legal-section">
                <h2>1. Éditeur du site</h2>
                <p>Le site web EduTrustSign est édité par :</p>
                <ul>
                    <li>Raison sociale : EduTrustSign</li>
                    <li>Forme juridique : Société par actions simplifiée</li>
                    <li>Capital social : 10 000 €</li>
                    <li>Siège social : 123 Rue de l'Éducation, 75000 Paris</li>
                    <li>RCS : Paris B 123 456 789</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>2. Hébergement</h2>
                <p>Le site est hébergé par :</p>
                <ul>
                    <li>Nom : DigitalOcean</li>
                    <li>Adresse : 101 Avenue of the Americas, New York, NY 10013, États-Unis</li>
                    <li>Téléphone : +1 (347) 875-6044</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>3. Directeur de la publication</h2>
                <p>Le directeur de la publication est :</p>
                <ul>
                    <li>Nom : Jean Dupont</li>
                    <li>Fonction : Directeur Général</li>
                    <li>Email : jean.dupont@edutrustsign.com</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>4. Propriété intellectuelle</h2>
                <p>Tous les éléments du site EduTrustSign (textes, graphismes, logos, images, sons, logiciels, etc.) sont protégés par les lois relatives à la propriété intellectuelle. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site est strictement interdite sans l'autorisation expresse d'EduTrustSign.</p>
            </div>

            <div class="legal-section">
                <h2>5. Protection des données</h2>
                <p>Conformément à la loi "Informatique et Libertés" du 6 janvier 1978 modifiée et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification, de suppression et de portabilité des données vous concernant. Pour exercer ces droits, contactez-nous à : contact@edutrustsign.com</p>
            </div>

            <div class="back-to-home">
                <a href="/">
                    <i class="bi bi-arrow-left"></i>
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 