<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryUpgradeTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryUpgradeTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  待重试的集群ID。
    * actionId  待重试的任务ID。
    * retryMode  当该参数不为空时，终止该任务的影响。当前仅支持abort。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'actionId' => 'string',
            'retryMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  待重试的集群ID。
    * actionId  待重试的任务ID。
    * retryMode  当该参数不为空时，终止该任务的影响。当前仅支持abort。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'actionId' => null,
        'retryMode' => null
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
    * clusterId  待重试的集群ID。
    * actionId  待重试的任务ID。
    * retryMode  当该参数不为空时，终止该任务的影响。当前仅支持abort。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'actionId' => 'action_id',
            'retryMode' => 'retry_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  待重试的集群ID。
    * actionId  待重试的任务ID。
    * retryMode  当该参数不为空时，终止该任务的影响。当前仅支持abort。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'actionId' => 'setActionId',
            'retryMode' => 'setRetryMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  待重试的集群ID。
    * actionId  待重试的任务ID。
    * retryMode  当该参数不为空时，终止该任务的影响。当前仅支持abort。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'actionId' => 'getActionId',
            'retryMode' => 'getRetryMode'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['retryMode'] = isset($data['retryMode']) ? $data['retryMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['actionId'] === null) {
            $invalidProperties[] = "'actionId' can't be null";
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
    * Gets clusterId
    *  待重试的集群ID。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 待重试的集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets actionId
    *  待重试的任务ID。
    *
    * @return string
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string $actionId 待重试的任务ID。
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets retryMode
    *  当该参数不为空时，终止该任务的影响。当前仅支持abort。
    *
    * @return string|null
    */
    public function getRetryMode()
    {
        return $this->container['retryMode'];
    }

    /**
    * Sets retryMode
    *
    * @param string|null $retryMode 当该参数不为空时，终止该任务的影响。当前仅支持abort。
    *
    * @return $this
    */
    public function setRetryMode($retryMode)
    {
        $this->container['retryMode'] = $retryMode;
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

