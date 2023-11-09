<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StorageParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StorageParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  主机路径， 适用于HostPath的存储类型
    * name  配置项、密钥或者PVC的名字， 适用于ConfigMap、Secret和PersistentVolumeClaim的存储类型
    * defaultMode  挂载的权限，十进制格式，如384
    * medium  适用于EmptyDir类型的存储。不传参数为默认的磁盘介质，传参为memory则开启内存存储。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'name' => 'string',
            'defaultMode' => 'int',
            'medium' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  主机路径， 适用于HostPath的存储类型
    * name  配置项、密钥或者PVC的名字， 适用于ConfigMap、Secret和PersistentVolumeClaim的存储类型
    * defaultMode  挂载的权限，十进制格式，如384
    * medium  适用于EmptyDir类型的存储。不传参数为默认的磁盘介质，传参为memory则开启内存存储。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'name' => null,
        'defaultMode' => null,
        'medium' => null
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
    * path  主机路径， 适用于HostPath的存储类型
    * name  配置项、密钥或者PVC的名字， 适用于ConfigMap、Secret和PersistentVolumeClaim的存储类型
    * defaultMode  挂载的权限，十进制格式，如384
    * medium  适用于EmptyDir类型的存储。不传参数为默认的磁盘介质，传参为memory则开启内存存储。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'name' => 'name',
            'defaultMode' => 'defaultMode',
            'medium' => 'medium'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  主机路径， 适用于HostPath的存储类型
    * name  配置项、密钥或者PVC的名字， 适用于ConfigMap、Secret和PersistentVolumeClaim的存储类型
    * defaultMode  挂载的权限，十进制格式，如384
    * medium  适用于EmptyDir类型的存储。不传参数为默认的磁盘介质，传参为memory则开启内存存储。
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'name' => 'setName',
            'defaultMode' => 'setDefaultMode',
            'medium' => 'setMedium'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  主机路径， 适用于HostPath的存储类型
    * name  配置项、密钥或者PVC的名字， 适用于ConfigMap、Secret和PersistentVolumeClaim的存储类型
    * defaultMode  挂载的权限，十进制格式，如384
    * medium  适用于EmptyDir类型的存储。不传参数为默认的磁盘介质，传参为memory则开启内存存储。
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'name' => 'getName',
            'defaultMode' => 'getDefaultMode',
            'medium' => 'getMedium'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['defaultMode'] = isset($data['defaultMode']) ? $data['defaultMode'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
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
    * Gets path
    *  主机路径， 适用于HostPath的存储类型
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 主机路径， 适用于HostPath的存储类型
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets name
    *  配置项、密钥或者PVC的名字， 适用于ConfigMap、Secret和PersistentVolumeClaim的存储类型
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 配置项、密钥或者PVC的名字， 适用于ConfigMap、Secret和PersistentVolumeClaim的存储类型
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets defaultMode
    *  挂载的权限，十进制格式，如384
    *
    * @return int|null
    */
    public function getDefaultMode()
    {
        return $this->container['defaultMode'];
    }

    /**
    * Sets defaultMode
    *
    * @param int|null $defaultMode 挂载的权限，十进制格式，如384
    *
    * @return $this
    */
    public function setDefaultMode($defaultMode)
    {
        $this->container['defaultMode'] = $defaultMode;
        return $this;
    }

    /**
    * Gets medium
    *  适用于EmptyDir类型的存储。不传参数为默认的磁盘介质，传参为memory则开启内存存储。
    *
    * @return string|null
    */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
    * Sets medium
    *
    * @param string|null $medium 适用于EmptyDir类型的存储。不传参数为默认的磁盘介质，传参为memory则开启内存存储。
    *
    * @return $this
    */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;
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

