<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Genre</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
  
        <ul class="nav">
		<?php
					
			$sql="select * from genre";
			$result=mysqli_query($con,$sql);
			  
			while($row=mysqli_fetch_assoc($result)){
				  
		?>
            <li class="dropdown menu-item">
            <?php
					echo "<a href=genre.php?id=".$row['id'].">".$row['genreName']."</a>";
			?>
</li>
<?php
			}
?>
</ul>
    </nav>
</div>