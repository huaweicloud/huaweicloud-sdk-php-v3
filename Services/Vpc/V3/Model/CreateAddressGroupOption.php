<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAddressGroupOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAddressGroupOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'ipVersion' => 'int',
            'ipSet' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'ipVersion' => 'int32',
        'ipSet' => null
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
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'ipVersion' => 'ip_version',
            'ipSet' => 'ip_set'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'ipVersion' => 'setIpVersion',
            'ipSet' => 'setIpSet'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'ipVersion' => 'getIpVersion',
            'ipSet' => 'getIpSet'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['ipSet'] = isset($data['ipSet']) ? $data['ipSet'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
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
    *  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
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
    * @param string|null $description 功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion 功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets ipSet
    *  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @return string[]|null
    */
    public function getIpSet()
    {
        return $this->container['ipSet'];
    }

    /**
    * Sets ipSet
    *
    * @param string[]|null $ipSet 功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @return $this
    */
    public function setIpSet($ipSet)
    {
        $this->container['ipSet'] = $ipSet;
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

