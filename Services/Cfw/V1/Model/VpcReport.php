<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcReport';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * app  **参数解释**： TOP应用数量 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * overview  overview
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    * vpc  vpc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'app' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'dstIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'overview' => '\HuaweiCloud\SDK\Cfw\V1\Model\Overview',
            'srcIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'trafficTrend' => '\HuaweiCloud\SDK\Cfw\V1\Model\TrendVO[]',
            'vpc' => '\HuaweiCloud\SDK\Cfw\V1\Model\Vpc'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * app  **参数解释**： TOP应用数量 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * overview  overview
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    * vpc  vpc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'app' => null,
        'dstIp' => null,
        'overview' => null,
        'srcIp' => null,
        'trafficTrend' => null,
        'vpc' => null
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
    * app  **参数解释**： TOP应用数量 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * overview  overview
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    * vpc  vpc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'app' => 'app',
            'dstIp' => 'dst_ip',
            'overview' => 'overview',
            'srcIp' => 'src_ip',
            'trafficTrend' => 'traffic_trend',
            'vpc' => 'vpc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * app  **参数解释**： TOP应用数量 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * overview  overview
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    * vpc  vpc
    *
    * @var string[]
    */
    protected static $setters = [
            'app' => 'setApp',
            'dstIp' => 'setDstIp',
            'overview' => 'setOverview',
            'srcIp' => 'setSrcIp',
            'trafficTrend' => 'setTrafficTrend',
            'vpc' => 'setVpc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * app  **参数解释**： TOP应用数量 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP访问目的IP **取值范围**： 不涉及
    * overview  overview
    * srcIp  **参数解释**： TOP访问源IP **取值范围**： 不涉及
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    * vpc  vpc
    *
    * @var string[]
    */
    protected static $getters = [
            'app' => 'getApp',
            'dstIp' => 'getDstIp',
            'overview' => 'getOverview',
            'srcIp' => 'getSrcIp',
            'trafficTrend' => 'getTrafficTrend',
            'vpc' => 'getVpc'
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['overview'] = isset($data['overview']) ? $data['overview'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['trafficTrend'] = isset($data['trafficTrend']) ? $data['trafficTrend'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
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
    * Gets app
    *  **参数解释**： TOP应用数量 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $app **参数解释**： TOP应用数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
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
    * Gets overview
    *  overview
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Overview|null
    */
    public function getOverview()
    {
        return $this->container['overview'];
    }

    /**
    * Sets overview
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Overview|null $overview overview
    *
    * @return $this
    */
    public function setOverview($overview)
    {
        $this->container['overview'] = $overview;
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
    * Gets trafficTrend
    *  **参数解释**： 流量趋势 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TrendVO[]|null
    */
    public function getTrafficTrend()
    {
        return $this->container['trafficTrend'];
    }

    /**
    * Sets trafficTrend
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TrendVO[]|null $trafficTrend **参数解释**： 流量趋势 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTrafficTrend($trafficTrend)
    {
        $this->container['trafficTrend'] = $trafficTrend;
        return $this;
    }

    /**
    * Gets vpc
    *  vpc
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Vpc|null
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Vpc|null $vpc vpc
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
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

