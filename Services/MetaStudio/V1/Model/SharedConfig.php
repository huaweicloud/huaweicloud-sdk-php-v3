<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SharedConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SharedConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sharedType  共享类型。 * PRIVATE: 私有，仅本租户可访问。 * PUBLIC: 公开，所有租户可访问。当前仅提供系统资产可公开访问。 * SHARED：共享，指定租户可访问。拥有者指定租户可访问。
    * sharedState  共享状态。 * PUBLISHED: 发布。模板可用。 - DRAFT： 草稿。编辑态，仅拥有者可访问。 - REVIEW：审核态。不可编辑，仅拥有者/审核人员可查看。
    * expireTime  共享过期时间。空表示永久不过期。
    * allowedProjectIds  允许访问本资产的租户列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sharedType' => 'string',
            'sharedState' => 'string',
            'expireTime' => 'string',
            'allowedProjectIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sharedType  共享类型。 * PRIVATE: 私有，仅本租户可访问。 * PUBLIC: 公开，所有租户可访问。当前仅提供系统资产可公开访问。 * SHARED：共享，指定租户可访问。拥有者指定租户可访问。
    * sharedState  共享状态。 * PUBLISHED: 发布。模板可用。 - DRAFT： 草稿。编辑态，仅拥有者可访问。 - REVIEW：审核态。不可编辑，仅拥有者/审核人员可查看。
    * expireTime  共享过期时间。空表示永久不过期。
    * allowedProjectIds  允许访问本资产的租户列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sharedType' => null,
        'sharedState' => null,
        'expireTime' => null,
        'allowedProjectIds' => null
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
    * sharedType  共享类型。 * PRIVATE: 私有，仅本租户可访问。 * PUBLIC: 公开，所有租户可访问。当前仅提供系统资产可公开访问。 * SHARED：共享，指定租户可访问。拥有者指定租户可访问。
    * sharedState  共享状态。 * PUBLISHED: 发布。模板可用。 - DRAFT： 草稿。编辑态，仅拥有者可访问。 - REVIEW：审核态。不可编辑，仅拥有者/审核人员可查看。
    * expireTime  共享过期时间。空表示永久不过期。
    * allowedProjectIds  允许访问本资产的租户列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sharedType' => 'shared_type',
            'sharedState' => 'shared_state',
            'expireTime' => 'expire_time',
            'allowedProjectIds' => 'allowed_project_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sharedType  共享类型。 * PRIVATE: 私有，仅本租户可访问。 * PUBLIC: 公开，所有租户可访问。当前仅提供系统资产可公开访问。 * SHARED：共享，指定租户可访问。拥有者指定租户可访问。
    * sharedState  共享状态。 * PUBLISHED: 发布。模板可用。 - DRAFT： 草稿。编辑态，仅拥有者可访问。 - REVIEW：审核态。不可编辑，仅拥有者/审核人员可查看。
    * expireTime  共享过期时间。空表示永久不过期。
    * allowedProjectIds  允许访问本资产的租户列表
    *
    * @var string[]
    */
    protected static $setters = [
            'sharedType' => 'setSharedType',
            'sharedState' => 'setSharedState',
            'expireTime' => 'setExpireTime',
            'allowedProjectIds' => 'setAllowedProjectIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sharedType  共享类型。 * PRIVATE: 私有，仅本租户可访问。 * PUBLIC: 公开，所有租户可访问。当前仅提供系统资产可公开访问。 * SHARED：共享，指定租户可访问。拥有者指定租户可访问。
    * sharedState  共享状态。 * PUBLISHED: 发布。模板可用。 - DRAFT： 草稿。编辑态，仅拥有者可访问。 - REVIEW：审核态。不可编辑，仅拥有者/审核人员可查看。
    * expireTime  共享过期时间。空表示永久不过期。
    * allowedProjectIds  允许访问本资产的租户列表
    *
    * @var string[]
    */
    protected static $getters = [
            'sharedType' => 'getSharedType',
            'sharedState' => 'getSharedState',
            'expireTime' => 'getExpireTime',
            'allowedProjectIds' => 'getAllowedProjectIds'
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
    const SHARED_TYPE__PRIVATE = 'PRIVATE';
    const SHARED_TYPE__PUBLIC = 'PUBLIC';
    const SHARED_TYPE_SHARED = 'SHARED';
    const SHARED_STATE_PUBLISHED = 'PUBLISHED';
    const SHARED_STATE_DRAFT = 'DRAFT';
    const SHARED_STATE_REVIEW = 'REVIEW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSharedTypeAllowableValues()
    {
        return [
            self::SHARED_TYPE__PRIVATE,
            self::SHARED_TYPE__PUBLIC,
            self::SHARED_TYPE_SHARED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSharedStateAllowableValues()
    {
        return [
            self::SHARED_STATE_PUBLISHED,
            self::SHARED_STATE_DRAFT,
            self::SHARED_STATE_REVIEW,
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
        $this->container['sharedType'] = isset($data['sharedType']) ? $data['sharedType'] : null;
        $this->container['sharedState'] = isset($data['sharedState']) ? $data['sharedState'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['allowedProjectIds'] = isset($data['allowedProjectIds']) ? $data['allowedProjectIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSharedTypeAllowableValues();
                if (!is_null($this->container['sharedType']) && !in_array($this->container['sharedType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sharedType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sharedType']) && (mb_strlen($this->container['sharedType']) > 32)) {
                $invalidProperties[] = "invalid value for 'sharedType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sharedType']) && (mb_strlen($this->container['sharedType']) < 0)) {
                $invalidProperties[] = "invalid value for 'sharedType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSharedStateAllowableValues();
                if (!is_null($this->container['sharedState']) && !in_array($this->container['sharedState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sharedState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sharedState']) && (mb_strlen($this->container['sharedState']) > 32)) {
                $invalidProperties[] = "invalid value for 'sharedState', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sharedState']) && (mb_strlen($this->container['sharedState']) < 0)) {
                $invalidProperties[] = "invalid value for 'sharedState', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
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
    * Gets sharedType
    *  共享类型。 * PRIVATE: 私有，仅本租户可访问。 * PUBLIC: 公开，所有租户可访问。当前仅提供系统资产可公开访问。 * SHARED：共享，指定租户可访问。拥有者指定租户可访问。
    *
    * @return string|null
    */
    public function getSharedType()
    {
        return $this->container['sharedType'];
    }

    /**
    * Sets sharedType
    *
    * @param string|null $sharedType 共享类型。 * PRIVATE: 私有，仅本租户可访问。 * PUBLIC: 公开，所有租户可访问。当前仅提供系统资产可公开访问。 * SHARED：共享，指定租户可访问。拥有者指定租户可访问。
    *
    * @return $this
    */
    public function setSharedType($sharedType)
    {
        $this->container['sharedType'] = $sharedType;
        return $this;
    }

    /**
    * Gets sharedState
    *  共享状态。 * PUBLISHED: 发布。模板可用。 - DRAFT： 草稿。编辑态，仅拥有者可访问。 - REVIEW：审核态。不可编辑，仅拥有者/审核人员可查看。
    *
    * @return string|null
    */
    public function getSharedState()
    {
        return $this->container['sharedState'];
    }

    /**
    * Sets sharedState
    *
    * @param string|null $sharedState 共享状态。 * PUBLISHED: 发布。模板可用。 - DRAFT： 草稿。编辑态，仅拥有者可访问。 - REVIEW：审核态。不可编辑，仅拥有者/审核人员可查看。
    *
    * @return $this
    */
    public function setSharedState($sharedState)
    {
        $this->container['sharedState'] = $sharedState;
        return $this;
    }

    /**
    * Gets expireTime
    *  共享过期时间。空表示永久不过期。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 共享过期时间。空表示永久不过期。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets allowedProjectIds
    *  允许访问本资产的租户列表
    *
    * @return string[]|null
    */
    public function getAllowedProjectIds()
    {
        return $this->container['allowedProjectIds'];
    }

    /**
    * Sets allowedProjectIds
    *
    * @param string[]|null $allowedProjectIds 允许访问本资产的租户列表
    *
    * @return $this
    */
    public function setAllowedProjectIds($allowedProjectIds)
    {
        $this->container['allowedProjectIds'] = $allowedProjectIds;
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

