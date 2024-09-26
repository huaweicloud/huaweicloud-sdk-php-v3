<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalDcGatewayProjectId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalDcGatewayProjectId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalDcGatewayProjectId  Gdgw的项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'globalDcGatewayProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * globalDcGatewayProjectId  Gdgw的项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'globalDcGatewayProjectId' => null
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
    * globalDcGatewayProjectId  Gdgw的项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'globalDcGatewayProjectId' => 'global_dc_gateway_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * globalDcGatewayProjectId  Gdgw的项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'globalDcGatewayProjectId' => 'setGlobalDcGatewayProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * globalDcGatewayProjectId  Gdgw的项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'globalDcGatewayProjectId' => 'getGlobalDcGatewayProjectId'
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
        $this->container['globalDcGatewayProjectId'] = isset($data['globalDcGatewayProjectId']) ? $data['globalDcGatewayProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['globalDcGatewayProjectId'] === null) {
            $invalidProperties[] = "'globalDcGatewayProjectId' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewayProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['globalDcGatewayProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['globalDcGatewayProjectId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
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
    * Gets globalDcGatewayProjectId
    *  Gdgw的项目ID。
    *
    * @return string
    */
    public function getGlobalDcGatewayProjectId()
    {
        return $this->container['globalDcGatewayProjectId'];
    }

    /**
    * Sets globalDcGatewayProjectId
    *
    * @param string $globalDcGatewayProjectId Gdgw的项目ID。
    *
    * @return $this
    */
    public function setGlobalDcGatewayProjectId($globalDcGatewayProjectId)
    {
        $this->container['globalDcGatewayProjectId'] = $globalDcGatewayProjectId;
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

