<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

            <p class="text-white"><?= htmlspecialchars($note['body']) ?></p>

        <div class="mt-6 flex items-center gap-x-4">
            <form method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="text-sm text-red-500 hover:underline cursor-pointer">Delete</button>
            </form>

            <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
        Edit Note
            </a>
        </div>

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

  