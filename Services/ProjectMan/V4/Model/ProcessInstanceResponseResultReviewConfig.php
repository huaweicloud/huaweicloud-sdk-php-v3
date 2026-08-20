<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInstanceResponseResultReviewConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInstanceResponse_result_review_config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approvalType  审批类型
    * ratioValue  审批进度
    * skipDecisioning  是否跳过决策
    * approvalRoles  决策角色
    * reviewRoles  审批角色
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approvalType' => 'int',
            'ratioValue' => 'string',
            'skipDecisioning' => 'bool',
            'approvalRoles' => 'string',
            'reviewRoles' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approvalType  审批类型
    * ratioValue  审批进度
    * skipDecisioning  是否跳过决策
    * approvalRoles  决策角色
    * reviewRoles  审批角色
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approvalType' => 'int32',
        'ratioValue' => null,
        'skipDecisioning' => null,
        'approvalRoles' => null,
        'reviewRoles' => null
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
    * approvalType  审批类型
    * ratioValue  审批进度
    * skipDecisioning  是否跳过决策
    * approvalRoles  决策角色
    * reviewRoles  审批角色
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approvalType' => 'approval_type',
            'ratioValue' => 'ratio_value',
            'skipDecisioning' => 'skip_decisioning',
            'approvalRoles' => 'approval_roles',
            'reviewRoles' => 'review_roles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approvalType  审批类型
    * ratioValue  审批进度
    * skipDecisioning  是否跳过决策
    * approvalRoles  决策角色
    * reviewRoles  审批角色
    *
    * @var string[]
    */
    protected static $setters = [
            'approvalType' => 'setApprovalType',
            'ratioValue' => 'setRatioValue',
            'skipDecisioning' => 'setSkipDecisioning',
            'approvalRoles' => 'setApprovalRoles',
            'reviewRoles' => 'setReviewRoles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approvalType  审批类型
    * ratioValue  审批进度
    * skipDecisioning  是否跳过决策
    * approvalRoles  决策角色
    * reviewRoles  审批角色
    *
    * @var string[]
    */
    protected static $getters = [
            'approvalType' => 'getApprovalType',
            'ratioValue' => 'getRatioValue',
            'skipDecisioning' => 'getSkipDecisioning',
            'approvalRoles' => 'getApprovalRoles',
            'reviewRoles' => 'getReviewRoles'
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
        $this->container['approvalType'] = isset($data['approvalType']) ? $data['approvalType'] : null;
        $this->container['ratioValue'] = isset($data['ratioValue']) ? $data['ratioValue'] : null;
        $this->container['skipDecisioning'] = isset($data['skipDecisioning']) ? $data['skipDecisioning'] : null;
        $this->container['approvalRoles'] = isset($data['approvalRoles']) ? $data['approvalRoles'] : null;
        $this->container['reviewRoles'] = isset($data['reviewRoles']) ? $data['reviewRoles'] : null;
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
    * Gets approvalType
    *  审批类型
    *
    * @return int|null
    */
    public function getApprovalType()
    {
        return $this->container['approvalType'];
    }

    /**
    * Sets approvalType
    *
    * @param int|null $approvalType 审批类型
    *
    * @return $this
    */
    public function setApprovalType($approvalType)
    {
        $this->container['approvalType'] = $approvalType;
        return $this;
    }

    /**
    * Gets ratioValue
    *  审批进度
    *
    * @return string|null
    */
    public function getRatioValue()
    {
        return $this->container['ratioValue'];
    }

    /**
    * Sets ratioValue
    *
    * @param string|null $ratioValue 审批进度
    *
    * @return $this
    */
    public function setRatioValue($ratioValue)
    {
        $this->container['ratioValue'] = $ratioValue;
        return $this;
    }

    /**
    * Gets skipDecisioning
    *  是否跳过决策
    *
    * @return bool|null
    */
    public function getSkipDecisioning()
    {
        return $this->container['skipDecisioning'];
    }

    /**
    * Sets skipDecisioning
    *
    * @param bool|null $skipDecisioning 是否跳过决策
    *
    * @return $this
    */
    public function setSkipDecisioning($skipDecisioning)
    {
        $this->container['skipDecisioning'] = $skipDecisioning;
        return $this;
    }

    /**
    * Gets approvalRoles
    *  决策角色
    *
    * @return string|null
    */
    public function getApprovalRoles()
    {
        return $this->container['approvalRoles'];
    }

    /**
    * Sets approvalRoles
    *
    * @param string|null $approvalRoles 决策角色
    *
    * @return $this
    */
    public function setApprovalRoles($approvalRoles)
    {
        $this->container['approvalRoles'] = $approvalRoles;
        return $this;
    }

    /**
    * Gets reviewRoles
    *  审批角色
    *
    * @return string|null
    */
    public function getReviewRoles()
    {
        return $this->container['reviewRoles'];
    }

    /**
    * Sets reviewRoles
    *
    * @param string|null $reviewRoles 审批角色
    *
    * @return $this
    */
    public function setReviewRoles($reviewRoles)
    {
        $this->container['reviewRoles'] = $reviewRoles;
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

