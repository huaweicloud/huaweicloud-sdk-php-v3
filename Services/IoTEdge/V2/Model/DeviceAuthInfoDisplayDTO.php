<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceAuthInfoDisplayDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceAuthInfoDisplayDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authType  边缘节点认证方式。
    * localPath  localPath
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authType' => 'string',
            'localPath' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\CertificateLocalPathDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authType  边缘节点认证方式。
    * localPath  localPath
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authType' => null,
        'localPath' => null
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
    * authType  边缘节点认证方式。
    * localPath  localPath
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authType' => 'auth_type',
            'localPath' => 'local_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authType  边缘节点认证方式。
    * localPath  localPath
    *
    * @var string[]
    */
    protected static $setters = [
            'authType' => 'setAuthType',
            'localPath' => 'setLocalPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authType  边缘节点认证方式。
    * localPath  localPath
    *
    * @var string[]
    */
    protected static $getters = [
            'authType' => 'getAuthType',
            'localPath' => 'getLocalPath'
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
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['localPath'] = isset($data['localPath']) ? $data['localPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authType'] === null) {
            $invalidProperties[] = "'authType' can't be null";
        }
            if (!preg_match("/(SECRET|CERTIFICATES)/", $this->container['authType'])) {
                $invalidProperties[] = "invalid value for 'authType', must be conform to the pattern /(SECRET|CERTIFICATES)/.";
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
    * Gets authType
    *  边缘节点认证方式。
    *
    * @return string
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string $authType 边缘节点认证方式。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets localPath
    *  localPath
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\CertificateLocalPathDTO|null
    */
    public function getLocalPath()
    {
        return $this->container['localPath'];
    }

    /**
    * Sets localPath
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\CertificateLocalPathDTO|null $localPath localPath
    *
    * @return $this
    */
    public function setLocalPath($localPath)
    {
        $this->container['localPath'] = $localPath;
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

