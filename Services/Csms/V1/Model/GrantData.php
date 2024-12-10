<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GrantData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GrantData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  授权id，授权给个人时存在
    * resourceId  资源id
    * type  授权类型（SECRET，GROUP）
    * granteeUser  授权目标用户id
    * createTime  创建时间
    * updateTime  更新时间
    * validityTime  有效期
    * state  状态
    * signature  签名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'resourceId' => 'string',
            'type' => 'string',
            'granteeUser' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'validityTime' => 'int',
            'state' => 'int',
            'signature' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  授权id，授权给个人时存在
    * resourceId  资源id
    * type  授权类型（SECRET，GROUP）
    * granteeUser  授权目标用户id
    * createTime  创建时间
    * updateTime  更新时间
    * validityTime  有效期
    * state  状态
    * signature  签名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'resourceId' => null,
        'type' => null,
        'granteeUser' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'validityTime' => 'int64',
        'state' => 'int32',
        'signature' => null
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
    * uuid  授权id，授权给个人时存在
    * resourceId  资源id
    * type  授权类型（SECRET，GROUP）
    * granteeUser  授权目标用户id
    * createTime  创建时间
    * updateTime  更新时间
    * validityTime  有效期
    * state  状态
    * signature  签名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'resourceId' => 'resourceId',
            'type' => 'type',
            'granteeUser' => 'granteeUser',
            'createTime' => 'createTime',
            'updateTime' => 'updateTime',
            'validityTime' => 'validityTime',
            'state' => 'state',
            'signature' => 'signature'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  授权id，授权给个人时存在
    * resourceId  资源id
    * type  授权类型（SECRET，GROUP）
    * granteeUser  授权目标用户id
    * createTime  创建时间
    * updateTime  更新时间
    * validityTime  有效期
    * state  状态
    * signature  签名
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'resourceId' => 'setResourceId',
            'type' => 'setType',
            'granteeUser' => 'setGranteeUser',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'validityTime' => 'setValidityTime',
            'state' => 'setState',
            'signature' => 'setSignature'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  授权id，授权给个人时存在
    * resourceId  资源id
    * type  授权类型（SECRET，GROUP）
    * granteeUser  授权目标用户id
    * createTime  创建时间
    * updateTime  更新时间
    * validityTime  有效期
    * state  状态
    * signature  签名
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'resourceId' => 'getResourceId',
            'type' => 'getType',
            'granteeUser' => 'getGranteeUser',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'validityTime' => 'getValidityTime',
            'state' => 'getState',
            'signature' => 'getSignature'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['granteeUser'] = isset($data['granteeUser']) ? $data['granteeUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['validityTime'] = isset($data['validityTime']) ? $data['validityTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
            if ((mb_strlen($this->container['uuid']) > 64)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['granteeUser'] === null) {
            $invalidProperties[] = "'granteeUser' can't be null";
        }
            if (!is_null($this->container['state']) && ($this->container['state'] > 16)) {
                $invalidProperties[] = "invalid value for 'state', must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['state']) && ($this->container['state'] < 0)) {
                $invalidProperties[] = "invalid value for 'state', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) > 512)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) < 0)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be bigger than or equal to 0.";
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
    * Gets uuid
    *  授权id，授权给个人时存在
    *
    * @return string
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string $uuid 授权id，授权给个人时存在
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets type
    *  授权类型（SECRET，GROUP）
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 授权类型（SECRET，GROUP）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets granteeUser
    *  授权目标用户id
    *
    * @return string
    */
    public function getGranteeUser()
    {
        return $this->container['granteeUser'];
    }

    /**
    * Sets granteeUser
    *
    * @param string $granteeUser 授权目标用户id
    *
    * @return $this
    */
    public function setGranteeUser($granteeUser)
    {
        $this->container['granteeUser'] = $granteeUser;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets validityTime
    *  有效期
    *
    * @return int|null
    */
    public function getValidityTime()
    {
        return $this->container['validityTime'];
    }

    /**
    * Sets validityTime
    *
    * @param int|null $validityTime 有效期
    *
    * @return $this
    */
    public function setValidityTime($validityTime)
    {
        $this->container['validityTime'] = $validityTime;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return int|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets signature
    *  签名
    *
    * @return string|null
    */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
    * Sets signature
    *
    * @param string|null $signature 签名
    *
    * @return $this
    */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;
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

