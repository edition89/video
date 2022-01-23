<body>
<video class="center" id="video" width="960" height="540" controls="controls" poster="../img/poster.png"></video>
<div class="wrapper">
    <div class="heading">
        <div class="btn slow">-25%</div>
        <h3>Дерево видео</h3>
        <div class="btn fast">+25%</div>
    </div>
    <div class="file-browser">
        <?php
        require('./functions/showTree.php');
		$fd = fopen(dirname(__DIR__) . "/path.txt", 'r');
        showTree(fgets($fd));
		fclose($fd);
        ?>
    </div>
</div>
</body>