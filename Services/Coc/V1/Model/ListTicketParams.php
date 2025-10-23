<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTicketParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTicketParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stringFilters' => '\HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter[]',
            'sortFilter' => '\HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stringFilters' => null,
        'sortFilter' => null
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
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stringFilters' => 'string_filters',
            'sortFilter' => 'sort_filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    *
    * @var string[]
    */
    protected static $setters = [
            'stringFilters' => 'setStringFilters',
            'sortFilter' => 'setSortFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stringFilters  字符串搜索条件，可根据该条件搜索到具体的工单。
    * sortFilter  sortFilter
    *
    * @var string[]
    */
    protected static $getters = [
            'stringFilters' => 'getStringFilters',
            'sortFilter' => 'getSortFilter'
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
        $this->container['stringFilters'] = isset($data['stringFilters']) ? $data['stringFilters'] : null;
        $this->container['sortFilter'] = isset($data['sortFilter']) ? $data['sortFilter'] : null;
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
    * Gets stringFilters
    *  字符串搜索条件，可根据该条件搜索到具体的工单。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter[]|null
    */
    public function getStringFilters()
    {
        return $this->container['stringFilters'];
    }

    /**
    * Sets stringFilters
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter[]|null $stringFilters 字符串搜索条件，可根据该条件搜索到具体的工单。
    *
    * @return $this
    */
    public function setStringFilters($stringFilters)
    {
        $this->container['stringFilters'] = $stringFilters;
        return $this;
    }

    /**
    * Gets sortFilter
    *  sortFilter
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter|null
    */
    public function getSortFilter()
    {
        return $this->container['sortFilter'];
    }

    /**
    * Sets sortFilter
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ObjectFilter|null $sortFilter sortFilter
    *
    * @return $this
    */
    public function setSortFilter($sortFilter)
    {
        $this->container['sortFilter'] = $sortFilter;
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

