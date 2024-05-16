<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueueSrcAssignUpdateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueueSrcAssignUpdateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueAttr' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueAttr' => 'int32',
        'description' => null
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
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueAttr' => 'queue_attr',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'queueAttr' => 'setQueueAttr',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueAttr  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'queueAttr' => 'getQueueAttr',
            'description' => 'getDescription'
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
        $this->container['queueAttr'] = isset($data['queueAttr']) ? $data['queueAttr'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['queueAttr']) && ($this->container['queueAttr'] > 127)) {
                $invalidProperties[] = "invalid value for 'queueAttr', must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['queueAttr']) && ($this->container['queueAttr'] < 0)) {
                $invalidProperties[] = "invalid value for 'queueAttr', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets queueAttr
    *  队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    *
    * @return int|null
    */
    public function getQueueAttr()
    {
        return $this->container['queueAttr'];
    }

    /**
    * Sets queueAttr
    *
    * @param int|null $queueAttr 队列属性(0:默认,1:实时队列,2:离线队列), 当前只有yarn队列涉及。
    *
    * @return $this
    */
    public function setQueueAttr($queueAttr)
    {
        $this->container['queueAttr'] = $queueAttr;
        return $this;
    }

    /**
    * Gets description
    *  当前空间分配资源附加的描述信息。
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
    * @param string|null $description 当前空间分配资源附加的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

