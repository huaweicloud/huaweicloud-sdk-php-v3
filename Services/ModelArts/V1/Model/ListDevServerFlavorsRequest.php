<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDevServerFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDevServerFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * arch  **参数解释**：规格的CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverType' => 'string',
            'arch' => 'string',
            'chargingMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * arch  **参数解释**：规格的CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverType' => null,
        'arch' => null,
        'chargingMode' => null
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
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * arch  **参数解释**：规格的CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverType' => 'server_type',
            'arch' => 'arch',
            'chargingMode' => 'charging_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * arch  **参数解释**：规格的CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverType' => 'setServerType',
            'arch' => 'setArch',
            'chargingMode' => 'setChargingMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverType  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    * arch  **参数解释**：规格的CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverType' => 'getServerType',
            'arch' => 'getArch',
            'chargingMode' => 'getChargingMode'
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
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serverType']) && (mb_strlen($this->container['serverType']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverType']) && (mb_strlen($this->container['serverType']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) > 64)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) < 1)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
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
    * Gets serverType
    *  **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType **参数解释**：服务类型。 **约束限制**：不涉及。 **取值范围**： - BMS：资源类型为裸金属服务器 - ECS：资源类型为弹性云服务器 - HPS：资源类型为超节点服务器  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets arch
    *  **参数解释**：规格的CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释**：规格的CPU架构。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**：计费模式。 **约束限制**：不涉及。 **取值范围**： - PRE_PAID：计费模式为包年/包月 - POST_PAID：计费模式为按需计费 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
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

