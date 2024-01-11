"use client"

import { useState } from 'react';
import styles from './globals.module.css';

export default function Home() {
  const [inputs, setInput] = useState([]);

  const todoSubmit = (e) => {
    e.preventDefault();
    const newTodo = {
      todo: e.target.input.value,
      completed: false
    }

    setInput([...inputs, newTodo]);
    e.target.input.value = "";
  }

  const todoDelete = (index) => {
    setInput((prevInputs) => {
      const newInputs = [...prevInputs];
      newInputs.splice(index, 1);
      return newInputs;
    });
  };

  const check = (index) => {
    setInput((prevInputs) => {
      const newInputs = [...prevInputs];
      newInputs[index] = {
        ...newInputs[index],
        completed: !newInputs[index].completed
      }
      return newInputs;
    })
  }
  return (
    <main className={styles.body}>
      <div className={styles.todo_app}>
        <h1 className={styles.h1}>Todoリスト</h1>
        <form className={styles.form} onSubmit={todoSubmit}>
          <input type="text" className={styles.todo_input} placeholder="新しいタスクを入力" name="input" />
          <button type="submit" className={styles.add_button}>タスクを追加する</button>
        </form>
        <ul className={styles.todo_list}>
          {
            inputs.map((input, index) => {
              return (
                <li key={index} className={styles.todo_item}>
                  <span className={
                    input.completed ? styles.is_check : ""
                  }>
                    {input.todo}
                  </span>
                  <div>
                    <input
                      type="checkbox"
                      onChange={() => { check(index) }}>
                    </input>
                    <button className={styles.delete_button} onClick={() => {
                      todoDelete(index)
                    }
                    }>
                      削除
                    </button>
                  </div>
                </li>
              )
            })
          }
        </ul>
      </div>
    </main>
  )
}
