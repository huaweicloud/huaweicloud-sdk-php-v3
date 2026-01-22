<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetCallerIdentityResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetCallerIdentityResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  账号ID。
    * principalUrn  主体URN。
    * principalId  主体ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'principalUrn' => 'string',
            'principalId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  账号ID。
    * principalUrn  主体URN。
    * principalId  主体ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'principalUrn' => null,
        'principalId' => null
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
    * accountId  账号ID。
    * principalUrn  主体URN。
    * principalId  主体ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'principalUrn' => 'principal_urn',
            'principalId' => 'principal_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  账号ID。
    * principalUrn  主体URN。
    * principalId  主体ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'principalUrn' => 'setPrincipalUrn',
            'principalId' => 'setPrincipalId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  账号ID。
    * principalUrn  主体URN。
    * principalId  主体ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'principalUrn' => 'getPrincipalUrn',
            'principalId' => 'getPrincipalId'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['principalUrn'] = isset($data['principalUrn']) ? $data['principalUrn'] : null;
        $this->container['principalId'] = isset($data['principalId']) ? $data['principalId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountId']) && !preg_match("/^[\\w-]+$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['principalUrn']) && (mb_strlen($this->container['principalUrn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'principalUrn', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['principalUrn']) && (mb_strlen($this->container['principalUrn']) < 4)) {
                $invalidProperties[] = "invalid value for 'principalUrn', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['principalId']) && (mb_strlen($this->container['principalId']) > 256)) {
                $invalidProperties[] = "invalid value for 'principalId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['principalId']) && (mb_strlen($this->container['principalId']) < 2)) {
                $invalidProperties[] = "invalid value for 'principalId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['principalId']) && !preg_match("/^[\\w+=,.@:-]*$/", $this->container['principalId'])) {
                $invalidProperties[] = "invalid value for 'principalId', must be conform to the pattern /^[\\w+=,.@:-]*$/.";
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
    * Gets accountId
    *  账号ID。
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 账号ID。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets principalUrn
    *  主体URN。
    *
    * @return string|null
    */
    public function getPrincipalUrn()
    {
        return $this->container['principalUrn'];
    }

    /**
    * Sets principalUrn
    *
    * @param string|null $principalUrn 主体URN。
    *
    * @return $this
    */
    public function setPrincipalUrn($principalUrn)
    {
        $this->container['principalUrn'] = $principalUrn;
        return $this;
    }

    /**
    * Gets principalId
    *  主体ID。
    *
    * @return string|null
    */
    public function getPrincipalId()
    {
        return $this->container['principalId'];
    }

    /**
    * Sets principalId
    *
    * @param string|null $principalId 主体ID。
    *
    * @return $this
    */
    public function setPrincipalId($principalId)
    {
        $this->container['principalId'] = $principalId;
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

