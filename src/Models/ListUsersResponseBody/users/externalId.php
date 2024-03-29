<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class externalId extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $issuer;
    protected $_name = [
        'id'     => 'Id',
        'issuer' => 'Issuer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return externalId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        return $model;
    }
}
