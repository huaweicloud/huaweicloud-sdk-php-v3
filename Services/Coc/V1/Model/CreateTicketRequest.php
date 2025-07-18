<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTicketRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTicketRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketType  **参数解释：** 需要创建的工单类型，如需创建变更单传值change，如需创建问题单传值issues_mgmt。 **约束限制：** 不涉及 **取值范围：** 枚举值：change/issues_mgmt 当前支持的工单类型：变更单传值change，问题单传值issues_mgmt **默认取值：** incident
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketType' => 'string',
            'body' => '\HuaweiCloud\SDK\Coc\V1\Model\CreateCocTicketRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketType  **参数解释：** 需要创建的工单类型，如需创建变更单传值change，如需创建问题单传值issues_mgmt。 **约束限制：** 不涉及 **取值范围：** 枚举值：change/issues_mgmt 当前支持的工单类型：变更单传值change，问题单传值issues_mgmt **默认取值：** incident
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketType' => null,
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
    * ticketType  **参数解释：** 需要创建的工单类型，如需创建变更单传值change，如需创建问题单传值issues_mgmt。 **约束限制：** 不涉及 **取值范围：** 枚举值：change/issues_mgmt 当前支持的工单类型：变更单传值change，问题单传值issues_mgmt **默认取值：** incident
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketType' => 'ticket_type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketType  **参数解释：** 需要创建的工单类型，如需创建变更单传值change，如需创建问题单传值issues_mgmt。 **约束限制：** 不涉及 **取值范围：** 枚举值：change/issues_mgmt 当前支持的工单类型：变更单传值change，问题单传值issues_mgmt **默认取值：** incident
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketType' => 'setTicketType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketType  **参数解释：** 需要创建的工单类型，如需创建变更单传值change，如需创建问题单传值issues_mgmt。 **约束限制：** 不涉及 **取值范围：** 枚举值：change/issues_mgmt 当前支持的工单类型：变更单传值change，问题单传值issues_mgmt **默认取值：** incident
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketType' => 'getTicketType',
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
    const TICKET_TYPE_CHANGE = 'change';
    const TICKET_TYPE_ISSUES_MGMT = 'issues_mgmt';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTicketTypeAllowableValues()
    {
        return [
            self::TICKET_TYPE_CHANGE,
            self::TICKET_TYPE_ISSUES_MGMT,
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
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
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
        if ($this->container['ticketType'] === null) {
            $invalidProperties[] = "'ticketType' can't be null";
        }
            $allowedValues = $this->getTicketTypeAllowableValues();
                if (!is_null($this->container['ticketType']) && !in_array($this->container['ticketType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ticketType', must be one of '%s'",
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
    * Gets ticketType
    *  **参数解释：** 需要创建的工单类型，如需创建变更单传值change，如需创建问题单传值issues_mgmt。 **约束限制：** 不涉及 **取值范围：** 枚举值：change/issues_mgmt 当前支持的工单类型：变更单传值change，问题单传值issues_mgmt **默认取值：** incident
    *
    * @return string
    */
    public function getTicketType()
    {
        return $this->container['ticketType'];
    }

    /**
    * Sets ticketType
    *
    * @param string $ticketType **参数解释：** 需要创建的工单类型，如需创建变更单传值change，如需创建问题单传值issues_mgmt。 **约束限制：** 不涉及 **取值范围：** 枚举值：change/issues_mgmt 当前支持的工单类型：变更单传值change，问题单传值issues_mgmt **默认取值：** incident
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CreateCocTicketRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CreateCocTicketRequestBody|null $body body
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

