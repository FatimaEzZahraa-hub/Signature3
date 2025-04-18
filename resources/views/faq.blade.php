@extends('layouts.app')

@section('content')
<style>
    .faq-page {
        padding: 6rem 0 4rem;
        background: linear-gradient(135deg, var(--white) 0%, var(--background) 100%);
        min-height: 100vh;
    }

    .faq-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .faq-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 1rem;
    }

    .faq-header p {
        color: var(--text-light);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .faq-content {
        background: var(--white);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .faq-category {
        margin-bottom: 3rem;
    }

    .faq-category:last-child {
        margin-bottom: 0;
    }

    .faq-category h2 {
        color: var(--primary);
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .faq-category h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--primary);
        border-radius: 2px;
    }

    .faq-item {
        background: var(--white);
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }

    .faq-item:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .faq-item h3 {
        color: var(--primary);
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .faq-item h3 i {
        color: var(--primary);
        font-size: 1.4rem;
    }

    .faq-item p {
        color: var(--text-light);
        line-height: 1.8;
        margin-bottom: 0;
    }

    .search-box {
        background: var(--white);
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 3rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .search-box input {
        width: 100%;
        padding: 1rem;
        border: 2px solid var(--primary);
        border-radius: 10px;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .search-box input:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(61, 0, 114, 0.1);
    }

    .search-box i {
        position: absolute;
        right: 1.5rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary);
    }

    @media (max-width: 768px) {
        .faq-page {
            padding: 4rem 0 2rem;
        }

        .faq-content {
            padding: 2rem;
        }

        .faq-header h1 {
            font-size: 2rem;
        }
    }
</style>

<div class="faq-page">
    <div class="container">
        <div class="faq-header">
            <h1>Questions fréquentes</h1>
            <p>Trouvez rapidement les réponses à vos questions sur l'utilisation de notre plateforme de signature électronique.</p>
        </div>

        <div class="search-box">
            <div class="position-relative">
                <input type="text" id="faqSearch" placeholder="Rechercher une question..." class="form-control">
                <i class="bi bi-search"></i>
            </div>
        </div>

        <div class="faq-content">
            <div id="noResultsMessage" style="display: none; text-align: center; padding: 2rem;">
                <h3 style="color: var(--primary); margin-bottom: 1rem;">Aucun résultat trouvé</h3>
                <p style="color: #333; font-weight: 500;">Essayez d'autres termes de recherche ou consultez nos catégories ci-dessous.</p>
                <div class="mt-4">
                    <button id="sendMessageBtn" class="btn btn-primary" style="
                        background: linear-gradient(135deg, var(--primary) 0%, #6a11cb 100%);
                        border: none;
                        padding: 1rem 2.5rem;
                        border-radius: 15px;
                        font-weight: 600;
                        font-size: 1.1rem;
                        color: white;
                        transition: all 0.3s ease;
                        box-shadow: 0 4px 15px rgba(106, 17, 203, 0.3);
                        position: relative;
                        overflow: hidden;
                    ">
                        <i class="bi bi-send me-2"></i>Envoyer un message
                        <span class="position-absolute top-0 start-0 w-100 h-100" style="
                            background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
                            transform: translateX(-100%);
                            transition: transform 0.3s ease;
                        "></span>
                    </button>
                </div>
            </div>
            <div id="thankYouMessage" style="display: none; text-align: center; padding: 2rem;">
                <div class="alert alert-success" role="alert" style="
                    background: #d4edda;
                    color: #155724;
                    border-radius: 10px;
                    padding: 1.5rem;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                ">
                    <h4 class="alert-heading" style="color: var(--primary);">
                        <i class="bi bi-check-circle-fill me-2"></i>Message envoyé !
                    </h4>
                    <p style="color: #155724; font-weight: 500;">Merci pour votre message. Notre équipe vous répondra dans les plus brefs délais.</p>
                </div>
            </div>
            <div class="faq-category">
                <h2>Général</h2>
                <div class="faq-item" data-category="general">
                    <h3><i class="bi bi-question-circle"></i>Qu'est-ce que EduTrustSign ?</h3>
                    <p>EduTrustSign est une plateforme de signature électronique dédiée au secteur éducatif, permettant de signer et gérer des documents académiques de manière sécurisée et efficace.</p>
                </div>
                <div class="faq-item" data-category="general">
                    <h3><i class="bi bi-shield-check"></i>La signature électronique est-elle légale ?</h3>
                    <p>Oui, nos signatures électroniques sont conformes au règlement eIDAS et ont la même valeur juridique qu'une signature manuscrite.</p>
                </div>
                <div class="faq-item" data-category="general">
                    <h3><i class="bi bi-currency-euro"></i>Quels sont les tarifs ?</h3>
                    <p>Nous proposons différents forfaits adaptés à la taille de votre établissement. Contactez-nous pour un devis personnalisé.</p>
                </div>
            </div>

            <div class="faq-category">
                <h2>Utilisation</h2>
                <div class="faq-item" data-category="utilisation">
                    <h3><i class="bi bi-file-earmark-text"></i>Comment ajouter des signataires ?</h3>
                    <p>Vous pouvez ajouter des signataires directement depuis votre tableau de bord en renseignant leur email. Ils recevront une notification pour signer le document.</p>
                </div>
                <div class="faq-item" data-category="utilisation">
                    <h3><i class="bi bi-people"></i>Comment suivre mes documents ?</h3>
                    <p>Vous pouvez suivre l'état de vos documents en temps réel depuis votre tableau de bord.</p>
                </div>
                <div class="faq-item" data-category="utilisation">
                    <h3><i class="bi bi-clock-history"></i>Comment suivre l'état de mes documents ?</h3>
                    <p>Un tableau de bord vous permet de suivre en temps réel l'état de tous vos documents : en attente de signature, signés, expirés, etc.</p>
                </div>
            </div>

            <div class="faq-category">
                <h2>Sécurité</h2>
                <div class="faq-item" data-category="securite">
                    <h3><i class="bi bi-lock"></i>Mes documents sont-ils sécurisés ?</h3>
                    <p>Oui, tous les documents sont cryptés et stockés de manière sécurisée. Nous utilisons des protocoles de sécurité avancés et respectons les normes RGPD.</p>
                </div>
                <div class="faq-item" data-category="securite">
                    <h3><i class="bi bi-key"></i>Comment sont gérées les authentifications ?</h3>
                    <p>Nous utilisons une authentification forte à deux facteurs et des certificats numériques pour garantir l'identité des signataires.</p>
                </div>
                <div class="faq-item" data-category="securite">
                    <h3><i class="bi bi-cloud-check"></i>Où sont stockés mes documents ?</h3>
                    <p>Vos documents sont stockés sur des serveurs sécurisés en France, conformément aux réglementations en vigueur.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('faqSearch');
    const faqItems = document.querySelectorAll('.faq-item');
    const categories = document.querySelectorAll('.faq-category');
    const noResultsMessage = document.getElementById('noResultsMessage');
    const thankYouMessage = document.getElementById('thankYouMessage');
    const sendMessageBtn = document.getElementById('sendMessageBtn');

    // Style du bouton au survol
    sendMessageBtn.addEventListener('mouseover', function() {
        this.style.transform = 'translateY(-3px)';
        this.style.boxShadow = '0 8px 20px rgba(106, 17, 203, 0.4)';
        this.querySelector('span').style.transform = 'translateX(100%)';
    });

    sendMessageBtn.addEventListener('mouseout', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = '0 4px 15px rgba(106, 17, 203, 0.3)';
        this.querySelector('span').style.transform = 'translateX(-100%)';
    });

    // Gestion du clic sur le bouton
    sendMessageBtn.addEventListener('click', function() {
        noResultsMessage.style.display = 'none';
        thankYouMessage.style.display = 'block';
        
        // Masquer le message de remerciement après 5 secondes
        setTimeout(() => {
            thankYouMessage.style.display = 'none';
        }, 5000);
    });

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        let hasVisibleItems = false;

        faqItems.forEach(item => {
            const question = item.querySelector('h3').textContent.toLowerCase();
            const answer = item.querySelector('p').textContent.toLowerCase();
            const isVisible = question.includes(searchTerm) || answer.includes(searchTerm);
            
            item.style.display = isVisible ? 'block' : 'none';
            if (isVisible) hasVisibleItems = true;
        });

        categories.forEach(category => {
            const itemsInCategory = category.querySelectorAll('.faq-item');
            const hasVisibleItemsInCategory = Array.from(itemsInCategory).some(item => 
                item.style.display !== 'none'
            );
            
            category.style.display = hasVisibleItemsInCategory ? 'block' : 'none';
        });

        if (searchTerm.length > 0 && !hasVisibleItems) {
            noResultsMessage.style.display = 'block';
            thankYouMessage.style.display = 'none';
        } else {
            noResultsMessage.style.display = 'none';
            thankYouMessage.style.display = 'none';
        }
    });
});
</script>
@endsection 