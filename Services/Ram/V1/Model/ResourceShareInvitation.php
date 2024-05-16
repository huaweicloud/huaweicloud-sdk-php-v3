<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceShareInvitation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceShareInvitation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * receiverAccountId  接收资源共享邀请的账号ID。
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * resourceShareInvitationId  资源共享邀请的ID。
    * senderAccountId  发送资源共享邀请的账号ID。
    * status  资源共享邀请的当前状态。
    * createdAt  创建邀请的时间。
    * updatedAt  最后一次更新邀请的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'receiverAccountId' => 'string',
            'resourceShareId' => 'string',
            'resourceShareName' => 'string',
            'resourceShareInvitationId' => 'string',
            'senderAccountId' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * receiverAccountId  接收资源共享邀请的账号ID。
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * resourceShareInvitationId  资源共享邀请的ID。
    * senderAccountId  发送资源共享邀请的账号ID。
    * status  资源共享邀请的当前状态。
    * createdAt  创建邀请的时间。
    * updatedAt  最后一次更新邀请的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'receiverAccountId' => null,
        'resourceShareId' => null,
        'resourceShareName' => null,
        'resourceShareInvitationId' => null,
        'senderAccountId' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * receiverAccountId  接收资源共享邀请的账号ID。
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * resourceShareInvitationId  资源共享邀请的ID。
    * senderAccountId  发送资源共享邀请的账号ID。
    * status  资源共享邀请的当前状态。
    * createdAt  创建邀请的时间。
    * updatedAt  最后一次更新邀请的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'receiverAccountId' => 'receiver_account_id',
            'resourceShareId' => 'resource_share_id',
            'resourceShareName' => 'resource_share_name',
            'resourceShareInvitationId' => 'resource_share_invitation_id',
            'senderAccountId' => 'sender_account_id',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * receiverAccountId  接收资源共享邀请的账号ID。
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * resourceShareInvitationId  资源共享邀请的ID。
    * senderAccountId  发送资源共享邀请的账号ID。
    * status  资源共享邀请的当前状态。
    * createdAt  创建邀请的时间。
    * updatedAt  最后一次更新邀请的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'receiverAccountId' => 'setReceiverAccountId',
            'resourceShareId' => 'setResourceShareId',
            'resourceShareName' => 'setResourceShareName',
            'resourceShareInvitationId' => 'setResourceShareInvitationId',
            'senderAccountId' => 'setSenderAccountId',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * receiverAccountId  接收资源共享邀请的账号ID。
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * resourceShareInvitationId  资源共享邀请的ID。
    * senderAccountId  发送资源共享邀请的账号ID。
    * status  资源共享邀请的当前状态。
    * createdAt  创建邀请的时间。
    * updatedAt  最后一次更新邀请的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'receiverAccountId' => 'getReceiverAccountId',
            'resourceShareId' => 'getResourceShareId',
            'resourceShareName' => 'getResourceShareName',
            'resourceShareInvitationId' => 'getResourceShareInvitationId',
            'senderAccountId' => 'getSenderAccountId',
            'status' => 'getStatus',
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
        $this->container['receiverAccountId'] = isset($data['receiverAccountId']) ? $data['receiverAccountId'] : null;
        $this->container['resourceShareId'] = isset($data['resourceShareId']) ? $data['resourceShareId'] : null;
        $this->container['resourceShareName'] = isset($data['resourceShareName']) ? $data['resourceShareName'] : null;
        $this->container['resourceShareInvitationId'] = isset($data['resourceShareInvitationId']) ? $data['resourceShareInvitationId'] : null;
        $this->container['senderAccountId'] = isset($data['senderAccountId']) ? $data['senderAccountId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
            if (!is_null($this->container['receiverAccountId']) && (mb_strlen($this->container['receiverAccountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'receiverAccountId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['receiverAccountId']) && (mb_strlen($this->container['receiverAccountId']) < 0)) {
                $invalidProperties[] = "invalid value for 'receiverAccountId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceShareId']) && (mb_strlen($this->container['resourceShareId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceShareId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceShareId']) && (mb_strlen($this->container['resourceShareId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceShareId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceShareName']) && (mb_strlen($this->container['resourceShareName']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceShareName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceShareName']) && (mb_strlen($this->container['resourceShareName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceShareName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceShareInvitationId']) && (mb_strlen($this->container['resourceShareInvitationId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceShareInvitationId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceShareInvitationId']) && (mb_strlen($this->container['resourceShareInvitationId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceShareInvitationId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['senderAccountId']) && (mb_strlen($this->container['senderAccountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'senderAccountId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['senderAccountId']) && (mb_strlen($this->container['senderAccountId']) < 0)) {
                $invalidProperties[] = "invalid value for 'senderAccountId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    * Gets receiverAccountId
    *  接收资源共享邀请的账号ID。
    *
    * @return string|null
    */
    public function getReceiverAccountId()
    {
        return $this->container['receiverAccountId'];
    }

    /**
    * Sets receiverAccountId
    *
    * @param string|null $receiverAccountId 接收资源共享邀请的账号ID。
    *
    * @return $this
    */
    public function setReceiverAccountId($receiverAccountId)
    {
        $this->container['receiverAccountId'] = $receiverAccountId;
        return $this;
    }

    /**
    * Gets resourceShareId
    *  资源共享实例的ID。
    *
    * @return string|null
    */
    public function getResourceShareId()
    {
        return $this->container['resourceShareId'];
    }

    /**
    * Sets resourceShareId
    *
    * @param string|null $resourceShareId 资源共享实例的ID。
    *
    * @return $this
    */
    public function setResourceShareId($resourceShareId)
    {
        $this->container['resourceShareId'] = $resourceShareId;
        return $this;
    }

    /**
    * Gets resourceShareName
    *  资源共享实例的名称。
    *
    * @return string|null
    */
    public function getResourceShareName()
    {
        return $this->container['resourceShareName'];
    }

    /**
    * Sets resourceShareName
    *
    * @param string|null $resourceShareName 资源共享实例的名称。
    *
    * @return $this
    */
    public function setResourceShareName($resourceShareName)
    {
        $this->container['resourceShareName'] = $resourceShareName;
        return $this;
    }

    /**
    * Gets resourceShareInvitationId
    *  资源共享邀请的ID。
    *
    * @return string|null
    */
    public function getResourceShareInvitationId()
    {
        return $this->container['resourceShareInvitationId'];
    }

    /**
    * Sets resourceShareInvitationId
    *
    * @param string|null $resourceShareInvitationId 资源共享邀请的ID。
    *
    * @return $this
    */
    public function setResourceShareInvitationId($resourceShareInvitationId)
    {
        $this->container['resourceShareInvitationId'] = $resourceShareInvitationId;
        return $this;
    }

    /**
    * Gets senderAccountId
    *  发送资源共享邀请的账号ID。
    *
    * @return string|null
    */
    public function getSenderAccountId()
    {
        return $this->container['senderAccountId'];
    }

    /**
    * Sets senderAccountId
    *
    * @param string|null $senderAccountId 发送资源共享邀请的账号ID。
    *
    * @return $this
    */
    public function setSenderAccountId($senderAccountId)
    {
        $this->container['senderAccountId'] = $senderAccountId;
        return $this;
    }

    /**
    * Gets status
    *  资源共享邀请的当前状态。
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
    * @param string|null $status 资源共享邀请的当前状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建邀请的时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建邀请的时间。
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
    *  最后一次更新邀请的时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 最后一次更新邀请的时间。
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

