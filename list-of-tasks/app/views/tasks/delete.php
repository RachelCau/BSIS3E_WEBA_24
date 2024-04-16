<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" autofill="off" class="mt-5 w-50 mx-auto">
        <h2>Edit Task</h2>

        <div class="mb-2">
            <label for="">Task Name</label>
            <input type="text" disabled name="task_name" value="<?= $task->task_name ?>" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Description</label>
            <input type="text" disabled name="task_description" value="<?= $task->task_description ?>" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Status</label>
            <input type="text" disabled name="task_status" value="<?= $task->task_status ?>" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Due</label>
            <input type="date" disabled name="task_due" value="<?= $task->task_due ?>" class="form-control">
        </div>

        <input type="hidden" name="id" value="<?= $task->id ?>">
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
</div>

<?php include PATH . "partials/footer.php" ?>