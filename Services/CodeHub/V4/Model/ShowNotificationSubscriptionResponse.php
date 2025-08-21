<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowNotificationSubscriptionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowNotificationSubscriptionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库ID。
    * enabled  **参数解释：** 开启通知。
    * configSource  **参数解释：** 配资源。
    * webhookConfig  webhookConfig
    * waringRepoUsageRate  **参数解释：** 仓库使用量告警阀值（百分比）。
    * subscriptEvents  **参数解释：** 通知事件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'enabled' => 'bool',
            'configSource' => 'string',
            'webhookConfig' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepoWebHookSubscriptionDto',
            'waringRepoUsageRate' => 'int',
            'subscriptEvents' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RepoSubscriptionEventDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库ID。
    * enabled  **参数解释：** 开启通知。
    * configSource  **参数解释：** 配资源。
    * webhookConfig  webhookConfig
    * waringRepoUsageRate  **参数解释：** 仓库使用量告警阀值（百分比）。
    * subscriptEvents  **参数解释：** 通知事件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => 'int32',
        'enabled' => null,
        'configSource' => null,
        'webhookConfig' => null,
        'waringRepoUsageRate' => null,
        'subscriptEvents' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * repositoryId  **参数解释：** 仓库ID。
    * enabled  **参数解释：** 开启通知。
    * configSource  **参数解释：** 配资源。
    * webhookConfig  webhookConfig
    * waringRepoUsageRate  **参数解释：** 仓库使用量告警阀值（百分比）。
    * subscriptEvents  **参数解释：** 通知事件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'enabled' => 'enabled',
            'configSource' => 'config_source',
            'webhookConfig' => 'webhook_config',
            'waringRepoUsageRate' => 'waring_repo_usage_rate',
            'subscriptEvents' => 'subscript_events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库ID。
    * enabled  **参数解释：** 开启通知。
    * configSource  **参数解释：** 配资源。
    * webhookConfig  webhookConfig
    * waringRepoUsageRate  **参数解释：** 仓库使用量告警阀值（百分比）。
    * subscriptEvents  **参数解释：** 通知事件。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'enabled' => 'setEnabled',
            'configSource' => 'setConfigSource',
            'webhookConfig' => 'setWebhookConfig',
            'waringRepoUsageRate' => 'setWaringRepoUsageRate',
            'subscriptEvents' => 'setSubscriptEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库ID。
    * enabled  **参数解释：** 开启通知。
    * configSource  **参数解释：** 配资源。
    * webhookConfig  webhookConfig
    * waringRepoUsageRate  **参数解释：** 仓库使用量告警阀值（百分比）。
    * subscriptEvents  **参数解释：** 通知事件。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'enabled' => 'getEnabled',
            'configSource' => 'getConfigSource',
            'webhookConfig' => 'getWebhookConfig',
            'waringRepoUsageRate' => 'getWaringRepoUsageRate',
            'subscriptEvents' => 'getSubscriptEvents'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const CONFIG_SOURCE_REPO = 'repo';
    const CONFIG_SOURCE_PRODUCT = 'product';
    const WARING_REPO_USAGE_RATE_60 = 60;
    const WARING_REPO_USAGE_RATE_80 = 80;
    const WARING_REPO_USAGE_RATE_90 = 90;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigSourceAllowableValues()
    {
        return [
            self::CONFIG_SOURCE_REPO,
            self::CONFIG_SOURCE_PRODUCT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getWaringRepoUsageRateAllowableValues()
    {
        return [
            self::WARING_REPO_USAGE_RATE_60,
            self::WARING_REPO_USAGE_RATE_80,
            self::WARING_REPO_USAGE_RATE_90,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['configSource'] = isset($data['configSource']) ? $data['configSource'] : null;
        $this->container['webhookConfig'] = isset($data['webhookConfig']) ? $data['webhookConfig'] : null;
        $this->container['waringRepoUsageRate'] = isset($data['waringRepoUsageRate']) ? $data['waringRepoUsageRate'] : null;
        $this->container['subscriptEvents'] = isset($data['subscriptEvents']) ? $data['subscriptEvents'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getConfigSourceAllowableValues();
                if (!is_null($this->container['configSource']) && !in_array($this->container['configSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getWaringRepoUsageRateAllowableValues();
                if (!is_null($this->container['waringRepoUsageRate']) && !in_array($this->container['waringRepoUsageRate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'waringRepoUsageRate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库ID。
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId **参数解释：** 仓库ID。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释：** 开启通知。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释：** 开启通知。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets configSource
    *  **参数解释：** 配资源。
    *
    * @return string|null
    */
    public function getConfigSource()
    {
        return $this->container['configSource'];
    }

    /**
    * Sets configSource
    *
    * @param string|null $configSource **参数解释：** 配资源。
    *
    * @return $this
    */
    public function setConfigSource($configSource)
    {
        $this->container['configSource'] = $configSource;
        return $this;
    }

    /**
    * Gets webhookConfig
    *  webhookConfig
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepoWebHookSubscriptionDto|null
    */
    public function getWebhookConfig()
    {
        return $this->container['webhookConfig'];
    }

    /**
    * Sets webhookConfig
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepoWebHookSubscriptionDto|null $webhookConfig webhookConfig
    *
    * @return $this
    */
    public function setWebhookConfig($webhookConfig)
    {
        $this->container['webhookConfig'] = $webhookConfig;
        return $this;
    }

    /**
    * Gets waringRepoUsageRate
    *  **参数解释：** 仓库使用量告警阀值（百分比）。
    *
    * @return int|null
    */
    public function getWaringRepoUsageRate()
    {
        return $this->container['waringRepoUsageRate'];
    }

    /**
    * Sets waringRepoUsageRate
    *
    * @param int|null $waringRepoUsageRate **参数解释：** 仓库使用量告警阀值（百分比）。
    *
    * @return $this
    */
    public function setWaringRepoUsageRate($waringRepoUsageRate)
    {
        $this->container['waringRepoUsageRate'] = $waringRepoUsageRate;
        return $this;
    }

    /**
    * Gets subscriptEvents
    *  **参数解释：** 通知事件。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RepoSubscriptionEventDto[]|null
    */
    public function getSubscriptEvents()
    {
        return $this->container['subscriptEvents'];
    }

    /**
    * Sets subscriptEvents
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RepoSubscriptionEventDto[]|null $subscriptEvents **参数解释：** 通知事件。
    *
    * @return $this
    */
    public function setSubscriptEvents($subscriptEvents)
    {
        $this->container['subscriptEvents'] = $subscriptEvents;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

