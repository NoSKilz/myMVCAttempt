<?php
$platforms=$controler->platforms();
$genres=$controler->genres();
?>
<header>
    <div id="reg-log">
    </div>
    <div id="search">
        <div id="form-container">
            <form method="get" action="result.php">
                <div id="suggestions-container">
                    <input id="search-input" type="search" name="search" placeholder="Vyhledat hru" autocomplete="off"/>
                    <div id="suggestions"></div>
                </div>
                <input type="submit" name="s-submit" value="Hledat"/>
            </form>
        </div>
        <a href="cart.php"><button id="cart-btn" class>Košík    <?php if(isset($_SESSION['cart'])){echo "({$_SESSION['number']})";}else{} ?></button></a>
    </div>
    <div id="navigation">
        <div id="navigation-container">
            <ul id="navigation-ul">
                <?php foreach($platforms as $platform):?>
                <li class="platform"><a href="#"><?php echo $platform['platform_name']; ?></a>
                    <ul class="genre-ul">
                        <?php foreach ($genres as $genre):?>
                        <li class="genre">
                            <a href=""><?php echo $genre['genre_name']; ?></a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
        <div id="accordion-container">
        </div>
    </div>
</header>