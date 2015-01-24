<div class="row"><h1>Создание страницы</h1>    <?php echo validation_errors(); ?>
    <button class="btn btn-success" onclick="history.go(-1);">Back
    </button>    <?php echo form_open('admin/pages/addPage'); ?>
    <div class="form-group"><label for="selectbasic">Присвоить контент</label> <select id="article_id" name="article_id"
                                                                                       class="form-control">                <?php foreach ($assigned_data['list_of_articles'] as $article): ?>
                <option
                    value="<?= $article['id']; ?>"><?= $article['title']; ?></option>                <?php endforeach; ?>
        </select></div>
    <div class="form-group"><label for="page_title">Заголовок</label> <input type="text" class="form-control"
                                                                             id="page_title" name="page_title" value="">
    </div>
    <div class="form-group"><label class="control-label" for="page_keywords">meta Keywords</label> <input type="text"
                                                                                                          class="form-control"
                                                                                                          id="page_keywords"
                                                                                                          name="page_keywords"
                                                                                                          value="">
    </div>
    <div class="form-group"><label for="page_description">meta Description</label> <input type="text"
                                                                                          class="form-control"
                                                                                          id="page_description"
                                                                                          name="page_description"
                                                                                          value=""></div>
    <div class="form-group"><label for="page_label">Лэйбл для меню</label> <input type="text" class="form-control"
                                                                                  id="page_label" name="page_label"
                                                                                  value=""></div>
    <div class="form-group"><label for="page_permalink">Permalink</label> <input type="text" class="form-control"
                                                                                 id="page_permalink"
                                                                                 name="page_permalink" value=""></div>
    <button type="submit" class="btn btn-success">Submit</button>    <?php echo form_close(); ?>
    <button class="btn btn-success" onclick="history.go(-1);">Back</button>
</div>