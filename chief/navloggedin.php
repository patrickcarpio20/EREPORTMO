<style type="text/css">

	  		@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');







:focus{

  outline:none;

}







a{

  text-decoration: none;

  color:white;

  cursor:pointer;

}



nav{

  display:flex;

  flex-wrap:wrap;

  background-color:#EDB248;

  padding:0 8%;

  justify-content:space-between;

  backdrop-filter:blur(5px);

}



.logo{

  font-family:'Pacifico', cursive;

  font-size:2rem;

  transition:color .3s ease;

}



.logo:hover, .logo:focus {

  color:#111;

}



ul{

  list-style:none;

  display:flex;

  align-items:center;

}



li{

  margin-left:2em;

}



.link{

   position:relative;

}



.link::after{

  content:"";

  display:block;  

  position:absolute;

  background-color:#444;

  width:100%;

  height:.2em;

  bottom:-.3em;

  left:0;

  border-radius:.1em;

  transform:scaleX(0);

  transition:transform .3s ease;

  transform-origin:right;

}



.link:hover::after, .link:focus::after   {

  transform:scaleX(1);

  transform-origin:left;

  color: white;

}







@media screen and (max-width:600px){

  

  

 

  ul{

    margin:6em 0;

    display:none;

    flex:100%;

  }

  

  li{

    margin-left:0;

    text-align:center;

    margin-bottom:3em;

  }

  

  #toggle:checked + ul{

    display:block;

  }

}

	  	</style>



	  	<nav>

    <div style="display: flex;flex-direction: row;align-items: center;width: 50%;">
  <img src="../public/images/e-logo.png" alt="Urbanic Template" title="Urbanic Template" style="width:15%;"/>
  &emsp; <h3 style="font-weight: 700;">CHIEF SECTION</h3>

   <label aria-hidden="true" for="toggle"><i class="fas fa-bars" style="display: none;"></i></label>

  <input aria-hidden="true" name="toggle" id="toggle" type="checkbox" style="display: none;">

  
  </div>
  <ul style="padding-top: 1%;">

    <li><a class="link" href="dashboard.php">Dashboard</a></li>

    <!-- <li><a class="link" href="accounts.php">Accounts</a></li> -->

    <li><a class="link" href="../erm/index.php?logout=yes">Logout</a></li>

  </ul>
</nav>