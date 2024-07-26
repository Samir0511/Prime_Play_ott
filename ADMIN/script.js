let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});


// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("fa-bars", "fa-bars");//replacing the iocns class
 }
}


let list = document.querySelectorAll(".list");
function activelink(){
  list.forEach((item) =>
  
item.classList.remove('active'));
this.classList.add('active');


}

list.forEach((item) =>
item.addEventListener('click',activelink))