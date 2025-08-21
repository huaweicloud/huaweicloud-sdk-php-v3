<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InternetReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InternetReport';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eip  eip
    * in2out  in2out
    * out2in  out2in
    * overview  overview
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eip' => '\HuaweiCloud\SDK\Cfw\V1\Model\Eip',
            'in2out' => '\HuaweiCloud\SDK\Cfw\V1\Model\In2Out',
            'out2in' => '\HuaweiCloud\SDK\Cfw\V1\Model\Out2in',
            'overview' => '\HuaweiCloud\SDK\Cfw\V1\Model\Overview',
            'trafficTrend' => '\HuaweiCloud\SDK\Cfw\V1\Model\TrendVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eip  eip
    * in2out  in2out
    * out2in  out2in
    * overview  overview
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eip' => null,
        'in2out' => null,
        'out2in' => null,
        'overview' => null,
        'trafficTrend' => null
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
    * eip  eip
    * in2out  in2out
    * out2in  out2in
    * overview  overview
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eip' => 'eip',
            'in2out' => 'in2out',
            'out2in' => 'out2in',
            'overview' => 'overview',
            'trafficTrend' => 'traffic_trend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eip  eip
    * in2out  in2out
    * out2in  out2in
    * overview  overview
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'eip' => 'setEip',
            'in2out' => 'setIn2out',
            'out2in' => 'setOut2in',
            'overview' => 'setOverview',
            'trafficTrend' => 'setTrafficTrend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eip  eip
    * in2out  in2out
    * out2in  out2in
    * overview  overview
    * trafficTrend  **参数解释**： 流量趋势 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'eip' => 'getEip',
            'in2out' => 'getIn2out',
            'out2in' => 'getOut2in',
            'overview' => 'getOverview',
            'trafficTrend' => 'getTrafficTrend'
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
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['in2out'] = isset($data['in2out']) ? $data['in2out'] : null;
        $this->container['out2in'] = isset($data['out2in']) ? $data['out2in'] : null;
        $this->container['overview'] = isset($data['overview']) ? $data['overview'] : null;
        $this->container['trafficTrend'] = isset($data['trafficTrend']) ? $data['trafficTrend'] : null;
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
    * Gets eip
    *  eip
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Eip|null
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Eip|null $eip eip
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets in2out
    *  in2out
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\In2Out|null
    */
    public function getIn2out()
    {
        return $this->container['in2out'];
    }

    /**
    * Sets in2out
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\In2Out|null $in2out in2out
    *
    * @return $this
    */
    public function setIn2out($in2out)
    {
        $this->container['in2out'] = $in2out;
        return $this;
    }

    /**
    * Gets out2in
    *  out2in
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Out2in|null
    */
    public function getOut2in()
    {
        return $this->container['out2in'];
    }

    /**
    * Sets out2in
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Out2in|null $out2in out2in
    *
    * @return $this
    */
    public function setOut2in($out2in)
    {
        $this->container['out2in'] = $out2in;
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

