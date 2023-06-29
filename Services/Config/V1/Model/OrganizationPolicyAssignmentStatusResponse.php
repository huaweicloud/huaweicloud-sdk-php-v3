<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationPolicyAssignmentStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationPolicyAssignmentStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentStatus  组织合规规则部署状态。
    * errorCode  当创建或更新组织合规规则失败时错误码。
    * errorMessage  当创建或更新组织合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organizationPolicyAssignmentId' => 'string',
            'organizationPolicyAssignmentName' => 'string',
            'organizationPolicyAssignmentStatus' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentStatus  组织合规规则部署状态。
    * errorCode  当创建或更新组织合规规则失败时错误码。
    * errorMessage  当创建或更新组织合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organizationPolicyAssignmentId' => null,
        'organizationPolicyAssignmentName' => null,
        'organizationPolicyAssignmentStatus' => null,
        'errorCode' => null,
        'errorMessage' => null,
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
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentStatus  组织合规规则部署状态。
    * errorCode  当创建或更新组织合规规则失败时错误码。
    * errorMessage  当创建或更新组织合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organizationPolicyAssignmentId' => 'organization_policy_assignment_id',
            'organizationPolicyAssignmentName' => 'organization_policy_assignment_name',
            'organizationPolicyAssignmentStatus' => 'organization_policy_assignment_status',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentStatus  组织合规规则部署状态。
    * errorCode  当创建或更新组织合规规则失败时错误码。
    * errorMessage  当创建或更新组织合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'organizationPolicyAssignmentId' => 'setOrganizationPolicyAssignmentId',
            'organizationPolicyAssignmentName' => 'setOrganizationPolicyAssignmentName',
            'organizationPolicyAssignmentStatus' => 'setOrganizationPolicyAssignmentStatus',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organizationPolicyAssignmentId  组织合规规则ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentStatus  组织合规规则部署状态。
    * errorCode  当创建或更新组织合规规则失败时错误码。
    * errorMessage  当创建或更新组织合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'organizationPolicyAssignmentId' => 'getOrganizationPolicyAssignmentId',
            'organizationPolicyAssignmentName' => 'getOrganizationPolicyAssignmentName',
            'organizationPolicyAssignmentStatus' => 'getOrganizationPolicyAssignmentStatus',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage',
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
        $this->container['organizationPolicyAssignmentId'] = isset($data['organizationPolicyAssignmentId']) ? $data['organizationPolicyAssignmentId'] : null;
        $this->container['organizationPolicyAssignmentName'] = isset($data['organizationPolicyAssignmentName']) ? $data['organizationPolicyAssignmentName'] : null;
        $this->container['organizationPolicyAssignmentStatus'] = isset($data['organizationPolicyAssignmentStatus']) ? $data['organizationPolicyAssignmentStatus'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets organizationPolicyAssignmentId
    *  组织合规规则ID。
    *
    * @return string|null
    */
    public function getOrganizationPolicyAssignmentId()
    {
        return $this->container['organizationPolicyAssignmentId'];
    }

    /**
    * Sets organizationPolicyAssignmentId
    *
    * @param string|null $organizationPolicyAssignmentId 组织合规规则ID。
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentId($organizationPolicyAssignmentId)
    {
        $this->container['organizationPolicyAssignmentId'] = $organizationPolicyAssignmentId;
        return $this;
    }

    /**
    * Gets organizationPolicyAssignmentName
    *  组织合规规则名称。
    *
    * @return string|null
    */
    public function getOrganizationPolicyAssignmentName()
    {
        return $this->container['organizationPolicyAssignmentName'];
    }

    /**
    * Sets organizationPolicyAssignmentName
    *
    * @param string|null $organizationPolicyAssignmentName 组织合规规则名称。
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentName($organizationPolicyAssignmentName)
    {
        $this->container['organizationPolicyAssignmentName'] = $organizationPolicyAssignmentName;
        return $this;
    }

    /**
    * Gets organizationPolicyAssignmentStatus
    *  组织合规规则部署状态。
    *
    * @return string|null
    */
    public function getOrganizationPolicyAssignmentStatus()
    {
        return $this->container['organizationPolicyAssignmentStatus'];
    }

    /**
    * Sets organizationPolicyAssignmentStatus
    *
    * @param string|null $organizationPolicyAssignmentStatus 组织合规规则部署状态。
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentStatus($organizationPolicyAssignmentStatus)
    {
        $this->container['organizationPolicyAssignmentStatus'] = $organizationPolicyAssignmentStatus;
        return $this;
    }

    /**
    * Gets errorCode
    *  当创建或更新组织合规规则失败时错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 当创建或更新组织合规规则失败时错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  当创建或更新组织合规规则失败时错误信息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 当创建或更新组织合规规则失败时错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
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
    * @param string|null $createdAt 创建时间。
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
    *  更新时间。
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
    * @param string|null $updatedAt 更新时间。
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

