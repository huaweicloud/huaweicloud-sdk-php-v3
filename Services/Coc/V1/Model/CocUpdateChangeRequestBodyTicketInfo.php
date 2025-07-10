<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CocUpdateChangeRequestBodyTicketInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CocUpdateChangeRequestBody_ticket_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  -| 工单操作的类型，枚举值。 · phase_change_end：完成 · phase_change_cancel：撤销 · phase_change_draft：草稿 · phase_change_implemente：变更实施和验证 · phase_change_apply：申请人确认 · phase_change_approve：审批中 · phase_change_close：关闭
    * workFlowStatus  工单状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'workFlowStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  -| 工单操作的类型，枚举值。 · phase_change_end：完成 · phase_change_cancel：撤销 · phase_change_draft：草稿 · phase_change_implemente：变更实施和验证 · phase_change_apply：申请人确认 · phase_change_approve：审批中 · phase_change_close：关闭
    * workFlowStatus  工单状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'workFlowStatus' => null
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
    * phase  -| 工单操作的类型，枚举值。 · phase_change_end：完成 · phase_change_cancel：撤销 · phase_change_draft：草稿 · phase_change_implemente：变更实施和验证 · phase_change_apply：申请人确认 · phase_change_approve：审批中 · phase_change_close：关闭
    * workFlowStatus  工单状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'workFlowStatus' => 'work_flow_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  -| 工单操作的类型，枚举值。 · phase_change_end：完成 · phase_change_cancel：撤销 · phase_change_draft：草稿 · phase_change_implemente：变更实施和验证 · phase_change_apply：申请人确认 · phase_change_approve：审批中 · phase_change_close：关闭
    * workFlowStatus  工单状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'workFlowStatus' => 'setWorkFlowStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  -| 工单操作的类型，枚举值。 · phase_change_end：完成 · phase_change_cancel：撤销 · phase_change_draft：草稿 · phase_change_implemente：变更实施和验证 · phase_change_apply：申请人确认 · phase_change_approve：审批中 · phase_change_close：关闭
    * workFlowStatus  工单状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'workFlowStatus' => 'getWorkFlowStatus'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['workFlowStatus'] = isset($data['workFlowStatus']) ? $data['workFlowStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) > 255)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['phase']) && (mb_strlen($this->container['phase']) < 0)) {
                $invalidProperties[] = "invalid value for 'phase', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workFlowStatus']) && (mb_strlen($this->container['workFlowStatus']) > 255)) {
                $invalidProperties[] = "invalid value for 'workFlowStatus', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['workFlowStatus']) && (mb_strlen($this->container['workFlowStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'workFlowStatus', the character length must be bigger than or equal to 0.";
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
    * Gets phase
    *  -| 工单操作的类型，枚举值。 · phase_change_end：完成 · phase_change_cancel：撤销 · phase_change_draft：草稿 · phase_change_implemente：变更实施和验证 · phase_change_apply：申请人确认 · phase_change_approve：审批中 · phase_change_close：关闭
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase -| 工单操作的类型，枚举值。 · phase_change_end：完成 · phase_change_cancel：撤销 · phase_change_draft：草稿 · phase_change_implemente：变更实施和验证 · phase_change_apply：申请人确认 · phase_change_approve：审批中 · phase_change_close：关闭
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets workFlowStatus
    *  工单状态。
    *
    * @return string|null
    */
    public function getWorkFlowStatus()
    {
        return $this->container['workFlowStatus'];
    }

    /**
    * Sets workFlowStatus
    *
    * @param string|null $workFlowStatus 工单状态。
    *
    * @return $this
    */
    public function setWorkFlowStatus($workFlowStatus)
    {
        $this->container['workFlowStatus'] = $workFlowStatus;
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

