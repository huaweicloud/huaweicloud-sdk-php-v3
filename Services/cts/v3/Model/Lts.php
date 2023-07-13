<?php

namespace HuaweiCloud\SDK\Cts\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Lts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Lts';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isLtsEnabled  是否启用日志服务检索功能。
    * logGroupName  云审计服务在日志服务中创建的日志组名称。
    * logTopicName  云审计服务在日志服务中创建的日志主题名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isLtsEnabled' => 'bool',
            'logGroupName' => 'string',
            'logTopicName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isLtsEnabled  是否启用日志服务检索功能。
    * logGroupName  云审计服务在日志服务中创建的日志组名称。
    * logTopicName  云审计服务在日志服务中创建的日志主题名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isLtsEnabled' => null,
        'logGroupName' => null,
        'logTopicName' => null
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
    * isLtsEnabled  是否启用日志服务检索功能。
    * logGroupName  云审计服务在日志服务中创建的日志组名称。
    * logTopicName  云审计服务在日志服务中创建的日志主题名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isLtsEnabled' => 'is_lts_enabled',
            'logGroupName' => 'log_group_name',
            'logTopicName' => 'log_topic_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isLtsEnabled  是否启用日志服务检索功能。
    * logGroupName  云审计服务在日志服务中创建的日志组名称。
    * logTopicName  云审计服务在日志服务中创建的日志主题名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'isLtsEnabled' => 'setIsLtsEnabled',
            'logGroupName' => 'setLogGroupName',
            'logTopicName' => 'setLogTopicName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isLtsEnabled  是否启用日志服务检索功能。
    * logGroupName  云审计服务在日志服务中创建的日志组名称。
    * logTopicName  云审计服务在日志服务中创建的日志主题名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'isLtsEnabled' => 'getIsLtsEnabled',
            'logGroupName' => 'getLogGroupName',
            'logTopicName' => 'getLogTopicName'
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
        $this->container['isLtsEnabled'] = isset($data['isLtsEnabled']) ? $data['isLtsEnabled'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logTopicName'] = isset($data['logTopicName']) ? $data['logTopicName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) > 100)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logTopicName']) && (mb_strlen($this->container['logTopicName']) > 100)) {
                $invalidProperties[] = "invalid value for 'logTopicName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['logTopicName']) && (mb_strlen($this->container['logTopicName']) < 0)) {
                $invalidProperties[] = "invalid value for 'logTopicName', the character length must be bigger than or equal to 0.";
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
    * Gets isLtsEnabled
    *  是否启用日志服务检索功能。
    *
    * @return bool|null
    */
    public function getIsLtsEnabled()
    {
        return $this->container['isLtsEnabled'];
    }

    /**
    * Sets isLtsEnabled
    *
    * @param bool|null $isLtsEnabled 是否启用日志服务检索功能。
    *
    * @return $this
    */
    public function setIsLtsEnabled($isLtsEnabled)
    {
        $this->container['isLtsEnabled'] = $isLtsEnabled;
        return $this;
    }

    /**
    * Gets logGroupName
    *  云审计服务在日志服务中创建的日志组名称。
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 云审计服务在日志服务中创建的日志组名称。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logTopicName
    *  云审计服务在日志服务中创建的日志主题名称。
    *
    * @return string|null
    */
    public function getLogTopicName()
    {
        return $this->container['logTopicName'];
    }

    /**
    * Sets logTopicName
    *
    * @param string|null $logTopicName 云审计服务在日志服务中创建的日志主题名称。
    *
    * @return $this
    */
    public function setLogTopicName($logTopicName)
    {
        $this->container['logTopicName'] = $logTopicName;
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

