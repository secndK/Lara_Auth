<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css') <!-- Assurez-vous que Vite est configuré -->
</head>
<body>
    <section class="flex flex-col md:flex-row h-screen items-center">

        <!-- Section image -->
        <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
          <img src="https://img.freepik.com/photos-gratuite/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010144.jpg?t=st=1732632281~exp=1732635881~hmac=40ce5ede1e66933eb1608e5fef6eac0d4699a8c489591d4ec26d8b7efcf769d9&w=1060" alt="Background Image" class="w-full h-full object-cover">
        </div>

        <!-- Section formulaire -->
        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
              flex items-center justify-center">
          <div class="w-full h-100">

            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Créez votre compte</h1>

            <!-- Formulaire d'inscription -->
            <form class="mt-6" action="{{ route('register') }}" method="POST">
              @csrf <!-- CSRF Token requis pour la sécurité -->

              <!-- Champ nom -->
              <div>
                <label class="block text-gray-700">Votre nom complet</label>
                <input type="text" name="name" id="name" placeholder="Entrez votre nom complet"
                       class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                       required>
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
              </div>

              <!-- Champ email -->
              <div class="mt-4">
                <label class="block text-gray-700">Votre adresse e-mail</label>
                <input type="email" name="email" id="email" placeholder="ça rime avec miel mdrrr"
                       class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                       required>
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
              </div>

              <!-- Champ mot de passe -->
              <div class="mt-4">
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Choisissez un mot de passe sécurisé"
                       class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                       minlength="6" required>
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
              </div>

              <!-- Champ confirmation mot de passe -->
              <div class="mt-4">
                <label class="block text-gray-700">Confirmez le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmez votre mot de passe"
                       class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                       required>
              </div>

              <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">
                S'inscrire
              </button>
            </form>

            <p class="mt-8">
              Vous avez déjà un compte ?
              <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Connectez-vous</a>
            </p>

          </div>
        </div>
      </section>


      <!-- Modal pour inscription réussie -->
<div class="modal fade" id="registerSuccessModal" tabindex="-1" aria-labelledby="registerSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerSuccessModalLabel">Félicitations !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Vous êtes inscrit avec succès. Redirection vers le tableau de bord...
            </div>
        </div>
    </div>
</div>

</body>
</html>
