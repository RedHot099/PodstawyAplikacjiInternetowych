import React from "react";
import Todo from "./Todo";

function TodoList({ todos, toggleComplete }) {
	
	let filtr = false 
	
	function handleCheckboxClick() {
		toggleComplete(filtr);
	}	
		
	
	let todoes = filtr.completed ? todos.filter(todos => !todos.completed) : todos
	
	return (
		<div>
			<input 
				type="checkbox"
				name="filtr"
				checked={filtr.completed}
				onChange={handleCheckboxClick}
			/>Ukryj wykonane
			<hr/>
		  {todoes.map(todo => (
			<Todo
			  key={todo.id}
			  todo={todo}
			  toggleComplete={toggleComplete}
			/>
		  ))}
		</div>
  );
}

export default TodoList;
