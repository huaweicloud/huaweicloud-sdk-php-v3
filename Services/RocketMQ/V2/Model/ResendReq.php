<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResendReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResendReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * group  Group ID。
    * clientId  客户端ID。
    * msgIdList  消息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'group' => 'string',
            'clientId' => 'string',
            'msgIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * group  Group ID。
    * clientId  客户端ID。
    * msgIdList  消息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'group' => null,
        'clientId' => null,
        'msgIdList' => null
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
    * group  Group ID。
    * clientId  客户端ID。
    * msgIdList  消息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'group' => 'group',
            'clientId' => 'client_id',
            'msgIdList' => 'msg_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * group  Group ID。
    * clientId  客户端ID。
    * msgIdList  消息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'group' => 'setGroup',
            'clientId' => 'setClientId',
            'msgIdList' => 'setMsgIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * group  Group ID。
    * clientId  客户端ID。
    * msgIdList  消息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'group' => 'getGroup',
            'clientId' => 'getClientId',
            'msgIdList' => 'getMsgIdList'
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
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['msgIdList'] = isset($data['msgIdList']) ? $data['msgIdList'] : null;
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
    * Gets group
    *  Group ID。
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group Group ID。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets clientId
    *  客户端ID。
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId 客户端ID。
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets msgIdList
    *  消息列表。
    *
    * @return string[]|null
    */
    public function getMsgIdList()
    {
        return $this->container['msgIdList'];
    }

    /**
    * Sets msgIdList
    *
    * @param string[]|null $msgIdList 消息列表。
    *
    * @return $this
    */
    public function setMsgIdList($msgIdList)
    {
        $this->container['msgIdList'] = $msgIdList;
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

