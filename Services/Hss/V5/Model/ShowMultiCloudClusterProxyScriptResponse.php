<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMultiCloudClusterProxyScriptResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMultiCloudClusterProxyScriptResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * installScript  代理安装脚本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'installScript' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * installScript  代理安装脚本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'installScript' => null
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
    * installScript  代理安装脚本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'installScript' => 'install_script'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * installScript  代理安装脚本
    *
    * @var string[]
    */
    protected static $setters = [
            'installScript' => 'setInstallScript'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * installScript  代理安装脚本
    *
    * @var string[]
    */
    protected static $getters = [
            'installScript' => 'getInstallScript'
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
        $this->container['installScript'] = isset($data['installScript']) ? $data['installScript'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['installScript']) && (mb_strlen($this->container['installScript']) > 20480)) {
                $invalidProperties[] = "invalid value for 'installScript', the character length must be smaller than or equal to 20480.";
            }
            if (!is_null($this->container['installScript']) && (mb_strlen($this->container['installScript']) < 1)) {
                $invalidProperties[] = "invalid value for 'installScript', the character length must be bigger than or equal to 1.";
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
    * Gets installScript
    *  代理安装脚本
    *
    * @return string|null
    */
    public function getInstallScript()
    {
        return $this->container['installScript'];
    }

    /**
    * Sets installScript
    *
    * @param string|null $installScript 代理安装脚本
    *
    * @return $this
    */
    public function setInstallScript($installScript)
    {
        $this->container['installScript'] = $installScript;
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

