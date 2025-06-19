<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTestItemTreeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTestItemTreeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * owner  责任人
    * stage  阶段
    * activity  活动
    * versionUri  版本URI
    * taskUri  任务uri
    * serviceType  用例服务类型
    * containTotal  是否包含用例数
    * projectUuid  项目id
    * sortType  排序类型
    * pageNumber  页码
    * pageSize  每页数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'owner' => 'string',
            'stage' => 'string',
            'activity' => 'string',
            'versionUri' => 'string',
            'taskUri' => 'string',
            'serviceType' => 'string',
            'containTotal' => 'bool',
            'projectUuid' => 'string',
            'sortType' => 'string',
            'pageNumber' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * owner  责任人
    * stage  阶段
    * activity  活动
    * versionUri  版本URI
    * taskUri  任务uri
    * serviceType  用例服务类型
    * containTotal  是否包含用例数
    * projectUuid  项目id
    * sortType  排序类型
    * pageNumber  页码
    * pageSize  每页数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'owner' => null,
        'stage' => null,
        'activity' => null,
        'versionUri' => null,
        'taskUri' => null,
        'serviceType' => null,
        'containTotal' => null,
        'projectUuid' => null,
        'sortType' => null,
        'pageNumber' => 'int32',
        'pageSize' => 'int32'
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
    * owner  责任人
    * stage  阶段
    * activity  活动
    * versionUri  版本URI
    * taskUri  任务uri
    * serviceType  用例服务类型
    * containTotal  是否包含用例数
    * projectUuid  项目id
    * sortType  排序类型
    * pageNumber  页码
    * pageSize  每页数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'owner' => 'owner',
            'stage' => 'stage',
            'activity' => 'activity',
            'versionUri' => 'version_uri',
            'taskUri' => 'task_uri',
            'serviceType' => 'service_type',
            'containTotal' => 'contain_total',
            'projectUuid' => 'project_uuid',
            'sortType' => 'sort_type',
            'pageNumber' => 'page_number',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * owner  责任人
    * stage  阶段
    * activity  活动
    * versionUri  版本URI
    * taskUri  任务uri
    * serviceType  用例服务类型
    * containTotal  是否包含用例数
    * projectUuid  项目id
    * sortType  排序类型
    * pageNumber  页码
    * pageSize  每页数量
    *
    * @var string[]
    */
    protected static $setters = [
            'owner' => 'setOwner',
            'stage' => 'setStage',
            'activity' => 'setActivity',
            'versionUri' => 'setVersionUri',
            'taskUri' => 'setTaskUri',
            'serviceType' => 'setServiceType',
            'containTotal' => 'setContainTotal',
            'projectUuid' => 'setProjectUuid',
            'sortType' => 'setSortType',
            'pageNumber' => 'setPageNumber',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * owner  责任人
    * stage  阶段
    * activity  活动
    * versionUri  版本URI
    * taskUri  任务uri
    * serviceType  用例服务类型
    * containTotal  是否包含用例数
    * projectUuid  项目id
    * sortType  排序类型
    * pageNumber  页码
    * pageSize  每页数量
    *
    * @var string[]
    */
    protected static $getters = [
            'owner' => 'getOwner',
            'stage' => 'getStage',
            'activity' => 'getActivity',
            'versionUri' => 'getVersionUri',
            'taskUri' => 'getTaskUri',
            'serviceType' => 'getServiceType',
            'containTotal' => 'getContainTotal',
            'projectUuid' => 'getProjectUuid',
            'sortType' => 'getSortType',
            'pageNumber' => 'getPageNumber',
            'pageSize' => 'getPageSize'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['containTotal'] = isset($data['containTotal']) ? $data['containTotal'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
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
    * Gets owner
    *  责任人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets stage
    *  阶段
    *
    * @return string|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string|null $stage 阶段
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets activity
    *  活动
    *
    * @return string|null
    */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
    * Sets activity
    *
    * @param string|null $activity 活动
    *
    * @return $this
    */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;
        return $this;
    }

    /**
    * Gets versionUri
    *  版本URI
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 版本URI
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets taskUri
    *  任务uri
    *
    * @return string|null
    */
    public function getTaskUri()
    {
        return $this->container['taskUri'];
    }

    /**
    * Sets taskUri
    *
    * @param string|null $taskUri 任务uri
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets serviceType
    *  用例服务类型
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 用例服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets containTotal
    *  是否包含用例数
    *
    * @return bool|null
    */
    public function getContainTotal()
    {
        return $this->container['containTotal'];
    }

    /**
    * Sets containTotal
    *
    * @param bool|null $containTotal 是否包含用例数
    *
    * @return $this
    */
    public function setContainTotal($containTotal)
    {
        $this->container['containTotal'] = $containTotal;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets sortType
    *  排序类型
    *
    * @return string|null
    */
    public function getSortType()
    {
        return $this->container['sortType'];
    }

    /**
    * Sets sortType
    *
    * @param string|null $sortType 排序类型
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets pageNumber
    *  页码
    *
    * @return int|null
    */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
    * Sets pageNumber
    *
    * @param int|null $pageNumber 页码
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数量
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
    * @param int|null $pageSize 每页数量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

