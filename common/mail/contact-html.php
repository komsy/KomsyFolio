<?php

/* @var $channel \common\models\User

/* @var $user \common\models\User
*/

?>

<p> Hello <?= $owner?></p>
<p> Client <?= $user ?> has sent you an email </p>
<p> With Subject: <?=$subject ?></p>
<p> Message: <?=$message ?></p>