<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityReportContentResponse_report_content_subscription_info_response_code_statistics_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * responseSourceWafInfoList  **参数解释：** WAF响应码统计列表，包含各响应码按时间线的WAF返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSourceUpstreamInfoList  **参数解释：** 上游响应码统计列表，包含各响应码按时间线的上游返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'responseSourceWafInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfoResponseSourceWafInfoList[]',
            'responseSourceUpstreamInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfoResponseSourceUpstreamInfoList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * responseSourceWafInfoList  **参数解释：** WAF响应码统计列表，包含各响应码按时间线的WAF返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSourceUpstreamInfoList  **参数解释：** 上游响应码统计列表，包含各响应码按时间线的上游返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'responseSourceWafInfoList' => null,
        'responseSourceUpstreamInfoList' => null
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
    * responseSourceWafInfoList  **参数解释：** WAF响应码统计列表，包含各响应码按时间线的WAF返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSourceUpstreamInfoList  **参数解释：** 上游响应码统计列表，包含各响应码按时间线的上游返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'responseSourceWafInfoList' => 'response_source_waf_info_list',
            'responseSourceUpstreamInfoList' => 'response_source_upstream_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * responseSourceWafInfoList  **参数解释：** WAF响应码统计列表，包含各响应码按时间线的WAF返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSourceUpstreamInfoList  **参数解释：** 上游响应码统计列表，包含各响应码按时间线的上游返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'responseSourceWafInfoList' => 'setResponseSourceWafInfoList',
            'responseSourceUpstreamInfoList' => 'setResponseSourceUpstreamInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * responseSourceWafInfoList  **参数解释：** WAF响应码统计列表，包含各响应码按时间线的WAF返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSourceUpstreamInfoList  **参数解释：** 上游响应码统计列表，包含各响应码按时间线的上游返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'responseSourceWafInfoList' => 'getResponseSourceWafInfoList',
            'responseSourceUpstreamInfoList' => 'getResponseSourceUpstreamInfoList'
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
        $this->container['responseSourceWafInfoList'] = isset($data['responseSourceWafInfoList']) ? $data['responseSourceWafInfoList'] : null;
        $this->container['responseSourceUpstreamInfoList'] = isset($data['responseSourceUpstreamInfoList']) ? $data['responseSourceUpstreamInfoList'] : null;
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
    * Gets responseSourceWafInfoList
    *  **参数解释：** WAF响应码统计列表，包含各响应码按时间线的WAF返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfoResponseSourceWafInfoList[]|null
    */
    public function getResponseSourceWafInfoList()
    {
        return $this->container['responseSourceWafInfoList'];
    }

    /**
    * Sets responseSourceWafInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfoResponseSourceWafInfoList[]|null $responseSourceWafInfoList **参数解释：** WAF响应码统计列表，包含各响应码按时间线的WAF返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setResponseSourceWafInfoList($responseSourceWafInfoList)
    {
        $this->container['responseSourceWafInfoList'] = $responseSourceWafInfoList;
        return $this;
    }

    /**
    * Gets responseSourceUpstreamInfoList
    *  **参数解释：** 上游响应码统计列表，包含各响应码按时间线的上游返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfoResponseSourceUpstreamInfoList[]|null
    */
    public function getResponseSourceUpstreamInfoList()
    {
        return $this->container['responseSourceUpstreamInfoList'];
    }

    /**
    * Sets responseSourceUpstreamInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfoResponseSourceUpstreamInfoList[]|null $responseSourceUpstreamInfoList **参数解释：** 上游响应码统计列表，包含各响应码按时间线的上游返回数量。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setResponseSourceUpstreamInfoList($responseSourceUpstreamInfoList)
    {
        $this->container['responseSourceUpstreamInfoList'] = $responseSourceUpstreamInfoList;
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

