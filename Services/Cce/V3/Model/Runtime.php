<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Runtime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Runtime';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  容器运行时, 默认场景： - 1.25以下集群：默认为\"docker\" - 1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为欧拉2.5、欧拉2.8的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  容器运行时, 默认场景： - 1.25以下集群：默认为\"docker\" - 1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为欧拉2.5、欧拉2.8的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null
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
    * name  容器运行时, 默认场景： - 1.25以下集群：默认为\"docker\" - 1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为欧拉2.5、欧拉2.8的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  容器运行时, 默认场景： - 1.25以下集群：默认为\"docker\" - 1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为欧拉2.5、欧拉2.8的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  容器运行时, 默认场景： - 1.25以下集群：默认为\"docker\" - 1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为欧拉2.5、欧拉2.8的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName'
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
    const NAME_DOCKER = 'docker';
    const NAME_CONTAINERD = 'containerd';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_DOCKER,
            self::NAME_CONTAINERD,
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNameAllowableValues();
                if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
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
    *  容器运行时, 默认场景： - 1.25以下集群：默认为\"docker\" - 1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为欧拉2.5、欧拉2.8的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
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
    * @param string|null $name 容器运行时, 默认场景： - 1.25以下集群：默认为\"docker\" - 1.25及以上集群，随操作系统变化，默认的容器运行时不同：操作系统为欧拉2.5、欧拉2.8的节点默认为\"docker\"，其余操作系统的节点默认为\"containerd\"
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
