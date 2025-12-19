
<section class="container mx-auto py-16">
    <?php if (isset($_SESSION['toast'])): ?>
    <div id="toast" class="fixed bg-gray-800 text-white px-5 py-3 rounded-lg shadow-lg z-50">
        <?= $_SESSION['toast'] ?>
    </div>
    <script>
        setTimeout(() => {
            const toast = document.querySelector("#toast");
            if (toast) toast.remove();
        }, 3000);
    </script>
    <?php unset($_SESSION['toast']); ?>
<?php endif; ?>
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>
    <form id="formulaire" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4" method="post" action="https://formsubmit.co/nmilayassine0000@email.com">
        <input type="text" name="nom" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg" required>
        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg" required>
        <textarea placeholder="Votre message" name="desc" class="w-full border px-4 py-2 rounded-lg min-h-[50px]" required></textarea>
        <button type="submit" class=" w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Envoyer</button>
    </form>
</section>