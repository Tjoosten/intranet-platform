<?php
class ComCalendarDatabaseTableAttachments extends KDatabaseTableDefault
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'name' => 'attachments_attachments',
            'base' => 'attachments_attachments'
        ));

        parent::_initialize($config);
    }
}
