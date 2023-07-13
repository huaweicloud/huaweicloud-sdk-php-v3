<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronUpdateFirewallPolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronUpdateFirewallPolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：网络ACL防火墙策略名称 取值范围：最长255个字符
    * description  功能说明：网络ACL防火墙策略描述 取值范围：最长255个字符
    * firewallRules  功能说明：网络ACL策略关联的规则列表
    * audited  审计标记。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'firewallRules' => 'string[]',
            'audited' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：网络ACL防火墙策略名称 取值范围：最长255个字符
    * description  功能说明：网络ACL防火墙策略描述 取值范围：最长255个字符
    * firewallRules  功能说明：网络ACL策略关联的规则列表
    * audited  审计标记。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'firewallRules' => null,
        'audited' => null
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
    * name  功能说明：网络ACL防火墙策略名称 取值范围：最长255个字符
    * description  功能说明：网络ACL防火墙策略描述 取值范围：最长255个字符
    * firewallRules  功能说明：网络ACL策略关联的规则列表
    * audited  审计标记。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'firewallRules' => 'firewall_rules',
            'audited' => 'audited'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：网络ACL防火墙策略名称 取值范围：最长255个字符
    * description  功能说明：网络ACL防火墙策略描述 取值范围：最长255个字符
    * firewallRules  功能说明：网络ACL策略关联的规则列表
    * audited  审计标记。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'firewallRules' => 'setFirewallRules',
            'audited' => 'setAudited'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：网络ACL防火墙策略名称 取值范围：最长255个字符
    * description  功能说明：网络ACL防火墙策略描述 取值范围：最长255个字符
    * firewallRules  功能说明：网络ACL策略关联的规则列表
    * audited  审计标记。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'firewallRules' => 'getFirewallRules',
            'audited' => 'getAudited'
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
        $this->container['firewallRules'] = isset($data['firewallRules']) ? $data['firewallRules'] : null;
        $this->container['audited'] = isset($data['audited']) ? $data['audited'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  功能说明：网络ACL防火墙策略名称 取值范围：最长255个字符
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
    * @param string|null $name 功能说明：网络ACL防火墙策略名称 取值范围：最长255个字符
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
    *  功能说明：网络ACL防火墙策略描述 取值范围：最长255个字符
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
    * @param string|null $description 功能说明：网络ACL防火墙策略描述 取值范围：最长255个字符
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets firewallRules
    *  功能说明：网络ACL策略关联的规则列表
    *
    * @return string[]|null
    */
    public function getFirewallRules()
    {
        return $this->container['firewallRules'];
    }

    /**
    * Sets firewallRules
    *
    * @param string[]|null $firewallRules 功能说明：网络ACL策略关联的规则列表
    *
    * @return $this
    */
    public function setFirewallRules($firewallRules)
    {
        $this->container['firewallRules'] = $firewallRules;
        return $this;
    }

    /**
    * Gets audited
    *  审计标记。
    *
    * @return bool|null
    */
    public function getAudited()
    {
        return $this->container['audited'];
    }

    /**
    * Sets audited
    *
    * @param bool|null $audited 审计标记。
    *
    * @return $this
    */
    public function setAudited($audited)
    {
        $this->container['audited'] = $audited;
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

