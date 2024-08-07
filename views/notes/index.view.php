<?php require basePath('views/partials/head.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <br>
        <ul>
            <?php foreach($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?=$note['id']?>" class="text-base text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?> 
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <p class="mt-20">
            <a href="/notes/create" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Note...</a>
        </p>
    </div>
</main>
<?php require basePath('views/partials/footer.php') ?>