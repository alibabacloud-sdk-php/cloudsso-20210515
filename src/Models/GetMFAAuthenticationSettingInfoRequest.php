<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class GetMFAAuthenticationSettingInfoRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $directoryId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMFAAuthenticationSettingInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        return $model;
    }
}
