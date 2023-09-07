<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTopUrlResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTopUrlResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceArea  服务区域：mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * topUrlSummary  详情数据对象。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceArea' => 'string',
            'topUrlSummary' => '\HuaweiCloud\SDK\Cdn\V2\Model\TopUrlSummary[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceArea  服务区域：mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * topUrlSummary  详情数据对象。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceArea' => null,
        'topUrlSummary' => null
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
    * serviceArea  服务区域：mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * topUrlSummary  详情数据对象。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceArea' => 'service_area',
            'topUrlSummary' => 'top_url_summary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceArea  服务区域：mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * topUrlSummary  详情数据对象。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceArea' => 'setServiceArea',
            'topUrlSummary' => 'setTopUrlSummary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceArea  服务区域：mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    * topUrlSummary  详情数据对象。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceArea' => 'getServiceArea',
            'topUrlSummary' => 'getTopUrlSummary'
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
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['topUrlSummary'] = isset($data['topUrlSummary']) ? $data['topUrlSummary'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceArea']) && (mb_strlen($this->container['serviceArea']) > 512)) {
                $invalidProperties[] = "invalid value for 'serviceArea', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['serviceArea']) && (mb_strlen($this->container['serviceArea']) < 2)) {
                $invalidProperties[] = "invalid value for 'serviceArea', the character length must be bigger than or equal to 2.";
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
    * Gets serviceArea
    *  服务区域：mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    *
    * @return string|null
    */
    public function getServiceArea()
    {
        return $this->container['serviceArea'];
    }

    /**
    * Sets serviceArea
    *
    * @param string|null $serviceArea 服务区域：mainland_china(中国大陆)，outside_mainland_china(中国大陆境外)，默认为mainland_china。
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
    * Gets topUrlSummary
    *  详情数据对象。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\TopUrlSummary[]|null
    */
    public function getTopUrlSummary()
    {
        return $this->container['topUrlSummary'];
    }

    /**
    * Sets topUrlSummary
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\TopUrlSummary[]|null $topUrlSummary 详情数据对象。
    *
    * @return $this
    */
    public function setTopUrlSummary($topUrlSummary)
    {
        $this->container['topUrlSummary'] = $topUrlSummary;
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

