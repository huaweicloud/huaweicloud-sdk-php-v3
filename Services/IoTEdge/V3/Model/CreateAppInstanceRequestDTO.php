<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAppInstanceRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAppInstanceRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * appId  应用ID
    * appVersion  应用版本
    * values  应用实例chart配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'namespace' => 'string',
            'appId' => 'string',
            'appVersion' => 'string',
            'values' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * appId  应用ID
    * appVersion  应用版本
    * values  应用实例chart配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'namespace' => null,
        'appId' => null,
        'appVersion' => null,
        'values' => null
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
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * appId  应用ID
    * appVersion  应用版本
    * values  应用实例chart配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'namespace' => 'namespace',
            'appId' => 'app_id',
            'appVersion' => 'app_version',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * appId  应用ID
    * appVersion  应用版本
    * values  应用实例chart配置
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'namespace' => 'setNamespace',
            'appId' => 'setAppId',
            'appVersion' => 'setAppVersion',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  应用实例ID
    * namespace  边缘集群命名空间
    * appId  应用ID
    * appVersion  应用版本
    * values  应用实例chart配置
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'namespace' => 'getNamespace',
            'appId' => 'getAppId',
            'appVersion' => 'getAppVersion',
            'values' => 'getValues'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
            if ((mb_strlen($this->container['id']) > 24)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 24.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[a-z]([-a-z0-9]*[a-z0-9])?/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-z]([-a-z0-9]*[a-z0-9])?/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 63)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/[a-z0-9]([-a-z0-9]*[a-z0-9])?/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /[a-z0-9]([-a-z0-9]*[a-z0-9])?/.";
            }
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
            if ((mb_strlen($this->container['appId']) > 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['appVersion'] === null) {
            $invalidProperties[] = "'appVersion' can't be null";
        }
            if ((mb_strlen($this->container['appVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['appVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[0-9]+\\.[0-9]+\\.[0-9]+/", $this->container['appVersion'])) {
                $invalidProperties[] = "invalid value for 'appVersion', must be conform to the pattern /[0-9]+\\.[0-9]+\\.[0-9]+/.";
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
    *  应用实例ID
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
    * @param string $id 应用实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets namespace
    *  边缘集群命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 边缘集群命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appVersion
    *  应用版本
    *
    * @return string
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string $appVersion 应用版本
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets values
    *  应用实例chart配置
    *
    * @return object|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param object|null $values 应用实例chart配置
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

