<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RefererConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RefererConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  Referer黑白名单类型，off：关闭Referer黑白名单，black：Referer黑名单，white：Referer白名单。
    * value  域名或IP地址，以“,”进行分割，域名、IP地址可以混合输入，支持泛域名和带端口的域名。域名、IP地址总数不超过500个，端口取值范围1-65535。
    * includeEmpty  是否包含空Referer，如果是黑名单并开启该选项，则表示无referer不允许访问，如果是白名单并开启该选项，则表示无referer允许访问，true:包含空，false：不包含空，默认值false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'value' => 'string',
            'includeEmpty' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  Referer黑白名单类型，off：关闭Referer黑白名单，black：Referer黑名单，white：Referer白名单。
    * value  域名或IP地址，以“,”进行分割，域名、IP地址可以混合输入，支持泛域名和带端口的域名。域名、IP地址总数不超过500个，端口取值范围1-65535。
    * includeEmpty  是否包含空Referer，如果是黑名单并开启该选项，则表示无referer不允许访问，如果是白名单并开启该选项，则表示无referer允许访问，true:包含空，false：不包含空，默认值false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'value' => null,
        'includeEmpty' => null
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
    * type  Referer黑白名单类型，off：关闭Referer黑白名单，black：Referer黑名单，white：Referer白名单。
    * value  域名或IP地址，以“,”进行分割，域名、IP地址可以混合输入，支持泛域名和带端口的域名。域名、IP地址总数不超过500个，端口取值范围1-65535。
    * includeEmpty  是否包含空Referer，如果是黑名单并开启该选项，则表示无referer不允许访问，如果是白名单并开启该选项，则表示无referer允许访问，true:包含空，false：不包含空，默认值false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'value' => 'value',
            'includeEmpty' => 'include_empty'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  Referer黑白名单类型，off：关闭Referer黑白名单，black：Referer黑名单，white：Referer白名单。
    * value  域名或IP地址，以“,”进行分割，域名、IP地址可以混合输入，支持泛域名和带端口的域名。域名、IP地址总数不超过500个，端口取值范围1-65535。
    * includeEmpty  是否包含空Referer，如果是黑名单并开启该选项，则表示无referer不允许访问，如果是白名单并开启该选项，则表示无referer允许访问，true:包含空，false：不包含空，默认值false。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'value' => 'setValue',
            'includeEmpty' => 'setIncludeEmpty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  Referer黑白名单类型，off：关闭Referer黑白名单，black：Referer黑名单，white：Referer白名单。
    * value  域名或IP地址，以“,”进行分割，域名、IP地址可以混合输入，支持泛域名和带端口的域名。域名、IP地址总数不超过500个，端口取值范围1-65535。
    * includeEmpty  是否包含空Referer，如果是黑名单并开启该选项，则表示无referer不允许访问，如果是白名单并开启该选项，则表示无referer允许访问，true:包含空，false：不包含空，默认值false。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'value' => 'getValue',
            'includeEmpty' => 'getIncludeEmpty'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['includeEmpty'] = isset($data['includeEmpty']) ? $data['includeEmpty'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets type
    *  Referer黑白名单类型，off：关闭Referer黑白名单，black：Referer黑名单，white：Referer白名单。
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
    * @param string $type Referer黑白名单类型，off：关闭Referer黑白名单，black：Referer黑名单，white：Referer白名单。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  域名或IP地址，以“,”进行分割，域名、IP地址可以混合输入，支持泛域名和带端口的域名。域名、IP地址总数不超过500个，端口取值范围1-65535。
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
    * @param string|null $value 域名或IP地址，以“,”进行分割，域名、IP地址可以混合输入，支持泛域名和带端口的域名。域名、IP地址总数不超过500个，端口取值范围1-65535。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets includeEmpty
    *  是否包含空Referer，如果是黑名单并开启该选项，则表示无referer不允许访问，如果是白名单并开启该选项，则表示无referer允许访问，true:包含空，false：不包含空，默认值false。
    *
    * @return bool|null
    */
    public function getIncludeEmpty()
    {
        return $this->container['includeEmpty'];
    }

    /**
    * Sets includeEmpty
    *
    * @param bool|null $includeEmpty 是否包含空Referer，如果是黑名单并开启该选项，则表示无referer不允许访问，如果是白名单并开启该选项，则表示无referer允许访问，true:包含空，false：不包含空，默认值false。
    *
    * @return $this
    */
    public function setIncludeEmpty($includeEmpty)
    {
        $this->container['includeEmpty'] = $includeEmpty;
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

