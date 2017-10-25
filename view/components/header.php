<?php
$platforms=$controler->platforms();
$genres=$controler->genres();
?>
<header>
    <div id="reg-log">
        <?php if($user->loggedin()): ?>
            <?php if((int)$user->isadmin()==true): ?>
            <p>Jste přihlášen jako Admin</p>
            <div class="adm-container">
                <a href="" class="adm">Vstup do Administrace</a>
            </div>
            <?php else: ?>
            <p>Jste přihlášen jako <?php $user->getname() ?></p>
            <div class="adm-container">
                <a href="/?c=interface" class="adm">Vstup do Uživatelského rozhraní</a>
            </div>
            <?php endif ?>
        <?php else: ?>
        <div id="reglog-modal" style="display: none;">
            <form id="login" method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>" style="display: none;">
                <span class="close cursor">&times;</span>
                <label for="l-username">
                    Uživatelské jméno
                </label>    
                <input id="l-username" type="text" name="l-username" placeholder="Uživatelské jméno" maxlength="20" minlength="1" autocomplete="off" required/>
                <label for="l-password">
                    Heslo
                </label>    
                <input id="l-password" type="password" name="l-password" placeholder="Heslo" minlength="4" autocomplete="off" required/>
                <input type="submit" name="l-submit" value="Přihlásit"/>
                <p id="login-p">Nemáte účet? <span id="login-span">Zaregistrujte se.</span></p>
            </form> 
            <form id="register" method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>" style="display: none;">
                <span class="close">&times;</span>
                <label for="r-username">
                    Uživatelské jméno
                </label>    
                <input id="r-username" type="text" name="r-username" placeholder="Uživatelské jméno" maxlength="20" minlength="1" autocomplete="off" required/>
                <label for="r-password">
                    Heslo
                </label>    
                <input id="r-password" type="password" name="password" placeholder="Heslo" minlength="4" autocomplete="off" required/>
                <label for="r-check-password">
                    Kontrola Hesla
                </label>    
                <input id="r-check-password" type="password" name="check-password" placeholder="Heslo Znovu" minlength="4" autocomplete="off" required/>
                <label for="r-e-mail">
                    Email
                </label>    
                <input id="r-e-mail" type="email" name="e-mail" placeholder="E-mail" maxlength="40" minlength="1" autocomplete="off" required/>
                <label for="r-check-e-mail">
                    Kontrola E-mailu
                </label>    
                <input id="r-check-e-mail" type="email" name="check-e-mail" placeholder="E-mail Znovu" maxlength="40" minlength="1" autocomplete="off" required/>
                <input type="submit" name="r-submit" value="Registrovat" class="c_sub_input"/>
                <p id="register-p">Už máte účet? <span id="register-span">Přihlásit se.</span></p>
            </form></div>
          <button id="register-button">
              Registrace
          </button>
          <button id="login-button">
              Přihlášení
          </button>"
        <?php endif; ?>
    </div>
    <div id="search">
        <div id="form-container">
            <form method="get" action="?c=produc&v=showgames">
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
                <li class="platform"><a href="#"><?php echo $platform['platform_name'] ?></a>
                    <ul class="genre-ul">
                        <?php foreach ($genres as $genre):?>
                        <li class="genre">
                            <a href="?c=produc&v=showgames&platform=<?php echo $platform['platform_name'] ?>&genre=<?php echo $genre['genre_name'] ?>"><?php echo $genre['genre_name'] ?></a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
        <div id="accordion-container">
            <?php foreach($platforms as $platform0): ?>
            <button class="accordion"><?php echo $platform['platform_name'] ?></button>
            <div class="panel">
                <ul class="genre-ul">
                    <li class="genre">
                        <a href="?c=produc&v=showgames&platform=<?phpe echo $platform['platform_name'] ?>&genre=<?phpe echo $genre['genre_name'] ?>"><?php echo $genre['genre_name'] ?></a>
                    </li>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</header>