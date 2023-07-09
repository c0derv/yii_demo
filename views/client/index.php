<?php
/**
 * @var yii\web\View $this
 * @var Client[] $clients
 */

use app\models\Client;

?>
<h1>client/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<?php foreach ($clients as $client) : ?>
    <p>
        <?= $client->name; ?>
    </p>
<?php endforeach; ?>
