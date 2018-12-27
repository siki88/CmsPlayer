
    <form action="" method="post" class="form-signin">
        <h2 class="form-signin-heading">Přihlášení</h2>
        <input type="text" class="form-control" name="username" placeholder="Uživatelské jméno" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Heslo" required=""/>
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Uložit přihlášení
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Přihlásit</button>
    </form>

    <?php
    /*
    if(isset($_POST['username']) && isset($_POST['password'])){

    var_dump($_POST['username']);
    var_dump($_POST['password']);

        $config->loginController($_POST['username'],$_POST['password']);

    }
    */


    echo('<pre>');
    //var_dump($_SERVER);
    $dirname = dirname($_SERVER['SCRIPT_NAME']); //    /cms
    $basename = basename($_SERVER['SCRIPT_NAME']); //  index.php
    $request_uri = str_replace([$dirname,$basename],null,$_SERVER['REQUEST_URI']); //    /
    //var_dump($_SERVER);
    var_dump($dirname);
    var_dump($basename);
    var_dump($request_uri);

    $test = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    var_dump($test);


    var_dump($_SERVER['REQUEST_URI']);
    echo('</pre>');




    ?>

