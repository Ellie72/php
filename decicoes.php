<?php
$idade=17;
$numeroPessoas = 2;
echo"Voce so pode entrar se for maior do que mais 18 anos ou";
echo "a partir de 16 anos acompanhado". PHP_EOL;
if ($idade >= 18) {
    echo "Voce tem $idade anos.".PHP_EOL;
    echo 'Pode entrar';
} else if ($idade>=16 and $numeroPessoas>1){
    echo "Você tem $idade anos, está acompanhado, então pode entrar";
} else {
    echo "Você so tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo"Adeus!";
