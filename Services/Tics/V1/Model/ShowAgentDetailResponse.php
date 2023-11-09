<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAgentDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAgentDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentDeploy  agentDeploy
    * agentDeployBcs  agentDeployBcs
    * agentDeployDetail  agentDeployDetail
    * agentDeployNat  agentDeployNat
    * agentDeployNode  agentDeployNode
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentDeploy' => '\HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeploy',
            'agentDeployBcs' => '\HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeployBcs',
            'agentDeployDetail' => '\HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeployDetail',
            'agentDeployNat' => '\HuaweiCloud\SDK\Tics\V1\Model\TicsAgentNatCommonInfo',
            'agentDeployNode' => '\HuaweiCloud\SDK\Tics\V1\Model\TicsAgentNodeInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentDeploy  agentDeploy
    * agentDeployBcs  agentDeployBcs
    * agentDeployDetail  agentDeployDetail
    * agentDeployNat  agentDeployNat
    * agentDeployNode  agentDeployNode
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentDeploy' => null,
        'agentDeployBcs' => null,
        'agentDeployDetail' => null,
        'agentDeployNat' => null,
        'agentDeployNode' => null
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
    * agentDeploy  agentDeploy
    * agentDeployBcs  agentDeployBcs
    * agentDeployDetail  agentDeployDetail
    * agentDeployNat  agentDeployNat
    * agentDeployNode  agentDeployNode
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentDeploy' => 'agent_deploy',
            'agentDeployBcs' => 'agent_deploy_bcs',
            'agentDeployDetail' => 'agent_deploy_detail',
            'agentDeployNat' => 'agent_deploy_nat',
            'agentDeployNode' => 'agent_deploy_node'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentDeploy  agentDeploy
    * agentDeployBcs  agentDeployBcs
    * agentDeployDetail  agentDeployDetail
    * agentDeployNat  agentDeployNat
    * agentDeployNode  agentDeployNode
    *
    * @var string[]
    */
    protected static $setters = [
            'agentDeploy' => 'setAgentDeploy',
            'agentDeployBcs' => 'setAgentDeployBcs',
            'agentDeployDetail' => 'setAgentDeployDetail',
            'agentDeployNat' => 'setAgentDeployNat',
            'agentDeployNode' => 'setAgentDeployNode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentDeploy  agentDeploy
    * agentDeployBcs  agentDeployBcs
    * agentDeployDetail  agentDeployDetail
    * agentDeployNat  agentDeployNat
    * agentDeployNode  agentDeployNode
    *
    * @var string[]
    */
    protected static $getters = [
            'agentDeploy' => 'getAgentDeploy',
            'agentDeployBcs' => 'getAgentDeployBcs',
            'agentDeployDetail' => 'getAgentDeployDetail',
            'agentDeployNat' => 'getAgentDeployNat',
            'agentDeployNode' => 'getAgentDeployNode'
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
        $this->container['agentDeploy'] = isset($data['agentDeploy']) ? $data['agentDeploy'] : null;
        $this->container['agentDeployBcs'] = isset($data['agentDeployBcs']) ? $data['agentDeployBcs'] : null;
        $this->container['agentDeployDetail'] = isset($data['agentDeployDetail']) ? $data['agentDeployDetail'] : null;
        $this->container['agentDeployNat'] = isset($data['agentDeployNat']) ? $data['agentDeployNat'] : null;
        $this->container['agentDeployNode'] = isset($data['agentDeployNode']) ? $data['agentDeployNode'] : null;
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
    * Gets agentDeploy
    *  agentDeploy
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeploy|null
    */
    public function getAgentDeploy()
    {
        return $this->container['agentDeploy'];
    }

    /**
    * Sets agentDeploy
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeploy|null $agentDeploy agentDeploy
    *
    * @return $this
    */
    public function setAgentDeploy($agentDeploy)
    {
        $this->container['agentDeploy'] = $agentDeploy;
        return $this;
    }

    /**
    * Gets agentDeployBcs
    *  agentDeployBcs
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeployBcs|null
    */
    public function getAgentDeployBcs()
    {
        return $this->container['agentDeployBcs'];
    }

    /**
    * Sets agentDeployBcs
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeployBcs|null $agentDeployBcs agentDeployBcs
    *
    * @return $this
    */
    public function setAgentDeployBcs($agentDeployBcs)
    {
        $this->container['agentDeployBcs'] = $agentDeployBcs;
        return $this;
    }

    /**
    * Gets agentDeployDetail
    *  agentDeployDetail
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeployDetail|null
    */
    public function getAgentDeployDetail()
    {
        return $this->container['agentDeployDetail'];
    }

    /**
    * Sets agentDeployDetail
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentDeployDetail|null $agentDeployDetail agentDeployDetail
    *
    * @return $this
    */
    public function setAgentDeployDetail($agentDeployDetail)
    {
        $this->container['agentDeployDetail'] = $agentDeployDetail;
        return $this;
    }

    /**
    * Gets agentDeployNat
    *  agentDeployNat
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentNatCommonInfo|null
    */
    public function getAgentDeployNat()
    {
        return $this->container['agentDeployNat'];
    }

    /**
    * Sets agentDeployNat
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentNatCommonInfo|null $agentDeployNat agentDeployNat
    *
    * @return $this
    */
    public function setAgentDeployNat($agentDeployNat)
    {
        $this->container['agentDeployNat'] = $agentDeployNat;
        return $this;
    }

    /**
    * Gets agentDeployNode
    *  agentDeployNode
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentNodeInfo|null
    */
    public function getAgentDeployNode()
    {
        return $this->container['agentDeployNode'];
    }

    /**
    * Sets agentDeployNode
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\TicsAgentNodeInfo|null $agentDeployNode agentDeployNode
    *
    * @return $this
    */
    public function setAgentDeployNode($agentDeployNode)
    {
        $this->container['agentDeployNode'] = $agentDeployNode;
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

