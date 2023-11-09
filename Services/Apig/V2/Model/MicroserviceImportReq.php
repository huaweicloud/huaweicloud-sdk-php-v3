<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroserviceImportReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroserviceImportReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupInfo  groupInfo
    * serviceType  微服务中心类型。 - CSE：CSE微服务注册中心 - CCE: CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * protocol  API网关访问微服务的请求协议 - HTTP - HTTPS
    * apis  导入的api列表
    * backendTimeout  APIG请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000，默认5000  单位：毫秒。
    * authType  API的认证方式，默认无认证[，site暂不支持IAM认证。](tag:Site) - NONE：无认证 - APP：APP认证 - IAM：IAM认证
    * cors  是否支持跨域，默认不支持 - true：支持 - false：不支持
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroserviceGroup',
            'serviceType' => 'string',
            'protocol' => 'string',
            'apis' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroserviceApiCreate[]',
            'backendTimeout' => 'int',
            'authType' => 'string',
            'cors' => 'bool',
            'cseInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSECreate',
            'cceInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCECreate',
            'cceServiceInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEServiceCreate'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupInfo  groupInfo
    * serviceType  微服务中心类型。 - CSE：CSE微服务注册中心 - CCE: CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * protocol  API网关访问微服务的请求协议 - HTTP - HTTPS
    * apis  导入的api列表
    * backendTimeout  APIG请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000，默认5000  单位：毫秒。
    * authType  API的认证方式，默认无认证[，site暂不支持IAM认证。](tag:Site) - NONE：无认证 - APP：APP认证 - IAM：IAM认证
    * cors  是否支持跨域，默认不支持 - true：支持 - false：不支持
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupInfo' => null,
        'serviceType' => null,
        'protocol' => null,
        'apis' => null,
        'backendTimeout' => 'int32',
        'authType' => null,
        'cors' => null,
        'cseInfo' => null,
        'cceInfo' => null,
        'cceServiceInfo' => null
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
    * groupInfo  groupInfo
    * serviceType  微服务中心类型。 - CSE：CSE微服务注册中心 - CCE: CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * protocol  API网关访问微服务的请求协议 - HTTP - HTTPS
    * apis  导入的api列表
    * backendTimeout  APIG请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000，默认5000  单位：毫秒。
    * authType  API的认证方式，默认无认证[，site暂不支持IAM认证。](tag:Site) - NONE：无认证 - APP：APP认证 - IAM：IAM认证
    * cors  是否支持跨域，默认不支持 - true：支持 - false：不支持
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupInfo' => 'group_info',
            'serviceType' => 'service_type',
            'protocol' => 'protocol',
            'apis' => 'apis',
            'backendTimeout' => 'backend_timeout',
            'authType' => 'auth_type',
            'cors' => 'cors',
            'cseInfo' => 'cse_info',
            'cceInfo' => 'cce_info',
            'cceServiceInfo' => 'cce_service_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupInfo  groupInfo
    * serviceType  微服务中心类型。 - CSE：CSE微服务注册中心 - CCE: CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * protocol  API网关访问微服务的请求协议 - HTTP - HTTPS
    * apis  导入的api列表
    * backendTimeout  APIG请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000，默认5000  单位：毫秒。
    * authType  API的认证方式，默认无认证[，site暂不支持IAM认证。](tag:Site) - NONE：无认证 - APP：APP认证 - IAM：IAM认证
    * cors  是否支持跨域，默认不支持 - true：支持 - false：不支持
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'groupInfo' => 'setGroupInfo',
            'serviceType' => 'setServiceType',
            'protocol' => 'setProtocol',
            'apis' => 'setApis',
            'backendTimeout' => 'setBackendTimeout',
            'authType' => 'setAuthType',
            'cors' => 'setCors',
            'cseInfo' => 'setCseInfo',
            'cceInfo' => 'setCceInfo',
            'cceServiceInfo' => 'setCceServiceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupInfo  groupInfo
    * serviceType  微服务中心类型。 - CSE：CSE微服务注册中心 - CCE: CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * protocol  API网关访问微服务的请求协议 - HTTP - HTTPS
    * apis  导入的api列表
    * backendTimeout  APIG请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000，默认5000  单位：毫秒。
    * authType  API的认证方式，默认无认证[，site暂不支持IAM认证。](tag:Site) - NONE：无认证 - APP：APP认证 - IAM：IAM认证
    * cors  是否支持跨域，默认不支持 - true：支持 - false：不支持
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    * cceServiceInfo  cceServiceInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'groupInfo' => 'getGroupInfo',
            'serviceType' => 'getServiceType',
            'protocol' => 'getProtocol',
            'apis' => 'getApis',
            'backendTimeout' => 'getBackendTimeout',
            'authType' => 'getAuthType',
            'cors' => 'getCors',
            'cseInfo' => 'getCseInfo',
            'cceInfo' => 'getCceInfo',
            'cceServiceInfo' => 'getCceServiceInfo'
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
    const PROTOCOL_HTTP = 'HTTP';
    const PROTOCOL_HTTPS = 'HTTPS';
    const AUTH_TYPE_NONE = 'NONE';
    const AUTH_TYPE_APP = 'APP';
    const AUTH_TYPE_IAM = 'IAM';
    

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
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_NONE,
            self::AUTH_TYPE_APP,
            self::AUTH_TYPE_IAM,
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
        $this->container['groupInfo'] = isset($data['groupInfo']) ? $data['groupInfo'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['apis'] = isset($data['apis']) ? $data['apis'] : null;
        $this->container['backendTimeout'] = isset($data['backendTimeout']) ? $data['backendTimeout'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['cors'] = isset($data['cors']) ? $data['cors'] : null;
        $this->container['cseInfo'] = isset($data['cseInfo']) ? $data['cseInfo'] : null;
        $this->container['cceInfo'] = isset($data['cceInfo']) ? $data['cceInfo'] : null;
        $this->container['cceServiceInfo'] = isset($data['cceServiceInfo']) ? $data['cceServiceInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupInfo'] === null) {
            $invalidProperties[] = "'groupInfo' can't be null";
        }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
        }
            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['apis'] === null) {
            $invalidProperties[] = "'apis' can't be null";
        }
            if (!is_null($this->container['backendTimeout']) && ($this->container['backendTimeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'backendTimeout', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
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
    * Gets groupInfo
    *  groupInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroserviceGroup
    */
    public function getGroupInfo()
    {
        return $this->container['groupInfo'];
    }

    /**
    * Sets groupInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroserviceGroup $groupInfo groupInfo
    *
    * @return $this
    */
    public function setGroupInfo($groupInfo)
    {
        $this->container['groupInfo'] = $groupInfo;
        return $this;
    }

    /**
    * Gets serviceType
    *  微服务中心类型。 - CSE：CSE微服务注册中心 - CCE: CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    *
    * @return string
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string $serviceType 微服务中心类型。 - CSE：CSE微服务注册中心 - CCE: CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets protocol
    *  API网关访问微服务的请求协议 - HTTP - HTTPS
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol API网关访问微服务的请求协议 - HTTP - HTTPS
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets apis
    *  导入的api列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroserviceApiCreate[]
    */
    public function getApis()
    {
        return $this->container['apis'];
    }

    /**
    * Sets apis
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroserviceApiCreate[] $apis 导入的api列表
    *
    * @return $this
    */
    public function setApis($apis)
    {
        $this->container['apis'] = $apis;
        return $this;
    }

    /**
    * Gets backendTimeout
    *  APIG请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000，默认5000  单位：毫秒。
    *
    * @return int|null
    */
    public function getBackendTimeout()
    {
        return $this->container['backendTimeout'];
    }

    /**
    * Sets backendTimeout
    *
    * @param int|null $backendTimeout APIG请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000，默认5000  单位：毫秒。
    *
    * @return $this
    */
    public function setBackendTimeout($backendTimeout)
    {
        $this->container['backendTimeout'] = $backendTimeout;
        return $this;
    }

    /**
    * Gets authType
    *  API的认证方式，默认无认证[，site暂不支持IAM认证。](tag:Site) - NONE：无认证 - APP：APP认证 - IAM：IAM认证
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType API的认证方式，默认无认证[，site暂不支持IAM认证。](tag:Site) - NONE：无认证 - APP：APP认证 - IAM：IAM认证
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets cors
    *  是否支持跨域，默认不支持 - true：支持 - false：不支持
    *
    * @return bool|null
    */
    public function getCors()
    {
        return $this->container['cors'];
    }

    /**
    * Sets cors
    *
    * @param bool|null $cors 是否支持跨域，默认不支持 - true：支持 - false：不支持
    *
    * @return $this
    */
    public function setCors($cors)
    {
        $this->container['cors'] = $cors;
        return $this;
    }

    /**
    * Gets cseInfo
    *  cseInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSECreate|null
    */
    public function getCseInfo()
    {
        return $this->container['cseInfo'];
    }

    /**
    * Sets cseInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSECreate|null $cseInfo cseInfo
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
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCECreate|null
    */
    public function getCceInfo()
    {
        return $this->container['cceInfo'];
    }

    /**
    * Sets cceInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCECreate|null $cceInfo cceInfo
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
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEServiceCreate|null
    */
    public function getCceServiceInfo()
    {
        return $this->container['cceServiceInfo'];
    }

    /**
    * Sets cceServiceInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEServiceCreate|null $cceServiceInfo cceServiceInfo
    *
    * @return $this
    */
    public function setCceServiceInfo($cceServiceInfo)
    {
        $this->container['cceServiceInfo'] = $cceServiceInfo;
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

