<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resize  resize
    * isAutoPay  **参数解释：** 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 对于降低规格场景，该字段无效。 **取值范围：** 对于扩大规格场景： - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * isForceResize  **参数解释：** 标识是否进行强制规格变更操作。 **约束限制：** 集群的dds mongos节点和只读节点不支持强制规格变更。 **取值范围：** 对于规格变更： - true，表示执行强制规格变更。 - 不传此参数，表示执行正常规格变更。 **默认取值：** 不传此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resize' => '\HuaweiCloud\SDK\Dds\V3\Model\ResizeInstanceOption',
            'isAutoPay' => 'bool',
            'isForceResize' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resize  resize
    * isAutoPay  **参数解释：** 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 对于降低规格场景，该字段无效。 **取值范围：** 对于扩大规格场景： - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * isForceResize  **参数解释：** 标识是否进行强制规格变更操作。 **约束限制：** 集群的dds mongos节点和只读节点不支持强制规格变更。 **取值范围：** 对于规格变更： - true，表示执行强制规格变更。 - 不传此参数，表示执行正常规格变更。 **默认取值：** 不传此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resize' => null,
        'isAutoPay' => null,
        'isForceResize' => null
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
    * resize  resize
    * isAutoPay  **参数解释：** 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 对于降低规格场景，该字段无效。 **取值范围：** 对于扩大规格场景： - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * isForceResize  **参数解释：** 标识是否进行强制规格变更操作。 **约束限制：** 集群的dds mongos节点和只读节点不支持强制规格变更。 **取值范围：** 对于规格变更： - true，表示执行强制规格变更。 - 不传此参数，表示执行正常规格变更。 **默认取值：** 不传此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resize' => 'resize',
            'isAutoPay' => 'is_auto_pay',
            'isForceResize' => 'is_force_resize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resize  resize
    * isAutoPay  **参数解释：** 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 对于降低规格场景，该字段无效。 **取值范围：** 对于扩大规格场景： - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * isForceResize  **参数解释：** 标识是否进行强制规格变更操作。 **约束限制：** 集群的dds mongos节点和只读节点不支持强制规格变更。 **取值范围：** 对于规格变更： - true，表示执行强制规格变更。 - 不传此参数，表示执行正常规格变更。 **默认取值：** 不传此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'resize' => 'setResize',
            'isAutoPay' => 'setIsAutoPay',
            'isForceResize' => 'setIsForceResize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resize  resize
    * isAutoPay  **参数解释：** 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 对于降低规格场景，该字段无效。 **取值范围：** 对于扩大规格场景： - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    * isForceResize  **参数解释：** 标识是否进行强制规格变更操作。 **约束限制：** 集群的dds mongos节点和只读节点不支持强制规格变更。 **取值范围：** 对于规格变更： - true，表示执行强制规格变更。 - 不传此参数，表示执行正常规格变更。 **默认取值：** 不传此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'resize' => 'getResize',
            'isAutoPay' => 'getIsAutoPay',
            'isForceResize' => 'getIsForceResize'
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
        $this->container['resize'] = isset($data['resize']) ? $data['resize'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['isForceResize'] = isset($data['isForceResize']) ? $data['isForceResize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resize'] === null) {
            $invalidProperties[] = "'resize' can't be null";
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
    * Gets resize
    *  resize
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\ResizeInstanceOption
    */
    public function getResize()
    {
        return $this->container['resize'];
    }

    /**
    * Sets resize
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\ResizeInstanceOption $resize resize
    *
    * @return $this
    */
    public function setResize($resize)
    {
        $this->container['resize'] = $resize;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  **参数解释：** 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 对于降低规格场景，该字段无效。 **取值范围：** 对于扩大规格场景： - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay **参数解释：** 变更包年包月实例规格时可指定，表示是否自动从账户中支付，此字段不影响自动续订的支付方式。 **约束限制：** 对于降低规格场景，该字段无效。 **取值范围：** 对于扩大规格场景： - true，表示自动从账户中支付。 - false，表示手动从账户中支付，默认为该方式。 **默认取值：** false。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets isForceResize
    *  **参数解释：** 标识是否进行强制规格变更操作。 **约束限制：** 集群的dds mongos节点和只读节点不支持强制规格变更。 **取值范围：** 对于规格变更： - true，表示执行强制规格变更。 - 不传此参数，表示执行正常规格变更。 **默认取值：** 不传此参数。
    *
    * @return bool|null
    */
    public function getIsForceResize()
    {
        return $this->container['isForceResize'];
    }

    /**
    * Sets isForceResize
    *
    * @param bool|null $isForceResize **参数解释：** 标识是否进行强制规格变更操作。 **约束限制：** 集群的dds mongos节点和只读节点不支持强制规格变更。 **取值范围：** 对于规格变更： - true，表示执行强制规格变更。 - 不传此参数，表示执行正常规格变更。 **默认取值：** 不传此参数。
    *
    * @return $this
    */
    public function setIsForceResize($isForceResize)
    {
        $this->container['isForceResize'] = $isForceResize;
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

