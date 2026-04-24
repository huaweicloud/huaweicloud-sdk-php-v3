<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnTopicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnTopicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Topic的名字。
    * urn  Topic的唯一的资源标识。
    * description  Topic的描述信息。
    * pushPolicy  消息推送的策略，取值： - RETRY_ON_FAILURE：发送失败，保留到失败队列。 - DROP_ON_FAILURE：直接丢弃发送失败的消息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'urn' => 'string',
            'description' => 'string',
            'pushPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Topic的名字。
    * urn  Topic的唯一的资源标识。
    * description  Topic的描述信息。
    * pushPolicy  消息推送的策略，取值： - RETRY_ON_FAILURE：发送失败，保留到失败队列。 - DROP_ON_FAILURE：直接丢弃发送失败的消息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'urn' => null,
        'description' => null,
        'pushPolicy' => null
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
    * name  Topic的名字。
    * urn  Topic的唯一的资源标识。
    * description  Topic的描述信息。
    * pushPolicy  消息推送的策略，取值： - RETRY_ON_FAILURE：发送失败，保留到失败队列。 - DROP_ON_FAILURE：直接丢弃发送失败的消息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'urn' => 'urn',
            'description' => 'description',
            'pushPolicy' => 'push_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Topic的名字。
    * urn  Topic的唯一的资源标识。
    * description  Topic的描述信息。
    * pushPolicy  消息推送的策略，取值： - RETRY_ON_FAILURE：发送失败，保留到失败队列。 - DROP_ON_FAILURE：直接丢弃发送失败的消息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'urn' => 'setUrn',
            'description' => 'setDescription',
            'pushPolicy' => 'setPushPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Topic的名字。
    * urn  Topic的唯一的资源标识。
    * description  Topic的描述信息。
    * pushPolicy  消息推送的策略，取值： - RETRY_ON_FAILURE：发送失败，保留到失败队列。 - DROP_ON_FAILURE：直接丢弃发送失败的消息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'urn' => 'getUrn',
            'description' => 'getDescription',
            'pushPolicy' => 'getPushPolicy'
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
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['pushPolicy'] = isset($data['pushPolicy']) ? $data['pushPolicy'] : null;
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
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
        if ($this->container['pushPolicy'] === null) {
            $invalidProperties[] = "'pushPolicy' can't be null";
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
    *  Topic的名字。
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
    * @param string $name Topic的名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets urn
    *  Topic的唯一的资源标识。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn Topic的唯一的资源标识。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets description
    *  Topic的描述信息。
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
    * @param string|null $description Topic的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets pushPolicy
    *  消息推送的策略，取值： - RETRY_ON_FAILURE：发送失败，保留到失败队列。 - DROP_ON_FAILURE：直接丢弃发送失败的消息。
    *
    * @return string
    */
    public function getPushPolicy()
    {
        return $this->container['pushPolicy'];
    }

    /**
    * Sets pushPolicy
    *
    * @param string $pushPolicy 消息推送的策略，取值： - RETRY_ON_FAILURE：发送失败，保留到失败队列。 - DROP_ON_FAILURE：直接丢弃发送失败的消息。
    *
    * @return $this
    */
    public function setPushPolicy($pushPolicy)
    {
        $this->container['pushPolicy'] = $pushPolicy;
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

