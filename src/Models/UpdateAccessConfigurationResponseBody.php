<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateAccessConfigurationResponseBody\accessConfiguration;
use AlibabaCloud\Tea\Model;

class UpdateAccessConfigurationResponseBody extends Model
{
    /**
     * @description The information about the access configuration.
     *
     * @var accessConfiguration
     */
    public $accessConfiguration;

    /**
     * @description The ID of the request.
     *
     * @example 9B13E4EE-3853-5852-9165-597C32AD8FB7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessConfiguration' => 'AccessConfiguration',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfiguration) {
            $res['AccessConfiguration'] = null !== $this->accessConfiguration ? $this->accessConfiguration->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccessConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfiguration'])) {
            $model->accessConfiguration = accessConfiguration::fromMap($map['AccessConfiguration']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
