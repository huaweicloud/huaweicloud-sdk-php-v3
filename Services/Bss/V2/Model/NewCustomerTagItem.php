<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NewCustomerTagItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NewCustomerTagItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户ID。
    * customerTagType  新客标签类型。 SMB：SMB新客标签。
    * newCustomerTag  新客标签。 Y：合格新客N：非新客UNDETERMINED：未达标新客，即有新客资格但尚未成为新客
    * effectiveTime  生效月份。 格式为YYYY-MM。
    * expireTime  失效月份。 格式为YYYY-MM。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'customerTagType' => 'string',
            'newCustomerTag' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户ID。
    * customerTagType  新客标签类型。 SMB：SMB新客标签。
    * newCustomerTag  新客标签。 Y：合格新客N：非新客UNDETERMINED：未达标新客，即有新客资格但尚未成为新客
    * effectiveTime  生效月份。 格式为YYYY-MM。
    * expireTime  失效月份。 格式为YYYY-MM。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'customerTagType' => null,
        'newCustomerTag' => null,
        'effectiveTime' => null,
        'expireTime' => null
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
    * customerId  客户ID。
    * customerTagType  新客标签类型。 SMB：SMB新客标签。
    * newCustomerTag  新客标签。 Y：合格新客N：非新客UNDETERMINED：未达标新客，即有新客资格但尚未成为新客
    * effectiveTime  生效月份。 格式为YYYY-MM。
    * expireTime  失效月份。 格式为YYYY-MM。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'customerTagType' => 'customer_tag_type',
            'newCustomerTag' => 'new_customer_tag',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户ID。
    * customerTagType  新客标签类型。 SMB：SMB新客标签。
    * newCustomerTag  新客标签。 Y：合格新客N：非新客UNDETERMINED：未达标新客，即有新客资格但尚未成为新客
    * effectiveTime  生效月份。 格式为YYYY-MM。
    * expireTime  失效月份。 格式为YYYY-MM。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'customerTagType' => 'setCustomerTagType',
            'newCustomerTag' => 'setNewCustomerTag',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户ID。
    * customerTagType  新客标签类型。 SMB：SMB新客标签。
    * newCustomerTag  新客标签。 Y：合格新客N：非新客UNDETERMINED：未达标新客，即有新客资格但尚未成为新客
    * effectiveTime  生效月份。 格式为YYYY-MM。
    * expireTime  失效月份。 格式为YYYY-MM。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'customerTagType' => 'getCustomerTagType',
            'newCustomerTag' => 'getNewCustomerTag',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['customerTagType'] = isset($data['customerTagType']) ? $data['customerTagType'] : null;
        $this->container['newCustomerTag'] = isset($data['newCustomerTag']) ? $data['newCustomerTag'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
    * Gets customerId
    *  客户ID。
    *
    * @return string|null
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string|null $customerId 客户ID。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets customerTagType
    *  新客标签类型。 SMB：SMB新客标签。
    *
    * @return string|null
    */
    public function getCustomerTagType()
    {
        return $this->container['customerTagType'];
    }

    /**
    * Sets customerTagType
    *
    * @param string|null $customerTagType 新客标签类型。 SMB：SMB新客标签。
    *
    * @return $this
    */
    public function setCustomerTagType($customerTagType)
    {
        $this->container['customerTagType'] = $customerTagType;
        return $this;
    }

    /**
    * Gets newCustomerTag
    *  新客标签。 Y：合格新客N：非新客UNDETERMINED：未达标新客，即有新客资格但尚未成为新客
    *
    * @return string|null
    */
    public function getNewCustomerTag()
    {
        return $this->container['newCustomerTag'];
    }

    /**
    * Sets newCustomerTag
    *
    * @param string|null $newCustomerTag 新客标签。 Y：合格新客N：非新客UNDETERMINED：未达标新客，即有新客资格但尚未成为新客
    *
    * @return $this
    */
    public function setNewCustomerTag($newCustomerTag)
    {
        $this->container['newCustomerTag'] = $newCustomerTag;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  生效月份。 格式为YYYY-MM。
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime 生效月份。 格式为YYYY-MM。
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  失效月份。 格式为YYYY-MM。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 失效月份。 格式为YYYY-MM。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

