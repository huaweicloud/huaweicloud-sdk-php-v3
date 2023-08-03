<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReservedInstanceConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReservedInstanceConfigs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionUrn  函数URN
    * qualifierType  限定类型, 支持version和alias
    * qualifierName  限定类型对应的取值
    * minCount  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionUrn' => 'string',
            'qualifierType' => 'string',
            'qualifierName' => 'string',
            'minCount' => 'int',
            'idleMode' => 'bool',
            'tacticsConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\TacticsConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionUrn  函数URN
    * qualifierType  限定类型, 支持version和alias
    * qualifierName  限定类型对应的取值
    * minCount  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionUrn' => null,
        'qualifierType' => null,
        'qualifierName' => null,
        'minCount' => null,
        'idleMode' => null,
        'tacticsConfig' => null
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
    * functionUrn  函数URN
    * qualifierType  限定类型, 支持version和alias
    * qualifierName  限定类型对应的取值
    * minCount  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionUrn' => 'function_urn',
            'qualifierType' => 'qualifier_type',
            'qualifierName' => 'qualifier_name',
            'minCount' => 'min_count',
            'idleMode' => 'idle_mode',
            'tacticsConfig' => 'tactics_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionUrn  函数URN
    * qualifierType  限定类型, 支持version和alias
    * qualifierName  限定类型对应的取值
    * minCount  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'functionUrn' => 'setFunctionUrn',
            'qualifierType' => 'setQualifierType',
            'qualifierName' => 'setQualifierName',
            'minCount' => 'setMinCount',
            'idleMode' => 'setIdleMode',
            'tacticsConfig' => 'setTacticsConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionUrn  函数URN
    * qualifierType  限定类型, 支持version和alias
    * qualifierName  限定类型对应的取值
    * minCount  预留实例个数
    * idleMode  是否开启闲置模式配置
    * tacticsConfig  tacticsConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'functionUrn' => 'getFunctionUrn',
            'qualifierType' => 'getQualifierType',
            'qualifierName' => 'getQualifierName',
            'minCount' => 'getMinCount',
            'idleMode' => 'getIdleMode',
            'tacticsConfig' => 'getTacticsConfig'
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
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
        $this->container['qualifierType'] = isset($data['qualifierType']) ? $data['qualifierType'] : null;
        $this->container['qualifierName'] = isset($data['qualifierName']) ? $data['qualifierName'] : null;
        $this->container['minCount'] = isset($data['minCount']) ? $data['minCount'] : null;
        $this->container['idleMode'] = isset($data['idleMode']) ? $data['idleMode'] : null;
        $this->container['tacticsConfig'] = isset($data['tacticsConfig']) ? $data['tacticsConfig'] : null;
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
    * Gets functionUrn
    *  函数URN
    *
    * @return string|null
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string|null $functionUrn 函数URN
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
        return $this;
    }

    /**
    * Gets qualifierType
    *  限定类型, 支持version和alias
    *
    * @return string|null
    */
    public function getQualifierType()
    {
        return $this->container['qualifierType'];
    }

    /**
    * Sets qualifierType
    *
    * @param string|null $qualifierType 限定类型, 支持version和alias
    *
    * @return $this
    */
    public function setQualifierType($qualifierType)
    {
        $this->container['qualifierType'] = $qualifierType;
        return $this;
    }

    /**
    * Gets qualifierName
    *  限定类型对应的取值
    *
    * @return string|null
    */
    public function getQualifierName()
    {
        return $this->container['qualifierName'];
    }

    /**
    * Sets qualifierName
    *
    * @param string|null $qualifierName 限定类型对应的取值
    *
    * @return $this
    */
    public function setQualifierName($qualifierName)
    {
        $this->container['qualifierName'] = $qualifierName;
        return $this;
    }

    /**
    * Gets minCount
    *  预留实例个数
    *
    * @return int|null
    */
    public function getMinCount()
    {
        return $this->container['minCount'];
    }

    /**
    * Sets minCount
    *
    * @param int|null $minCount 预留实例个数
    *
    * @return $this
    */
    public function setMinCount($minCount)
    {
        $this->container['minCount'] = $minCount;
        return $this;
    }

    /**
    * Gets idleMode
    *  是否开启闲置模式配置
    *
    * @return bool|null
    */
    public function getIdleMode()
    {
        return $this->container['idleMode'];
    }

    /**
    * Sets idleMode
    *
    * @param bool|null $idleMode 是否开启闲置模式配置
    *
    * @return $this
    */
    public function setIdleMode($idleMode)
    {
        $this->container['idleMode'] = $idleMode;
        return $this;
    }

    /**
    * Gets tacticsConfig
    *  tacticsConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\TacticsConfig|null
    */
    public function getTacticsConfig()
    {
        return $this->container['tacticsConfig'];
    }

    /**
    * Sets tacticsConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\TacticsConfig|null $tacticsConfig tacticsConfig
    *
    * @return $this
    */
    public function setTacticsConfig($tacticsConfig)
    {
        $this->container['tacticsConfig'] = $tacticsConfig;
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

