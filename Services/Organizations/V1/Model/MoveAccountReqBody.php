<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MoveAccountReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MoveAccountReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceParentId  要移出账号的根或组织单元的唯一标识符（ID）。
    * destinationParentId  要移入账号的根或组织单元的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceParentId' => 'string',
            'destinationParentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceParentId  要移出账号的根或组织单元的唯一标识符（ID）。
    * destinationParentId  要移入账号的根或组织单元的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceParentId' => null,
        'destinationParentId' => null
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
    * sourceParentId  要移出账号的根或组织单元的唯一标识符（ID）。
    * destinationParentId  要移入账号的根或组织单元的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceParentId' => 'source_parent_id',
            'destinationParentId' => 'destination_parent_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceParentId  要移出账号的根或组织单元的唯一标识符（ID）。
    * destinationParentId  要移入账号的根或组织单元的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceParentId' => 'setSourceParentId',
            'destinationParentId' => 'setDestinationParentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceParentId  要移出账号的根或组织单元的唯一标识符（ID）。
    * destinationParentId  要移入账号的根或组织单元的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceParentId' => 'getSourceParentId',
            'destinationParentId' => 'getDestinationParentId'
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
        $this->container['sourceParentId'] = isset($data['sourceParentId']) ? $data['sourceParentId'] : null;
        $this->container['destinationParentId'] = isset($data['destinationParentId']) ? $data['destinationParentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceParentId'] === null) {
            $invalidProperties[] = "'sourceParentId' can't be null";
        }
            if ((mb_strlen($this->container['sourceParentId']) > 100)) {
                $invalidProperties[] = "invalid value for 'sourceParentId', the character length must be smaller than or equal to 100.";
            }
            if (!preg_match("/^(?:r-[0-9a-z]{4,32}|ou-[0-9a-z]{8,32})$/", $this->container['sourceParentId'])) {
                $invalidProperties[] = "invalid value for 'sourceParentId', must be conform to the pattern /^(?:r-[0-9a-z]{4,32}|ou-[0-9a-z]{8,32})$/.";
            }
        if ($this->container['destinationParentId'] === null) {
            $invalidProperties[] = "'destinationParentId' can't be null";
        }
            if ((mb_strlen($this->container['destinationParentId']) > 100)) {
                $invalidProperties[] = "invalid value for 'destinationParentId', the character length must be smaller than or equal to 100.";
            }
            if (!preg_match("/^(?:r-[0-9a-z]{4,32}|ou-[0-9a-z]{8,32})$/", $this->container['destinationParentId'])) {
                $invalidProperties[] = "invalid value for 'destinationParentId', must be conform to the pattern /^(?:r-[0-9a-z]{4,32}|ou-[0-9a-z]{8,32})$/.";
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
    * Gets sourceParentId
    *  要移出账号的根或组织单元的唯一标识符（ID）。
    *
    * @return string
    */
    public function getSourceParentId()
    {
        return $this->container['sourceParentId'];
    }

    /**
    * Sets sourceParentId
    *
    * @param string $sourceParentId 要移出账号的根或组织单元的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setSourceParentId($sourceParentId)
    {
        $this->container['sourceParentId'] = $sourceParentId;
        return $this;
    }

    /**
    * Gets destinationParentId
    *  要移入账号的根或组织单元的唯一标识符（ID）。
    *
    * @return string
    */
    public function getDestinationParentId()
    {
        return $this->container['destinationParentId'];
    }

    /**
    * Sets destinationParentId
    *
    * @param string $destinationParentId 要移入账号的根或组织单元的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setDestinationParentId($destinationParentId)
    {
        $this->container['destinationParentId'] = $destinationParentId;
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

