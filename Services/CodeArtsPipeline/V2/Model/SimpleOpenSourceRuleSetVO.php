<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SimpleOpenSourceRuleSetVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SimpleOpenSourceRuleSetVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  开源治理策略ID
    * name  开源治理策略名称
    * level  开源治理策略级别（tenant-租户级，project-项目级）
    * isValid  是否可用
    * version  版本
    * operator  操作人
    * isPublic  是否系统策略
    * isLegacy  是否老版
    * operateTime  操作时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'level' => 'string',
            'isValid' => 'bool',
            'version' => 'string',
            'operator' => 'string',
            'isPublic' => 'bool',
            'isLegacy' => 'bool',
            'operateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  开源治理策略ID
    * name  开源治理策略名称
    * level  开源治理策略级别（tenant-租户级，project-项目级）
    * isValid  是否可用
    * version  版本
    * operator  操作人
    * isPublic  是否系统策略
    * isLegacy  是否老版
    * operateTime  操作时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'level' => null,
        'isValid' => null,
        'version' => null,
        'operator' => null,
        'isPublic' => null,
        'isLegacy' => null,
        'operateTime' => 'int64'
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
    * id  开源治理策略ID
    * name  开源治理策略名称
    * level  开源治理策略级别（tenant-租户级，project-项目级）
    * isValid  是否可用
    * version  版本
    * operator  操作人
    * isPublic  是否系统策略
    * isLegacy  是否老版
    * operateTime  操作时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'level' => 'level',
            'isValid' => 'is_valid',
            'version' => 'version',
            'operator' => 'operator',
            'isPublic' => 'is_public',
            'isLegacy' => 'is_legacy',
            'operateTime' => 'operate_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  开源治理策略ID
    * name  开源治理策略名称
    * level  开源治理策略级别（tenant-租户级，project-项目级）
    * isValid  是否可用
    * version  版本
    * operator  操作人
    * isPublic  是否系统策略
    * isLegacy  是否老版
    * operateTime  操作时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'level' => 'setLevel',
            'isValid' => 'setIsValid',
            'version' => 'setVersion',
            'operator' => 'setOperator',
            'isPublic' => 'setIsPublic',
            'isLegacy' => 'setIsLegacy',
            'operateTime' => 'setOperateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  开源治理策略ID
    * name  开源治理策略名称
    * level  开源治理策略级别（tenant-租户级，project-项目级）
    * isValid  是否可用
    * version  版本
    * operator  操作人
    * isPublic  是否系统策略
    * isLegacy  是否老版
    * operateTime  操作时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'level' => 'getLevel',
            'isValid' => 'getIsValid',
            'version' => 'getVersion',
            'operator' => 'getOperator',
            'isPublic' => 'getIsPublic',
            'isLegacy' => 'getIsLegacy',
            'operateTime' => 'getOperateTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['isLegacy'] = isset($data['isLegacy']) ? $data['isLegacy'] : null;
        $this->container['operateTime'] = isset($data['operateTime']) ? $data['operateTime'] : null;
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
    * Gets id
    *  开源治理策略ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 开源治理策略ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  开源治理策略名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 开源治理策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets level
    *  开源治理策略级别（tenant-租户级，project-项目级）
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 开源治理策略级别（tenant-租户级，project-项目级）
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets isValid
    *  是否可用
    *
    * @return bool|null
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool|null $isValid 是否可用
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets operator
    *  操作人
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作人
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets isPublic
    *  是否系统策略
    *
    * @return bool|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool|null $isPublic 是否系统策略
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets isLegacy
    *  是否老版
    *
    * @return bool|null
    */
    public function getIsLegacy()
    {
        return $this->container['isLegacy'];
    }

    /**
    * Sets isLegacy
    *
    * @param bool|null $isLegacy 是否老版
    *
    * @return $this
    */
    public function setIsLegacy($isLegacy)
    {
        $this->container['isLegacy'] = $isLegacy;
        return $this;
    }

    /**
    * Gets operateTime
    *  操作时间
    *
    * @return int|null
    */
    public function getOperateTime()
    {
        return $this->container['operateTime'];
    }

    /**
    * Sets operateTime
    *
    * @param int|null $operateTime 操作时间
    *
    * @return $this
    */
    public function setOperateTime($operateTime)
    {
        $this->container['operateTime'] = $operateTime;
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

