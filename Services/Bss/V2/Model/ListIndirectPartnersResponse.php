<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIndirectPartnersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIndirectPartnersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  符合条件的记录个数，只有成功的时候出现。
    * indirectPartners  精英服务商列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'indirectPartners' => '\HuaweiCloud\SDK\Bss\V2\Model\IndirectPartnerInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  符合条件的记录个数，只有成功的时候出现。
    * indirectPartners  精英服务商列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'indirectPartners' => null
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
    * count  符合条件的记录个数，只有成功的时候出现。
    * indirectPartners  精英服务商列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'indirectPartners' => 'indirect_partners'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  符合条件的记录个数，只有成功的时候出现。
    * indirectPartners  精英服务商列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'indirectPartners' => 'setIndirectPartners'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  符合条件的记录个数，只有成功的时候出现。
    * indirectPartners  精英服务商列表，具体参见表1。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'indirectPartners' => 'getIndirectPartners'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['indirectPartners'] = isset($data['indirectPartners']) ? $data['indirectPartners'] : null;
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
    * Gets count
    *  符合条件的记录个数，只有成功的时候出现。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 符合条件的记录个数，只有成功的时候出现。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets indirectPartners
    *  精英服务商列表，具体参见表1。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\IndirectPartnerInfo[]|null
    */
    public function getIndirectPartners()
    {
        return $this->container['indirectPartners'];
    }

    /**
    * Sets indirectPartners
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\IndirectPartnerInfo[]|null $indirectPartners 精英服务商列表，具体参见表1。
    *
    * @return $this
    */
    public function setIndirectPartners($indirectPartners)
    {
        $this->container['indirectPartners'] = $indirectPartners;
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

