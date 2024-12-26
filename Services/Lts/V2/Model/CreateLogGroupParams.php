<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLogGroupParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLogGroupParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupName  需要创建的日志组名称。
    * ttlInDays  日志存储时间（天），取值范围：1-30。
    * tags  标签字段信息
    * logGroupNameAlias  日志组别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupName' => 'string',
            'ttlInDays' => 'int',
            'tags' => '\HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]',
            'logGroupNameAlias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupName  需要创建的日志组名称。
    * ttlInDays  日志存储时间（天），取值范围：1-30。
    * tags  标签字段信息
    * logGroupNameAlias  日志组别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupName' => null,
        'ttlInDays' => 'int32',
        'tags' => null,
        'logGroupNameAlias' => null
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
    * logGroupName  需要创建的日志组名称。
    * ttlInDays  日志存储时间（天），取值范围：1-30。
    * tags  标签字段信息
    * logGroupNameAlias  日志组别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupName' => 'log_group_name',
            'ttlInDays' => 'ttl_in_days',
            'tags' => 'tags',
            'logGroupNameAlias' => 'log_group_name_alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupName  需要创建的日志组名称。
    * ttlInDays  日志存储时间（天），取值范围：1-30。
    * tags  标签字段信息
    * logGroupNameAlias  日志组别名
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupName' => 'setLogGroupName',
            'ttlInDays' => 'setTtlInDays',
            'tags' => 'setTags',
            'logGroupNameAlias' => 'setLogGroupNameAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupName  需要创建的日志组名称。
    * ttlInDays  日志存储时间（天），取值范围：1-30。
    * tags  标签字段信息
    * logGroupNameAlias  日志组别名
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupName' => 'getLogGroupName',
            'ttlInDays' => 'getTtlInDays',
            'tags' => 'getTags',
            'logGroupNameAlias' => 'getLogGroupNameAlias'
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
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['ttlInDays'] = isset($data['ttlInDays']) ? $data['ttlInDays'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['logGroupNameAlias'] = isset($data['logGroupNameAlias']) ? $data['logGroupNameAlias'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logGroupName'] === null) {
            $invalidProperties[] = "'logGroupName' can't be null";
        }
            if ((mb_strlen($this->container['logGroupName']) > 100)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['logGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ttlInDays'] === null) {
            $invalidProperties[] = "'ttlInDays' can't be null";
        }
            if (($this->container['ttlInDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be smaller than or equal to 30.";
            }
            if (($this->container['ttlInDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be bigger than or equal to 1.";
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
    * Gets logGroupName
    *  需要创建的日志组名称。
    *
    * @return string
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string $logGroupName 需要创建的日志组名称。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets ttlInDays
    *  日志存储时间（天），取值范围：1-30。
    *
    * @return int
    */
    public function getTtlInDays()
    {
        return $this->container['ttlInDays'];
    }

    /**
    * Sets ttlInDays
    *
    * @param int $ttlInDays 日志存储时间（天），取值范围：1-30。
    *
    * @return $this
    */
    public function setTtlInDays($ttlInDays)
    {
        $this->container['ttlInDays'] = $ttlInDays;
        return $this;
    }

    /**
    * Gets tags
    *  标签字段信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]|null $tags 标签字段信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets logGroupNameAlias
    *  日志组别名
    *
    * @return string|null
    */
    public function getLogGroupNameAlias()
    {
        return $this->container['logGroupNameAlias'];
    }

    /**
    * Sets logGroupNameAlias
    *
    * @param string|null $logGroupNameAlias 日志组别名
    *
    * @return $this
    */
    public function setLogGroupNameAlias($logGroupNameAlias)
    {
        $this->container['logGroupNameAlias'] = $logGroupNameAlias;
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

