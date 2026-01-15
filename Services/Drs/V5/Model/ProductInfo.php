<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

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
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  用户购买云服务产品的云服务类型，例如EC2，云服务类型为hws.service.type.ec2。 取值：hws.service.type.drs
    * resourceType  用户购买云服务产品的资源类型，例如EC2中的VM，资源类型为hws.resource.type.vm。 hws.resource.type.drs.instance：instance（实例） hws.resource.type.drs.vm：vm（虚机） hws.resource.type.drs.volume：volume（磁盘） dbs.instanceName：instanceName（实例名称--适配DT） hws.resource.type.drs.flow：flow（DRS流量费） dbs.tag：tag（用户标签） dbs.enterpriseProjectId：enterpriseProjectId（企业项目）
    * resourceSpecCode  用户购买云服务产品的资源规格，例如VM的小型规格，资源规格为m1.tiny。
    * resourceSize  资源容量度量标识。
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： - Duration：云服务器 - flow：流量
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。 - 4：小时 - 10：GB - 11：MB - 13：Byte - 17：FLOW_GB
    * resourceSizeMeasureId  资源容量大小，例如购买的卷大小或带宽大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'resourceSize' => 'int',
            'usageFactor' => 'string',
            'usageValue' => 'double',
            'usageMeasureId' => 'int',
            'resourceSizeMeasureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  用户购买云服务产品的云服务类型，例如EC2，云服务类型为hws.service.type.ec2。 取值：hws.service.type.drs
    * resourceType  用户购买云服务产品的资源类型，例如EC2中的VM，资源类型为hws.resource.type.vm。 hws.resource.type.drs.instance：instance（实例） hws.resource.type.drs.vm：vm（虚机） hws.resource.type.drs.volume：volume（磁盘） dbs.instanceName：instanceName（实例名称--适配DT） hws.resource.type.drs.flow：flow（DRS流量费） dbs.tag：tag（用户标签） dbs.enterpriseProjectId：enterpriseProjectId（企业项目）
    * resourceSpecCode  用户购买云服务产品的资源规格，例如VM的小型规格，资源规格为m1.tiny。
    * resourceSize  资源容量度量标识。
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： - Duration：云服务器 - flow：流量
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。 - 4：小时 - 10：GB - 11：MB - 13：Byte - 17：FLOW_GB
    * resourceSizeMeasureId  资源容量大小，例如购买的卷大小或带宽大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'resourceSize' => 'int32',
        'usageFactor' => null,
        'usageValue' => 'double',
        'usageMeasureId' => 'int32',
        'resourceSizeMeasureId' => 'int32'
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
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  用户购买云服务产品的云服务类型，例如EC2，云服务类型为hws.service.type.ec2。 取值：hws.service.type.drs
    * resourceType  用户购买云服务产品的资源类型，例如EC2中的VM，资源类型为hws.resource.type.vm。 hws.resource.type.drs.instance：instance（实例） hws.resource.type.drs.vm：vm（虚机） hws.resource.type.drs.volume：volume（磁盘） dbs.instanceName：instanceName（实例名称--适配DT） hws.resource.type.drs.flow：flow（DRS流量费） dbs.tag：tag（用户标签） dbs.enterpriseProjectId：enterpriseProjectId（企业项目）
    * resourceSpecCode  用户购买云服务产品的资源规格，例如VM的小型规格，资源规格为m1.tiny。
    * resourceSize  资源容量度量标识。
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： - Duration：云服务器 - flow：流量
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。 - 4：小时 - 10：GB - 11：MB - 13：Byte - 17：FLOW_GB
    * resourceSizeMeasureId  资源容量大小，例如购买的卷大小或带宽大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'resourceSize' => 'resource_size',
            'usageFactor' => 'usage_factor',
            'usageValue' => 'usage_value',
            'usageMeasureId' => 'usage_measure_id',
            'resourceSizeMeasureId' => 'resource_size_measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  用户购买云服务产品的云服务类型，例如EC2，云服务类型为hws.service.type.ec2。 取值：hws.service.type.drs
    * resourceType  用户购买云服务产品的资源类型，例如EC2中的VM，资源类型为hws.resource.type.vm。 hws.resource.type.drs.instance：instance（实例） hws.resource.type.drs.vm：vm（虚机） hws.resource.type.drs.volume：volume（磁盘） dbs.instanceName：instanceName（实例名称--适配DT） hws.resource.type.drs.flow：flow（DRS流量费） dbs.tag：tag（用户标签） dbs.enterpriseProjectId：enterpriseProjectId（企业项目）
    * resourceSpecCode  用户购买云服务产品的资源规格，例如VM的小型规格，资源规格为m1.tiny。
    * resourceSize  资源容量度量标识。
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： - Duration：云服务器 - flow：流量
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。 - 4：小时 - 10：GB - 11：MB - 13：Byte - 17：FLOW_GB
    * resourceSizeMeasureId  资源容量大小，例如购买的卷大小或带宽大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceSize' => 'setResourceSize',
            'usageFactor' => 'setUsageFactor',
            'usageValue' => 'setUsageValue',
            'usageMeasureId' => 'setUsageMeasureId',
            'resourceSizeMeasureId' => 'setResourceSizeMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  用户购买云服务产品的云服务类型，例如EC2，云服务类型为hws.service.type.ec2。 取值：hws.service.type.drs
    * resourceType  用户购买云服务产品的资源类型，例如EC2中的VM，资源类型为hws.resource.type.vm。 hws.resource.type.drs.instance：instance（实例） hws.resource.type.drs.vm：vm（虚机） hws.resource.type.drs.volume：volume（磁盘） dbs.instanceName：instanceName（实例名称--适配DT） hws.resource.type.drs.flow：flow（DRS流量费） dbs.tag：tag（用户标签） dbs.enterpriseProjectId：enterpriseProjectId（企业项目）
    * resourceSpecCode  用户购买云服务产品的资源规格，例如VM的小型规格，资源规格为m1.tiny。
    * resourceSize  资源容量度量标识。
    * usageFactor  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： - Duration：云服务器 - flow：流量
    * usageValue  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。 - 4：小时 - 10：GB - 11：MB - 13：Byte - 17：FLOW_GB
    * resourceSizeMeasureId  资源容量大小，例如购买的卷大小或带宽大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceSize' => 'getResourceSize',
            'usageFactor' => 'getUsageFactor',
            'usageValue' => 'getUsageValue',
            'usageMeasureId' => 'getUsageMeasureId',
            'resourceSizeMeasureId' => 'getResourceSizeMeasureId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['usageFactor'] = isset($data['usageFactor']) ? $data['usageFactor'] : null;
        $this->container['usageValue'] = isset($data['usageValue']) ? $data['usageValue'] : null;
        $this->container['usageMeasureId'] = isset($data['usageMeasureId']) ? $data['usageMeasureId'] : null;
        $this->container['resourceSizeMeasureId'] = isset($data['resourceSizeMeasureId']) ? $data['resourceSizeMeasureId'] : null;
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
    * Gets id
    *  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  用户购买云服务产品的云服务类型，例如EC2，云服务类型为hws.service.type.ec2。 取值：hws.service.type.drs
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
    * @param string|null $cloudServiceType 用户购买云服务产品的云服务类型，例如EC2，云服务类型为hws.service.type.ec2。 取值：hws.service.type.drs
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
    *  用户购买云服务产品的资源类型，例如EC2中的VM，资源类型为hws.resource.type.vm。 hws.resource.type.drs.instance：instance（实例） hws.resource.type.drs.vm：vm（虚机） hws.resource.type.drs.volume：volume（磁盘） dbs.instanceName：instanceName（实例名称--适配DT） hws.resource.type.drs.flow：flow（DRS流量费） dbs.tag：tag（用户标签） dbs.enterpriseProjectId：enterpriseProjectId（企业项目）
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
    * @param string|null $resourceType 用户购买云服务产品的资源类型，例如EC2中的VM，资源类型为hws.resource.type.vm。 hws.resource.type.drs.instance：instance（实例） hws.resource.type.drs.vm：vm（虚机） hws.resource.type.drs.volume：volume（磁盘） dbs.instanceName：instanceName（实例名称--适配DT） hws.resource.type.drs.flow：flow（DRS流量费） dbs.tag：tag（用户标签） dbs.enterpriseProjectId：enterpriseProjectId（企业项目）
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
    *  用户购买云服务产品的资源规格，例如VM的小型规格，资源规格为m1.tiny。
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
    * @param string|null $resourceSpecCode 用户购买云服务产品的资源规格，例如VM的小型规格，资源规格为m1.tiny。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceSize
    *  资源容量度量标识。
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
    * @param int|null $resourceSize 资源容量度量标识。
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
    *  使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： - Duration：云服务器 - flow：流量
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
    * @param string|null $usageFactor 使用量因子，按需计费必填，取值和话单中的使用量因子一致，云服务和使用量因子对应关系如下： - Duration：云服务器 - flow：流量
    *
    * @return $this
    */
    public function setUsageFactor($usageFactor)
    {
        $this->container['usageFactor'] = $usageFactor;
        return $this;
    }

    /**
    * Gets usageValue
    *  使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。
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
    * @param double|null $usageValue 使用量值，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。
    *
    * @return $this
    */
    public function setUsageValue($usageValue)
    {
        $this->container['usageValue'] = $usageValue;
        return $this;
    }

    /**
    * Gets usageMeasureId
    *  使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。 - 4：小时 - 10：GB - 11：MB - 13：Byte - 17：FLOW_GB
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
    * @param int|null $usageMeasureId 使用量单位标识，按需询价必填，例如按小时询价，使用量值为1，使用量单位为小时。 - 4：小时 - 10：GB - 11：MB - 13：Byte - 17：FLOW_GB
    *
    * @return $this
    */
    public function setUsageMeasureId($usageMeasureId)
    {
        $this->container['usageMeasureId'] = $usageMeasureId;
        return $this;
    }

    /**
    * Gets resourceSizeMeasureId
    *  资源容量大小，例如购买的卷大小或带宽大小。
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
    * @param int|null $resourceSizeMeasureId 资源容量大小，例如购买的卷大小或带宽大小。
    *
    * @return $this
    */
    public function setResourceSizeMeasureId($resourceSizeMeasureId)
    {
        $this->container['resourceSizeMeasureId'] = $resourceSizeMeasureId;
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

