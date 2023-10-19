<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnterpriseRouterProjectId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnterpriseRouterProjectId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseRouterProjectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseRouterProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseRouterProjectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseRouterProjectId' => null
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
    * enterpriseRouterProjectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseRouterProjectId' => 'enterprise_router_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseRouterProjectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseRouterProjectId' => 'setEnterpriseRouterProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseRouterProjectId  实例所属项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseRouterProjectId' => 'getEnterpriseRouterProjectId'
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
        $this->container['enterpriseRouterProjectId'] = isset($data['enterpriseRouterProjectId']) ? $data['enterpriseRouterProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enterpriseRouterProjectId'] === null) {
            $invalidProperties[] = "'enterpriseRouterProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['enterpriseRouterProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['enterpriseRouterProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
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
    * Gets enterpriseRouterProjectId
    *  实例所属项目ID。
    *
    * @return string
    */
    public function getEnterpriseRouterProjectId()
    {
        return $this->container['enterpriseRouterProjectId'];
    }

    /**
    * Sets enterpriseRouterProjectId
    *
    * @param string $enterpriseRouterProjectId 实例所属项目ID。
    *
    * @return $this
    */
    public function setEnterpriseRouterProjectId($enterpriseRouterProjectId)
    {
        $this->container['enterpriseRouterProjectId'] = $enterpriseRouterProjectId;
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

