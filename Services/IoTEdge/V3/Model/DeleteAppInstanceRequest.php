<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteAppInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteAppInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  边缘集群ID
    * appInstanceId  应用实例ID
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'appInstanceId' => 'string',
            'namespace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  边缘集群ID
    * appInstanceId  应用实例ID
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'appInstanceId' => null,
        'namespace' => null
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
    * clusterId  边缘集群ID
    * appInstanceId  应用实例ID
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'appInstanceId' => 'app_instance_id',
            'namespace' => 'namespace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  边缘集群ID
    * appInstanceId  应用实例ID
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'appInstanceId' => 'setAppInstanceId',
            'namespace' => 'setNamespace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  边缘集群ID
    * appInstanceId  应用实例ID
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'appInstanceId' => 'getAppInstanceId',
            'namespace' => 'getNamespace'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['appInstanceId'] = isset($data['appInstanceId']) ? $data['appInstanceId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
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
            if ((mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['appInstanceId'] === null) {
            $invalidProperties[] = "'appInstanceId' can't be null";
        }
            if ((mb_strlen($this->container['appInstanceId']) > 24)) {
                $invalidProperties[] = "invalid value for 'appInstanceId', the character length must be smaller than or equal to 24.";
            }
            if ((mb_strlen($this->container['appInstanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appInstanceId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[a-z]([-a-z0-9]*[a-z0-9])?/", $this->container['appInstanceId'])) {
                $invalidProperties[] = "invalid value for 'appInstanceId', must be conform to the pattern /[a-z]([-a-z0-9]*[a-z0-9])?/.";
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
    * Gets clusterId
    *  边缘集群ID
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
    * @param string $clusterId 边缘集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets appInstanceId
    *  应用实例ID
    *
    * @return string
    */
    public function getAppInstanceId()
    {
        return $this->container['appInstanceId'];
    }

    /**
    * Sets appInstanceId
    *
    * @param string $appInstanceId 应用实例ID
    *
    * @return $this
    */
    public function setAppInstanceId($appInstanceId)
    {
        $this->container['appInstanceId'] = $appInstanceId;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
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
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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

