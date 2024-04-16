<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" autofill="off" class="mt-5 w-50 mx-auto">
        <h2>Edit Task</h2>

        <div class="mb-2">
            <label for="">Task Name</label>
            <input type="text" name="task_name" value="<?= $task->task_name ?>" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Task Description</label>
            <input type="text" name="task_description" value="<?= $task->task_description ?>" class="form-control">
        </div>

        <div class="mb-2">
        <label for="">Task Status</label>
        <select name="task_status" class="form-select" required>
        <option value="">Select Your Status</option>
        <option value = "Complete" <?= $task->task_status ?>>Complete</option>
        <option value = "In Progress" <?= $task->task_status ?>>In Progress</option>
        <option value = "On Hold" <?= $task->task_status ?>>On Hold</option>
        </option>
        </select>
        </div>

       <!-- <div class="mb-2">
            <label for="">Task Status</label>
            <input type="text" name="task_status" value="" class="form-control">
        </div>-->
        
        <div class="mb-2">
            <label for="">Task Due</label>
            <input type="date" name="task_due" value="<?= $task->task_due ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php include PATH . "partials/footer.php" ?>