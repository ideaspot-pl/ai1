console.log("Let's do!");

const todos: string[] = [];

const todoInput: HTMLInputElement = document.getElementById('todoInput') as HTMLInputElement;
const todoAddButton: HTMLButtonElement = document.getElementById('todoAddButton') as HTMLButtonElement;
const todoListContainer: HTMLDivElement = document.getElementById('todoListContainer') as HTMLDivElement;
const todoFilter: HTMLInputElement = document.getElementById('todoFilter') as HTMLInputElement;

function addTodo(): void {
    if (! todoInput) {
        console.log("No todo input field.");
        return;
    }

    const newTodo: string = todoInput.value;

    if (! newTodo.trim()) {
        console.log("Empty text.");
        return;
    }

    todos.push(newTodo);
    todoInput.value = '';

    drawList(todos);
}
todoAddButton.addEventListener("click", addTodo);

function filterTodos(): void {
    console.log("Filtering");

    const term = todoFilter.value.toLowerCase();

    let filteredTodos = todos.filter((a) => a.toLowerCase().includes(term));
    drawList(filteredTodos);
}
todoFilter.addEventListener("input", filterTodos);

function drawList(todos: string[]) {
    console.log("Drawing todo list")
    todoListContainer.innerHTML = '';

    const ul = document.createElement('ul');
    ul.id = 'todoList';
    todoListContainer.appendChild(ul);

    for (let todo of todos) {
        const li = document.createElement('li');
        li.innerText = todo;
        ul.appendChild(li);
    }
}
