<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlertGroupsByConditionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlertGroupsByConditionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  告警组ID
    * groupIds  告警组ID列表
    * pageNum  当前页数
    * pageSize  每页大小
    * testServiceId  服务ID
    * userIds  用户ID列表
    * userName  用户名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'groupIds' => 'string[]',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'testServiceId' => 'string',
            'userIds' => 'string[]',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  告警组ID
    * groupIds  告警组ID列表
    * pageNum  当前页数
    * pageSize  每页大小
    * testServiceId  服务ID
    * userIds  用户ID列表
    * userName  用户名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'groupIds' => null,
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'testServiceId' => null,
        'userIds' => null,
        'userName' => null
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
    * groupId  告警组ID
    * groupIds  告警组ID列表
    * pageNum  当前页数
    * pageSize  每页大小
    * testServiceId  服务ID
    * userIds  用户ID列表
    * userName  用户名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'groupIds' => 'group_ids',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'testServiceId' => 'test_service_id',
            'userIds' => 'userIds',
            'userName' => 'userName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  告警组ID
    * groupIds  告警组ID列表
    * pageNum  当前页数
    * pageSize  每页大小
    * testServiceId  服务ID
    * userIds  用户ID列表
    * userName  用户名
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'groupIds' => 'setGroupIds',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'testServiceId' => 'setTestServiceId',
            'userIds' => 'setUserIds',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  告警组ID
    * groupIds  告警组ID列表
    * pageNum  当前页数
    * pageSize  每页大小
    * testServiceId  服务ID
    * userIds  用户ID列表
    * userName  用户名
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'groupIds' => 'getGroupIds',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'testServiceId' => 'getTestServiceId',
            'userIds' => 'getUserIds',
            'userName' => 'getUserName'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupIds'] = isset($data['groupIds']) ? $data['groupIds'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['testServiceId'] = isset($data['testServiceId']) ? $data['testServiceId'] : null;
        $this->container['userIds'] = isset($data['userIds']) ? $data['userIds'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
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
    * Gets groupId
    *  告警组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 告警组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupIds
    *  告警组ID列表
    *
    * @return string[]|null
    */
    public function getGroupIds()
    {
        return $this->container['groupIds'];
    }

    /**
    * Sets groupIds
    *
    * @param string[]|null $groupIds 告警组ID列表
    *
    * @return $this
    */
    public function setGroupIds($groupIds)
    {
        $this->container['groupIds'] = $groupIds;
        return $this;
    }

    /**
    * Gets pageNum
    *  当前页数
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 当前页数
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页大小
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets testServiceId
    *  服务ID
    *
    * @return string|null
    */
    public function getTestServiceId()
    {
        return $this->container['testServiceId'];
    }

    /**
    * Sets testServiceId
    *
    * @param string|null $testServiceId 服务ID
    *
    * @return $this
    */
    public function setTestServiceId($testServiceId)
    {
        $this->container['testServiceId'] = $testServiceId;
        return $this;
    }

    /**
    * Gets userIds
    *  用户ID列表
    *
    * @return string[]|null
    */
    public function getUserIds()
    {
        return $this->container['userIds'];
    }

    /**
    * Sets userIds
    *
    * @param string[]|null $userIds 用户ID列表
    *
    * @return $this
    */
    public function setUserIds($userIds)
    {
        $this->container['userIds'] = $userIds;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

