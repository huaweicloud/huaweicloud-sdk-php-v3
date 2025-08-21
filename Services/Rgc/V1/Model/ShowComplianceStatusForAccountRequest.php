<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowComplianceStatusForAccountRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowComplianceStatusForAccountRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * managedAccountId  纳管账号ID。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'managedAccountId' => 'string',
            'controlId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * managedAccountId  纳管账号ID。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'managedAccountId' => null,
        'controlId' => null
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
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'managedAccountId' => 'managed_account_id',
            'controlId' => 'control_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * managedAccountId  纳管账号ID。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'managedAccountId' => 'setManagedAccountId',
            'controlId' => 'setControlId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * managedAccountId  纳管账号ID。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'managedAccountId' => 'getManagedAccountId',
            'controlId' => 'getControlId'
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
        $this->container['controlId'] = isset($data['controlId']) ? $data['controlId'] : null;
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
            if (!is_null($this->container['controlId']) && (mb_strlen($this->container['controlId']) > 128)) {
                $invalidProperties[] = "invalid value for 'controlId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['controlId']) && (mb_strlen($this->container['controlId']) < 1)) {
                $invalidProperties[] = "invalid value for 'controlId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['controlId']) && !preg_match("/^[a-zA-Z0-9-_]+$/", $this->container['controlId'])) {
                $invalidProperties[] = "invalid value for 'controlId', must be conform to the pattern /^[a-zA-Z0-9-_]+$/.";
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
    * Gets controlId
    *  控制策略ID。
    *
    * @return string|null
    */
    public function getControlId()
    {
        return $this->container['controlId'];
    }

    /**
    * Sets controlId
    *
    * @param string|null $controlId 控制策略ID。
    *
    * @return $this
    */
    public function setControlId($controlId)
    {
        $this->container['controlId'] = $controlId;
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

