<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class ListAccessConfigurationProvisioningsRequest extends Model
{
    /**
     * @description The ID of the access configuration. The ID can be used to filter accounts.
     *
     * @example ac-00ccule7tadaijxc****
     *
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token to return for the next page. If this is your first time to call this operation, you do not need to specify `NextToken`.
     *
     * When you call this operation for the first time, if the total number of entries to return exceeds the value of `MaxResults`, the entries are truncated. Only the entries that match the value of `MaxResults` are returned, and the excess entries are not returned. In this case, the value of the response parameter `IsTruncated` is `true`, and `NextToken` is returned. In the next call, you can use the value of `NextToken` and maintain the settings of the other request parameters to query the excess entries. You can repeat the call until the value of `IsTruncated` becomes `false`. This way, all entries are returned.
     * @example K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The status of the access configuration. The value can be used to filter accounts. Valid values:
     *
     *   Provisioned: The access configuration is provisioned.
     *   ReprovisionRequired: The access configuration needs to be re-provisioned.
     *   DeprovisionFailed: The access configuration failed to be provisioned.
     *
     * @example Provisioned
     *
     * @var string
     */
    public $provisioningStatus;

    /**
     * @description The ID of the task object. The ID can be used to filter accounts.
     *
     * >  You can use the ID to filter accounts only if you specify both `TargetId` and `TargetType`.
     * @example 114240524784****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the task object. The type can be used to filter accounts.
     *
     * >  You can use the type to filter accounts only if you specify both `TargetId` and `TargetType`.
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'directoryId'           => 'DirectoryId',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'provisioningStatus'    => 'ProvisioningStatus',
        'targetId'              => 'TargetId',
        'targetType'            => 'TargetType',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->provisioningStatus) {
            $res['ProvisioningStatus'] = $this->provisioningStatus;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessConfigurationProvisioningsRequest
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ProvisioningStatus'])) {
            $model->provisioningStatus = $map['ProvisioningStatus'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
