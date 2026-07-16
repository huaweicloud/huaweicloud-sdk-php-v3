<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class YamlTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'YamlTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * algorithmTypeEn  AutoSearch算法类型，英文描述。
    * algorithmTypeZh  AutoSearch算法类型[，中文描述](tag:hc,hk)。
    * algorithmNames  该算法类型下所有算法的名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'algorithmTypeEn' => 'string',
            'algorithmTypeZh' => 'string',
            'algorithmNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * algorithmTypeEn  AutoSearch算法类型，英文描述。
    * algorithmTypeZh  AutoSearch算法类型[，中文描述](tag:hc,hk)。
    * algorithmNames  该算法类型下所有算法的名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'algorithmTypeEn' => null,
        'algorithmTypeZh' => null,
        'algorithmNames' => null
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
    * algorithmTypeEn  AutoSearch算法类型，英文描述。
    * algorithmTypeZh  AutoSearch算法类型[，中文描述](tag:hc,hk)。
    * algorithmNames  该算法类型下所有算法的名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'algorithmTypeEn' => 'algorithm_type_en',
            'algorithmTypeZh' => 'algorithm_type_zh',
            'algorithmNames' => 'algorithm_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * algorithmTypeEn  AutoSearch算法类型，英文描述。
    * algorithmTypeZh  AutoSearch算法类型[，中文描述](tag:hc,hk)。
    * algorithmNames  该算法类型下所有算法的名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'algorithmTypeEn' => 'setAlgorithmTypeEn',
            'algorithmTypeZh' => 'setAlgorithmTypeZh',
            'algorithmNames' => 'setAlgorithmNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * algorithmTypeEn  AutoSearch算法类型，英文描述。
    * algorithmTypeZh  AutoSearch算法类型[，中文描述](tag:hc,hk)。
    * algorithmNames  该算法类型下所有算法的名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'algorithmTypeEn' => 'getAlgorithmTypeEn',
            'algorithmTypeZh' => 'getAlgorithmTypeZh',
            'algorithmNames' => 'getAlgorithmNames'
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
        $this->container['algorithmTypeEn'] = isset($data['algorithmTypeEn']) ? $data['algorithmTypeEn'] : null;
        $this->container['algorithmTypeZh'] = isset($data['algorithmTypeZh']) ? $data['algorithmTypeZh'] : null;
        $this->container['algorithmNames'] = isset($data['algorithmNames']) ? $data['algorithmNames'] : null;
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
    * Gets algorithmTypeEn
    *  AutoSearch算法类型，英文描述。
    *
    * @return string|null
    */
    public function getAlgorithmTypeEn()
    {
        return $this->container['algorithmTypeEn'];
    }

    /**
    * Sets algorithmTypeEn
    *
    * @param string|null $algorithmTypeEn AutoSearch算法类型，英文描述。
    *
    * @return $this
    */
    public function setAlgorithmTypeEn($algorithmTypeEn)
    {
        $this->container['algorithmTypeEn'] = $algorithmTypeEn;
        return $this;
    }

    /**
    * Gets algorithmTypeZh
    *  AutoSearch算法类型[，中文描述](tag:hc,hk)。
    *
    * @return string|null
    */
    public function getAlgorithmTypeZh()
    {
        return $this->container['algorithmTypeZh'];
    }

    /**
    * Sets algorithmTypeZh
    *
    * @param string|null $algorithmTypeZh AutoSearch算法类型[，中文描述](tag:hc,hk)。
    *
    * @return $this
    */
    public function setAlgorithmTypeZh($algorithmTypeZh)
    {
        $this->container['algorithmTypeZh'] = $algorithmTypeZh;
        return $this;
    }

    /**
    * Gets algorithmNames
    *  该算法类型下所有算法的名称。
    *
    * @return string[]|null
    */
    public function getAlgorithmNames()
    {
        return $this->container['algorithmNames'];
    }

    /**
    * Sets algorithmNames
    *
    * @param string[]|null $algorithmNames 该算法类型下所有算法的名称。
    *
    * @return $this
    */
    public function setAlgorithmNames($algorithmNames)
    {
        $this->container['algorithmNames'] = $algorithmNames;
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

