<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationPolicyAssignmentDetailedStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationPolicyAssignmentDetailedStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  帐号ID。
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * memberAccountPolicyAssignmentStatus  成员帐号中配置规则的部署状态。
    * errorCode  当创建或更新合规规则失败时错误码。
    * errorMessage  当创建或更新合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'policyAssignmentId' => 'string',
            'policyAssignmentName' => 'string',
            'memberAccountPolicyAssignmentStatus' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  帐号ID。
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * memberAccountPolicyAssignmentStatus  成员帐号中配置规则的部署状态。
    * errorCode  当创建或更新合规规则失败时错误码。
    * errorMessage  当创建或更新合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'policyAssignmentId' => null,
        'policyAssignmentName' => null,
        'memberAccountPolicyAssignmentStatus' => null,
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
    * domainId  帐号ID。
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * memberAccountPolicyAssignmentStatus  成员帐号中配置规则的部署状态。
    * errorCode  当创建或更新合规规则失败时错误码。
    * errorMessage  当创建或更新合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'policyAssignmentId' => 'policy_assignment_id',
            'policyAssignmentName' => 'policy_assignment_name',
            'memberAccountPolicyAssignmentStatus' => 'member_account_policy_assignment_status',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  帐号ID。
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * memberAccountPolicyAssignmentStatus  成员帐号中配置规则的部署状态。
    * errorCode  当创建或更新合规规则失败时错误码。
    * errorMessage  当创建或更新合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'policyAssignmentId' => 'setPolicyAssignmentId',
            'policyAssignmentName' => 'setPolicyAssignmentName',
            'memberAccountPolicyAssignmentStatus' => 'setMemberAccountPolicyAssignmentStatus',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  帐号ID。
    * policyAssignmentId  合规规则ID。
    * policyAssignmentName  合规规则名称。
    * memberAccountPolicyAssignmentStatus  成员帐号中配置规则的部署状态。
    * errorCode  当创建或更新合规规则失败时错误码。
    * errorMessage  当创建或更新合规规则失败时错误信息。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'policyAssignmentId' => 'getPolicyAssignmentId',
            'policyAssignmentName' => 'getPolicyAssignmentName',
            'memberAccountPolicyAssignmentStatus' => 'getMemberAccountPolicyAssignmentStatus',
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['policyAssignmentId'] = isset($data['policyAssignmentId']) ? $data['policyAssignmentId'] : null;
        $this->container['policyAssignmentName'] = isset($data['policyAssignmentName']) ? $data['policyAssignmentName'] : null;
        $this->container['memberAccountPolicyAssignmentStatus'] = isset($data['memberAccountPolicyAssignmentStatus']) ? $data['memberAccountPolicyAssignmentStatus'] : null;
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
    * Gets domainId
    *  帐号ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 帐号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets policyAssignmentId
    *  合规规则ID。
    *
    * @return string|null
    */
    public function getPolicyAssignmentId()
    {
        return $this->container['policyAssignmentId'];
    }

    /**
    * Sets policyAssignmentId
    *
    * @param string|null $policyAssignmentId 合规规则ID。
    *
    * @return $this
    */
    public function setPolicyAssignmentId($policyAssignmentId)
    {
        $this->container['policyAssignmentId'] = $policyAssignmentId;
        return $this;
    }

    /**
    * Gets policyAssignmentName
    *  合规规则名称。
    *
    * @return string|null
    */
    public function getPolicyAssignmentName()
    {
        return $this->container['policyAssignmentName'];
    }

    /**
    * Sets policyAssignmentName
    *
    * @param string|null $policyAssignmentName 合规规则名称。
    *
    * @return $this
    */
    public function setPolicyAssignmentName($policyAssignmentName)
    {
        $this->container['policyAssignmentName'] = $policyAssignmentName;
        return $this;
    }

    /**
    * Gets memberAccountPolicyAssignmentStatus
    *  成员帐号中配置规则的部署状态。
    *
    * @return string|null
    */
    public function getMemberAccountPolicyAssignmentStatus()
    {
        return $this->container['memberAccountPolicyAssignmentStatus'];
    }

    /**
    * Sets memberAccountPolicyAssignmentStatus
    *
    * @param string|null $memberAccountPolicyAssignmentStatus 成员帐号中配置规则的部署状态。
    *
    * @return $this
    */
    public function setMemberAccountPolicyAssignmentStatus($memberAccountPolicyAssignmentStatus)
    {
        $this->container['memberAccountPolicyAssignmentStatus'] = $memberAccountPolicyAssignmentStatus;
        return $this;
    }

    /**
    * Gets errorCode
    *  当创建或更新合规规则失败时错误码。
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
    * @param string|null $errorCode 当创建或更新合规规则失败时错误码。
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
    *  当创建或更新合规规则失败时错误信息。
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
    * @param string|null $errorMessage 当创建或更新合规规则失败时错误信息。
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

