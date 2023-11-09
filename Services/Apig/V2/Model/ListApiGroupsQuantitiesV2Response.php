<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApiGroupsQuantitiesV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApiGroupsQuantitiesV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offsellNums  未上架的API分组个数  暂不支持
    * onsellNums  已上架的API分组个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offsellNums' => 'int',
            'onsellNums' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offsellNums  未上架的API分组个数  暂不支持
    * onsellNums  已上架的API分组个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offsellNums' => 'int32',
        'onsellNums' => 'int32'
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
    * offsellNums  未上架的API分组个数  暂不支持
    * onsellNums  已上架的API分组个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offsellNums' => 'offsell_nums',
            'onsellNums' => 'onsell_nums'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offsellNums  未上架的API分组个数  暂不支持
    * onsellNums  已上架的API分组个数
    *
    * @var string[]
    */
    protected static $setters = [
            'offsellNums' => 'setOffsellNums',
            'onsellNums' => 'setOnsellNums'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offsellNums  未上架的API分组个数  暂不支持
    * onsellNums  已上架的API分组个数
    *
    * @var string[]
    */
    protected static $getters = [
            'offsellNums' => 'getOffsellNums',
            'onsellNums' => 'getOnsellNums'
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
        $this->container['offsellNums'] = isset($data['offsellNums']) ? $data['offsellNums'] : null;
        $this->container['onsellNums'] = isset($data['onsellNums']) ? $data['onsellNums'] : null;
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
    * Gets offsellNums
    *  未上架的API分组个数  暂不支持
    *
    * @return int|null
    */
    public function getOffsellNums()
    {
        return $this->container['offsellNums'];
    }

    /**
    * Sets offsellNums
    *
    * @param int|null $offsellNums 未上架的API分组个数  暂不支持
    *
    * @return $this
    */
    public function setOffsellNums($offsellNums)
    {
        $this->container['offsellNums'] = $offsellNums;
        return $this;
    }

    /**
    * Gets onsellNums
    *  已上架的API分组个数
    *
    * @return int|null
    */
    public function getOnsellNums()
    {
        return $this->container['onsellNums'];
    }

    /**
    * Sets onsellNums
    *
    * @param int|null $onsellNums 已上架的API分组个数
    *
    * @return $this
    */
    public function setOnsellNums($onsellNums)
    {
        $this->container['onsellNums'] = $onsellNums;
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

