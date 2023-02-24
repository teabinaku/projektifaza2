
<?php 

session_start();
$connect = mysqli_connect("localhost", "root", "", "cart");
 
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
			
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Filmi eshte ne liste")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
 
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Filmi u fshi nga lista")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}
 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Watch Later</title>
		<link rel="stylesheet" href="cssw.css?v=<?php echo time(); ?>">

	</head>
	<body style="background-color:blueviolet">
	<div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">WEBMOVIE</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                <form action="../Main page/index1.php">
                     <li class="menu-list-item active"><button class="seriale" >Home</button></li>
                         </form>
                    <form action="../Movies/movies.php" >
                    <li class="menu-list-item" ><button class="seriale">Movies</button></li>
                  </form>
                    <form action="../Series/series.php">
                    <li class="menu-list-item"><button class="seriale">Series</button></li>
                    </form>
                    <form action="../About us/aboutus.php">
                    <li class="menu-list-item" ><button class="seriale">About us</button></li>
                  </form>

                   

                </ul>
            </div>
            <input  id="tea" ;type="text"placeholder="Kerko.." name="search">
                  <button id="butoni2" ><img src="./searchpurple.png" id="avatar2"></button>
                  <form action="../profili/profilii.php">
                  <button id="butoni"> <img  src="./avatar test.webp" id="avatar"></button>
                  </form  >
                  <form action="../watchlater/watchlater.php">
                  <button id="butoni3"><img src="watchlater.webp" id="avatar4"></button>
                  <form>
</form>

                </div>
               
            </div>
        </div>

    </div>
		
		<div class="container">
			
			
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="width:300px; background-color: rgb(24,24,24); border-radius:23px; padding:16px;" align="center">
						
 
						<h4 style="color:blueviolet" ;class="text-info"><?php echo $row["name"]; ?></h4>
 
						
 
						
 
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
 
						
 
						<input type="submit" name="add_to_cart" style="margin-top:5px; width:3cm ; height:1cm ;background-color: rgb(24,24,24);color:blueviolet;border:none" class="btn btn-success" value="Shto ne liste" />
 
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			
			
			<div class="table-responsive";style="">
			<h3 style="font-size:xx-large; color:blueviolet"> Lista</h3>
				<table class="table table-bordered">
					<tr>
						<th width="40%" style="color:blueviolet ;padding:5px">Filmat:</th>
						
						
						
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td style="color:white"><?php echo $values["item_name"]; ?></td>
						
						
						
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger" style="color: red; ">Largo nga lista</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>