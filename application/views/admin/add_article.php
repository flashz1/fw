<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
<div class="row"><h1>Создание записи</h1>    <?php echo validation_errors(); ?>
    <button class="btn btn-success" onclick="history.go(-1);">Back
    </button>    <?php echo form_open('admin/articles/addArticle'); ?>
    <div class="form-group"><label for="article_title">Заголовок</label> <input type="text" class="form-control"
                                                                                id="article_title" name="article_title"
                                                                                value=""></div>
    <div class="form-group"><label for="article_text">Text</label> <textarea name="article_text" id="" cols="30"
                                                                             rows="10"></textarea></div>
    <button type="submit" class="btn btn-success">Submit</button>    <?php echo form_close(); ?>
    <button class="btn btn-success" onclick="history.go(-1);">Back</button>
</div>