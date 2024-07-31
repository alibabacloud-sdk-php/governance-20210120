<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselineItemsResponseBody\baselineItems;

use AlibabaCloud\Tea\Model;

class dependsOn extends Model
{
    /**
     * @example ACS-BP_ACCOUNT_FACTORY_VPC
     *
     * @var string
     */
    public $name;

    /**
     * @example AccountFactory
     *
     * @var string
     */
    public $type;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'name'    => 'Name',
        'type'    => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependsOn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
