let showMore = document.querySelector('#show-more');
let currentItem = 3;

showMore.onclick = () => {
    let cards = [...document.querySelectorAll('.courses .section_courses .card')];
    for (var i = currentItem; i < currentItem + 3; i++){
        cards[i].style.display = 'block';
    }
    currentItem += 3;
    
    if(currentItem >= cards.length){
        showMore.style.display = 'none';
    }
}

// Dashboard sidenav dropdown

// const dropdown = document.querySelectorAll('.dropdown');
// const submenu = document.querySelector('.submenu');

// dropdown.addEventListener('click',function (e) {
//     e.preventDefault();
//     submenu.classList.toggle('.show');
// })


// Student Profile
