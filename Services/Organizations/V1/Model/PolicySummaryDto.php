<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicySummaryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicySummaryDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isBuiltin  一个布尔值，指示指定的策略是否为系统策略。如果为true，即为系统策略，则可以将策略附加到根、组织单元或账号，但不能编辑它。
    * description  策略说明。
    * id  策略的唯一标识符（ID）。
    * urn  策略的统一资源名称。
    * name  策略的名称。
    * type  策略的类型,service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isBuiltin' => 'bool',
            'description' => 'string',
            'id' => 'string',
            'urn' => 'string',
            'name' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isBuiltin  一个布尔值，指示指定的策略是否为系统策略。如果为true，即为系统策略，则可以将策略附加到根、组织单元或账号，但不能编辑它。
    * description  策略说明。
    * id  策略的唯一标识符（ID）。
    * urn  策略的统一资源名称。
    * name  策略的名称。
    * type  策略的类型,service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isBuiltin' => null,
        'description' => null,
        'id' => null,
        'urn' => null,
        'name' => null,
        'type' => null
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
    * isBuiltin  一个布尔值，指示指定的策略是否为系统策略。如果为true，即为系统策略，则可以将策略附加到根、组织单元或账号，但不能编辑它。
    * description  策略说明。
    * id  策略的唯一标识符（ID）。
    * urn  策略的统一资源名称。
    * name  策略的名称。
    * type  策略的类型,service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isBuiltin' => 'is_builtin',
            'description' => 'description',
            'id' => 'id',
            'urn' => 'urn',
            'name' => 'name',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isBuiltin  一个布尔值，指示指定的策略是否为系统策略。如果为true，即为系统策略，则可以将策略附加到根、组织单元或账号，但不能编辑它。
    * description  策略说明。
    * id  策略的唯一标识符（ID）。
    * urn  策略的统一资源名称。
    * name  策略的名称。
    * type  策略的类型,service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'isBuiltin' => 'setIsBuiltin',
            'description' => 'setDescription',
            'id' => 'setId',
            'urn' => 'setUrn',
            'name' => 'setName',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isBuiltin  一个布尔值，指示指定的策略是否为系统策略。如果为true，即为系统策略，则可以将策略附加到根、组织单元或账号，但不能编辑它。
    * description  策略说明。
    * id  策略的唯一标识符（ID）。
    * urn  策略的统一资源名称。
    * name  策略的名称。
    * type  策略的类型,service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'isBuiltin' => 'getIsBuiltin',
            'description' => 'getDescription',
            'id' => 'getId',
            'urn' => 'getUrn',
            'name' => 'getName',
            'type' => 'getType'
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
        $this->container['isBuiltin'] = isset($data['isBuiltin']) ? $data['isBuiltin'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isBuiltin'] === null) {
            $invalidProperties[] = "'isBuiltin' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!preg_match("/^[\\s\\S]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s\\S]*$/.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 130)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 130.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^p-[0-9a-zA-Z_]{8,128}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^p-[0-9a-zA-Z_]{8,128}$/.";
            }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
            if ((mb_strlen($this->container['urn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1500.";
            }
            if ((mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
    * Gets isBuiltin
    *  一个布尔值，指示指定的策略是否为系统策略。如果为true，即为系统策略，则可以将策略附加到根、组织单元或账号，但不能编辑它。
    *
    * @return bool
    */
    public function getIsBuiltin()
    {
        return $this->container['isBuiltin'];
    }

    /**
    * Sets isBuiltin
    *
    * @param bool $isBuiltin 一个布尔值，指示指定的策略是否为系统策略。如果为true，即为系统策略，则可以将策略附加到根、组织单元或账号，但不能编辑它。
    *
    * @return $this
    */
    public function setIsBuiltin($isBuiltin)
    {
        $this->container['isBuiltin'] = $isBuiltin;
        return $this;
    }

    /**
    * Gets description
    *  策略说明。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 策略说明。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  策略的唯一标识符（ID）。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 策略的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets urn
    *  策略的统一资源名称。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 策略的统一资源名称。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets name
    *  策略的名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 策略的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  策略的类型,service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 策略的类型,service_control_policy：服务控制策略；tag_policy：标签策略。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

