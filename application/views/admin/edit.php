<div class="row"><h1>Редактирование страницы</h1>
    <button class="btn btn-success" onclick="history.go(-1);">Back
    </button>    <?php echo form_open("admin/pages/savePage"); ?>
    <div class="form-group"><label for="selectbasic">Контент</label> <select id="article_id" name="article_id"
                                                                             class="form-control">                <?php foreach ($assigned_data['articles'] as $article): ?>
                <option value="<?= $article['id']; ?>"
                        selected="<?php echo ($article['id'] == $assigned_data['page_data']->article_id) ? 'selected' : ''; ?>"><?= $article['title']; ?></option>                <?php endforeach; ?>
        </select></div>
    <div class="form-group"><label for="page_title">Заголовок</label> <input type="text" class="form-control"
                                                                             id="page_title" name="page_title"
                                                                             value="<?= $assigned_data['page_data']->title; ?>">
    </div>
    <div class="form-group"><label class="control-label" for="page_keywords">meta Keywords</label> <input type="text"
                                                                                                          class="form-control"
                                                                                                          id="page_keywords"
                                                                                                          name="page_keywords"
                                                                                                          value="<?= $assigned_data['page_data']->keywords; ?>">
    </div>
    <div class="form-group"><label for="page_description">meta Description</label> <input type="text"
                                                                                          class="form-control"
                                                                                          id="page_description"
                                                                                          name="page_description"
                                                                                          value="<?= $assigned_data['page_data']->description; ?>">
    </div>
    <div class="form-group"><label for="page_label">Лэйбл для меню</label> <input type="text" class="form-control"
                                                                                  id="page_label" name="page_label"
                                                                                  value="<?= $assigned_data['page_data']->label; ?>">
    </div>
    <div class="form-group"><label for="page_permalink">Лэйбл для меню</label> <input type="text" class="form-control"
                                                                                      id="page_permalink"
                                                                                      name="page_permalink"
                                                                                      value="<?= $assigned_data['page_data']->permalink; ?>">
    </div>
    <input type="text" class="hide" id="id" name="id"
           value="<?= $assigned_data['page_data']->id; ?>">        <?php $data = array('type' => 'submit', 'content' => 'Send');
    echo form_button($data); ?>    <?php echo form_close(); ?>
    <button class="btn btn-success" onclick="history.go(-1);">Back</button>
</div>