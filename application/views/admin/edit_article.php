<div class="row"><h1>Редактирование записи</h1>
    <button class="btn btn-success" onclick="history.go(-1);">Back
    </button>    <?php echo form_open("admin/articles/saveArticle"); ?>
    <div class="form-group"><label for="article_title">Заголовок</label> <input type="text" class="form-control"
                                                                                id="article_title" name="article_title"
                                                                                value="<?= $assigned_data['article_data']->title; ?>">
    </div>
    <div class="form-group"><label for="article_text">Text</label> <textarea name="article_text" id="" cols="30"
                                                                             rows="10"><?= $assigned_data['article_data']->text; ?></textarea>
    </div>
    <input type="text" class="hide" id="id" name="id"
           value="<?= $assigned_data['article_data']->id; ?>">        <?php $data = array('type' => 'submit', 'content' => 'Send');
    echo form_button($data); ?>    <?php echo form_close(); ?>
    <button class="btn btn-success" onclick="history.go(-1);">Back</button>
</div>