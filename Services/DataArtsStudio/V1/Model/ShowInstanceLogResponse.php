<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceLogResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceLogResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableBridge  是否开启桥接模式
    * enableProfile  是否启用配置
    * enableClassification  是否开启分类
    * bridgeStatus  桥接状态
    * profileStatus  配置状态
    * classificationStatus  分类状态
    * bridgeJobLog  桥接作业日志
    * profileJobLog  配置作业日志
    * classificationJobLog  分类作业日志
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableBridge' => 'bool',
            'enableProfile' => 'bool',
            'enableClassification' => 'bool',
            'bridgeStatus' => 'string',
            'profileStatus' => 'string',
            'classificationStatus' => 'string',
            'bridgeJobLog' => 'string',
            'profileJobLog' => 'string',
            'classificationJobLog' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableBridge  是否开启桥接模式
    * enableProfile  是否启用配置
    * enableClassification  是否开启分类
    * bridgeStatus  桥接状态
    * profileStatus  配置状态
    * classificationStatus  分类状态
    * bridgeJobLog  桥接作业日志
    * profileJobLog  配置作业日志
    * classificationJobLog  分类作业日志
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableBridge' => null,
        'enableProfile' => null,
        'enableClassification' => null,
        'bridgeStatus' => null,
        'profileStatus' => null,
        'classificationStatus' => null,
        'bridgeJobLog' => null,
        'profileJobLog' => null,
        'classificationJobLog' => null
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
    * enableBridge  是否开启桥接模式
    * enableProfile  是否启用配置
    * enableClassification  是否开启分类
    * bridgeStatus  桥接状态
    * profileStatus  配置状态
    * classificationStatus  分类状态
    * bridgeJobLog  桥接作业日志
    * profileJobLog  配置作业日志
    * classificationJobLog  分类作业日志
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableBridge' => 'enable_bridge',
            'enableProfile' => 'enable_profile',
            'enableClassification' => 'enable_classification',
            'bridgeStatus' => 'bridge_status',
            'profileStatus' => 'profile_status',
            'classificationStatus' => 'classification_status',
            'bridgeJobLog' => 'bridge_job_log',
            'profileJobLog' => 'profile_job_log',
            'classificationJobLog' => 'classification_job_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableBridge  是否开启桥接模式
    * enableProfile  是否启用配置
    * enableClassification  是否开启分类
    * bridgeStatus  桥接状态
    * profileStatus  配置状态
    * classificationStatus  分类状态
    * bridgeJobLog  桥接作业日志
    * profileJobLog  配置作业日志
    * classificationJobLog  分类作业日志
    *
    * @var string[]
    */
    protected static $setters = [
            'enableBridge' => 'setEnableBridge',
            'enableProfile' => 'setEnableProfile',
            'enableClassification' => 'setEnableClassification',
            'bridgeStatus' => 'setBridgeStatus',
            'profileStatus' => 'setProfileStatus',
            'classificationStatus' => 'setClassificationStatus',
            'bridgeJobLog' => 'setBridgeJobLog',
            'profileJobLog' => 'setProfileJobLog',
            'classificationJobLog' => 'setClassificationJobLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableBridge  是否开启桥接模式
    * enableProfile  是否启用配置
    * enableClassification  是否开启分类
    * bridgeStatus  桥接状态
    * profileStatus  配置状态
    * classificationStatus  分类状态
    * bridgeJobLog  桥接作业日志
    * profileJobLog  配置作业日志
    * classificationJobLog  分类作业日志
    *
    * @var string[]
    */
    protected static $getters = [
            'enableBridge' => 'getEnableBridge',
            'enableProfile' => 'getEnableProfile',
            'enableClassification' => 'getEnableClassification',
            'bridgeStatus' => 'getBridgeStatus',
            'profileStatus' => 'getProfileStatus',
            'classificationStatus' => 'getClassificationStatus',
            'bridgeJobLog' => 'getBridgeJobLog',
            'profileJobLog' => 'getProfileJobLog',
            'classificationJobLog' => 'getClassificationJobLog'
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
        $this->container['enableBridge'] = isset($data['enableBridge']) ? $data['enableBridge'] : null;
        $this->container['enableProfile'] = isset($data['enableProfile']) ? $data['enableProfile'] : null;
        $this->container['enableClassification'] = isset($data['enableClassification']) ? $data['enableClassification'] : null;
        $this->container['bridgeStatus'] = isset($data['bridgeStatus']) ? $data['bridgeStatus'] : null;
        $this->container['profileStatus'] = isset($data['profileStatus']) ? $data['profileStatus'] : null;
        $this->container['classificationStatus'] = isset($data['classificationStatus']) ? $data['classificationStatus'] : null;
        $this->container['bridgeJobLog'] = isset($data['bridgeJobLog']) ? $data['bridgeJobLog'] : null;
        $this->container['profileJobLog'] = isset($data['profileJobLog']) ? $data['profileJobLog'] : null;
        $this->container['classificationJobLog'] = isset($data['classificationJobLog']) ? $data['classificationJobLog'] : null;
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
    * Gets enableBridge
    *  是否开启桥接模式
    *
    * @return bool|null
    */
    public function getEnableBridge()
    {
        return $this->container['enableBridge'];
    }

    /**
    * Sets enableBridge
    *
    * @param bool|null $enableBridge 是否开启桥接模式
    *
    * @return $this
    */
    public function setEnableBridge($enableBridge)
    {
        $this->container['enableBridge'] = $enableBridge;
        return $this;
    }

    /**
    * Gets enableProfile
    *  是否启用配置
    *
    * @return bool|null
    */
    public function getEnableProfile()
    {
        return $this->container['enableProfile'];
    }

    /**
    * Sets enableProfile
    *
    * @param bool|null $enableProfile 是否启用配置
    *
    * @return $this
    */
    public function setEnableProfile($enableProfile)
    {
        $this->container['enableProfile'] = $enableProfile;
        return $this;
    }

    /**
    * Gets enableClassification
    *  是否开启分类
    *
    * @return bool|null
    */
    public function getEnableClassification()
    {
        return $this->container['enableClassification'];
    }

    /**
    * Sets enableClassification
    *
    * @param bool|null $enableClassification 是否开启分类
    *
    * @return $this
    */
    public function setEnableClassification($enableClassification)
    {
        $this->container['enableClassification'] = $enableClassification;
        return $this;
    }

    /**
    * Gets bridgeStatus
    *  桥接状态
    *
    * @return string|null
    */
    public function getBridgeStatus()
    {
        return $this->container['bridgeStatus'];
    }

    /**
    * Sets bridgeStatus
    *
    * @param string|null $bridgeStatus 桥接状态
    *
    * @return $this
    */
    public function setBridgeStatus($bridgeStatus)
    {
        $this->container['bridgeStatus'] = $bridgeStatus;
        return $this;
    }

    /**
    * Gets profileStatus
    *  配置状态
    *
    * @return string|null
    */
    public function getProfileStatus()
    {
        return $this->container['profileStatus'];
    }

    /**
    * Sets profileStatus
    *
    * @param string|null $profileStatus 配置状态
    *
    * @return $this
    */
    public function setProfileStatus($profileStatus)
    {
        $this->container['profileStatus'] = $profileStatus;
        return $this;
    }

    /**
    * Gets classificationStatus
    *  分类状态
    *
    * @return string|null
    */
    public function getClassificationStatus()
    {
        return $this->container['classificationStatus'];
    }

    /**
    * Sets classificationStatus
    *
    * @param string|null $classificationStatus 分类状态
    *
    * @return $this
    */
    public function setClassificationStatus($classificationStatus)
    {
        $this->container['classificationStatus'] = $classificationStatus;
        return $this;
    }

    /**
    * Gets bridgeJobLog
    *  桥接作业日志
    *
    * @return string|null
    */
    public function getBridgeJobLog()
    {
        return $this->container['bridgeJobLog'];
    }

    /**
    * Sets bridgeJobLog
    *
    * @param string|null $bridgeJobLog 桥接作业日志
    *
    * @return $this
    */
    public function setBridgeJobLog($bridgeJobLog)
    {
        $this->container['bridgeJobLog'] = $bridgeJobLog;
        return $this;
    }

    /**
    * Gets profileJobLog
    *  配置作业日志
    *
    * @return string|null
    */
    public function getProfileJobLog()
    {
        return $this->container['profileJobLog'];
    }

    /**
    * Sets profileJobLog
    *
    * @param string|null $profileJobLog 配置作业日志
    *
    * @return $this
    */
    public function setProfileJobLog($profileJobLog)
    {
        $this->container['profileJobLog'] = $profileJobLog;
        return $this;
    }

    /**
    * Gets classificationJobLog
    *  分类作业日志
    *
    * @return string|null
    */
    public function getClassificationJobLog()
    {
        return $this->container['classificationJobLog'];
    }

    /**
    * Sets classificationJobLog
    *
    * @param string|null $classificationJobLog 分类作业日志
    *
    * @return $this
    */
    public function setClassificationJobLog($classificationJobLog)
    {
        $this->container['classificationJobLog'] = $classificationJobLog;
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

