<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePrivateNatOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePrivateNatOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  私网NAT网关实例的名字。 私网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  私网NAT网关的描述。长度范围小于等于255个字符，不能包含<>
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'spec' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  私网NAT网关实例的名字。 私网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  私网NAT网关的描述。长度范围小于等于255个字符，不能包含<>
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'spec' => null
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
    * name  私网NAT网关实例的名字。 私网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  私网NAT网关的描述。长度范围小于等于255个字符，不能包含<>
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'spec' => 'spec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  私网NAT网关实例的名字。 私网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  私网NAT网关的描述。长度范围小于等于255个字符，不能包含<>
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'spec' => 'setSpec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  私网NAT网关实例的名字。 私网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * description  私网NAT网关的描述。长度范围小于等于255个字符，不能包含<>
    * spec  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'spec' => 'getSpec'
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
    const SPEC_SMALL = 'Small';
    const SPEC_MEDIUM = 'Medium';
    const SPEC_LARGE = 'Large';
    const SPEC_EXTRA_LARGE = 'Extra-large';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecAllowableValues()
    {
        return [
            self::SPEC_SMALL,
            self::SPEC_MEDIUM,
            self::SPEC_LARGE,
            self::SPEC_EXTRA_LARGE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSpecAllowableValues();
                if (!is_null($this->container['spec']) && !in_array($this->container['spec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'spec', must be one of '%s'",
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
    * Gets name
    *  私网NAT网关实例的名字。 私网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
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
    * @param string|null $name 私网NAT网关实例的名字。 私网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  私网NAT网关的描述。长度范围小于等于255个字符，不能包含<>
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
    * @param string|null $description 私网NAT网关的描述。长度范围小于等于255个字符，不能包含<>
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets spec
    *  私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型
    *
    * @return string|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string|null $spec 私网NAT网关实例的规格。 取值为： \"Small\"：小型 \"Medium\"：中型 \"Large\"：大型 \"Extra-large\"：超大型
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
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

