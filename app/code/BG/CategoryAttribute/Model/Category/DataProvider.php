<?php
namespace BG\CategoryAttribute\Model\Category;

class DataProvider extends \Magento\Catalog\Model\Category\DataProvider
{
    protected function getFieldsMap()
    {
        $fields = parent::getFieldsMap();
        $fields['content'][] = 'icon_image'; // custom image field
        return $fields;
    }
}
