const buttons = document.querySelectorAll('.btn-primary');
console.log(buttons);
buttons.forEach(e => {
    e.addEventListener('click', () => {
        e.innerHTML = 'Appointment Booked';
    })
})