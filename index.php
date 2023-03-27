<?php include('inc/header.php'); ?>

<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
            aria-controls="pills-login" aria-selected="true">Login</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
            aria-controls="pills-register" aria-selected="false">Register</a>
    </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <form action="login.php" method="post">
            <div class="text-center mb-3">
                <p>Sign in</p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control" required />
                <label class="form-label" for="email">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-5">
                <input type="password" id="password" name="password" class="form-control" required />
                <label class="form-label" for="password">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-3 text-body">Sign in</button>

        </form>
    </div>
    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <form action="register.php" method="post">
            <div class="text-center mb-3">
                <p>Sign up</p>
            </div>

            <!-- First Name input -->
            <div class="form-outline mb-4">
                <input id="first_name" name="first_name" class="form-control" required />
                <label class="form-label" for="first_name">First Name</label>
            </div>

            <!-- Last Name input -->
            <div class="form-outline mb-4">
                <input type="text" id="last_name" name="last_name" class="form-control" required />
                <label class="form-label" for="last_name">Last Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control" required />
                <label class="form-label" for="email">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" required />
                <label class="form-label" for="password">Password</label>
            </div>

            <!-- Confirm Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required />
                <label class="form-label" for="confirm_password">Repeat
                    password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Sign Up</button>

        </form>
    </div>
</div>
<!-- Pills content -->

<?php include('inc/footer.php'); ?>