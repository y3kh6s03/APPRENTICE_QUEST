// 2. 要素ノードの変更
const h1 = document.getElementsByTagName('h1');
h1[0].innerHTML = "シンプルブログ";


{/* <div id="posts">
<h2>入力されたタイトル</h2>
<p>入力された本文</p>
</div> */}
// 3. イベントハンドラの設定
// 4. 要素ノードの追加
// 5. 要素ノードの削除

// form.onsubmit = (e) => {
//     e.preventDefault();
//     const title = e.target.title.value;
//     const content = e.target.content.value;
//     // コンソール出力
//     console.log(title, content)
//     // 追加
//     let div_elm = document.querySelector("div");
//     if (div_elm === null) {
//         div_elm = createDiv("posts", form);

//         createElm("h2", title, div_elm);
//         createElm("p", content, div_elm);
//         // 削除
//         e.target.title.value = "";
//         e.target.content.value = "";
//     } else {
//         createElm("h2", title, div_elm);
//         createElm("p", content, div_elm);
//         const p_elms = document.querySelectorAll("p");
//         // 削除
//         e.target.title.value = "";
//         e.target.content.value = "";
//     }
// }

// const createDiv = (id, target) => {
//     const elm = document.createElement("div");
//     elm.id = id;
//     target.after(elm);
//     return elm
// }

// 6. スタイルの変更
// form.addEventListener("mouseover", () => {
//     form.style.backgroundColor = "yellow";
// })
// form.addEventListener("mouseout", () => {
//     form.style.backgroundColor = "";
// })


// 7. 要素ノードの削除
const form = document.querySelector("#post-form");
form.onsubmit = (e) => {
    e.preventDefault();
    const title = e.target.title.value;
    const content = e.target.content.value;

    let ul_elm = document.querySelector("ul");

    if (ul_elm === null) {
        ul_elm = document.createElement("ul");
        form.after(ul_elm);
        const li_elm = document.createElement("li");
        ul_elm.appendChild(li_elm);
        createElm("h2", title, li_elm);
        createElm("p", content, li_elm);
        // 削除
        e.target.title.value = "";
        e.target.content.value = "";
    } else {
        let li_elms = document.querySelectorAll("li");
        if(li_elms.length > 2){
            li_elms[0].remove();
        }
        debugger;
        const li_elm = document.createElement("li");
        ul_elm.appendChild(li_elm);
        createElm("h2", title, li_elm);
        createElm("p", content, li_elm);
        // 削除
        e.target.title.value = "";
        e.target.content.value = "";
    }
}


const createElm = (el, content, target) => {
    const elm = document.createElement(el);
    elm.innerHTML = content;
    target.appendChild(elm);
    return elm;
}