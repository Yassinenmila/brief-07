
<section class="container mx-auto py-16">
    <div id="toast" class="hidden fixed top-5 left-1/2 -translate-x-1/2 text-white px-6 py-3 rounded shadow" data-type="<?= $type ?>" data-message="<?= $message ?>"></div>
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>
    <form id="formulaire" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4" method="post">
        <input type="text" name="nom" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg">
        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg">
        <textarea placeholder="Votre message" name="desc" class="w-full border px-4 py-2 rounded-lg min-h-[50px]"></textarea>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>
</section>


