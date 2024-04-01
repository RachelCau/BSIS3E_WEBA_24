<?php include "partials/header.php" ?>

<div class="container">
    <h1 class="mt-5">User Registration</h1>

    <form method="POST" class="w-50 mx-auto">
        <div class="mb-2">
            <label for="">First Name</label>
            <input name="firstname" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Email</label>
            <input name="email" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" type="text" class="form-control">
        </div>

        <button name="btnsubmit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<?php include "partials/footer.php" ?>

 