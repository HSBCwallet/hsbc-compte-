// step-1 : get submit button use event
document.getElementById('btn-submit').addEventListener('click', function(){
    //step-2: get email value
    const email = document.getElementById('email');
    const emailValue = email.value;
    //step-3: get password value
    const password = document.getElementById('password');
    const passwordValue = password.value;
   if(emailValue ==='Marielambert@gmail.com' && passwordValue === '10122019')
   {
    window.location.href='bank.html';
   }
   else
   {
    alert('Invalid password');
   }
})