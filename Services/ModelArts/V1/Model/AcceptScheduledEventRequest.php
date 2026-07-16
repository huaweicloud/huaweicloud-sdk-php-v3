<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AcceptScheduledEventRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AcceptScheduledEventRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventId  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：不涉及。 **取值范围**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventId' => 'string',
            'workspaceId' => 'string',
            'body' => '\HuaweiCloud\SDK\ModelArts\V1\Model\EventUpdate'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventId  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：不涉及。 **取值范围**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventId' => null,
        'workspaceId' => null,
        'body' => null
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
    * eventId  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：不涉及。 **取值范围**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventId' => 'event_id',
            'workspaceId' => 'workspaceId',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventId  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：不涉及。 **取值范围**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'eventId' => 'setEventId',
            'workspaceId' => 'setWorkspaceId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventId  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：不涉及。 **取值范围**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'eventId' => 'getEventId',
            'workspaceId' => 'getWorkspaceId',
            'body' => 'getBody'
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
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventId'] === null) {
            $invalidProperties[] = "'eventId' can't be null";
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
    * Gets eventId
    *  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：不涉及。 **取值范围**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string $eventId **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：不涉及。 **取值范围**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\EventUpdate|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\EventUpdate|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

