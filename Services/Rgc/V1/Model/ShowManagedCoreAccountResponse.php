<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowManagedCoreAccountResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowManagedCoreAccountResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * coreResourceMappings  核心资源映射。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'accountName' => 'string',
            'coreResourceMappings' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * coreResourceMappings  核心资源映射。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'accountName' => null,
        'coreResourceMappings' => null
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
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * coreResourceMappings  核心资源映射。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'accountName' => 'account_name',
            'coreResourceMappings' => 'core_resource_mappings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * coreResourceMappings  核心资源映射。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'accountName' => 'setAccountName',
            'coreResourceMappings' => 'setCoreResourceMappings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * coreResourceMappings  核心资源映射。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'accountName' => 'getAccountName',
            'coreResourceMappings' => 'getCoreResourceMappings'
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['coreResourceMappings'] = isset($data['coreResourceMappings']) ? $data['coreResourceMappings'] : null;
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
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) > 32)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) < 6)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 6.";
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
    *  纳管账号ID。
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
    * @param string|null $accountId 纳管账号ID。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accountName
    *  纳管账号名称。
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName 纳管账号名称。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets coreResourceMappings
    *  核心资源映射。
    *
    * @return map[string,string]|null
    */
    public function getCoreResourceMappings()
    {
        return $this->container['coreResourceMappings'];
    }

    /**
    * Sets coreResourceMappings
    *
    * @param map[string,string]|null $coreResourceMappings 核心资源映射。
    *
    * @return $this
    */
    public function setCoreResourceMappings($coreResourceMappings)
    {
        $this->container['coreResourceMappings'] = $coreResourceMappings;
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

