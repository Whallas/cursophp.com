<?php
/* COOKIE
    * nome
    * valor
    * tempo de validade
*/
setcookie('user', 'João da Silva', time() + 3600);
setcookie('email', 'rodrigooliveira@gmail.com', time() + 3600);
setcookie('ultima_pesquisa', 'tenis adidas', time() + 3600);

print_r($_COOKIE);

// para remover basta pôr um valor negativo no time
// setcookie('email', 'rodrigooliveira@gmail.com', time() - 3600);