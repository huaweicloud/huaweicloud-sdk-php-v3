<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DivisionPattern implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DivisionPattern';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * patternType  阶梯类型，1：一次分档模式、2：累计分档模式
    * divisionType  分档类型，1：STEP，按档拆分定价、2：TIER，按最终档定价
    * divisionList  阶梯分档列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'patternType' => 'int',
            'divisionType' => 'int',
            'divisionList' => '\HuaweiCloud\SDK\Bssintl\V2\Model\Division[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * patternType  阶梯类型，1：一次分档模式、2：累计分档模式
    * divisionType  分档类型，1：STEP，按档拆分定价、2：TIER，按最终档定价
    * divisionList  阶梯分档列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'patternType' => 'int32',
        'divisionType' => 'int32',
        'divisionList' => null
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
    * patternType  阶梯类型，1：一次分档模式、2：累计分档模式
    * divisionType  分档类型，1：STEP，按档拆分定价、2：TIER，按最终档定价
    * divisionList  阶梯分档列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'patternType' => 'pattern_type',
            'divisionType' => 'division_type',
            'divisionList' => 'division_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * patternType  阶梯类型，1：一次分档模式、2：累计分档模式
    * divisionType  分档类型，1：STEP，按档拆分定价、2：TIER，按最终档定价
    * divisionList  阶梯分档列表
    *
    * @var string[]
    */
    protected static $setters = [
            'patternType' => 'setPatternType',
            'divisionType' => 'setDivisionType',
            'divisionList' => 'setDivisionList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * patternType  阶梯类型，1：一次分档模式、2：累计分档模式
    * divisionType  分档类型，1：STEP，按档拆分定价、2：TIER，按最终档定价
    * divisionList  阶梯分档列表
    *
    * @var string[]
    */
    protected static $getters = [
            'patternType' => 'getPatternType',
            'divisionType' => 'getDivisionType',
            'divisionList' => 'getDivisionList'
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
        $this->container['patternType'] = isset($data['patternType']) ? $data['patternType'] : null;
        $this->container['divisionType'] = isset($data['divisionType']) ? $data['divisionType'] : null;
        $this->container['divisionList'] = isset($data['divisionList']) ? $data['divisionList'] : null;
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
    * Gets patternType
    *  阶梯类型，1：一次分档模式、2：累计分档模式
    *
    * @return int|null
    */
    public function getPatternType()
    {
        return $this->container['patternType'];
    }

    /**
    * Sets patternType
    *
    * @param int|null $patternType 阶梯类型，1：一次分档模式、2：累计分档模式
    *
    * @return $this
    */
    public function setPatternType($patternType)
    {
        $this->container['patternType'] = $patternType;
        return $this;
    }

    /**
    * Gets divisionType
    *  分档类型，1：STEP，按档拆分定价、2：TIER，按最终档定价
    *
    * @return int|null
    */
    public function getDivisionType()
    {
        return $this->container['divisionType'];
    }

    /**
    * Sets divisionType
    *
    * @param int|null $divisionType 分档类型，1：STEP，按档拆分定价、2：TIER，按最终档定价
    *
    * @return $this
    */
    public function setDivisionType($divisionType)
    {
        $this->container['divisionType'] = $divisionType;
        return $this;
    }

    /**
    * Gets divisionList
    *  阶梯分档列表
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\Division[]|null
    */
    public function getDivisionList()
    {
        return $this->container['divisionList'];
    }

    /**
    * Sets divisionList
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\Division[]|null $divisionList 阶梯分档列表
    *
    * @return $this
    */
    public function setDivisionList($divisionList)
    {
        $this->container['divisionList'] = $divisionList;
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

