<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransAcceptResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransAcceptResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单)
    * requiredResources  需要扣减的资源列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isNeedBilling' => 'bool',
            'requiredResources' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BillResources[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单)
    * requiredResources  需要扣减的资源列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isNeedBilling' => null,
        'requiredResources' => null
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
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单)
    * requiredResources  需要扣减的资源列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isNeedBilling' => 'is_need_billing',
            'requiredResources' => 'required_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单)
    * requiredResources  需要扣减的资源列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'isNeedBilling' => 'setIsNeedBilling',
            'requiredResources' => 'setRequiredResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单)
    * requiredResources  需要扣减的资源列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'isNeedBilling' => 'getIsNeedBilling',
            'requiredResources' => 'getRequiredResources'
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
        $this->container['isNeedBilling'] = isset($data['isNeedBilling']) ? $data['isNeedBilling'] : null;
        $this->container['requiredResources'] = isset($data['requiredResources']) ? $data['requiredResources'] : null;
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
    * Gets isNeedBilling
    *  资产转移时，是否需要从接收方扣减资源（产生计费话单)
    *
    * @return bool|null
    */
    public function getIsNeedBilling()
    {
        return $this->container['isNeedBilling'];
    }

    /**
    * Sets isNeedBilling
    *
    * @param bool|null $isNeedBilling 资产转移时，是否需要从接收方扣减资源（产生计费话单)
    *
    * @return $this
    */
    public function setIsNeedBilling($isNeedBilling)
    {
        $this->container['isNeedBilling'] = $isNeedBilling;
        return $this;
    }

    /**
    * Gets requiredResources
    *  需要扣减的资源列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\BillResources[]|null
    */
    public function getRequiredResources()
    {
        return $this->container['requiredResources'];
    }

    /**
    * Sets requiredResources
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\BillResources[]|null $requiredResources 需要扣减的资源列表。
    *
    * @return $this
    */
    public function setRequiredResources($requiredResources)
    {
        $this->container['requiredResources'] = $requiredResources;
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

