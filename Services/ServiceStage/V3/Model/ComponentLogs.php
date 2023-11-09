<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentLogs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentLogs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logPath  容器中日志路径
    * rotate  日志转储周期
    * hostPath  挂载的主机路径
    * hostExtendPath  主机扩展路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logPath' => 'string',
            'rotate' => 'string',
            'hostPath' => 'string',
            'hostExtendPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logPath  容器中日志路径
    * rotate  日志转储周期
    * hostPath  挂载的主机路径
    * hostExtendPath  主机扩展路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logPath' => null,
        'rotate' => null,
        'hostPath' => null,
        'hostExtendPath' => null
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
    * logPath  容器中日志路径
    * rotate  日志转储周期
    * hostPath  挂载的主机路径
    * hostExtendPath  主机扩展路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logPath' => 'log_path',
            'rotate' => 'rotate',
            'hostPath' => 'host_path',
            'hostExtendPath' => 'host_extend_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logPath  容器中日志路径
    * rotate  日志转储周期
    * hostPath  挂载的主机路径
    * hostExtendPath  主机扩展路径
    *
    * @var string[]
    */
    protected static $setters = [
            'logPath' => 'setLogPath',
            'rotate' => 'setRotate',
            'hostPath' => 'setHostPath',
            'hostExtendPath' => 'setHostExtendPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logPath  容器中日志路径
    * rotate  日志转储周期
    * hostPath  挂载的主机路径
    * hostExtendPath  主机扩展路径
    *
    * @var string[]
    */
    protected static $getters = [
            'logPath' => 'getLogPath',
            'rotate' => 'getRotate',
            'hostPath' => 'getHostPath',
            'hostExtendPath' => 'getHostExtendPath'
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
    const HOST_EXTEND_PATH_NONE = 'None';
    const HOST_EXTEND_PATH_POD_UID = 'PodUID';
    const HOST_EXTEND_PATH_POD_NAME = 'PodName';
    const HOST_EXTEND_PATH_POD_UID_CONTAINER_NAME = 'PodUID/ContainerName';
    const HOST_EXTEND_PATH_POD_NAME_CONTAINER_NAME = 'PodName/ContainerName';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostExtendPathAllowableValues()
    {
        return [
            self::HOST_EXTEND_PATH_NONE,
            self::HOST_EXTEND_PATH_POD_UID,
            self::HOST_EXTEND_PATH_POD_NAME,
            self::HOST_EXTEND_PATH_POD_UID_CONTAINER_NAME,
            self::HOST_EXTEND_PATH_POD_NAME_CONTAINER_NAME,
        ];
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
        $this->container['logPath'] = isset($data['logPath']) ? $data['logPath'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : null;
        $this->container['hostPath'] = isset($data['hostPath']) ? $data['hostPath'] : null;
        $this->container['hostExtendPath'] = isset($data['hostExtendPath']) ? $data['hostExtendPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logPath'] === null) {
            $invalidProperties[] = "'logPath' can't be null";
        }
        if ($this->container['rotate'] === null) {
            $invalidProperties[] = "'rotate' can't be null";
        }
        if ($this->container['hostPath'] === null) {
            $invalidProperties[] = "'hostPath' can't be null";
        }
        if ($this->container['hostExtendPath'] === null) {
            $invalidProperties[] = "'hostExtendPath' can't be null";
        }
            $allowedValues = $this->getHostExtendPathAllowableValues();
                if (!is_null($this->container['hostExtendPath']) && !in_array($this->container['hostExtendPath'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostExtendPath', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets logPath
    *  容器中日志路径
    *
    * @return string
    */
    public function getLogPath()
    {
        return $this->container['logPath'];
    }

    /**
    * Sets logPath
    *
    * @param string $logPath 容器中日志路径
    *
    * @return $this
    */
    public function setLogPath($logPath)
    {
        $this->container['logPath'] = $logPath;
        return $this;
    }

    /**
    * Gets rotate
    *  日志转储周期
    *
    * @return string
    */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /**
    * Sets rotate
    *
    * @param string $rotate 日志转储周期
    *
    * @return $this
    */
    public function setRotate($rotate)
    {
        $this->container['rotate'] = $rotate;
        return $this;
    }

    /**
    * Gets hostPath
    *  挂载的主机路径
    *
    * @return string
    */
    public function getHostPath()
    {
        return $this->container['hostPath'];
    }

    /**
    * Sets hostPath
    *
    * @param string $hostPath 挂载的主机路径
    *
    * @return $this
    */
    public function setHostPath($hostPath)
    {
        $this->container['hostPath'] = $hostPath;
        return $this;
    }

    /**
    * Gets hostExtendPath
    *  主机扩展路径
    *
    * @return string
    */
    public function getHostExtendPath()
    {
        return $this->container['hostExtendPath'];
    }

    /**
    * Sets hostExtendPath
    *
    * @param string $hostExtendPath 主机扩展路径
    *
    * @return $this
    */
    public function setHostExtendPath($hostExtendPath)
    {
        $this->container['hostExtendPath'] = $hostExtendPath;
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

