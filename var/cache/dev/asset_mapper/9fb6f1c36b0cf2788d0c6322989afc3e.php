O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:65:"/home/alexander/dbwebb-kurser/mvc/me/report/assets/styles/app.css";s:10:"publicPath";s:55:"/assets/styles/app-426ad45fd176925827d66d1b25ed99b2.css";s:23:"publicPathWithoutDigest";s:22:"/assets/styles/app.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:5499:"@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

body {
    background: url("../images/mvc-a3d8f462b292979a703703f3b829c6c9.png");
    background-size: cover;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    color: #333;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    height: 200px;
}

h1 {
    border-bottom: 4px double #ccc;
}

main {
    margin: 0 auto;
    max-width: 500px;
    padding: 40px;
    margin-top: 60px; /* Lägg till marginal för att skapa utrymme för den fasta navbaren */
}

.site-nav {
    display: flex;
    list-style-type: none;
    justify-content: center;
    position: fixed;
    top: 0;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 10px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.site-nav a {
    text-decoration: none;
    color: #000000;
    font-weight: bold;
    font-size: 16px;
    transition: color 0.3s;
}

.site-nav a:hover {
    color: #ffa500;
}

.site-nav li {
    display: inline;
    margin-right: 20px;
}

@keyframes blink-animation {
    0% { color: red; }
    25% { color: blue; }
    50% { color: green; }
    75% { color: orange; }
    100% { color: purple; }
}

.blink {
    animation: blink-animation 1s infinite ease-in;
}

.site-footer {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: #333;
    position: fixed;
    bottom: 0;
    padding: 0 20px;
    width: 100%;
    height: 60px;
    color: #fff;
    z-index: 1000;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    text-decoration: none;
}

.container {
    width: 80%;
    margin: 0 auto;
}

.footer-section {
    flex: 1;
}

.social-links {
    list-style-type: none;
    padding: 0;
}

.social-links li {
    display: inline;
    margin-right: 10px;
}

.social-links li a {
    color: #fff;
    font-size: 20px;
}

input {
    font-size: 1em;
}

h1 {
    border-bottom: 4px double green;
}

.die {
    font-size: 3em;
}

.flash-notice {
    padding: 0.5em;
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff;
}

.flash-notice:before {
    content: "ⓘ";
}

.flash-warning {
    padding: 0.5em;
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
}

.flash-warning:before {
    content: "⚠";
}

.picture-about {
    margin: auto;
    width: 300px;
}

.about-div {
    display: grid;
    grid-template-columns: 50% 50%;
    padding-top: 100px;
}

.side-right {
    justify-self: right;
}

.side-left {
    justify-self: left;
}

ol {
    position: relative;
    box-sizing: border-box;
}

ol li {
    display: flex;
    background: rgba(255, 255, 255, .1);
    padding: 10px 20px;
    background-color: #333;
    margin: 5px 0;
    transition: .5s;
    border-radius: 10px;
}

ol a {
    color: #fff;
    text-decoration: none;
}

.btn {
    background: rgba(255, 255, 255, .1);
    padding: 10px 20px;
    background-color: #333;
    margin: 5px 0;
}

.btn a {
    text-decoration: none;
    color: #fff;
}

.card-ul li {
    padding-top: 5px;
    list-style: none;
}

.card-ul {
    background: #ccc;
}

.game-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: antiquewhite;
    list-style: none;
}

.actions {
    margin-top: 20px;
}

/* Grundinställningar för sidan */
body {
    margin-bottom: 100px;
    background: #f0f2f5;
}

.game-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 80%;
    max-width: 800px;
    margin: 40px auto;
}

.player-hand, .dealer-hand {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    width: 100%;
    margin-bottom: 20px;
}

.player-hand h2, .dealer-hand h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #555;
}

ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

li {
    font-size: 1.2em;
    padding: 5px 0;
}

p {
    font-size: 1.1em;
    margin: 10px 0;
}

.actions h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #555;
}

form {
    margin: 10px 0;
}

button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 1em;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #45a049;
}

h2 {
    font-size: 1.2em;
    color: #333;
    margin: 10px 0;
}

@media (max-width: 768px) {
    .game-container {
        width: 90%;
        padding: 10px;
    }

    h1, .player-hand h2, .dealer-hand h2, .actions h2 {
        font-size: 1.5em;
    }

    li {
        font-size: 1em;
    }

    button {
        padding: 12px 24px;
        font-size: 0.9em;
    }
}


table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #4CAF50;
    color: white;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tbody tr:hover {
    background-color: #f5f5f5;  
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}";s:6:"digest";s:32:"426ad45fd176925827d66d1b25ed99b2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:65:"/home/alexander/dbwebb-kurser/mvc/me/report/assets/images/mvc.png";s:10:"publicPath";s:55:"/assets/images/mvc-a3d8f462b292979a703703f3b829c6c9.png";s:23:"publicPathWithoutDigest";s:22:"/assets/images/mvc.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"a3d8f462b292979a703703f3b829c6c9";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:14:"images/mvc.png";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:14:"styles/app.css";}