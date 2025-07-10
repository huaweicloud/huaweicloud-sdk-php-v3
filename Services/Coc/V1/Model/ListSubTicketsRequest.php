<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubTicketsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubTicketsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketType  工单类型，此处传固定值change。
    * ticketId  变更单工单id
    * type  资源类型
    * limit  每页显示的条数
    * marker  上一页数据的最后一条记录的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketType' => 'string',
            'ticketId' => 'string',
            'type' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketType  工单类型，此处传固定值change。
    * ticketId  变更单工单id
    * type  资源类型
    * limit  每页显示的条数
    * marker  上一页数据的最后一条记录的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketType' => null,
        'ticketId' => null,
        'type' => null,
        'limit' => 'int64',
        'marker' => null
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
    * ticketType  工单类型，此处传固定值change。
    * ticketId  变更单工单id
    * type  资源类型
    * limit  每页显示的条数
    * marker  上一页数据的最后一条记录的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketType' => 'ticket_type',
            'ticketId' => 'ticket_id',
            'type' => 'type',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketType  工单类型，此处传固定值change。
    * ticketId  变更单工单id
    * type  资源类型
    * limit  每页显示的条数
    * marker  上一页数据的最后一条记录的id
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketType' => 'setTicketType',
            'ticketId' => 'setTicketId',
            'type' => 'setType',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketType  工单类型，此处传固定值change。
    * ticketId  变更单工单id
    * type  资源类型
    * limit  每页显示的条数
    * marker  上一页数据的最后一条记录的id
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketType' => 'getTicketType',
            'ticketId' => 'getTicketId',
            'type' => 'getType',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
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
            if ((mb_strlen($this->container['ticketType']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['ticketType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ticketId'] === null) {
            $invalidProperties[] = "'ticketId' can't be null";
        }
            if ((mb_strlen($this->container['ticketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['ticketId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 120)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 120.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 255)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
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
    *  工单类型，此处传固定值change。
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
    * @param string $ticketType 工单类型，此处传固定值change。
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets ticketId
    *  变更单工单id
    *
    * @return string
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string $ticketId 变更单工单id
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets type
    *  资源类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 资源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  上一页数据的最后一条记录的id
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页数据的最后一条记录的id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

