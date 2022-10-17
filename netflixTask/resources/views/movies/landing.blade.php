<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<style>
    :root {
    --primary-color: #e50914;
    --dark-color: #141414;
    --light-color: #f4f4f4;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    -webkit-font-smoothings: antialiased;
    background: #000000;
    color: #999999;
}

ul {
    list-style: none;
}

h1,
h2,
h3,
h4 {
    color: #fff;
}

a {
    color: #fff;
    text-decoration: none;
}

p {
    margin: 0.5rem 0;
}

img {
    width: 100%;
}

.header-main {
    width: 100%;
    height: 93vh;
    position: relative;
    background: url('https://i.ibb.co/vXqDmnh/background.jpg') no-repeat center center/cover;
}

.header-main::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background: rgba(0, 0, 0, 0.6);
    box-shadow: inset 120px 100px 250px #000000, inset -120px -100px 250px #000000;
}

.header-top {
    position: relative;
    z-index: 2;
    height: 90px;
}

.header-top img {
    width: 170px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin-left: 0;
}

.header-top a {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translate(-50%, -50%);
}

.header-cta {
    position: relative;
    z-index: 2;
    width: 65%;
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 9rem;
}

.header-cta h1 {
    font-weight: 700;
    font-size: 5.2rem;
    line-height: 1.1;
    margin: 0 0 2rem;
}

.header-cta p {
    text-transform: uppercase;
    color: #fff;
    font-weight: 400;
    font-size: 1.9rem;
    line-height: 1.25;
    margin: 0 0 2rem;
}

.tabs {
    background: var(--dark-color);
    padding-top: 1rem;
    border-bottom: 3px solid #3d3d3d;
    border-right: none;
}

.tabs .grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1rem;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.tabs p {
    font-size: 1.2rem;
    padding-top: 0.5rem;
}

.tabs .grid-container>div {
    padding: 1.5rem 0;
}

.tabs .grid-container>div:hover {
    color: #fff;
    cursor: pointer;
}

.table-border {
    border-bottom: var(--primary-color) 4px solid;
}

.table-content {
    padding: 3rem 0;
    background: #000000;
    color: #fff;
}

#table-1-content,
#table-2-content,
#table-3-content {
    display: none;
    opacity: 0;
}

.show {
    display: block !important;
    opacity: 1 !important;
    transition: all 1000 ease-in;
}

#table-1-content .table-1-content-inner {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 2rem;
    align-items: center;
    justify-content: center;
}


/* //////////////////////////////////////////////// */

#table-2-content .table-2-content-top {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 1rem;
    justify-content: center;
    align-items: center;
}

#table-2-content .table-2-content-bottom {
    margin-top: 2rem;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 2rem;
    text-align: center;
}

.table {
    width: 100%;
    margin-top: 2rem;
    border-collapse: collapse;
    border-spacing: 0;
}

.table thead th {
    text-transform: uppercase;
    padding: 0.8rem;
}

.table tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}

.table tbody tr td {
    color: #999;
    padding: 0.8rem 1.2rem;
    text-align: center;
}

.table tbody tr td:first-child {
    text-align: left;
}

.table tbody tr:nth-child(odd) {
    background: #222;
}

.footer {
    max-width: 70%;
    margin: 1rem auto;
    overflow: auto;
}

.footer,
.footer a {
    color: #999;
    font-size: 0.9rem;
}

.footer p {
    margin-bottom: 1.5rem;
}

.footer .footer-cols {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem;
}

.footer li {
    line-height: 1.9;
}

.footer .lang-select {
    margin-top: 2rem;
    color: #999;
    background-color: #000;
    background-image: none;
    border: 1px solid #333;
    padding: 1rem 1.2rem;
    border-radius: 5px;
}


/* Container */

.grid-container {
    max-width: 70%;
    margin: auto;
    overflow: hidden;
    padding: 0 2rem;
}


/* Text Styles */

.text-xl {
    font-size: 2rem;
}

.text-lg {
    font-size: 1.8rem;
    margin-bottom: 1rem;
}

.text-md {
    margin-bottom: 1.5rem;
    font-size: 1.2rem;
}

.text-center {
    text-align: center;
}

.text-dark {
    color: #999;
}


/* Buttons */

.btn {
    display: inline-block;
    background: var(--primary-color);
    color: #fff;
    padding: 0.4rem 1.3rem;
    font-size: 1rem;
    text-align: center;
    border: none;
    cursor: pointer;
    margin-right: 0.5rem;
    transition: opacity 0.2s ease-in;
    outline: none;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.45);
    border-radius: 2px;
}

.btn:hover {
    opacity: 0.9;
}

.btn-rounded {
    border-radius: 5px;
}

.btn-xl {
    font-size: 2rem;
    padding: 1.5rem 2.1rem;
    text-transform: uppercase;
}

.btn-lg {
    font-size: 1rem;
    padding: 0.8rem 1.3rem;
    text-transform: uppercase;
}

.btn-icon {
    margin-left: 1rem;
}

@media (max-width: 960px) {
    .header-main {
        height: 70vh;
    }
    .hide-sm {
        display: none;
    }
    .header-top img {
        top: 30%;
        left: 5%;
        transform: translate(0);
    }
    .header-cta h1 {
        font-size: 3.7rem;
        line-height: 1;
    }
    .header-cta p {
        font-size: 1.5rem;
    }
    .footer .footer-cols {
        grid-template-columns: repeat(2, 1fr);
    }
    .btn-xl {
        font-size: 1.5rem;
        padding: 1.4rem 2rem;
        text-transform: uppercase;
    }
    .text-xl {
        font-size: 1.5rem;
    }
    .text-lg {
        font-size: 1.3rem;
        margin-bottom: 1rem;
    }
    .text-md {
        margin-bottom: 1rem;
        font-size: 1.2rem;
    }
}

@media (max-width: 700px) {
    .header-main::after {
        background: rgba(0, 0, 0, 0.6);
        box-shadow: inset 80px 80px 150px #000000, inset -80px -80px 150px #000000;
    }
    .header-cta h1 {
        font-size: 2.5rem;
        line-height: 1;
    }
    .header-cta p {
        font-size: 1rem;
    }
    #tab-1-content .tab-1-content-inner {
        grid-template-columns: 1fr;
        text-align: center;
    }
    #table-2-content .table-2-content-top {
        display: block;
        text-align: center;
    }
    #table-2-content .table-2-content-bottom {
        margin-top: 2rem;
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 2rem;
        text-align: center;
    }
    .btn-xl {
        font-size: 1rem;
        padding: 1.2rem 1.6rem;
        text-transform: uppercase;
    }
}

@media(max-height: 600px) {
    .header-cta {
        margin-top: 3rem;
    }
}

</style>
<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header class="header-main">
        <div class="header-top">
            <img src="https://i.ibb.co/r5krrdz/logo.png" alt="netflix logo">
        </div>
        <div class="header-cta">
            <h1>See what's next</h1>
            <p>Watch anywhere. Cancel Anytime</p>
            <a href="http://127.0.0.1:8000/movies" class="btn btn-xl">Show a  Movies  <i class="fas fa-chevron-right btn-icon"></i></a>
        </div>
    </header>

    <div style="display: flex ; padding-left:300px  " class="films">
    <div class="card" style="width: 18rem;margin-right:20px ">
  <img class="card-img-top" src="https://images.moviesanywhere.com/076768ed9134955a90200bfc8622cbe7/4dcf5ab4-d2af-4421-983c-ad319da6b754.jpg" alt="Card image cap">
  <div class="card-body"> <br>
    <a style="margin-left: 80px"  href="http://127.0.0.1:8000/movies/4?_token=ofkQbBZDbOPA3hlijy5r11GFG78F6fW3vM2L7hmV" class="btn btn-primary"> Read more </a>
  </div>
</div>
   <div class="card" style="width: 18rem; margin-right:20px ">
  <img class="card-img-top" src="https://m.media-amazon.com/images/M/MV5BZGE4YTRjMGEtMWE2YS00ZDUwLTg3YzYtZTI2ZjdjMGNhOTE3XkEyXkFqcGdeQXVyMTk4MTY0MDA@._V1_.jpg" alt="Card image cap">
  <div class="card-body"> <br>
    <a style="margin-left: 80px" href="http://127.0.0.1:8000/movies/6?_token=ofkQbBZDbOPA3hlijy5r11GFG78F6fW3vM2L7hmV" class="btn btn-primary"> Read more </a>
  </div>
</div>
   <div class="card" style="width: 18rem; margin-right:20px ">
  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXfTeV7wQoKq7qI_2noWRFKfzFwGmxnmElmXnv0fpoO7u0KYSv" alt="Card image cap">
  <div class="card-body"> <br> <br>
    <a style="margin-left: 80px" href="http://127.0.0.1:8000/movies/17?_token=ofkQbBZDbOPA3hlijy5r11GFG78F6fW3vM2L7hmV" class="btn btn-primary"> Read more </a>
  </div>

</div>

   <div class="card" style="width: 18rem; margin-right:20px ">
  <img class="card-img-top" src="https://cdn.europosters.eu/image/750/posters/james-bond-no-time-to-die-azure-teaser-i109817.jpg" alt="Card image cap">
  <div class="card-body"> <br>
    <a style="margin-left: 80px" href="http://127.0.0.1:8000/movies/5?_token=ofkQbBZDbOPA3hlijy5r11GFG78F6fW3vM2L7hmV" class="btn btn-primary"> Read more </a>
  </div>

</div>
<br>

</div>
    <section class="table-content">
        <div class="grid-container">
            <div class="table-content-item show" id="table-1-content">
                <div class="table-1-content-inner">
                    <div>
                        <p class="text-lg">Netflix, Inc. is an American subscription streaming service and production company based in Los Gatos, California. .</p>
                        <a href="#" class="btn btn-lg">Watch Free For 30 Days</a>
                    </div>
                    <img src="https://imageio.forbes.com/specials-images/imageserve/62cf2085927d87b8e06829cb/In-this-photo-illustration--a-silhouetted-woman-holds-a-smartphone-with-the-Netflix/0x0.jpg?format=jpg&crop=3444,1937,x0,y50,safe&width=960 alt="laptop display" />
                </div>
            </div>
            <div class="table-content-item" id="table-2-content">
                <div class="table-2-content-top">
                    <p class="text-lg">Watch TV shows and movies anytime, anywhere — personalized for you.
                    </p>
                    <a href="#" class="btn btn-lg">Watch Free For 30 Days</a>
                </div>
                <div class="table-2-content-bottom">
                    <div>
                        <img src="https://i.ibb.co/DpdN7Gn/tab-content-2-1.png" alt="tablet image">
                        <p class="text-md">Watch on your TV</p>
                        <p class="text-dark">
                            Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.
                        </p>
                    </div>
                    <div>
                        <img src="https://i.ibb.co/R3r1SPX/tab-content-2-2.png" alt="something" />
                        <p class="text-md">
                            Watch instantly or download for later
                        </p>
                        <p class="text-dark">
                            Available on phone and tablet, wherever you go.
                        </p>
                    </div>


                    <div>
                        <img src="https://i.ibb.co/gDhnwWn/tab-content-2-3.png" alt="" />
                        <p class="text-md">
                            Use any computer
                        </p>
                        <p class="text-dark">
                            Watch right on Netflix.com.
                        </p>
                    </div>
                </div>
            </div>

    <footer class="footer">
        <p>Questions? Call 1-866-579-7172</p>
        <div class="footer-cols">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Ways To Watch</a></li>
                <li><a href="#">Corporate Information</a></li>
                <li><a href="#">Netflix Originals</a></li>
            </ul>
            <ul>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Terms Of Use</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Redeem Gift Cards</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Speed Test</a></li>
            </ul>
            <ul>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Buy Gift Cards</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="#">Legal Notices</a></li>
            </ul>
        </div>

    </footer>
    <script>const tabItems = document.querySelectorAll('.table-item');
const tabContentItems = document.querySelectorAll('.table-content-item');

// Select tab content item
function selectItem(e) {
    // Remove all show and border classes
    removeBorder();
    removeShow();
    // Add border to current tab item
    this.classList.add('table-border');
    // Grab content item from DOM
    const tabContentItem = document.querySelector(`#${this.id}-content`);
    // Add show class
    tabContentItem.classList.add('show');
}

// Remove bottom borders from all tab items
function removeBorder() {
    tabItems.forEach(item => {
        item.classList.remove('table-border');
    });
}

// Remove show class from all content items
function removeShow() {
    tabContentItems.forEach(item => {
        item.classList.remove('show');
    });
}

// Listen for tab item click
tabItems.forEach(item => {
    item.addEventListener('click', selectItem);
});
        </script></script>
</body>

</html>
