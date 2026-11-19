<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiOverviewSourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiOverviewSourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalAgents  **参数解释**： 智能体总数 **取值范围**： 最小值0，最大值2000000
    * protectedAgents  **参数解释**： 已防护智能体数量 **取值范围**： 最小值0，最大值2000000
    * unprotectedAgents  **参数解释**： 未防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalAgents' => 'int',
            'protectedAgents' => 'int',
            'unprotectedAgents' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalAgents  **参数解释**： 智能体总数 **取值范围**： 最小值0，最大值2000000
    * protectedAgents  **参数解释**： 已防护智能体数量 **取值范围**： 最小值0，最大值2000000
    * unprotectedAgents  **参数解释**： 未防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalAgents' => 'int32',
        'protectedAgents' => 'int32',
        'unprotectedAgents' => 'int32'
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
    * totalAgents  **参数解释**： 智能体总数 **取值范围**： 最小值0，最大值2000000
    * protectedAgents  **参数解释**： 已防护智能体数量 **取值范围**： 最小值0，最大值2000000
    * unprotectedAgents  **参数解释**： 未防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalAgents' => 'total_agents',
            'protectedAgents' => 'protected_agents',
            'unprotectedAgents' => 'unprotected_agents'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalAgents  **参数解释**： 智能体总数 **取值范围**： 最小值0，最大值2000000
    * protectedAgents  **参数解释**： 已防护智能体数量 **取值范围**： 最小值0，最大值2000000
    * unprotectedAgents  **参数解释**： 未防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @var string[]
    */
    protected static $setters = [
            'totalAgents' => 'setTotalAgents',
            'protectedAgents' => 'setProtectedAgents',
            'unprotectedAgents' => 'setUnprotectedAgents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalAgents  **参数解释**： 智能体总数 **取值范围**： 最小值0，最大值2000000
    * protectedAgents  **参数解释**： 已防护智能体数量 **取值范围**： 最小值0，最大值2000000
    * unprotectedAgents  **参数解释**： 未防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @var string[]
    */
    protected static $getters = [
            'totalAgents' => 'getTotalAgents',
            'protectedAgents' => 'getProtectedAgents',
            'unprotectedAgents' => 'getUnprotectedAgents'
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
        $this->container['totalAgents'] = isset($data['totalAgents']) ? $data['totalAgents'] : null;
        $this->container['protectedAgents'] = isset($data['protectedAgents']) ? $data['protectedAgents'] : null;
        $this->container['unprotectedAgents'] = isset($data['unprotectedAgents']) ? $data['unprotectedAgents'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalAgents']) && ($this->container['totalAgents'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalAgents', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectedAgents']) && ($this->container['protectedAgents'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedAgents', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unprotectedAgents']) && ($this->container['unprotectedAgents'] < 0)) {
                $invalidProperties[] = "invalid value for 'unprotectedAgents', must be bigger than or equal to 0.";
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
    * Gets totalAgents
    *  **参数解释**： 智能体总数 **取值范围**： 最小值0，最大值2000000
    *
    * @return int|null
    */
    public function getTotalAgents()
    {
        return $this->container['totalAgents'];
    }

    /**
    * Sets totalAgents
    *
    * @param int|null $totalAgents **参数解释**： 智能体总数 **取值范围**： 最小值0，最大值2000000
    *
    * @return $this
    */
    public function setTotalAgents($totalAgents)
    {
        $this->container['totalAgents'] = $totalAgents;
        return $this;
    }

    /**
    * Gets protectedAgents
    *  **参数解释**： 已防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @return int|null
    */
    public function getProtectedAgents()
    {
        return $this->container['protectedAgents'];
    }

    /**
    * Sets protectedAgents
    *
    * @param int|null $protectedAgents **参数解释**： 已防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @return $this
    */
    public function setProtectedAgents($protectedAgents)
    {
        $this->container['protectedAgents'] = $protectedAgents;
        return $this;
    }

    /**
    * Gets unprotectedAgents
    *  **参数解释**： 未防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @return int|null
    */
    public function getUnprotectedAgents()
    {
        return $this->container['unprotectedAgents'];
    }

    /**
    * Sets unprotectedAgents
    *
    * @param int|null $unprotectedAgents **参数解释**： 未防护智能体数量 **取值范围**： 最小值0，最大值2000000
    *
    * @return $this
    */
    public function setUnprotectedAgents($unprotectedAgents)
    {
        $this->container['unprotectedAgents'] = $unprotectedAgents;
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

