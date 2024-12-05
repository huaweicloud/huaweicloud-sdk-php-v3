<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateGdgwRoutetableRequestBodyGdgwRoutetableUpdateRoutes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateGdgwRoutetableRequestBody_gdgw_routetable_update_routes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destination  目的地址
    * nexthop  下一跳
    * description  描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destination' => 'string',
            'nexthop' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destination  目的地址
    * nexthop  下一跳
    * description  描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destination' => null,
        'nexthop' => null,
        'description' => null
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
    * destination  目的地址
    * nexthop  下一跳
    * description  描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destination' => 'destination',
            'nexthop' => 'nexthop',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destination  目的地址
    * nexthop  下一跳
    * description  描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'destination' => 'setDestination',
            'nexthop' => 'setNexthop',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destination  目的地址
    * nexthop  下一跳
    * description  描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'destination' => 'getDestination',
            'nexthop' => 'getNexthop',
            'description' => 'getDescription'
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
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['nexthop'] = isset($data['nexthop']) ? $data['nexthop'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
            if ((mb_strlen($this->container['destination']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 2147483647.";
            }
            if ((mb_strlen($this->container['destination']) < 0)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nexthop'] === null) {
            $invalidProperties[] = "'nexthop' can't be null";
        }
            if ((mb_strlen($this->container['nexthop']) > 255)) {
                $invalidProperties[] = "invalid value for 'nexthop', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['nexthop']) < 0)) {
                $invalidProperties[] = "invalid value for 'nexthop', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>`]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>`]*$/.";
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
    * Gets destination
    *  目的地址
    *
    * @return string
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string $destination 目的地址
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets nexthop
    *  下一跳
    *
    * @return string
    */
    public function getNexthop()
    {
        return $this->container['nexthop'];
    }

    /**
    * Sets nexthop
    *
    * @param string $nexthop 下一跳
    *
    * @return $this
    */
    public function setNexthop($nexthop)
    {
        $this->container['nexthop'] = $nexthop;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

