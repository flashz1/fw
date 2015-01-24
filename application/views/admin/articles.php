<?php $this->load->view('admin/navigation'); ?><?php if ($this->session->flashdata('msg')) { ?>
    <div class="alert alert-success">        <a href="#" class="close"
                                                data-dismiss="alert">&times;</a>        <?php echo $this->session->flashdata('msg'); ?>
    </div><?php } ?>
<div class="row">
    <div class="list-group">        <?php foreach ($assigned_data['articles'] as $article): ?>
            <div class="list-group-item"><h4 class="list-group-item-heading"><?= $article['title'] ?></h4>

                <p class="list-group-item-text"><?= $article['text'] ?></p>                <a
                    href="/admin/articles/edit/<?= $article['id'] ?>">Edit</a> <a
                    href="/admin/articles/delete/<?= $article['id'] ?>">Delete</a></div>        <?php endforeach; ?>
    </div>
</div>