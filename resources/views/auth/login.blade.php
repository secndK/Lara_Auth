<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
    <!-- Assurez-vous que Vite est configuré -->
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

            <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Connectez-vous !</h1>

            <!-- Formulaire de connexion -->
            <form class="mt-6" action="{{ route('login') }}" method="POST">
              @csrf <!-- CSRF Token requis pour la sécurité -->

              <div>
                <label class="block text-gray-700">Votre adresse e-mail</label>
                <input type="email" name="email" id="email" placeholder="ça rime avec miel mdrrr"
                       class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                       autofocus required>
                @error('email') <!-- Affichage des erreurs Laravel -->
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
              </div>

              <div class="mt-4">
                <label class="block text-gray-700">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="C'est secret, attention !"
                       class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                       required>
                @error('password') <!-- Affichage des erreurs Laravel -->
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
              </div>

              <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">
                Se connecter
              </button>
            </form>

            <p class="mt-8">
              Vous n'avez pas de compte ?
              <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Créez un compte</a>
            </p>

          </div>
        </div>
      </section>

      <!-- Modal pour connexion réussie -->
      <div class="modal fade" id="loginSuccessModal" tabindex="-1" aria-labelledby="loginSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content  text-white">
                <div class="modal-header bg-success-subtle ">
                    <h5 class="modal-title" id="loginSuccessModalLabel">Connexion réussie</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Vous êtes connecté avec succès. Redirection vers le tableau de bord...
                </div>
            </div>
        </div>
    </div>






</body>
</html>
