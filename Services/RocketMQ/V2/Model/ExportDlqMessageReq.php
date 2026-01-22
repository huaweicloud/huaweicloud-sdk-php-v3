<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportDlqMessageReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportDlqMessageReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * msgIdList  **参数解释**： 消息ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * uniqKeyList  **参数解释**： 唯一Key列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'msgIdList' => 'string[]',
            'uniqKeyList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * msgIdList  **参数解释**： 消息ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * uniqKeyList  **参数解释**： 唯一Key列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'msgIdList' => null,
        'uniqKeyList' => null
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
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * msgIdList  **参数解释**： 消息ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * uniqKeyList  **参数解释**： 唯一Key列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'msgIdList' => 'msg_id_list',
            'uniqKeyList' => 'uniq_key_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * msgIdList  **参数解释**： 消息ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * uniqKeyList  **参数解释**： 唯一Key列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'msgIdList' => 'setMsgIdList',
            'uniqKeyList' => 'setUniqKeyList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * msgIdList  **参数解释**： 消息ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * uniqKeyList  **参数解释**： 唯一Key列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'msgIdList' => 'getMsgIdList',
            'uniqKeyList' => 'getUniqKeyList'
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
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['msgIdList'] = isset($data['msgIdList']) ? $data['msgIdList'] : null;
        $this->container['uniqKeyList'] = isset($data['uniqKeyList']) ? $data['uniqKeyList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        if ($this->container['msgIdList'] === null) {
            $invalidProperties[] = "'msgIdList' can't be null";
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
    * Gets topic
    *  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets msgIdList
    *  **参数解释**： 消息ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @return string[]
    */
    public function getMsgIdList()
    {
        return $this->container['msgIdList'];
    }

    /**
    * Sets msgIdList
    *
    * @param string[] $msgIdList **参数解释**： 消息ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setMsgIdList($msgIdList)
    {
        $this->container['msgIdList'] = $msgIdList;
        return $this;
    }

    /**
    * Gets uniqKeyList
    *  **参数解释**： 唯一Key列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @return string[]|null
    */
    public function getUniqKeyList()
    {
        return $this->container['uniqKeyList'];
    }

    /**
    * Sets uniqKeyList
    *
    * @param string[]|null $uniqKeyList **参数解释**： 唯一Key列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setUniqKeyList($uniqKeyList)
    {
        $this->container['uniqKeyList'] = $uniqKeyList;
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

