<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class SetMFAAuthenticationStatusRequest extends Model
{
    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The status of MFA. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * @example Enabled
     *
     * @var string
     */
    public $MFAAuthenticationStatus;
    protected $_name = [
        'directoryId'             => 'DirectoryId',
        'MFAAuthenticationStatus' => 'MFAAuthenticationStatus',
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
        if (null !== $this->MFAAuthenticationStatus) {
            $res['MFAAuthenticationStatus'] = $this->MFAAuthenticationStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetMFAAuthenticationStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['MFAAuthenticationStatus'])) {
            $model->MFAAuthenticationStatus = $map['MFAAuthenticationStatus'];
        }

        return $model;
    }
}
