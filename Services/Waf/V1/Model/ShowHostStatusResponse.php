<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHostStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHostStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 域名 **取值范围：** 不涉及
    * status  **参数解释：** 域名的防护状态 **取值范围：** - enabled：防护中，WAF根据您配置的策略进行攻击检测 - disabled：未防护，WAF只转发该域名的请求，不做攻击检测 - bypassed：该域名的请求直接到达其后端服务器，不再经过WAF
    * wafInstanceId  **参数解释：** 域名ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'wafInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 域名 **取值范围：** 不涉及
    * status  **参数解释：** 域名的防护状态 **取值范围：** - enabled：防护中，WAF根据您配置的策略进行攻击检测 - disabled：未防护，WAF只转发该域名的请求，不做攻击检测 - bypassed：该域名的请求直接到达其后端服务器，不再经过WAF
    * wafInstanceId  **参数解释：** 域名ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'wafInstanceId' => null
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
    * name  **参数解释：** 域名 **取值范围：** 不涉及
    * status  **参数解释：** 域名的防护状态 **取值范围：** - enabled：防护中，WAF根据您配置的策略进行攻击检测 - disabled：未防护，WAF只转发该域名的请求，不做攻击检测 - bypassed：该域名的请求直接到达其后端服务器，不再经过WAF
    * wafInstanceId  **参数解释：** 域名ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'wafInstanceId' => 'waf_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 域名 **取值范围：** 不涉及
    * status  **参数解释：** 域名的防护状态 **取值范围：** - enabled：防护中，WAF根据您配置的策略进行攻击检测 - disabled：未防护，WAF只转发该域名的请求，不做攻击检测 - bypassed：该域名的请求直接到达其后端服务器，不再经过WAF
    * wafInstanceId  **参数解释：** 域名ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'wafInstanceId' => 'setWafInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 域名 **取值范围：** 不涉及
    * status  **参数解释：** 域名的防护状态 **取值范围：** - enabled：防护中，WAF根据您配置的策略进行攻击检测 - disabled：未防护，WAF只转发该域名的请求，不做攻击检测 - bypassed：该域名的请求直接到达其后端服务器，不再经过WAF
    * wafInstanceId  **参数解释：** 域名ID **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'wafInstanceId' => 'getWafInstanceId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['wafInstanceId'] = isset($data['wafInstanceId']) ? $data['wafInstanceId'] : null;
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
    *  **参数解释：** 域名 **取值范围：** 不涉及
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
    * @param string|null $name **参数解释：** 域名 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 域名的防护状态 **取值范围：** - enabled：防护中，WAF根据您配置的策略进行攻击检测 - disabled：未防护，WAF只转发该域名的请求，不做攻击检测 - bypassed：该域名的请求直接到达其后端服务器，不再经过WAF
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 域名的防护状态 **取值范围：** - enabled：防护中，WAF根据您配置的策略进行攻击检测 - disabled：未防护，WAF只转发该域名的请求，不做攻击检测 - bypassed：该域名的请求直接到达其后端服务器，不再经过WAF
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets wafInstanceId
    *  **参数解释：** 域名ID **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getWafInstanceId()
    {
        return $this->container['wafInstanceId'];
    }

    /**
    * Sets wafInstanceId
    *
    * @param string|null $wafInstanceId **参数解释：** 域名ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setWafInstanceId($wafInstanceId)
    {
        $this->container['wafInstanceId'] = $wafInstanceId;
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

