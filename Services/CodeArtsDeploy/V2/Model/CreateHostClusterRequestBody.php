<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHostClusterRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHostClusterRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'projectId' => 'string',
            'os' => 'string',
            'slaveClusterId' => 'string',
            'description' => 'string',
            'isProxyMode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'projectId' => null,
        'os' => null,
        'slaveClusterId' => null,
        'description' => null,
        'isProxyMode' => null
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
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'projectId' => 'project_id',
            'os' => 'os',
            'slaveClusterId' => 'slave_cluster_id',
            'description' => 'description',
            'isProxyMode' => 'is_proxy_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'os' => 'setOs',
            'slaveClusterId' => 'setSlaveClusterId',
            'description' => 'setDescription',
            'isProxyMode' => 'setIsProxyMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  主机集群名
    * projectId  项目id
    * os  操作系统：windows|linux
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * description  描述
    * isProxyMode  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'os' => 'getOs',
            'slaveClusterId' => 'getSlaveClusterId',
            'description' => 'getDescription',
            'isProxyMode' => 'getIsProxyMode'
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
    const OS_WINDOWS = 'windows';
    const OS_LINUX = 'linux';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsAllowableValues()
    {
        return [
            self::OS_WINDOWS,
            self::OS_LINUX,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isProxyMode'] = isset($data['isProxyMode']) ? $data['isProxyMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
            $allowedValues = $this->getOsAllowableValues();
                if (!is_null($this->container['os']) && !in_array($this->container['os'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'os', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['slaveClusterId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['slaveClusterId'])) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['isProxyMode'] === null) {
            $invalidProperties[] = "'isProxyMode' can't be null";
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
    * Gets name
    *  主机集群名
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 主机集群名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets os
    *  操作系统：windows|linux
    *
    * @return string
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string $os 操作系统：windows|linux
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    *
    * @return string|null
    */
    public function getSlaveClusterId()
    {
        return $this->container['slaveClusterId'];
    }

    /**
    * Sets slaveClusterId
    *
    * @param string|null $slaveClusterId slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isProxyMode
    *  主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @return int
    */
    public function getIsProxyMode()
    {
        return $this->container['isProxyMode'];
    }

    /**
    * Sets isProxyMode
    *
    * @param int $isProxyMode 主机集群是否为代理机接入模式， 1：是 0：否
    *
    * @return $this
    */
    public function setIsProxyMode($isProxyMode)
    {
        $this->container['isProxyMode'] = $isProxyMode;
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

