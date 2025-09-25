<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulAffectImageAppPathResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulAffectImageAppPathResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  处理状态
    * appVersion  软件版本
    * appPath  软件路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'appVersion' => 'string',
            'appPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  处理状态
    * appVersion  软件版本
    * appPath  软件路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'appVersion' => null,
        'appPath' => null
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
    * status  处理状态
    * appVersion  软件版本
    * appPath  软件路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'appVersion' => 'app_version',
            'appPath' => 'app_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  处理状态
    * appVersion  软件版本
    * appPath  软件路径
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'appVersion' => 'setAppVersion',
            'appPath' => 'setAppPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  处理状态
    * appVersion  软件版本
    * appPath  软件路径
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'appVersion' => 'getAppVersion',
            'appPath' => 'getAppPath'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
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
    * Gets status
    *  处理状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 处理状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets appVersion
    *  软件版本
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 软件版本
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets appPath
    *  软件路径
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath 软件路径
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
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

