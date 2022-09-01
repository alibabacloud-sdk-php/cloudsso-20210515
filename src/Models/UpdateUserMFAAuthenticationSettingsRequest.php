<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserMFAAuthenticationSettingsRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userMFAAuthenticationSettings;
    protected $_name = [
        'directoryId'                   => 'DirectoryId',
        'userId'                        => 'UserId',
        'userMFAAuthenticationSettings' => 'UserMFAAuthenticationSettings',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userMFAAuthenticationSettings) {
            $res['UserMFAAuthenticationSettings'] = $this->userMFAAuthenticationSettings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserMFAAuthenticationSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserMFAAuthenticationSettings'])) {
            $model->userMFAAuthenticationSettings = $map['UserMFAAuthenticationSettings'];
        }

        return $model;
    }
}
