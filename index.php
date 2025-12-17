<?php

// --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
$nome = "Amanda";

$bio = "Estudante, 16 anos";
$imagem = "https://www.estadao.com.br/resizer/v2/KJDE6VL4F5AVJJJBLH5XYGVWD4.png?quality=80&auth=9298eb03c61f9b7995df9a8c47b7eed8ca9e118c532d97b464527bc3286740b8&width=1200&height=1200&smart=true"; // Pegue o link da SUA foto.

$links = [
"Instagram" => "https://instagram.com/SEU_USER",
"WhatsApp" => "https://wa.me/SEU_NUMERO",
"Meu Jogo Favorito" => "https://www.google.com/search?q=jogos+google&oq=jogos+google&gs_lcrp=EgZjaHJvbWUqDQgAEAAYgwEYsQMYgAQyDQgAEAAYgwEYsQMYgAQyBwgBEAAYgAQyBwgCEAAYgAQyBwgDEAAYgAQyBwgEEAAYgAQyBwgFEAAYgAQyBwgGEAAYgAQyBwgHEAAYgAQyBwgIEAAYgAQyBwgJEAAYgATSAQg5MDg4ajBqN6gCALACAA&sourceid=chrome&ie=UTF-8",
"Música do Momento" => "https://www.youtube.com/watch?v=Fn9adh4HWUU&list=RDFn9adh4HWUU&start_radio=1"
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.
0">
    <title>BioLink de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avat
ar">
        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links">

            <?php
                foreach ($links as $texto => $url) {
                     $classe_extra = "";
                    
                    if($url == "https://www.youtube.com/") {
                        $classe_extra = "destaque";
                    }

                // O PHP constrói o botão HTML
                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                    $texto
                    </a>";
                }
            ?> 

        </div>
    </div>
</body>

</html>