const topratedmenuelt = document.getElementById("topratedmenu");
topratedmenuelt.addEventListener("click", swapsidebarmenu);
const recentmenuelt = document.getElementById("recentmenu");
recentmenuelt.addEventListener("click", swapsidebarmenu);
function swapsidebarmenu(evt){
    if(this.className.includes("active-sidebar-menu")) return;
    topratedmenuelt.classList.remove("active-sidebar-menu");
    recentmenuelt.classList.remove("active-sidebar-menu");
    this.classList.add("active-sidebar-menu");
}