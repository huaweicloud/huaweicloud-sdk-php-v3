<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOrganizationPolicyAssignmentDetailedStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOrganizationPolicyAssignmentDetailedStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organizationId  组织ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentId  组织合规规则ID
    * status  成员帐号规则部署状态，区分大小写。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organizationId' => 'string',
            'organizationPolicyAssignmentName' => 'string',
            'organizationPolicyAssignmentId' => 'string',
            'status' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organizationId  组织ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentId  组织合规规则ID
    * status  成员帐号规则部署状态，区分大小写。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organizationId' => null,
        'organizationPolicyAssignmentName' => null,
        'organizationPolicyAssignmentId' => null,
        'status' => null,
        'limit' => 'int32',
        'marker' => null
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
    * organizationId  组织ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentId  组织合规规则ID
    * status  成员帐号规则部署状态，区分大小写。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organizationId' => 'organization_id',
            'organizationPolicyAssignmentName' => 'organization_policy_assignment_name',
            'organizationPolicyAssignmentId' => 'organization_policy_assignment_id',
            'status' => 'status',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organizationId  组织ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentId  组织合规规则ID
    * status  成员帐号规则部署状态，区分大小写。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $setters = [
            'organizationId' => 'setOrganizationId',
            'organizationPolicyAssignmentName' => 'setOrganizationPolicyAssignmentName',
            'organizationPolicyAssignmentId' => 'setOrganizationPolicyAssignmentId',
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organizationId  组织ID。
    * organizationPolicyAssignmentName  组织合规规则名称。
    * organizationPolicyAssignmentId  组织合规规则ID
    * status  成员帐号规则部署状态，区分大小写。
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @var string[]
    */
    protected static $getters = [
            'organizationId' => 'getOrganizationId',
            'organizationPolicyAssignmentName' => 'getOrganizationPolicyAssignmentName',
            'organizationPolicyAssignmentId' => 'getOrganizationPolicyAssignmentId',
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
    const STATUS_CREATE_SUCCESSFUL = 'CREATE_SUCCESSFUL';
    const STATUS_CREATE_IN_PROGRESS = 'CREATE_IN_PROGRESS';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_DELETE_SUCCESSFUL = 'DELETE_SUCCESSFUL';
    const STATUS_DELETE_IN_PROGRESS = 'DELETE_IN_PROGRESS';
    const STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const STATUS_UPDATE_SUCCESSFUL = 'UPDATE_SUCCESSFUL';
    const STATUS_UPDATE_IN_PROGRESS = 'UPDATE_IN_PROGRESS';
    const STATUS_UPDATE_FAILED = 'UPDATE_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATE_SUCCESSFUL,
            self::STATUS_CREATE_IN_PROGRESS,
            self::STATUS_CREATE_FAILED,
            self::STATUS_DELETE_SUCCESSFUL,
            self::STATUS_DELETE_IN_PROGRESS,
            self::STATUS_DELETE_FAILED,
            self::STATUS_UPDATE_SUCCESSFUL,
            self::STATUS_UPDATE_IN_PROGRESS,
            self::STATUS_UPDATE_FAILED,
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['organizationPolicyAssignmentName'] = isset($data['organizationPolicyAssignmentName']) ? $data['organizationPolicyAssignmentName'] : null;
        $this->container['organizationPolicyAssignmentId'] = isset($data['organizationPolicyAssignmentId']) ? $data['organizationPolicyAssignmentId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['organizationId'] === null) {
            $invalidProperties[] = "'organizationId' can't be null";
        }
            if ((mb_strlen($this->container['organizationId']) > 34)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^o-[0-9a-z]{10,32}$/", $this->container['organizationId'])) {
                $invalidProperties[] = "invalid value for 'organizationId', must be conform to the pattern /^o-[0-9a-z]{10,32}$/.";
            }
            if (!is_null($this->container['organizationPolicyAssignmentName']) && (mb_strlen($this->container['organizationPolicyAssignmentName']) > 252)) {
                $invalidProperties[] = "invalid value for 'organizationPolicyAssignmentName', the character length must be smaller than or equal to 252.";
            }
            if (!is_null($this->container['organizationPolicyAssignmentName']) && !preg_match("/^(?!\\s)[\\u4e00-\\u9fa5\\u00C0-\\u00FFa-zA-Z0-9_\\- ]+(?<!\\s)$/", $this->container['organizationPolicyAssignmentName'])) {
                $invalidProperties[] = "invalid value for 'organizationPolicyAssignmentName', must be conform to the pattern /^(?!\\s)[\\u4e00-\\u9fa5\\u00C0-\\u00FFa-zA-Z0-9_\\- ]+(?<!\\s)$/.";
            }
            if (!is_null($this->container['organizationPolicyAssignmentId']) && (mb_strlen($this->container['organizationPolicyAssignmentId']) > 512)) {
                $invalidProperties[] = "invalid value for 'organizationPolicyAssignmentId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['organizationPolicyAssignmentId']) && !preg_match("/^[a-zA-Z\\d]+/", $this->container['organizationPolicyAssignmentId'])) {
                $invalidProperties[] = "invalid value for 'organizationPolicyAssignmentId', must be conform to the pattern /^[a-zA-Z\\d]+/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 20)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^[A-Z_]+/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^[A-Z_]+/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 400)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 4)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[A-Za-z0-9+\/=%\\-_]+/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[A-Za-z0-9+\/=%\\-_]+/.";
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
    * Gets organizationId
    *  组织ID。
    *
    * @return string
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string $organizationId 组织ID。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
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
    * Gets organizationPolicyAssignmentId
    *  组织合规规则ID
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
    * @param string|null $organizationPolicyAssignmentId 组织合规规则ID
    *
    * @return $this
    */
    public function setOrganizationPolicyAssignmentId($organizationPolicyAssignmentId)
    {
        $this->container['organizationPolicyAssignmentId'] = $organizationPolicyAssignmentId;
        return $this;
    }

    /**
    * Gets status
    *  成员帐号规则部署状态，区分大小写。
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
    * @param string|null $status 成员帐号规则部署状态，区分大小写。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  最大的返回数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 最大的返回数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

