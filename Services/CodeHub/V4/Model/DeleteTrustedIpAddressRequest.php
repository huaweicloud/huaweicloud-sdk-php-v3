<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteTrustedIpAddressRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteTrustedIpAddressRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库id，代码仓首页，Repository ID后的数字Id。
    * ipId  **参数解释：** ip白名单id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'ipId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库id，代码仓首页，Repository ID后的数字Id。
    * ipId  **参数解释：** ip白名单id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ipId' => null
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
    * id  **参数解释：** 仓库id，代码仓首页，Repository ID后的数字Id。
    * ipId  **参数解释：** ip白名单id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ipId' => 'ip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库id，代码仓首页，Repository ID后的数字Id。
    * ipId  **参数解释：** ip白名单id。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ipId' => 'setIpId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库id，代码仓首页，Repository ID后的数字Id。
    * ipId  **参数解释：** ip白名单id。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ipId' => 'getIpId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipId'] = isset($data['ipId']) ? $data['ipId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
        if ($this->container['ipId'] === null) {
            $invalidProperties[] = "'ipId' can't be null";
        }
            if (($this->container['ipId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ipId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['ipId'] < 1)) {
                $invalidProperties[] = "invalid value for 'ipId', must be bigger than or equal to 1.";
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
    * Gets id
    *  **参数解释：** 仓库id，代码仓首页，Repository ID后的数字Id。
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id **参数解释：** 仓库id，代码仓首页，Repository ID后的数字Id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipId
    *  **参数解释：** ip白名单id。
    *
    * @return int
    */
    public function getIpId()
    {
        return $this->container['ipId'];
    }

    /**
    * Sets ipId
    *
    * @param int $ipId **参数解释：** ip白名单id。
    *
    * @return $this
    */
    public function setIpId($ipId)
    {
        $this->container['ipId'] = $ipId;
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

