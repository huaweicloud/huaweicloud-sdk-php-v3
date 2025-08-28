<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDatabaseDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDatabaseDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联rds数量的乘积 - shard_unit为空，大于关联的RDS数量，小于等于关联rds数量*64。
    * shardUnit  单个RDS上的逻辑库分片数。非必选  - 非拆分逻辑库，固定为1。 - 拆分逻辑库，大于等于1，小于等于64。
    * usedRds  逻辑库关联的RDS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'shardMode' => 'string',
            'shardNumber' => 'int',
            'shardUnit' => 'int',
            'usedRds' => '\HuaweiCloud\SDK\Ddm\V1\Model\DatabaseInstabcesParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联rds数量的乘积 - shard_unit为空，大于关联的RDS数量，小于等于关联rds数量*64。
    * shardUnit  单个RDS上的逻辑库分片数。非必选  - 非拆分逻辑库，固定为1。 - 拆分逻辑库，大于等于1，小于等于64。
    * usedRds  逻辑库关联的RDS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'shardMode' => null,
        'shardNumber' => null,
        'shardUnit' => null,
        'usedRds' => null
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
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联rds数量的乘积 - shard_unit为空，大于关联的RDS数量，小于等于关联rds数量*64。
    * shardUnit  单个RDS上的逻辑库分片数。非必选  - 非拆分逻辑库，固定为1。 - 拆分逻辑库，大于等于1，小于等于64。
    * usedRds  逻辑库关联的RDS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'shardMode' => 'shard_mode',
            'shardNumber' => 'shard_number',
            'shardUnit' => 'shard_unit',
            'usedRds' => 'used_rds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联rds数量的乘积 - shard_unit为空，大于关联的RDS数量，小于等于关联rds数量*64。
    * shardUnit  单个RDS上的逻辑库分片数。非必选  - 非拆分逻辑库，固定为1。 - 拆分逻辑库，大于等于1，小于等于64。
    * usedRds  逻辑库关联的RDS。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'shardMode' => 'setShardMode',
            'shardNumber' => 'setShardNumber',
            'shardUnit' => 'setShardUnit',
            'usedRds' => 'setUsedRds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  逻辑库名称，需要满足以下条件：  - 长度为2-48个字符。 - 必须以小写字母开头。 - 可以包含小写字母、数字、下划线，不能包含大写字母和其它特殊字符。 - 禁用关键字：  \"information_schema\"、\"mysql\"、\"performance_schema\"、\"sys\"。
    * shardMode  逻辑库的拆分模式。 - cluster表示逻辑库是拆分模式。 - single表示逻辑库是非拆分模式。
    * shardNumber  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联rds数量的乘积 - shard_unit为空，大于关联的RDS数量，小于等于关联rds数量*64。
    * shardUnit  单个RDS上的逻辑库分片数。非必选  - 非拆分逻辑库，固定为1。 - 拆分逻辑库，大于等于1，小于等于64。
    * usedRds  逻辑库关联的RDS。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'shardMode' => 'getShardMode',
            'shardNumber' => 'getShardNumber',
            'shardUnit' => 'getShardUnit',
            'usedRds' => 'getUsedRds'
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
    const SHARD_MODE_CLUSTER = 'cluster';
    const SHARD_MODE_SINGLE = 'single';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getShardModeAllowableValues()
    {
        return [
            self::SHARD_MODE_CLUSTER,
            self::SHARD_MODE_SINGLE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shardMode'] = isset($data['shardMode']) ? $data['shardMode'] : null;
        $this->container['shardNumber'] = isset($data['shardNumber']) ? $data['shardNumber'] : null;
        $this->container['shardUnit'] = isset($data['shardUnit']) ? $data['shardUnit'] : null;
        $this->container['usedRds'] = isset($data['usedRds']) ? $data['usedRds'] : null;
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
            if ((mb_strlen($this->container['name']) > 48)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 48.";
            }
            if ((mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/^[a-zA-Z][a-zA-Z0-9_]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z][a-zA-Z0-9_]*$/.";
            }
        if ($this->container['shardMode'] === null) {
            $invalidProperties[] = "'shardMode' can't be null";
        }
            $allowedValues = $this->getShardModeAllowableValues();
                if (!is_null($this->container['shardMode']) && !in_array($this->container['shardMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'shardMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['shardNumber'] === null) {
            $invalidProperties[] = "'shardNumber' can't be null";
        }
            if (!is_null($this->container['shardUnit']) && ($this->container['shardUnit'] > 64)) {
                $invalidProperties[] = "invalid value for 'shardUnit', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['shardUnit']) && ($this->container['shardUnit'] < 1)) {
                $invalidProperties[] = "invalid value for 'shardUnit', must be bigger than or equal to 1.";
            }
        if ($this->container['usedRds'] === null) {
            $invalidProperties[] = "'usedRds' can't be null";
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
    *  同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联rds数量的乘积 - shard_unit为空，大于关联的RDS数量，小于等于关联rds数量*64。
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
    * @param int $shardNumber 同一种工作模式下逻辑库分片的数量。 - shard_unit不为空， shard_unit与关联rds数量的乘积 - shard_unit为空，大于关联的RDS数量，小于等于关联rds数量*64。
    *
    * @return $this
    */
    public function setShardNumber($shardNumber)
    {
        $this->container['shardNumber'] = $shardNumber;
        return $this;
    }

    /**
    * Gets shardUnit
    *  单个RDS上的逻辑库分片数。非必选  - 非拆分逻辑库，固定为1。 - 拆分逻辑库，大于等于1，小于等于64。
    *
    * @return int|null
    */
    public function getShardUnit()
    {
        return $this->container['shardUnit'];
    }

    /**
    * Sets shardUnit
    *
    * @param int|null $shardUnit 单个RDS上的逻辑库分片数。非必选  - 非拆分逻辑库，固定为1。 - 拆分逻辑库，大于等于1，小于等于64。
    *
    * @return $this
    */
    public function setShardUnit($shardUnit)
    {
        $this->container['shardUnit'] = $shardUnit;
        return $this;
    }

    /**
    * Gets usedRds
    *  逻辑库关联的RDS。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DatabaseInstabcesParam[]
    */
    public function getUsedRds()
    {
        return $this->container['usedRds'];
    }

    /**
    * Sets usedRds
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DatabaseInstabcesParam[] $usedRds 逻辑库关联的RDS。
    *
    * @return $this
    */
    public function setUsedRds($usedRds)
    {
        $this->container['usedRds'] = $usedRds;
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

