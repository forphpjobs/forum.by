<?php include_once "view/layout/header.php";
?>

<?php foreach ($news as $item):?>
    <div class="document">
        <div>&nbsp;</div>
        <div class="dochead"><span class="dhead"><?php echo $item['name']?></span></div>
        <div><span class="post">posted by admin | september 3, 2009</span></div>
        <div class="dcontent">
            <?php echo $item['opisanie']?>
            <p><a href="/blog/view/<?php echo $item['id']?>">Далее</a></p>
        </div>
    </div>
    <div class="rtboxbg">&nbsp;</div>
    <div class="gap"></div>
<?php endforeach ?>

<?php
include_once "components/Pagination.php";
Pagination::AddPagination($countnews,3);
?>

<?php  include_once "view/layout/footer.php";?>
