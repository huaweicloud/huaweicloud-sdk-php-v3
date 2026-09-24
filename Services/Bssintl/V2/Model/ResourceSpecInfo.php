<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceSpecInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceSpecInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceType  云服务类型编码
    * cloudServiceTypeName  云服务类型名称
    * resourceType  资源类型编码
    * resourceTypeName  资源类型名称
    * resourceSpec  云服务类型的资源规格编码
    * resourceSpecName  云服务类型的资源规格名称
    * attributes  属性列表，need_attributes=true时返回属性信息。
    * priceLists  定价列表，need_price=true时返回定价信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceType' => 'string',
            'cloudServiceTypeName' => 'string',
            'resourceType' => 'string',
            'resourceTypeName' => 'string',
            'resourceSpec' => 'string',
            'resourceSpecName' => 'string',
            'attributes' => '\HuaweiCloud\SDK\Bssintl\V2\Model\Attribute[]',
            'priceLists' => '\HuaweiCloud\SDK\Bssintl\V2\Model\PriceItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceType  云服务类型编码
    * cloudServiceTypeName  云服务类型名称
    * resourceType  资源类型编码
    * resourceTypeName  资源类型名称
    * resourceSpec  云服务类型的资源规格编码
    * resourceSpecName  云服务类型的资源规格名称
    * attributes  属性列表，need_attributes=true时返回属性信息。
    * priceLists  定价列表，need_price=true时返回定价信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceType' => null,
        'cloudServiceTypeName' => null,
        'resourceType' => null,
        'resourceTypeName' => null,
        'resourceSpec' => null,
        'resourceSpecName' => null,
        'attributes' => null,
        'priceLists' => null
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
    * cloudServiceType  云服务类型编码
    * cloudServiceTypeName  云服务类型名称
    * resourceType  资源类型编码
    * resourceTypeName  资源类型名称
    * resourceSpec  云服务类型的资源规格编码
    * resourceSpecName  云服务类型的资源规格名称
    * attributes  属性列表，need_attributes=true时返回属性信息。
    * priceLists  定价列表，need_price=true时返回定价信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceType' => 'cloud_service_type',
            'cloudServiceTypeName' => 'cloud_service_type_name',
            'resourceType' => 'resource_type',
            'resourceTypeName' => 'resource_type_name',
            'resourceSpec' => 'resource_spec',
            'resourceSpecName' => 'resource_spec_name',
            'attributes' => 'attributes',
            'priceLists' => 'price_lists'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceType  云服务类型编码
    * cloudServiceTypeName  云服务类型名称
    * resourceType  资源类型编码
    * resourceTypeName  资源类型名称
    * resourceSpec  云服务类型的资源规格编码
    * resourceSpecName  云服务类型的资源规格名称
    * attributes  属性列表，need_attributes=true时返回属性信息。
    * priceLists  定价列表，need_price=true时返回定价信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceType' => 'setCloudServiceType',
            'cloudServiceTypeName' => 'setCloudServiceTypeName',
            'resourceType' => 'setResourceType',
            'resourceTypeName' => 'setResourceTypeName',
            'resourceSpec' => 'setResourceSpec',
            'resourceSpecName' => 'setResourceSpecName',
            'attributes' => 'setAttributes',
            'priceLists' => 'setPriceLists'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceType  云服务类型编码
    * cloudServiceTypeName  云服务类型名称
    * resourceType  资源类型编码
    * resourceTypeName  资源类型名称
    * resourceSpec  云服务类型的资源规格编码
    * resourceSpecName  云服务类型的资源规格名称
    * attributes  属性列表，need_attributes=true时返回属性信息。
    * priceLists  定价列表，need_price=true时返回定价信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceType' => 'getCloudServiceType',
            'cloudServiceTypeName' => 'getCloudServiceTypeName',
            'resourceType' => 'getResourceType',
            'resourceTypeName' => 'getResourceTypeName',
            'resourceSpec' => 'getResourceSpec',
            'resourceSpecName' => 'getResourceSpecName',
            'attributes' => 'getAttributes',
            'priceLists' => 'getPriceLists'
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
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['cloudServiceTypeName'] = isset($data['cloudServiceTypeName']) ? $data['cloudServiceTypeName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['resourceSpec'] = isset($data['resourceSpec']) ? $data['resourceSpec'] : null;
        $this->container['resourceSpecName'] = isset($data['resourceSpecName']) ? $data['resourceSpecName'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['priceLists'] = isset($data['priceLists']) ? $data['priceLists'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cloudServiceTypeName']) && (mb_strlen($this->container['cloudServiceTypeName']) > 200)) {
                $invalidProperties[] = "invalid value for 'cloudServiceTypeName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['cloudServiceTypeName']) && (mb_strlen($this->container['cloudServiceTypeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceTypeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceTypeName']) && (mb_strlen($this->container['resourceTypeName']) > 200)) {
                $invalidProperties[] = "invalid value for 'resourceTypeName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['resourceTypeName']) && (mb_strlen($this->container['resourceTypeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceTypeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceSpec']) && (mb_strlen($this->container['resourceSpec']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpec', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSpec']) && (mb_strlen($this->container['resourceSpec']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSpec', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceSpecName']) && (mb_strlen($this->container['resourceSpecName']) > 256)) {
                $invalidProperties[] = "invalid value for 'resourceSpecName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourceSpecName']) && (mb_strlen($this->container['resourceSpecName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecName', the character length must be bigger than or equal to 0.";
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
    * Gets cloudServiceType
    *  云服务类型编码
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType 云服务类型编码
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets cloudServiceTypeName
    *  云服务类型名称
    *
    * @return string|null
    */
    public function getCloudServiceTypeName()
    {
        return $this->container['cloudServiceTypeName'];
    }

    /**
    * Sets cloudServiceTypeName
    *
    * @param string|null $cloudServiceTypeName 云服务类型名称
    *
    * @return $this
    */
    public function setCloudServiceTypeName($cloudServiceTypeName)
    {
        $this->container['cloudServiceTypeName'] = $cloudServiceTypeName;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型编码
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型编码
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  资源类型名称
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName 资源类型名称
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets resourceSpec
    *  云服务类型的资源规格编码
    *
    * @return string|null
    */
    public function getResourceSpec()
    {
        return $this->container['resourceSpec'];
    }

    /**
    * Sets resourceSpec
    *
    * @param string|null $resourceSpec 云服务类型的资源规格编码
    *
    * @return $this
    */
    public function setResourceSpec($resourceSpec)
    {
        $this->container['resourceSpec'] = $resourceSpec;
        return $this;
    }

    /**
    * Gets resourceSpecName
    *  云服务类型的资源规格名称
    *
    * @return string|null
    */
    public function getResourceSpecName()
    {
        return $this->container['resourceSpecName'];
    }

    /**
    * Sets resourceSpecName
    *
    * @param string|null $resourceSpecName 云服务类型的资源规格名称
    *
    * @return $this
    */
    public function setResourceSpecName($resourceSpecName)
    {
        $this->container['resourceSpecName'] = $resourceSpecName;
        return $this;
    }

    /**
    * Gets attributes
    *  属性列表，need_attributes=true时返回属性信息。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\Attribute[]|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\Attribute[]|null $attributes 属性列表，need_attributes=true时返回属性信息。
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets priceLists
    *  定价列表，need_price=true时返回定价信息。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\PriceItem[]|null
    */
    public function getPriceLists()
    {
        return $this->container['priceLists'];
    }

    /**
    * Sets priceLists
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\PriceItem[]|null $priceLists 定价列表，need_price=true时返回定价信息。
    *
    * @return $this
    */
    public function setPriceLists($priceLists)
    {
        $this->container['priceLists'] = $priceLists;
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

