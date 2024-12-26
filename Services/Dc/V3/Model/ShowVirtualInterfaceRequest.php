<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVirtualInterfaceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVirtualInterfaceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  显示字段列表
    * virtualInterfaceId  虚拟接口ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string[]',
            'virtualInterfaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  显示字段列表
    * virtualInterfaceId  虚拟接口ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'virtualInterfaceId' => null
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
    * fields  显示字段列表
    * virtualInterfaceId  虚拟接口ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'virtualInterfaceId' => 'virtual_interface_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  显示字段列表
    * virtualInterfaceId  虚拟接口ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'virtualInterfaceId' => 'setVirtualInterfaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  显示字段列表
    * virtualInterfaceId  虚拟接口ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'virtualInterfaceId' => 'getVirtualInterfaceId'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['virtualInterfaceId'] = isset($data['virtualInterfaceId']) ? $data['virtualInterfaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['virtualInterfaceId'] === null) {
            $invalidProperties[] = "'virtualInterfaceId' can't be null";
        }
            if ((mb_strlen($this->container['virtualInterfaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'virtualInterfaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['virtualInterfaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'virtualInterfaceId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['virtualInterfaceId'])) {
                $invalidProperties[] = "invalid value for 'virtualInterfaceId', must be conform to the pattern /0|[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets fields
    *  显示字段列表
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 显示字段列表
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets virtualInterfaceId
    *  虚拟接口ID。
    *
    * @return string
    */
    public function getVirtualInterfaceId()
    {
        return $this->container['virtualInterfaceId'];
    }

    /**
    * Sets virtualInterfaceId
    *
    * @param string $virtualInterfaceId 虚拟接口ID。
    *
    * @return $this
    */
    public function setVirtualInterfaceId($virtualInterfaceId)
    {
        $this->container['virtualInterfaceId'] = $virtualInterfaceId;
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

