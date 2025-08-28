<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDdmDatabaseRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDdmDatabaseRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联DN数量的乘积 - shard_unit为空，大于关联的DN数量，小于等于关联DN数量*64。
    * dnInstances  逻辑库关联的DN信息,最大个数为256。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'shardMode' => 'string',
            'shardNumber' => 'int',
            'dnInstances' => '\HuaweiCloud\SDK\Ddm\V1\Model\DatabaseDnInstances[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联DN数量的乘积 - shard_unit为空，大于关联的DN数量，小于等于关联DN数量*64。
    * dnInstances  逻辑库关联的DN信息,最大个数为256。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'shardMode' => null,
        'shardNumber' => 'int32',
        'dnInstances' => null
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
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联DN数量的乘积 - shard_unit为空，大于关联的DN数量，小于等于关联DN数量*64。
    * dnInstances  逻辑库关联的DN信息,最大个数为256。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'shardMode' => 'shard_mode',
            'shardNumber' => 'shard_number',
            'dnInstances' => 'dn_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联DN数量的乘积 - shard_unit为空，大于关联的DN数量，小于等于关联DN数量*64。
    * dnInstances  逻辑库关联的DN信息,最大个数为256。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'shardMode' => 'setShardMode',
            'shardNumber' => 'setShardNumber',
            'dnInstances' => 'setDnInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联DN数量的乘积 - shard_unit为空，大于关联的DN数量，小于等于关联DN数量*64。
    * dnInstances  逻辑库关联的DN信息,最大个数为256。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'shardMode' => 'getShardMode',
            'shardNumber' => 'getShardNumber',
            'dnInstances' => 'getDnInstances'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shardMode'] = isset($data['shardMode']) ? $data['shardMode'] : null;
        $this->container['shardNumber'] = isset($data['shardNumber']) ? $data['shardNumber'] : null;
        $this->container['dnInstances'] = isset($data['dnInstances']) ? $data['dnInstances'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['shardMode'] === null) {
            $invalidProperties[] = "'shardMode' can't be null";
        }
        if ($this->container['shardNumber'] === null) {
            $invalidProperties[] = "'shardNumber' can't be null";
        }
        if ($this->container['dnInstances'] === null) {
            $invalidProperties[] = "'dnInstances' can't be null";
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
    * Gets name
    *  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets shardMode
    *  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    *
    * @return string
    */
    public function getShardMode()
    {
        return $this->container['shardMode'];
    }

    /**
    * Sets shardMode
    *
    * @param string $shardMode 逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    *
    * @return $this
    */
    public function setShardMode($shardMode)
    {
        $this->container['shardMode'] = $shardMode;
        return $this;
    }

    /**
    * Gets shardNumber
    *  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联DN数量的乘积 - shard_unit为空，大于关联的DN数量，小于等于关联DN数量*64。
    *
    * @return int
    */
    public function getShardNumber()
    {
        return $this->container['shardNumber'];
    }

    /**
    * Sets shardNumber
    *
    * @param int $shardNumber 同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联DN数量的乘积 - shard_unit为空，大于关联的DN数量，小于等于关联DN数量*64。
    *
    * @return $this
    */
    public function setShardNumber($shardNumber)
    {
        $this->container['shardNumber'] = $shardNumber;
        return $this;
    }

    /**
    * Gets dnInstances
    *  逻辑库关联的DN信息,最大个数为256。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DatabaseDnInstances[]
    */
    public function getDnInstances()
    {
        return $this->container['dnInstances'];
    }

    /**
    * Sets dnInstances
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DatabaseDnInstances[] $dnInstances 逻辑库关联的DN信息,最大个数为256。
    *
    * @return $this
    */
    public function setDnInstances($dnInstances)
    {
        $this->container['dnInstances'] = $dnInstances;
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

