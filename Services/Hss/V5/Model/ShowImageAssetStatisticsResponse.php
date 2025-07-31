<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageAssetStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageAssetStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * localNum  **参数解释**: 本地镜像数量 **取值范围**: 最小值0，最大值65535
    * cicdNum  **参数解释**: cicd镜像数量 **取值范围**: 最小值0，最大值65535
    * registryNum  **参数解释**: 仓库镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'localNum' => 'int',
            'cicdNum' => 'int',
            'registryNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * localNum  **参数解释**: 本地镜像数量 **取值范围**: 最小值0，最大值65535
    * cicdNum  **参数解释**: cicd镜像数量 **取值范围**: 最小值0，最大值65535
    * registryNum  **参数解释**: 仓库镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'localNum' => 'int32',
        'cicdNum' => 'int32',
        'registryNum' => 'int32'
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
    * localNum  **参数解释**: 本地镜像数量 **取值范围**: 最小值0，最大值65535
    * cicdNum  **参数解释**: cicd镜像数量 **取值范围**: 最小值0，最大值65535
    * registryNum  **参数解释**: 仓库镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'localNum' => 'local_num',
            'cicdNum' => 'cicd_num',
            'registryNum' => 'registry_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * localNum  **参数解释**: 本地镜像数量 **取值范围**: 最小值0，最大值65535
    * cicdNum  **参数解释**: cicd镜像数量 **取值范围**: 最小值0，最大值65535
    * registryNum  **参数解释**: 仓库镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $setters = [
            'localNum' => 'setLocalNum',
            'cicdNum' => 'setCicdNum',
            'registryNum' => 'setRegistryNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * localNum  **参数解释**: 本地镜像数量 **取值范围**: 最小值0，最大值65535
    * cicdNum  **参数解释**: cicd镜像数量 **取值范围**: 最小值0，最大值65535
    * registryNum  **参数解释**: 仓库镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $getters = [
            'localNum' => 'getLocalNum',
            'cicdNum' => 'getCicdNum',
            'registryNum' => 'getRegistryNum'
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
        $this->container['localNum'] = isset($data['localNum']) ? $data['localNum'] : null;
        $this->container['cicdNum'] = isset($data['cicdNum']) ? $data['cicdNum'] : null;
        $this->container['registryNum'] = isset($data['registryNum']) ? $data['registryNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['localNum']) && ($this->container['localNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'localNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['localNum']) && ($this->container['localNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'localNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cicdNum']) && ($this->container['cicdNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'cicdNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cicdNum']) && ($this->container['cicdNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'cicdNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['registryNum']) && ($this->container['registryNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'registryNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['registryNum']) && ($this->container['registryNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'registryNum', must be bigger than or equal to 0.";
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
    * Gets localNum
    *  **参数解释**: 本地镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getLocalNum()
    {
        return $this->container['localNum'];
    }

    /**
    * Sets localNum
    *
    * @param int|null $localNum **参数解释**: 本地镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setLocalNum($localNum)
    {
        $this->container['localNum'] = $localNum;
        return $this;
    }

    /**
    * Gets cicdNum
    *  **参数解释**: cicd镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getCicdNum()
    {
        return $this->container['cicdNum'];
    }

    /**
    * Sets cicdNum
    *
    * @param int|null $cicdNum **参数解释**: cicd镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setCicdNum($cicdNum)
    {
        $this->container['cicdNum'] = $cicdNum;
        return $this;
    }

    /**
    * Gets registryNum
    *  **参数解释**: 仓库镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getRegistryNum()
    {
        return $this->container['registryNum'];
    }

    /**
    * Sets registryNum
    *
    * @param int|null $registryNum **参数解释**: 仓库镜像数量 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setRegistryNum($registryNum)
    {
        $this->container['registryNum'] = $registryNum;
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

