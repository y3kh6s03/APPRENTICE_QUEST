const URL = 'http://localhost:80/api/todo/auth';
const form = document.querySelector('#login-form')
async function postLogin() {
    const email = document.querySelector('#email').value
    const pwd = document.querySelector('#password').value
    const res = await fetch(`${URL}/login`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'alg': 'HS256',
        },
        body: JSON.stringify({
            user: {
                email: email,
                password: pwd
            }
        })
    })
    if (res.ok) {
        window.location.href = "http://localhost:80/todo";
    } else {
        alert('ログインに失敗しました')
    }
}

form.addEventListener('submit', async(e) => {
    e.preventDefault();
    await postLogin();
});
