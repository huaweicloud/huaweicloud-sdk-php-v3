<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbParamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbParamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * common  常规参数。只有对比结果为不一致的目标库参数能被修改。
    * performance  性能参数。对比结果一致也可以修改目标库的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'common' => '\HuaweiCloud\SDK\Drs\V5\Model\DbParam[]',
            'performance' => '\HuaweiCloud\SDK\Drs\V5\Model\DbParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * common  常规参数。只有对比结果为不一致的目标库参数能被修改。
    * performance  性能参数。对比结果一致也可以修改目标库的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'common' => null,
        'performance' => null
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
    * common  常规参数。只有对比结果为不一致的目标库参数能被修改。
    * performance  性能参数。对比结果一致也可以修改目标库的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'common' => 'common',
            'performance' => 'performance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * common  常规参数。只有对比结果为不一致的目标库参数能被修改。
    * performance  性能参数。对比结果一致也可以修改目标库的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'common' => 'setCommon',
            'performance' => 'setPerformance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * common  常规参数。只有对比结果为不一致的目标库参数能被修改。
    * performance  性能参数。对比结果一致也可以修改目标库的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'common' => 'getCommon',
            'performance' => 'getPerformance'
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
        $this->container['common'] = isset($data['common']) ? $data['common'] : null;
        $this->container['performance'] = isset($data['performance']) ? $data['performance'] : null;
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
    * Gets common
    *  常规参数。只有对比结果为不一致的目标库参数能被修改。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbParam[]|null
    */
    public function getCommon()
    {
        return $this->container['common'];
    }

    /**
    * Sets common
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbParam[]|null $common 常规参数。只有对比结果为不一致的目标库参数能被修改。
    *
    * @return $this
    */
    public function setCommon($common)
    {
        $this->container['common'] = $common;
        return $this;
    }

    /**
    * Gets performance
    *  性能参数。对比结果一致也可以修改目标库的值。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbParam[]|null
    */
    public function getPerformance()
    {
        return $this->container['performance'];
    }

    /**
    * Sets performance
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbParam[]|null $performance 性能参数。对比结果一致也可以修改目标库的值。
    *
    * @return $this
    */
    public function setPerformance($performance)
    {
        $this->container['performance'] = $performance;
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

