<?php

/**
 * JobVacancyAttachmentTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobVacancyAttachmentTable extends PluginJobVacancyAttachmentTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object JobVacancyAttachmentTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JobVacancyAttachment');
    }
}