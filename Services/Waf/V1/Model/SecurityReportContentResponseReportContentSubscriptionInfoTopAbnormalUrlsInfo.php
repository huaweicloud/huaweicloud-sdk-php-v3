<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityReportContentResponse_report_content_subscription_info_top_abnormal_urls_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * abnormal502InfoList  **参数解释：** TOP返回502错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal500InfoList  **参数解释：** TOP返回500错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal404InfoList  **参数解释：** TOP返回404错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'abnormal502InfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal502InfoList[]',
            'abnormal500InfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal500InfoList[]',
            'abnormal404InfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal404InfoList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * abnormal502InfoList  **参数解释：** TOP返回502错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal500InfoList  **参数解释：** TOP返回500错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal404InfoList  **参数解释：** TOP返回404错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'abnormal502InfoList' => null,
        'abnormal500InfoList' => null,
        'abnormal404InfoList' => null
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
    * abnormal502InfoList  **参数解释：** TOP返回502错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal500InfoList  **参数解释：** TOP返回500错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal404InfoList  **参数解释：** TOP返回404错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'abnormal502InfoList' => 'abnormal_502_info_list',
            'abnormal500InfoList' => 'abnormal_500_info_list',
            'abnormal404InfoList' => 'abnormal_404_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * abnormal502InfoList  **参数解释：** TOP返回502错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal500InfoList  **参数解释：** TOP返回500错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal404InfoList  **参数解释：** TOP返回404错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'abnormal502InfoList' => 'setAbnormal502InfoList',
            'abnormal500InfoList' => 'setAbnormal500InfoList',
            'abnormal404InfoList' => 'setAbnormal404InfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * abnormal502InfoList  **参数解释：** TOP返回502错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal500InfoList  **参数解释：** TOP返回500错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * abnormal404InfoList  **参数解释：** TOP返回404错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'abnormal502InfoList' => 'getAbnormal502InfoList',
            'abnormal500InfoList' => 'getAbnormal500InfoList',
            'abnormal404InfoList' => 'getAbnormal404InfoList'
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
        $this->container['abnormal502InfoList'] = isset($data['abnormal502InfoList']) ? $data['abnormal502InfoList'] : null;
        $this->container['abnormal500InfoList'] = isset($data['abnormal500InfoList']) ? $data['abnormal500InfoList'] : null;
        $this->container['abnormal404InfoList'] = isset($data['abnormal404InfoList']) ? $data['abnormal404InfoList'] : null;
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
    * Gets abnormal502InfoList
    *  **参数解释：** TOP返回502错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal502InfoList[]|null
    */
    public function getAbnormal502InfoList()
    {
        return $this->container['abnormal502InfoList'];
    }

    /**
    * Sets abnormal502InfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal502InfoList[]|null $abnormal502InfoList **参数解释：** TOP返回502错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAbnormal502InfoList($abnormal502InfoList)
    {
        $this->container['abnormal502InfoList'] = $abnormal502InfoList;
        return $this;
    }

    /**
    * Gets abnormal500InfoList
    *  **参数解释：** TOP返回500错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal500InfoList[]|null
    */
    public function getAbnormal500InfoList()
    {
        return $this->container['abnormal500InfoList'];
    }

    /**
    * Sets abnormal500InfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal500InfoList[]|null $abnormal500InfoList **参数解释：** TOP返回500错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAbnormal500InfoList($abnormal500InfoList)
    {
        $this->container['abnormal500InfoList'] = $abnormal500InfoList;
        return $this;
    }

    /**
    * Gets abnormal404InfoList
    *  **参数解释：** TOP返回404错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal404InfoList[]|null
    */
    public function getAbnormal404InfoList()
    {
        return $this->container['abnormal404InfoList'];
    }

    /**
    * Sets abnormal404InfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfoAbnormal404InfoList[]|null $abnormal404InfoList **参数解释：** TOP返回404错误的URL列表，按错误次数排序。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAbnormal404InfoList($abnormal404InfoList)
    {
        $this->container['abnormal404InfoList'] = $abnormal404InfoList;
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

