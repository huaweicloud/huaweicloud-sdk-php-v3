<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserAgentFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserAgentFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  UA黑白名单类型 off：关闭UA黑白名单; black：UA黑名单; white：UA白名单;
    * value  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符，多条规则用“,”分割。
    * uaList  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符,同时配置value和ua_list时，ua_list生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'value' => 'string',
            'uaList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  UA黑白名单类型 off：关闭UA黑白名单; black：UA黑名单; white：UA白名单;
    * value  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符，多条规则用“,”分割。
    * uaList  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符,同时配置value和ua_list时，ua_list生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'value' => null,
        'uaList' => null
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
    * type  UA黑白名单类型 off：关闭UA黑白名单; black：UA黑名单; white：UA白名单;
    * value  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符，多条规则用“,”分割。
    * uaList  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符,同时配置value和ua_list时，ua_list生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'value' => 'value',
            'uaList' => 'ua_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  UA黑白名单类型 off：关闭UA黑白名单; black：UA黑名单; white：UA白名单;
    * value  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符，多条规则用“,”分割。
    * uaList  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符,同时配置value和ua_list时，ua_list生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'value' => 'setValue',
            'uaList' => 'setUaList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  UA黑白名单类型 off：关闭UA黑白名单; black：UA黑名单; white：UA白名单;
    * value  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符，多条规则用“,”分割。
    * uaList  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符,同时配置value和ua_list时，ua_list生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'value' => 'getValue',
            'uaList' => 'getUaList'
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
        $this->container['uaList'] = isset($data['uaList']) ? $data['uaList'] : null;
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
    *  UA黑白名单类型 off：关闭UA黑白名单; black：UA黑名单; white：UA白名单;
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
    * @param string $type UA黑白名单类型 off：关闭UA黑白名单; black：UA黑名单; white：UA白名单;
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
    *  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符，多条规则用“,”分割。
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
    * @param string|null $value 配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符，多条规则用“,”分割。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets uaList
    *  配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符,同时配置value和ua_list时，ua_list生效。
    *
    * @return string[]|null
    */
    public function getUaList()
    {
        return $this->container['uaList'];
    }

    /**
    * Sets uaList
    *
    * @param string[]|null $uaList 配置UA黑白名单，当type=off时，非必传。最多配置10条规则，单条规则不超过100个字符,同时配置value和ua_list时，ua_list生效。
    *
    * @return $this
    */
    public function setUaList($uaList)
    {
        $this->container['uaList'] = $uaList;
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

