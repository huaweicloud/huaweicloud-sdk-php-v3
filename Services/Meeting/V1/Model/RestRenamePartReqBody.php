<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestRenamePartReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestRenamePartReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * participantId  与会者标识。 已入会的必须填写该字段。
    * number  与会者号码。
    * newName  新名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'participantId' => 'string',
            'number' => 'string',
            'newName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * participantId  与会者标识。 已入会的必须填写该字段。
    * number  与会者号码。
    * newName  新名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'participantId' => null,
        'number' => null,
        'newName' => null
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
    * participantId  与会者标识。 已入会的必须填写该字段。
    * number  与会者号码。
    * newName  新名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'participantId' => 'participantID',
            'number' => 'number',
            'newName' => 'newName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * participantId  与会者标识。 已入会的必须填写该字段。
    * number  与会者号码。
    * newName  新名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'participantId' => 'setParticipantId',
            'number' => 'setNumber',
            'newName' => 'setNewName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * participantId  与会者标识。 已入会的必须填写该字段。
    * number  与会者号码。
    * newName  新名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'participantId' => 'getParticipantId',
            'number' => 'getNumber',
            'newName' => 'getNewName'
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
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['newName'] = isset($data['newName']) ? $data['newName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['newName'] === null) {
            $invalidProperties[] = "'newName' can't be null";
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
    * Gets participantId
    *  与会者标识。 已入会的必须填写该字段。
    *
    * @return string|null
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string|null $participantId 与会者标识。 已入会的必须填写该字段。
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets number
    *  与会者号码。
    *
    * @return string
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string $number 与会者号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets newName
    *  新名称。
    *
    * @return string
    */
    public function getNewName()
    {
        return $this->container['newName'];
    }

    /**
    * Sets newName
    *
    * @param string $newName 新名称。
    *
    * @return $this
    */
    public function setNewName($newName)
    {
        $this->container['newName'] = $newName;
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

