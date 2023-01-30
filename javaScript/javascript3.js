const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const f = new FormData(form);
    const obj = Object.fromEntries(f);

    const json = JSON.stringify(obj);
    localStorage.setItem('form', json);

    window.location.href = "contactData.html";
})