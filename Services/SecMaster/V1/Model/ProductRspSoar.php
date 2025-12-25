<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductRspSoar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductRsp_soar';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceType  云服务产品的主服务类型，云脑默认为：hws.service.type.sa
    * resourceType  资源类型编码
    * resourceSpecCode  资源规格编码
    * resourceSizeMeasureId  资源容量度量标识
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下: 云脑目前支持有： duration： 时间，主要针对主版本(basic、standard、professional) count：次数，主要针对安全编排 flow：流量，主要针对日志分析和采集 retention：保留，主要针对日志保留
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用） 13：Byte（带宽按流量询价使用）
    * regionId  当前region编码，默认为null，即为当前region
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'resourceSizeMeasureId' => 'int',
            'usageFactor' => 'string',
            'usageMeasureId' => 'int',
            'regionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceType  云服务产品的主服务类型，云脑默认为：hws.service.type.sa
    * resourceType  资源类型编码
    * resourceSpecCode  资源规格编码
    * resourceSizeMeasureId  资源容量度量标识
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下: 云脑目前支持有： duration： 时间，主要针对主版本(basic、standard、professional) count：次数，主要针对安全编排 flow：流量，主要针对日志分析和采集 retention：保留，主要针对日志保留
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用） 13：Byte（带宽按流量询价使用）
    * regionId  当前region编码，默认为null，即为当前region
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'resourceSizeMeasureId' => 'int32',
        'usageFactor' => null,
        'usageMeasureId' => 'int32',
        'regionId' => null
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
    * cloudServiceType  云服务产品的主服务类型，云脑默认为：hws.service.type.sa
    * resourceType  资源类型编码
    * resourceSpecCode  资源规格编码
    * resourceSizeMeasureId  资源容量度量标识
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下: 云脑目前支持有： duration： 时间，主要针对主版本(basic、standard、professional) count：次数，主要针对安全编排 flow：流量，主要针对日志分析和采集 retention：保留，主要针对日志保留
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用） 13：Byte（带宽按流量询价使用）
    * regionId  当前region编码，默认为null，即为当前region
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'resourceSizeMeasureId' => 'resource_size_measure_id',
            'usageFactor' => 'usage_factor',
            'usageMeasureId' => 'usage_measure_id',
            'regionId' => 'region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceType  云服务产品的主服务类型，云脑默认为：hws.service.type.sa
    * resourceType  资源类型编码
    * resourceSpecCode  资源规格编码
    * resourceSizeMeasureId  资源容量度量标识
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下: 云脑目前支持有： duration： 时间，主要针对主版本(basic、standard、professional) count：次数，主要针对安全编排 flow：流量，主要针对日志分析和采集 retention：保留，主要针对日志保留
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用） 13：Byte（带宽按流量询价使用）
    * regionId  当前region编码，默认为null，即为当前region
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceSizeMeasureId' => 'setResourceSizeMeasureId',
            'usageFactor' => 'setUsageFactor',
            'usageMeasureId' => 'setUsageMeasureId',
            'regionId' => 'setRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceType  云服务产品的主服务类型，云脑默认为：hws.service.type.sa
    * resourceType  资源类型编码
    * resourceSpecCode  资源规格编码
    * resourceSizeMeasureId  资源容量度量标识
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下: 云脑目前支持有： duration： 时间，主要针对主版本(basic、standard、professional) count：次数，主要针对安全编排 flow：流量，主要针对日志分析和采集 retention：保留，主要针对日志保留
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用） 13：Byte（带宽按流量询价使用）
    * regionId  当前region编码，默认为null，即为当前region
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceSizeMeasureId' => 'getResourceSizeMeasureId',
            'usageFactor' => 'getUsageFactor',
            'usageMeasureId' => 'getUsageMeasureId',
            'regionId' => 'getRegionId'
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceSizeMeasureId'] = isset($data['resourceSizeMeasureId']) ? $data['resourceSizeMeasureId'] : null;
        $this->container['usageFactor'] = isset($data['usageFactor']) ? $data['usageFactor'] : null;
        $this->container['usageMeasureId'] = isset($data['usageMeasureId']) ? $data['usageMeasureId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 10)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 10)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 4)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['resourceSizeMeasureId']) && ($this->container['resourceSizeMeasureId'] > 20)) {
                $invalidProperties[] = "invalid value for 'resourceSizeMeasureId', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['resourceSizeMeasureId']) && ($this->container['resourceSizeMeasureId'] < 4)) {
                $invalidProperties[] = "invalid value for 'resourceSizeMeasureId', must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['usageFactor']) && (mb_strlen($this->container['usageFactor']) > 32)) {
                $invalidProperties[] = "invalid value for 'usageFactor', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['usageFactor']) && (mb_strlen($this->container['usageFactor']) < 4)) {
                $invalidProperties[] = "invalid value for 'usageFactor', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['usageMeasureId']) && ($this->container['usageMeasureId'] > 20)) {
                $invalidProperties[] = "invalid value for 'usageMeasureId', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['usageMeasureId']) && ($this->container['usageMeasureId'] < 4)) {
                $invalidProperties[] = "invalid value for 'usageMeasureId', must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 4)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 4.";
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
    *  云服务产品的主服务类型，云脑默认为：hws.service.type.sa
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
    * @param string|null $cloudServiceType 云服务产品的主服务类型，云脑默认为：hws.service.type.sa
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
    * Gets resourceSpecCode
    *  资源规格编码
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
    * @param string|null $resourceSpecCode 资源规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceSizeMeasureId
    *  资源容量度量标识
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
    * @param int|null $resourceSizeMeasureId 资源容量度量标识
    *
    * @return $this
    */
    public function setResourceSizeMeasureId($resourceSizeMeasureId)
    {
        $this->container['resourceSizeMeasureId'] = $resourceSizeMeasureId;
        return $this;
    }

    /**
    * Gets usageFactor
    *  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下: 云脑目前支持有： duration： 时间，主要针对主版本(basic、standard、professional) count：次数，主要针对安全编排 flow：流量，主要针对日志分析和采集 retention：保留，主要针对日志保留
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
    * @param string|null $usageFactor 使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下: 云脑目前支持有： duration： 时间，主要针对主版本(basic、standard、professional) count：次数，主要针对安全编排 flow：流量，主要针对日志分析和采集 retention：保留，主要针对日志保留
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
    *  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用） 13：Byte（带宽按流量询价使用）
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
    * @param int|null $usageMeasureId 使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下： 4：小时 10：GB（带宽按流量询价使用） 11：MB（带宽按流量询价使用） 13：Byte（带宽按流量询价使用）
    *
    * @return $this
    */
    public function setUsageMeasureId($usageMeasureId)
    {
        $this->container['usageMeasureId'] = $usageMeasureId;
        return $this;
    }

    /**
    * Gets regionId
    *  当前region编码，默认为null，即为当前region
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
    * @param string|null $regionId 当前region编码，默认为null，即为当前region
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
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

