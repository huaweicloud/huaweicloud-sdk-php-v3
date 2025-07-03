<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateOsProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateOsProfile';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyName  秘钥名称
    * userData  注入脚本，会导致请求过大，影响虚拟机表。1. 和密码的使用冲突 2. 超大文本问题。
    * iamAgencyName  委托名称。实际需要多委托。
    * enableMonitoringService  开启主机监控服务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyName' => 'string',
            'userData' => 'string',
            'iamAgencyName' => 'string',
            'enableMonitoringService' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyName  秘钥名称
    * userData  注入脚本，会导致请求过大，影响虚拟机表。1. 和密码的使用冲突 2. 超大文本问题。
    * iamAgencyName  委托名称。实际需要多委托。
    * enableMonitoringService  开启主机监控服务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyName' => null,
        'userData' => null,
        'iamAgencyName' => null,
        'enableMonitoringService' => null
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
    * keyName  秘钥名称
    * userData  注入脚本，会导致请求过大，影响虚拟机表。1. 和密码的使用冲突 2. 超大文本问题。
    * iamAgencyName  委托名称。实际需要多委托。
    * enableMonitoringService  开启主机监控服务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyName' => 'key_name',
            'userData' => 'user_data',
            'iamAgencyName' => 'iam_agency_name',
            'enableMonitoringService' => 'enable_monitoring_service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyName  秘钥名称
    * userData  注入脚本，会导致请求过大，影响虚拟机表。1. 和密码的使用冲突 2. 超大文本问题。
    * iamAgencyName  委托名称。实际需要多委托。
    * enableMonitoringService  开启主机监控服务
    *
    * @var string[]
    */
    protected static $setters = [
            'keyName' => 'setKeyName',
            'userData' => 'setUserData',
            'iamAgencyName' => 'setIamAgencyName',
            'enableMonitoringService' => 'setEnableMonitoringService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyName  秘钥名称
    * userData  注入脚本，会导致请求过大，影响虚拟机表。1. 和密码的使用冲突 2. 超大文本问题。
    * iamAgencyName  委托名称。实际需要多委托。
    * enableMonitoringService  开启主机监控服务
    *
    * @var string[]
    */
    protected static $getters = [
            'keyName' => 'getKeyName',
            'userData' => 'getUserData',
            'iamAgencyName' => 'getIamAgencyName',
            'enableMonitoringService' => 'getEnableMonitoringService'
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
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['iamAgencyName'] = isset($data['iamAgencyName']) ? $data['iamAgencyName'] : null;
        $this->container['enableMonitoringService'] = isset($data['enableMonitoringService']) ? $data['enableMonitoringService'] : null;
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
    * Gets keyName
    *  秘钥名称
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName 秘钥名称
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets userData
    *  注入脚本，会导致请求过大，影响虚拟机表。1. 和密码的使用冲突 2. 超大文本问题。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 注入脚本，会导致请求过大，影响虚拟机表。1. 和密码的使用冲突 2. 超大文本问题。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets iamAgencyName
    *  委托名称。实际需要多委托。
    *
    * @return string|null
    */
    public function getIamAgencyName()
    {
        return $this->container['iamAgencyName'];
    }

    /**
    * Sets iamAgencyName
    *
    * @param string|null $iamAgencyName 委托名称。实际需要多委托。
    *
    * @return $this
    */
    public function setIamAgencyName($iamAgencyName)
    {
        $this->container['iamAgencyName'] = $iamAgencyName;
        return $this;
    }

    /**
    * Gets enableMonitoringService
    *  开启主机监控服务
    *
    * @return bool|null
    */
    public function getEnableMonitoringService()
    {
        return $this->container['enableMonitoringService'];
    }

    /**
    * Sets enableMonitoringService
    *
    * @param bool|null $enableMonitoringService 开启主机监控服务
    *
    * @return $this
    */
    public function setEnableMonitoringService($enableMonitoringService)
    {
        $this->container['enableMonitoringService'] = $enableMonitoringService;
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

