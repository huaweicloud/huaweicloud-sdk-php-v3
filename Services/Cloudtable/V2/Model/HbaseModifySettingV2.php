<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HbaseModifySettingV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HbaseModifySettingV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parmName  待修改的参数名
    * newValue  设置的参数值
    * id  参数ID，可不传
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parmName' => 'string',
            'newValue' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parmName  待修改的参数名
    * newValue  设置的参数值
    * id  参数ID，可不传
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parmName' => null,
        'newValue' => null,
        'id' => null
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
    * parmName  待修改的参数名
    * newValue  设置的参数值
    * id  参数ID，可不传
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parmName' => 'parm_name',
            'newValue' => 'new_value',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parmName  待修改的参数名
    * newValue  设置的参数值
    * id  参数ID，可不传
    *
    * @var string[]
    */
    protected static $setters = [
            'parmName' => 'setParmName',
            'newValue' => 'setNewValue',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parmName  待修改的参数名
    * newValue  设置的参数值
    * id  参数ID，可不传
    *
    * @var string[]
    */
    protected static $getters = [
            'parmName' => 'getParmName',
            'newValue' => 'getNewValue',
            'id' => 'getId'
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
        $this->container['parmName'] = isset($data['parmName']) ? $data['parmName'] : null;
        $this->container['newValue'] = isset($data['newValue']) ? $data['newValue'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parmName'] === null) {
            $invalidProperties[] = "'parmName' can't be null";
        }
        if ($this->container['newValue'] === null) {
            $invalidProperties[] = "'newValue' can't be null";
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
    * Gets parmName
    *  待修改的参数名
    *
    * @return string
    */
    public function getParmName()
    {
        return $this->container['parmName'];
    }

    /**
    * Sets parmName
    *
    * @param string $parmName 待修改的参数名
    *
    * @return $this
    */
    public function setParmName($parmName)
    {
        $this->container['parmName'] = $parmName;
        return $this;
    }

    /**
    * Gets newValue
    *  设置的参数值
    *
    * @return string
    */
    public function getNewValue()
    {
        return $this->container['newValue'];
    }

    /**
    * Sets newValue
    *
    * @param string $newValue 设置的参数值
    *
    * @return $this
    */
    public function setNewValue($newValue)
    {
        $this->container['newValue'] = $newValue;
        return $this;
    }

    /**
    * Gets id
    *  参数ID，可不传
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
    * @param string|null $id 参数ID，可不传
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

