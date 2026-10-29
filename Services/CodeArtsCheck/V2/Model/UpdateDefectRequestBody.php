<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDefectRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDefectRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defectId  **参数解释：** MergeKey，问题ID。[[查询缺陷详情](ShowTaskDefectsV2.xml)](tag:hws,hws_hk)[查询缺陷详情](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)响应中的defect_id字段 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **约束限制：** [不涉及。](tag:hws,hws_hk)[状态为0、1的问题无法直接修改到状态3。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **默认取值：** 不涉及。
    * approver  **参数解释：** 问题忽略的审核人用户名。 **约束限制：** defect_status取值为4（需打开忽略审核开关）时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * comment  **参数解释：** 本次修改问题状态操作的备注。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ignoreType  **参数解释：** [忽略类型，将问题修改为待审核状态时选填。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)[废弃字段。](tag:hws,hws_hk) **约束限制：** 不涉及。 **取值范围：** - NO_RISK：评估无风险暂不解决。 - FALSE_POSITIVES：纯属工具误报。 - THIRD_PARTY：开源及第三方。 - EFFUCUENCY_RETAIN：性能敏感保留危险函数。 - NO_SUPPORT_INKERNEL：不支持的内核危险函数。 - EXCLUDE_SCENES：规范例外场景。 - COMPATIBLE_THIRD_PARTY：兼容第三方。 **默认取值：** NO_RISK
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defectId' => 'string',
            'defectStatus' => 'string',
            'approver' => 'string',
            'comment' => 'string',
            'ignoreType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defectId  **参数解释：** MergeKey，问题ID。[[查询缺陷详情](ShowTaskDefectsV2.xml)](tag:hws,hws_hk)[查询缺陷详情](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)响应中的defect_id字段 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **约束限制：** [不涉及。](tag:hws,hws_hk)[状态为0、1的问题无法直接修改到状态3。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **默认取值：** 不涉及。
    * approver  **参数解释：** 问题忽略的审核人用户名。 **约束限制：** defect_status取值为4（需打开忽略审核开关）时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * comment  **参数解释：** 本次修改问题状态操作的备注。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ignoreType  **参数解释：** [忽略类型，将问题修改为待审核状态时选填。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)[废弃字段。](tag:hws,hws_hk) **约束限制：** 不涉及。 **取值范围：** - NO_RISK：评估无风险暂不解决。 - FALSE_POSITIVES：纯属工具误报。 - THIRD_PARTY：开源及第三方。 - EFFUCUENCY_RETAIN：性能敏感保留危险函数。 - NO_SUPPORT_INKERNEL：不支持的内核危险函数。 - EXCLUDE_SCENES：规范例外场景。 - COMPATIBLE_THIRD_PARTY：兼容第三方。 **默认取值：** NO_RISK
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defectId' => null,
        'defectStatus' => null,
        'approver' => null,
        'comment' => null,
        'ignoreType' => null
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
    * defectId  **参数解释：** MergeKey，问题ID。[[查询缺陷详情](ShowTaskDefectsV2.xml)](tag:hws,hws_hk)[查询缺陷详情](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)响应中的defect_id字段 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **约束限制：** [不涉及。](tag:hws,hws_hk)[状态为0、1的问题无法直接修改到状态3。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **默认取值：** 不涉及。
    * approver  **参数解释：** 问题忽略的审核人用户名。 **约束限制：** defect_status取值为4（需打开忽略审核开关）时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * comment  **参数解释：** 本次修改问题状态操作的备注。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ignoreType  **参数解释：** [忽略类型，将问题修改为待审核状态时选填。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)[废弃字段。](tag:hws,hws_hk) **约束限制：** 不涉及。 **取值范围：** - NO_RISK：评估无风险暂不解决。 - FALSE_POSITIVES：纯属工具误报。 - THIRD_PARTY：开源及第三方。 - EFFUCUENCY_RETAIN：性能敏感保留危险函数。 - NO_SUPPORT_INKERNEL：不支持的内核危险函数。 - EXCLUDE_SCENES：规范例外场景。 - COMPATIBLE_THIRD_PARTY：兼容第三方。 **默认取值：** NO_RISK
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defectId' => 'defect_id',
            'defectStatus' => 'defect_status',
            'approver' => 'approver',
            'comment' => 'comment',
            'ignoreType' => 'ignoreType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defectId  **参数解释：** MergeKey，问题ID。[[查询缺陷详情](ShowTaskDefectsV2.xml)](tag:hws,hws_hk)[查询缺陷详情](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)响应中的defect_id字段 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **约束限制：** [不涉及。](tag:hws,hws_hk)[状态为0、1的问题无法直接修改到状态3。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **默认取值：** 不涉及。
    * approver  **参数解释：** 问题忽略的审核人用户名。 **约束限制：** defect_status取值为4（需打开忽略审核开关）时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * comment  **参数解释：** 本次修改问题状态操作的备注。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ignoreType  **参数解释：** [忽略类型，将问题修改为待审核状态时选填。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)[废弃字段。](tag:hws,hws_hk) **约束限制：** 不涉及。 **取值范围：** - NO_RISK：评估无风险暂不解决。 - FALSE_POSITIVES：纯属工具误报。 - THIRD_PARTY：开源及第三方。 - EFFUCUENCY_RETAIN：性能敏感保留危险函数。 - NO_SUPPORT_INKERNEL：不支持的内核危险函数。 - EXCLUDE_SCENES：规范例外场景。 - COMPATIBLE_THIRD_PARTY：兼容第三方。 **默认取值：** NO_RISK
    *
    * @var string[]
    */
    protected static $setters = [
            'defectId' => 'setDefectId',
            'defectStatus' => 'setDefectStatus',
            'approver' => 'setApprover',
            'comment' => 'setComment',
            'ignoreType' => 'setIgnoreType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defectId  **参数解释：** MergeKey，问题ID。[[查询缺陷详情](ShowTaskDefectsV2.xml)](tag:hws,hws_hk)[查询缺陷详情](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)响应中的defect_id字段 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **约束限制：** [不涉及。](tag:hws,hws_hk)[状态为0、1的问题无法直接修改到状态3。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **默认取值：** 不涉及。
    * approver  **参数解释：** 问题忽略的审核人用户名。 **约束限制：** defect_status取值为4（需打开忽略审核开关）时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * comment  **参数解释：** 本次修改问题状态操作的备注。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ignoreType  **参数解释：** [忽略类型，将问题修改为待审核状态时选填。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)[废弃字段。](tag:hws,hws_hk) **约束限制：** 不涉及。 **取值范围：** - NO_RISK：评估无风险暂不解决。 - FALSE_POSITIVES：纯属工具误报。 - THIRD_PARTY：开源及第三方。 - EFFUCUENCY_RETAIN：性能敏感保留危险函数。 - NO_SUPPORT_INKERNEL：不支持的内核危险函数。 - EXCLUDE_SCENES：规范例外场景。 - COMPATIBLE_THIRD_PARTY：兼容第三方。 **默认取值：** NO_RISK
    *
    * @var string[]
    */
    protected static $getters = [
            'defectId' => 'getDefectId',
            'defectStatus' => 'getDefectStatus',
            'approver' => 'getApprover',
            'comment' => 'getComment',
            'ignoreType' => 'getIgnoreType'
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
        $this->container['defectId'] = isset($data['defectId']) ? $data['defectId'] : null;
        $this->container['defectStatus'] = isset($data['defectStatus']) ? $data['defectStatus'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['ignoreType'] = isset($data['ignoreType']) ? $data['ignoreType'] : null;
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
    * Gets defectId
    *  **参数解释：** MergeKey，问题ID。[[查询缺陷详情](ShowTaskDefectsV2.xml)](tag:hws,hws_hk)[查询缺陷详情](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)响应中的defect_id字段 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getDefectId()
    {
        return $this->container['defectId'];
    }

    /**
    * Sets defectId
    *
    * @param string|null $defectId **参数解释：** MergeKey，问题ID。[[查询缺陷详情](ShowTaskDefectsV2.xml)](tag:hws,hws_hk)[查询缺陷详情](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)响应中的defect_id字段 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDefectId($defectId)
    {
        $this->container['defectId'] = $defectId;
        return $this;
    }

    /**
    * Gets defectStatus
    *  **参数解释：** 问题状态。 **约束限制：** [不涉及。](tag:hws,hws_hk)[状态为0、1的问题无法直接修改到状态3。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getDefectStatus()
    {
        return $this->container['defectStatus'];
    }

    /**
    * Sets defectStatus
    *
    * @param string|null $defectStatus **参数解释：** 问题状态。 **约束限制：** [不涉及。](tag:hws,hws_hk)[状态为0、1的问题无法直接修改到状态3。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDefectStatus($defectStatus)
    {
        $this->container['defectStatus'] = $defectStatus;
        return $this;
    }

    /**
    * Gets approver
    *  **参数解释：** 问题忽略的审核人用户名。 **约束限制：** defect_status取值为4（需打开忽略审核开关）时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
    * Sets approver
    *
    * @param string|null $approver **参数解释：** 问题忽略的审核人用户名。 **约束限制：** defect_status取值为4（需打开忽略审核开关）时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets comment
    *  **参数解释：** 本次修改问题状态操作的备注。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment **参数解释：** 本次修改问题状态操作的备注。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets ignoreType
    *  **参数解释：** [忽略类型，将问题修改为待审核状态时选填。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)[废弃字段。](tag:hws,hws_hk) **约束限制：** 不涉及。 **取值范围：** - NO_RISK：评估无风险暂不解决。 - FALSE_POSITIVES：纯属工具误报。 - THIRD_PARTY：开源及第三方。 - EFFUCUENCY_RETAIN：性能敏感保留危险函数。 - NO_SUPPORT_INKERNEL：不支持的内核危险函数。 - EXCLUDE_SCENES：规范例外场景。 - COMPATIBLE_THIRD_PARTY：兼容第三方。 **默认取值：** NO_RISK
    *
    * @return string|null
    */
    public function getIgnoreType()
    {
        return $this->container['ignoreType'];
    }

    /**
    * Sets ignoreType
    *
    * @param string|null $ignoreType **参数解释：** [忽略类型，将问题修改为待审核状态时选填。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)[废弃字段。](tag:hws,hws_hk) **约束限制：** 不涉及。 **取值范围：** - NO_RISK：评估无风险暂不解决。 - FALSE_POSITIVES：纯属工具误报。 - THIRD_PARTY：开源及第三方。 - EFFUCUENCY_RETAIN：性能敏感保留危险函数。 - NO_SUPPORT_INKERNEL：不支持的内核危险函数。 - EXCLUDE_SCENES：规范例外场景。 - COMPATIBLE_THIRD_PARTY：兼容第三方。 **默认取值：** NO_RISK
    *
    * @return $this
    */
    public function setIgnoreType($ignoreType)
    {
        $this->container['ignoreType'] = $ignoreType;
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

