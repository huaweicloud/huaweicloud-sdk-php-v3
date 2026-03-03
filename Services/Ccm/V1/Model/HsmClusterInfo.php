<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HsmClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HsmClusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hsmProject  项目信息
    * hsmClusterId  加密机集群标识符
    * hsmCaCert  pem格式证书base64之后的字符串
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hsmProject' => 'string',
            'hsmClusterId' => 'string',
            'hsmCaCert' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hsmProject  项目信息
    * hsmClusterId  加密机集群标识符
    * hsmCaCert  pem格式证书base64之后的字符串
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hsmProject' => null,
        'hsmClusterId' => null,
        'hsmCaCert' => null
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
    * hsmProject  项目信息
    * hsmClusterId  加密机集群标识符
    * hsmCaCert  pem格式证书base64之后的字符串
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hsmProject' => 'hsm_project',
            'hsmClusterId' => 'hsm_cluster_id',
            'hsmCaCert' => 'hsm_ca_cert'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hsmProject  项目信息
    * hsmClusterId  加密机集群标识符
    * hsmCaCert  pem格式证书base64之后的字符串
    *
    * @var string[]
    */
    protected static $setters = [
            'hsmProject' => 'setHsmProject',
            'hsmClusterId' => 'setHsmClusterId',
            'hsmCaCert' => 'setHsmCaCert'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hsmProject  项目信息
    * hsmClusterId  加密机集群标识符
    * hsmCaCert  pem格式证书base64之后的字符串
    *
    * @var string[]
    */
    protected static $getters = [
            'hsmProject' => 'getHsmProject',
            'hsmClusterId' => 'getHsmClusterId',
            'hsmCaCert' => 'getHsmCaCert'
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
        $this->container['hsmProject'] = isset($data['hsmProject']) ? $data['hsmProject'] : null;
        $this->container['hsmClusterId'] = isset($data['hsmClusterId']) ? $data['hsmClusterId'] : null;
        $this->container['hsmCaCert'] = isset($data['hsmCaCert']) ? $data['hsmCaCert'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hsmProject'] === null) {
            $invalidProperties[] = "'hsmProject' can't be null";
        }
            if ((mb_strlen($this->container['hsmProject']) > 64)) {
                $invalidProperties[] = "invalid value for 'hsmProject', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hsmProject']) < 1)) {
                $invalidProperties[] = "invalid value for 'hsmProject', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['hsmClusterId'] === null) {
            $invalidProperties[] = "'hsmClusterId' can't be null";
        }
            if ((mb_strlen($this->container['hsmClusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hsmClusterId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hsmClusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hsmClusterId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['hsmCaCert'] === null) {
            $invalidProperties[] = "'hsmCaCert' can't be null";
        }
            if ((mb_strlen($this->container['hsmCaCert']) > 32768)) {
                $invalidProperties[] = "invalid value for 'hsmCaCert', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['hsmCaCert']) < 1)) {
                $invalidProperties[] = "invalid value for 'hsmCaCert', the character length must be bigger than or equal to 1.";
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
    * Gets hsmProject
    *  项目信息
    *
    * @return string
    */
    public function getHsmProject()
    {
        return $this->container['hsmProject'];
    }

    /**
    * Sets hsmProject
    *
    * @param string $hsmProject 项目信息
    *
    * @return $this
    */
    public function setHsmProject($hsmProject)
    {
        $this->container['hsmProject'] = $hsmProject;
        return $this;
    }

    /**
    * Gets hsmClusterId
    *  加密机集群标识符
    *
    * @return string
    */
    public function getHsmClusterId()
    {
        return $this->container['hsmClusterId'];
    }

    /**
    * Sets hsmClusterId
    *
    * @param string $hsmClusterId 加密机集群标识符
    *
    * @return $this
    */
    public function setHsmClusterId($hsmClusterId)
    {
        $this->container['hsmClusterId'] = $hsmClusterId;
        return $this;
    }

    /**
    * Gets hsmCaCert
    *  pem格式证书base64之后的字符串
    *
    * @return string
    */
    public function getHsmCaCert()
    {
        return $this->container['hsmCaCert'];
    }

    /**
    * Sets hsmCaCert
    *
    * @param string $hsmCaCert pem格式证书base64之后的字符串
    *
    * @return $this
    */
    public function setHsmCaCert($hsmCaCert)
    {
        $this->container['hsmCaCert'] = $hsmCaCert;
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

