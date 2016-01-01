<style>
#older {
    text-align:right;
}
</style>


<div class="row">
    <div class="span8" style="width:60%">
        <?php
        $posts = json_decode(file_get_contents("content/posts.json"),true);

        $target_post;
        if (!isset($_REQUEST["post"]) || $posts["posts"][$_REQUEST["post"]] == null ) {
            $target_post = $posts["latest"];
        } else {
            $target_post = $_REQUEST["post"];
        }

        $target_post = $posts["posts"]["$target_post"];

        if (isset($target_post["php"])) {
            include $target_post["url"];
        } else {
            $content = file_get_contents($target_post["url"]);
            echo $content;
        }
        ?>
    </div>

    <style>
    [class*="span"] {
        margin-left:0!important;
    }
    </style>
    <div class="span4" style="width:40%; margin-left:0;" id="older">
        Play Some Games!
        <ul>
            <li><a href="http://spotco.itch.io/my-best-magical-friend">My Best (Magical) Friend</a></li>
            <li><a href="http://spotco.itch.io/monday-night-monsters">Monday Night Monsters</a></li>
            <li><a href="http://www.spotcos.com/ricochet_hero">Ricochet Heroes</a></li>
            <li><a href="http://www.spotcos.com/littlehero">Dreaming Knight: The Little Hero</a></li>
            <li><a href="http://www.spotcos.com/penguin">Maniac Pengmaku!</a></li>
            <li><a href="http://spotco.itch.io/window-cleaner">Window Cleaner - A Tale of Two Gangs</a></li>
            <li><a href="http://spotco.itch.io/moemoerush">MoeMoeRush!!</a></li>
           <li> <a href="http://spotco.itch.io/jump-goober-jump">Jump, Goober, Jump!</a></li>
        </ul>
        <br/>
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
