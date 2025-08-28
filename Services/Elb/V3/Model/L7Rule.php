<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class L7Rule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'L7Rule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：转发规则的管理状。  **取值范围**：固定为true。  不支持该字段，请勿使用。
    * compareType  **参数解释**：转发规则的匹配方式。  **取值范围**：type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。
    * key  **参数解释**：匹配内容的键值。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * projectId  **参数解释**：转发规则所在的项目ID。  **取值范围**：不涉及
    * type  **参数解释**：转发规则类别。  **取值范围**： - HOST_NAME：匹配域名。 - PATH：匹配请求路径。 - METHOD：匹配请求方法。 - HEADER：匹配请求头。 - QUERY_STRING：匹配请求查询参数。 - SOURCE_IP：匹配请求源IP地址。 - COOKIE: 匹配cookie信息。
    * value  **参数解释**：匹配内容的值。  **取值范围**： - 当type为HOST_NAME时，字符串只能包含英文字母、数字、-.*，必须以字母、数字或*开头。若域名中包含*，则*只能出现在开头且必须以*.开始。当*开头时表示通配0~任一个字符。 - 当type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。 - 当type为METHOD、SOURCE_IP、HEADER, QUERY_STRING时，该字段无意义，使用conditions来指定key，value。
    * provisioningStatus  **参数解释**：provisioning状态。该字段无效，默认为ACTIVE。  **取值范围**：ACTIVE、PENDING_CREATE 或者ERROR。
    * invert  **参数解释**：是否反向匹配。  **取值范围**：不涉及
    * id  **参数解释**：规则ID。  **取值范围**：不涉及
    * conditions  **参数解释**：转发规则的匹配条件。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'compareType' => 'string',
            'key' => 'string',
            'projectId' => 'string',
            'type' => 'string',
            'value' => 'string',
            'provisioningStatus' => 'string',
            'invert' => 'bool',
            'id' => 'string',
            'conditions' => '\HuaweiCloud\SDK\Elb\V3\Model\RuleCondition[]',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：转发规则的管理状。  **取值范围**：固定为true。  不支持该字段，请勿使用。
    * compareType  **参数解释**：转发规则的匹配方式。  **取值范围**：type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。
    * key  **参数解释**：匹配内容的键值。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * projectId  **参数解释**：转发规则所在的项目ID。  **取值范围**：不涉及
    * type  **参数解释**：转发规则类别。  **取值范围**： - HOST_NAME：匹配域名。 - PATH：匹配请求路径。 - METHOD：匹配请求方法。 - HEADER：匹配请求头。 - QUERY_STRING：匹配请求查询参数。 - SOURCE_IP：匹配请求源IP地址。 - COOKIE: 匹配cookie信息。
    * value  **参数解释**：匹配内容的值。  **取值范围**： - 当type为HOST_NAME时，字符串只能包含英文字母、数字、-.*，必须以字母、数字或*开头。若域名中包含*，则*只能出现在开头且必须以*.开始。当*开头时表示通配0~任一个字符。 - 当type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。 - 当type为METHOD、SOURCE_IP、HEADER, QUERY_STRING时，该字段无意义，使用conditions来指定key，value。
    * provisioningStatus  **参数解释**：provisioning状态。该字段无效，默认为ACTIVE。  **取值范围**：ACTIVE、PENDING_CREATE 或者ERROR。
    * invert  **参数解释**：是否反向匹配。  **取值范围**：不涉及
    * id  **参数解释**：规则ID。  **取值范围**：不涉及
    * conditions  **参数解释**：转发规则的匹配条件。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'compareType' => null,
        'key' => null,
        'projectId' => null,
        'type' => null,
        'value' => null,
        'provisioningStatus' => null,
        'invert' => null,
        'id' => null,
        'conditions' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * adminStateUp  **参数解释**：转发规则的管理状。  **取值范围**：固定为true。  不支持该字段，请勿使用。
    * compareType  **参数解释**：转发规则的匹配方式。  **取值范围**：type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。
    * key  **参数解释**：匹配内容的键值。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * projectId  **参数解释**：转发规则所在的项目ID。  **取值范围**：不涉及
    * type  **参数解释**：转发规则类别。  **取值范围**： - HOST_NAME：匹配域名。 - PATH：匹配请求路径。 - METHOD：匹配请求方法。 - HEADER：匹配请求头。 - QUERY_STRING：匹配请求查询参数。 - SOURCE_IP：匹配请求源IP地址。 - COOKIE: 匹配cookie信息。
    * value  **参数解释**：匹配内容的值。  **取值范围**： - 当type为HOST_NAME时，字符串只能包含英文字母、数字、-.*，必须以字母、数字或*开头。若域名中包含*，则*只能出现在开头且必须以*.开始。当*开头时表示通配0~任一个字符。 - 当type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。 - 当type为METHOD、SOURCE_IP、HEADER, QUERY_STRING时，该字段无意义，使用conditions来指定key，value。
    * provisioningStatus  **参数解释**：provisioning状态。该字段无效，默认为ACTIVE。  **取值范围**：ACTIVE、PENDING_CREATE 或者ERROR。
    * invert  **参数解释**：是否反向匹配。  **取值范围**：不涉及
    * id  **参数解释**：规则ID。  **取值范围**：不涉及
    * conditions  **参数解释**：转发规则的匹配条件。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'compareType' => 'compare_type',
            'key' => 'key',
            'projectId' => 'project_id',
            'type' => 'type',
            'value' => 'value',
            'provisioningStatus' => 'provisioning_status',
            'invert' => 'invert',
            'id' => 'id',
            'conditions' => 'conditions',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  **参数解释**：转发规则的管理状。  **取值范围**：固定为true。  不支持该字段，请勿使用。
    * compareType  **参数解释**：转发规则的匹配方式。  **取值范围**：type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。
    * key  **参数解释**：匹配内容的键值。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * projectId  **参数解释**：转发规则所在的项目ID。  **取值范围**：不涉及
    * type  **参数解释**：转发规则类别。  **取值范围**： - HOST_NAME：匹配域名。 - PATH：匹配请求路径。 - METHOD：匹配请求方法。 - HEADER：匹配请求头。 - QUERY_STRING：匹配请求查询参数。 - SOURCE_IP：匹配请求源IP地址。 - COOKIE: 匹配cookie信息。
    * value  **参数解释**：匹配内容的值。  **取值范围**： - 当type为HOST_NAME时，字符串只能包含英文字母、数字、-.*，必须以字母、数字或*开头。若域名中包含*，则*只能出现在开头且必须以*.开始。当*开头时表示通配0~任一个字符。 - 当type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。 - 当type为METHOD、SOURCE_IP、HEADER, QUERY_STRING时，该字段无意义，使用conditions来指定key，value。
    * provisioningStatus  **参数解释**：provisioning状态。该字段无效，默认为ACTIVE。  **取值范围**：ACTIVE、PENDING_CREATE 或者ERROR。
    * invert  **参数解释**：是否反向匹配。  **取值范围**：不涉及
    * id  **参数解释**：规则ID。  **取值范围**：不涉及
    * conditions  **参数解释**：转发规则的匹配条件。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'compareType' => 'setCompareType',
            'key' => 'setKey',
            'projectId' => 'setProjectId',
            'type' => 'setType',
            'value' => 'setValue',
            'provisioningStatus' => 'setProvisioningStatus',
            'invert' => 'setInvert',
            'id' => 'setId',
            'conditions' => 'setConditions',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  **参数解释**：转发规则的管理状。  **取值范围**：固定为true。  不支持该字段，请勿使用。
    * compareType  **参数解释**：转发规则的匹配方式。  **取值范围**：type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。
    * key  **参数解释**：匹配内容的键值。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * projectId  **参数解释**：转发规则所在的项目ID。  **取值范围**：不涉及
    * type  **参数解释**：转发规则类别。  **取值范围**： - HOST_NAME：匹配域名。 - PATH：匹配请求路径。 - METHOD：匹配请求方法。 - HEADER：匹配请求头。 - QUERY_STRING：匹配请求查询参数。 - SOURCE_IP：匹配请求源IP地址。 - COOKIE: 匹配cookie信息。
    * value  **参数解释**：匹配内容的值。  **取值范围**： - 当type为HOST_NAME时，字符串只能包含英文字母、数字、-.*，必须以字母、数字或*开头。若域名中包含*，则*只能出现在开头且必须以*.开始。当*开头时表示通配0~任一个字符。 - 当type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。 - 当type为METHOD、SOURCE_IP、HEADER, QUERY_STRING时，该字段无意义，使用conditions来指定key，value。
    * provisioningStatus  **参数解释**：provisioning状态。该字段无效，默认为ACTIVE。  **取值范围**：ACTIVE、PENDING_CREATE 或者ERROR。
    * invert  **参数解释**：是否反向匹配。  **取值范围**：不涉及
    * id  **参数解释**：规则ID。  **取值范围**：不涉及
    * conditions  **参数解释**：转发规则的匹配条件。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'compareType' => 'getCompareType',
            'key' => 'getKey',
            'projectId' => 'getProjectId',
            'type' => 'getType',
            'value' => 'getValue',
            'provisioningStatus' => 'getProvisioningStatus',
            'invert' => 'getInvert',
            'id' => 'getId',
            'conditions' => 'getConditions',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
    const TYPE_HOST_NAME = 'HOST_NAME';
    const TYPE_PATH = 'PATH';
    const TYPE_METHOD = 'METHOD';
    const TYPE_HEADER = 'HEADER';
    const TYPE_QUERY_STRING = 'QUERY_STRING';
    const TYPE_SOURCE_IP = 'SOURCE_IP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HOST_NAME,
            self::TYPE_PATH,
            self::TYPE_METHOD,
            self::TYPE_HEADER,
            self::TYPE_QUERY_STRING,
            self::TYPE_SOURCE_IP,
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['invert'] = isset($data['invert']) ? $data['invert'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['compareType'] === null) {
            $invalidProperties[] = "'compareType' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 255)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if ((mb_strlen($this->container['value']) > 128)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
        }
        if ($this->container['invert'] === null) {
            $invalidProperties[] = "'invert' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
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
    * Gets adminStateUp
    *  **参数解释**：转发规则的管理状。  **取值范围**：固定为true。  不支持该字段，请勿使用。
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp **参数解释**：转发规则的管理状。  **取值范围**：固定为true。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets compareType
    *  **参数解释**：转发规则的匹配方式。  **取值范围**：type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。
    *
    * @return string
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string $compareType **参数解释**：转发规则的匹配方式。  **取值范围**：type为HOST_NAME时可以为EQUAL_TO。type为PATH时可以为REGEX，STARTS_WITH，EQUAL_TO。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets key
    *  **参数解释**：匹配内容的键值。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key **参数解释**：匹配内容的键值。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：转发规则所在的项目ID。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**：转发规则所在的项目ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：转发规则类别。  **取值范围**： - HOST_NAME：匹配域名。 - PATH：匹配请求路径。 - METHOD：匹配请求方法。 - HEADER：匹配请求头。 - QUERY_STRING：匹配请求查询参数。 - SOURCE_IP：匹配请求源IP地址。 - COOKIE: 匹配cookie信息。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：转发规则类别。  **取值范围**： - HOST_NAME：匹配域名。 - PATH：匹配请求路径。 - METHOD：匹配请求方法。 - HEADER：匹配请求头。 - QUERY_STRING：匹配请求查询参数。 - SOURCE_IP：匹配请求源IP地址。 - COOKIE: 匹配cookie信息。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**：匹配内容的值。  **取值范围**： - 当type为HOST_NAME时，字符串只能包含英文字母、数字、-.*，必须以字母、数字或*开头。若域名中包含*，则*只能出现在开头且必须以*.开始。当*开头时表示通配0~任一个字符。 - 当type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。 - 当type为METHOD、SOURCE_IP、HEADER, QUERY_STRING时，该字段无意义，使用conditions来指定key，value。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value **参数解释**：匹配内容的值。  **取值范围**： - 当type为HOST_NAME时，字符串只能包含英文字母、数字、-.*，必须以字母、数字或*开头。若域名中包含*，则*只能出现在开头且必须以*.开始。当*开头时表示通配0~任一个字符。 - 当type为PATH时，当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:|\\/()\\[\\]{}，且必须以/开头。 - 当type为METHOD、SOURCE_IP、HEADER, QUERY_STRING时，该字段无意义，使用conditions来指定key，value。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  **参数解释**：provisioning状态。该字段无效，默认为ACTIVE。  **取值范围**：ACTIVE、PENDING_CREATE 或者ERROR。
    *
    * @return string
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string $provisioningStatus **参数解释**：provisioning状态。该字段无效，默认为ACTIVE。  **取值范围**：ACTIVE、PENDING_CREATE 或者ERROR。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets invert
    *  **参数解释**：是否反向匹配。  **取值范围**：不涉及
    *
    * @return bool
    */
    public function getInvert()
    {
        return $this->container['invert'];
    }

    /**
    * Sets invert
    *
    * @param bool $invert **参数解释**：是否反向匹配。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setInvert($invert)
    {
        $this->container['invert'] = $invert;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：规则ID。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**：规则ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets conditions
    *  **参数解释**：转发规则的匹配条件。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\RuleCondition[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\RuleCondition[] $conditions **参数解释**：转发规则的匹配条件。  **取值范围**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

