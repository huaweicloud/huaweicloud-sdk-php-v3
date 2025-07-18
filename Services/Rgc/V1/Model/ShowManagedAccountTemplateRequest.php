<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowManagedAccountTemplateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowManagedAccountTemplateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * managedAccountId  纳管账号ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'managedAccountId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * managedAccountId  纳管账号ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'managedAccountId' => null
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
    * managedAccountId  纳管账号ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'managedAccountId' => 'managed_account_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * managedAccountId  纳管账号ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'managedAccountId' => 'setManagedAccountId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * managedAccountId  纳管账号ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'managedAccountId' => 'getManagedAccountId'
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
        $this->container['managedAccountId'] = isset($data['managedAccountId']) ? $data['managedAccountId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['managedAccountId'] === null) {
            $invalidProperties[] = "'managedAccountId' can't be null";
        }
            if ((mb_strlen($this->container['managedAccountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'managedAccountId', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['managedAccountId'])) {
                $invalidProperties[] = "invalid value for 'managedAccountId', must be conform to the pattern /^[\\w-]+$/.";
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
    * Gets managedAccountId
    *  纳管账号ID。
    *
    * @return string
    */
    public function getManagedAccountId()
    {
        return $this->container['managedAccountId'];
    }

    /**
    * Sets managedAccountId
    *
    * @param string $managedAccountId 纳管账号ID。
    *
    * @return $this
    */
    public function setManagedAccountId($managedAccountId)
    {
        $this->container['managedAccountId'] = $managedAccountId;
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

