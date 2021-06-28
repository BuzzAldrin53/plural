

 		<style>
 			.home_sellos_div{
 				height: 100px;
 				width: 90%;
 				/*background-color: #fcf;*/
 				margin: auto;
 				overflow: hidden;
 				opacity: 0.8;
 			}
 			.home_sellos_element{
 				float: left;
 				width: 130px;
 				height: auto;

 				background-color: #fff;
 				margin-right: 21px;
 				margin-bottom: 40px;
 				cursor: pointer;

 				overflow: hidden;

 				border-radius: 7px;

 				
 			}
 			.home_sellos_element img{
 				width: 100%;
 			}
 			.home_sellos_element:hover{
 				/*
 				-webkit-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	-moz-box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	box-shadow: 3px 3px 7px 0px rgba(71,70,71,0.5);
	        	*/
 			}
 		</style>



 		<div class="ideas_cats_tit">
 			<div style="font-size: 30px;">SOMOS SUSTENTABLES</div>
 			<div style="color: #333; margin-top: 10px; ">Sellos internacionales que avalan nuestros productos</div>
 		</div>

 		<div class="home_sellos_div">


 						<?php

						  $qt = " SELECT * FROM `home_sellos` order by orden";   

						  //echo $qt;

						  $resultt = $mysqli->query($qt);
						  while ($rowt = $resultt->fetch_row()){

						  	    $id=$rowt[0];
	                            $titulo=$rowt[1];
	                            $imagen=$rowt[2];
	                            $url=$rowt[2];

		 				?>

								 				
									<div class="home_sellos_element">
						 				<img src="<?php echo $imagen; ?>" >
						 			</div>

		 				<?php 
		 				}
		 				?>

 			<div class="clr"></div>
 		</div>



 	</div>


