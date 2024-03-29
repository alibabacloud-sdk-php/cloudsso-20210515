<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListSCIMServerCredentialsResponseBody\SCIMServerCredentials;
use AlibabaCloud\Tea\Model;

class ListSCIMServerCredentialsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example FE4B7037-C315-5DD5-826E-57A87950BCD1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The SCIM credentials.
     *
     * @var SCIMServerCredentials[]
     */
    public $SCIMServerCredentials;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'requestId'             => 'RequestId',
        'SCIMServerCredentials' => 'SCIMServerCredentials',
        'totalCounts'           => 'TotalCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SCIMServerCredentials) {
            $res['SCIMServerCredentials'] = [];
            if (null !== $this->SCIMServerCredentials && \is_array($this->SCIMServerCredentials)) {
                $n = 0;
                foreach ($this->SCIMServerCredentials as $item) {
                    $res['SCIMServerCredentials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSCIMServerCredentialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SCIMServerCredentials'])) {
            if (!empty($map['SCIMServerCredentials'])) {
                $model->SCIMServerCredentials = [];
                $n                            = 0;
                foreach ($map['SCIMServerCredentials'] as $item) {
                    $model->SCIMServerCredentials[$n++] = null !== $item ? SCIMServerCredentials::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
