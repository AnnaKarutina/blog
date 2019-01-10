<?foreach($posts as $post):?>
    <div class="span8">
        <h1><a href="<? echo BASE_URL?>posts/view/<?echo $post['post_id']?>"><?echo $post['post_subject']; ?></a></h1>
        <p><? echo $post['post_text']?></p>
        <div>
            <span class="badge badge-success">Posted <?php echo $post['post_created']; ?></span><div class="pull-right"><span class="label label-primary">alice</span> <span class="label label-primary">story</span> <span class="label label-primary">blog</span> <span class="label label-primary">personal</span></div>
        </div>
        <hr>
    </div>
<?endforeach?>