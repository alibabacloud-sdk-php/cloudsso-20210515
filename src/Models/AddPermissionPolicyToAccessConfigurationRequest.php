<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class AddPermissionPolicyToAccessConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $inlinePolicyDocument;

    /**
     * @var string
     */
    public $permissionPolicyName;

    /**
     * @var string
     */
    public $permissionPolicyType;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'directoryId'           => 'DirectoryId',
        'inlinePolicyDocument'  => 'InlinePolicyDocument',
        'permissionPolicyName'  => 'PermissionPolicyName',
        'permissionPolicyType'  => 'PermissionPolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->inlinePolicyDocument) {
            $res['InlinePolicyDocument'] = $this->inlinePolicyDocument;
        }
        if (null !== $this->permissionPolicyName) {
            $res['PermissionPolicyName'] = $this->permissionPolicyName;
        }
        if (null !== $this->permissionPolicyType) {
            $res['PermissionPolicyType'] = $this->permissionPolicyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPermissionPolicyToAccessConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['InlinePolicyDocument'])) {
            $model->inlinePolicyDocument = $map['InlinePolicyDocument'];
        }
        if (isset($map['PermissionPolicyName'])) {
            $model->permissionPolicyName = $map['PermissionPolicyName'];
        }
        if (isset($map['PermissionPolicyType'])) {
            $model->permissionPolicyType = $map['PermissionPolicyType'];
        }

        return $model;
    }
}
