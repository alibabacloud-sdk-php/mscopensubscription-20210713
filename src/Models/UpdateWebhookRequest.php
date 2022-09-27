<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\Tea\Model;

class UpdateWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $serverUrl;

    /**
     * @var int
     */
    public $webhookId;

    /**
     * @var string
     */
    public $webhookName;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'locale'      => 'Locale',
        'serverUrl'   => 'ServerUrl',
        'webhookId'   => 'WebhookId',
        'webhookName' => 'WebhookName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
        }
        if (null !== $this->webhookId) {
            $res['WebhookId'] = $this->webhookId;
        }
        if (null !== $this->webhookName) {
            $res['WebhookName'] = $this->webhookName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
        }
        if (isset($map['WebhookId'])) {
            $model->webhookId = $map['WebhookId'];
        }
        if (isset($map['WebhookName'])) {
            $model->webhookName = $map['WebhookName'];
        }

        return $model;
    }
}
