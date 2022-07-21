<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- CONSEGNA -->
    <!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

    <?php
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing ipsum. Odit blanditiis cum enim voluptatibus nulla ipsum assumenda mollitia! Necessitatibus beatae nam cumque. ipsum eveniet adipisci dignissimos expedita aut dolorem distinctio ut.';
        $myStringLength = strlen($text);
        $censoredWord = $_GET['word'];
        $replacedText = str_replace($censoredWord, '***', $text);
        $newStringLength = strlen($replacedText)

    ?>

    <p><?php echo $text; ?></p>
    <div>Il testo ha <?php echo $myStringLength; ?> caratteri</div>
    <p>Testo censurato: <?php echo $replacedText; ?></p>
    <div>Il testo censurato ha: <?php echo $newStringLength; ?> caratteri </div>

</body>
</html>