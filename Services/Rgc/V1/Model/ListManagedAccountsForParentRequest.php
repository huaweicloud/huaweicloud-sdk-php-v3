<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListManagedAccountsForParentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListManagedAccountsForParentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * managedOrganizationalUnitId  注册OU ID。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'managedOrganizationalUnitId' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * managedOrganizationalUnitId  注册OU ID。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'managedOrganizationalUnitId' => null,
        'limit' => 'int32',
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
    * managedOrganizationalUnitId  注册OU ID。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'managedOrganizationalUnitId' => 'managed_organizational_unit_id',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * managedOrganizationalUnitId  注册OU ID。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $setters = [
            'managedOrganizationalUnitId' => 'setManagedOrganizationalUnitId',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * managedOrganizationalUnitId  注册OU ID。
    * limit  分页页面的最大值。
    * marker  页面标记。
    *
    * @var string[]
    */
    protected static $getters = [
            'managedOrganizationalUnitId' => 'getManagedOrganizationalUnitId',
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
        $this->container['managedOrganizationalUnitId'] = isset($data['managedOrganizationalUnitId']) ? $data['managedOrganizationalUnitId'] : null;
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
        if ($this->container['managedOrganizationalUnitId'] === null) {
            $invalidProperties[] = "'managedOrganizationalUnitId' can't be null";
        }
            if ((mb_strlen($this->container['managedOrganizationalUnitId']) > 64)) {
                $invalidProperties[] = "invalid value for 'managedOrganizationalUnitId', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^ou-[0-9a-z]{8,32}$|^r-[0-9a-z]{8,32}$/", $this->container['managedOrganizationalUnitId'])) {
                $invalidProperties[] = "invalid value for 'managedOrganizationalUnitId', must be conform to the pattern /^ou-[0-9a-z]{8,32}$|^r-[0-9a-z]{8,32}$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 64)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/^[a-zA-Z0-9-_]+$/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /^[a-zA-Z0-9-_]+$/.";
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
    * Gets managedOrganizationalUnitId
    *  注册OU ID。
    *
    * @return string
    */
    public function getManagedOrganizationalUnitId()
    {
        return $this->container['managedOrganizationalUnitId'];
    }

    /**
    * Sets managedOrganizationalUnitId
    *
    * @param string $managedOrganizationalUnitId 注册OU ID。
    *
    * @return $this
    */
    public function setManagedOrganizationalUnitId($managedOrganizationalUnitId)
    {
        $this->container['managedOrganizationalUnitId'] = $managedOrganizationalUnitId;
        return $this;
    }

    /**
    * Gets limit
    *  分页页面的最大值。
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
    * @param int|null $limit 分页页面的最大值。
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
    *  页面标记。
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
    * @param string|null $marker 页面标记。
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

