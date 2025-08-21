<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApprovalActionTypeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApprovalActionTypeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionType  **参数解释：** 审核/检视操作动作 - approve，审核通过 - reject，审核拒绝 - complete，检视通过 - reset，重置审核/检视结果
    * approverComment  **参数解释：** 审核备注 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionType' => 'string',
            'approverComment' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionType  **参数解释：** 审核/检视操作动作 - approve，审核通过 - reject，审核拒绝 - complete，检视通过 - reset，重置审核/检视结果
    * approverComment  **参数解释：** 审核备注 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionType' => null,
        'approverComment' => null
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
    * actionType  **参数解释：** 审核/检视操作动作 - approve，审核通过 - reject，审核拒绝 - complete，检视通过 - reset，重置审核/检视结果
    * approverComment  **参数解释：** 审核备注 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionType' => 'action_type',
            'approverComment' => 'approver_comment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionType  **参数解释：** 审核/检视操作动作 - approve，审核通过 - reject，审核拒绝 - complete，检视通过 - reset，重置审核/检视结果
    * approverComment  **参数解释：** 审核备注 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'actionType' => 'setActionType',
            'approverComment' => 'setApproverComment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionType  **参数解释：** 审核/检视操作动作 - approve，审核通过 - reject，审核拒绝 - complete，检视通过 - reset，重置审核/检视结果
    * approverComment  **参数解释：** 审核备注 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'actionType' => 'getActionType',
            'approverComment' => 'getApproverComment'
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
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['approverComment'] = isset($data['approverComment']) ? $data['approverComment'] : null;
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
    * Gets actionType
    *  **参数解释：** 审核/检视操作动作 - approve，审核通过 - reject，审核拒绝 - complete，检视通过 - reset，重置审核/检视结果
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType **参数解释：** 审核/检视操作动作 - approve，审核通过 - reject，审核拒绝 - complete，检视通过 - reset，重置审核/检视结果
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets approverComment
    *  **参数解释：** 审核备注 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getApproverComment()
    {
        return $this->container['approverComment'];
    }

    /**
    * Sets approverComment
    *
    * @param string|null $approverComment **参数解释：** 审核备注 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setApproverComment($approverComment)
    {
        $this->container['approverComment'] = $approverComment;
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

