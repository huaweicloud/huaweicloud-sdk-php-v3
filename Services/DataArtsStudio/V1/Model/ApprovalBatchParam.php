<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApprovalBatchParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApprovalBatchParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bizInfos  业务信息列表.
    * approverUserId  审批人user id
    * approverUserName  审批人user name
    * email  审批人邮箱
    * fastApproval  快速审批, 非正式场景，用于快速上手体验，仅在当前用户有审批权限时提供
    * scheduleTime  作业调度时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bizInfos' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizInfoVO[]',
            'approverUserId' => 'string',
            'approverUserName' => 'string',
            'email' => 'string',
            'fastApproval' => 'bool',
            'scheduleTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bizInfos  业务信息列表.
    * approverUserId  审批人user id
    * approverUserName  审批人user name
    * email  审批人邮箱
    * fastApproval  快速审批, 非正式场景，用于快速上手体验，仅在当前用户有审批权限时提供
    * scheduleTime  作业调度时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bizInfos' => null,
        'approverUserId' => null,
        'approverUserName' => null,
        'email' => null,
        'fastApproval' => null,
        'scheduleTime' => null
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
    * bizInfos  业务信息列表.
    * approverUserId  审批人user id
    * approverUserName  审批人user name
    * email  审批人邮箱
    * fastApproval  快速审批, 非正式场景，用于快速上手体验，仅在当前用户有审批权限时提供
    * scheduleTime  作业调度时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bizInfos' => 'biz_infos',
            'approverUserId' => 'approver_user_id',
            'approverUserName' => 'approver_user_name',
            'email' => 'email',
            'fastApproval' => 'fast_approval',
            'scheduleTime' => 'schedule_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bizInfos  业务信息列表.
    * approverUserId  审批人user id
    * approverUserName  审批人user name
    * email  审批人邮箱
    * fastApproval  快速审批, 非正式场景，用于快速上手体验，仅在当前用户有审批权限时提供
    * scheduleTime  作业调度时间
    *
    * @var string[]
    */
    protected static $setters = [
            'bizInfos' => 'setBizInfos',
            'approverUserId' => 'setApproverUserId',
            'approverUserName' => 'setApproverUserName',
            'email' => 'setEmail',
            'fastApproval' => 'setFastApproval',
            'scheduleTime' => 'setScheduleTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bizInfos  业务信息列表.
    * approverUserId  审批人user id
    * approverUserName  审批人user name
    * email  审批人邮箱
    * fastApproval  快速审批, 非正式场景，用于快速上手体验，仅在当前用户有审批权限时提供
    * scheduleTime  作业调度时间
    *
    * @var string[]
    */
    protected static $getters = [
            'bizInfos' => 'getBizInfos',
            'approverUserId' => 'getApproverUserId',
            'approverUserName' => 'getApproverUserName',
            'email' => 'getEmail',
            'fastApproval' => 'getFastApproval',
            'scheduleTime' => 'getScheduleTime'
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
        $this->container['bizInfos'] = isset($data['bizInfos']) ? $data['bizInfos'] : null;
        $this->container['approverUserId'] = isset($data['approverUserId']) ? $data['approverUserId'] : null;
        $this->container['approverUserName'] = isset($data['approverUserName']) ? $data['approverUserName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['fastApproval'] = isset($data['fastApproval']) ? $data['fastApproval'] : null;
        $this->container['scheduleTime'] = isset($data['scheduleTime']) ? $data['scheduleTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bizInfos'] === null) {
            $invalidProperties[] = "'bizInfos' can't be null";
        }
        if ($this->container['approverUserId'] === null) {
            $invalidProperties[] = "'approverUserId' can't be null";
        }
        if ($this->container['approverUserName'] === null) {
            $invalidProperties[] = "'approverUserName' can't be null";
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
    * Gets bizInfos
    *  业务信息列表.
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizInfoVO[]
    */
    public function getBizInfos()
    {
        return $this->container['bizInfos'];
    }

    /**
    * Sets bizInfos
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizInfoVO[] $bizInfos 业务信息列表.
    *
    * @return $this
    */
    public function setBizInfos($bizInfos)
    {
        $this->container['bizInfos'] = $bizInfos;
        return $this;
    }

    /**
    * Gets approverUserId
    *  审批人user id
    *
    * @return string
    */
    public function getApproverUserId()
    {
        return $this->container['approverUserId'];
    }

    /**
    * Sets approverUserId
    *
    * @param string $approverUserId 审批人user id
    *
    * @return $this
    */
    public function setApproverUserId($approverUserId)
    {
        $this->container['approverUserId'] = $approverUserId;
        return $this;
    }

    /**
    * Gets approverUserName
    *  审批人user name
    *
    * @return string
    */
    public function getApproverUserName()
    {
        return $this->container['approverUserName'];
    }

    /**
    * Sets approverUserName
    *
    * @param string $approverUserName 审批人user name
    *
    * @return $this
    */
    public function setApproverUserName($approverUserName)
    {
        $this->container['approverUserName'] = $approverUserName;
        return $this;
    }

    /**
    * Gets email
    *  审批人邮箱
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 审批人邮箱
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets fastApproval
    *  快速审批, 非正式场景，用于快速上手体验，仅在当前用户有审批权限时提供
    *
    * @return bool|null
    */
    public function getFastApproval()
    {
        return $this->container['fastApproval'];
    }

    /**
    * Sets fastApproval
    *
    * @param bool|null $fastApproval 快速审批, 非正式场景，用于快速上手体验，仅在当前用户有审批权限时提供
    *
    * @return $this
    */
    public function setFastApproval($fastApproval)
    {
        $this->container['fastApproval'] = $fastApproval;
        return $this;
    }

    /**
    * Gets scheduleTime
    *  作业调度时间
    *
    * @return string|null
    */
    public function getScheduleTime()
    {
        return $this->container['scheduleTime'];
    }

    /**
    * Sets scheduleTime
    *
    * @param string|null $scheduleTime 作业调度时间
    *
    * @return $this
    */
    public function setScheduleTime($scheduleTime)
    {
        $this->container['scheduleTime'] = $scheduleTime;
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

