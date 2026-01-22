<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalFeatureGatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalFeatureGatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableObsEncryptUserKmsKey  是否支持使用已有KSM密钥ID创建OBS桶
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableUserDefObs' => 'bool',
            'enableEnterprise' => 'bool',
            'cerAvailable' => 'bool',
            'enableObsEncryptUserKmsKey' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableObsEncryptUserKmsKey  是否支持使用已有KSM密钥ID创建OBS桶
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableUserDefObs' => null,
        'enableEnterprise' => null,
        'cerAvailable' => null,
        'enableObsEncryptUserKmsKey' => null
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
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableObsEncryptUserKmsKey  是否支持使用已有KSM密钥ID创建OBS桶
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableUserDefObs' => 'enableUserDefObs',
            'enableEnterprise' => 'enableEnterprise',
            'cerAvailable' => 'cerAvailable',
            'enableObsEncryptUserKmsKey' => 'enableOBSEncryptUserKmsKey'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableObsEncryptUserKmsKey  是否支持使用已有KSM密钥ID创建OBS桶
    *
    * @var string[]
    */
    protected static $setters = [
            'enableUserDefObs' => 'setEnableUserDefObs',
            'enableEnterprise' => 'setEnableEnterprise',
            'cerAvailable' => 'setCerAvailable',
            'enableObsEncryptUserKmsKey' => 'setEnableObsEncryptUserKmsKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableUserDefObs  是否支持使用用户的obs桶
    * enableEnterprise  是否支持支持企业项目
    * cerAvailable  是否支持SWR企业版功能
    * enableObsEncryptUserKmsKey  是否支持使用已有KSM密钥ID创建OBS桶
    *
    * @var string[]
    */
    protected static $getters = [
            'enableUserDefObs' => 'getEnableUserDefObs',
            'enableEnterprise' => 'getEnableEnterprise',
            'cerAvailable' => 'getCerAvailable',
            'enableObsEncryptUserKmsKey' => 'getEnableObsEncryptUserKmsKey'
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
        $this->container['enableUserDefObs'] = isset($data['enableUserDefObs']) ? $data['enableUserDefObs'] : null;
        $this->container['enableEnterprise'] = isset($data['enableEnterprise']) ? $data['enableEnterprise'] : null;
        $this->container['cerAvailable'] = isset($data['cerAvailable']) ? $data['cerAvailable'] : null;
        $this->container['enableObsEncryptUserKmsKey'] = isset($data['enableObsEncryptUserKmsKey']) ? $data['enableObsEncryptUserKmsKey'] : null;
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
    * Gets enableUserDefObs
    *  是否支持使用用户的obs桶
    *
    * @return bool|null
    */
    public function getEnableUserDefObs()
    {
        return $this->container['enableUserDefObs'];
    }

    /**
    * Sets enableUserDefObs
    *
    * @param bool|null $enableUserDefObs 是否支持使用用户的obs桶
    *
    * @return $this
    */
    public function setEnableUserDefObs($enableUserDefObs)
    {
        $this->container['enableUserDefObs'] = $enableUserDefObs;
        return $this;
    }

    /**
    * Gets enableEnterprise
    *  是否支持支持企业项目
    *
    * @return bool|null
    */
    public function getEnableEnterprise()
    {
        return $this->container['enableEnterprise'];
    }

    /**
    * Sets enableEnterprise
    *
    * @param bool|null $enableEnterprise 是否支持支持企业项目
    *
    * @return $this
    */
    public function setEnableEnterprise($enableEnterprise)
    {
        $this->container['enableEnterprise'] = $enableEnterprise;
        return $this;
    }

    /**
    * Gets cerAvailable
    *  是否支持SWR企业版功能
    *
    * @return bool|null
    */
    public function getCerAvailable()
    {
        return $this->container['cerAvailable'];
    }

    /**
    * Sets cerAvailable
    *
    * @param bool|null $cerAvailable 是否支持SWR企业版功能
    *
    * @return $this
    */
    public function setCerAvailable($cerAvailable)
    {
        $this->container['cerAvailable'] = $cerAvailable;
        return $this;
    }

    /**
    * Gets enableObsEncryptUserKmsKey
    *  是否支持使用已有KSM密钥ID创建OBS桶
    *
    * @return bool|null
    */
    public function getEnableObsEncryptUserKmsKey()
    {
        return $this->container['enableObsEncryptUserKmsKey'];
    }

    /**
    * Sets enableObsEncryptUserKmsKey
    *
    * @param bool|null $enableObsEncryptUserKmsKey 是否支持使用已有KSM密钥ID创建OBS桶
    *
    * @return $this
    */
    public function setEnableObsEncryptUserKmsKey($enableObsEncryptUserKmsKey)
    {
        $this->container['enableObsEncryptUserKmsKey'] = $enableObsEncryptUserKmsKey;
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

