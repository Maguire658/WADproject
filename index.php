<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<title>Web summit Staff App</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/css/bootstrap.min.css"/>

		<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

		<!--- Links jquery internally, a makes use of Jquery UI for widgits -->
		
	    <script type="text/javascript" src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>

	    <script type="text/javascript" src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>

	    <script src="bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

	    <script type="text/JavaScript" src="JS/dropDownBehaviour.js" ></script>

	    <script type="text/JavaScript" src="JS/DragAndDropbehaviour.js" ></script>

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	    <script src="JS/sidebarbehaviour.js" type="text/JavaScript"></script>
	    
	    <script src="JS/behaviour.js" type="text/javascript"></script>
	
	  
  	
  </script>
	     
	    
	    
	   
	  
	    <script>
	    //function myfunction(){
	//browser check
	// if(window.XMLHttpRequest){
	// 	var xmlReq = new XMLHttpRequest();
	// }else{
	// 	xmlReq = new ActiveXObject("Microsoft.XMLHTTP");
	// }
	// xmlReq.onreadystatechange = function(){
	// 	if(xmlReq.readyState==4 && xmlReq.status==200){
	// 		document.getElementById("rssfeed").innerHTML=xmlReq.responseText;
	// 	}
	// }
	
	// xmlReq.open("GET","getRssNews.php", true);
	// xmlReq.send();
	// }
</script>
	    
	    
	    
</head>
<body>
	<div class="container-fluid">
	<div class="row fixednav" style="z-index:100">
		<div class="col-xs-3" >
			<div id="sidenav" class="navbar-inverse vis">
				<div class="tempbtn">
					<ul>
						<li id="home" class="btndesign"><a class="btnfont" >Home</a></li>
						<li id="test" class="btndesign" ><a class="btnfont">Test</a></li>
						<li id="test2" class="btndesign" ><a class="btnfont" onclick="callTransformer('tempshift.php');" >Testscr</a></li>
					</ul>
				</div>
			
				<div id="rssfeed">
					
				</div>
			</div>
		</div>
	<div class="col-xs-9">
	</div>
	</div>
	<!--<div class="row">
	<div class="col-md-12">  -->
	<nav class = "navbar-fixed-top navbar-inverse" id = "topnav">
       <div class="container-fluid">
       			<button class = "navbar-toggle" id="sidenavbtn" >
       				<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
       			</button>
          
               <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navCollapse">
               	  
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>

               </button>
           

           <div class="collapse navbar-collapse navCollapse" id = "navClass"> 
 				<ul class = "nav navbar-nav navbar-right" id="topNav">
                    <li class = "navPad dropdown"><a href="#">
                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    	Fav's</a></li>
                   

                   		 <ul id = "dropdownNav" class="dropdown-menu">
                    	
                    	</ul>
                    </li>
                    
                    
 				</ul>
           </div>

       </div>

	</nav>
	<!--</div>
	</div> -->
	<div class="row">
		<div class="col-sm-3">
		</div>

		<div class="main col-sm-9 " id="homemain">
			<script type="text/javascript">
        	    $(function(){
        	        $("#homemain").load("summits.txt");
        	    });
        	    
     
    
        	
        	</script>
		</div>
		<div class="main col-sm-9 inactive" id="homemain2">
		</div>	
	</div>
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script type="text/javascript">

    function triggerClick(){
        		  alert('trigger working');
        		  setTimeout(function(){
           		$('#btnTue').trigger('click');
           	},10);
           	
           	}
    
  $(document).ready(function(){
		
		
         
           
 
    

            

      

    


       
         alert('working');
         
         
    /*    $('#centrestage').on('click', function(){
          alert('on click working');   
         //callTransformer("datasummit.xsl");   
         if(this.id =='datasummit'){
         	alert('datasummit btn working');
          callTransformer('transfromer/datapage.php');
         }
  }); */
    
    
    

  });
  
  
  
      
   /* $('#datasummit,# #).on('click',function(){
          alert('on click working');   
         //callTransformer("datasummit.xsl");       
          callTransformer('XSL/datasummit.xsl');
       });
         
         function testbtn(){
              
             $('#datasummit').on('click',function(){
                   alert('on click working');   
                   //callTransformer("datasummit.xsl");
                   callTransformer('xsltransformer.php');
                 });
                 
         } */
 
 function callTransformer(url){
 
 	 this.url = url;
 	
 	 var httpObj = false;
 	 alert('Function being called onClick');
     //checks to see which browser is in use 
      if(window.XMLHttpRequest){
       	  httpObj = new XMLHttpRequest();
	  }else if(window.ActiveXObject){
 	      httpObj = new ActiveXObject('Microsoft.XMLHTTP');
	  }
	  alert(url);
	   httpObj.open('GET',url,true);
	   
	  httpObj.onreadystatechange = function(){
	   	if(httpObj.readyState == 4 && httpObj.status == 200){
	  	      document.getElementById('homemain').innerHTML = httpObj.responseText;
	  	       console.log(url);
	  	               
	  	      // $('#homemain').load(url);
	         } 	       
	  	
	  }
	         
	        
	       httpObj.send();

  
  

 }
     </script>
    
								
</body>
</html>