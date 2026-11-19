<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectionContainerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectionContainerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-65535位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * memoryLimit  **参数解释**: 内存限制值 **取值范围**: 字符长度0-65535位
    * restartCount  **参数解释**: 重启次数 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerName' => 'string',
            'containerStatus' => 'string',
            'imageName' => 'string',
            'cpuLimit' => 'string',
            'memoryLimit' => 'string',
            'restartCount' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-65535位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * memoryLimit  **参数解释**: 内存限制值 **取值范围**: 字符长度0-65535位
    * restartCount  **参数解释**: 重启次数 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerName' => null,
        'containerStatus' => null,
        'imageName' => null,
        'cpuLimit' => null,
        'memoryLimit' => null,
        'restartCount' => null,
        'createTime' => 'int64'
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
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-65535位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * memoryLimit  **参数解释**: 内存限制值 **取值范围**: 字符长度0-65535位
    * restartCount  **参数解释**: 重启次数 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerName' => 'container_name',
            'containerStatus' => 'container_status',
            'imageName' => 'image_name',
            'cpuLimit' => 'cpu_limit',
            'memoryLimit' => 'memory_limit',
            'restartCount' => 'restart_count',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-65535位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * memoryLimit  **参数解释**: 内存限制值 **取值范围**: 字符长度0-65535位
    * restartCount  **参数解释**: 重启次数 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'containerName' => 'setContainerName',
            'containerStatus' => 'setContainerStatus',
            'imageName' => 'setImageName',
            'cpuLimit' => 'setCpuLimit',
            'memoryLimit' => 'setMemoryLimit',
            'restartCount' => 'setRestartCount',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-65535位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: 字符长度0-65535位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * memoryLimit  **参数解释**: 内存限制值 **取值范围**: 字符长度0-65535位
    * restartCount  **参数解释**: 重启次数 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'containerName' => 'getContainerName',
            'containerStatus' => 'getContainerStatus',
            'imageName' => 'getImageName',
            'cpuLimit' => 'getCpuLimit',
            'memoryLimit' => 'getMemoryLimit',
            'restartCount' => 'getRestartCount',
            'createTime' => 'getCreateTime'
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
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['containerStatus'] = isset($data['containerStatus']) ? $data['containerStatus'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['memoryLimit'] = isset($data['memoryLimit']) ? $data['memoryLimit'] : null;
        $this->container['restartCount'] = isset($data['restartCount']) ? $data['restartCount'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerStatus']) && (mb_strlen($this->container['containerStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'containerStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['containerStatus']) && (mb_strlen($this->container['containerStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) > 65535)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryLimit']) && (mb_strlen($this->container['memoryLimit']) > 65535)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['memoryLimit']) && (mb_strlen($this->container['memoryLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['restartCount']) && (mb_strlen($this->container['restartCount']) > 65535)) {
                $invalidProperties[] = "invalid value for 'restartCount', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['restartCount']) && (mb_strlen($this->container['restartCount']) < 0)) {
                $invalidProperties[] = "invalid value for 'restartCount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
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
    * Gets containerName
    *  **参数解释**: 容器名称 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName **参数解释**: 容器名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets containerStatus
    *  **参数解释**: 容器状态 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getContainerStatus()
    {
        return $this->container['containerStatus'];
    }

    /**
    * Sets containerStatus
    *
    * @param string|null $containerStatus **参数解释**: 容器状态 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setContainerStatus($containerStatus)
    {
        $this->container['containerStatus'] = $containerStatus;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets cpuLimit
    *  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getCpuLimit()
    {
        return $this->container['cpuLimit'];
    }

    /**
    * Sets cpuLimit
    *
    * @param string|null $cpuLimit **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;
        return $this;
    }

    /**
    * Gets memoryLimit
    *  **参数解释**: 内存限制值 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getMemoryLimit()
    {
        return $this->container['memoryLimit'];
    }

    /**
    * Sets memoryLimit
    *
    * @param string|null $memoryLimit **参数解释**: 内存限制值 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setMemoryLimit($memoryLimit)
    {
        $this->container['memoryLimit'] = $memoryLimit;
        return $this;
    }

    /**
    * Gets restartCount
    *  **参数解释**: 重启次数 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getRestartCount()
    {
        return $this->container['restartCount'];
    }

    /**
    * Sets restartCount
    *
    * @param string|null $restartCount **参数解释**: 重启次数 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setRestartCount($restartCount)
    {
        $this->container['restartCount'] = $restartCount;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

