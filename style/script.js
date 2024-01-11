//login
document.addEventListener('DOMContentLoaded', function () {
  const loginForm = document.getElementById('login-form');

  loginForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === 'admin' && password === 'admin') {
      alert('Login berhasil!');
      window.location = '../index.php';
    } else {
      alert('Login gagal!');
      window.location = '../login/index.php';
    }
  });
});

//logout
const btn = document.querySelector('#logoutButton');

btn.addEventListener('click', function () {
  const notif = confirm('Yakin?');

  if (notif) {
    window.location.href = 'index.php';
  }
});
