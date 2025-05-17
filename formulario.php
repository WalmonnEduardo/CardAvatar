<?php
$labels=["Nome","Elemento","Imagem","Avatar"];
$types=["text","text","text","checkbox"];
$names=["nome","elemento","img","avatar"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CardForm</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen flex items-center justify-center bg-gray-900">

  <div class="form-container h-4/5 w-2/6">
    <div class="form-bg"></div>

    <form action="./card.php" method="post" class="h-full w-full flex flex-col items-center justify-center gap-4 p-8 bg-black/60 rounded-[40px] backdrop-blur-sm">
      <?php for($i = 0 ;$i < count($names);$i++):?>
        <label for="<?= $names[$i] ?>" class="text-white font-bold">
          <?=$labels[$i]?>
        </label>
        <?php if($names[$i] != "elemento"):?>
          <input type="<?=$types[$i]?>" name="<?= $names[$i] ?>" class="w-4/5 px-2 py-2 rounded-lg bg-white">
        <?php else:?>
          <select name="elemento" id="elemento" class="w-4/5 px-4 py-2 rounded-lg bg-white/100 border-2 border-white focus:outline-none focus:border-blue-500">
            <option value="" class="text-center bg-gray-100 text-gray-800">Escolha</option>
            <option value="ar" class="text-center bg-blue-200 text-blue-900">Ar</option>
            <option value="água" class="text-center bg-blue-500 text-blue-100">Água</option>
            <option value="terra" class="text-center bg-stone-700 text-stone-100">Terra</option>
            <option value="fogo" class="text-center bg-orange-500 text-orange-100">Fogo</option>
          </select>
        <?php endif?>
      <?php endfor; ?>

      <button type="submit" class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
        Gerar Card
      </button>
    </form>
  </div>

  <script>
    let body = document.querySelector("body");
    let selec = document.querySelector("select");

    selec.addEventListener("change", () => {
      let bg = "none";
      switch(selec.value) {
        case "ar":
          bg = "url('https://pm1.aminoapps.com/6570/798681fc03889b2976401301bc1b6de893e58b53_hq.jpg')";
          break;
        case "água":
          bg = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4lai-tebuQCRnhnHeIahvj9aeWBE6LQbYOg9oRbLxvPAGrQ-aUWGc2km1VyO1DzVQLJc&usqp=CAU')";
          break;
        case "terra":
          bg = "url('https://pbs.twimg.com/media/FkoFNplWIAAa4tX.jpg')";
          break;
        case "fogo":
          bg = "url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6f4jikqH9_YXrLZu0opqfRiicmfRGh831jw&s')";
          break;
        default:
          bg = "url('https://s2-techtudo.glbimg.com/UbybdGzvEXZZ5N7JAKuIjno-Nko=/0x0:1200x675/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2024/M/g/BwseAZR62bVPcEurhkmw/23121307435010.webp')";
      }

      body.style.backgroundImage = bg;;
    });
  </script>

</body>
</html>
