<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MallParaDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MallParaDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authType  认证类型。
    * visibility  API可见性，WORKSPACE：工作空间可见，PROJECT： 项目可见，DOMAIN：租户可见，SPECIFIC_PROJECT：指定项目可见。
    * marketSortType  排序参数。
    * ascOrDesc  升序、降序。
    * offset  查询起始坐标。
    * limit  查询条数。
    * isOwner  是否显示拥有者。
    * isAuthorized  是否显示已被授权。
    * isUpdateRecently  是否显示最近更新。
    * isReleaseRecently  是否显示最近发布。
    * isHotRecently  是否显示热销状态。
    * successAndFailureRate  是否显示7天内成功率与失败率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authType' => 'string',
            'visibility' => 'string',
            'marketSortType' => 'string',
            'ascOrDesc' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'isOwner' => 'bool',
            'isAuthorized' => 'bool',
            'isUpdateRecently' => 'bool',
            'isReleaseRecently' => 'bool',
            'isHotRecently' => 'bool',
            'successAndFailureRate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authType  认证类型。
    * visibility  API可见性，WORKSPACE：工作空间可见，PROJECT： 项目可见，DOMAIN：租户可见，SPECIFIC_PROJECT：指定项目可见。
    * marketSortType  排序参数。
    * ascOrDesc  升序、降序。
    * offset  查询起始坐标。
    * limit  查询条数。
    * isOwner  是否显示拥有者。
    * isAuthorized  是否显示已被授权。
    * isUpdateRecently  是否显示最近更新。
    * isReleaseRecently  是否显示最近发布。
    * isHotRecently  是否显示热销状态。
    * successAndFailureRate  是否显示7天内成功率与失败率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authType' => null,
        'visibility' => null,
        'marketSortType' => null,
        'ascOrDesc' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'isOwner' => null,
        'isAuthorized' => null,
        'isUpdateRecently' => null,
        'isReleaseRecently' => null,
        'isHotRecently' => null,
        'successAndFailureRate' => null
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
    * authType  认证类型。
    * visibility  API可见性，WORKSPACE：工作空间可见，PROJECT： 项目可见，DOMAIN：租户可见，SPECIFIC_PROJECT：指定项目可见。
    * marketSortType  排序参数。
    * ascOrDesc  升序、降序。
    * offset  查询起始坐标。
    * limit  查询条数。
    * isOwner  是否显示拥有者。
    * isAuthorized  是否显示已被授权。
    * isUpdateRecently  是否显示最近更新。
    * isReleaseRecently  是否显示最近发布。
    * isHotRecently  是否显示热销状态。
    * successAndFailureRate  是否显示7天内成功率与失败率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authType' => 'auth_type',
            'visibility' => 'visibility',
            'marketSortType' => 'market_sort_type',
            'ascOrDesc' => 'asc_or_desc',
            'offset' => 'offset',
            'limit' => 'limit',
            'isOwner' => 'is_owner',
            'isAuthorized' => 'is_authorized',
            'isUpdateRecently' => 'is_update_recently',
            'isReleaseRecently' => 'is_release_recently',
            'isHotRecently' => 'is_hot_recently',
            'successAndFailureRate' => 'success_and_failure_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authType  认证类型。
    * visibility  API可见性，WORKSPACE：工作空间可见，PROJECT： 项目可见，DOMAIN：租户可见，SPECIFIC_PROJECT：指定项目可见。
    * marketSortType  排序参数。
    * ascOrDesc  升序、降序。
    * offset  查询起始坐标。
    * limit  查询条数。
    * isOwner  是否显示拥有者。
    * isAuthorized  是否显示已被授权。
    * isUpdateRecently  是否显示最近更新。
    * isReleaseRecently  是否显示最近发布。
    * isHotRecently  是否显示热销状态。
    * successAndFailureRate  是否显示7天内成功率与失败率。
    *
    * @var string[]
    */
    protected static $setters = [
            'authType' => 'setAuthType',
            'visibility' => 'setVisibility',
            'marketSortType' => 'setMarketSortType',
            'ascOrDesc' => 'setAscOrDesc',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'isOwner' => 'setIsOwner',
            'isAuthorized' => 'setIsAuthorized',
            'isUpdateRecently' => 'setIsUpdateRecently',
            'isReleaseRecently' => 'setIsReleaseRecently',
            'isHotRecently' => 'setIsHotRecently',
            'successAndFailureRate' => 'setSuccessAndFailureRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authType  认证类型。
    * visibility  API可见性，WORKSPACE：工作空间可见，PROJECT： 项目可见，DOMAIN：租户可见，SPECIFIC_PROJECT：指定项目可见。
    * marketSortType  排序参数。
    * ascOrDesc  升序、降序。
    * offset  查询起始坐标。
    * limit  查询条数。
    * isOwner  是否显示拥有者。
    * isAuthorized  是否显示已被授权。
    * isUpdateRecently  是否显示最近更新。
    * isReleaseRecently  是否显示最近发布。
    * isHotRecently  是否显示热销状态。
    * successAndFailureRate  是否显示7天内成功率与失败率。
    *
    * @var string[]
    */
    protected static $getters = [
            'authType' => 'getAuthType',
            'visibility' => 'getVisibility',
            'marketSortType' => 'getMarketSortType',
            'ascOrDesc' => 'getAscOrDesc',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'isOwner' => 'getIsOwner',
            'isAuthorized' => 'getIsAuthorized',
            'isUpdateRecently' => 'getIsUpdateRecently',
            'isReleaseRecently' => 'getIsReleaseRecently',
            'isHotRecently' => 'getIsHotRecently',
            'successAndFailureRate' => 'getSuccessAndFailureRate'
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
    const AUTH_TYPE_APP = 'APP';
    const AUTH_TYPE_IAM = 'IAM';
    const AUTH_TYPE_NONE = 'NONE';
    const VISIBILITY_WORKSPACE = 'WORKSPACE';
    const VISIBILITY_PROJECT = 'PROJECT';
    const VISIBILITY_DOMAIN = 'DOMAIN';
    const VISIBILITY_SPECIFIC_PROJECT = 'SPECIFIC_PROJECT';
    const MARKET_SORT_TYPE_UPDATE_TIME = 'updateTime';
    const MARKET_SORT_TYPE_CREATE_TIME = 'createTime';
    const ASC_OR_DESC_ASC = 'asc';
    const ASC_OR_DESC_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_APP,
            self::AUTH_TYPE_IAM,
            self::AUTH_TYPE_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY_WORKSPACE,
            self::VISIBILITY_PROJECT,
            self::VISIBILITY_DOMAIN,
            self::VISIBILITY_SPECIFIC_PROJECT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMarketSortTypeAllowableValues()
    {
        return [
            self::MARKET_SORT_TYPE_UPDATE_TIME,
            self::MARKET_SORT_TYPE_CREATE_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAscOrDescAllowableValues()
    {
        return [
            self::ASC_OR_DESC_ASC,
            self::ASC_OR_DESC_DESC,
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
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['marketSortType'] = isset($data['marketSortType']) ? $data['marketSortType'] : null;
        $this->container['ascOrDesc'] = isset($data['ascOrDesc']) ? $data['ascOrDesc'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['isOwner'] = isset($data['isOwner']) ? $data['isOwner'] : null;
        $this->container['isAuthorized'] = isset($data['isAuthorized']) ? $data['isAuthorized'] : null;
        $this->container['isUpdateRecently'] = isset($data['isUpdateRecently']) ? $data['isUpdateRecently'] : null;
        $this->container['isReleaseRecently'] = isset($data['isReleaseRecently']) ? $data['isReleaseRecently'] : null;
        $this->container['isHotRecently'] = isset($data['isHotRecently']) ? $data['isHotRecently'] : null;
        $this->container['successAndFailureRate'] = isset($data['successAndFailureRate']) ? $data['successAndFailureRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVisibilityAllowableValues();
                if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMarketSortTypeAllowableValues();
                if (!is_null($this->container['marketSortType']) && !in_array($this->container['marketSortType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'marketSortType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAscOrDescAllowableValues();
                if (!is_null($this->container['ascOrDesc']) && !in_array($this->container['ascOrDesc'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ascOrDesc', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets authType
    *  认证类型。
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 认证类型。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets visibility
    *  API可见性，WORKSPACE：工作空间可见，PROJECT： 项目可见，DOMAIN：租户可见，SPECIFIC_PROJECT：指定项目可见。
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility API可见性，WORKSPACE：工作空间可见，PROJECT： 项目可见，DOMAIN：租户可见，SPECIFIC_PROJECT：指定项目可见。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets marketSortType
    *  排序参数。
    *
    * @return string|null
    */
    public function getMarketSortType()
    {
        return $this->container['marketSortType'];
    }

    /**
    * Sets marketSortType
    *
    * @param string|null $marketSortType 排序参数。
    *
    * @return $this
    */
    public function setMarketSortType($marketSortType)
    {
        $this->container['marketSortType'] = $marketSortType;
        return $this;
    }

    /**
    * Gets ascOrDesc
    *  升序、降序。
    *
    * @return string|null
    */
    public function getAscOrDesc()
    {
        return $this->container['ascOrDesc'];
    }

    /**
    * Sets ascOrDesc
    *
    * @param string|null $ascOrDesc 升序、降序。
    *
    * @return $this
    */
    public function setAscOrDesc($ascOrDesc)
    {
        $this->container['ascOrDesc'] = $ascOrDesc;
        return $this;
    }

    /**
    * Gets offset
    *  查询起始坐标。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询起始坐标。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询条数。
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
    * @param int|null $limit 查询条数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets isOwner
    *  是否显示拥有者。
    *
    * @return bool|null
    */
    public function getIsOwner()
    {
        return $this->container['isOwner'];
    }

    /**
    * Sets isOwner
    *
    * @param bool|null $isOwner 是否显示拥有者。
    *
    * @return $this
    */
    public function setIsOwner($isOwner)
    {
        $this->container['isOwner'] = $isOwner;
        return $this;
    }

    /**
    * Gets isAuthorized
    *  是否显示已被授权。
    *
    * @return bool|null
    */
    public function getIsAuthorized()
    {
        return $this->container['isAuthorized'];
    }

    /**
    * Sets isAuthorized
    *
    * @param bool|null $isAuthorized 是否显示已被授权。
    *
    * @return $this
    */
    public function setIsAuthorized($isAuthorized)
    {
        $this->container['isAuthorized'] = $isAuthorized;
        return $this;
    }

    /**
    * Gets isUpdateRecently
    *  是否显示最近更新。
    *
    * @return bool|null
    */
    public function getIsUpdateRecently()
    {
        return $this->container['isUpdateRecently'];
    }

    /**
    * Sets isUpdateRecently
    *
    * @param bool|null $isUpdateRecently 是否显示最近更新。
    *
    * @return $this
    */
    public function setIsUpdateRecently($isUpdateRecently)
    {
        $this->container['isUpdateRecently'] = $isUpdateRecently;
        return $this;
    }

    /**
    * Gets isReleaseRecently
    *  是否显示最近发布。
    *
    * @return bool|null
    */
    public function getIsReleaseRecently()
    {
        return $this->container['isReleaseRecently'];
    }

    /**
    * Sets isReleaseRecently
    *
    * @param bool|null $isReleaseRecently 是否显示最近发布。
    *
    * @return $this
    */
    public function setIsReleaseRecently($isReleaseRecently)
    {
        $this->container['isReleaseRecently'] = $isReleaseRecently;
        return $this;
    }

    /**
    * Gets isHotRecently
    *  是否显示热销状态。
    *
    * @return bool|null
    */
    public function getIsHotRecently()
    {
        return $this->container['isHotRecently'];
    }

    /**
    * Sets isHotRecently
    *
    * @param bool|null $isHotRecently 是否显示热销状态。
    *
    * @return $this
    */
    public function setIsHotRecently($isHotRecently)
    {
        $this->container['isHotRecently'] = $isHotRecently;
        return $this;
    }

    /**
    * Gets successAndFailureRate
    *  是否显示7天内成功率与失败率。
    *
    * @return bool|null
    */
    public function getSuccessAndFailureRate()
    {
        return $this->container['successAndFailureRate'];
    }

    /**
    * Sets successAndFailureRate
    *
    * @param bool|null $successAndFailureRate 是否显示7天内成功率与失败率。
    *
    * @return $this
    */
    public function setSuccessAndFailureRate($successAndFailureRate)
    {
        $this->container['successAndFailureRate'] = $successAndFailureRate;
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

