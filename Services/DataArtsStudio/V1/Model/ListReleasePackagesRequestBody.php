<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReleasePackagesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReleasePackagesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyWord  包名package_name关键字
    * applyUserName  申请人名称
    * deployUserName  发布人名称
    * applyBeginTime  申请开始时间，13位时间戳
    * applyEndTime  申请结束时间，13位时间戳
    * deployBeginTime  发布开始时间，13位时间戳
    * deployEndTime  发布结束时间，13位时间戳
    * applyUserNameFilter  申请人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployUserNameFilter  发布人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployStatusFilter  发布状态集合: 1:待审批,2:成功,3:失败, 5:发布中
    * sortedDirection  排序方向，默认是desc
    * orderColumn  排序字段，默认是apply_timestamp
    * limit  分页返回结果，默认是10
    * offset  分页的起始页，默认值位0，取值范围大于等于0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyWord' => 'string',
            'applyUserName' => 'string',
            'deployUserName' => 'string',
            'applyBeginTime' => 'int',
            'applyEndTime' => 'int',
            'deployBeginTime' => 'int',
            'deployEndTime' => 'int',
            'applyUserNameFilter' => 'string[]',
            'deployUserNameFilter' => 'string[]',
            'deployStatusFilter' => 'int[]',
            'sortedDirection' => 'string',
            'orderColumn' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyWord  包名package_name关键字
    * applyUserName  申请人名称
    * deployUserName  发布人名称
    * applyBeginTime  申请开始时间，13位时间戳
    * applyEndTime  申请结束时间，13位时间戳
    * deployBeginTime  发布开始时间，13位时间戳
    * deployEndTime  发布结束时间，13位时间戳
    * applyUserNameFilter  申请人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployUserNameFilter  发布人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployStatusFilter  发布状态集合: 1:待审批,2:成功,3:失败, 5:发布中
    * sortedDirection  排序方向，默认是desc
    * orderColumn  排序字段，默认是apply_timestamp
    * limit  分页返回结果，默认是10
    * offset  分页的起始页，默认值位0，取值范围大于等于0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyWord' => null,
        'applyUserName' => null,
        'deployUserName' => null,
        'applyBeginTime' => 'int64',
        'applyEndTime' => 'int64',
        'deployBeginTime' => 'int64',
        'deployEndTime' => 'int64',
        'applyUserNameFilter' => null,
        'deployUserNameFilter' => null,
        'deployStatusFilter' => 'int32',
        'sortedDirection' => null,
        'orderColumn' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * keyWord  包名package_name关键字
    * applyUserName  申请人名称
    * deployUserName  发布人名称
    * applyBeginTime  申请开始时间，13位时间戳
    * applyEndTime  申请结束时间，13位时间戳
    * deployBeginTime  发布开始时间，13位时间戳
    * deployEndTime  发布结束时间，13位时间戳
    * applyUserNameFilter  申请人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployUserNameFilter  发布人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployStatusFilter  发布状态集合: 1:待审批,2:成功,3:失败, 5:发布中
    * sortedDirection  排序方向，默认是desc
    * orderColumn  排序字段，默认是apply_timestamp
    * limit  分页返回结果，默认是10
    * offset  分页的起始页，默认值位0，取值范围大于等于0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyWord' => 'key_word',
            'applyUserName' => 'apply_user_name',
            'deployUserName' => 'deploy_user_name',
            'applyBeginTime' => 'apply_begin_time',
            'applyEndTime' => 'apply_end_time',
            'deployBeginTime' => 'deploy_begin_time',
            'deployEndTime' => 'deploy_end_time',
            'applyUserNameFilter' => 'apply_user_name_filter',
            'deployUserNameFilter' => 'deploy_user_name_filter',
            'deployStatusFilter' => 'deploy_status_filter',
            'sortedDirection' => 'sorted_direction',
            'orderColumn' => 'order_column',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyWord  包名package_name关键字
    * applyUserName  申请人名称
    * deployUserName  发布人名称
    * applyBeginTime  申请开始时间，13位时间戳
    * applyEndTime  申请结束时间，13位时间戳
    * deployBeginTime  发布开始时间，13位时间戳
    * deployEndTime  发布结束时间，13位时间戳
    * applyUserNameFilter  申请人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployUserNameFilter  发布人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployStatusFilter  发布状态集合: 1:待审批,2:成功,3:失败, 5:发布中
    * sortedDirection  排序方向，默认是desc
    * orderColumn  排序字段，默认是apply_timestamp
    * limit  分页返回结果，默认是10
    * offset  分页的起始页，默认值位0，取值范围大于等于0
    *
    * @var string[]
    */
    protected static $setters = [
            'keyWord' => 'setKeyWord',
            'applyUserName' => 'setApplyUserName',
            'deployUserName' => 'setDeployUserName',
            'applyBeginTime' => 'setApplyBeginTime',
            'applyEndTime' => 'setApplyEndTime',
            'deployBeginTime' => 'setDeployBeginTime',
            'deployEndTime' => 'setDeployEndTime',
            'applyUserNameFilter' => 'setApplyUserNameFilter',
            'deployUserNameFilter' => 'setDeployUserNameFilter',
            'deployStatusFilter' => 'setDeployStatusFilter',
            'sortedDirection' => 'setSortedDirection',
            'orderColumn' => 'setOrderColumn',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyWord  包名package_name关键字
    * applyUserName  申请人名称
    * deployUserName  发布人名称
    * applyBeginTime  申请开始时间，13位时间戳
    * applyEndTime  申请结束时间，13位时间戳
    * deployBeginTime  发布开始时间，13位时间戳
    * deployEndTime  发布结束时间，13位时间戳
    * applyUserNameFilter  申请人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployUserNameFilter  发布人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    * deployStatusFilter  发布状态集合: 1:待审批,2:成功,3:失败, 5:发布中
    * sortedDirection  排序方向，默认是desc
    * orderColumn  排序字段，默认是apply_timestamp
    * limit  分页返回结果，默认是10
    * offset  分页的起始页，默认值位0，取值范围大于等于0
    *
    * @var string[]
    */
    protected static $getters = [
            'keyWord' => 'getKeyWord',
            'applyUserName' => 'getApplyUserName',
            'deployUserName' => 'getDeployUserName',
            'applyBeginTime' => 'getApplyBeginTime',
            'applyEndTime' => 'getApplyEndTime',
            'deployBeginTime' => 'getDeployBeginTime',
            'deployEndTime' => 'getDeployEndTime',
            'applyUserNameFilter' => 'getApplyUserNameFilter',
            'deployUserNameFilter' => 'getDeployUserNameFilter',
            'deployStatusFilter' => 'getDeployStatusFilter',
            'sortedDirection' => 'getSortedDirection',
            'orderColumn' => 'getOrderColumn',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['applyUserName'] = isset($data['applyUserName']) ? $data['applyUserName'] : null;
        $this->container['deployUserName'] = isset($data['deployUserName']) ? $data['deployUserName'] : null;
        $this->container['applyBeginTime'] = isset($data['applyBeginTime']) ? $data['applyBeginTime'] : null;
        $this->container['applyEndTime'] = isset($data['applyEndTime']) ? $data['applyEndTime'] : null;
        $this->container['deployBeginTime'] = isset($data['deployBeginTime']) ? $data['deployBeginTime'] : null;
        $this->container['deployEndTime'] = isset($data['deployEndTime']) ? $data['deployEndTime'] : null;
        $this->container['applyUserNameFilter'] = isset($data['applyUserNameFilter']) ? $data['applyUserNameFilter'] : null;
        $this->container['deployUserNameFilter'] = isset($data['deployUserNameFilter']) ? $data['deployUserNameFilter'] : null;
        $this->container['deployStatusFilter'] = isset($data['deployStatusFilter']) ? $data['deployStatusFilter'] : null;
        $this->container['sortedDirection'] = isset($data['sortedDirection']) ? $data['sortedDirection'] : null;
        $this->container['orderColumn'] = isset($data['orderColumn']) ? $data['orderColumn'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
    * Gets keyWord
    *  包名package_name关键字
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 包名package_name关键字
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets applyUserName
    *  申请人名称
    *
    * @return string|null
    */
    public function getApplyUserName()
    {
        return $this->container['applyUserName'];
    }

    /**
    * Sets applyUserName
    *
    * @param string|null $applyUserName 申请人名称
    *
    * @return $this
    */
    public function setApplyUserName($applyUserName)
    {
        $this->container['applyUserName'] = $applyUserName;
        return $this;
    }

    /**
    * Gets deployUserName
    *  发布人名称
    *
    * @return string|null
    */
    public function getDeployUserName()
    {
        return $this->container['deployUserName'];
    }

    /**
    * Sets deployUserName
    *
    * @param string|null $deployUserName 发布人名称
    *
    * @return $this
    */
    public function setDeployUserName($deployUserName)
    {
        $this->container['deployUserName'] = $deployUserName;
        return $this;
    }

    /**
    * Gets applyBeginTime
    *  申请开始时间，13位时间戳
    *
    * @return int|null
    */
    public function getApplyBeginTime()
    {
        return $this->container['applyBeginTime'];
    }

    /**
    * Sets applyBeginTime
    *
    * @param int|null $applyBeginTime 申请开始时间，13位时间戳
    *
    * @return $this
    */
    public function setApplyBeginTime($applyBeginTime)
    {
        $this->container['applyBeginTime'] = $applyBeginTime;
        return $this;
    }

    /**
    * Gets applyEndTime
    *  申请结束时间，13位时间戳
    *
    * @return int|null
    */
    public function getApplyEndTime()
    {
        return $this->container['applyEndTime'];
    }

    /**
    * Sets applyEndTime
    *
    * @param int|null $applyEndTime 申请结束时间，13位时间戳
    *
    * @return $this
    */
    public function setApplyEndTime($applyEndTime)
    {
        $this->container['applyEndTime'] = $applyEndTime;
        return $this;
    }

    /**
    * Gets deployBeginTime
    *  发布开始时间，13位时间戳
    *
    * @return int|null
    */
    public function getDeployBeginTime()
    {
        return $this->container['deployBeginTime'];
    }

    /**
    * Sets deployBeginTime
    *
    * @param int|null $deployBeginTime 发布开始时间，13位时间戳
    *
    * @return $this
    */
    public function setDeployBeginTime($deployBeginTime)
    {
        $this->container['deployBeginTime'] = $deployBeginTime;
        return $this;
    }

    /**
    * Gets deployEndTime
    *  发布结束时间，13位时间戳
    *
    * @return int|null
    */
    public function getDeployEndTime()
    {
        return $this->container['deployEndTime'];
    }

    /**
    * Sets deployEndTime
    *
    * @param int|null $deployEndTime 发布结束时间，13位时间戳
    *
    * @return $this
    */
    public function setDeployEndTime($deployEndTime)
    {
        $this->container['deployEndTime'] = $deployEndTime;
        return $this;
    }

    /**
    * Gets applyUserNameFilter
    *  申请人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    *
    * @return string[]|null
    */
    public function getApplyUserNameFilter()
    {
        return $this->container['applyUserNameFilter'];
    }

    /**
    * Sets applyUserNameFilter
    *
    * @param string[]|null $applyUserNameFilter 申请人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    *
    * @return $this
    */
    public function setApplyUserNameFilter($applyUserNameFilter)
    {
        $this->container['applyUserNameFilter'] = $applyUserNameFilter;
        return $this;
    }

    /**
    * Gets deployUserNameFilter
    *  发布人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    *
    * @return string[]|null
    */
    public function getDeployUserNameFilter()
    {
        return $this->container['deployUserNameFilter'];
    }

    /**
    * Sets deployUserNameFilter
    *
    * @param string[]|null $deployUserNameFilter 发布人名称集合，根据该字段筛选，如果选择了apply_user_name，则该名称必须包含在集合内
    *
    * @return $this
    */
    public function setDeployUserNameFilter($deployUserNameFilter)
    {
        $this->container['deployUserNameFilter'] = $deployUserNameFilter;
        return $this;
    }

    /**
    * Gets deployStatusFilter
    *  发布状态集合: 1:待审批,2:成功,3:失败, 5:发布中
    *
    * @return int[]|null
    */
    public function getDeployStatusFilter()
    {
        return $this->container['deployStatusFilter'];
    }

    /**
    * Sets deployStatusFilter
    *
    * @param int[]|null $deployStatusFilter 发布状态集合: 1:待审批,2:成功,3:失败, 5:发布中
    *
    * @return $this
    */
    public function setDeployStatusFilter($deployStatusFilter)
    {
        $this->container['deployStatusFilter'] = $deployStatusFilter;
        return $this;
    }

    /**
    * Gets sortedDirection
    *  排序方向，默认是desc
    *
    * @return string|null
    */
    public function getSortedDirection()
    {
        return $this->container['sortedDirection'];
    }

    /**
    * Sets sortedDirection
    *
    * @param string|null $sortedDirection 排序方向，默认是desc
    *
    * @return $this
    */
    public function setSortedDirection($sortedDirection)
    {
        $this->container['sortedDirection'] = $sortedDirection;
        return $this;
    }

    /**
    * Gets orderColumn
    *  排序字段，默认是apply_timestamp
    *
    * @return string|null
    */
    public function getOrderColumn()
    {
        return $this->container['orderColumn'];
    }

    /**
    * Sets orderColumn
    *
    * @param string|null $orderColumn 排序字段，默认是apply_timestamp
    *
    * @return $this
    */
    public function setOrderColumn($orderColumn)
    {
        $this->container['orderColumn'] = $orderColumn;
        return $this;
    }

    /**
    * Gets limit
    *  分页返回结果，默认是10
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
    * @param int|null $limit 分页返回结果，默认是10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页的起始页，默认值位0，取值范围大于等于0
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
    * @param int|null $offset 分页的起始页，默认值位0，取值范围大于等于0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

