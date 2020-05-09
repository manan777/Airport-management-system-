<html lang="en">

<head>

<meta charset="UTF-8">

<title>Homepage</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Open+Sans|Pacifico" rel="stylesheet">

<style>

  * {

  box-sizing: border-box;

}

 

html {

  margin: 0;

  padding: 0;

}

 

body{

  margin:0;

  padding: 0;

  background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url(https://images.pexels.com/photos/723240/pexels-photo-723240.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) no-repeat;

  background-size: cover;

  color: black;

  font-family: "open sans";

  height: 100vh;

  display: flex;

  flex-direction: column;

  justify-content: space-between;

}

 

/* ------------------------ NAVBAR ----------------*/

 

 

header{

  display:flex;

  justify-content: space-between;

  color: white;

  background: rgba(0,0,0,0.2)

}

 

header div{

  display:flex;

  justify-content: space-between;

  align-items: center;

  font-family: Pacifico;

  margin: 0 2rem;

}

 

header div i{

  font-size: 2rem;

  margin: 1rem;

}

 

 

header nav{

  padding: 1rem 2rem;

}

 

nav ul li{

  list-style: none;

  display: inline;

  text-transform: uppercase;

  font-weight: bold;

  letter-spacing: 5px;

}

 

nav li a{

  padding: 1rem;

  margin: 1rem;

  text-decoration: none;

  color: white;

  transition: all 250ms ease-in;

}

 

nav li a:hover{

  background: rgba(255,255,255,.3);

  color: black;

}

 

 

 

/* ------------------------ TOP SECTION ----------------*/

 

.titles{

  color: white;

  text-align: center;

  width: 50vw;

  margin: 0 auto;

}

 

.titles h1{

  font-family: Pacifico;

  font-size: 5rem;

  margin-bottom: 0;

  text-shadow: 1px 1px 0 black;

 

}

 

.titles p{

  letter-spacing: 3px;

  text-shadow: 1px 1px 0 black;

}

 

 

/* MEDIAQUERIES */

 

 

@media (max-width: 1160px){

  .text h3{

    text-transform: uppercase;

    letter-spacing: 4px;

    margin-bottom: 0;

    font-size: 1rem;

  }

 

  .text p{

    margin-top: 1rem;

    line-height: 1.5rem;

    text-align: left;

    font-size: .8rem;

  }

  nav li a:hover{

  background: none;

  color: black;

  }

}

 

 

@media (max-width: 850px){

  body{

    height: 100%;

  }

  .titles h1{

  font-size: 3rem;

  }

}

</style>

<script>

  window.console = window.console || function(t) {};

</script>

<script>

  if (document.location.search.match(/type=embed/gi)) {

    window.parent.postMessage("resize", "*");

  }

</script>

</head>

<body translate="no">

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Yarn Over</title>

</head>

<body>

<header>

<div>

<i class="fas fa-atom"></i>

<p>Airport management</p>

</div>

<nav>

<ul>

<li><a href="login.php">Connect</a></li>

</ul>

</nav>

</header>

</body>

</html>

</body>

</html>