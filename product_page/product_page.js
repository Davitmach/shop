var Counter = document.getElementById('Counter');
Counter.value= 1;
var Minus = document.getElementById('Minus');
var Plus = document.getElementById('Plus');

Minus.addEventListener('click', () => {
    if (Counter.value > 1) {
        Counter.value--;
    }
})
Plus.addEventListener('click', () => {
        Counter.value++;
})