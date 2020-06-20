import React, { useState } from "react";
import Todo from "./Todo";

function TodoList({ todos, toggleComplete}) {
	
	
	const [filter, setFilter] = useState(0)
	
	function handleCheckboxClick() {
		setFilter(!filter)
	}	
	
		todos = filter ? todos.filter(todos => !todos.completed) : todos
		
	return (
		<div>
			<input 
				type="checkbox"
				name="filtr"
				checked={todos.f}
				onChange={handleCheckboxClick}
			/>Ukryj wykonane
			<hr/>
		  {todos.map(todo => (
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
