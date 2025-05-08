<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceTopicDetailRespReplicas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceTopicDetailResp_replicas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * broker  **参数解释**： 副本所在的节点ID。 **取值范围**： 不涉及
    * leader  **参数解释**： 该副本是否为leader。 **取值范围**： - true：该副本是leader。 - false：该副本不是leader。
    * inSync  **参数解释**： 该副本是否在ISR副本中。 **取值范围**： - true：在ISR副本中。 - false：不在ISR副本中。
    * size  **参数解释**： 该副本当前日志大小。单位：Byte。 **取值范围**： 不涉及
    * lag  **参数解释**： 该副本当前落后hw的消息数。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'broker' => 'int',
            'leader' => 'bool',
            'inSync' => 'bool',
            'size' => 'int',
            'lag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * broker  **参数解释**： 副本所在的节点ID。 **取值范围**： 不涉及
    * leader  **参数解释**： 该副本是否为leader。 **取值范围**： - true：该副本是leader。 - false：该副本不是leader。
    * inSync  **参数解释**： 该副本是否在ISR副本中。 **取值范围**： - true：在ISR副本中。 - false：不在ISR副本中。
    * size  **参数解释**： 该副本当前日志大小。单位：Byte。 **取值范围**： 不涉及
    * lag  **参数解释**： 该副本当前落后hw的消息数。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'broker' => null,
        'leader' => null,
        'inSync' => null,
        'size' => null,
        'lag' => 'int64'
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
    * broker  **参数解释**： 副本所在的节点ID。 **取值范围**： 不涉及
    * leader  **参数解释**： 该副本是否为leader。 **取值范围**： - true：该副本是leader。 - false：该副本不是leader。
    * inSync  **参数解释**： 该副本是否在ISR副本中。 **取值范围**： - true：在ISR副本中。 - false：不在ISR副本中。
    * size  **参数解释**： 该副本当前日志大小。单位：Byte。 **取值范围**： 不涉及
    * lag  **参数解释**： 该副本当前落后hw的消息数。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'broker' => 'broker',
            'leader' => 'leader',
            'inSync' => 'in_sync',
            'size' => 'size',
            'lag' => 'lag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * broker  **参数解释**： 副本所在的节点ID。 **取值范围**： 不涉及
    * leader  **参数解释**： 该副本是否为leader。 **取值范围**： - true：该副本是leader。 - false：该副本不是leader。
    * inSync  **参数解释**： 该副本是否在ISR副本中。 **取值范围**： - true：在ISR副本中。 - false：不在ISR副本中。
    * size  **参数解释**： 该副本当前日志大小。单位：Byte。 **取值范围**： 不涉及
    * lag  **参数解释**： 该副本当前落后hw的消息数。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'broker' => 'setBroker',
            'leader' => 'setLeader',
            'inSync' => 'setInSync',
            'size' => 'setSize',
            'lag' => 'setLag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * broker  **参数解释**： 副本所在的节点ID。 **取值范围**： 不涉及
    * leader  **参数解释**： 该副本是否为leader。 **取值范围**： - true：该副本是leader。 - false：该副本不是leader。
    * inSync  **参数解释**： 该副本是否在ISR副本中。 **取值范围**： - true：在ISR副本中。 - false：不在ISR副本中。
    * size  **参数解释**： 该副本当前日志大小。单位：Byte。 **取值范围**： 不涉及
    * lag  **参数解释**： 该副本当前落后hw的消息数。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'broker' => 'getBroker',
            'leader' => 'getLeader',
            'inSync' => 'getInSync',
            'size' => 'getSize',
            'lag' => 'getLag'
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
        $this->container['broker'] = isset($data['broker']) ? $data['broker'] : null;
        $this->container['leader'] = isset($data['leader']) ? $data['leader'] : null;
        $this->container['inSync'] = isset($data['inSync']) ? $data['inSync'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['lag'] = isset($data['lag']) ? $data['lag'] : null;
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
    * Gets broker
    *  **参数解释**： 副本所在的节点ID。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getBroker()
    {
        return $this->container['broker'];
    }

    /**
    * Sets broker
    *
    * @param int|null $broker **参数解释**： 副本所在的节点ID。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setBroker($broker)
    {
        $this->container['broker'] = $broker;
        return $this;
    }

    /**
    * Gets leader
    *  **参数解释**： 该副本是否为leader。 **取值范围**： - true：该副本是leader。 - false：该副本不是leader。
    *
    * @return bool|null
    */
    public function getLeader()
    {
        return $this->container['leader'];
    }

    /**
    * Sets leader
    *
    * @param bool|null $leader **参数解释**： 该副本是否为leader。 **取值范围**： - true：该副本是leader。 - false：该副本不是leader。
    *
    * @return $this
    */
    public function setLeader($leader)
    {
        $this->container['leader'] = $leader;
        return $this;
    }

    /**
    * Gets inSync
    *  **参数解释**： 该副本是否在ISR副本中。 **取值范围**： - true：在ISR副本中。 - false：不在ISR副本中。
    *
    * @return bool|null
    */
    public function getInSync()
    {
        return $this->container['inSync'];
    }

    /**
    * Sets inSync
    *
    * @param bool|null $inSync **参数解释**： 该副本是否在ISR副本中。 **取值范围**： - true：在ISR副本中。 - false：不在ISR副本中。
    *
    * @return $this
    */
    public function setInSync($inSync)
    {
        $this->container['inSync'] = $inSync;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**： 该副本当前日志大小。单位：Byte。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**： 该副本当前日志大小。单位：Byte。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets lag
    *  **参数解释**： 该副本当前落后hw的消息数。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLag()
    {
        return $this->container['lag'];
    }

    /**
    * Sets lag
    *
    * @param int|null $lag **参数解释**： 该副本当前落后hw的消息数。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLag($lag)
    {
        $this->container['lag'] = $lag;
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

