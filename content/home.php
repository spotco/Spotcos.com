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
						<li><a href="http://robeats.net">RoBeats [MMO Rhythm Game]</a></li>
						<li><a href="https://spotco.itch.io/speedypups">SpeedyPups</a></li>
            <li><a href="http://spotco.itch.io/my-best-magical-friend">My Best (Magical) Friend</a></li>
            <li><a href="http://spotco.itch.io/monday-night-monsters">Monday Night Monsters</a></li>
            <li><a href="https://spotco.itch.io/ricochet-heroes">Ricochet Heroes</a></li>
            <li><a href="https://spotco.itch.io/dream-knights-the-little-hero">Dreaming Knight: The Little Hero</a></li>
            <li><a href="https://spotco.itch.io/maniac-pengmaku">Maniac Pengmaku!</a></li>
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
    </div>

</div>
