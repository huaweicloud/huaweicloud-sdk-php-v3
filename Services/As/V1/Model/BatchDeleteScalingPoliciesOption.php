<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteScalingPoliciesOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteScalingPoliciesOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingPolicyId  伸缩策略ID。
    * forceDelete  是否强制删除伸缩策略。默认为no，可选值为yes或no。只有action为delete时，该字段才生效。
    * action  批量操作伸缩策略action标识：删除：delete。启用：resume。停止：pause。
    * deleteAlarm  是否删除告警策略使用的告警规则。可选值为yes或no，默认为no。 只有action为delete时，该字段才生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingPolicyId' => 'string[]',
            'forceDelete' => 'string',
            'action' => 'string',
            'deleteAlarm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingPolicyId  伸缩策略ID。
    * forceDelete  是否强制删除伸缩策略。默认为no，可选值为yes或no。只有action为delete时，该字段才生效。
    * action  批量操作伸缩策略action标识：删除：delete。启用：resume。停止：pause。
    * deleteAlarm  是否删除告警策略使用的告警规则。可选值为yes或no，默认为no。 只有action为delete时，该字段才生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingPolicyId' => null,
        'forceDelete' => null,
        'action' => null,
        'deleteAlarm' => null
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
    * scalingPolicyId  伸缩策略ID。
    * forceDelete  是否强制删除伸缩策略。默认为no，可选值为yes或no。只有action为delete时，该字段才生效。
    * action  批量操作伸缩策略action标识：删除：delete。启用：resume。停止：pause。
    * deleteAlarm  是否删除告警策略使用的告警规则。可选值为yes或no，默认为no。 只有action为delete时，该字段才生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingPolicyId' => 'scaling_policy_id',
            'forceDelete' => 'force_delete',
            'action' => 'action',
            'deleteAlarm' => 'delete_alarm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingPolicyId  伸缩策略ID。
    * forceDelete  是否强制删除伸缩策略。默认为no，可选值为yes或no。只有action为delete时，该字段才生效。
    * action  批量操作伸缩策略action标识：删除：delete。启用：resume。停止：pause。
    * deleteAlarm  是否删除告警策略使用的告警规则。可选值为yes或no，默认为no。 只有action为delete时，该字段才生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingPolicyId' => 'setScalingPolicyId',
            'forceDelete' => 'setForceDelete',
            'action' => 'setAction',
            'deleteAlarm' => 'setDeleteAlarm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingPolicyId  伸缩策略ID。
    * forceDelete  是否强制删除伸缩策略。默认为no，可选值为yes或no。只有action为delete时，该字段才生效。
    * action  批量操作伸缩策略action标识：删除：delete。启用：resume。停止：pause。
    * deleteAlarm  是否删除告警策略使用的告警规则。可选值为yes或no，默认为no。 只有action为delete时，该字段才生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingPolicyId' => 'getScalingPolicyId',
            'forceDelete' => 'getForceDelete',
            'action' => 'getAction',
            'deleteAlarm' => 'getDeleteAlarm'
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
    const FORCE_DELETE_NO = 'no';
    const FORCE_DELETE_YES = 'yes';
    const ACTION_DELETE = 'delete';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getForceDeleteAllowableValues()
    {
        return [
            self::FORCE_DELETE_NO,
            self::FORCE_DELETE_YES,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_DELETE,
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
        $this->container['scalingPolicyId'] = isset($data['scalingPolicyId']) ? $data['scalingPolicyId'] : null;
        $this->container['forceDelete'] = isset($data['forceDelete']) ? $data['forceDelete'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['deleteAlarm'] = isset($data['deleteAlarm']) ? $data['deleteAlarm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scalingPolicyId'] === null) {
            $invalidProperties[] = "'scalingPolicyId' can't be null";
        }
            $allowedValues = $this->getForceDeleteAllowableValues();
                if (!is_null($this->container['forceDelete']) && !in_array($this->container['forceDelete'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'forceDelete', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets scalingPolicyId
    *  伸缩策略ID。
    *
    * @return string[]
    */
    public function getScalingPolicyId()
    {
        return $this->container['scalingPolicyId'];
    }

    /**
    * Sets scalingPolicyId
    *
    * @param string[] $scalingPolicyId 伸缩策略ID。
    *
    * @return $this
    */
    public function setScalingPolicyId($scalingPolicyId)
    {
        $this->container['scalingPolicyId'] = $scalingPolicyId;
        return $this;
    }

    /**
    * Gets forceDelete
    *  是否强制删除伸缩策略。默认为no，可选值为yes或no。只有action为delete时，该字段才生效。
    *
    * @return string|null
    */
    public function getForceDelete()
    {
        return $this->container['forceDelete'];
    }

    /**
    * Sets forceDelete
    *
    * @param string|null $forceDelete 是否强制删除伸缩策略。默认为no，可选值为yes或no。只有action为delete时，该字段才生效。
    *
    * @return $this
    */
    public function setForceDelete($forceDelete)
    {
        $this->container['forceDelete'] = $forceDelete;
        return $this;
    }

    /**
    * Gets action
    *  批量操作伸缩策略action标识：删除：delete。启用：resume。停止：pause。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 批量操作伸缩策略action标识：删除：delete。启用：resume。停止：pause。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets deleteAlarm
    *  是否删除告警策略使用的告警规则。可选值为yes或no，默认为no。 只有action为delete时，该字段才生效。
    *
    * @return string|null
    */
    public function getDeleteAlarm()
    {
        return $this->container['deleteAlarm'];
    }

    /**
    * Sets deleteAlarm
    *
    * @param string|null $deleteAlarm 是否删除告警策略使用的告警规则。可选值为yes或no，默认为no。 只有action为delete时，该字段才生效。
    *
    * @return $this
    */
    public function setDeleteAlarm($deleteAlarm)
    {
        $this->container['deleteAlarm'] = $deleteAlarm;
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

