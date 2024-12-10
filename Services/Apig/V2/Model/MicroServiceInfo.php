<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroServiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroServiceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  微服务编号
    * instanceId  实例编号
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service） - NACOS: nacos引擎，nacos_info必填
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    * nacosInfo  nacosInfo
    * updateTime  微服务更新时间
    * createTime  微服务创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'serviceType' => 'string',
            'cseInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSE',
            'cceInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCE',
            'cceServiceInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEService',
            'nacosInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoNacosBase',
            'updateTime' => '\DateTime',
            'createTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  微服务编号
    * instanceId  实例编号
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service） - NACOS: nacos引擎，nacos_info必填
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    * nacosInfo  nacosInfo
    * updateTime  微服务更新时间
    * createTime  微服务创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'serviceType' => null,
        'cseInfo' => null,
        'cceInfo' => null,
        'cceServiceInfo' => null,
        'nacosInfo' => null,
        'updateTime' => 'date-time',
        'createTime' => 'date-time'
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
    * id  微服务编号
    * instanceId  实例编号
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service） - NACOS: nacos引擎，nacos_info必填
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    * nacosInfo  nacosInfo
    * updateTime  微服务更新时间
    * createTime  微服务创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'serviceType' => 'service_type',
            'cseInfo' => 'cse_info',
            'cceInfo' => 'cce_info',
            'cceServiceInfo' => 'cce_service_info',
            'nacosInfo' => 'nacos_info',
            'updateTime' => 'update_time',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  微服务编号
    * instanceId  实例编号
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service） - NACOS: nacos引擎，nacos_info必填
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    * nacosInfo  nacosInfo
    * updateTime  微服务更新时间
    * createTime  微服务创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'serviceType' => 'setServiceType',
            'cseInfo' => 'setCseInfo',
            'cceInfo' => 'setCceInfo',
            'cceServiceInfo' => 'setCceServiceInfo',
            'nacosInfo' => 'setNacosInfo',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  微服务编号
    * instanceId  实例编号
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service） - NACOS: nacos引擎，nacos_info必填
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    * nacosInfo  nacosInfo
    * updateTime  微服务更新时间
    * createTime  微服务创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'serviceType' => 'getServiceType',
            'cseInfo' => 'getCseInfo',
            'cceInfo' => 'getCceInfo',
            'cceServiceInfo' => 'getCceServiceInfo',
            'nacosInfo' => 'getNacosInfo',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime'
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
    const SERVICE_TYPE_CSE = 'CSE';
    const SERVICE_TYPE_CCE = 'CCE';
    const SERVICE_TYPE_CCE_SERVICE = 'CCE_SERVICE';
    const SERVICE_TYPE_NACOS = 'NACOS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_CSE,
            self::SERVICE_TYPE_CCE,
            self::SERVICE_TYPE_CCE_SERVICE,
            self::SERVICE_TYPE_NACOS,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['cseInfo'] = isset($data['cseInfo']) ? $data['cseInfo'] : null;
        $this->container['cceInfo'] = isset($data['cceInfo']) ? $data['cceInfo'] : null;
        $this->container['cceServiceInfo'] = isset($data['cceServiceInfo']) ? $data['cceServiceInfo'] : null;
        $this->container['nacosInfo'] = isset($data['nacosInfo']) ? $data['nacosInfo'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  微服务编号
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
    * @param string|null $id 微服务编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例编号
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例编号
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets serviceType
    *  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service） - NACOS: nacos引擎，nacos_info必填
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service） - NACOS: nacos引擎，nacos_info必填
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets cseInfo
    *  cseInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSE|null
    */
    public function getCseInfo()
    {
        return $this->container['cseInfo'];
    }

    /**
    * Sets cseInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSE|null $cseInfo cseInfo
    *
    * @return $this
    */
    public function setCseInfo($cseInfo)
    {
        $this->container['cseInfo'] = $cseInfo;
        return $this;
    }

    /**
    * Gets cceInfo
    *  cceInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCE|null
    */
    public function getCceInfo()
    {
        return $this->container['cceInfo'];
    }

    /**
    * Sets cceInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCE|null $cceInfo cceInfo
    *
    * @return $this
    */
    public function setCceInfo($cceInfo)
    {
        $this->container['cceInfo'] = $cceInfo;
        return $this;
    }

    /**
    * Gets cceServiceInfo
    *  cceServiceInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEService|null
    */
    public function getCceServiceInfo()
    {
        return $this->container['cceServiceInfo'];
    }

    /**
    * Sets cceServiceInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEService|null $cceServiceInfo cceServiceInfo
    *
    * @return $this
    */
    public function setCceServiceInfo($cceServiceInfo)
    {
        $this->container['cceServiceInfo'] = $cceServiceInfo;
        return $this;
    }

    /**
    * Gets nacosInfo
    *  nacosInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoNacosBase|null
    */
    public function getNacosInfo()
    {
        return $this->container['nacosInfo'];
    }

    /**
    * Sets nacosInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoNacosBase|null $nacosInfo nacosInfo
    *
    * @return $this
    */
    public function setNacosInfo($nacosInfo)
    {
        $this->container['nacosInfo'] = $nacosInfo;
        return $this;
    }

    /**
    * Gets updateTime
    *  微服务更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 微服务更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  微服务创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 微服务创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

