<?php $this->load->view('admin/navigation'); ?><?php if ($this->session->flashdata('msg')) { ?>
    <div class="alert alert-success">        <a href="#" class="close"
                                                data-dismiss="alert">&times;</a>        <?php echo $this->session->flashdata('msg'); ?>
    </div><?php } ?>
<div class="row">
    <div class="list-group">        <?php foreach ($assigned_data['pages'] as $page): ?>
            <div class="list-group-item"><h4 class="list-group-item-heading"><?= $page['label'] ?></h4>

                <p class="list-group-item-text"><?= $page['title'] ?></p>                <a
                    href="/admin/pages/edit/<?= $page['id'] ?>">Edit</a> <a
                    href="/admin/pages/delete/<?= $page['id'] ?>">Delete</a></div>        <?php endforeach; ?>    </div>
</div>