<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doodle-todo Time!</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Doodle-todo Time!</h1>
        <div id="timer" class="text-center my-4">
            <h2 id="time-display">25:00</h2>
        </div>
        <div id="task-form" class="mb-5">
            <form id="tasks-form" method="post" action="save_tasks.php">
                <div id="tasks-container" class="mb-3">
                    <div class="row g-2 task">
                        <div class="col-md-8">
                            <input type="text" name="task[]" class="form-control" placeholder="Task description" required>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="duration[]" class="form-control" placeholder="Duration (minutes)" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" id="add-task" class="btn btn-secondary me-md-2">Add Task</button>
                    <button type="submit" class="btn btn-primary">Start Session</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Timer / Task Form Script -->
    <script src="../assets/js/timer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
