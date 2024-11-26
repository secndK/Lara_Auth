<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>



























































































































    <!-- Modal pour connexion réussie -->
    @if(session('login_success'))
    <div class="modal fade" id="loginSuccessModal" tabindex="-1" aria-labelledby="loginSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success-subtle">
                    <h5 class="modal-title " id="loginSuccessModalLabel">Connexion réussie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    Vous êtes connecté avec succès !
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Modal pour inscription réussie -->
    @if(session('register_success'))
    <div class="modal fade" id="registerSuccessModal" tabindex="-1" aria-labelledby="registerSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerSuccessModalLabel">Félicitations !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Vous êtes inscrit avec succès !
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Affiche automatiquement le modal en cas de succès
        @if(session('login_success'))
        var loginModal = new bootstrap.Modal(document.getElementById('loginSuccessModal'));
        loginModal.show();
        @endif

        @if(session('register_success'))
        var registerModal = new bootstrap.Modal(document.getElementById('registerSuccessModal'));
        registerModal.show();
        @endif
    </script>
</body>
</html>
