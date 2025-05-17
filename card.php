<?php
foreach($_POST as $p)
{
    if(empty($p))
    {
        header("Location: formulario.php");
        exit;
    }
}
$nome = $_POST["nome"];
$elemento = $_POST["elemento"] ;
$img = $_POST["img"];
$avatar = $_POST["avatar"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen flex items-center justify-center bg-gray-900">

    <div class="card h-4/5 w-2/6 bg-cover rounded-xl shadow-lg overflow-hidden">
        <img class="w-full overflow-hidden" src="<?=$img?>" alt="<?=$nome?>">
        <div class="flex justify-center items-end h-1/2 w-full gap-3">
            <b><h2 class="text-2xl element-text">Nome: <?=$nome?></h2></b>
            <b><h2 class="text-2xl element-text">Elemento: <?=$elemento?></h2></b>
            <b><h2 class="text-2xl element-text">Avatar: <?= !empty($avatar) ? "Sim" : "Não" ?></h2></b>
        </div>
    </div>
    <script>
        const card = document.querySelector(".card");
        const textos = document.querySelectorAll(".element-text");
        const elemento = "<?= $elemento ?>";
        let bg = "none";
        let cor = "white";
        switch (elemento) {
            case "ar":
                bg = "url('https://pm1.aminoapps.com/6570/798681fc03889b2976401301bc1b6de893e58b53_hq.jpg')";
                cor = "black";
                break;
            case "água":
                bg = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4lai-tebuQCRnhnHeIahvj9aeWBE6LQbYOg9oRbLxvPAGrQ-aUWGc2km1VyO1DzVQLJc&usqp=CAU')";
                cor = "white";
                break;
            case "terra":
                bg = "url('https://pbs.twimg.com/media/FkoFNplWIAAa4tX.jpg')";
                cor = "green-700";
                break;
            case "fogo":
                bg = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6f4jikqH9_YXrLZu0opqfRiicmfRGh831jw&s')";
                cor = "white";
                break;
            default:
                bg = "none";
                cor = "white";
        }
        card.style.backgroundImage = bg;
        card.style.backgroundPosition = "center";
        textos.forEach(el => {
            el.style.color = cor;
        });
    </script>
</body>
</html>
