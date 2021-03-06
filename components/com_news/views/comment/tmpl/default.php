<a name="comment-<?= $comment->id ?>"></a>
<div id="comment-<?= $comment->id ?>" class="comment-default">
    <div class="comment-avatar" style="float:left">  	 
    	 <img src="<?= $this->getService('com://admin/users.model.users')->id($comment->created_by)->getItem()->avatar ?>" />
    </div>
    	
    <div style="float:left;width:430px">       
        <? if($comment->created_by == $user->id || $agent) : ?>
           <form action="<?= @route('view=comment&id='.$comment->id) ?>" method="post" class="-koowa-form">
               <input type="hidden" name="action" value="save" />
               <?
                    $controller = @service('com://admin/editors.controller.editor');
                    $controller->getView()->setEditorSettings($editor_settings);
                    echo $controller->name('text')->id('comment'.$comment->id.'-'.uniqid())->data($comment->text)->toggle(true)->codemirror(false)->display();
                ?>
            </form>
        <? else : ?>
            <?= $comment->text ?>
        <? endif ?>
        <?= @template('com://site/news.view.attachments.list', array('row' => $comment->id, 'table' => 'comments_comments')); ?>
        <div class="comment-footer">
            <?= @text('Posted') ?> <?= @helper('date.humanize', array('date' => $comment->created_on)) ?> <?= @text('by') ?> <strong><?= @escape($comment->created_by_name) ?></strong>
            <? if ($agent) : ?>
            	 <form style="float: right;" action="<?= @route('view=comment&id='.$comment->id) ?>" method="post" class="-koowa-form">
            	    <input type="hidden" name="action" value="delete" />
            	    <input class="btn btn-mini" type="submit" value="<?= @text('Delete') ?>" />
            	 </form>
            <? endif ?>
        </div>
    </div>
</div>