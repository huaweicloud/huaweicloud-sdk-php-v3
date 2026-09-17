<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InPlaceMigratetoNodesSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InPlaceMigratetoNodesSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodes  **参数解释**： 腾挪节点列表 **约束限制**： 不涉及
    * dataDiskCleanUpOption  dataDiskCleanUpOption
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodes' => '\HuaweiCloud\SDK\Cce\V3\Model\InplaceMigrateNodeItem[]',
            'dataDiskCleanUpOption' => '\HuaweiCloud\SDK\Cce\V3\Model\DataDiskCleanUpOption',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\InPlaceMigrateNodeExtendParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodes  **参数解释**： 腾挪节点列表 **约束限制**： 不涉及
    * dataDiskCleanUpOption  dataDiskCleanUpOption
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodes' => null,
        'dataDiskCleanUpOption' => null,
        'extendParam' => null
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
    * nodes  **参数解释**： 腾挪节点列表 **约束限制**： 不涉及
    * dataDiskCleanUpOption  dataDiskCleanUpOption
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodes' => 'nodes',
            'dataDiskCleanUpOption' => 'dataDiskCleanUpOption',
            'extendParam' => 'extendParam'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodes  **参数解释**： 腾挪节点列表 **约束限制**： 不涉及
    * dataDiskCleanUpOption  dataDiskCleanUpOption
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $setters = [
            'nodes' => 'setNodes',
            'dataDiskCleanUpOption' => 'setDataDiskCleanUpOption',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodes  **参数解释**： 腾挪节点列表 **约束限制**： 不涉及
    * dataDiskCleanUpOption  dataDiskCleanUpOption
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $getters = [
            'nodes' => 'getNodes',
            'dataDiskCleanUpOption' => 'getDataDiskCleanUpOption',
            'extendParam' => 'getExtendParam'
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
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['dataDiskCleanUpOption'] = isset($data['dataDiskCleanUpOption']) ? $data['dataDiskCleanUpOption'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
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
    * Gets nodes
    *  **参数解释**： 腾挪节点列表 **约束限制**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\InplaceMigrateNodeItem[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\InplaceMigrateNodeItem[] $nodes **参数解释**： 腾挪节点列表 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets dataDiskCleanUpOption
    *  dataDiskCleanUpOption
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\DataDiskCleanUpOption|null
    */
    public function getDataDiskCleanUpOption()
    {
        return $this->container['dataDiskCleanUpOption'];
    }

    /**
    * Sets dataDiskCleanUpOption
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\DataDiskCleanUpOption|null $dataDiskCleanUpOption dataDiskCleanUpOption
    *
    * @return $this
    */
    public function setDataDiskCleanUpOption($dataDiskCleanUpOption)
    {
        $this->container['dataDiskCleanUpOption'] = $dataDiskCleanUpOption;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\InPlaceMigrateNodeExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\InPlaceMigrateNodeExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

