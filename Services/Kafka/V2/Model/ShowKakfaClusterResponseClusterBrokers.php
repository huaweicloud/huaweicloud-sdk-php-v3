<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKakfaClusterResponseClusterBrokers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKakfaClusterResponse_cluster_brokers';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * health  **参数解释**： 是否健康。   **取值范围**： - true：健康。 - false：不健康。
    * host  **参数解释**： Host地址。   **取值范围**： 不涉及。
    * port  **参数解释**： 端口。   **取值范围**： 不涉及。
    * brokerId  **参数解释**： 节点ID。   **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'health' => 'bool',
            'host' => 'string',
            'port' => 'int',
            'brokerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * health  **参数解释**： 是否健康。   **取值范围**： - true：健康。 - false：不健康。
    * host  **参数解释**： Host地址。   **取值范围**： 不涉及。
    * port  **参数解释**： 端口。   **取值范围**： 不涉及。
    * brokerId  **参数解释**： 节点ID。   **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'health' => null,
        'host' => null,
        'port' => 'int32',
        'brokerId' => null
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
    * health  **参数解释**： 是否健康。   **取值范围**： - true：健康。 - false：不健康。
    * host  **参数解释**： Host地址。   **取值范围**： 不涉及。
    * port  **参数解释**： 端口。   **取值范围**： 不涉及。
    * brokerId  **参数解释**： 节点ID。   **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'health' => 'health',
            'host' => 'host',
            'port' => 'port',
            'brokerId' => 'broker_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * health  **参数解释**： 是否健康。   **取值范围**： - true：健康。 - false：不健康。
    * host  **参数解释**： Host地址。   **取值范围**： 不涉及。
    * port  **参数解释**： 端口。   **取值范围**： 不涉及。
    * brokerId  **参数解释**： 节点ID。   **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'health' => 'setHealth',
            'host' => 'setHost',
            'port' => 'setPort',
            'brokerId' => 'setBrokerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * health  **参数解释**： 是否健康。   **取值范围**： - true：健康。 - false：不健康。
    * host  **参数解释**： Host地址。   **取值范围**： 不涉及。
    * port  **参数解释**： 端口。   **取值范围**： 不涉及。
    * brokerId  **参数解释**： 节点ID。   **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'health' => 'getHealth',
            'host' => 'getHost',
            'port' => 'getPort',
            'brokerId' => 'getBrokerId'
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
        $this->container['health'] = isset($data['health']) ? $data['health'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['brokerId'] = isset($data['brokerId']) ? $data['brokerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets health
    *  **参数解释**： 是否健康。   **取值范围**： - true：健康。 - false：不健康。
    *
    * @return bool|null
    */
    public function getHealth()
    {
        return $this->container['health'];
    }

    /**
    * Sets health
    *
    * @param bool|null $health **参数解释**： 是否健康。   **取值范围**： - true：健康。 - false：不健康。
    *
    * @return $this
    */
    public function setHealth($health)
    {
        $this->container['health'] = $health;
        return $this;
    }

    /**
    * Gets host
    *  **参数解释**： Host地址。   **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host **参数解释**： Host地址。   **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**： 端口。   **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释**： 端口。   **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets brokerId
    *  **参数解释**： 节点ID。   **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBrokerId()
    {
        return $this->container['brokerId'];
    }

    /**
    * Sets brokerId
    *
    * @param string|null $brokerId **参数解释**： 节点ID。   **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerId($brokerId)
    {
        $this->container['brokerId'] = $brokerId;
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

