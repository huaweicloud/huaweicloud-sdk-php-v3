<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SystemSecurityPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SystemSecurityPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  系统安全策略的名称。
    * protocols  系统安全策略的TLS协议列表。
    * ciphers  系统安全策略的加密套件列表。
    * projectId  项目id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'protocols' => 'string',
            'ciphers' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  系统安全策略的名称。
    * protocols  系统安全策略的TLS协议列表。
    * ciphers  系统安全策略的加密套件列表。
    * projectId  项目id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'protocols' => null,
        'ciphers' => null,
        'projectId' => null
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
    * name  系统安全策略的名称。
    * protocols  系统安全策略的TLS协议列表。
    * ciphers  系统安全策略的加密套件列表。
    * projectId  项目id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'protocols' => 'protocols',
            'ciphers' => 'ciphers',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  系统安全策略的名称。
    * protocols  系统安全策略的TLS协议列表。
    * ciphers  系统安全策略的加密套件列表。
    * projectId  项目id。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'protocols' => 'setProtocols',
            'ciphers' => 'setCiphers',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  系统安全策略的名称。
    * protocols  系统安全策略的TLS协议列表。
    * ciphers  系统安全策略的加密套件列表。
    * projectId  项目id。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'protocols' => 'getProtocols',
            'ciphers' => 'getCiphers',
            'projectId' => 'getProjectId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocols'] = isset($data['protocols']) ? $data['protocols'] : null;
        $this->container['ciphers'] = isset($data['ciphers']) ? $data['ciphers'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
        if ($this->container['protocols'] === null) {
            $invalidProperties[] = "'protocols' can't be null";
        }
        if ($this->container['ciphers'] === null) {
            $invalidProperties[] = "'ciphers' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    *  系统安全策略的名称。
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
    * @param string $name 系统安全策略的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protocols
    *  系统安全策略的TLS协议列表。
    *
    * @return string
    */
    public function getProtocols()
    {
        return $this->container['protocols'];
    }

    /**
    * Sets protocols
    *
    * @param string $protocols 系统安全策略的TLS协议列表。
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
    *  系统安全策略的加密套件列表。
    *
    * @return string
    */
    public function getCiphers()
    {
        return $this->container['ciphers'];
    }

    /**
    * Sets ciphers
    *
    * @param string $ciphers 系统安全策略的加密套件列表。
    *
    * @return $this
    */
    public function setCiphers($ciphers)
    {
        $this->container['ciphers'] = $ciphers;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id。
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
    * @param string $projectId 项目id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

