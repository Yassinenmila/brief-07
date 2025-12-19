<div class="bg-white absolut inset-0 p-8 rounded-xl shadow-lg w-full max-w-md">  
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6"> Se connecter sur votre compte</h2>
        <form action="login.php" method="POST" class="flex flex-col gap-4">
            <div>
                <label class="block text-gray-700 font-medium mb-1" for="email"> Email</label>
                <input id="email" type="email" placeholder="Entrer votre email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-1" for="pwd"> Mot de passe</label>
                <input id="pwd" type="password" placeholder="Entrer votre mot de passe" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="mt-4 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300"> S'inscrire </button>
        </form>
    </div>