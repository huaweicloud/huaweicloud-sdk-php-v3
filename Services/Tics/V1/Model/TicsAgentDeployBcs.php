<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsAgentDeployBcs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsAgentDeployBcs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  可信节点Id
    * bcsIp  区块链ip
    * blockChainId  区块链Id
    * blockChainName  区块链名称
    * channelName  通道名称
    * orgName  组织名称
    * orgNameHash  组织名称的hash
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'bcsIp' => 'string',
            'blockChainId' => 'string',
            'blockChainName' => 'string',
            'channelName' => 'string',
            'orgName' => 'string',
            'orgNameHash' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  可信节点Id
    * bcsIp  区块链ip
    * blockChainId  区块链Id
    * blockChainName  区块链名称
    * channelName  通道名称
    * orgName  组织名称
    * orgNameHash  组织名称的hash
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'bcsIp' => null,
        'blockChainId' => null,
        'blockChainName' => null,
        'channelName' => null,
        'orgName' => null,
        'orgNameHash' => null
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
    * agentId  可信节点Id
    * bcsIp  区块链ip
    * blockChainId  区块链Id
    * blockChainName  区块链名称
    * channelName  通道名称
    * orgName  组织名称
    * orgNameHash  组织名称的hash
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'bcsIp' => 'bcs_ip',
            'blockChainId' => 'block_chain_id',
            'blockChainName' => 'block_chain_name',
            'channelName' => 'channel_name',
            'orgName' => 'org_name',
            'orgNameHash' => 'org_name_hash'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  可信节点Id
    * bcsIp  区块链ip
    * blockChainId  区块链Id
    * blockChainName  区块链名称
    * channelName  通道名称
    * orgName  组织名称
    * orgNameHash  组织名称的hash
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'bcsIp' => 'setBcsIp',
            'blockChainId' => 'setBlockChainId',
            'blockChainName' => 'setBlockChainName',
            'channelName' => 'setChannelName',
            'orgName' => 'setOrgName',
            'orgNameHash' => 'setOrgNameHash'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  可信节点Id
    * bcsIp  区块链ip
    * blockChainId  区块链Id
    * blockChainName  区块链名称
    * channelName  通道名称
    * orgName  组织名称
    * orgNameHash  组织名称的hash
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'bcsIp' => 'getBcsIp',
            'blockChainId' => 'getBlockChainId',
            'blockChainName' => 'getBlockChainName',
            'channelName' => 'getChannelName',
            'orgName' => 'getOrgName',
            'orgNameHash' => 'getOrgNameHash'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['bcsIp'] = isset($data['bcsIp']) ? $data['bcsIp'] : null;
        $this->container['blockChainId'] = isset($data['blockChainId']) ? $data['blockChainId'] : null;
        $this->container['blockChainName'] = isset($data['blockChainName']) ? $data['blockChainName'] : null;
        $this->container['channelName'] = isset($data['channelName']) ? $data['channelName'] : null;
        $this->container['orgName'] = isset($data['orgName']) ? $data['orgName'] : null;
        $this->container['orgNameHash'] = isset($data['orgNameHash']) ? $data['orgNameHash'] : null;
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
    * Gets agentId
    *  可信节点Id
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId 可信节点Id
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets bcsIp
    *  区块链ip
    *
    * @return string|null
    */
    public function getBcsIp()
    {
        return $this->container['bcsIp'];
    }

    /**
    * Sets bcsIp
    *
    * @param string|null $bcsIp 区块链ip
    *
    * @return $this
    */
    public function setBcsIp($bcsIp)
    {
        $this->container['bcsIp'] = $bcsIp;
        return $this;
    }

    /**
    * Gets blockChainId
    *  区块链Id
    *
    * @return string|null
    */
    public function getBlockChainId()
    {
        return $this->container['blockChainId'];
    }

    /**
    * Sets blockChainId
    *
    * @param string|null $blockChainId 区块链Id
    *
    * @return $this
    */
    public function setBlockChainId($blockChainId)
    {
        $this->container['blockChainId'] = $blockChainId;
        return $this;
    }

    /**
    * Gets blockChainName
    *  区块链名称
    *
    * @return string|null
    */
    public function getBlockChainName()
    {
        return $this->container['blockChainName'];
    }

    /**
    * Sets blockChainName
    *
    * @param string|null $blockChainName 区块链名称
    *
    * @return $this
    */
    public function setBlockChainName($blockChainName)
    {
        $this->container['blockChainName'] = $blockChainName;
        return $this;
    }

    /**
    * Gets channelName
    *  通道名称
    *
    * @return string|null
    */
    public function getChannelName()
    {
        return $this->container['channelName'];
    }

    /**
    * Sets channelName
    *
    * @param string|null $channelName 通道名称
    *
    * @return $this
    */
    public function setChannelName($channelName)
    {
        $this->container['channelName'] = $channelName;
        return $this;
    }

    /**
    * Gets orgName
    *  组织名称
    *
    * @return string|null
    */
    public function getOrgName()
    {
        return $this->container['orgName'];
    }

    /**
    * Sets orgName
    *
    * @param string|null $orgName 组织名称
    *
    * @return $this
    */
    public function setOrgName($orgName)
    {
        $this->container['orgName'] = $orgName;
        return $this;
    }

    /**
    * Gets orgNameHash
    *  组织名称的hash
    *
    * @return string|null
    */
    public function getOrgNameHash()
    {
        return $this->container['orgNameHash'];
    }

    /**
    * Sets orgNameHash
    *
    * @param string|null $orgNameHash 组织名称的hash
    *
    * @return $this
    */
    public function setOrgNameHash($orgNameHash)
    {
        $this->container['orgNameHash'] = $orgNameHash;
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

