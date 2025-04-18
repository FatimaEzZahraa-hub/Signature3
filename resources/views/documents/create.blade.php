@extends('layouts.app')

@section('content')
<style>
    .navbar {
        display: none !important;
    }
    footer {
        display: none !important;
    }
    body {
        padding-top: 0 !important;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background-color: #f3f3f3;
    }
    main {
        flex: 1;
    }
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: none !important;
    }
    .card-header {
        background-color: #3d0072;
        color: white;
        border-radius: 15px 15px 0 0;
        padding: 15px 20px;
    }
    .form-control {
        border: 1px solid #3d0072;
        border-radius: 8px;
        transition: none !important;
    }
    .form-control:focus {
        border-color: #3d0072;
        box-shadow: none !important;
    }
    .btn-primary {
        background-color: #3d0072;
        border-color: #3d0072;
        transition: none !important;
    }
    .btn-primary:hover {
        background-color: #3d0072;
        border-color: #3d0072;
    }
    .btn-outline-secondary {
        transition: none !important;
    }
    .btn-outline-secondary:hover {
        background-color: transparent;
        color: #6c757d;
    }
    .btn-light {
        transition: none !important;
    }
    .btn-light:hover {
        background-color: #f8f9fa;
        border-color: #f8f9fa;
    }
    .form-select {
        border: 1px solid #3d0072;
        border-radius: 8px;
        transition: none !important;
    }
    .form-select:focus {
        border-color: #3d0072;
        box-shadow: none !important;
    }
</style>

<x-sidebar />

<div class="content" id="content">
    <div class="container py-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Ajouter un Document</h5>
                <a href="{{ route('documents.index') }}" class="btn btn-sm btn-light">
                    <i class="bi bi-x-lg"></i>
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Titre --}}
                    <div class="mb-4">
                        <label for="titre" class="form-label">Titre du document</label>
                        <input 
                            type="text" 
                            name="titre" 
                            id="titre" 
                            class="form-control @error('titre') is-invalid @enderror" 
                            placeholder="Entrez le titre du document" 
                            value="{{ old('titre') }}"
                            required>
                        @error('titre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea 
                            name="description" 
                            id="description" 
                            class="form-control @error('description') is-invalid @enderror" 
                            rows="4" 
                            placeholder="Ajoutez une description (optionnel)">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Fichier --}}
                    <div class="mb-4">
                        <label for="file" class="form-label">Fichier à uploader</label>
                        <input 
                            type="file" 
                            name="file" 
                            id="file" 
                            class="form-control @error('file') is-invalid @enderror"
                            accept=".pdf,.doc,.docx"
                            required>
                        @error('file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Date limite --}}
                    <div class="mb-4">
                        <label for="due_date" class="form-label">Date Limite de Signature</label>
                        <input 
                            type="date" 
                            name="due_date" 
                            id="due_date" 
                            class="form-control @error('due_date') is-invalid @enderror" 
                            value="{{ old('due_date') }}">
                        @error('due_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Signataires --}}
                    <div class="mb-4">
                        <label for="signataires" class="form-label">Signataires</label>
                        @if($signataires->isEmpty())
                            <div class="alert alert-warning">
                                Aucun signataire existant. 
                                <a href="{{ route('signataires.create') }}" class="btn btn-sm btn-outline-primary">
                                    Ajouter un signataire
                                </a>
                            </div>
                        @else
                            <select 
                                name="signataires[]" 
                                id="signataires" 
                                class="form-select @error('signataires') is-invalid @enderror" 
                                multiple>
                                @foreach($signataires as $s)
                                    <option value="{{ $s->id }}" @if(collect(old('signataires'))->contains($s->id)) selected @endif>
                                        {{ $s->name }} ({{ $s->email }})
                                    </option>
                                @endforeach
                            </select>
                            @error('signataires')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">
                                Si votre signataire n'apparaît pas, 
                                <a href="#" data-bs-toggle="modal" data-bs-target="#addSignataireModal">cliquez ici</a> pour l'ajouter.
                            </small>
                        @endif
                    </div>

                    {{-- Boutons --}}
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('documents.index') }}" class="btn btn-outline-secondary me-2">Annuler</a>
                        <button type="submit" class="btn" style="background-color: #6a1b9a; color: #fff;">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal pour ajouter un signataire --}}
<div class="modal fade" id="addSignataireModal" tabindex="-1" aria-labelledby="addSignataireModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSignataireModalLabel">Ajouter un signataire</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addSignataireForm" action="{{ route('signataires.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" form="addSignataireForm" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('addSignataireForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = this;
    
    fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Fermer le modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('addSignataireModal'));
            modal.hide();
            
            // Ajouter le nouveau signataire à la liste
            const select = document.getElementById('signataires');
            const option = new Option(`${data.signataire.name} (${data.signataire.email})`, data.signataire.id);
            select.add(option);
            
            // Sélectionner le nouveau signataire
            option.selected = true;
            
            // Réinitialiser le formulaire
            form.reset();
            
            // Afficher un message de succès
            const alert = document.createElement('div');
            alert.className = 'alert alert-success alert-dismissible fade show';
            alert.innerHTML = `
                Signataire ajouté avec succès.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;
            document.querySelector('.card-body').insertBefore(alert, form);
            
            // Supprimer l'alerte après 3 secondes
            setTimeout(() => {
                alert.remove();
            }, 3000);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Afficher un message d'erreur
        const alert = document.createElement('div');
        alert.className = 'alert alert-danger alert-dismissible fade show';
        alert.innerHTML = `
            Une erreur est survenue lors de l'ajout du signataire.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        document.querySelector('.card-body').insertBefore(alert, form);
    });
});
</script>
@endsection
