<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateResolverRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateResolverRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'ipaddresses' => '\HuaweiCloud\SDK\Dns\V2\Model\IpInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'ipaddresses' => null
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
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'ipaddresses' => 'ipaddresses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'ipaddresses' => 'setIpaddresses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'ipaddresses' => 'getIpaddresses'
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
        $this->container['ipaddresses'] = isset($data['ipaddresses']) ? $data['ipaddresses'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && !preg_match("/[\\w\\u4e00-\\u9fa5\\._-]{1,64}/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\w\\u4e00-\\u9fa5\\._-]{1,64}/.";
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
    *  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
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
    * @param string|null $name 规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ipaddresses
    *  规则的目标IP地址。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\IpInfo[]|null
    */
    public function getIpaddresses()
    {
        return $this->container['ipaddresses'];
    }

    /**
    * Sets ipaddresses
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\IpInfo[]|null $ipaddresses 规则的目标IP地址。
    *
    * @return $this
    */
    public function setIpaddresses($ipaddresses)
    {
        $this->container['ipaddresses'] = $ipaddresses;
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

