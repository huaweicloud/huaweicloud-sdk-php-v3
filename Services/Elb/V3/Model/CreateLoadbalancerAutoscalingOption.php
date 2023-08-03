<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLoadbalancerAutoscalingOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLoadbalancerAutoscalingOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  负载均衡器弹性扩缩容开关
    * minL7FlavorId  弹性扩缩容的最小七层规格ID，类型为L7_Elastic，有七层监听器时，该字段不能为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'minL7FlavorId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  负载均衡器弹性扩缩容开关
    * minL7FlavorId  弹性扩缩容的最小七层规格ID，类型为L7_Elastic，有七层监听器时，该字段不能为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'minL7FlavorId' => null
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
    * enable  负载均衡器弹性扩缩容开关
    * minL7FlavorId  弹性扩缩容的最小七层规格ID，类型为L7_Elastic，有七层监听器时，该字段不能为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'minL7FlavorId' => 'min_l7_flavor_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  负载均衡器弹性扩缩容开关
    * minL7FlavorId  弹性扩缩容的最小七层规格ID，类型为L7_Elastic，有七层监听器时，该字段不能为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'minL7FlavorId' => 'setMinL7FlavorId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  负载均衡器弹性扩缩容开关
    * minL7FlavorId  弹性扩缩容的最小七层规格ID，类型为L7_Elastic，有七层监听器时，该字段不能为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'minL7FlavorId' => 'getMinL7FlavorId'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['minL7FlavorId'] = isset($data['minL7FlavorId']) ? $data['minL7FlavorId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
            if (!is_null($this->container['minL7FlavorId']) && (mb_strlen($this->container['minL7FlavorId']) > 36)) {
                $invalidProperties[] = "invalid value for 'minL7FlavorId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['minL7FlavorId']) && (mb_strlen($this->container['minL7FlavorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'minL7FlavorId', the character length must be bigger than or equal to 1.";
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
    * Gets enable
    *  负载均衡器弹性扩缩容开关
    *
    * @return bool
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool $enable 负载均衡器弹性扩缩容开关
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets minL7FlavorId
    *  弹性扩缩容的最小七层规格ID，类型为L7_Elastic，有七层监听器时，该字段不能为空。
    *
    * @return string|null
    */
    public function getMinL7FlavorId()
    {
        return $this->container['minL7FlavorId'];
    }

    /**
    * Sets minL7FlavorId
    *
    * @param string|null $minL7FlavorId 弹性扩缩容的最小七层规格ID，类型为L7_Elastic，有七层监听器时，该字段不能为空。
    *
    * @return $this
    */
    public function setMinL7FlavorId($minL7FlavorId)
    {
        $this->container['minL7FlavorId'] = $minL7FlavorId;
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

