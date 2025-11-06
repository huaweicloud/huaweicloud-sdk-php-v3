<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  代码组描述信息
    * fullName  代码组全名
    * id  代码组id
    * name  错误码
    * visibility  可见性, private public
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'fullName' => 'object',
            'id' => 'int',
            'name' => 'string',
            'visibility' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  代码组描述信息
    * fullName  代码组全名
    * id  代码组id
    * name  错误码
    * visibility  可见性, private public
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'fullName' => null,
        'id' => null,
        'name' => null,
        'visibility' => null
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
    * description  代码组描述信息
    * fullName  代码组全名
    * id  代码组id
    * name  错误码
    * visibility  可见性, private public
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'fullName' => 'full_name',
            'id' => 'id',
            'name' => 'name',
            'visibility' => 'visibility'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  代码组描述信息
    * fullName  代码组全名
    * id  代码组id
    * name  错误码
    * visibility  可见性, private public
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'fullName' => 'setFullName',
            'id' => 'setId',
            'name' => 'setName',
            'visibility' => 'setVisibility'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  代码组描述信息
    * fullName  代码组全名
    * id  代码组id
    * name  错误码
    * visibility  可见性, private public
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'fullName' => 'getFullName',
            'id' => 'getId',
            'name' => 'getName',
            'visibility' => 'getVisibility'
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
    const VISIBILITY__PUBLIC = 'public';
    const VISIBILITY__PRIVATE = 'private';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY__PUBLIC,
            self::VISIBILITY__PRIVATE,
        ];
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 20)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getVisibilityAllowableValues();
                if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets description
    *  代码组描述信息
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
    * @param string|null $description 代码组描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets fullName
    *  代码组全名
    *
    * @return object|null
    */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
    * Sets fullName
    *
    * @param object|null $fullName 代码组全名
    *
    * @return $this
    */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;
        return $this;
    }

    /**
    * Gets id
    *  代码组id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 代码组id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  错误码
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
    * @param string|null $name 错误码
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets visibility
    *  可见性, private public
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility 可见性, private public
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
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

