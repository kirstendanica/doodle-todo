document.addEventListener("DOMContentLoaded", function() {
    const timerDisplay = document.getElementById('time-display');
    let timeLeft = 25 * 60;
    let timerInterval;

    function updateTimer() {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        timerDisplay.textContent = `${minutes < 10 ? '0' + minutes : minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
        if (timeLeft <= 0) {
            clearInterval(timerInterval);
            alert("Time's up! Take a brrrrraweeak!");
        }
        timeLeft--;
    }

    timerInterval = setInterval(updateTimer, 1000);

    const addTaskButton = document.getElementById('add-task');
    addTaskButton.addEventListener('click', function() {
        const tasksContainer = document.getElementById('tasks-container');
        const taskRow = document.createElement('div');
        taskRow.classList.add('row', 'g-2', 'task', 'mt-2');
        taskRow.innerHTML = `
            <div class="col-md-8">
                <input type="text" name="task[]" class="form-control" placeholder="Task description" required>
            </div>
            <div class="col-md-4">
                <input type="number" name="duration[]" class="form-control" placeholder="Duration (minutes)" required>
            </div>
        `;
        tasksContainer.appendChild(taskRow);
    });
});
