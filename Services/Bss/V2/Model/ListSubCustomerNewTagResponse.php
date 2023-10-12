<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubCustomerNewTagResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubCustomerNewTagResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newCustomerTags  新客标签信息列表。只有成功的时候才返回。 此列表不包含非子客户的数据。批量查询客户新客标签时，若入参携带了非子客户，会被过滤。 具体请参见表1 NewCustomerTagItem。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newCustomerTags' => '\HuaweiCloud\SDK\Bss\V2\Model\NewCustomerTagItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newCustomerTags  新客标签信息列表。只有成功的时候才返回。 此列表不包含非子客户的数据。批量查询客户新客标签时，若入参携带了非子客户，会被过滤。 具体请参见表1 NewCustomerTagItem。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newCustomerTags' => null
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
    * newCustomerTags  新客标签信息列表。只有成功的时候才返回。 此列表不包含非子客户的数据。批量查询客户新客标签时，若入参携带了非子客户，会被过滤。 具体请参见表1 NewCustomerTagItem。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newCustomerTags' => 'new_customer_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newCustomerTags  新客标签信息列表。只有成功的时候才返回。 此列表不包含非子客户的数据。批量查询客户新客标签时，若入参携带了非子客户，会被过滤。 具体请参见表1 NewCustomerTagItem。
    *
    * @var string[]
    */
    protected static $setters = [
            'newCustomerTags' => 'setNewCustomerTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newCustomerTags  新客标签信息列表。只有成功的时候才返回。 此列表不包含非子客户的数据。批量查询客户新客标签时，若入参携带了非子客户，会被过滤。 具体请参见表1 NewCustomerTagItem。
    *
    * @var string[]
    */
    protected static $getters = [
            'newCustomerTags' => 'getNewCustomerTags'
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
        $this->container['newCustomerTags'] = isset($data['newCustomerTags']) ? $data['newCustomerTags'] : null;
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
    * Gets newCustomerTags
    *  新客标签信息列表。只有成功的时候才返回。 此列表不包含非子客户的数据。批量查询客户新客标签时，若入参携带了非子客户，会被过滤。 具体请参见表1 NewCustomerTagItem。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\NewCustomerTagItem[]|null
    */
    public function getNewCustomerTags()
    {
        return $this->container['newCustomerTags'];
    }

    /**
    * Sets newCustomerTags
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\NewCustomerTagItem[]|null $newCustomerTags 新客标签信息列表。只有成功的时候才返回。 此列表不包含非子客户的数据。批量查询客户新客标签时，若入参携带了非子客户，会被过滤。 具体请参见表1 NewCustomerTagItem。
    *
    * @return $this
    */
    public function setNewCustomerTags($newCustomerTags)
    {
        $this->container['newCustomerTags'] = $newCustomerTags;
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

