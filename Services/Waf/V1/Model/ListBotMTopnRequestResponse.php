<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBotMTopnRequestResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBotMTopnRequestResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topnKnownBots  **参数解释：** TopN已知BOT的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnDomains  **参数解释：** TopN被访问域名的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIps  **参数解释：** TopN攻击源IP的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpAsns  **参数解释：** TopN攻击源IP所属ASN的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpGeolocations  **参数解释：** TopN攻击源地区的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnJa4Fps  **参数解释：** TopN JA4指纹的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topnKnownBots' => '\HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]',
            'topnDomains' => '\HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]',
            'topnSrcIps' => '\HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]',
            'topnSrcIpAsns' => '\HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]',
            'topnSrcIpGeolocations' => '\HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]',
            'topnJa4Fps' => '\HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topnKnownBots  **参数解释：** TopN已知BOT的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnDomains  **参数解释：** TopN被访问域名的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIps  **参数解释：** TopN攻击源IP的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpAsns  **参数解释：** TopN攻击源IP所属ASN的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpGeolocations  **参数解释：** TopN攻击源地区的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnJa4Fps  **参数解释：** TopN JA4指纹的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topnKnownBots' => null,
        'topnDomains' => null,
        'topnSrcIps' => null,
        'topnSrcIpAsns' => null,
        'topnSrcIpGeolocations' => null,
        'topnJa4Fps' => null
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
    * topnKnownBots  **参数解释：** TopN已知BOT的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnDomains  **参数解释：** TopN被访问域名的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIps  **参数解释：** TopN攻击源IP的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpAsns  **参数解释：** TopN攻击源IP所属ASN的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpGeolocations  **参数解释：** TopN攻击源地区的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnJa4Fps  **参数解释：** TopN JA4指纹的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topnKnownBots' => 'topn_known_bots',
            'topnDomains' => 'topn_domains',
            'topnSrcIps' => 'topn_src_ips',
            'topnSrcIpAsns' => 'topn_src_ip_asns',
            'topnSrcIpGeolocations' => 'topn_src_ip_geolocations',
            'topnJa4Fps' => 'topn_ja4_fps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topnKnownBots  **参数解释：** TopN已知BOT的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnDomains  **参数解释：** TopN被访问域名的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIps  **参数解释：** TopN攻击源IP的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpAsns  **参数解释：** TopN攻击源IP所属ASN的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpGeolocations  **参数解释：** TopN攻击源地区的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnJa4Fps  **参数解释：** TopN JA4指纹的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'topnKnownBots' => 'setTopnKnownBots',
            'topnDomains' => 'setTopnDomains',
            'topnSrcIps' => 'setTopnSrcIps',
            'topnSrcIpAsns' => 'setTopnSrcIpAsns',
            'topnSrcIpGeolocations' => 'setTopnSrcIpGeolocations',
            'topnJa4Fps' => 'setTopnJa4Fps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topnKnownBots  **参数解释：** TopN已知BOT的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnDomains  **参数解释：** TopN被访问域名的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIps  **参数解释：** TopN攻击源IP的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpAsns  **参数解释：** TopN攻击源IP所属ASN的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnSrcIpGeolocations  **参数解释：** TopN攻击源地区的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topnJa4Fps  **参数解释：** TopN JA4指纹的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'topnKnownBots' => 'getTopnKnownBots',
            'topnDomains' => 'getTopnDomains',
            'topnSrcIps' => 'getTopnSrcIps',
            'topnSrcIpAsns' => 'getTopnSrcIpAsns',
            'topnSrcIpGeolocations' => 'getTopnSrcIpGeolocations',
            'topnJa4Fps' => 'getTopnJa4Fps'
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
        $this->container['topnKnownBots'] = isset($data['topnKnownBots']) ? $data['topnKnownBots'] : null;
        $this->container['topnDomains'] = isset($data['topnDomains']) ? $data['topnDomains'] : null;
        $this->container['topnSrcIps'] = isset($data['topnSrcIps']) ? $data['topnSrcIps'] : null;
        $this->container['topnSrcIpAsns'] = isset($data['topnSrcIpAsns']) ? $data['topnSrcIpAsns'] : null;
        $this->container['topnSrcIpGeolocations'] = isset($data['topnSrcIpGeolocations']) ? $data['topnSrcIpGeolocations'] : null;
        $this->container['topnJa4Fps'] = isset($data['topnJa4Fps']) ? $data['topnJa4Fps'] : null;
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
    * Gets topnKnownBots
    *  **参数解释：** TopN已知BOT的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null
    */
    public function getTopnKnownBots()
    {
        return $this->container['topnKnownBots'];
    }

    /**
    * Sets topnKnownBots
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null $topnKnownBots **参数解释：** TopN已知BOT的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopnKnownBots($topnKnownBots)
    {
        $this->container['topnKnownBots'] = $topnKnownBots;
        return $this;
    }

    /**
    * Gets topnDomains
    *  **参数解释：** TopN被访问域名的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null
    */
    public function getTopnDomains()
    {
        return $this->container['topnDomains'];
    }

    /**
    * Sets topnDomains
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null $topnDomains **参数解释：** TopN被访问域名的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopnDomains($topnDomains)
    {
        $this->container['topnDomains'] = $topnDomains;
        return $this;
    }

    /**
    * Gets topnSrcIps
    *  **参数解释：** TopN攻击源IP的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null
    */
    public function getTopnSrcIps()
    {
        return $this->container['topnSrcIps'];
    }

    /**
    * Sets topnSrcIps
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null $topnSrcIps **参数解释：** TopN攻击源IP的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopnSrcIps($topnSrcIps)
    {
        $this->container['topnSrcIps'] = $topnSrcIps;
        return $this;
    }

    /**
    * Gets topnSrcIpAsns
    *  **参数解释：** TopN攻击源IP所属ASN的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null
    */
    public function getTopnSrcIpAsns()
    {
        return $this->container['topnSrcIpAsns'];
    }

    /**
    * Sets topnSrcIpAsns
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null $topnSrcIpAsns **参数解释：** TopN攻击源IP所属ASN的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopnSrcIpAsns($topnSrcIpAsns)
    {
        $this->container['topnSrcIpAsns'] = $topnSrcIpAsns;
        return $this;
    }

    /**
    * Gets topnSrcIpGeolocations
    *  **参数解释：** TopN攻击源地区的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null
    */
    public function getTopnSrcIpGeolocations()
    {
        return $this->container['topnSrcIpGeolocations'];
    }

    /**
    * Sets topnSrcIpGeolocations
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null $topnSrcIpGeolocations **参数解释：** TopN攻击源地区的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopnSrcIpGeolocations($topnSrcIpGeolocations)
    {
        $this->container['topnSrcIpGeolocations'] = $topnSrcIpGeolocations;
        return $this;
    }

    /**
    * Gets topnJa4Fps
    *  **参数解释：** TopN JA4指纹的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null
    */
    public function getTopnJa4Fps()
    {
        return $this->container['topnJa4Fps'];
    }

    /**
    * Sets topnJa4Fps
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TypedStatBucket[]|null $topnJa4Fps **参数解释：** TopN JA4指纹的请求统计 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopnJa4Fps($topnJa4Fps)
    {
        $this->container['topnJa4Fps'] = $topnJa4Fps;
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

