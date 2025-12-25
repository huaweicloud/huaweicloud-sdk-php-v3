<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigResponseBodyCsvcList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigResponseBody_csvc_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * csvc  云产品ID
    * sourceList  所有的日志类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'csvc' => 'string',
            'sourceList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodySourceList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * csvc  云产品ID
    * sourceList  所有的日志类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'csvc' => null,
        'sourceList' => null
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
    * csvc  云产品ID
    * sourceList  所有的日志类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'csvc' => 'csvc',
            'sourceList' => 'source_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * csvc  云产品ID
    * sourceList  所有的日志类型
    *
    * @var string[]
    */
    protected static $setters = [
            'csvc' => 'setCsvc',
            'sourceList' => 'setSourceList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * csvc  云产品ID
    * sourceList  所有的日志类型
    *
    * @var string[]
    */
    protected static $getters = [
            'csvc' => 'getCsvc',
            'sourceList' => 'getSourceList'
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
        $this->container['csvc'] = isset($data['csvc']) ? $data['csvc'] : null;
        $this->container['sourceList'] = isset($data['sourceList']) ? $data['sourceList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['csvc']) && (mb_strlen($this->container['csvc']) > 64)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['csvc']) && (mb_strlen($this->container['csvc']) < 0)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be bigger than or equal to 0.";
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
    * Gets csvc
    *  云产品ID
    *
    * @return string|null
    */
    public function getCsvc()
    {
        return $this->container['csvc'];
    }

    /**
    * Sets csvc
    *
    * @param string|null $csvc 云产品ID
    *
    * @return $this
    */
    public function setCsvc($csvc)
    {
        $this->container['csvc'] = $csvc;
        return $this;
    }

    /**
    * Gets sourceList
    *  所有的日志类型
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodySourceList[]|null
    */
    public function getSourceList()
    {
        return $this->container['sourceList'];
    }

    /**
    * Sets sourceList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodySourceList[]|null $sourceList 所有的日志类型
    *
    * @return $this
    */
    public function setSourceList($sourceList)
    {
        $this->container['sourceList'] = $sourceList;
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

