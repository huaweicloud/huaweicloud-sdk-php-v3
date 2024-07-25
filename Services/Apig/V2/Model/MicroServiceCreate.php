<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroServiceCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroServiceCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceType' => 'string',
            'cseInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSEBase',
            'cceInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEBase'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceType' => null,
        'cseInfo' => null,
        'cceInfo' => null
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
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceType' => 'service_type',
            'cseInfo' => 'cse_info',
            'cceInfo' => 'cce_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceType' => 'setServiceType',
            'cseInfo' => 'setCseInfo',
            'cceInfo' => 'setCceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceType  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
    * cseInfo  cseInfo
    * cceInfo  cceInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceType' => 'getServiceType',
            'cseInfo' => 'getCseInfo',
            'cceInfo' => 'getCceInfo'
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
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['cseInfo'] = isset($data['cseInfo']) ? $data['cseInfo'] : null;
        $this->container['cceInfo'] = isset($data['cceInfo']) ? $data['cceInfo'] : null;
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
    * Gets serviceType
    *  微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
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
    * @param string|null $serviceType 微服务类型： - CSE：CSE微服务注册中心 - CCE：CCE云容器引擎（工作负载） - CCE_SERVICE: CCE云容器引擎（Service）
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
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSEBase|null
    */
    public function getCseInfo()
    {
        return $this->container['cseInfo'];
    }

    /**
    * Sets cseInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCSEBase|null $cseInfo cseInfo
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
    * @return \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEBase|null
    */
    public function getCceInfo()
    {
        return $this->container['cceInfo'];
    }

    /**
    * Sets cceInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\MicroServiceInfoCCEBase|null $cceInfo cceInfo
    *
    * @return $this
    */
    public function setCceInfo($cceInfo)
    {
        $this->container['cceInfo'] = $cceInfo;
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

