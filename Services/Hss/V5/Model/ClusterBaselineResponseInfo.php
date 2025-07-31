<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterBaselineResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterBaselineResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baselineDesc  检查项描述
    * baselineIndex  检查项ID
    * baselineType  检查项类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baselineDesc' => 'string',
            'baselineIndex' => 'string',
            'baselineType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baselineDesc  检查项描述
    * baselineIndex  检查项ID
    * baselineType  检查项类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baselineDesc' => null,
        'baselineIndex' => null,
        'baselineType' => null
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
    * baselineDesc  检查项描述
    * baselineIndex  检查项ID
    * baselineType  检查项类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baselineDesc' => 'baseline_desc',
            'baselineIndex' => 'baseline_index',
            'baselineType' => 'baseline_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baselineDesc  检查项描述
    * baselineIndex  检查项ID
    * baselineType  检查项类型
    *
    * @var string[]
    */
    protected static $setters = [
            'baselineDesc' => 'setBaselineDesc',
            'baselineIndex' => 'setBaselineIndex',
            'baselineType' => 'setBaselineType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baselineDesc  检查项描述
    * baselineIndex  检查项ID
    * baselineType  检查项类型
    *
    * @var string[]
    */
    protected static $getters = [
            'baselineDesc' => 'getBaselineDesc',
            'baselineIndex' => 'getBaselineIndex',
            'baselineType' => 'getBaselineType'
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
        $this->container['baselineDesc'] = isset($data['baselineDesc']) ? $data['baselineDesc'] : null;
        $this->container['baselineIndex'] = isset($data['baselineIndex']) ? $data['baselineIndex'] : null;
        $this->container['baselineType'] = isset($data['baselineType']) ? $data['baselineType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['baselineDesc']) && (mb_strlen($this->container['baselineDesc']) > 65534)) {
                $invalidProperties[] = "invalid value for 'baselineDesc', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['baselineDesc']) && (mb_strlen($this->container['baselineDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'baselineDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baselineIndex']) && (mb_strlen($this->container['baselineIndex']) > 64)) {
                $invalidProperties[] = "invalid value for 'baselineIndex', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['baselineIndex']) && (mb_strlen($this->container['baselineIndex']) < 0)) {
                $invalidProperties[] = "invalid value for 'baselineIndex', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baselineType']) && (mb_strlen($this->container['baselineType']) > 64)) {
                $invalidProperties[] = "invalid value for 'baselineType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['baselineType']) && (mb_strlen($this->container['baselineType']) < 0)) {
                $invalidProperties[] = "invalid value for 'baselineType', the character length must be bigger than or equal to 0.";
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
    * Gets baselineDesc
    *  检查项描述
    *
    * @return string|null
    */
    public function getBaselineDesc()
    {
        return $this->container['baselineDesc'];
    }

    /**
    * Sets baselineDesc
    *
    * @param string|null $baselineDesc 检查项描述
    *
    * @return $this
    */
    public function setBaselineDesc($baselineDesc)
    {
        $this->container['baselineDesc'] = $baselineDesc;
        return $this;
    }

    /**
    * Gets baselineIndex
    *  检查项ID
    *
    * @return string|null
    */
    public function getBaselineIndex()
    {
        return $this->container['baselineIndex'];
    }

    /**
    * Sets baselineIndex
    *
    * @param string|null $baselineIndex 检查项ID
    *
    * @return $this
    */
    public function setBaselineIndex($baselineIndex)
    {
        $this->container['baselineIndex'] = $baselineIndex;
        return $this;
    }

    /**
    * Gets baselineType
    *  检查项类型
    *
    * @return string|null
    */
    public function getBaselineType()
    {
        return $this->container['baselineType'];
    }

    /**
    * Sets baselineType
    *
    * @param string|null $baselineType 检查项类型
    *
    * @return $this
    */
    public function setBaselineType($baselineType)
    {
        $this->container['baselineType'] = $baselineType;
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

