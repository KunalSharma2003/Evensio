function changeDiv() {
   var selectElement = document.getElementById('team');
   var selectValue = selectElement.value;
   var div = document.querySelector('.image-div');
   var img1 = document.getElementById("image1");
   var img2= document.getElementById("image2");
   var img3 = document.getElementById("image3");
   var img4 = document.getElementById("image4");
   var img5 = document.getElementById("image5");
   var img6 = document.getElementById("image6");

   var radio1 = document.getElementById("d1_image1");
   var radio2 = document.getElementById("d1_image2");
   var radio3 = document.getElementById("d1_image3");
   var radio4 = document.getElementById("d1_image4");
   var radio5 = document.getElementById("d1_image5");
   var radio6 = document.getElementById("d1_image6");

   
   
    if(selectValue === "Birthday Parties"){
       div.style.display = 'block'; 
       radio1.value = "assets/img/bday/biday1 (3) 1.png";
       radio2.value = "assets/img/bday/biday1 (3) 2.png";
       radio3.value = "assets/img/bday/biday1 (3) 3.png";
       radio4.value = "assets/img/bday/biday1 (3) 4.jpg";
       radio5.value = "assets/img/bday/biday1 (3) 5.jpg";
       radio6.value = "assets/img/bday/biday1 (3) 6.jpg";
       
    }
    else if(selectValue === "Family Reunion"){
        div.style.display = 'block'; 
        img1.src="assets/img/family reu/familyi (0).jpg";
        img2.src="assets/img/family reu/familyi (1).jpg";
        img3.src="assets/img/family reu/familyi (2).jpg";
        img4.src="assets/img/family reu/familyi (3).jpg";
        img5.src="assets/img/family reu/familyi (4).jpg";
        img6.src="assets/img/family reu/familyi (5).jpg";
        
        radio1.value = "assets/img/family reu/familyi (0).jpg";
        radio2.value = "assets/img/family reu/familyi (1).jpg"
        radio3.value = "assets/img/family reu/familyi (2).jpg"
        radio4.value = "assets/img/family reu/familyi (3).jpg"
        radio5.value = "assets/img/family reu/familyi (4).jpg"
        radio6.value = "assets/img/family reu/familyi (5).jpg"
        

    }
    else if(selectValue === "House Opening"){
        div.style.display = 'block'; 
        img1.src="assets/img/house opening (1)/house opening (1).jpg";
        img2.src="assets/img/house opening (1)/house opening (2).jpg";
        img3.src="assets/img/house opening (1)/house opening (3).jpg";
        img4.src="assets/img/house opening (1)/house opening (4).jpg";
        img5.src="assets/img/house opening (1)/house opening (5).jpg";
        img6.src="assets/img/house opening (1)/house opening (6).jpg";
        
        radio1.value = "assets/img/house opening (1)/house opening (1).jpg";
        radio2.value = "assets/img/house opening (1)/house opening (2).jpg";
        radio3.value = "assets/img/house opening (1)/house opening (3).jpg";
        radio4.value = "assets/img/house opening (1)/house opening (4).jpg";
        radio5.value = "assets/img/house opening (1)/house opening (5).jpg";
        radio6.value = "assets/img/house opening (1)/house opening (6).jpg";
    }
    else if(selectValue === "Anniversary Parties"){
        div.style.display = 'block'; 
        img1.src="assets/img/anavesri/anavesri1.jpg";
        img2.src="assets/img/anavesri/anaversri2.jpg";
        img3.src="assets/img/anavesri/anaversri3.jpg";
        img4.src="assets/img/anavesri/anaversri4.jpg";
        img5.src="assets/img/anavesri/anavesri5.jpg";
        img6.src="assets/img/anavesri/anavesri6.jpg";

        radio1.value = "assets/img/anavesri/anavesri1.jpg";
        radio2.value = "assets/img/anavesri/anaversri2.jpg";
        radio3.value = "assets/img/anavesri/anaversri3.jpg";
        radio4.value = "assets/img/anavesri/anaversri4.jpg";
        radio5.value = "assets/img/anavesri/anavesri5.jpg";
        radio6.value = "assets/img/anavesri/anavesri6.jpg";
         
    }
    else if(selectValue === "Baby Shower"){
        div.style.display = 'block'; 
        img1.src="assets/img/baby/baby1.jpg";
        img2.src="assets/img/baby/baby2.jpg";
        img3.src="assets/img/baby/baby3.jpg";
        img4.src="assets/img/baby/baby4.jpg";
        img5.src="assets/img/baby/baby5.jpg";
        img6.src="assets/img/baby/baby6.jpg";
        
        radio1.value = "assets/img/baby/baby1.jpg";
        radio2.value = "assets/img/baby/baby2.jpg";
        radio3.value = "assets/img/baby/baby3.jpg";
        radio4.value = "assets/img/baby/baby4.jpg";
        radio5.value = "assets/img/baby/baby5.jpg";
        radio6.value = "assets/img/baby/baby6.jpg";
    }
    
    else{
        div.style.display = 'none';
    }
  
}
