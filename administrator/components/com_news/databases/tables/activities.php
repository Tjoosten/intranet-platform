<?php
class ComNewsDatabaseTableActivities extends KDatabaseTableDefault
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'name' => 'news_view_activities',
            'base' => 'news_activities'
        ));

        parent::_initialize($config);
    }
}
