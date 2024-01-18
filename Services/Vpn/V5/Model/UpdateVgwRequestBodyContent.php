<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateVgwRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateVgwRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  网关名称
    * localSubnets  本端子网
    * eipId1  主eip的ID。用于给VPN网关绑定新的主EIP，需要先解绑当前的主EIP
    * eipId2  备eip的ID。用于给VPN网关绑定新的备EIP，需要先解绑当前的备EIP
    * policyTemplate  policyTemplate
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'localSubnets' => 'string[]',
            'eipId1' => 'string',
            'eipId2' => 'string',
            'policyTemplate' => '\HuaweiCloud\SDK\Vpn\V5\Model\UpdateRequestPolicyTemplate'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  网关名称
    * localSubnets  本端子网
    * eipId1  主eip的ID。用于给VPN网关绑定新的主EIP，需要先解绑当前的主EIP
    * eipId2  备eip的ID。用于给VPN网关绑定新的备EIP，需要先解绑当前的备EIP
    * policyTemplate  policyTemplate
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'localSubnets' => null,
        'eipId1' => null,
        'eipId2' => null,
        'policyTemplate' => null
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
    * name  网关名称
    * localSubnets  本端子网
    * eipId1  主eip的ID。用于给VPN网关绑定新的主EIP，需要先解绑当前的主EIP
    * eipId2  备eip的ID。用于给VPN网关绑定新的备EIP，需要先解绑当前的备EIP
    * policyTemplate  policyTemplate
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'localSubnets' => 'local_subnets',
            'eipId1' => 'eip_id_1',
            'eipId2' => 'eip_id_2',
            'policyTemplate' => 'policy_template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  网关名称
    * localSubnets  本端子网
    * eipId1  主eip的ID。用于给VPN网关绑定新的主EIP，需要先解绑当前的主EIP
    * eipId2  备eip的ID。用于给VPN网关绑定新的备EIP，需要先解绑当前的备EIP
    * policyTemplate  policyTemplate
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'localSubnets' => 'setLocalSubnets',
            'eipId1' => 'setEipId1',
            'eipId2' => 'setEipId2',
            'policyTemplate' => 'setPolicyTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  网关名称
    * localSubnets  本端子网
    * eipId1  主eip的ID。用于给VPN网关绑定新的主EIP，需要先解绑当前的主EIP
    * eipId2  备eip的ID。用于给VPN网关绑定新的备EIP，需要先解绑当前的备EIP
    * policyTemplate  policyTemplate
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'localSubnets' => 'getLocalSubnets',
            'eipId1' => 'getEipId1',
            'eipId2' => 'getEipId2',
            'policyTemplate' => 'getPolicyTemplate'
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
        $this->container['localSubnets'] = isset($data['localSubnets']) ? $data['localSubnets'] : null;
        $this->container['eipId1'] = isset($data['eipId1']) ? $data['eipId1'] : null;
        $this->container['eipId2'] = isset($data['eipId2']) ? $data['eipId2'] : null;
        $this->container['policyTemplate'] = isset($data['policyTemplate']) ? $data['policyTemplate'] : null;
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
            if (!is_null($this->container['name']) && !preg_match("/[一-龥a-zA-Z0-9-_.]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥a-zA-Z0-9-_.]+/.";
            }
            if (!is_null($this->container['eipId1']) && (mb_strlen($this->container['eipId1']) > 36)) {
                $invalidProperties[] = "invalid value for 'eipId1', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['eipId1']) && (mb_strlen($this->container['eipId1']) < 36)) {
                $invalidProperties[] = "invalid value for 'eipId1', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['eipId1']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['eipId1'])) {
                $invalidProperties[] = "invalid value for 'eipId1', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['eipId2']) && (mb_strlen($this->container['eipId2']) > 36)) {
                $invalidProperties[] = "invalid value for 'eipId2', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['eipId2']) && (mb_strlen($this->container['eipId2']) < 36)) {
                $invalidProperties[] = "invalid value for 'eipId2', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['eipId2']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['eipId2'])) {
                $invalidProperties[] = "invalid value for 'eipId2', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    *  网关名称
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
    * @param string|null $name 网关名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets localSubnets
    *  本端子网
    *
    * @return string[]|null
    */
    public function getLocalSubnets()
    {
        return $this->container['localSubnets'];
    }

    /**
    * Sets localSubnets
    *
    * @param string[]|null $localSubnets 本端子网
    *
    * @return $this
    */
    public function setLocalSubnets($localSubnets)
    {
        $this->container['localSubnets'] = $localSubnets;
        return $this;
    }

    /**
    * Gets eipId1
    *  主eip的ID。用于给VPN网关绑定新的主EIP，需要先解绑当前的主EIP
    *
    * @return string|null
    */
    public function getEipId1()
    {
        return $this->container['eipId1'];
    }

    /**
    * Sets eipId1
    *
    * @param string|null $eipId1 主eip的ID。用于给VPN网关绑定新的主EIP，需要先解绑当前的主EIP
    *
    * @return $this
    */
    public function setEipId1($eipId1)
    {
        $this->container['eipId1'] = $eipId1;
        return $this;
    }

    /**
    * Gets eipId2
    *  备eip的ID。用于给VPN网关绑定新的备EIP，需要先解绑当前的备EIP
    *
    * @return string|null
    */
    public function getEipId2()
    {
        return $this->container['eipId2'];
    }

    /**
    * Sets eipId2
    *
    * @param string|null $eipId2 备eip的ID。用于给VPN网关绑定新的备EIP，需要先解绑当前的备EIP
    *
    * @return $this
    */
    public function setEipId2($eipId2)
    {
        $this->container['eipId2'] = $eipId2;
        return $this;
    }

    /**
    * Gets policyTemplate
    *  policyTemplate
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\UpdateRequestPolicyTemplate|null
    */
    public function getPolicyTemplate()
    {
        return $this->container['policyTemplate'];
    }

    /**
    * Sets policyTemplate
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\UpdateRequestPolicyTemplate|null $policyTemplate policyTemplate
    *
    * @return $this
    */
    public function setPolicyTemplate($policyTemplate)
    {
        $this->container['policyTemplate'] = $policyTemplate;
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

