<?php
function draw_top_menu ($library){

  foreach ($library as $library_section => $library_chapter){
      echo "<li>
                <button><a href='index.php?library_section=$library_section'>$library_section</a></button>
            </li>";
      }
};
?>