<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostClusterRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostClusterRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  主机集群名称
    * description  主机集群描述
    * slaveClusterId  slave集群id，默认为null时使用八爪鱼slave集群，用户自定义slave时为slave集群id
    * slaveResourceType  资源池类型，self-hosted 自托管资源池，exclusive 独享资源池
    * ansibleType  是否切换新系统支持，1：是 0：否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'slaveClusterId' => 'string',
            'slaveResourceType' => 'string',
            'ansibleType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  主机集群名称
    * description  主机集群描述
    * slaveClusterId  slave集群id，默认为null时使用八爪鱼slave集群，用户自定义slave时为slave集群id
    * slaveResourceType  资源池类型，self-hosted 自托管资源池，exclusive 独享资源池
    * ansibleType  是否切换新系统支持，1：是 0：否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'slaveClusterId' => null,
        'slaveResourceType' => null,
        'ansibleType' => null
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
    * name  主机集群名称
    * description  主机集群描述
    * slaveClusterId  slave集群id，默认为null时使用八爪鱼slave集群，用户自定义slave时为slave集群id
    * slaveResourceType  资源池类型，self-hosted 自托管资源池，exclusive 独享资源池
    * ansibleType  是否切换新系统支持，1：是 0：否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'slaveClusterId' => 'slave_cluster_id',
            'slaveResourceType' => 'slave_resource_type',
            'ansibleType' => 'ansible_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  主机集群名称
    * description  主机集群描述
    * slaveClusterId  slave集群id，默认为null时使用八爪鱼slave集群，用户自定义slave时为slave集群id
    * slaveResourceType  资源池类型，self-hosted 自托管资源池，exclusive 独享资源池
    * ansibleType  是否切换新系统支持，1：是 0：否
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'slaveClusterId' => 'setSlaveClusterId',
            'slaveResourceType' => 'setSlaveResourceType',
            'ansibleType' => 'setAnsibleType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  主机集群名称
    * description  主机集群描述
    * slaveClusterId  slave集群id，默认为null时使用八爪鱼slave集群，用户自定义slave时为slave集群id
    * slaveResourceType  资源池类型，self-hosted 自托管资源池，exclusive 独享资源池
    * ansibleType  是否切换新系统支持，1：是 0：否
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'slaveClusterId' => 'getSlaveClusterId',
            'slaveResourceType' => 'getSlaveResourceType',
            'ansibleType' => 'getAnsibleType'
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
    const SLAVE_RESOURCE_TYPE_SELF_HOSTED = 'self-hosted';
    const SLAVE_RESOURCE_TYPE_EXCLUSIVE = 'exclusive';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSlaveResourceTypeAllowableValues()
    {
        return [
            self::SLAVE_RESOURCE_TYPE_SELF_HOSTED,
            self::SLAVE_RESOURCE_TYPE_EXCLUSIVE,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['slaveResourceType'] = isset($data['slaveResourceType']) ? $data['slaveResourceType'] : null;
        $this->container['ansibleType'] = isset($data['ansibleType']) ? $data['ansibleType'] : null;
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
            if (!preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveClusterId']) && (mb_strlen($this->container['slaveClusterId']) > 32)) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['slaveClusterId']) && (mb_strlen($this->container['slaveClusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['slaveClusterId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['slaveClusterId'])) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
            $allowedValues = $this->getSlaveResourceTypeAllowableValues();
                if (!is_null($this->container['slaveResourceType']) && !in_array($this->container['slaveResourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'slaveResourceType', must be one of '%s'",
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
    * Gets name
    *  主机集群名称
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
    * @param string $name 主机集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  主机集群描述
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
    * @param string|null $description 主机集群描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  slave集群id，默认为null时使用八爪鱼slave集群，用户自定义slave时为slave集群id
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
    * @param string|null $slaveClusterId slave集群id，默认为null时使用八爪鱼slave集群，用户自定义slave时为slave集群id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
        return $this;
    }

    /**
    * Gets slaveResourceType
    *  资源池类型，self-hosted 自托管资源池，exclusive 独享资源池
    *
    * @return string|null
    */
    public function getSlaveResourceType()
    {
        return $this->container['slaveResourceType'];
    }

    /**
    * Sets slaveResourceType
    *
    * @param string|null $slaveResourceType 资源池类型，self-hosted 自托管资源池，exclusive 独享资源池
    *
    * @return $this
    */
    public function setSlaveResourceType($slaveResourceType)
    {
        $this->container['slaveResourceType'] = $slaveResourceType;
        return $this;
    }

    /**
    * Gets ansibleType
    *  是否切换新系统支持，1：是 0：否
    *
    * @return int|null
    */
    public function getAnsibleType()
    {
        return $this->container['ansibleType'];
    }

    /**
    * Sets ansibleType
    *
    * @param int|null $ansibleType 是否切换新系统支持，1：是 0：否
    *
    * @return $this
    */
    public function setAnsibleType($ansibleType)
    {
        $this->container['ansibleType'] = $ansibleType;
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

