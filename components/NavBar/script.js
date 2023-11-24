const navItems = document.querySelectorAll('.nav-subnav-item');
navItems.forEach(navItem => {
    navItem.addEventListener('click', (event) => {
        console.log("OK")
        const subnav = event.target.children[1];
        alert(subnav);
    });
    }
);

console.log(navItems);