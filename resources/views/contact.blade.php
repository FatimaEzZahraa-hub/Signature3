@extends('layouts.app')

@section('content')
<style>
    .contact-page {
        padding: 6rem 0 4rem;
        background: linear-gradient(135deg, var(--white) 0%, var(--background) 100%);
        min-height: 100vh;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .contact-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 1rem;
    }

    .contact-header p {
        color: var(--text-light);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .contact-content {
        background: var(--white);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .contact-info {
        margin-bottom: 3rem;
    }

    .contact-info h2 {
        color: var(--primary);
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .contact-info h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--primary);
        border-radius: 2px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
        padding: 1.5rem;
        background: var(--white);
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .contact-item i {
        font-size: 2rem;
        color: var(--primary);
    }

    .contact-item-content h3 {
        color: var(--primary);
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .contact-item-content p {
        color: var(--text-light);
        margin-bottom: 0;
    }

    .contact-form {
        background: var(--white);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .contact-form h2 {
        color: var(--primary);
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .contact-form h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--primary);
        border-radius: 2px;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-dark);
        font-weight: 500;
    }

    .form-control {
        width: 100%;
        padding: 0.8rem 1rem;
        border: 2px solid var(--primary);
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(61, 0, 114, 0.1);
    }

    .form-control::placeholder {
        color: var(--text-light);
    }

    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }

    .submit-btn {
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
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(106, 17, 203, 0.4);
    }

    .submit-btn span {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }

    .submit-btn:hover span {
        transform: translateX(100%);
    }

    .alert {
        display: none;
        margin-top: 1.5rem;
        padding: 1rem;
        border-radius: 10px;
        font-weight: 500;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    @media (max-width: 768px) {
        .contact-page {
            padding: 4rem 0 2rem;
        }

        .contact-content {
            padding: 2rem;
        }

        .contact-header h1 {
            font-size: 2rem;
        }
    }
</style>

<div class="contact-page">
    <div class="container">
        <div class="contact-header">
            <h1>Contactez-nous</h1>
            <p>Notre équipe est à votre disposition pour répondre à toutes vos questions sur notre plateforme de signature électronique.</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="contact-content">
                    <div class="contact-info">
                        <h2>Informations de contact</h2>
                     
                        <div class="contact-item">
                            <i class="bi bi-telephone"></i>
                            <div class="contact-item-content">
                                <h3>Téléphone</h3>
                                <p>+212 600 000 000</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-envelope"></i>
                            <div class="contact-item-content">
                                <h3>Email</h3>
                                <p>edutrustsign@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-clock"></i>
                            <div class="contact-item-content">
                                <h3>Horaires</h3>
                                <p>Lundi-Vendredi<br>09:00 - 17:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-form">
                    <h2>Envoyer un message</h2>
                    <form id="contactForm" class="contact-form">
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
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="bi bi-send me-2"></i>Envoyer le message
                            <span></span>
                        </button>

                        <div id="successAlert" class="alert alert-success" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>Votre message a été envoyé avec succès !
                        </div>

                        <div id="errorAlert" class="alert alert-danger" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i><span id="errorMessage"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const successAlert = document.getElementById('successAlert');
    const errorAlert = document.getElementById('errorAlert');
    const errorMessage = document.getElementById('errorMessage');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch('/contact', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                successAlert.style.display = 'block';
                errorAlert.style.display = 'none';
                form.reset();
                setTimeout(() => {
                    successAlert.style.display = 'none';
                }, 5000);
            } else {
                errorMessage.textContent = data.message;
                errorAlert.style.display = 'block';
                successAlert.style.display = 'none';
            }
        })
        .catch(error => {
            errorMessage.textContent = 'Une erreur est survenue. Veuillez réessayer.';
            errorAlert.style.display = 'block';
            successAlert.style.display = 'none';
        });
    });
});
</script>
@endsection 