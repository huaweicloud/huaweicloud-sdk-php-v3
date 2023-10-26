<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allResourceNames  资源名称列表
    * cloudServiceType  云服务类型
    * displayId  展示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSize  产品支持的数据库数量，或者支持obs的扫描量
    * resourceSizeMeasureId  资源容量度量标识，枚举值举例如下：15：mbps（购买带宽时使用），17：gb（购买云硬盘时使用），14：个/次
    * resourceSpecCode  产品编码
    * resourceType  资源类型
    * usageFactor  已使用系数
    * usageMeasureId  已使用容量度量标识
    * usageValue  已使用值
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
            'resourceSize' => 'int',
            'resourceSizeMeasureId' => 'int',
            'resourceSpecCode' => 'string',
            'resourceType' => 'string',
            'usageFactor' => 'string',
            'usageMeasureId' => 'int',
            'usageValue' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allResourceNames  资源名称列表
    * cloudServiceType  云服务类型
    * displayId  展示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSize  产品支持的数据库数量，或者支持obs的扫描量
    * resourceSizeMeasureId  资源容量度量标识，枚举值举例如下：15：mbps（购买带宽时使用），17：gb（购买云硬盘时使用），14：个/次
    * resourceSpecCode  产品编码
    * resourceType  资源类型
    * usageFactor  已使用系数
    * usageMeasureId  已使用容量度量标识
    * usageValue  已使用值
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
        'resourceSize' => 'int32',
        'resourceSizeMeasureId' => 'int32',
        'resourceSpecCode' => null,
        'resourceType' => null,
        'usageFactor' => null,
        'usageMeasureId' => 'int32',
        'usageValue' => 'double'
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
    * allResourceNames  资源名称列表
    * cloudServiceType  云服务类型
    * displayId  展示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSize  产品支持的数据库数量，或者支持obs的扫描量
    * resourceSizeMeasureId  资源容量度量标识，枚举值举例如下：15：mbps（购买带宽时使用），17：gb（购买云硬盘时使用），14：个/次
    * resourceSpecCode  产品编码
    * resourceType  资源类型
    * usageFactor  已使用系数
    * usageMeasureId  已使用容量度量标识
    * usageValue  已使用值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allResourceNames' => 'allResourceNames',
            'cloudServiceType' => 'cloudServiceType',
            'displayId' => 'displayId',
            'productId' => 'productId',
            'productSpecDesc' => 'productSpecDesc',
            'resourceName' => 'resourceName',
            'resourceSize' => 'resourceSize',
            'resourceSizeMeasureId' => 'resourceSizeMeasureId',
            'resourceSpecCode' => 'resourceSpecCode',
            'resourceType' => 'resourceType',
            'usageFactor' => 'usageFactor',
            'usageMeasureId' => 'usageMeasureId',
            'usageValue' => 'usageValue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allResourceNames  资源名称列表
    * cloudServiceType  云服务类型
    * displayId  展示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSize  产品支持的数据库数量，或者支持obs的扫描量
    * resourceSizeMeasureId  资源容量度量标识，枚举值举例如下：15：mbps（购买带宽时使用），17：gb（购买云硬盘时使用），14：个/次
    * resourceSpecCode  产品编码
    * resourceType  资源类型
    * usageFactor  已使用系数
    * usageMeasureId  已使用容量度量标识
    * usageValue  已使用值
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
            'resourceSize' => 'setResourceSize',
            'resourceSizeMeasureId' => 'setResourceSizeMeasureId',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceType' => 'setResourceType',
            'usageFactor' => 'setUsageFactor',
            'usageMeasureId' => 'setUsageMeasureId',
            'usageValue' => 'setUsageValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allResourceNames  资源名称列表
    * cloudServiceType  云服务类型
    * displayId  展示ID
    * productId  产品ID
    * productSpecDesc  产品规格描述
    * resourceName  资源名称
    * resourceSize  产品支持的数据库数量，或者支持obs的扫描量
    * resourceSizeMeasureId  资源容量度量标识，枚举值举例如下：15：mbps（购买带宽时使用），17：gb（购买云硬盘时使用），14：个/次
    * resourceSpecCode  产品编码
    * resourceType  资源类型
    * usageFactor  已使用系数
    * usageMeasureId  已使用容量度量标识
    * usageValue  已使用值
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
            'resourceSize' => 'getResourceSize',
            'resourceSizeMeasureId' => 'getResourceSizeMeasureId',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceType' => 'getResourceType',
            'usageFactor' => 'getUsageFactor',
            'usageMeasureId' => 'getUsageMeasureId',
            'usageValue' => 'getUsageValue'
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
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['resourceSizeMeasureId'] = isset($data['resourceSizeMeasureId']) ? $data['resourceSizeMeasureId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['usageFactor'] = isset($data['usageFactor']) ? $data['usageFactor'] : null;
        $this->container['usageMeasureId'] = isset($data['usageMeasureId']) ? $data['usageMeasureId'] : null;
        $this->container['usageValue'] = isset($data['usageValue']) ? $data['usageValue'] : null;
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
    *  资源名称列表
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
    * @param string[]|null $allResourceNames 资源名称列表
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
    *  展示ID
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
    * @param string|null $displayId 展示ID
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
    * Gets resourceSize
    *  产品支持的数据库数量，或者支持obs的扫描量
    *
    * @return int|null
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int|null $resourceSize 产品支持的数据库数量，或者支持obs的扫描量
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets resourceSizeMeasureId
    *  资源容量度量标识，枚举值举例如下：15：mbps（购买带宽时使用），17：gb（购买云硬盘时使用），14：个/次
    *
    * @return int|null
    */
    public function getResourceSizeMeasureId()
    {
        return $this->container['resourceSizeMeasureId'];
    }

    /**
    * Sets resourceSizeMeasureId
    *
    * @param int|null $resourceSizeMeasureId 资源容量度量标识，枚举值举例如下：15：mbps（购买带宽时使用），17：gb（购买云硬盘时使用），14：个/次
    *
    * @return $this
    */
    public function setResourceSizeMeasureId($resourceSizeMeasureId)
    {
        $this->container['resourceSizeMeasureId'] = $resourceSizeMeasureId;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  产品编码
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
    * @param string|null $resourceSpecCode 产品编码
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
    *  资源类型
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
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets usageFactor
    *  已使用系数
    *
    * @return string|null
    */
    public function getUsageFactor()
    {
        return $this->container['usageFactor'];
    }

    /**
    * Sets usageFactor
    *
    * @param string|null $usageFactor 已使用系数
    *
    * @return $this
    */
    public function setUsageFactor($usageFactor)
    {
        $this->container['usageFactor'] = $usageFactor;
        return $this;
    }

    /**
    * Gets usageMeasureId
    *  已使用容量度量标识
    *
    * @return int|null
    */
    public function getUsageMeasureId()
    {
        return $this->container['usageMeasureId'];
    }

    /**
    * Sets usageMeasureId
    *
    * @param int|null $usageMeasureId 已使用容量度量标识
    *
    * @return $this
    */
    public function setUsageMeasureId($usageMeasureId)
    {
        $this->container['usageMeasureId'] = $usageMeasureId;
        return $this;
    }

    /**
    * Gets usageValue
    *  已使用值
    *
    * @return double|null
    */
    public function getUsageValue()
    {
        return $this->container['usageValue'];
    }

    /**
    * Sets usageValue
    *
    * @param double|null $usageValue 已使用值
    *
    * @return $this
    */
    public function setUsageValue($usageValue)
    {
        $this->container['usageValue'] = $usageValue;
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

