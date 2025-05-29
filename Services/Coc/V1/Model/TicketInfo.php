<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicketInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicketInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketId  四号单id
    * ticketType  四号单类型，可选CHANGE/INCIDENT/ALARM/WARROOM
    * targetId  四号单关联的应用id
    * scopeId  region id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketId' => 'string',
            'ticketType' => 'string',
            'targetId' => 'string',
            'scopeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketId  四号单id
    * ticketType  四号单类型，可选CHANGE/INCIDENT/ALARM/WARROOM
    * targetId  四号单关联的应用id
    * scopeId  region id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketId' => null,
        'ticketType' => null,
        'targetId' => null,
        'scopeId' => null
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
    * ticketId  四号单id
    * ticketType  四号单类型，可选CHANGE/INCIDENT/ALARM/WARROOM
    * targetId  四号单关联的应用id
    * scopeId  region id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketId' => 'ticket_id',
            'ticketType' => 'ticket_type',
            'targetId' => 'target_id',
            'scopeId' => 'scope_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketId  四号单id
    * ticketType  四号单类型，可选CHANGE/INCIDENT/ALARM/WARROOM
    * targetId  四号单关联的应用id
    * scopeId  region id
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketId' => 'setTicketId',
            'ticketType' => 'setTicketType',
            'targetId' => 'setTargetId',
            'scopeId' => 'setScopeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketId  四号单id
    * ticketType  四号单类型，可选CHANGE/INCIDENT/ALARM/WARROOM
    * targetId  四号单关联的应用id
    * scopeId  region id
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketId' => 'getTicketId',
            'ticketType' => 'getTicketType',
            'targetId' => 'getTargetId',
            'scopeId' => 'getScopeId'
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
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['scopeId'] = isset($data['scopeId']) ? $data['scopeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketType']) && (mb_strlen($this->container['ticketType']) > 50)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['ticketType']) && (mb_strlen($this->container['ticketType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scopeId']) && (mb_strlen($this->container['scopeId']) > 50)) {
                $invalidProperties[] = "invalid value for 'scopeId', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['scopeId']) && (mb_strlen($this->container['scopeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'scopeId', the character length must be bigger than or equal to 0.";
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
    * Gets ticketId
    *  四号单id
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 四号单id
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets ticketType
    *  四号单类型，可选CHANGE/INCIDENT/ALARM/WARROOM
    *
    * @return string|null
    */
    public function getTicketType()
    {
        return $this->container['ticketType'];
    }

    /**
    * Sets ticketType
    *
    * @param string|null $ticketType 四号单类型，可选CHANGE/INCIDENT/ALARM/WARROOM
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets targetId
    *  四号单关联的应用id
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 四号单关联的应用id
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets scopeId
    *  region id
    *
    * @return string|null
    */
    public function getScopeId()
    {
        return $this->container['scopeId'];
    }

    /**
    * Sets scopeId
    *
    * @param string|null $scopeId region id
    *
    * @return $this
    */
    public function setScopeId($scopeId)
    {
        $this->container['scopeId'] = $scopeId;
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

