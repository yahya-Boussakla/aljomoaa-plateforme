const searchInput = document.querySelector('.search-bar input');
const searchIcon = document.querySelector('.search-icon');
document.querySelector('.search-icon').addEventListener('click', e=>{
    if (searchInput.classList.contains('open')){
        searchInput.classList.remove('open');
        searchInput.classList.add('closed');
        searchIcon.setSearchIcon();
    }else{
        searchInput.classList.remove('closed');
        searchInput.classList.add('open');
        searchIcon.setCrosseICon();
    }
});

HTMLElement.prototype.setCrosseICon = function () {
    this.classList.remove('fa-magnifying-glass');
    this.classList.add('fa-xmark');
}

HTMLElement.prototype.setSearchIcon = function () {
    this.classList.remove('fa-xmark');
    this.classList.add('fa-magnifying-glass');
}
let myForm = document.getElementById('Myform');
let selected = document.getElementsByName('selected')[0];
let navContent = document.getElementsByName('navContent')[0];
let asideLinks = document.querySelectorAll('aside li');
for (const link of asideLinks) {
  
    link.addEventListener("click" , () =>{
        navContent.value = link.innerHTML;
        myForm.submit();

        // let categoryse = document.querySelectorAll("section div");
        // for (const test of asideLinks) {
        //     test.classList.remove("asidLink");
        // }
        // link.classList.add("asidLink");
        
        // for (const element of categoryse) {
        //     if (!(link.innerText === element.innerText)) {
        //         element.parentElement.style.display="none";
        //     }
        //     else{
        //         element.parentElement.style.display="flex";
        //     }
        // }
        // if (exist == false) {
        //     let roundedPill = document.createElement("span");
        //     roundedPill.classList.add("rounded-pill");
        //     roundedPill.setAttribute("id", "added-pill")
        //     roundedPill.innerText = link.innerHTML;
        //     linksBar.appendChild(roundedPill);
        // }
        // else{
        //     document.getElementById("added-pill").innerText = link.innerText;
        // }
        // exist = true;
    });
    console.log(selected.value);
    if (selected.value == link.innerHTML) {
        link.style.background = '#ffb860';
        link.style.color = 'white';
    }
    // console.log(link);
}

