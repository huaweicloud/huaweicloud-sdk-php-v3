<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertDataSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Alert_data_source';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceType  数据源类型，取值范围如下： 1 - 云上产品 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属账号的id
    * projectId  数据源产品所属项目的id
    * regionId  数据源产品所在区域，具体取值范围查看云地区和终端节点定义
    * companyName  数据源产品所属公司的名称
    * productName  数据源产品的名称
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性
    * productModule  检测模块列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceType' => 'int',
            'domainId' => 'string',
            'projectId' => 'string',
            'regionId' => 'string',
            'companyName' => 'string',
            'productName' => 'string',
            'productFeature' => 'string',
            'productModule' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceType  数据源类型，取值范围如下： 1 - 云上产品 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属账号的id
    * projectId  数据源产品所属项目的id
    * regionId  数据源产品所在区域，具体取值范围查看云地区和终端节点定义
    * companyName  数据源产品所属公司的名称
    * productName  数据源产品的名称
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性
    * productModule  检测模块列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceType' => null,
        'domainId' => null,
        'projectId' => null,
        'regionId' => null,
        'companyName' => null,
        'productName' => null,
        'productFeature' => null,
        'productModule' => null
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
    * sourceType  数据源类型，取值范围如下： 1 - 云上产品 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属账号的id
    * projectId  数据源产品所属项目的id
    * regionId  数据源产品所在区域，具体取值范围查看云地区和终端节点定义
    * companyName  数据源产品所属公司的名称
    * productName  数据源产品的名称
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性
    * productModule  检测模块列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceType' => 'source_type',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'companyName' => 'company_name',
            'productName' => 'product_name',
            'productFeature' => 'product_feature',
            'productModule' => 'product_module'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceType  数据源类型，取值范围如下： 1 - 云上产品 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属账号的id
    * projectId  数据源产品所属项目的id
    * regionId  数据源产品所在区域，具体取值范围查看云地区和终端节点定义
    * companyName  数据源产品所属公司的名称
    * productName  数据源产品的名称
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性
    * productModule  检测模块列表
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceType' => 'setSourceType',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'companyName' => 'setCompanyName',
            'productName' => 'setProductName',
            'productFeature' => 'setProductFeature',
            'productModule' => 'setProductModule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceType  数据源类型，取值范围如下： 1 - 云上产品 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属账号的id
    * projectId  数据源产品所属项目的id
    * regionId  数据源产品所在区域，具体取值范围查看云地区和终端节点定义
    * companyName  数据源产品所属公司的名称
    * productName  数据源产品的名称
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性
    * productModule  检测模块列表
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceType' => 'getSourceType',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
            'companyName' => 'getCompanyName',
            'productName' => 'getProductName',
            'productFeature' => 'getProductFeature',
            'productModule' => 'getProductModule'
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
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productFeature'] = isset($data['productFeature']) ? $data['productFeature'] : null;
        $this->container['productModule'] = isset($data['productModule']) ? $data['productModule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceType']) && ($this->container['sourceType'] > 3)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['sourceType']) && ($this->container['sourceType'] < 1)) {
                $invalidProperties[] = "invalid value for 'sourceType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) > 16)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 24)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productFeature']) && (mb_strlen($this->container['productFeature']) > 24)) {
                $invalidProperties[] = "invalid value for 'productFeature', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['productFeature']) && (mb_strlen($this->container['productFeature']) < 0)) {
                $invalidProperties[] = "invalid value for 'productFeature', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productModule']) && (mb_strlen($this->container['productModule']) > 1024)) {
                $invalidProperties[] = "invalid value for 'productModule', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['productModule']) && (mb_strlen($this->container['productModule']) < 0)) {
                $invalidProperties[] = "invalid value for 'productModule', the character length must be bigger than or equal to 0.";
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
    * Gets sourceType
    *  数据源类型，取值范围如下： 1 - 云上产品 2 - 第三方产品 3 - 租户私有产品
    *
    * @return int|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param int|null $sourceType 数据源类型，取值范围如下： 1 - 云上产品 2 - 第三方产品 3 - 租户私有产品
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets domainId
    *  数据源产品所属账号的id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 数据源产品所属账号的id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  数据源产品所属项目的id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 数据源产品所属项目的id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets regionId
    *  数据源产品所在区域，具体取值范围查看云地区和终端节点定义
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 数据源产品所在区域，具体取值范围查看云地区和终端节点定义
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets companyName
    *  数据源产品所属公司的名称
    *
    * @return string|null
    */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
    * Sets companyName
    *
    * @param string|null $companyName 数据源产品所属公司的名称
    *
    * @return $this
    */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;
        return $this;
    }

    /**
    * Gets productName
    *  数据源产品的名称
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 数据源产品的名称
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets productFeature
    *  产品功能特性名称，用来指明检测到当前事件的产品的功能特性
    *
    * @return string|null
    */
    public function getProductFeature()
    {
        return $this->container['productFeature'];
    }

    /**
    * Sets productFeature
    *
    * @param string|null $productFeature 产品功能特性名称，用来指明检测到当前事件的产品的功能特性
    *
    * @return $this
    */
    public function setProductFeature($productFeature)
    {
        $this->container['productFeature'] = $productFeature;
        return $this;
    }

    /**
    * Gets productModule
    *  检测模块列表
    *
    * @return string|null
    */
    public function getProductModule()
    {
        return $this->container['productModule'];
    }

    /**
    * Sets productModule
    *
    * @param string|null $productModule 检测模块列表
    *
    * @return $this
    */
    public function setProductModule($productModule)
    {
        $this->container['productModule'] = $productModule;
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

