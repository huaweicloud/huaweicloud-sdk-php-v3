<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsLogDump implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsLogDump';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logDump  是否开启LTS日志转储功能，true表示开启，false表示关闭。
    * logGroupId  日志组ID。
    * logGroupName  日志组名称。
    * logStreamId  日志流ID。
    * logStreamName  日志流名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logDump' => 'bool',
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'logStreamId' => 'string',
            'logStreamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logDump  是否开启LTS日志转储功能，true表示开启，false表示关闭。
    * logGroupId  日志组ID。
    * logGroupName  日志组名称。
    * logStreamId  日志流ID。
    * logStreamName  日志流名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logDump' => null,
        'logGroupId' => null,
        'logGroupName' => null,
        'logStreamId' => null,
        'logStreamName' => null
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
    * logDump  是否开启LTS日志转储功能，true表示开启，false表示关闭。
    * logGroupId  日志组ID。
    * logGroupName  日志组名称。
    * logStreamId  日志流ID。
    * logStreamName  日志流名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logDump' => 'log_dump',
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logDump  是否开启LTS日志转储功能，true表示开启，false表示关闭。
    * logGroupId  日志组ID。
    * logGroupName  日志组名称。
    * logStreamId  日志流ID。
    * logStreamName  日志流名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'logDump' => 'setLogDump',
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logDump  是否开启LTS日志转储功能，true表示开启，false表示关闭。
    * logGroupId  日志组ID。
    * logGroupName  日志组名称。
    * logStreamId  日志流ID。
    * logStreamName  日志流名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'logDump' => 'getLogDump',
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName'
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
        $this->container['logDump'] = isset($data['logDump']) ? $data['logDump'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
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
    * Gets logDump
    *  是否开启LTS日志转储功能，true表示开启，false表示关闭。
    *
    * @return bool|null
    */
    public function getLogDump()
    {
        return $this->container['logDump'];
    }

    /**
    * Sets logDump
    *
    * @param bool|null $logDump 是否开启LTS日志转储功能，true表示开启，false表示关闭。
    *
    * @return $this
    */
    public function setLogDump($logDump)
    {
        $this->container['logDump'] = $logDump;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组ID。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组名称。
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
    * @param string|null $logGroupName 日志组名称。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID。
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流ID。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称。
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称。
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
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

