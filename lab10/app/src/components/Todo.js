import React from "react";

function Todo({ todo, toggleComplete}) {
	
	
  function handleCheckboxClick() {
    toggleComplete(todo.id);
  }
  
  const completedStyle = {
		textDecoration: "line-through",
		color: "#cdcdcd"
	}

  return (
    <div style={{ display: "flex" }}>
      <input 
		type="checkbox" 
		checked={todo.completed} 
		onClick={handleCheckboxClick} 
	/>

		<label style={todo.completed ? completedStyle : null}>
			{todo.task}
		</label>
    </div>
  );
}

export default Todo;
