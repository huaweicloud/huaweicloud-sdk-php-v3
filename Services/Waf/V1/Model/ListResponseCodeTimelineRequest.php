<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResponseCodeTimelineRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResponseCodeTimelineRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * from  **参数解释：** 起始时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 要查询的域名列表，通过 ”查询独享模式域名列表“（ListPremiumHost）或者 “查询云模式防护域名列表” （ListHost）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 要查询的实例列表，通过 “查询WAF独享引擎列表”（ListInstance）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSource  **参数解释：** 响应源 **约束限制：** 不涉及 **取值范围：** - WAF - UPSTREAM  **默认取值：** 不涉及
    * groupBy  **参数解释：** 展示维度，按天展示时传\"DAY\" **约束限制：** 不涉及 **取值范围：** - DAY  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'enterpriseProjectId' => 'string',
            'from' => 'int',
            'to' => 'int',
            'hosts' => 'string[]',
            'instances' => 'string[]',
            'responseSource' => 'string',
            'groupBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * from  **参数解释：** 起始时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 要查询的域名列表，通过 ”查询独享模式域名列表“（ListPremiumHost）或者 “查询云模式防护域名列表” （ListHost）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 要查询的实例列表，通过 “查询WAF独享引擎列表”（ListInstance）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSource  **参数解释：** 响应源 **约束限制：** 不涉及 **取值范围：** - WAF - UPSTREAM  **默认取值：** 不涉及
    * groupBy  **参数解释：** 展示维度，按天展示时传\"DAY\" **约束限制：** 不涉及 **取值范围：** - DAY  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'enterpriseProjectId' => null,
        'from' => 'int64',
        'to' => 'int64',
        'hosts' => null,
        'instances' => null,
        'responseSource' => null,
        'groupBy' => null
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
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * from  **参数解释：** 起始时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 要查询的域名列表，通过 ”查询独享模式域名列表“（ListPremiumHost）或者 “查询云模式防护域名列表” （ListHost）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 要查询的实例列表，通过 “查询WAF独享引擎列表”（ListInstance）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSource  **参数解释：** 响应源 **约束限制：** 不涉及 **取值范围：** - WAF - UPSTREAM  **默认取值：** 不涉及
    * groupBy  **参数解释：** 展示维度，按天展示时传\"DAY\" **约束限制：** 不涉及 **取值范围：** - DAY  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'from' => 'from',
            'to' => 'to',
            'hosts' => 'hosts',
            'instances' => 'instances',
            'responseSource' => 'response_source',
            'groupBy' => 'group_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * from  **参数解释：** 起始时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 要查询的域名列表，通过 ”查询独享模式域名列表“（ListPremiumHost）或者 “查询云模式防护域名列表” （ListHost）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 要查询的实例列表，通过 “查询WAF独享引擎列表”（ListInstance）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSource  **参数解释：** 响应源 **约束限制：** 不涉及 **取值范围：** - WAF - UPSTREAM  **默认取值：** 不涉及
    * groupBy  **参数解释：** 展示维度，按天展示时传\"DAY\" **约束限制：** 不涉及 **取值范围：** - DAY  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'from' => 'setFrom',
            'to' => 'setTo',
            'hosts' => 'setHosts',
            'instances' => 'setInstances',
            'responseSource' => 'setResponseSource',
            'groupBy' => 'setGroupBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * from  **参数解释：** 起始时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 要查询的域名列表，通过 ”查询独享模式域名列表“（ListPremiumHost）或者 “查询云模式防护域名列表” （ListHost）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 要查询的实例列表，通过 “查询WAF独享引擎列表”（ListInstance）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseSource  **参数解释：** 响应源 **约束限制：** 不涉及 **取值范围：** - WAF - UPSTREAM  **默认取值：** 不涉及
    * groupBy  **参数解释：** 展示维度，按天展示时传\"DAY\" **约束限制：** 不涉及 **取值范围：** - DAY  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'from' => 'getFrom',
            'to' => 'getTo',
            'hosts' => 'getHosts',
            'instances' => 'getInstances',
            'responseSource' => 'getResponseSource',
            'groupBy' => 'getGroupBy'
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
    const RESPONSE_SOURCE_WAF = 'WAF';
    const RESPONSE_SOURCE_UPSTREAM = 'UPSTREAM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResponseSourceAllowableValues()
    {
        return [
            self::RESPONSE_SOURCE_WAF,
            self::RESPONSE_SOURCE_UPSTREAM,
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['responseSource'] = isset($data['responseSource']) ? $data['responseSource'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
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
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
            $allowedValues = $this->getResponseSourceAllowableValues();
                if (!is_null($this->container['responseSource']) && !in_array($this->container['responseSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'responseSource', must be one of '%s'",
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
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
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
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
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
    *  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
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
    * @param string|null $enterpriseProjectId **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释：** 起始时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int $from **参数解释：** 起始时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释：** 结束时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int $to **参数解释：** 结束时间（13位毫秒时间戳） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets hosts
    *  **参数解释：** 要查询的域名列表，通过 ”查询独享模式域名列表“（ListPremiumHost）或者 “查询云模式防护域名列表” （ListHost）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string[]|null $hosts **参数解释：** 要查询的域名列表，通过 ”查询独享模式域名列表“（ListPremiumHost）或者 “查询云模式防护域名列表” （ListHost）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets instances
    *  **参数解释：** 要查询的实例列表，通过 “查询WAF独享引擎列表”（ListInstance）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param string[]|null $instances **参数解释：** 要查询的实例列表，通过 “查询WAF独享引擎列表”（ListInstance）接口获取 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets responseSource
    *  **参数解释：** 响应源 **约束限制：** 不涉及 **取值范围：** - WAF - UPSTREAM  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getResponseSource()
    {
        return $this->container['responseSource'];
    }

    /**
    * Sets responseSource
    *
    * @param string|null $responseSource **参数解释：** 响应源 **约束限制：** 不涉及 **取值范围：** - WAF - UPSTREAM  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setResponseSource($responseSource)
    {
        $this->container['responseSource'] = $responseSource;
        return $this;
    }

    /**
    * Gets groupBy
    *  **参数解释：** 展示维度，按天展示时传\"DAY\" **约束限制：** 不涉及 **取值范围：** - DAY  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
    * Sets groupBy
    *
    * @param string|null $groupBy **参数解释：** 展示维度，按天展示时传\"DAY\" **约束限制：** 不涉及 **取值范围：** - DAY  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;
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

