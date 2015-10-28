<?php
/***
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\PageCache\Model\App;

class PageCachePlugin
{
    /**
     * Attach FPC tag to all saved entries to enable cache type management
     *
     * @param \Magento\Framework\App\PageCache\Cache $subject
     * @param $data
     * @param $identifier
     * @param array $tags
     * @param null $lifeTime
     * @return array
     */
    public function beforeSave(
        \Magento\Framework\App\PageCache\Cache $subject,
        $data,
        $identifier,
        $tags = [],
        $lifeTime = null
    ) {
        $tags[] = \Magento\PageCache\Model\Cache\Type::CACHE_TAG;
        return [$data, $identifier, $tags, $lifeTime];
    }
}
