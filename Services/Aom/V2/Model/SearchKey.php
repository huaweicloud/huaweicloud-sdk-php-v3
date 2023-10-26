<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchKey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchKey';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  应用名称。
    * clusterId  CCE集群ID。
    * hostIp  日志所在虚拟机IP。
    * nameSpace  CCE容器集群的命名空间。
    * pathFile  日志文件名称。
    * podName  容器实例名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'clusterId' => 'string',
            'hostIp' => 'string',
            'nameSpace' => 'string',
            'pathFile' => 'string',
            'podName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  应用名称。
    * clusterId  CCE集群ID。
    * hostIp  日志所在虚拟机IP。
    * nameSpace  CCE容器集群的命名空间。
    * pathFile  日志文件名称。
    * podName  容器实例名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'clusterId' => null,
        'hostIp' => null,
        'nameSpace' => null,
        'pathFile' => null,
        'podName' => null
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
    * appName  应用名称。
    * clusterId  CCE集群ID。
    * hostIp  日志所在虚拟机IP。
    * nameSpace  CCE容器集群的命名空间。
    * pathFile  日志文件名称。
    * podName  容器实例名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'appName',
            'clusterId' => 'clusterId',
            'hostIp' => 'hostIP',
            'nameSpace' => 'nameSpace',
            'pathFile' => 'pathFile',
            'podName' => 'podName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  应用名称。
    * clusterId  CCE集群ID。
    * hostIp  日志所在虚拟机IP。
    * nameSpace  CCE容器集群的命名空间。
    * pathFile  日志文件名称。
    * podName  容器实例名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'clusterId' => 'setClusterId',
            'hostIp' => 'setHostIp',
            'nameSpace' => 'setNameSpace',
            'pathFile' => 'setPathFile',
            'podName' => 'setPodName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  应用名称。
    * clusterId  CCE集群ID。
    * hostIp  日志所在虚拟机IP。
    * nameSpace  CCE容器集群的命名空间。
    * pathFile  日志文件名称。
    * podName  容器实例名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'clusterId' => 'getClusterId',
            'hostIp' => 'getHostIp',
            'nameSpace' => 'getNameSpace',
            'pathFile' => 'getPathFile',
            'podName' => 'getPodName'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['nameSpace'] = isset($data['nameSpace']) ? $data['nameSpace'] : null;
        $this->container['pathFile'] = isset($data['pathFile']) ? $data['pathFile'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
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
    * Gets appName
    *  应用名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 应用名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets clusterId
    *  CCE集群ID。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId CCE集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets hostIp
    *  日志所在虚拟机IP。
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 日志所在虚拟机IP。
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets nameSpace
    *  CCE容器集群的命名空间。
    *
    * @return string|null
    */
    public function getNameSpace()
    {
        return $this->container['nameSpace'];
    }

    /**
    * Sets nameSpace
    *
    * @param string|null $nameSpace CCE容器集群的命名空间。
    *
    * @return $this
    */
    public function setNameSpace($nameSpace)
    {
        $this->container['nameSpace'] = $nameSpace;
        return $this;
    }

    /**
    * Gets pathFile
    *  日志文件名称。
    *
    * @return string|null
    */
    public function getPathFile()
    {
        return $this->container['pathFile'];
    }

    /**
    * Sets pathFile
    *
    * @param string|null $pathFile 日志文件名称。
    *
    * @return $this
    */
    public function setPathFile($pathFile)
    {
        $this->container['pathFile'] = $pathFile;
        return $this;
    }

    /**
    * Gets podName
    *  容器实例名称。
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName 容器实例名称。
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
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

