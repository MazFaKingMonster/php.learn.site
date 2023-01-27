<?php session_start();?>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        include_once "includes/link.inc.php";
        include_once "includes/cookie.inc.php";
        include_once 'includes/heeds.inc.php';
        include_once 'includes/library.inc.php';
        include_once 'includes/fonts.inc.php';
    ?>
</head>
<body>
    <div class="header">
        <a class="main_page" href="index.php">Learn</a>
        <div class="visit">
        <?php
        if(!$visit_counter){
            echo "<p>Привет путник!";
        }elseif($_POST['jerk_name']){
            $_SESSION['user_name'] = $_POST['jerk_name'];
            echo "<p>Привет " . $_SESSION['user_name'];
            echo "<p>Мы тебя помним! Ты заходил к нам $last_visit";
        }
        elseif($_SESSION['user_name']){;
            echo "<p>Привет " . $_SESSION['user_name'];
            echo "<p>Мы тебя помним! Ты заходил к нам $last_visit";}
        else{
            echo "<p>Привет придурок!";
            echo "<p>Мы тебя помним! Ты заходил к нам $last_visit";
        }
        if($_POST["jerk_name"] or $_SESSION['user_name']){
            echo "<form action='kill_session.inc.php'> <input type='submit' value='Забыть нахуй!'/></form>";
        }
        if(!$_POST['jerk_name'] && !$_SESSION['user_name'] && !$_COOKIE['visit_counter']) {
            echo "
                <div class='user_name'>
                    <form action='index.php' method='POST'>
                        <label>Напиши как нам тебя называть!
                            <input name='jerk_name' type='text'>
                            <input type='submit' value='Запомнить!'>
                        </label>
                    </form>
                </div>
            ";
        }elseif(!$_POST['jerk_name'] && !$_SESSION['user_name']) {
            echo "
                <div class='user_name'>
                    <form action='index.php' method='POST'>
                        <label>Слышь придурок, напиши как нам тебя называть!
                            <input name='jerk_name' type='text'>
                            <input type='submit' value='Запомни сука!'>
                        </label>
                    </form>
                </div>
            ";
        }
        ?>
        </div>
            <div class="top_menu">
                <ul>
                        <?php
                        include_once 'interface/draw_top_menu.inc.php';
                        draw_top_menu($library);
                        ?>
                </ul>

            </div>
    </div>
    <div class="sidebar">
        <div class="sidebar-menu">
            <ul>
                <?php
                    include 'interface/draw_sidebar_menu.inc.php';
                    draw_sidebar_menu($library, $get_library_section, $get_library_chapter);
                ?>
            </ul>
        </div>
    </div>
    <div class="content">
            <?php
                include_once 'interface/show_content.inc.php';
                show_content($library, $get_library_section,$get_library_chapter,$get_chapter_name);
            ?>
    </div>
    <div class="footer">
        &copy; MazFaKingMonster
    </div>
</body>
</html>