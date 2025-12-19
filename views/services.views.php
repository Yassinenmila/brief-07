
<section class="container mx-auto py-16">
     <h2 class="text-3xl font-bold mb-8 text-center">Nos Services</h2>
     <div class="grid md:grid-cols-3 gap-8">
         <?php foreach( $data as $e):?>
            <div class="bg-white p-6 shadow-md rounded-lg">
             <h3 class="text-xl font-bold mb-2"><?= $e->title?></h3>
             <p class="text-gray-600"><?= $e->description ?></p>
         </div>
         <?php endforeach; ?>
     </div>
 </section>