<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Out2in implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Out2in';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP开放端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dstIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'dstPort' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'srcIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP开放端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dstIp' => null,
        'dstPort' => null,
        'srcIp' => null
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
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP开放端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'srcIp' => 'src_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP开放端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'srcIp' => 'setSrcIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP开放端口 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'srcIp' => 'getSrcIp'
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
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
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
    * Gets dstIp
    *  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getDstIp()
    {
        return $this->container['dstIp'];
    }

    /**
    * Sets dstIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $dstIp **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstIp($dstIp)
    {
        $this->container['dstIp'] = $dstIp;
        return $this;
    }

    /**
    * Gets dstPort
    *  **参数解释**： TOP开放端口 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getDstPort()
    {
        return $this->container['dstPort'];
    }

    /**
    * Sets dstPort
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $dstPort **参数解释**： TOP开放端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstPort($dstPort)
    {
        $this->container['dstPort'] = $dstPort;
        return $this;
    }

    /**
    * Gets srcIp
    *  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $srcIp **参数解释**： TOP访问源IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
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

