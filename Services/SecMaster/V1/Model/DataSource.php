<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  数据源类型，取值范围如下： 1 - 系统 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属管理账号的ID，最大36个字符。
    * projectId  数据源产品所属项目的ID，最大36个字符。
    * regionId  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'domainId' => 'string',
            'projectId' => 'string',
            'regionId' => 'string',
            'companyName' => 'string',
            'productName' => 'string',
            'productFeature' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  数据源类型，取值范围如下： 1 - 系统 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属管理账号的ID，最大36个字符。
    * projectId  数据源产品所属项目的ID，最大36个字符。
    * regionId  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'domainId' => null,
        'projectId' => null,
        'regionId' => null,
        'companyName' => null,
        'productName' => null,
        'productFeature' => null
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
    * type  数据源类型，取值范围如下： 1 - 系统 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属管理账号的ID，最大36个字符。
    * projectId  数据源产品所属项目的ID，最大36个字符。
    * regionId  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'companyName' => 'company_name',
            'productName' => 'product_name',
            'productFeature' => 'product_feature'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  数据源类型，取值范围如下： 1 - 系统 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属管理账号的ID，最大36个字符。
    * projectId  数据源产品所属项目的ID，最大36个字符。
    * regionId  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'companyName' => 'setCompanyName',
            'productName' => 'setProductName',
            'productFeature' => 'setProductFeature'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  数据源类型，取值范围如下： 1 - 系统 2 - 第三方产品 3 - 租户私有产品
    * domainId  数据源产品所属管理账号的ID，最大36个字符。
    * projectId  数据源产品所属项目的ID，最大36个字符。
    * regionId  数据源产品所在区域。
    * companyName  数据源产品所属公司的名称。
    * productName  数据源产品的名称。
    * productFeature  产品功能特性名称，用来指明检测到当前事件的产品的功能特性。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
            'companyName' => 'getCompanyName',
            'productName' => 'getProductName',
            'productFeature' => 'getProductFeature'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productFeature'] = isset($data['productFeature']) ? $data['productFeature'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && ($this->container['type'] > 3)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 1)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 512)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['companyName'] === null) {
            $invalidProperties[] = "'companyName' can't be null";
        }
            if ((mb_strlen($this->container['companyName']) > 512)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['companyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['productName'] === null) {
            $invalidProperties[] = "'productName' can't be null";
        }
            if ((mb_strlen($this->container['productName']) > 512)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['productName']) < 1)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productFeature']) && (mb_strlen($this->container['productFeature']) > 512)) {
                $invalidProperties[] = "invalid value for 'productFeature', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['productFeature']) && (mb_strlen($this->container['productFeature']) < 1)) {
                $invalidProperties[] = "invalid value for 'productFeature', the character length must be bigger than or equal to 1.";
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
    * Gets type
    *  数据源类型，取值范围如下： 1 - 系统 2 - 第三方产品 3 - 租户私有产品
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 数据源类型，取值范围如下： 1 - 系统 2 - 第三方产品 3 - 租户私有产品
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets domainId
    *  数据源产品所属管理账号的ID，最大36个字符。
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
    * @param string|null $domainId 数据源产品所属管理账号的ID，最大36个字符。
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
    *  数据源产品所属项目的ID，最大36个字符。
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
    * @param string|null $projectId 数据源产品所属项目的ID，最大36个字符。
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
    *  数据源产品所在区域。
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
    * @param string|null $regionId 数据源产品所在区域。
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
    *  数据源产品所属公司的名称。
    *
    * @return string
    */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
    * Sets companyName
    *
    * @param string $companyName 数据源产品所属公司的名称。
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
    *  数据源产品的名称。
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
    * @param string $productName 数据源产品的名称。
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
    *  产品功能特性名称，用来指明检测到当前事件的产品的功能特性。
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
    * @param string|null $productFeature 产品功能特性名称，用来指明检测到当前事件的产品的功能特性。
    *
    * @return $this
    */
    public function setProductFeature($productFeature)
    {
        $this->container['productFeature'] = $productFeature;
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

