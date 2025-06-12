<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductPostPaid implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductPostPaid';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系
    * productId  产品Id，通过向CBC询价获取该商品的标识
    * cloudServiceType  云服务类型，固定值为hws.service.type.sa
    * resourceType  用户购买云服务产品的资源类型，例如SecMaster中的典型场景配置，资源类型为hws.resource.type.secmaster.typical
    * resourceSpecCode  用户购买云服务产品的资源规格，例如安全云脑中的基础版，资源规格为secmaster.basic
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用）
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时
    * resourceSize  配额个数
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： 典型场景配置：Duration 态势管理：duration 安全编排：count 智能分析：flow
    * resourceId  资源id，仅在增加配额的时候传入
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'productId' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'usageMeasureId' => 'int',
            'usageValue' => 'float',
            'resourceSize' => 'int',
            'usageFactor' => 'string',
            'resourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系
    * productId  产品Id，通过向CBC询价获取该商品的标识
    * cloudServiceType  云服务类型，固定值为hws.service.type.sa
    * resourceType  用户购买云服务产品的资源类型，例如SecMaster中的典型场景配置，资源类型为hws.resource.type.secmaster.typical
    * resourceSpecCode  用户购买云服务产品的资源规格，例如安全云脑中的基础版，资源规格为secmaster.basic
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用）
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时
    * resourceSize  配额个数
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： 典型场景配置：Duration 态势管理：duration 安全编排：count 智能分析：flow
    * resourceId  资源id，仅在增加配额的时候传入
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'productId' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'usageMeasureId' => 'int32',
        'usageValue' => null,
        'resourceSize' => null,
        'usageFactor' => null,
        'resourceId' => null
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
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系
    * productId  产品Id，通过向CBC询价获取该商品的标识
    * cloudServiceType  云服务类型，固定值为hws.service.type.sa
    * resourceType  用户购买云服务产品的资源类型，例如SecMaster中的典型场景配置，资源类型为hws.resource.type.secmaster.typical
    * resourceSpecCode  用户购买云服务产品的资源规格，例如安全云脑中的基础版，资源规格为secmaster.basic
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用）
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时
    * resourceSize  配额个数
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： 典型场景配置：Duration 态势管理：duration 安全编排：count 智能分析：flow
    * resourceId  资源id，仅在增加配额的时候传入
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'productId' => 'product_id',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'usageMeasureId' => 'usage_measure_id',
            'usageValue' => 'usage_value',
            'resourceSize' => 'resource_size',
            'usageFactor' => 'usage_factor',
            'resourceId' => 'resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系
    * productId  产品Id，通过向CBC询价获取该商品的标识
    * cloudServiceType  云服务类型，固定值为hws.service.type.sa
    * resourceType  用户购买云服务产品的资源类型，例如SecMaster中的典型场景配置，资源类型为hws.resource.type.secmaster.typical
    * resourceSpecCode  用户购买云服务产品的资源规格，例如安全云脑中的基础版，资源规格为secmaster.basic
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用）
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时
    * resourceSize  配额个数
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： 典型场景配置：Duration 态势管理：duration 安全编排：count 智能分析：flow
    * resourceId  资源id，仅在增加配额的时候传入
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'productId' => 'setProductId',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'usageMeasureId' => 'setUsageMeasureId',
            'usageValue' => 'setUsageValue',
            'resourceSize' => 'setResourceSize',
            'usageFactor' => 'setUsageFactor',
            'resourceId' => 'setResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系
    * productId  产品Id，通过向CBC询价获取该商品的标识
    * cloudServiceType  云服务类型，固定值为hws.service.type.sa
    * resourceType  用户购买云服务产品的资源类型，例如SecMaster中的典型场景配置，资源类型为hws.resource.type.secmaster.typical
    * resourceSpecCode  用户购买云服务产品的资源规格，例如安全云脑中的基础版，资源规格为secmaster.basic
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用）
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时
    * resourceSize  配额个数
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： 典型场景配置：Duration 态势管理：duration 安全编排：count 智能分析：flow
    * resourceId  资源id，仅在增加配额的时候传入
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'productId' => 'getProductId',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'usageMeasureId' => 'getUsageMeasureId',
            'usageValue' => 'getUsageValue',
            'resourceSize' => 'getResourceSize',
            'usageFactor' => 'getUsageFactor',
            'resourceId' => 'getResourceId'
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
    const USAGE_MEASURE_ID_4 = 4;
    const USAGE_MEASURE_ID_10 = 10;
    const USAGE_MEASURE_ID_11 = 11;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUsageMeasureIdAllowableValues()
    {
        return [
            self::USAGE_MEASURE_ID_4,
            self::USAGE_MEASURE_ID_10,
            self::USAGE_MEASURE_ID_11,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['usageMeasureId'] = isset($data['usageMeasureId']) ? $data['usageMeasureId'] : null;
        $this->container['usageValue'] = isset($data['usageValue']) ? $data['usageValue'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['usageFactor'] = isset($data['usageFactor']) ? $data['usageFactor'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 2)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
            if ((mb_strlen($this->container['productId']) > 64)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['productId']) < 2)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
            if ((mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['cloudServiceType']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceType']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceSpecCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['usageMeasureId'] === null) {
            $invalidProperties[] = "'usageMeasureId' can't be null";
        }
            $allowedValues = $this->getUsageMeasureIdAllowableValues();
                if (!is_null($this->container['usageMeasureId']) && !in_array($this->container['usageMeasureId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'usageMeasureId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (($this->container['usageMeasureId'] > 20)) {
                $invalidProperties[] = "invalid value for 'usageMeasureId', must be smaller than or equal to 20.";
            }
            if (($this->container['usageMeasureId'] < 1)) {
                $invalidProperties[] = "invalid value for 'usageMeasureId', must be bigger than or equal to 1.";
            }
        if ($this->container['usageValue'] === null) {
            $invalidProperties[] = "'usageValue' can't be null";
        }
            if (($this->container['usageValue'] > 1)) {
                $invalidProperties[] = "invalid value for 'usageValue', must be smaller than or equal to 1.";
            }
            if (($this->container['usageValue'] < 1)) {
                $invalidProperties[] = "invalid value for 'usageValue', must be bigger than or equal to 1.";
            }
        if ($this->container['resourceSize'] === null) {
            $invalidProperties[] = "'resourceSize' can't be null";
        }
            if (($this->container['resourceSize'] > 9999)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be smaller than or equal to 9999.";
            }
            if (($this->container['resourceSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be bigger than or equal to 1.";
            }
        if ($this->container['usageFactor'] === null) {
            $invalidProperties[] = "'usageFactor' can't be null";
        }
            if ((mb_strlen($this->container['usageFactor']) > 10)) {
                $invalidProperties[] = "invalid value for 'usageFactor', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['usageFactor']) < 4)) {
                $invalidProperties[] = "invalid value for 'usageFactor', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 2.";
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
    * Gets id
    *  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets productId
    *  产品Id，通过向CBC询价获取该商品的标识
    *
    * @return string
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string $productId 产品Id，通过向CBC询价获取该商品的标识
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型，固定值为hws.service.type.sa
    *
    * @return string
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string $cloudServiceType 云服务类型，固定值为hws.service.type.sa
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  用户购买云服务产品的资源类型，例如SecMaster中的典型场景配置，资源类型为hws.resource.type.secmaster.typical
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 用户购买云服务产品的资源类型，例如SecMaster中的典型场景配置，资源类型为hws.resource.type.secmaster.typical
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  用户购买云服务产品的资源规格，例如安全云脑中的基础版，资源规格为secmaster.basic
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
    * @param string $resourceSpecCode 用户购买云服务产品的资源规格，例如安全云脑中的基础版，资源规格为secmaster.basic
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets usageMeasureId
    *  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用）
    *
    * @return int
    */
    public function getUsageMeasureId()
    {
        return $this->container['usageMeasureId'];
    }

    /**
    * Sets usageMeasureId
    *
    * @param int $usageMeasureId 使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用）
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
    *  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时
    *
    * @return float
    */
    public function getUsageValue()
    {
        return $this->container['usageValue'];
    }

    /**
    * Sets usageValue
    *
    * @param float $usageValue 使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时
    *
    * @return $this
    */
    public function setUsageValue($usageValue)
    {
        $this->container['usageValue'] = $usageValue;
        return $this;
    }

    /**
    * Gets resourceSize
    *  配额个数
    *
    * @return int
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int $resourceSize 配额个数
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets usageFactor
    *  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： 典型场景配置：Duration 态势管理：duration 安全编排：count 智能分析：flow
    *
    * @return string
    */
    public function getUsageFactor()
    {
        return $this->container['usageFactor'];
    }

    /**
    * Sets usageFactor
    *
    * @param string $usageFactor 使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： 典型场景配置：Duration 态势管理：duration 安全编排：count 智能分析：flow
    *
    * @return $this
    */
    public function setUsageFactor($usageFactor)
    {
        $this->container['usageFactor'] = $usageFactor;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id，仅在增加配额的时候传入
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源id，仅在增加配额的时候传入
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
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

