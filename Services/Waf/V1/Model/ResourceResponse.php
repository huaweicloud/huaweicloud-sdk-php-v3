<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  **参数解释：** 资源id **取值范围：** 不涉及
    * cloudServiceType  **参数解释：** 云服务产品对应的云服务类型 **取值范围：** 不涉及
    * resourceType  **参数解释：** 云服务产品的资源类型 **取值范围：**  - hws.resource.type.waf：云模式包周期WAF  - hws.resource.type.waf.domain：云模式包周期WAF域名扩展包  - hws.resource.type.waf.bandwidth：云模式包周期WAF带宽扩展包  - hws.resource.type.waf.rule：云模式包周期WAF规则扩展包  - hws.resource.type.waf.payperuserequest：Web应用防火墙按需请求   - hws.resource.type.waf.payperusedomain：Web应用防火墙按需域名  - hws.resource.type.waf.payperuserule：Web应用防火墙按需规则
    * resourceSpecCode  **参数解释：** 云服务产品的资源规格 **取值范围：** 不涉及
    * status  **参数解释：** 资源状态 **取值范围：**  - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  **参数解释：** 资源到期时间 **取值范围：** 不涉及
    * resourceSize  **参数解释：** 资源数量 **取值范围：** 不涉及
    * timestamp  **参数解释：** 资源创建时间 **取值范围：** 不涉及
    * relativeType  **参数解释：** 当资源项为附属资源(域名扩展包/带宽扩展包/规则扩展包/高阶功能扩展包),描述附属资源与主资源的关系 **取值范围：**  - 0：附属资源与主资源为挂载关系  - 1：附属资源与主资源为绑定关系  - 2：从属关系
    * region  **参数解释：** 华为云区域ID,资源所属的区域id **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'status' => 'int',
            'expireTime' => 'string',
            'resourceSize' => 'int',
            'timestamp' => 'int',
            'relativeType' => 'int',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  **参数解释：** 资源id **取值范围：** 不涉及
    * cloudServiceType  **参数解释：** 云服务产品对应的云服务类型 **取值范围：** 不涉及
    * resourceType  **参数解释：** 云服务产品的资源类型 **取值范围：**  - hws.resource.type.waf：云模式包周期WAF  - hws.resource.type.waf.domain：云模式包周期WAF域名扩展包  - hws.resource.type.waf.bandwidth：云模式包周期WAF带宽扩展包  - hws.resource.type.waf.rule：云模式包周期WAF规则扩展包  - hws.resource.type.waf.payperuserequest：Web应用防火墙按需请求   - hws.resource.type.waf.payperusedomain：Web应用防火墙按需域名  - hws.resource.type.waf.payperuserule：Web应用防火墙按需规则
    * resourceSpecCode  **参数解释：** 云服务产品的资源规格 **取值范围：** 不涉及
    * status  **参数解释：** 资源状态 **取值范围：**  - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  **参数解释：** 资源到期时间 **取值范围：** 不涉及
    * resourceSize  **参数解释：** 资源数量 **取值范围：** 不涉及
    * timestamp  **参数解释：** 资源创建时间 **取值范围：** 不涉及
    * relativeType  **参数解释：** 当资源项为附属资源(域名扩展包/带宽扩展包/规则扩展包/高阶功能扩展包),描述附属资源与主资源的关系 **取值范围：**  - 0：附属资源与主资源为挂载关系  - 1：附属资源与主资源为绑定关系  - 2：从属关系
    * region  **参数解释：** 华为云区域ID,资源所属的区域id **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'status' => null,
        'expireTime' => null,
        'resourceSize' => null,
        'timestamp' => 'int64',
        'relativeType' => null,
        'region' => null
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
    * resourceId  **参数解释：** 资源id **取值范围：** 不涉及
    * cloudServiceType  **参数解释：** 云服务产品对应的云服务类型 **取值范围：** 不涉及
    * resourceType  **参数解释：** 云服务产品的资源类型 **取值范围：**  - hws.resource.type.waf：云模式包周期WAF  - hws.resource.type.waf.domain：云模式包周期WAF域名扩展包  - hws.resource.type.waf.bandwidth：云模式包周期WAF带宽扩展包  - hws.resource.type.waf.rule：云模式包周期WAF规则扩展包  - hws.resource.type.waf.payperuserequest：Web应用防火墙按需请求   - hws.resource.type.waf.payperusedomain：Web应用防火墙按需域名  - hws.resource.type.waf.payperuserule：Web应用防火墙按需规则
    * resourceSpecCode  **参数解释：** 云服务产品的资源规格 **取值范围：** 不涉及
    * status  **参数解释：** 资源状态 **取值范围：**  - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  **参数解释：** 资源到期时间 **取值范围：** 不涉及
    * resourceSize  **参数解释：** 资源数量 **取值范围：** 不涉及
    * timestamp  **参数解释：** 资源创建时间 **取值范围：** 不涉及
    * relativeType  **参数解释：** 当资源项为附属资源(域名扩展包/带宽扩展包/规则扩展包/高阶功能扩展包),描述附属资源与主资源的关系 **取值范围：**  - 0：附属资源与主资源为挂载关系  - 1：附属资源与主资源为绑定关系  - 2：从属关系
    * region  **参数解释：** 华为云区域ID,资源所属的区域id **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resourceId',
            'cloudServiceType' => 'cloudServiceType',
            'resourceType' => 'resourceType',
            'resourceSpecCode' => 'resourceSpecCode',
            'status' => 'status',
            'expireTime' => 'expireTime',
            'resourceSize' => 'resourceSize',
            'timestamp' => 'timestamp',
            'relativeType' => 'relativeType',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  **参数解释：** 资源id **取值范围：** 不涉及
    * cloudServiceType  **参数解释：** 云服务产品对应的云服务类型 **取值范围：** 不涉及
    * resourceType  **参数解释：** 云服务产品的资源类型 **取值范围：**  - hws.resource.type.waf：云模式包周期WAF  - hws.resource.type.waf.domain：云模式包周期WAF域名扩展包  - hws.resource.type.waf.bandwidth：云模式包周期WAF带宽扩展包  - hws.resource.type.waf.rule：云模式包周期WAF规则扩展包  - hws.resource.type.waf.payperuserequest：Web应用防火墙按需请求   - hws.resource.type.waf.payperusedomain：Web应用防火墙按需域名  - hws.resource.type.waf.payperuserule：Web应用防火墙按需规则
    * resourceSpecCode  **参数解释：** 云服务产品的资源规格 **取值范围：** 不涉及
    * status  **参数解释：** 资源状态 **取值范围：**  - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  **参数解释：** 资源到期时间 **取值范围：** 不涉及
    * resourceSize  **参数解释：** 资源数量 **取值范围：** 不涉及
    * timestamp  **参数解释：** 资源创建时间 **取值范围：** 不涉及
    * relativeType  **参数解释：** 当资源项为附属资源(域名扩展包/带宽扩展包/规则扩展包/高阶功能扩展包),描述附属资源与主资源的关系 **取值范围：**  - 0：附属资源与主资源为挂载关系  - 1：附属资源与主资源为绑定关系  - 2：从属关系
    * region  **参数解释：** 华为云区域ID,资源所属的区域id **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'status' => 'setStatus',
            'expireTime' => 'setExpireTime',
            'resourceSize' => 'setResourceSize',
            'timestamp' => 'setTimestamp',
            'relativeType' => 'setRelativeType',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  **参数解释：** 资源id **取值范围：** 不涉及
    * cloudServiceType  **参数解释：** 云服务产品对应的云服务类型 **取值范围：** 不涉及
    * resourceType  **参数解释：** 云服务产品的资源类型 **取值范围：**  - hws.resource.type.waf：云模式包周期WAF  - hws.resource.type.waf.domain：云模式包周期WAF域名扩展包  - hws.resource.type.waf.bandwidth：云模式包周期WAF带宽扩展包  - hws.resource.type.waf.rule：云模式包周期WAF规则扩展包  - hws.resource.type.waf.payperuserequest：Web应用防火墙按需请求   - hws.resource.type.waf.payperusedomain：Web应用防火墙按需域名  - hws.resource.type.waf.payperuserule：Web应用防火墙按需规则
    * resourceSpecCode  **参数解释：** 云服务产品的资源规格 **取值范围：** 不涉及
    * status  **参数解释：** 资源状态 **取值范围：**  - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  **参数解释：** 资源到期时间 **取值范围：** 不涉及
    * resourceSize  **参数解释：** 资源数量 **取值范围：** 不涉及
    * timestamp  **参数解释：** 资源创建时间 **取值范围：** 不涉及
    * relativeType  **参数解释：** 当资源项为附属资源(域名扩展包/带宽扩展包/规则扩展包/高阶功能扩展包),描述附属资源与主资源的关系 **取值范围：**  - 0：附属资源与主资源为挂载关系  - 1：附属资源与主资源为绑定关系  - 2：从属关系
    * region  **参数解释：** 华为云区域ID,资源所属的区域id **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'status' => 'getStatus',
            'expireTime' => 'getExpireTime',
            'resourceSize' => 'getResourceSize',
            'timestamp' => 'getTimestamp',
            'relativeType' => 'getRelativeType',
            'region' => 'getRegion'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['relativeType'] = isset($data['relativeType']) ? $data['relativeType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
    * Gets resourceId
    *  **参数解释：** 资源id **取值范围：** 不涉及
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
    * @param string|null $resourceId **参数解释：** 资源id **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  **参数解释：** 云服务产品对应的云服务类型 **取值范围：** 不涉及
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
    * @param string|null $cloudServiceType **参数解释：** 云服务产品对应的云服务类型 **取值范围：** 不涉及
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
    *  **参数解释：** 云服务产品的资源类型 **取值范围：**  - hws.resource.type.waf：云模式包周期WAF  - hws.resource.type.waf.domain：云模式包周期WAF域名扩展包  - hws.resource.type.waf.bandwidth：云模式包周期WAF带宽扩展包  - hws.resource.type.waf.rule：云模式包周期WAF规则扩展包  - hws.resource.type.waf.payperuserequest：Web应用防火墙按需请求   - hws.resource.type.waf.payperusedomain：Web应用防火墙按需域名  - hws.resource.type.waf.payperuserule：Web应用防火墙按需规则
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
    * @param string|null $resourceType **参数解释：** 云服务产品的资源类型 **取值范围：**  - hws.resource.type.waf：云模式包周期WAF  - hws.resource.type.waf.domain：云模式包周期WAF域名扩展包  - hws.resource.type.waf.bandwidth：云模式包周期WAF带宽扩展包  - hws.resource.type.waf.rule：云模式包周期WAF规则扩展包  - hws.resource.type.waf.payperuserequest：Web应用防火墙按需请求   - hws.resource.type.waf.payperusedomain：Web应用防火墙按需域名  - hws.resource.type.waf.payperuserule：Web应用防火墙按需规则
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
    *  **参数解释：** 云服务产品的资源规格 **取值范围：** 不涉及
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
    * @param string|null $resourceSpecCode **参数解释：** 云服务产品的资源规格 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 资源状态 **取值范围：**  - 0：解冻/正常   - 1：冻结   - 2：删除
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 资源状态 **取值范围：**  - 0：解冻/正常   - 1：冻结   - 2：删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释：** 资源到期时间 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime **参数解释：** 资源到期时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets resourceSize
    *  **参数解释：** 资源数量 **取值范围：** 不涉及
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
    * @param int|null $resourceSize **参数解释：** 资源数量 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets timestamp
    *  **参数解释：** 资源创建时间 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp **参数解释：** 资源创建时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets relativeType
    *  **参数解释：** 当资源项为附属资源(域名扩展包/带宽扩展包/规则扩展包/高阶功能扩展包),描述附属资源与主资源的关系 **取值范围：**  - 0：附属资源与主资源为挂载关系  - 1：附属资源与主资源为绑定关系  - 2：从属关系
    *
    * @return int|null
    */
    public function getRelativeType()
    {
        return $this->container['relativeType'];
    }

    /**
    * Sets relativeType
    *
    * @param int|null $relativeType **参数解释：** 当资源项为附属资源(域名扩展包/带宽扩展包/规则扩展包/高阶功能扩展包),描述附属资源与主资源的关系 **取值范围：**  - 0：附属资源与主资源为挂载关系  - 1：附属资源与主资源为绑定关系  - 2：从属关系
    *
    * @return $this
    */
    public function setRelativeType($relativeType)
    {
        $this->container['relativeType'] = $relativeType;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 华为云区域ID,资源所属的区域id **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释：** 华为云区域ID,资源所属的区域id **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

