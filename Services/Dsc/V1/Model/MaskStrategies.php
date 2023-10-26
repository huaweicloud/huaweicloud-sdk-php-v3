<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MaskStrategies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MaskStrategies';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  需要脱敏的字段名称，最大支持长度256。
    * algorithm  脱敏算法名称，详情见附录\"动态脱敏策略配置\"。
    * parameters  脱敏算法参数，详情见附录\"动态脱敏策略配置\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'algorithm' => 'string',
            'parameters' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  需要脱敏的字段名称，最大支持长度256。
    * algorithm  脱敏算法名称，详情见附录\"动态脱敏策略配置\"。
    * parameters  脱敏算法参数，详情见附录\"动态脱敏策略配置\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'algorithm' => null,
        'parameters' => null
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
    * name  需要脱敏的字段名称，最大支持长度256。
    * algorithm  脱敏算法名称，详情见附录\"动态脱敏策略配置\"。
    * parameters  脱敏算法参数，详情见附录\"动态脱敏策略配置\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'algorithm' => 'algorithm',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  需要脱敏的字段名称，最大支持长度256。
    * algorithm  脱敏算法名称，详情见附录\"动态脱敏策略配置\"。
    * parameters  脱敏算法参数，详情见附录\"动态脱敏策略配置\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'algorithm' => 'setAlgorithm',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  需要脱敏的字段名称，最大支持长度256。
    * algorithm  脱敏算法名称，详情见附录\"动态脱敏策略配置\"。
    * parameters  脱敏算法参数，详情见附录\"动态脱敏策略配置\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'algorithm' => 'getAlgorithm',
            'parameters' => 'getParameters'
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
    const ALGORITHM_SHA256 = 'SHA256';
    const ALGORITHM_SHA512 = 'SHA512';
    const ALGORITHM_AES = 'AES';
    const ALGORITHM_PRESNM = 'PRESNM';
    const ALGORITHM_MASKNM = 'MASKNM';
    const ALGORITHM_PRESXY = 'PRESXY';
    const ALGORITHM_MASKXY = 'MASKXY';
    const ALGORITHM_SYMBOL = 'SYMBOL';
    const ALGORITHM_KEYWORD = 'KEYWORD';
    const ALGORITHM_NUMERIC = 'NUMERIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlgorithmAllowableValues()
    {
        return [
            self::ALGORITHM_SHA256,
            self::ALGORITHM_SHA512,
            self::ALGORITHM_AES,
            self::ALGORITHM_PRESNM,
            self::ALGORITHM_MASKNM,
            self::ALGORITHM_PRESXY,
            self::ALGORITHM_MASKXY,
            self::ALGORITHM_SYMBOL,
            self::ALGORITHM_KEYWORD,
            self::ALGORITHM_NUMERIC,
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
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
        if ($this->container['algorithm'] === null) {
            $invalidProperties[] = "'algorithm' can't be null";
        }
            $allowedValues = $this->getAlgorithmAllowableValues();
                if (!is_null($this->container['algorithm']) && !in_array($this->container['algorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'algorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  需要脱敏的字段名称，最大支持长度256。
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
    * @param string $name 需要脱敏的字段名称，最大支持长度256。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets algorithm
    *  脱敏算法名称，详情见附录\"动态脱敏策略配置\"。
    *
    * @return string
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param string $algorithm 脱敏算法名称，详情见附录\"动态脱敏策略配置\"。
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets parameters
    *  脱敏算法参数，详情见附录\"动态脱敏策略配置\"。
    *
    * @return map[string,object]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param map[string,object]|null $parameters 脱敏算法参数，详情见附录\"动态脱敏策略配置\"。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

