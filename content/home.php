<style>
#older {
    text-align:right;
}
</style>


<div class="row">
    <div class="span8">
        <?php
        $posts = json_decode(file_get_contents("content/posts.json"),true);

        $target_post;
        if (!isset($_REQUEST["post"]) || $posts["posts"][$_REQUEST["post"]] == null ) {
            $target_post = $posts["latest"];
        } else {
            $target_post = $_REQUEST["post"];
        }

        $target_post = $posts["posts"]["$target_post"];

        $content = file_get_contents($target_post["url"]);
        echo $content;
        ?>
    </div>

    <div class="span4" id="older">
        Older posts:
        <ul>
            <?php
            foreach ($posts["posts"] as $ind => $item) {
                ?><li><a href="?post=<?=$ind?>"><?=$item["title"]?></a></li><?php
            }
            ?>
        </ul>
        <br/>
        Links:
        <ul>
            <?php
            $links = json_decode(file_get_contents("content/links.json"),true);
            foreach ($links as $ind => $item) {
                ?><li><a href="<?=$item["url"]?>"><?=$item["title"]?></a></li><?php
            }
            ?>
        </ul>
    </div>

</div>