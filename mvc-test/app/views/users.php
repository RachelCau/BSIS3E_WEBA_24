<<<<<<< HEAD
<?php include 'partials/header.php' ?>

<div class="container">


    <form action="" method="POST" autocomplete="off" class="w-50 mx-auto">

        <h3 class="mt-5 mb-4">User Registration</h3>

        <div class="mb-2">
            <label for="">First Name</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>

        <div class="mb-2">
            <label for="">Last Name</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div class="mb-2">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-2">
            <label for="">Password</label>
            <input type="text" name="password" class="form-control" required>
        </div>

        <div class="mb-2">
            <button class="btn btn-primary" name="registerbtn" type="submit">Submit</button>
        </div>
    </form>

</div>

<?php include 'partials/footer.php' ?>
=======
<?php include "partials/header.php" ?>
<br><br>
<form action="" method="POST" class="w-50 mx-auto">
<h2>User Registration</h2>
    <div class="mb-2">
        <label for="">First Name</label>
        <input type="text" name="firstname" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Last Name</label>
        <input type="text"  name="lastname" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Email</label>
        <input type="email"  name="email" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Password</label>
        <input type="password"  name="password" class="form-control">
    </div>
    <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
</form>

<?php include "partials/footer.php" ?>
>>>>>>> Julianna
