<?php

namespace HuaweiCloud\SDK\Cce\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackageProductDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PackageProductDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productName  套餐包名称。
    * resourceSpecCode  套餐包规格。
    * periodType  周期类型，如month（表示月包）、year（表示年包）。
    * instanceType  实例类型，如general-computing。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productName' => 'string',
            'resourceSpecCode' => 'string',
            'periodType' => 'string',
            'instanceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productName  套餐包名称。
    * resourceSpecCode  套餐包规格。
    * periodType  周期类型，如month（表示月包）、year（表示年包）。
    * instanceType  实例类型，如general-computing。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productName' => null,
        'resourceSpecCode' => null,
        'periodType' => null,
        'instanceType' => null
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
    * productName  套餐包名称。
    * resourceSpecCode  套餐包规格。
    * periodType  周期类型，如month（表示月包）、year（表示年包）。
    * instanceType  实例类型，如general-computing。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productName' => 'product_name',
            'resourceSpecCode' => 'resource_spec_code',
            'periodType' => 'period_type',
            'instanceType' => 'instance_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productName  套餐包名称。
    * resourceSpecCode  套餐包规格。
    * periodType  周期类型，如month（表示月包）、year（表示年包）。
    * instanceType  实例类型，如general-computing。
    *
    * @var string[]
    */
    protected static $setters = [
            'productName' => 'setProductName',
            'resourceSpecCode' => 'setResourceSpecCode',
            'periodType' => 'setPeriodType',
            'instanceType' => 'setInstanceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productName  套餐包名称。
    * resourceSpecCode  套餐包规格。
    * periodType  周期类型，如month（表示月包）、year（表示年包）。
    * instanceType  实例类型，如general-computing。
    *
    * @var string[]
    */
    protected static $getters = [
            'productName' => 'getProductName',
            'resourceSpecCode' => 'getResourceSpecCode',
            'periodType' => 'getPeriodType',
            'instanceType' => 'getInstanceType'
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
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['productName'] === null) {
            $invalidProperties[] = "'productName' can't be null";
        }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
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
    * Gets productName
    *  套餐包名称。
    *
    * @return string
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string $productName 套餐包名称。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  套餐包规格。
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 套餐包规格。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets periodType
    *  周期类型，如month（表示月包）、year（表示年包）。
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType 周期类型，如month（表示月包）、year（表示年包）。
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型，如general-computing。
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType 实例类型，如general-computing。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
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

