<?php
include 'htmlheader.php';
include 'htmlmenu.php';
?>
    <div id='bigImage' style='text-align:center; margin-top:150px;'>
    <?php
	echo "<img src=\"$imgDir/$imgName\" alt=\"$imgName\"> ";
	  
    ?>
	</div>
  
  <form method="post" action="<?php echo htmlspecialchars("opinion.php");?>">
	<fieldset  id="comment">
		<legend>Opinia</legend>
    <?php
	  if ($errData) {
    ?>
        <h2 id="errInp"> Fill <i> <?php echo $fldNm; ?> </i> field</h2>
    <?php
      }
      else {
    ?>
      <h2>Napisz swoje wrażenie o wyjeździe z nami!</h2>
      <?php
      }
      ?>
    <div class="formul"> <label for="frstname">Imię </label>
      <input type="text" name="fname" id="frstname" value="<?php echo stripslashes($fname) ?>" /></div>
    
    <div class="formul">
       <label for="selrate">Ocena </label>  &nbsp;&nbsp;
       <select name="rating" size="1" id="selrate" >
    <?php
         for($i=1; $i<6; $i++) {
             echo "<option value=\"".$i."\"";
             if ($rating == $i) {
                 echo " selected=\"selected\"";
             }
             echo ">".$i."</option>";
         }
		 ?>
     </select>
    </div>
    
    <div class="formul"><label>Napisz opinie </label><br />
    <textarea name="comm" rows="3" cols="60"><?php echo stripslashes($comm) ?></textarea> </div>
    <div>
    <input class="bold" type="submit" value="Wyślij" />
    <input class="bold" type="reset" value="Zresetuj" />  </div>
	</fieldset>
  </form>
  </div>
  </body>
</html>
