const URL = 'http://localhost:80/api/todo/auth';
const form = document.querySelector('#register-form')
async function postRegister() {
    const email = document.querySelector('#email').value
    const pwd = document.querySelector('#password').value
    const res = await fetch(`${URL}/register`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            user: {
                email: email,
                password: pwd
            }
        })
    })
    if (res.ok) {
        window.location.href = "http://localhost:80/";
    } else {
        console.log('NG');
    }
}

form.addEventListener('submit', async(e) => {
    e.preventDefault();
    await postRegister();
});
