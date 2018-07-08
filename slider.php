<style>
    .mySlides {display: block; margin-left: auto; margin-right: auto; width: 40vw;height:20vw;}
    .home_mid {margin-left:25%; margin-right:24%;}
    .middle_bar {font-family: "Open Sans"; height: 480px; top: 190px; background-color:#d4d4d4; position: fixed; left:0; width:100%;}
</style>

<div class="middle_bar">
    <br><h2 align='center'>Welcome to Examination Management System of University of Moratuwa</h2><br>
    <img class="mySlides" src="imgs/home_img1.jpg" >
    <img class="mySlides" src="imgs/home_img2.jpg" >
    <img class="mySlides" src="imgs/home_img3.jpg" >
    <img class="mySlides" src="imgs/home_img4.jpg" ><br>
    <div class="home_mid">
        <p style="text-align:justify">
            Examination Management System (EMS) provides various important student related services such as student registration, 
            undergraduate and postgraduate examinations related activities, conducting aptitude tests, issuing examination results, 
            issuing academic transcripts and degree certificates etc.
        </p>
    </div>
</div>

<script>
    var slideIndex=0;
    showSlides();
    function showSlides() {
        if(slideIndex==3){slideIndex=0;}else{slideIndex++;}
        var slides = document.getElementsByClassName("mySlides");
        for(var i = 0; i < slides.length; i++){
            slides[i].style.display = "none"; 
        }
        slides[slideIndex].style.display = ""; 
        setTimeout(showSlides, 3000);
    }
</script>