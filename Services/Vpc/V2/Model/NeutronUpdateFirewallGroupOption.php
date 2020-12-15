<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronUpdateFirewallGroupOption implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronUpdateFirewallGroupOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'description' => 'string',
            'egressFirewallPolicyId' => 'string',
            'ingressFirewallPolicyId' => 'string',
            'name' => 'string',
            'ports' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'description' => null,
        'egressFirewallPolicyId' => null,
        'ingressFirewallPolicyId' => null,
        'name' => null,
        'ports' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'description' => 'description',
            'egressFirewallPolicyId' => 'egress_firewall_policy_id',
            'ingressFirewallPolicyId' => 'ingress_firewall_policy_id',
            'name' => 'name',
            'ports' => 'ports'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'description' => 'setDescription',
            'egressFirewallPolicyId' => 'setEgressFirewallPolicyId',
            'ingressFirewallPolicyId' => 'setIngressFirewallPolicyId',
            'name' => 'setName',
            'ports' => 'setPorts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'description' => 'getDescription',
            'egressFirewallPolicyId' => 'getEgressFirewallPolicyId',
            'ingressFirewallPolicyId' => 'getIngressFirewallPolicyId',
            'name' => 'getName',
            'ports' => 'getPorts'
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : true;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['egressFirewallPolicyId'] = isset($data['egressFirewallPolicyId']) ? $data['egressFirewallPolicyId'] : null;
        $this->container['ingressFirewallPolicyId'] = isset($data['ingressFirewallPolicyId']) ? $data['ingressFirewallPolicyId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['egressFirewallPolicyId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['egressFirewallPolicyId'])) {
                $invalidProperties[] = "invalid value for 'egressFirewallPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['ingressFirewallPolicyId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['ingressFirewallPolicyId'])) {
                $invalidProperties[] = "invalid value for 'ingressFirewallPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    * Gets adminStateUp
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 网络ACL防火墙是否受管理员控制。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets description
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
    * @param string|null $description 功能说明：网络ACL防火墙组描述 取值范围：最长255个字符
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets egressFirewallPolicyId
    *
    * @return string|null
    */
    public function getEgressFirewallPolicyId()
    {
        return $this->container['egressFirewallPolicyId'];
    }

    /**
    * Sets egressFirewallPolicyId
    *
    * @param string|null $egressFirewallPolicyId 出方向网络ACL防火墙策略。
    *
    * @return $this
    */
    public function setEgressFirewallPolicyId($egressFirewallPolicyId)
    {
        $this->container['egressFirewallPolicyId'] = $egressFirewallPolicyId;
        return $this;
    }

    /**
    * Gets ingressFirewallPolicyId
    *
    * @return string|null
    */
    public function getIngressFirewallPolicyId()
    {
        return $this->container['ingressFirewallPolicyId'];
    }

    /**
    * Sets ingressFirewallPolicyId
    *
    * @param string|null $ingressFirewallPolicyId 入方向网络ACL防火墙策略。
    *
    * @return $this
    */
    public function setIngressFirewallPolicyId($ingressFirewallPolicyId)
    {
        $this->container['ingressFirewallPolicyId'] = $ingressFirewallPolicyId;
        return $this;
    }

    /**
    * Gets name
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
    * @param string|null $name 功能说明：网络ACL防火墙组名称 取值范围：最长255个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ports
    *
    * @return string[]|null
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param string[]|null $ports 功能说明：网络ACL防火墙组绑定的端口列表 约束：必须为分布式router的端口id
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
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

