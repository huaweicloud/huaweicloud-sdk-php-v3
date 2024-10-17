<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachedEnterpriseRouterProjectId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachedEnterpriseRouterProjectId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attachedErTableProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attachedErTableProjectId' => null
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
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attachedErTableProjectId' => 'attached_er_table_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'attachedErTableProjectId' => 'setAttachedErTableProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attachedErTableProjectId  被挂载的企业路由器的项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'attachedErTableProjectId' => 'getAttachedErTableProjectId'
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
        $this->container['attachedErTableProjectId'] = isset($data['attachedErTableProjectId']) ? $data['attachedErTableProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['attachedErTableProjectId'] === null) {
            $invalidProperties[] = "'attachedErTableProjectId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErTableProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['attachedErTableProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['attachedErTableProjectId'])) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
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
    * Gets attachedErTableProjectId
    *  被挂载的企业路由器的项目ID。
    *
    * @return string
    */
    public function getAttachedErTableProjectId()
    {
        return $this->container['attachedErTableProjectId'];
    }

    /**
    * Sets attachedErTableProjectId
    *
    * @param string $attachedErTableProjectId 被挂载的企业路由器的项目ID。
    *
    * @return $this
    */
    public function setAttachedErTableProjectId($attachedErTableProjectId)
    {
        $this->container['attachedErTableProjectId'] = $attachedErTableProjectId;
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

