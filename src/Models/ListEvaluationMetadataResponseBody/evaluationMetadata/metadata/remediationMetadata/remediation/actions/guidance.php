<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata\remediation\actions;

use AlibabaCloud\Dara\Model;

class guidance extends Model
{
    /**
     * @var string
     */
    public $buttonName;

    /**
     * @var string
     */
    public $buttonRef;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'buttonName' => 'ButtonName',
        'buttonRef' => 'ButtonRef',
        'content' => 'Content',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buttonName) {
            $res['ButtonName'] = $this->buttonName;
        }

        if (null !== $this->buttonRef) {
            $res['ButtonRef'] = $this->buttonRef;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ButtonName'])) {
            $model->buttonName = $map['ButtonName'];
        }

        if (isset($map['ButtonRef'])) {
            $model->buttonRef = $map['ButtonRef'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
