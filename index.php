<?php
// 🔐 INICIAR SESIÓN
session_start();

// 🧹 LIMPIAR SESIÓN SI QUIERES
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CODIFIN | Bienvenida</title>

<style>

/* TODO TU CSS EXACTO (NO SE TOCA) */

*{
box-sizing:border-box;
margin:0;
padding:0;
font-family:Arial, Helvetica, sans-serif;
}

body{
min-height:100vh;
margin: 0;
background:#f5f5f5;
}

.container{
display:flex;
width:100%;
background:white;
min-height:100dvh;
overflow:hidden;
}

.image-panel{
flex:0 0 auto;
display:flex;
align-items:center;
justify-content:center;
background:#ffffff;
}

.image-panel img{
width:auto;
height:120vh;
object-fit:contain;
display:block;
}

.content{
flex:1 1 50%;
padding:clamp(20px, 5vw, 60px);
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
text-align:center;
}

.top-section{
display:none;
}

.title{
font-size:clamp(20px, 3vw, 30px);
font-weight:bold;
color:#1a8338;
margin-bottom:15px;
}

.subtitle{
font-size:18px;
color:#555;
margin-bottom:40px;
}

button{
width:260px;
height:48px;
background:#2aa54a;
border:none;
border-radius:6px;
color:white;
font-size:16px;
font-weight:600;
cursor:pointer;
transition:all 0.25s ease;
display:block;
margin:20px auto 0;
}

button:hover{
background:#22853d;
transform:translateY(-1px);
box-shadow:0 4px 12px rgba(0,0,0,0.15);
}

@media (max-width:480px){

.container{
flex-direction:column;
}

.image-panel{
display:none;
}

.top-section{
display:flex;
align-items:center;
gap:15px;
margin-bottom:20px;
width:100%;
}

.top-section img{
width:clamp(120px, 35vw, 180px);
}

.content{
padding:20px;
}

}
</style>

</head>

<body>

<div class="container">

    <div class="image-panel">
        <img src="Spejo.png">
    </div>

    <div class="content">

        <div class="top-section">
            <img src="Spejo.png">
            <div class="title">¡Bienvenido!</div>
        </div>

        <div class="bottom-section">
            <div class="title">¡Bienvenido!</div>

            <div class="subtitle">
                Realiza tu registro
            </div>

            <!-- 🔥 BOTÓN QUE ENVÍA A PHP -->
            <form method="POST">
                <button type="submit" name="entrar">
                    Ingresa y Participa
                </button>
            </form>

        </div>

    </div>

</div>

<?php
// 🚀 PROCESAR BOTÓN
if(isset($_POST['entrar'])){
    header("Location: https://banfin-production.up.railway.app");
    exit;
}
?>

</body>
</html>