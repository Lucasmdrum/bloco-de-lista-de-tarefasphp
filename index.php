<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    width: 300px;
  }

  h1 {
    text-align: center;
    margin-bottom: 10px;
  }

  input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
  }

  button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    width: 100%;
    cursor: pointer;
  }

  ul {
    list-style: none;
    padding: 0;
  }

  li {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 5px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
  }

  li.completed {
    text-decoration: line-through;
  }

  li input[type="checkbox"] {
    margin-right: 10px;
  }
</style>
<title>Lista de Tarefas</title>
</head>
<body>
  <div class="container">
    <h1>Lista de Tarefas</h1>
    <input type="text" id="taskInput" placeholder="Nova Tarefa">
    <button onclick="addTask()">Adicionar</button>
    <ul id="taskList">
      <!-- Lista de tarefas será preenchida dinamicamente com JavaScript -->
    </ul>
  </div>
  <script>
    function toggleTaskCompletion(checkbox) {
      var li = checkbox.parentNode;
      li.classList.toggle("completed");
    }

    function createTaskElement(taskText) {
      var li = document.createElement("li");
      var checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.onclick = function() {
        toggleTaskCompletion(checkbox);
      };
      var span = document.createElement("span");
      span.textContent = taskText;
      li.appendChild(checkbox);
      li.appendChild(span);
      return li;
    }

    function clearInput() {
      document.getElementById("taskInput").value = "";
    }

    function addTask() {
      var input = document.getElementById("taskInput");
      var taskText = input.value.trim();

      if (taskText !== "") {
        var taskList = document.getElementById("taskList");
        var taskElement = createTaskElement(taskText);
        taskList.appendChild(taskElement);
        clearInput();
      }
    }
  </script>
</body>
</html>
