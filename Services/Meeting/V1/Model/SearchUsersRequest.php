<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchUsersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchUsersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持名称、手机、邮箱、帐号、第三方帐号模糊搜索。
    * sortField  排序字段名称 支持的取值： - userType - adminType - ldapAccount - deptCode - status - sortLevel
    * isAsc  是否按升序排序。
    * deptCode  部门编码，不带则查询所有。
    * enableSubDept  是否查询子部门。 默认值: true
    * adminType  根据管理员类型查询。 * 1：普通管理员 * 2：非管理员
    * enableRoom  是否开启智能协同白板功能功能位，不带则搜索所有。 > 该参数将废弃，请勿使用。
    * userType  用户类型。默认2。 * 2：普通用户 * 12：智慧屏用户 * 13：ideaHub用户 * 14: SmartRooms用户
    * status  用户状态。不带则查询所有。 * 0：正常 * 1：停用。
    * containsUnActive  是否查询未激活的终端。 默认值: false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xRequestId' => 'string',
            'acceptLanguage' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'searchKey' => 'string',
            'sortField' => 'string',
            'isAsc' => 'bool',
            'deptCode' => 'string',
            'enableSubDept' => 'bool',
            'adminType' => 'int',
            'enableRoom' => 'bool',
            'userType' => 'int[]',
            'status' => 'int',
            'containsUnActive' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持名称、手机、邮箱、帐号、第三方帐号模糊搜索。
    * sortField  排序字段名称 支持的取值： - userType - adminType - ldapAccount - deptCode - status - sortLevel
    * isAsc  是否按升序排序。
    * deptCode  部门编码，不带则查询所有。
    * enableSubDept  是否查询子部门。 默认值: true
    * adminType  根据管理员类型查询。 * 1：普通管理员 * 2：非管理员
    * enableRoom  是否开启智能协同白板功能功能位，不带则搜索所有。 > 该参数将废弃，请勿使用。
    * userType  用户类型。默认2。 * 2：普通用户 * 12：智慧屏用户 * 13：ideaHub用户 * 14: SmartRooms用户
    * status  用户状态。不带则查询所有。 * 0：正常 * 1：停用。
    * containsUnActive  是否查询未激活的终端。 默认值: false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xRequestId' => null,
        'acceptLanguage' => null,
        'offset' => null,
        'limit' => null,
        'searchKey' => null,
        'sortField' => null,
        'isAsc' => null,
        'deptCode' => null,
        'enableSubDept' => null,
        'adminType' => null,
        'enableRoom' => null,
        'userType' => null,
        'status' => null,
        'containsUnActive' => null
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
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持名称、手机、邮箱、帐号、第三方帐号模糊搜索。
    * sortField  排序字段名称 支持的取值： - userType - adminType - ldapAccount - deptCode - status - sortLevel
    * isAsc  是否按升序排序。
    * deptCode  部门编码，不带则查询所有。
    * enableSubDept  是否查询子部门。 默认值: true
    * adminType  根据管理员类型查询。 * 1：普通管理员 * 2：非管理员
    * enableRoom  是否开启智能协同白板功能功能位，不带则搜索所有。 > 该参数将废弃，请勿使用。
    * userType  用户类型。默认2。 * 2：普通用户 * 12：智慧屏用户 * 13：ideaHub用户 * 14: SmartRooms用户
    * status  用户状态。不带则查询所有。 * 0：正常 * 1：停用。
    * containsUnActive  是否查询未激活的终端。 默认值: false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xRequestId' => 'X-Request-Id',
            'acceptLanguage' => 'Accept-Language',
            'offset' => 'offset',
            'limit' => 'limit',
            'searchKey' => 'searchKey',
            'sortField' => 'sortField',
            'isAsc' => 'isAsc',
            'deptCode' => 'deptCode',
            'enableSubDept' => 'enableSubDept',
            'adminType' => 'adminType',
            'enableRoom' => 'enableRoom',
            'userType' => 'userType',
            'status' => 'status',
            'containsUnActive' => 'containsUnActive'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持名称、手机、邮箱、帐号、第三方帐号模糊搜索。
    * sortField  排序字段名称 支持的取值： - userType - adminType - ldapAccount - deptCode - status - sortLevel
    * isAsc  是否按升序排序。
    * deptCode  部门编码，不带则查询所有。
    * enableSubDept  是否查询子部门。 默认值: true
    * adminType  根据管理员类型查询。 * 1：普通管理员 * 2：非管理员
    * enableRoom  是否开启智能协同白板功能功能位，不带则搜索所有。 > 该参数将废弃，请勿使用。
    * userType  用户类型。默认2。 * 2：普通用户 * 12：智慧屏用户 * 13：ideaHub用户 * 14: SmartRooms用户
    * status  用户状态。不带则查询所有。 * 0：正常 * 1：停用。
    * containsUnActive  是否查询未激活的终端。 默认值: false
    *
    * @var string[]
    */
    protected static $setters = [
            'xRequestId' => 'setXRequestId',
            'acceptLanguage' => 'setAcceptLanguage',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'searchKey' => 'setSearchKey',
            'sortField' => 'setSortField',
            'isAsc' => 'setIsAsc',
            'deptCode' => 'setDeptCode',
            'enableSubDept' => 'setEnableSubDept',
            'adminType' => 'setAdminType',
            'enableRoom' => 'setEnableRoom',
            'userType' => 'setUserType',
            'status' => 'setStatus',
            'containsUnActive' => 'setContainsUnActive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持名称、手机、邮箱、帐号、第三方帐号模糊搜索。
    * sortField  排序字段名称 支持的取值： - userType - adminType - ldapAccount - deptCode - status - sortLevel
    * isAsc  是否按升序排序。
    * deptCode  部门编码，不带则查询所有。
    * enableSubDept  是否查询子部门。 默认值: true
    * adminType  根据管理员类型查询。 * 1：普通管理员 * 2：非管理员
    * enableRoom  是否开启智能协同白板功能功能位，不带则搜索所有。 > 该参数将废弃，请勿使用。
    * userType  用户类型。默认2。 * 2：普通用户 * 12：智慧屏用户 * 13：ideaHub用户 * 14: SmartRooms用户
    * status  用户状态。不带则查询所有。 * 0：正常 * 1：停用。
    * containsUnActive  是否查询未激活的终端。 默认值: false
    *
    * @var string[]
    */
    protected static $getters = [
            'xRequestId' => 'getXRequestId',
            'acceptLanguage' => 'getAcceptLanguage',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'searchKey' => 'getSearchKey',
            'sortField' => 'getSortField',
            'isAsc' => 'getIsAsc',
            'deptCode' => 'getDeptCode',
            'enableSubDept' => 'getEnableSubDept',
            'adminType' => 'getAdminType',
            'enableRoom' => 'getEnableRoom',
            'userType' => 'getUserType',
            'status' => 'getStatus',
            'containsUnActive' => 'getContainsUnActive'
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
    const ADMIN_TYPE_1 = 1;
    const ADMIN_TYPE_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAdminTypeAllowableValues()
    {
        return [
            self::ADMIN_TYPE_1,
            self::ADMIN_TYPE_2,
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
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
        $this->container['acceptLanguage'] = isset($data['acceptLanguage']) ? $data['acceptLanguage'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['searchKey'] = isset($data['searchKey']) ? $data['searchKey'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['isAsc'] = isset($data['isAsc']) ? $data['isAsc'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['enableSubDept'] = isset($data['enableSubDept']) ? $data['enableSubDept'] : null;
        $this->container['adminType'] = isset($data['adminType']) ? $data['adminType'] : null;
        $this->container['enableRoom'] = isset($data['enableRoom']) ? $data['enableRoom'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['containsUnActive'] = isset($data['containsUnActive']) ? $data['containsUnActive'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getAdminTypeAllowableValues();
                if (!is_null($this->container['adminType']) && !in_array($this->container['adminType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'adminType', must be one of '%s'",
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
    * Gets xRequestId
    *  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId 请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
        return $this;
    }

    /**
    * Gets acceptLanguage
    *  语言参数，默认为中文zh-CN，英文为en-US。
    *
    * @return string|null
    */
    public function getAcceptLanguage()
    {
        return $this->container['acceptLanguage'];
    }

    /**
    * Sets acceptLanguage
    *
    * @param string|null $acceptLanguage 语言参数，默认为中文zh-CN，英文为en-US。
    *
    * @return $this
    */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->container['acceptLanguage'] = $acceptLanguage;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量,若超过最大数量，则返回最后一页。
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
    * @param int|null $offset 查询偏移量,若超过最大数量，则返回最后一页。
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
    *  查询数量。 默认值：10。
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
    * @param int|null $limit 查询数量。 默认值：10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets searchKey
    *  搜索条件，支持名称、手机、邮箱、帐号、第三方帐号模糊搜索。
    *
    * @return string|null
    */
    public function getSearchKey()
    {
        return $this->container['searchKey'];
    }

    /**
    * Sets searchKey
    *
    * @param string|null $searchKey 搜索条件，支持名称、手机、邮箱、帐号、第三方帐号模糊搜索。
    *
    * @return $this
    */
    public function setSearchKey($searchKey)
    {
        $this->container['searchKey'] = $searchKey;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段名称 支持的取值： - userType - adminType - ldapAccount - deptCode - status - sortLevel
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段名称 支持的取值： - userType - adminType - ldapAccount - deptCode - status - sortLevel
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets isAsc
    *  是否按升序排序。
    *
    * @return bool|null
    */
    public function getIsAsc()
    {
        return $this->container['isAsc'];
    }

    /**
    * Sets isAsc
    *
    * @param bool|null $isAsc 是否按升序排序。
    *
    * @return $this
    */
    public function setIsAsc($isAsc)
    {
        $this->container['isAsc'] = $isAsc;
        return $this;
    }

    /**
    * Gets deptCode
    *  部门编码，不带则查询所有。
    *
    * @return string|null
    */
    public function getDeptCode()
    {
        return $this->container['deptCode'];
    }

    /**
    * Sets deptCode
    *
    * @param string|null $deptCode 部门编码，不带则查询所有。
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
        return $this;
    }

    /**
    * Gets enableSubDept
    *  是否查询子部门。 默认值: true
    *
    * @return bool|null
    */
    public function getEnableSubDept()
    {
        return $this->container['enableSubDept'];
    }

    /**
    * Sets enableSubDept
    *
    * @param bool|null $enableSubDept 是否查询子部门。 默认值: true
    *
    * @return $this
    */
    public function setEnableSubDept($enableSubDept)
    {
        $this->container['enableSubDept'] = $enableSubDept;
        return $this;
    }

    /**
    * Gets adminType
    *  根据管理员类型查询。 * 1：普通管理员 * 2：非管理员
    *
    * @return int|null
    */
    public function getAdminType()
    {
        return $this->container['adminType'];
    }

    /**
    * Sets adminType
    *
    * @param int|null $adminType 根据管理员类型查询。 * 1：普通管理员 * 2：非管理员
    *
    * @return $this
    */
    public function setAdminType($adminType)
    {
        $this->container['adminType'] = $adminType;
        return $this;
    }

    /**
    * Gets enableRoom
    *  是否开启智能协同白板功能功能位，不带则搜索所有。 > 该参数将废弃，请勿使用。
    *
    * @return bool|null
    */
    public function getEnableRoom()
    {
        return $this->container['enableRoom'];
    }

    /**
    * Sets enableRoom
    *
    * @param bool|null $enableRoom 是否开启智能协同白板功能功能位，不带则搜索所有。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setEnableRoom($enableRoom)
    {
        $this->container['enableRoom'] = $enableRoom;
        return $this;
    }

    /**
    * Gets userType
    *  用户类型。默认2。 * 2：普通用户 * 12：智慧屏用户 * 13：ideaHub用户 * 14: SmartRooms用户
    *
    * @return int[]|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param int[]|null $userType 用户类型。默认2。 * 2：普通用户 * 12：智慧屏用户 * 13：ideaHub用户 * 14: SmartRooms用户
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets status
    *  用户状态。不带则查询所有。 * 0：正常 * 1：停用。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 用户状态。不带则查询所有。 * 0：正常 * 1：停用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets containsUnActive
    *  是否查询未激活的终端。 默认值: false
    *
    * @return bool|null
    */
    public function getContainsUnActive()
    {
        return $this->container['containsUnActive'];
    }

    /**
    * Sets containsUnActive
    *
    * @param bool|null $containsUnActive 是否查询未激活的终端。 默认值: false
    *
    * @return $this
    */
    public function setContainsUnActive($containsUnActive)
    {
        $this->container['containsUnActive'] = $containsUnActive;
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

