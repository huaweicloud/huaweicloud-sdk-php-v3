<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConsumerGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConsumerGroupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  日志组ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID。 缺省值：None 最小长度：36 最大长度：36
    * streamId  日志流ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID 缺省值：None 最小长度：36 最大长度：36
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'streamId' => 'string',
            'body' => '\HuaweiCloud\SDK\Lts\V2\Model\ConsumerGroupInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  日志组ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID。 缺省值：None 最小长度：36 最大长度：36
    * streamId  日志流ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID 缺省值：None 最小长度：36 最大长度：36
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'streamId' => null,
        'body' => null
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
    * groupId  日志组ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID。 缺省值：None 最小长度：36 最大长度：36
    * streamId  日志流ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID 缺省值：None 最小长度：36 最大长度：36
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'streamId' => 'stream_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  日志组ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID。 缺省值：None 最小长度：36 最大长度：36
    * streamId  日志流ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID 缺省值：None 最小长度：36 最大长度：36
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'streamId' => 'setStreamId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  日志组ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID。 缺省值：None 最小长度：36 最大长度：36
    * streamId  日志流ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID 缺省值：None 最小长度：36 最大长度：36
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'streamId' => 'getStreamId',
            'body' => 'getBody'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['streamId'] = isset($data['streamId']) ? $data['streamId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['streamId'] === null) {
            $invalidProperties[] = "'streamId' can't be null";
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
    * Gets groupId
    *  日志组ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID。 缺省值：None 最小长度：36 最大长度：36
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 日志组ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID。 缺省值：None 最小长度：36 最大长度：36
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets streamId
    *  日志流ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID 缺省值：None 最小长度：36 最大长度：36
    *
    * @return string
    */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
    * Sets streamId
    *
    * @param string $streamId 日志流ID，获取方式请参见：获取项目ID，获取账号ID，日志组ID、日志流ID 缺省值：None 最小长度：36 最大长度：36
    *
    * @return $this
    */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\ConsumerGroupInfo|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\ConsumerGroupInfo|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

