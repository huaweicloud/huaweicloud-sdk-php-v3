<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggregatedSourceStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggregatedSourceStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastErrorCode  源帐号最近一次聚合失败时返回的错误码。
    * lastErrorMessage  源帐号最近一次聚合失败时返回的错误消息。
    * lastUpdateStatus  最近一次更新的状态类型。
    * lastUpdateTime  最近一次更新的时间。
    * sourceId  源帐号ID或组织。
    * sourceName  账号名。
    * sourceType  源帐号类型（ACCOUNT | ORGANIZATION）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastErrorCode' => 'string',
            'lastErrorMessage' => 'string',
            'lastUpdateStatus' => 'string',
            'lastUpdateTime' => 'string',
            'sourceId' => 'string',
            'sourceName' => 'string',
            'sourceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastErrorCode  源帐号最近一次聚合失败时返回的错误码。
    * lastErrorMessage  源帐号最近一次聚合失败时返回的错误消息。
    * lastUpdateStatus  最近一次更新的状态类型。
    * lastUpdateTime  最近一次更新的时间。
    * sourceId  源帐号ID或组织。
    * sourceName  账号名。
    * sourceType  源帐号类型（ACCOUNT | ORGANIZATION）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastErrorCode' => null,
        'lastErrorMessage' => null,
        'lastUpdateStatus' => null,
        'lastUpdateTime' => null,
        'sourceId' => null,
        'sourceName' => null,
        'sourceType' => null
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
    * lastErrorCode  源帐号最近一次聚合失败时返回的错误码。
    * lastErrorMessage  源帐号最近一次聚合失败时返回的错误消息。
    * lastUpdateStatus  最近一次更新的状态类型。
    * lastUpdateTime  最近一次更新的时间。
    * sourceId  源帐号ID或组织。
    * sourceName  账号名。
    * sourceType  源帐号类型（ACCOUNT | ORGANIZATION）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastErrorCode' => 'last_error_code',
            'lastErrorMessage' => 'last_error_message',
            'lastUpdateStatus' => 'last_update_status',
            'lastUpdateTime' => 'last_update_time',
            'sourceId' => 'source_id',
            'sourceName' => 'source_name',
            'sourceType' => 'source_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastErrorCode  源帐号最近一次聚合失败时返回的错误码。
    * lastErrorMessage  源帐号最近一次聚合失败时返回的错误消息。
    * lastUpdateStatus  最近一次更新的状态类型。
    * lastUpdateTime  最近一次更新的时间。
    * sourceId  源帐号ID或组织。
    * sourceName  账号名。
    * sourceType  源帐号类型（ACCOUNT | ORGANIZATION）。
    *
    * @var string[]
    */
    protected static $setters = [
            'lastErrorCode' => 'setLastErrorCode',
            'lastErrorMessage' => 'setLastErrorMessage',
            'lastUpdateStatus' => 'setLastUpdateStatus',
            'lastUpdateTime' => 'setLastUpdateTime',
            'sourceId' => 'setSourceId',
            'sourceName' => 'setSourceName',
            'sourceType' => 'setSourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastErrorCode  源帐号最近一次聚合失败时返回的错误码。
    * lastErrorMessage  源帐号最近一次聚合失败时返回的错误消息。
    * lastUpdateStatus  最近一次更新的状态类型。
    * lastUpdateTime  最近一次更新的时间。
    * sourceId  源帐号ID或组织。
    * sourceName  账号名。
    * sourceType  源帐号类型（ACCOUNT | ORGANIZATION）。
    *
    * @var string[]
    */
    protected static $getters = [
            'lastErrorCode' => 'getLastErrorCode',
            'lastErrorMessage' => 'getLastErrorMessage',
            'lastUpdateStatus' => 'getLastUpdateStatus',
            'lastUpdateTime' => 'getLastUpdateTime',
            'sourceId' => 'getSourceId',
            'sourceName' => 'getSourceName',
            'sourceType' => 'getSourceType'
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
        $this->container['lastErrorCode'] = isset($data['lastErrorCode']) ? $data['lastErrorCode'] : null;
        $this->container['lastErrorMessage'] = isset($data['lastErrorMessage']) ? $data['lastErrorMessage'] : null;
        $this->container['lastUpdateStatus'] = isset($data['lastUpdateStatus']) ? $data['lastUpdateStatus'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets lastErrorCode
    *  源帐号最近一次聚合失败时返回的错误码。
    *
    * @return string|null
    */
    public function getLastErrorCode()
    {
        return $this->container['lastErrorCode'];
    }

    /**
    * Sets lastErrorCode
    *
    * @param string|null $lastErrorCode 源帐号最近一次聚合失败时返回的错误码。
    *
    * @return $this
    */
    public function setLastErrorCode($lastErrorCode)
    {
        $this->container['lastErrorCode'] = $lastErrorCode;
        return $this;
    }

    /**
    * Gets lastErrorMessage
    *  源帐号最近一次聚合失败时返回的错误消息。
    *
    * @return string|null
    */
    public function getLastErrorMessage()
    {
        return $this->container['lastErrorMessage'];
    }

    /**
    * Sets lastErrorMessage
    *
    * @param string|null $lastErrorMessage 源帐号最近一次聚合失败时返回的错误消息。
    *
    * @return $this
    */
    public function setLastErrorMessage($lastErrorMessage)
    {
        $this->container['lastErrorMessage'] = $lastErrorMessage;
        return $this;
    }

    /**
    * Gets lastUpdateStatus
    *  最近一次更新的状态类型。
    *
    * @return string|null
    */
    public function getLastUpdateStatus()
    {
        return $this->container['lastUpdateStatus'];
    }

    /**
    * Sets lastUpdateStatus
    *
    * @param string|null $lastUpdateStatus 最近一次更新的状态类型。
    *
    * @return $this
    */
    public function setLastUpdateStatus($lastUpdateStatus)
    {
        $this->container['lastUpdateStatus'] = $lastUpdateStatus;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最近一次更新的时间。
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 最近一次更新的时间。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets sourceId
    *  源帐号ID或组织。
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 源帐号ID或组织。
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceName
    *  账号名。
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName 账号名。
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets sourceType
    *  源帐号类型（ACCOUNT | ORGANIZATION）。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 源帐号类型（ACCOUNT | ORGANIZATION）。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
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

