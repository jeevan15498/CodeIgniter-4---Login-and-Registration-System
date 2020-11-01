<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">User Registration</h1>
        <p class="lead">User Login and Registration System with CodeIgniter 4.</p>
        <a href="<?= base_url("user/login") ?>">Login</a>
    </div>
    <!-- Show Validation Rules -->
    <?php if (isset($validation)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors(); ?>
        </div>
    <?php endif; ?>
    <form method="post" action="">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('first_name'))? 'is-invalid':'' ?>" name="first_name" value="<?= esc(set_value('first_name')); ?>" placeholder="Enter User First Name">
            <div class="invalid-feedback">
                <?php if (isset($validation) && $validation->hasError('first_name')) { echo $validation->getError('first_name'); } ?>
            </div>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('last_name'))? 'is-invalid':'' ?>" name="last_name" value="<?= esc(set_value('last_name')); ?>" placeholder="Enter User Last Name">
            <div class="invalid-feedback">
                <?php if (isset($validation) && $validation->hasError('last_name')) { echo $validation->getError('last_name'); } ?>
            </div>
        </div>
        <div class="form-group">
            <label>Mobile Number</label>
            <input type="number" class="form-control <?= (isset($validation) && $validation->hasError('mobile'))? 'is-invalid':'' ?>" name="mobile"  value="<?= esc(set_value('mobile')); ?>" placeholder="Enter User Mobile Number">
            <div class="invalid-feedback">
                <?php if (isset($validation) && $validation->hasError('mobile')) { echo $validation->getError('mobile'); } ?>
            </div>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control <?= (isset($validation) && $validation->hasError('email'))? 'is-invalid':'' ?>" name="email" value="<?= esc(set_value('email')); ?>" placeholder="Enter User Email">
            <div class="invalid-feedback">
                <?php if (isset($validation) && $validation->hasError('email')) { echo $validation->getError('email'); } ?>
            </div>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control <?= (isset($validation) && $validation->hasError('username'))? 'is-invalid':'' ?>" name="username" value="<?= esc(set_value('username')); ?>" placeholder="Enter Username">
            <div class="invalid-feedback">
                <?php if (isset($validation) && $validation->hasError('username')) { echo $validation->getError('username'); } ?>
            </div>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control <?= (isset($validation) && $validation->hasError('password'))? 'is-invalid':'' ?>" name="password" value="<?= esc(set_value('password')); ?>" placeholder="Enter Password">
            <div class="invalid-feedback">
                <?php if (isset($validation) && $validation->hasError('password')) { echo $validation->getError('password'); } ?>
            </div>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control <?= (isset($validation) && $validation->hasError('confirm_password'))? 'is-invalid':'' ?>" name="confirm_password" value="<?= esc(set_value('confirm_password')); ?>" placeholder="Enter Confirm Password">
            <div class="invalid-feedback">
                <?php if (isset($validation) && $validation->hasError('confirm_password')) { echo $validation->getError('confirm_password'); } ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registration</button>
    </form>
</div>