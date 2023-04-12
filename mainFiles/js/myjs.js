var acc = document.getElementsByClassName("questions");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display == '') {
      panel.style.display = 'block';
    } else {
        panel.style.display = '';
    } 
});
}

function show (elm)
{
    var qq1 = document.getElementById(elm.id);
    var sqq1 = document.getElementById('s'+elm.id);

    if (sqq1.classList.contains('hide')) {
            qq1.classList.remove("btn-primary");
            qq1.classList.add("btn-danger");
            sqq1.classList.remove('hide');
            sqq1.classList.add('block');
            console.log(sqq1.classList)
            console.log(qq1.classList)
            
        } else {
            console.log(sqq1.classList)
            qq1.classList.remove("btn-danger");
            qq1.classList.add("btn-primary");
            sqq1.classList.remove('block');
            sqq1.classList.add('hide');
    } 
  }

