const form = document.querySelector("form");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const todo = e.target.todo.value;
    const ul_elm = document.querySelector("ul");
    // li要素作成
    const li_elm = document.createElement("li");
    li_elm.className = "todo-item";

    // input要素作成
    const input_elm = document.createElement("input");
    input_elm.setAttribute("type", "checkbox");
    input_elm.addEventListener("click", () => {
        if(span_elm.style.textDecoration === "line-through"){
            span_elm.style.textDecoration = "none";
        }else{
            span_elm.style.textDecoration = "line-through";
        }
    })

    // span要素作成
    const span_elm = document.createElement("span");
    span_elm.innerHTML = todo;

    // button要素作成
    const button_elm = document.createElement("button");
    button_elm.className = "delete-button";
    button_elm.addEventListener("click", (e) => {
        li_elm.remove();
    })

    ul_elm.appendChild(li_elm);
    li_elm.appendChild(input_elm);
    li_elm.insertBefore(span_elm, input_elm);
    li_elm.insertBefore(button_elm, span_elm);

    e.target.todo.value = "";
})