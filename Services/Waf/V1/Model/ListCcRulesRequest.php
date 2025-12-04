<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCcRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCcRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * offset  偏移量，表示查询该偏移量之后的记录。
    * limit  查询返回记录的数量限制。
    * name  规则名称
    * status  规则的开启状态，1表示开启，0表示关闭
    * category  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。 - js_challenge：要求客户端完成一段脚本的执行或验证，从而验证请求来源的合法性。
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'enterpriseProjectId' => 'string',
            'policyId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'status' => 'int',
            'category' => 'string',
            'tagType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * offset  偏移量，表示查询该偏移量之后的记录。
    * limit  查询返回记录的数量限制。
    * name  规则名称
    * status  规则的开启状态，1表示开启，0表示关闭
    * category  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。 - js_challenge：要求客户端完成一段脚本的执行或验证，从而验证请求来源的合法性。
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'enterpriseProjectId' => null,
        'policyId' => null,
        'offset' => null,
        'limit' => null,
        'name' => null,
        'status' => null,
        'category' => null,
        'tagType' => null
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
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * offset  偏移量，表示查询该偏移量之后的记录。
    * limit  查询返回记录的数量限制。
    * name  规则名称
    * status  规则的开启状态，1表示开启，0表示关闭
    * category  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。 - js_challenge：要求客户端完成一段脚本的执行或验证，从而验证请求来源的合法性。
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'policyId' => 'policy_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'status' => 'status',
            'category' => 'category',
            'tagType' => 'tag_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * offset  偏移量，表示查询该偏移量之后的记录。
    * limit  查询返回记录的数量限制。
    * name  规则名称
    * status  规则的开启状态，1表示开启，0表示关闭
    * category  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。 - js_challenge：要求客户端完成一段脚本的执行或验证，从而验证请求来源的合法性。
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'policyId' => 'setPolicyId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'status' => 'setStatus',
            'category' => 'setCategory',
            'tagType' => 'setTagType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * offset  偏移量，表示查询该偏移量之后的记录。
    * limit  查询返回记录的数量限制。
    * name  规则名称
    * status  规则的开启状态，1表示开启，0表示关闭
    * category  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。 - js_challenge：要求客户端完成一段脚本的执行或验证，从而验证请求来源的合法性。
    * tagType  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'policyId' => 'getPolicyId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'status' => 'getStatus',
            'category' => 'getCategory',
            'tagType' => 'getTagType'
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
    const TAG_TYPE_IP = 'ip';
    const TAG_TYPE_COOKIE = 'cookie';
    const TAG_TYPE_HEADER = 'header';
    const TAG_TYPE_OTHER = 'other';
    const TAG_TYPE_POLICY = 'policy';
    const TAG_TYPE_DOMAIN = 'domain';
    const TAG_TYPE_URL = 'url';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTagTypeAllowableValues()
    {
        return [
            self::TAG_TYPE_IP,
            self::TAG_TYPE_COOKIE,
            self::TAG_TYPE_HEADER,
            self::TAG_TYPE_OTHER,
            self::TAG_TYPE_POLICY,
            self::TAG_TYPE_DOMAIN,
            self::TAG_TYPE_URL,
        ];
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['tagType'] = isset($data['tagType']) ? $data['tagType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            $allowedValues = $this->getTagTypeAllowableValues();
                if (!is_null($this->container['tagType']) && !in_array($this->container['tagType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tagType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets contentType
    *  内容类型
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 内容类型
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets policyId
    *  策略id（策略id从查询防护策略列表接口获取）
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId 策略id（策略id从查询防护策略列表接口获取）
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示查询该偏移量之后的记录。
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量，表示查询该偏移量之后的记录。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回记录的数量限制。
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 查询返回记录的数量限制。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  规则的开启状态，1表示开启，0表示关闭
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 规则的开启状态，1表示开启，0表示关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。 - js_challenge：要求客户端完成一段脚本的执行或验证，从而验证请求来源的合法性。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。 - js_challenge：要求客户端完成一段脚本的执行或验证，从而验证请求来源的合法性。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets tagType
    *  **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTagType()
    {
        return $this->container['tagType'];
    }

    /**
    * Sets tagType
    *
    * @param string|null $tagType **参数解释：** 限速模式标识，用于指定区分单个Web访问者的判断依据 **约束限制：** 不涉及 **取值范围：**  - ip：IP限速，根据IP区分单个Web访问者  - cookie：用户限速，根据Cookie键值区分单个Web访问者  - header：用户限速，根据Header区分单个Web访问者  - other：根据Referer（自定义请求访问的来源）字段区分单个Web访问者  - policy：策略限速  - domain：域名限速  - url：url限速 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTagType($tagType)
    {
        $this->container['tagType'] = $tagType;
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

