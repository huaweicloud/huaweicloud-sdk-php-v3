<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  自定义安全安全策略的id。
    * projectId  自定义安全策略的项目id。
    * name  自定义安全策略的名称
    * description  自定义安全策略的描述。
    * listeners  自定义安全策略关联的监听器。
    * protocols  自定义安全策略的TLS协议列表。
    * ciphers  自定义安全策略的加密套件列表。
    * createdAt  自定义安全策略的创建时间。
    * updatedAt  自定义安全策略的更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]',
            'protocols' => 'string[]',
            'ciphers' => 'string[]',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  自定义安全安全策略的id。
    * projectId  自定义安全策略的项目id。
    * name  自定义安全策略的名称
    * description  自定义安全策略的描述。
    * listeners  自定义安全策略关联的监听器。
    * protocols  自定义安全策略的TLS协议列表。
    * ciphers  自定义安全策略的加密套件列表。
    * createdAt  自定义安全策略的创建时间。
    * updatedAt  自定义安全策略的更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'name' => null,
        'description' => null,
        'listeners' => null,
        'protocols' => null,
        'ciphers' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  自定义安全安全策略的id。
    * projectId  自定义安全策略的项目id。
    * name  自定义安全策略的名称
    * description  自定义安全策略的描述。
    * listeners  自定义安全策略关联的监听器。
    * protocols  自定义安全策略的TLS协议列表。
    * ciphers  自定义安全策略的加密套件列表。
    * createdAt  自定义安全策略的创建时间。
    * updatedAt  自定义安全策略的更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'name' => 'name',
            'description' => 'description',
            'listeners' => 'listeners',
            'protocols' => 'protocols',
            'ciphers' => 'ciphers',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  自定义安全安全策略的id。
    * projectId  自定义安全策略的项目id。
    * name  自定义安全策略的名称
    * description  自定义安全策略的描述。
    * listeners  自定义安全策略关联的监听器。
    * protocols  自定义安全策略的TLS协议列表。
    * ciphers  自定义安全策略的加密套件列表。
    * createdAt  自定义安全策略的创建时间。
    * updatedAt  自定义安全策略的更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'description' => 'setDescription',
            'listeners' => 'setListeners',
            'protocols' => 'setProtocols',
            'ciphers' => 'setCiphers',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  自定义安全安全策略的id。
    * projectId  自定义安全策略的项目id。
    * name  自定义安全策略的名称
    * description  自定义安全策略的描述。
    * listeners  自定义安全策略关联的监听器。
    * protocols  自定义安全策略的TLS协议列表。
    * ciphers  自定义安全策略的加密套件列表。
    * createdAt  自定义安全策略的创建时间。
    * updatedAt  自定义安全策略的更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'description' => 'getDescription',
            'listeners' => 'getListeners',
            'protocols' => 'getProtocols',
            'ciphers' => 'getCiphers',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['protocols'] = isset($data['protocols']) ? $data['protocols'] : null;
        $this->container['ciphers'] = isset($data['ciphers']) ? $data['ciphers'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['protocols'] === null) {
            $invalidProperties[] = "'protocols' can't be null";
        }
        if ($this->container['ciphers'] === null) {
            $invalidProperties[] = "'ciphers' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    * Gets id
    *  自定义安全安全策略的id。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 自定义安全安全策略的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  自定义安全策略的项目id。
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
    * @param string $projectId 自定义安全策略的项目id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  自定义安全策略的名称
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
    * @param string $name 自定义安全策略的名称
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
    *  自定义安全策略的描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 自定义安全策略的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets listeners
    *  自定义安全策略关联的监听器。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[] $listeners 自定义安全策略关联的监听器。
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets protocols
    *  自定义安全策略的TLS协议列表。
    *
    * @return string[]
    */
    public function getProtocols()
    {
        return $this->container['protocols'];
    }

    /**
    * Sets protocols
    *
    * @param string[] $protocols 自定义安全策略的TLS协议列表。
    *
    * @return $this
    */
    public function setProtocols($protocols)
    {
        $this->container['protocols'] = $protocols;
        return $this;
    }

    /**
    * Gets ciphers
    *  自定义安全策略的加密套件列表。
    *
    * @return string[]
    */
    public function getCiphers()
    {
        return $this->container['ciphers'];
    }

    /**
    * Sets ciphers
    *
    * @param string[] $ciphers 自定义安全策略的加密套件列表。
    *
    * @return $this
    */
    public function setCiphers($ciphers)
    {
        $this->container['ciphers'] = $ciphers;
        return $this;
    }

    /**
    * Gets createdAt
    *  自定义安全策略的创建时间。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 自定义安全策略的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  自定义安全策略的更新时间。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 自定义安全策略的更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

