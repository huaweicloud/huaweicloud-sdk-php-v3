<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParameterValuesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParameterValuesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名称。
    * value  参数值。
    * restartRequired  是否需要重启。 - false：否。 - true：是。
    * readonly  是否只读。 - false：否。 - true：是。
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * type  参数类型,可取取值如下： - string - integer - boolean  - list  - float
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'restartRequired' => 'bool',
            'readonly' => 'bool',
            'valueRange' => 'string',
            'type' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名称。
    * value  参数值。
    * restartRequired  是否需要重启。 - false：否。 - true：是。
    * readonly  是否只读。 - false：否。 - true：是。
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * type  参数类型,可取取值如下： - string - integer - boolean  - list  - float
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'restartRequired' => null,
        'readonly' => null,
        'valueRange' => null,
        'type' => null,
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
    * name  参数名称。
    * value  参数值。
    * restartRequired  是否需要重启。 - false：否。 - true：是。
    * readonly  是否只读。 - false：否。 - true：是。
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * type  参数类型,可取取值如下： - string - integer - boolean  - list  - float
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'restartRequired' => 'restart_required',
            'readonly' => 'readonly',
            'valueRange' => 'value_range',
            'type' => 'type',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名称。
    * value  参数值。
    * restartRequired  是否需要重启。 - false：否。 - true：是。
    * readonly  是否只读。 - false：否。 - true：是。
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * type  参数类型,可取取值如下： - string - integer - boolean  - list  - float
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'restartRequired' => 'setRestartRequired',
            'readonly' => 'setReadonly',
            'valueRange' => 'setValueRange',
            'type' => 'setType',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名称。
    * value  参数值。
    * restartRequired  是否需要重启。 - false：否。 - true：是。
    * readonly  是否只读。 - false：否。 - true：是。
    * valueRange  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    * type  参数类型,可取取值如下： - string - integer - boolean  - list  - float
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'restartRequired' => 'getRestartRequired',
            'readonly' => 'getReadonly',
            'valueRange' => 'getValueRange',
            'type' => 'getType',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['restartRequired'] = isset($data['restartRequired']) ? $data['restartRequired'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets name
    *  参数名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 参数名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  参数值。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 参数值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets restartRequired
    *  是否需要重启。 - false：否。 - true：是。
    *
    * @return bool|null
    */
    public function getRestartRequired()
    {
        return $this->container['restartRequired'];
    }

    /**
    * Sets restartRequired
    *
    * @param bool|null $restartRequired 是否需要重启。 - false：否。 - true：是。
    *
    * @return $this
    */
    public function setRestartRequired($restartRequired)
    {
        $this->container['restartRequired'] = $restartRequired;
        return $this;
    }

    /**
    * Gets readonly
    *  是否只读。 - false：否。 - true：是。
    *
    * @return bool|null
    */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
    * Sets readonly
    *
    * @param bool|null $readonly 是否只读。 - false：否。 - true：是。
    *
    * @return $this
    */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;
        return $this;
    }

    /**
    * Gets valueRange
    *  参数值范围，如Integer取值0-1、Boolean取值true|false等。
    *
    * @return string|null
    */
    public function getValueRange()
    {
        return $this->container['valueRange'];
    }

    /**
    * Sets valueRange
    *
    * @param string|null $valueRange 参数值范围，如Integer取值0-1、Boolean取值true|false等。
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets type
    *  参数类型,可取取值如下： - string - integer - boolean  - list  - float
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
    * @param string|null $type 参数类型,可取取值如下： - string - integer - boolean  - list  - float
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  参数描述。
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
    * @param string|null $description 参数描述。
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

