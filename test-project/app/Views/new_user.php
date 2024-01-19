<?= $this->extend('layouts/main') ?>

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <?= $this->section('content') ?>
        <h1><?= $title ?></h1>

        <?php if (isset($validation)) : ?>
            <div class="textdanger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <form method="post" action="/user/index">
            <div class="form-group">
                <label for="">Username</label>
                <input id="" value="<?= set_value('username') ?>" class="form-control" type="text" name="username">
            </div>
            <div class="form-group">
                <label for="">First Number</label>
                <input id="" value="<?= set_value('first_number') ?>" class="form-control" type="number" name="first_number">
            </div>
            <div class="form-group">
                <label for="">Second Number</label>
                <input id="" value="<?= set_value('second_number') ?>" class="form-control" type="number" name="second_number">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-sm">Create</button>
            </div>

        </form>
    </div>
</div>
<?= $this->endSection() ?>