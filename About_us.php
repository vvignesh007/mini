<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

button{
    width: 100px;
    height: 30px;
    background: #adadad;
    border:none;
    margin-top: 10px;
    margin-left: 1px;
    font-size: 18px;
    text-decoration: none;
    color: black;
    font-weight: bold;

}
button a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>Some text about who we are and what we do.</p>
  <p>Martial arts are codified systems and traditions of combat practiced for a number of reasons such as self-defense;<br> military and law enforcement applications; competition; physical, mental, and spiritual development; entertainment; and the preservation of a nation's intangible cultural heritage.</p>
</div>
<button id="back"><a href="index.php">Back</a></button>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./1908222.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Vidyut</h2>
        <p class="title">Member</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <a href="https://en.wikipedia.org/wiki/Vidyut_Jammwal">vidyut@example.com</a>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./1392805.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Jason</h2>
        <p class="title">Chairman</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <a href="https://en.wikipedia.org/wiki/Jason_Statham">jason@example.com</a>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="./kabib.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Khabib</h2>
        <p class="title">Member</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <a href="https://en.wikipedia.org/wiki/Khabib_Nurmagomedov">khabib@example.com</a>
       
      </div>
    </div>
  </div>
</div>

</body>
</html>
