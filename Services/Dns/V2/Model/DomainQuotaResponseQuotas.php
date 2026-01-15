<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainQuotaResponseQuotas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainQuotaResponse_quotas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaKey  **参数解释：** 资源类型。 **取值范围：** - zone：公网域名配额 - private_zone：内网域名配额 - record_set：记录集配额 - url_record：显性/隐性URL记录集配额 - ptr_record：反向解析配额 - custom_line：自定义线路配额 - line_group：线路分组配额 - inbound_endpoint：入站终端节点配额 - outbound_endpoint：出站终端节点配额 - resolver_rule：转发规则配额
    * quotaLimit  资源配额的最大值。
    * used  配额已使用数量。
    * unit  配额统计单位，取固定值“count”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaKey' => 'string',
            'quotaLimit' => 'int',
            'used' => 'int',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaKey  **参数解释：** 资源类型。 **取值范围：** - zone：公网域名配额 - private_zone：内网域名配额 - record_set：记录集配额 - url_record：显性/隐性URL记录集配额 - ptr_record：反向解析配额 - custom_line：自定义线路配额 - line_group：线路分组配额 - inbound_endpoint：入站终端节点配额 - outbound_endpoint：出站终端节点配额 - resolver_rule：转发规则配额
    * quotaLimit  资源配额的最大值。
    * used  配额已使用数量。
    * unit  配额统计单位，取固定值“count”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaKey' => null,
        'quotaLimit' => 'int32',
        'used' => 'int32',
        'unit' => null
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
    * quotaKey  **参数解释：** 资源类型。 **取值范围：** - zone：公网域名配额 - private_zone：内网域名配额 - record_set：记录集配额 - url_record：显性/隐性URL记录集配额 - ptr_record：反向解析配额 - custom_line：自定义线路配额 - line_group：线路分组配额 - inbound_endpoint：入站终端节点配额 - outbound_endpoint：出站终端节点配额 - resolver_rule：转发规则配额
    * quotaLimit  资源配额的最大值。
    * used  配额已使用数量。
    * unit  配额统计单位，取固定值“count”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaKey' => 'quota_key',
            'quotaLimit' => 'quota_limit',
            'used' => 'used',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaKey  **参数解释：** 资源类型。 **取值范围：** - zone：公网域名配额 - private_zone：内网域名配额 - record_set：记录集配额 - url_record：显性/隐性URL记录集配额 - ptr_record：反向解析配额 - custom_line：自定义线路配额 - line_group：线路分组配额 - inbound_endpoint：入站终端节点配额 - outbound_endpoint：出站终端节点配额 - resolver_rule：转发规则配额
    * quotaLimit  资源配额的最大值。
    * used  配额已使用数量。
    * unit  配额统计单位，取固定值“count”。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaKey' => 'setQuotaKey',
            'quotaLimit' => 'setQuotaLimit',
            'used' => 'setUsed',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaKey  **参数解释：** 资源类型。 **取值范围：** - zone：公网域名配额 - private_zone：内网域名配额 - record_set：记录集配额 - url_record：显性/隐性URL记录集配额 - ptr_record：反向解析配额 - custom_line：自定义线路配额 - line_group：线路分组配额 - inbound_endpoint：入站终端节点配额 - outbound_endpoint：出站终端节点配额 - resolver_rule：转发规则配额
    * quotaLimit  资源配额的最大值。
    * used  配额已使用数量。
    * unit  配额统计单位，取固定值“count”。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaKey' => 'getQuotaKey',
            'quotaLimit' => 'getQuotaLimit',
            'used' => 'getUsed',
            'unit' => 'getUnit'
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
        $this->container['quotaKey'] = isset($data['quotaKey']) ? $data['quotaKey'] : null;
        $this->container['quotaLimit'] = isset($data['quotaLimit']) ? $data['quotaLimit'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quotaKey'] === null) {
            $invalidProperties[] = "'quotaKey' can't be null";
        }
        if ($this->container['quotaLimit'] === null) {
            $invalidProperties[] = "'quotaLimit' can't be null";
        }
        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
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
    * Gets quotaKey
    *  **参数解释：** 资源类型。 **取值范围：** - zone：公网域名配额 - private_zone：内网域名配额 - record_set：记录集配额 - url_record：显性/隐性URL记录集配额 - ptr_record：反向解析配额 - custom_line：自定义线路配额 - line_group：线路分组配额 - inbound_endpoint：入站终端节点配额 - outbound_endpoint：出站终端节点配额 - resolver_rule：转发规则配额
    *
    * @return string
    */
    public function getQuotaKey()
    {
        return $this->container['quotaKey'];
    }

    /**
    * Sets quotaKey
    *
    * @param string $quotaKey **参数解释：** 资源类型。 **取值范围：** - zone：公网域名配额 - private_zone：内网域名配额 - record_set：记录集配额 - url_record：显性/隐性URL记录集配额 - ptr_record：反向解析配额 - custom_line：自定义线路配额 - line_group：线路分组配额 - inbound_endpoint：入站终端节点配额 - outbound_endpoint：出站终端节点配额 - resolver_rule：转发规则配额
    *
    * @return $this
    */
    public function setQuotaKey($quotaKey)
    {
        $this->container['quotaKey'] = $quotaKey;
        return $this;
    }

    /**
    * Gets quotaLimit
    *  资源配额的最大值。
    *
    * @return int
    */
    public function getQuotaLimit()
    {
        return $this->container['quotaLimit'];
    }

    /**
    * Sets quotaLimit
    *
    * @param int $quotaLimit 资源配额的最大值。
    *
    * @return $this
    */
    public function setQuotaLimit($quotaLimit)
    {
        $this->container['quotaLimit'] = $quotaLimit;
        return $this;
    }

    /**
    * Gets used
    *  配额已使用数量。
    *
    * @return int
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int $used 配额已使用数量。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets unit
    *  配额统计单位，取固定值“count”。
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit 配额统计单位，取固定值“count”。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

