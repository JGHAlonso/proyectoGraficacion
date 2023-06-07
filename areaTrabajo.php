<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        #caja {
            background-color: red;
            width: 100px;
            height: 100px;
            
        }
        #container{
            background-color: white;
            width: 400px;
            height: 400px;
            border: solid;
        }
        canvas {
  border: 1px dashed;
  font-size: 2em;
  width: 300px;
  height: 300px;
}
    </style>
<script src="https://cdn.jsdelivr.net/npm/p5@1.6.0/lib/p5.js"></script>
    <div >
    <?php session_start();
     ?>
        <h1>Bienvenido <?php echo $_SESSION['username'] ?></h1>
    </div>
    
    <canvas draggable="true" id="canvas" ></canvas>

   
    <div draggable="true"id="caja" ></div>
    <input type="text" id="ancho">
    <button id="btn">Hola</button>
    <script >


   
const caja=document.querySelector('#caja');
var canvas = document.querySelector("canvas");
var ctx = canvas.getContext("2d");
var cw = canvas.width = 300,
  cx = cw / 2;
var ch = canvas.height= 300,
  cy = ch / 2;


canvas.addEventListener("dragenter", dragenter, false);
canvas.addEventListener("dragover", dragover, false);
canvas.addEventListener("drop", drop, false);

caja.addEventListener("dragstart", e=>{
    console.log("start")
});
caja.addEventListener("dragover",e=>{
    console.log("dragen")
});

function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}

function drop(e) {
  e.stopPropagation();
  e.preventDefault();
  canvas.appendChild(caja);
}

    </script>
    
</body>
</html>