<header class="bg-white shadow-md p-3">
        <nav class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
            <ul class="flex space-x-6">
                <li><a href="/home" class="text-blue-600 font-medium">Accueil</a></li>
                <li><a href="/services" class="hover:text-blue-600">Services</a></li>
                <li><a href="/about" class="hover:text-blue-600">À propos</a></li>
                <li><a href="/contact" class="hover:text-blue-600">Contact</a></li>
            </ul>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="/profil" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700">profil</a>
                <a href="/sign_up" class="px-6 py-3 bg-red text-white font-medium rounded-lg hover:bg-red-700">Se deconnecter</a>
            <?php else:  ?>
            <div>
                <a href="/login" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700">Se connecter</a>
                <a href="/sign_up" class="px-6 py-3 bg-white text-black font-medium rounded-lg hover:bg-blue-700">S'inscrire</a>
            </div>
            <?php endif; ?>
        </nav>
    </header>