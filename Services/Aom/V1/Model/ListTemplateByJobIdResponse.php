<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTemplateByJobIdResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTemplateByJobIdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalElements  总数
    * elements  查询作业信息集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalElements' => 'int',
            'elements' => '\HuaweiCloud\SDK\Aom\V1\Model\Template[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalElements  总数
    * elements  查询作业信息集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalElements' => 'int64',
        'elements' => null
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
    * totalElements  总数
    * elements  查询作业信息集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalElements' => 'total_elements',
            'elements' => 'elements'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalElements  总数
    * elements  查询作业信息集合
    *
    * @var string[]
    */
    protected static $setters = [
            'totalElements' => 'setTotalElements',
            'elements' => 'setElements'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalElements  总数
    * elements  查询作业信息集合
    *
    * @var string[]
    */
    protected static $getters = [
            'totalElements' => 'getTotalElements',
            'elements' => 'getElements'
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
        $this->container['totalElements'] = isset($data['totalElements']) ? $data['totalElements'] : null;
        $this->container['elements'] = isset($data['elements']) ? $data['elements'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalElements']) && ($this->container['totalElements'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'totalElements', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['totalElements']) && ($this->container['totalElements'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalElements', must be bigger than or equal to 0.";
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
    * Gets totalElements
    *  总数
    *
    * @return int|null
    */
    public function getTotalElements()
    {
        return $this->container['totalElements'];
    }

    /**
    * Sets totalElements
    *
    * @param int|null $totalElements 总数
    *
    * @return $this
    */
    public function setTotalElements($totalElements)
    {
        $this->container['totalElements'] = $totalElements;
        return $this;
    }

    /**
    * Gets elements
    *  查询作业信息集合
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Template[]|null
    */
    public function getElements()
    {
        return $this->container['elements'];
    }

    /**
    * Sets elements
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Template[]|null $elements 查询作业信息集合
    *
    * @return $this
    */
    public function setElements($elements)
    {
        $this->container['elements'] = $elements;
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

