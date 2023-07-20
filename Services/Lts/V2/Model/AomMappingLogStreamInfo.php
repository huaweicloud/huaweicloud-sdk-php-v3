<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AomMappingLogStreamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AomMappingLogStreamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetLogGroupId  日志组id
    * targetLogGroupName  目标日志组名称。
    * targetLogStreamId  日志流id
    * targetLogStreamName  目标日志组名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetLogGroupId' => 'string',
            'targetLogGroupName' => 'string',
            'targetLogStreamId' => 'string',
            'targetLogStreamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetLogGroupId  日志组id
    * targetLogGroupName  目标日志组名称。
    * targetLogStreamId  日志流id
    * targetLogStreamName  目标日志组名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetLogGroupId' => null,
        'targetLogGroupName' => null,
        'targetLogStreamId' => null,
        'targetLogStreamName' => null
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
    * targetLogGroupId  日志组id
    * targetLogGroupName  目标日志组名称。
    * targetLogStreamId  日志流id
    * targetLogStreamName  目标日志组名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetLogGroupId' => 'target_log_group_id',
            'targetLogGroupName' => 'target_log_group_name',
            'targetLogStreamId' => 'target_log_stream_id',
            'targetLogStreamName' => 'target_log_stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetLogGroupId  日志组id
    * targetLogGroupName  目标日志组名称。
    * targetLogStreamId  日志流id
    * targetLogStreamName  目标日志组名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetLogGroupId' => 'setTargetLogGroupId',
            'targetLogGroupName' => 'setTargetLogGroupName',
            'targetLogStreamId' => 'setTargetLogStreamId',
            'targetLogStreamName' => 'setTargetLogStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetLogGroupId  日志组id
    * targetLogGroupName  目标日志组名称。
    * targetLogStreamId  日志流id
    * targetLogStreamName  目标日志组名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetLogGroupId' => 'getTargetLogGroupId',
            'targetLogGroupName' => 'getTargetLogGroupName',
            'targetLogStreamId' => 'getTargetLogStreamId',
            'targetLogStreamName' => 'getTargetLogStreamName'
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
        $this->container['targetLogGroupId'] = isset($data['targetLogGroupId']) ? $data['targetLogGroupId'] : null;
        $this->container['targetLogGroupName'] = isset($data['targetLogGroupName']) ? $data['targetLogGroupName'] : null;
        $this->container['targetLogStreamId'] = isset($data['targetLogStreamId']) ? $data['targetLogStreamId'] : null;
        $this->container['targetLogStreamName'] = isset($data['targetLogStreamName']) ? $data['targetLogStreamName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetLogGroupId'] === null) {
            $invalidProperties[] = "'targetLogGroupId' can't be null";
        }
            if ((mb_strlen($this->container['targetLogGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'targetLogGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['targetLogGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'targetLogGroupId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['targetLogGroupName'] === null) {
            $invalidProperties[] = "'targetLogGroupName' can't be null";
        }
            if ((mb_strlen($this->container['targetLogGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetLogGroupName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['targetLogGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetLogGroupName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['targetLogStreamId'] === null) {
            $invalidProperties[] = "'targetLogStreamId' can't be null";
        }
            if ((mb_strlen($this->container['targetLogStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'targetLogStreamId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['targetLogStreamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'targetLogStreamId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['targetLogStreamName'] === null) {
            $invalidProperties[] = "'targetLogStreamName' can't be null";
        }
            if ((mb_strlen($this->container['targetLogStreamName']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetLogStreamName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['targetLogStreamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetLogStreamName', the character length must be bigger than or equal to 1.";
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
    * Gets targetLogGroupId
    *  日志组id
    *
    * @return string
    */
    public function getTargetLogGroupId()
    {
        return $this->container['targetLogGroupId'];
    }

    /**
    * Sets targetLogGroupId
    *
    * @param string $targetLogGroupId 日志组id
    *
    * @return $this
    */
    public function setTargetLogGroupId($targetLogGroupId)
    {
        $this->container['targetLogGroupId'] = $targetLogGroupId;
        return $this;
    }

    /**
    * Gets targetLogGroupName
    *  目标日志组名称。
    *
    * @return string
    */
    public function getTargetLogGroupName()
    {
        return $this->container['targetLogGroupName'];
    }

    /**
    * Sets targetLogGroupName
    *
    * @param string $targetLogGroupName 目标日志组名称。
    *
    * @return $this
    */
    public function setTargetLogGroupName($targetLogGroupName)
    {
        $this->container['targetLogGroupName'] = $targetLogGroupName;
        return $this;
    }

    /**
    * Gets targetLogStreamId
    *  日志流id
    *
    * @return string
    */
    public function getTargetLogStreamId()
    {
        return $this->container['targetLogStreamId'];
    }

    /**
    * Sets targetLogStreamId
    *
    * @param string $targetLogStreamId 日志流id
    *
    * @return $this
    */
    public function setTargetLogStreamId($targetLogStreamId)
    {
        $this->container['targetLogStreamId'] = $targetLogStreamId;
        return $this;
    }

    /**
    * Gets targetLogStreamName
    *  目标日志组名称。
    *
    * @return string
    */
    public function getTargetLogStreamName()
    {
        return $this->container['targetLogStreamName'];
    }

    /**
    * Sets targetLogStreamName
    *
    * @param string $targetLogStreamName 目标日志组名称。
    *
    * @return $this
    */
    public function setTargetLogStreamName($targetLogStreamName)
    {
        $this->container['targetLogStreamName'] = $targetLogStreamName;
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

