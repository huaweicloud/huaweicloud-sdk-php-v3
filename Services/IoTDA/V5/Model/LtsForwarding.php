<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupId  **参数说明**：用于接收日志的日志组Id，通过调用LTS服务创建日志组接口获取(https://support.huaweicloud.com/api-lts/lts_api_0012.html)。
    * logStreamId  **参数说明**：用于接收日志的日志流Id，通过调用LTS服务创建日志流接口获取(https://support.huaweicloud.com/api-lts/lts_api_0016.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupId' => 'string',
            'logStreamId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupId  **参数说明**：用于接收日志的日志组Id，通过调用LTS服务创建日志组接口获取(https://support.huaweicloud.com/api-lts/lts_api_0012.html)。
    * logStreamId  **参数说明**：用于接收日志的日志流Id，通过调用LTS服务创建日志流接口获取(https://support.huaweicloud.com/api-lts/lts_api_0016.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupId' => null,
        'logStreamId' => null
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
    * logGroupId  **参数说明**：用于接收日志的日志组Id，通过调用LTS服务创建日志组接口获取(https://support.huaweicloud.com/api-lts/lts_api_0012.html)。
    * logStreamId  **参数说明**：用于接收日志的日志流Id，通过调用LTS服务创建日志流接口获取(https://support.huaweicloud.com/api-lts/lts_api_0016.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupId  **参数说明**：用于接收日志的日志组Id，通过调用LTS服务创建日志组接口获取(https://support.huaweicloud.com/api-lts/lts_api_0012.html)。
    * logStreamId  **参数说明**：用于接收日志的日志流Id，通过调用LTS服务创建日志流接口获取(https://support.huaweicloud.com/api-lts/lts_api_0016.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupId  **参数说明**：用于接收日志的日志组Id，通过调用LTS服务创建日志组接口获取(https://support.huaweicloud.com/api-lts/lts_api_0012.html)。
    * logStreamId  **参数说明**：用于接收日志的日志流Id，通过调用LTS服务创建日志流接口获取(https://support.huaweicloud.com/api-lts/lts_api_0016.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId'
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
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
            if ((mb_strlen($this->container['logGroupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['logGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
            if ((mb_strlen($this->container['logStreamId']) > 64)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['logStreamId']) < 0)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 0.";
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
    * Gets logGroupId
    *  **参数说明**：用于接收日志的日志组Id，通过调用LTS服务创建日志组接口获取(https://support.huaweicloud.com/api-lts/lts_api_0012.html)。
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId **参数说明**：用于接收日志的日志组Id，通过调用LTS服务创建日志组接口获取(https://support.huaweicloud.com/api-lts/lts_api_0012.html)。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamId
    *  **参数说明**：用于接收日志的日志流Id，通过调用LTS服务创建日志流接口获取(https://support.huaweicloud.com/api-lts/lts_api_0016.html)。
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId **参数说明**：用于接收日志的日志流Id，通过调用LTS服务创建日志流接口获取(https://support.huaweicloud.com/api-lts/lts_api_0016.html)。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
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

