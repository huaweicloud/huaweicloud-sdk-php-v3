<?php

namespace HuaweiCloud\SDK\Aom\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentUpgradeParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentUpgradeParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  UniAgent升级的版本号。
    * agentList  UniAgent主机列表信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'agentList' => '\HuaweiCloud\SDK\Aom\V4\Model\SingleAgentParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  UniAgent升级的版本号。
    * agentList  UniAgent主机列表信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'agentList' => null
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
    * version  UniAgent升级的版本号。
    * agentList  UniAgent主机列表信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'agentList' => 'agent_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  UniAgent升级的版本号。
    * agentList  UniAgent主机列表信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'agentList' => 'setAgentList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  UniAgent升级的版本号。
    * agentList  UniAgent主机列表信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'agentList' => 'getAgentList'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['agentList'] = isset($data['agentList']) ? $data['agentList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['agentList'] === null) {
            $invalidProperties[] = "'agentList' can't be null";
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
    * Gets version
    *  UniAgent升级的版本号。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version UniAgent升级的版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets agentList
    *  UniAgent主机列表信息。
    *
    * @return \HuaweiCloud\SDK\Aom\V4\Model\SingleAgentParam[]
    */
    public function getAgentList()
    {
        return $this->container['agentList'];
    }

    /**
    * Sets agentList
    *
    * @param \HuaweiCloud\SDK\Aom\V4\Model\SingleAgentParam[] $agentList UniAgent主机列表信息。
    *
    * @return $this
    */
    public function setAgentList($agentList)
    {
        $this->container['agentList'] = $agentList;
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

