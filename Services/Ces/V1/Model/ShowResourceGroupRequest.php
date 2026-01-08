<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceGroupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字 **默认取值** 不涉及
    * status  **参数解释** 资源分组健康状态 **约束限制** 不涉及 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则 **默认取值** 不涉及
    * namespace  **参数解释** 资源类型，即命名空间，如弹性云服务器的资源命名空间为：SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制** 不涉及 **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度在 [3,32]个字符之间 **默认取值** 不涉及
    * dname  **参数解释** 资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制** 不涉及 **取值范围** 包含字母、数字、_、-、/、#、\\或括号，长度为[1,131]个字符 **默认取值** 不涉及
    * start  **参数解释** 分页起始值 **约束限制** 不涉及 **取值范围** [0,9999999] **默认取值** 0
    * limit  **参数解释** 单次查询的条数限制 **约束限制** 不涉及 **取值范围** [1,100] **默认取值** 100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'status' => 'string',
            'namespace' => 'string',
            'dname' => 'string',
            'start' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字 **默认取值** 不涉及
    * status  **参数解释** 资源分组健康状态 **约束限制** 不涉及 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则 **默认取值** 不涉及
    * namespace  **参数解释** 资源类型，即命名空间，如弹性云服务器的资源命名空间为：SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制** 不涉及 **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度在 [3,32]个字符之间 **默认取值** 不涉及
    * dname  **参数解释** 资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制** 不涉及 **取值范围** 包含字母、数字、_、-、/、#、\\或括号，长度为[1,131]个字符 **默认取值** 不涉及
    * start  **参数解释** 分页起始值 **约束限制** 不涉及 **取值范围** [0,9999999] **默认取值** 0
    * limit  **参数解释** 单次查询的条数限制 **约束限制** 不涉及 **取值范围** [1,100] **默认取值** 100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'status' => null,
        'namespace' => null,
        'dname' => null,
        'start' => null,
        'limit' => null
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
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字 **默认取值** 不涉及
    * status  **参数解释** 资源分组健康状态 **约束限制** 不涉及 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则 **默认取值** 不涉及
    * namespace  **参数解释** 资源类型，即命名空间，如弹性云服务器的资源命名空间为：SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制** 不涉及 **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度在 [3,32]个字符之间 **默认取值** 不涉及
    * dname  **参数解释** 资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制** 不涉及 **取值范围** 包含字母、数字、_、-、/、#、\\或括号，长度为[1,131]个字符 **默认取值** 不涉及
    * start  **参数解释** 分页起始值 **约束限制** 不涉及 **取值范围** [0,9999999] **默认取值** 0
    * limit  **参数解释** 单次查询的条数限制 **约束限制** 不涉及 **取值范围** [1,100] **默认取值** 100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'status' => 'status',
            'namespace' => 'namespace',
            'dname' => 'dname',
            'start' => 'start',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字 **默认取值** 不涉及
    * status  **参数解释** 资源分组健康状态 **约束限制** 不涉及 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则 **默认取值** 不涉及
    * namespace  **参数解释** 资源类型，即命名空间，如弹性云服务器的资源命名空间为：SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制** 不涉及 **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度在 [3,32]个字符之间 **默认取值** 不涉及
    * dname  **参数解释** 资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制** 不涉及 **取值范围** 包含字母、数字、_、-、/、#、\\或括号，长度为[1,131]个字符 **默认取值** 不涉及
    * start  **参数解释** 分页起始值 **约束限制** 不涉及 **取值范围** [0,9999999] **默认取值** 0
    * limit  **参数解释** 单次查询的条数限制 **约束限制** 不涉及 **取值范围** [1,100] **默认取值** 100
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'status' => 'setStatus',
            'namespace' => 'setNamespace',
            'dname' => 'setDname',
            'start' => 'setStart',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字 **默认取值** 不涉及
    * status  **参数解释** 资源分组健康状态 **约束限制** 不涉及 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则 **默认取值** 不涉及
    * namespace  **参数解释** 资源类型，即命名空间，如弹性云服务器的资源命名空间为：SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制** 不涉及 **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度在 [3,32]个字符之间 **默认取值** 不涉及
    * dname  **参数解释** 资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制** 不涉及 **取值范围** 包含字母、数字、_、-、/、#、\\或括号，长度为[1,131]个字符 **默认取值** 不涉及
    * start  **参数解释** 分页起始值 **约束限制** 不涉及 **取值范围** [0,9999999] **默认取值** 0
    * limit  **参数解释** 单次查询的条数限制 **约束限制** 不涉及 **取值范围** [1,100] **默认取值** 100
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'status' => 'getStatus',
            'namespace' => 'getNamespace',
            'dname' => 'getDname',
            'start' => 'getStart',
            'limit' => 'getLimit'
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
    const STATUS_HEALTH = 'health';
    const STATUS_UNHEALTH = 'unhealth';
    const STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_HEALTH,
            self::STATUS_UNHEALTH,
            self::STATUS_NO_ALARM_RULE,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dname'] = isset($data['dname']) ? $data['dname'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if (!preg_match("/^rg([a-z]|[A-Z]|[0-9]){22}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^rg([a-z]|[A-Z]|[0-9]){22}$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
            if (!is_null($this->container['dname']) && (mb_strlen($this->container['dname']) > 131)) {
                $invalidProperties[] = "invalid value for 'dname', the character length must be smaller than or equal to 131.";
            }
            if (!is_null($this->container['dname']) && (mb_strlen($this->container['dname']) < 1)) {
                $invalidProperties[] = "invalid value for 'dname', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dname']) && !preg_match("/^([a-z]|[A-Z]|\/|#|\\(|\\)){1}([a-z]|[A-Z]|[0-9]|_|-|\/|#|\\(|\\)){0,31}(,([a-z]|[A-Z]|\/|#|\\(|\\)){1}([a-z]|[A-Z]|[0-9]|_|-|\/|#|\\(|\\)){0,31}){0,3}$/", $this->container['dname'])) {
                $invalidProperties[] = "invalid value for 'dname', must be conform to the pattern /^([a-z]|[A-Z]|\/|#|\\(|\\)){1}([a-z]|[A-Z]|[0-9]|_|-|\/|#|\\(|\\)){0,31}(,([a-z]|[A-Z]|\/|#|\\(|\\)){1}([a-z]|[A-Z]|[0-9]|_|-|\/|#|\\(|\\)){0,31}){0,3}$/.";
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
    * Gets groupId
    *  **参数解释** 资源分组ID。 **约束限制** 不涉及 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字 **默认取值** 不涉及
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId **参数解释** 资源分组ID。 **约束限制** 不涉及 **取值范围** 以\"rg\"开头，后面跟着22个字母或数字 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 资源分组健康状态 **约束限制** 不涉及 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释** 资源分组健康状态 **约束限制** 不涉及 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释** 资源类型，即命名空间，如弹性云服务器的资源命名空间为：SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制** 不涉及 **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度在 [3,32]个字符之间 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释** 资源类型，即命名空间，如弹性云服务器的资源命名空间为：SYS.ECS；各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)。 **约束限制** 不涉及 **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度在 [3,32]个字符之间 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dname
    *  **参数解释** 资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制** 不涉及 **取值范围** 包含字母、数字、_、-、/、#、\\或括号，长度为[1,131]个字符 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getDname()
    {
        return $this->container['dname'];
    }

    /**
    * Sets dname
    *
    * @param string|null $dname **参数解释** 资源维度，如：弹性云服务器，则维度为instance_id，各服务资源的维度名称，请参阅具体云服务的文档。您可以直接从[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg)页面导航至相应文档。 **约束限制** 不涉及 **取值范围** 包含字母、数字、_、-、/、#、\\或括号，长度为[1,131]个字符 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setDname($dname)
    {
        $this->container['dname'] = $dname;
        return $this;
    }

    /**
    * Gets start
    *  **参数解释** 分页起始值 **约束限制** 不涉及 **取值范围** [0,9999999] **默认取值** 0
    *
    * @return string|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string|null $start **参数解释** 分页起始值 **约束限制** 不涉及 **取值范围** [0,9999999] **默认取值** 0
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释** 单次查询的条数限制 **约束限制** 不涉及 **取值范围** [1,100] **默认取值** 100
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit **参数解释** 单次查询的条数限制 **约束限制** 不涉及 **取值范围** [1,100] **默认取值** 100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

