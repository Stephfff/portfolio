var modal = document.getElementById("modal");

function openModal(){
  modal.classList.add("display");
  setTimeout(function(){
    modal.classList.add("transition");    
  },20);//20milliseconds
}

function closeModal(){
  modal.classList.remove("transition");    
  setTimeout(function(){//timeout before removing modal, so that animations have time to play out.
    modal.classList.remove("display"); 
  },200);//0.3s
}
  
//Close the modal onclick
modal.addEventListener("click",function(){
 closeModal(); 
});

//Prevents so that the modal doesn't close when clicking on children within.
modal.children[0].addEventListener("click",function(event){
  event.stopPropagation();
});