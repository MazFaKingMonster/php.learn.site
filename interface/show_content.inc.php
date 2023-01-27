<?php
function show_content($library,$get_library_section,$get_library_chapter,$get_chapter_name){
    foreach ($library as $library_section => $library_chapter){
        foreach ($library_chapter as $chapter_name => $chapter_department){
            foreach ($chapter_department as $paragraph => $page){
                if(     $get_library_section == "$library_section"
                    &&  $get_library_chapter == "$chapter_name"
                    &&  $get_chapter_name == "$paragraph"){

                    include "library/$get_library_section/$get_library_chapter/$get_chapter_name.inc.php";
                    continue;
                }
                if (    $get_library_section == "$library_section"
                    &&  $get_library_chapter == "$chapter_name"
                    &&  !$get_chapter_name == "$paragraph"){

                    include "library/$get_library_section/$get_library_chapter/$paragraph.inc.php";

                    continue;
                }
                if ($get_library_section == "$library_section"
                    && !$get_library_chapter == "$chapter_name"
                    && !$get_chapter_name == "$paragraph"){

                    include "library/$get_library_section/$chapter_name/$paragraph.inc.php";

                    continue;
                }
                if (!$get_library_section == "$library_section"
                    && !$get_library_chapter == "$chapter_name"
                    && !$get_chapter_name == "$paragraph"){

                    include_once "pages/hello.inc.php";
                }
            }
        }
    }
};
?>
