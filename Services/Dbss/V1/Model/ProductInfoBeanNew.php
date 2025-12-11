<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductInfoBeanNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductInfoBeanNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allResourceNames  所有资源名称
    * cloudServiceType  云服务类型
    * displayId  显示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSpecCode  资源规格
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allResourceNames' => 'string[]',
            'cloudServiceType' => 'string',
            'displayId' => 'string',
            'productId' => 'string',
            'productSpecDesc' => 'string',
            'resourceName' => 'string',
            'resourceSpecCode' => 'string',
            'resourceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allResourceNames  所有资源名称
    * cloudServiceType  云服务类型
    * displayId  显示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSpecCode  资源规格
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allResourceNames' => null,
        'cloudServiceType' => null,
        'displayId' => null,
        'productId' => null,
        'productSpecDesc' => null,
        'resourceName' => null,
        'resourceSpecCode' => null,
        'resourceType' => null
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
    * allResourceNames  所有资源名称
    * cloudServiceType  云服务类型
    * displayId  显示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSpecCode  资源规格
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allResourceNames' => 'all_resource_names',
            'cloudServiceType' => 'cloud_service_type',
            'displayId' => 'display_id',
            'productId' => 'product_id',
            'productSpecDesc' => 'product_spec_desc',
            'resourceName' => 'resource_name',
            'resourceSpecCode' => 'resource_spec_code',
            'resourceType' => 'resource_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allResourceNames  所有资源名称
    * cloudServiceType  云服务类型
    * displayId  显示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSpecCode  资源规格
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    *
    * @var string[]
    */
    protected static $setters = [
            'allResourceNames' => 'setAllResourceNames',
            'cloudServiceType' => 'setCloudServiceType',
            'displayId' => 'setDisplayId',
            'productId' => 'setProductId',
            'productSpecDesc' => 'setProductSpecDesc',
            'resourceName' => 'setResourceName',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceType' => 'setResourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allResourceNames  所有资源名称
    * cloudServiceType  云服务类型
    * displayId  显示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSpecCode  资源规格
    * resourceType  资源类型: - hws.resource.type.dbss：数据库审计
    *
    * @var string[]
    */
    protected static $getters = [
            'allResourceNames' => 'getAllResourceNames',
            'cloudServiceType' => 'getCloudServiceType',
            'displayId' => 'getDisplayId',
            'productId' => 'getProductId',
            'productSpecDesc' => 'getProductSpecDesc',
            'resourceName' => 'getResourceName',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceType' => 'getResourceType'
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
        $this->container['allResourceNames'] = isset($data['allResourceNames']) ? $data['allResourceNames'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['displayId'] = isset($data['displayId']) ? $data['displayId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
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
    * Gets allResourceNames
    *  所有资源名称
    *
    * @return string[]|null
    */
    public function getAllResourceNames()
    {
        return $this->container['allResourceNames'];
    }

    /**
    * Sets allResourceNames
    *
    * @param string[]|null $allResourceNames 所有资源名称
    *
    * @return $this
    */
    public function setAllResourceNames($allResourceNames)
    {
        $this->container['allResourceNames'] = $allResourceNames;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型
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
    * @param string|null $cloudServiceType 云服务类型
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets displayId
    *  显示ID
    *
    * @return string|null
    */
    public function getDisplayId()
    {
        return $this->container['displayId'];
    }

    /**
    * Sets displayId
    *
    * @param string|null $displayId 显示ID
    *
    * @return $this
    */
    public function setDisplayId($displayId)
    {
        $this->container['displayId'] = $displayId;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productSpecDesc
    *  产品规格描述
    *
    * @return string|null
    */
    public function getProductSpecDesc()
    {
        return $this->container['productSpecDesc'];
    }

    /**
    * Sets productSpecDesc
    *
    * @param string|null $productSpecDesc 产品规格描述
    *
    * @return $this
    */
    public function setProductSpecDesc($productSpecDesc)
    {
        $this->container['productSpecDesc'] = $productSpecDesc;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  资源规格
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 资源规格
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型: - hws.resource.type.dbss：数据库审计
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
    * @param string|null $resourceType 资源类型: - hws.resource.type.dbss：数据库审计
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
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

