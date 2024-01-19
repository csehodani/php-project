<?= $this->extend('layouts/main') ?>

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <?= $this->section('content') ?>
        <h1><?= $title ?></h1>

        <?php if ($newestUser) : ?>
            <p>Welcome to our newest user, <?= $newestUser['username'] ?>!</p>
            <p>First Number: <?= $newestUser['first_number'] ?></p>
            <p>Second Number: <?= $newestUser['second_number'] ?></p>
            <p>Result: <?= $newestUser['result'] ?></p>
        <?php endif; ?>

        <?php if ($otherUsers) : ?>
            <ul>
                <?php foreach ($otherUsers as $user) : ?>
                    <li>
                        <p>Other user: <?= $user['username'] ?></p>
                        <p>First Number: <?= $user['first_number'] ?></p>
                        <p>Second Number: <?= $user['second_number'] ?></p>
                        <p>Result: <?= $user['result'] ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>No other users found.</p>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>