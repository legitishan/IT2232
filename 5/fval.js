function vali(event){
    var a = document.getElementById('Name');
    var b = document.getElementById('Age');
    var c = document.getElementById('Date');
    if(a.value==''){
        event.preventDefault();
        console.log('Enter Name');
        a.style.background = 'red';
    }
    if(b.value==''){
        event.preventDefault();
        console.log('Enter Age');
    }
    if(c.value==''){
        event.preventDefault();
        console.log('Enter Date');
    }
}