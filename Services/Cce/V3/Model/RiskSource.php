<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'riskSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurationRisks  配置风险项
    * deprecatedApiRisks  废弃API风险
    * nodeRisks  节点风险
    * addonRisks  插件风险
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurationRisks' => '\HuaweiCloud\SDK\Cce\V3\Model\ConfigurationRisks[]',
            'deprecatedApiRisks' => '\HuaweiCloud\SDK\Cce\V3\Model\DeprecatedAPIRisks[]',
            'nodeRisks' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeRisks[]',
            'addonRisks' => '\HuaweiCloud\SDK\Cce\V3\Model\AddonRisks[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurationRisks  配置风险项
    * deprecatedApiRisks  废弃API风险
    * nodeRisks  节点风险
    * addonRisks  插件风险
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurationRisks' => null,
        'deprecatedApiRisks' => null,
        'nodeRisks' => null,
        'addonRisks' => null
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
    * configurationRisks  配置风险项
    * deprecatedApiRisks  废弃API风险
    * nodeRisks  节点风险
    * addonRisks  插件风险
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurationRisks' => 'configurationRisks',
            'deprecatedApiRisks' => 'deprecatedAPIRisks',
            'nodeRisks' => 'nodeRisks',
            'addonRisks' => 'addonRisks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurationRisks  配置风险项
    * deprecatedApiRisks  废弃API风险
    * nodeRisks  节点风险
    * addonRisks  插件风险
    *
    * @var string[]
    */
    protected static $setters = [
            'configurationRisks' => 'setConfigurationRisks',
            'deprecatedApiRisks' => 'setDeprecatedApiRisks',
            'nodeRisks' => 'setNodeRisks',
            'addonRisks' => 'setAddonRisks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurationRisks  配置风险项
    * deprecatedApiRisks  废弃API风险
    * nodeRisks  节点风险
    * addonRisks  插件风险
    *
    * @var string[]
    */
    protected static $getters = [
            'configurationRisks' => 'getConfigurationRisks',
            'deprecatedApiRisks' => 'getDeprecatedApiRisks',
            'nodeRisks' => 'getNodeRisks',
            'addonRisks' => 'getAddonRisks'
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
        $this->container['configurationRisks'] = isset($data['configurationRisks']) ? $data['configurationRisks'] : null;
        $this->container['deprecatedApiRisks'] = isset($data['deprecatedApiRisks']) ? $data['deprecatedApiRisks'] : null;
        $this->container['nodeRisks'] = isset($data['nodeRisks']) ? $data['nodeRisks'] : null;
        $this->container['addonRisks'] = isset($data['addonRisks']) ? $data['addonRisks'] : null;
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
    * Gets configurationRisks
    *  配置风险项
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ConfigurationRisks[]|null
    */
    public function getConfigurationRisks()
    {
        return $this->container['configurationRisks'];
    }

    /**
    * Sets configurationRisks
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ConfigurationRisks[]|null $configurationRisks 配置风险项
    *
    * @return $this
    */
    public function setConfigurationRisks($configurationRisks)
    {
        $this->container['configurationRisks'] = $configurationRisks;
        return $this;
    }

    /**
    * Gets deprecatedApiRisks
    *  废弃API风险
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\DeprecatedAPIRisks[]|null
    */
    public function getDeprecatedApiRisks()
    {
        return $this->container['deprecatedApiRisks'];
    }

    /**
    * Sets deprecatedApiRisks
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\DeprecatedAPIRisks[]|null $deprecatedApiRisks 废弃API风险
    *
    * @return $this
    */
    public function setDeprecatedApiRisks($deprecatedApiRisks)
    {
        $this->container['deprecatedApiRisks'] = $deprecatedApiRisks;
        return $this;
    }

    /**
    * Gets nodeRisks
    *  节点风险
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeRisks[]|null
    */
    public function getNodeRisks()
    {
        return $this->container['nodeRisks'];
    }

    /**
    * Sets nodeRisks
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeRisks[]|null $nodeRisks 节点风险
    *
    * @return $this
    */
    public function setNodeRisks($nodeRisks)
    {
        $this->container['nodeRisks'] = $nodeRisks;
        return $this;
    }

    /**
    * Gets addonRisks
    *  插件风险
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AddonRisks[]|null
    */
    public function getAddonRisks()
    {
        return $this->container['addonRisks'];
    }

    /**
    * Sets addonRisks
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AddonRisks[]|null $addonRisks 插件风险
    *
    * @return $this
    */
    public function setAddonRisks($addonRisks)
    {
        $this->container['addonRisks'] = $addonRisks;
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

