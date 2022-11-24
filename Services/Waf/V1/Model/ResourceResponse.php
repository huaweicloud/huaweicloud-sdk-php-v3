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
    * resourceId  资源id
    * cloudServiceType  云服务产品对应的云服务类型
    * resourceType  云服务产品的资源类型   - hws.resource.type.waf: 云模式waf   - hws.resource.type.waf.domain: 域名扩展包   - hws.resource.type.waf.bandwidth：带宽扩展包   - hws.resource.type.waf.rule：规则扩展包
    * resourceSpecCode  云服务产品的资源规格
    * status  资源状态   - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  资源到期时间
    * resourceSize  资源数量
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
            'resourceSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源id
    * cloudServiceType  云服务产品对应的云服务类型
    * resourceType  云服务产品的资源类型   - hws.resource.type.waf: 云模式waf   - hws.resource.type.waf.domain: 域名扩展包   - hws.resource.type.waf.bandwidth：带宽扩展包   - hws.resource.type.waf.rule：规则扩展包
    * resourceSpecCode  云服务产品的资源规格
    * status  资源状态   - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  资源到期时间
    * resourceSize  资源数量
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
        'resourceSize' => null
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
    * resourceId  资源id
    * cloudServiceType  云服务产品对应的云服务类型
    * resourceType  云服务产品的资源类型   - hws.resource.type.waf: 云模式waf   - hws.resource.type.waf.domain: 域名扩展包   - hws.resource.type.waf.bandwidth：带宽扩展包   - hws.resource.type.waf.rule：规则扩展包
    * resourceSpecCode  云服务产品的资源规格
    * status  资源状态   - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  资源到期时间
    * resourceSize  资源数量
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
            'resourceSize' => 'resourceSize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源id
    * cloudServiceType  云服务产品对应的云服务类型
    * resourceType  云服务产品的资源类型   - hws.resource.type.waf: 云模式waf   - hws.resource.type.waf.domain: 域名扩展包   - hws.resource.type.waf.bandwidth：带宽扩展包   - hws.resource.type.waf.rule：规则扩展包
    * resourceSpecCode  云服务产品的资源规格
    * status  资源状态   - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  资源到期时间
    * resourceSize  资源数量
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
            'resourceSize' => 'setResourceSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源id
    * cloudServiceType  云服务产品对应的云服务类型
    * resourceType  云服务产品的资源类型   - hws.resource.type.waf: 云模式waf   - hws.resource.type.waf.domain: 域名扩展包   - hws.resource.type.waf.bandwidth：带宽扩展包   - hws.resource.type.waf.rule：规则扩展包
    * resourceSpecCode  云服务产品的资源规格
    * status  资源状态   - 0：解冻/正常   - 1：冻结   - 2：删除
    * expireTime  资源到期时间
    * resourceSize  资源数量
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
            'resourceSize' => 'getResourceSize'
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
    *  资源id
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
    * @param string|null $resourceId 资源id
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
    *  云服务产品对应的云服务类型
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
    * @param string|null $cloudServiceType 云服务产品对应的云服务类型
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
    *  云服务产品的资源类型   - hws.resource.type.waf: 云模式waf   - hws.resource.type.waf.domain: 域名扩展包   - hws.resource.type.waf.bandwidth：带宽扩展包   - hws.resource.type.waf.rule：规则扩展包
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
    * @param string|null $resourceType 云服务产品的资源类型   - hws.resource.type.waf: 云模式waf   - hws.resource.type.waf.domain: 域名扩展包   - hws.resource.type.waf.bandwidth：带宽扩展包   - hws.resource.type.waf.rule：规则扩展包
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
    *  云服务产品的资源规格
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
    * @param string|null $resourceSpecCode 云服务产品的资源规格
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
    *  资源状态   - 0：解冻/正常   - 1：冻结   - 2：删除
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
    * @param int|null $status 资源状态   - 0：解冻/正常   - 1：冻结   - 2：删除
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
    *  资源到期时间
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
    * @param string|null $expireTime 资源到期时间
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
    *  资源数量
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
    * @param int|null $resourceSize 资源数量
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
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

