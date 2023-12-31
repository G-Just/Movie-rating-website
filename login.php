<!DOCTYPE html>
<html lang='en' id='login'>
<?php include 'templates/head.php' ?>

<?php include 'templates/navbar.php' ?>

<div id="form-container">
    <form id="form-itself" action="includes_h\login_h.php" method="post">

        <h1 id='form-header'>Login</h1>
        <hr>

        <label class='input-labels' id='email'>Email</label>
        <input class='input-fields' type="text" name='email'>
        
        <label class='input-labels' id='password'>Password</label>
        <input class='input-fields' type="password" name='password'>

        <div id='remember-me-container'>
                <label id="remember-me-label">Keep me logged in</label>
                <input type="checkbox" name="remember" id="remember-me"></input>
            </div>

        <button class='form-submit-buttons' type="submit" name='submit'>Login</button>

        <div class='form-underlabel-container'>
            <label>Don't have an account ? <a href="signup.php">Signup</a></label>
        </div>
        
    </form>
</div>

<?php include 'templates/footer.php' ?>

<?php if (isset($_SESSION['usersID'])){
    header('location: /home.php?error=already_logged_in');
    exit();
}
?>