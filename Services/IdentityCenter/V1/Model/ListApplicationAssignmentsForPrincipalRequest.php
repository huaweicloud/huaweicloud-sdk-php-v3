<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApplicationAssignmentsForPrincipalRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApplicationAssignmentsForPrincipalRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * instanceId  IAM Identity Center实例的全局唯一标识符（ID）
    * principalId  身份主体的全局唯一标识符（ID）
    * principalType  principalType
    * limit  每个请求返回的最大结果数。
    * marker  分页标记
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xSecurityToken' => 'string',
            'instanceId' => 'string',
            'principalId' => 'string',
            'principalType' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * instanceId  IAM Identity Center实例的全局唯一标识符（ID）
    * principalId  身份主体的全局唯一标识符（ID）
    * principalType  principalType
    * limit  每个请求返回的最大结果数。
    * marker  分页标记
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xSecurityToken' => null,
        'instanceId' => null,
        'principalId' => null,
        'principalType' => null,
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
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * instanceId  IAM Identity Center实例的全局唯一标识符（ID）
    * principalId  身份主体的全局唯一标识符（ID）
    * principalType  principalType
    * limit  每个请求返回的最大结果数。
    * marker  分页标记
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xSecurityToken' => 'X-Security-Token',
            'instanceId' => 'instance_id',
            'principalId' => 'principal_id',
            'principalType' => 'principal_type',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * instanceId  IAM Identity Center实例的全局唯一标识符（ID）
    * principalId  身份主体的全局唯一标识符（ID）
    * principalType  principalType
    * limit  每个请求返回的最大结果数。
    * marker  分页标记
    *
    * @var string[]
    */
    protected static $setters = [
            'xSecurityToken' => 'setXSecurityToken',
            'instanceId' => 'setInstanceId',
            'principalId' => 'setPrincipalId',
            'principalType' => 'setPrincipalType',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * instanceId  IAM Identity Center实例的全局唯一标识符（ID）
    * principalId  身份主体的全局唯一标识符（ID）
    * principalType  principalType
    * limit  每个请求返回的最大结果数。
    * marker  分页标记
    *
    * @var string[]
    */
    protected static $getters = [
            'xSecurityToken' => 'getXSecurityToken',
            'instanceId' => 'getInstanceId',
            'principalId' => 'getPrincipalId',
            'principalType' => 'getPrincipalType',
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
    const PRINCIPAL_TYPE_USER = 'USER';
    const PRINCIPAL_TYPE_GROUP = 'GROUP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPrincipalTypeAllowableValues()
    {
        return [
            self::PRINCIPAL_TYPE_USER,
            self::PRINCIPAL_TYPE_GROUP,
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
        $this->container['xSecurityToken'] = isset($data['xSecurityToken']) ? $data['xSecurityToken'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['principalId'] = isset($data['principalId']) ? $data['principalId'] : null;
        $this->container['principalType'] = isset($data['principalType']) ? $data['principalType'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
        if ($this->container['principalId'] === null) {
            $invalidProperties[] = "'principalId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['principalId'])) {
                $invalidProperties[] = "invalid value for 'principalId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
        if ($this->container['principalType'] === null) {
            $invalidProperties[] = "'principalType' can't be null";
        }
            $allowedValues = $this->getPrincipalTypeAllowableValues();
                if (!is_null($this->container['principalType']) && !in_array($this->container['principalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'principalType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 24)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 24)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[a-fA-F0-9]{24}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[a-fA-F0-9]{24}/.";
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
    * Gets xSecurityToken
    *  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    *
    * @return string|null
    */
    public function getXSecurityToken()
    {
        return $this->container['xSecurityToken'];
    }

    /**
    * Sets xSecurityToken
    *
    * @param string|null $xSecurityToken 如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    *
    * @return $this
    */
    public function setXSecurityToken($xSecurityToken)
    {
        $this->container['xSecurityToken'] = $xSecurityToken;
        return $this;
    }

    /**
    * Gets instanceId
    *  IAM Identity Center实例的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId IAM Identity Center实例的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets principalId
    *  身份主体的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getPrincipalId()
    {
        return $this->container['principalId'];
    }

    /**
    * Sets principalId
    *
    * @param string $principalId 身份主体的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setPrincipalId($principalId)
    {
        $this->container['principalId'] = $principalId;
        return $this;
    }

    /**
    * Gets principalType
    *  principalType
    *
    * @return string
    */
    public function getPrincipalType()
    {
        return $this->container['principalType'];
    }

    /**
    * Sets principalType
    *
    * @param string $principalType principalType
    *
    * @return $this
    */
    public function setPrincipalType($principalType)
    {
        $this->container['principalType'] = $principalType;
        return $this;
    }

    /**
    * Gets limit
    *  每个请求返回的最大结果数。
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
    * @param int|null $limit 每个请求返回的最大结果数。
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
    *  分页标记
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
    * @param string|null $marker 分页标记
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

