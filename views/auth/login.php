
<style>

.box {
    width: 400px;
    height: 400px;
    margin: 145px auto;
    border-radius: 8px;
    position: relative;
    overflow: hidden;
}

.form {
    display: grid;
}




.box::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,
    #ff0000,#ff2f00);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}

.box::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,
    #45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}

.form {
    position: absolute;
    inset: 2px;
    border-radius: 8px;
    background: #28292d;
    z-index: 10;
}

form {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.inputBox {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.inputBox label {
    font-size: 35px;
    color: white;
    font-weight: bold;
    text-align: center;
}

.inputBox input {
    height: 40px;
    width: 240px;
    margin: auto;
    border-radius: 15px;
}





.inputBox i {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #45f3ff;
    border-radius: 4px;
    transition: 0.5s;
    pointer-events: none;
    z-index: 9; 
}


form input[type="submit"] {
    width: 200px;
    height: 35px;
    align-self: center;
    margin-top: 45px;
    /* height: fit-content;
    margin: 0 auto;
    background: none;
    border: none;
    color: white;
    font-size: 30px; */

}

@keyframes animate
{

    0%
    {
        transform: rotate(0deg);
    }

    100%
    {
        transform: rotate(360deg);
    }

}


</style>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(app()->session->hasFlash('Failed')): ?>
            <p class="errors-message"><?= app()->session->getFlash('Failed');endif; ?></p>
    <div class="box">
        <div class="form">



            <form method="POST">

            <div class="inputBox">
                <label>Username</label>
                <input type="text" name="username" id="">
                <i></i>
            </div>
            <div class="inputBox">
                <label>Password</label>
                <input type="password" name="password" id="">
                <i></i>
            </div>
                <input type="submit" value="Login" name="login">

            </form>
        </div>
    </div>
</body>
</html>