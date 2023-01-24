<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAM</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    
    <div class="header">
        <div class="header_wrapper">
            <h1>  University of La Salette</h1>
            <div class="header_menu">
                <ul>
                    <li><a href="about.html">Sign in</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="news.php">News</a></li>
                </ul>
            </div>
        </div>
    </div>
    
        

        <div class="mis"><p><strong>VISION</strong><br><br>"The University of La Salette, Inc., a Catholic institution founded by the Missionaries of Our Lady of La Salette, forms RECONCILERS “so that they may have life, and have it to the full.” (John 10:10)</p></div>  
        <div class="vis"><p><strong>MISSION</strong><br><br>The University of La Salette, Inc. is a premier institution of choice, providing accessible, quality, and transformative education for integral human development particularly the poor.</p></div>  
        <div class="log"><p><strong>SCHOOL LOGO</strong><br><br><img src="logo.jpg" alt="" style="float:left;width:50px;height:50px;margin-right:10px;margin-top:5px;">
        A paragraph with a floating image. A paragraph with a floating image. A paragraph with a floating image.  
        </p>
        
        
            <div class="slide">
                <div class="slider">GALLERY</div>

                <div class="w3-content w3-display-container">
                    <img class="mySlides" src="first.png" style="width:300px">
                    <img class="mySlides" src="second.png" style="width:300px">
                    <img class="mySlides" src="third.png" style="width:300px">
                    <img class="mySlides" src="fourth.png" style="width:300px">
                        <div class="ar">   
                            <button onclick="plusDivs(-1)">&#10094;</button>
                            <button onclick="plusDivs(1)">&#10095;</button>
                        </div>
                </div>
            </div>


        <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
        </script>
 
</body>
</html>