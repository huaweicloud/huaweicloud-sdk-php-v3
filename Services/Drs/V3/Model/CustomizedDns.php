<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomizedDns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomizedDns';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSetDns  是否设置客户自定义DNS。
    * setDnsAction  设置客户自定义DNS的行为。 - add：新增客户自定义DNS IP。 - keep：保持客户自定义DNS IP。 - update：更新客户自定义DNS IP（当DNS IP变化时更新生效）。 - recover：还原系统默认DNS IP（还原时可能会导致域名解析失败，请谨慎操作）。
    * dnsIp  设置客户自定义DNS IP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSetDns' => 'bool',
            'setDnsAction' => 'string',
            'dnsIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSetDns  是否设置客户自定义DNS。
    * setDnsAction  设置客户自定义DNS的行为。 - add：新增客户自定义DNS IP。 - keep：保持客户自定义DNS IP。 - update：更新客户自定义DNS IP（当DNS IP变化时更新生效）。 - recover：还原系统默认DNS IP（还原时可能会导致域名解析失败，请谨慎操作）。
    * dnsIp  设置客户自定义DNS IP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSetDns' => null,
        'setDnsAction' => null,
        'dnsIp' => null
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
    * isSetDns  是否设置客户自定义DNS。
    * setDnsAction  设置客户自定义DNS的行为。 - add：新增客户自定义DNS IP。 - keep：保持客户自定义DNS IP。 - update：更新客户自定义DNS IP（当DNS IP变化时更新生效）。 - recover：还原系统默认DNS IP（还原时可能会导致域名解析失败，请谨慎操作）。
    * dnsIp  设置客户自定义DNS IP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSetDns' => 'is_set_dns',
            'setDnsAction' => 'set_dns_action',
            'dnsIp' => 'dns_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSetDns  是否设置客户自定义DNS。
    * setDnsAction  设置客户自定义DNS的行为。 - add：新增客户自定义DNS IP。 - keep：保持客户自定义DNS IP。 - update：更新客户自定义DNS IP（当DNS IP变化时更新生效）。 - recover：还原系统默认DNS IP（还原时可能会导致域名解析失败，请谨慎操作）。
    * dnsIp  设置客户自定义DNS IP。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSetDns' => 'setIsSetDns',
            'setDnsAction' => 'setSetDnsAction',
            'dnsIp' => 'setDnsIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSetDns  是否设置客户自定义DNS。
    * setDnsAction  设置客户自定义DNS的行为。 - add：新增客户自定义DNS IP。 - keep：保持客户自定义DNS IP。 - update：更新客户自定义DNS IP（当DNS IP变化时更新生效）。 - recover：还原系统默认DNS IP（还原时可能会导致域名解析失败，请谨慎操作）。
    * dnsIp  设置客户自定义DNS IP。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSetDns' => 'getIsSetDns',
            'setDnsAction' => 'getSetDnsAction',
            'dnsIp' => 'getDnsIp'
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
    const SET_DNS_ACTION_ADD = 'add';
    const SET_DNS_ACTION_KEEP = 'keep';
    const SET_DNS_ACTION_UPDATE = 'update';
    const SET_DNS_ACTION_RECOVER = 'recover';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSetDnsActionAllowableValues()
    {
        return [
            self::SET_DNS_ACTION_ADD,
            self::SET_DNS_ACTION_KEEP,
            self::SET_DNS_ACTION_UPDATE,
            self::SET_DNS_ACTION_RECOVER,
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
        $this->container['isSetDns'] = isset($data['isSetDns']) ? $data['isSetDns'] : null;
        $this->container['setDnsAction'] = isset($data['setDnsAction']) ? $data['setDnsAction'] : null;
        $this->container['dnsIp'] = isset($data['dnsIp']) ? $data['dnsIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isSetDns'] === null) {
            $invalidProperties[] = "'isSetDns' can't be null";
        }
        if ($this->container['setDnsAction'] === null) {
            $invalidProperties[] = "'setDnsAction' can't be null";
        }
            $allowedValues = $this->getSetDnsActionAllowableValues();
                if (!is_null($this->container['setDnsAction']) && !in_array($this->container['setDnsAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'setDnsAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['dnsIp'] === null) {
            $invalidProperties[] = "'dnsIp' can't be null";
        }
            if ((mb_strlen($this->container['dnsIp']) > 15)) {
                $invalidProperties[] = "invalid value for 'dnsIp', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['dnsIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'dnsIp', the character length must be bigger than or equal to 0.";
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
    * Gets isSetDns
    *  是否设置客户自定义DNS。
    *
    * @return bool
    */
    public function getIsSetDns()
    {
        return $this->container['isSetDns'];
    }

    /**
    * Sets isSetDns
    *
    * @param bool $isSetDns 是否设置客户自定义DNS。
    *
    * @return $this
    */
    public function setIsSetDns($isSetDns)
    {
        $this->container['isSetDns'] = $isSetDns;
        return $this;
    }

    /**
    * Gets setDnsAction
    *  设置客户自定义DNS的行为。 - add：新增客户自定义DNS IP。 - keep：保持客户自定义DNS IP。 - update：更新客户自定义DNS IP（当DNS IP变化时更新生效）。 - recover：还原系统默认DNS IP（还原时可能会导致域名解析失败，请谨慎操作）。
    *
    * @return string
    */
    public function getSetDnsAction()
    {
        return $this->container['setDnsAction'];
    }

    /**
    * Sets setDnsAction
    *
    * @param string $setDnsAction 设置客户自定义DNS的行为。 - add：新增客户自定义DNS IP。 - keep：保持客户自定义DNS IP。 - update：更新客户自定义DNS IP（当DNS IP变化时更新生效）。 - recover：还原系统默认DNS IP（还原时可能会导致域名解析失败，请谨慎操作）。
    *
    * @return $this
    */
    public function setSetDnsAction($setDnsAction)
    {
        $this->container['setDnsAction'] = $setDnsAction;
        return $this;
    }

    /**
    * Gets dnsIp
    *  设置客户自定义DNS IP。
    *
    * @return string
    */
    public function getDnsIp()
    {
        return $this->container['dnsIp'];
    }

    /**
    * Sets dnsIp
    *
    * @param string $dnsIp 设置客户自定义DNS IP。
    *
    * @return $this
    */
    public function setDnsIp($dnsIp)
    {
        $this->container['dnsIp'] = $dnsIp;
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

