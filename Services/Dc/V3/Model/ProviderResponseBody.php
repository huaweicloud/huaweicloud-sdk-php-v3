<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProviderResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProviderResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  运营商id
    * shortName  运营商简写
    * type  运营商类型
    * providerValue  providerValue
    * description  运营商说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'shortName' => 'string',
            'type' => 'string',
            'providerValue' => '\HuaweiCloud\SDK\Dc\V3\Model\ProviderValueBody',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  运营商id
    * shortName  运营商简写
    * type  运营商类型
    * providerValue  providerValue
    * description  运营商说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'shortName' => null,
        'type' => null,
        'providerValue' => null,
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
    * id  运营商id
    * shortName  运营商简写
    * type  运营商类型
    * providerValue  providerValue
    * description  运营商说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'shortName' => 'short_name',
            'type' => 'type',
            'providerValue' => 'provider_value',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  运营商id
    * shortName  运营商简写
    * type  运营商类型
    * providerValue  providerValue
    * description  运营商说明
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'shortName' => 'setShortName',
            'type' => 'setType',
            'providerValue' => 'setProviderValue',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  运营商id
    * shortName  运营商简写
    * type  运营商类型
    * providerValue  providerValue
    * description  运营商说明
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'shortName' => 'getShortName',
            'type' => 'getType',
            'providerValue' => 'getProviderValue',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['shortName'] = isset($data['shortName']) ? $data['shortName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['providerValue'] = isset($data['providerValue']) ? $data['providerValue'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[a-zA-Z0-9_-]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-zA-Z0-9_-]{32}/.";
            }
            if (!is_null($this->container['shortName']) && (mb_strlen($this->container['shortName']) > 36)) {
                $invalidProperties[] = "invalid value for 'shortName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['shortName']) && (mb_strlen($this->container['shortName']) < 0)) {
                $invalidProperties[] = "invalid value for 'shortName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shortName']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['shortName'])) {
                $invalidProperties[] = "invalid value for 'shortName', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && !preg_match("/[LEVEL_ONE | LEVEL_TWO]/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /[LEVEL_ONE | LEVEL_TWO]/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 36)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
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
    *  运营商id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 运营商id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets shortName
    *  运营商简写
    *
    * @return string|null
    */
    public function getShortName()
    {
        return $this->container['shortName'];
    }

    /**
    * Sets shortName
    *
    * @param string|null $shortName 运营商简写
    *
    * @return $this
    */
    public function setShortName($shortName)
    {
        $this->container['shortName'] = $shortName;
        return $this;
    }

    /**
    * Gets type
    *  运营商类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 运营商类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets providerValue
    *  providerValue
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\ProviderValueBody|null
    */
    public function getProviderValue()
    {
        return $this->container['providerValue'];
    }

    /**
    * Sets providerValue
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\ProviderValueBody|null $providerValue providerValue
    *
    * @return $this
    */
    public function setProviderValue($providerValue)
    {
        $this->container['providerValue'] = $providerValue;
        return $this;
    }

    /**
    * Gets description
    *  运营商说明
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
    * @param string|null $description 运营商说明
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

