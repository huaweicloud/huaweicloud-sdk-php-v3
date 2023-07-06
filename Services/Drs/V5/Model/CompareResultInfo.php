<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectsCompareOverviewInfo  objectsCompareOverviewInfo
    * objectsCompareDetailInfos  对象级对比详情信息体。
    * dataCompareTaskList  数据对比任务列表。
    * lineCompareOverviewInfos  行数对比概览信息体。
    * lineCompareDetailInfos  行数对比任务表级详情。
    * contentCompareOverviewInfos  内容对比概览信息体。
    * contentCompareDetailInfos  内容对比详情信息体。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectsCompareOverviewInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\ObjectsCompareTaskInfo',
            'objectsCompareDetailInfos' => '\HuaweiCloud\SDK\Drs\V5\Model\ObjectsCompareDetailInfo[]',
            'dataCompareTaskList' => '\HuaweiCloud\SDK\Drs\V5\Model\CompareJobInfo[]',
            'lineCompareOverviewInfos' => '\HuaweiCloud\SDK\Drs\V5\Model\LineCompareOverviewInfo[]',
            'lineCompareDetailInfos' => '\HuaweiCloud\SDK\Drs\V5\Model\TableLineCompareDetailInfo[]',
            'contentCompareOverviewInfos' => '\HuaweiCloud\SDK\Drs\V5\Model\ContentCompareOverviewInfo[]',
            'contentCompareDetailInfos' => '\HuaweiCloud\SDK\Drs\V5\Model\ContentCompareDetailInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectsCompareOverviewInfo  objectsCompareOverviewInfo
    * objectsCompareDetailInfos  对象级对比详情信息体。
    * dataCompareTaskList  数据对比任务列表。
    * lineCompareOverviewInfos  行数对比概览信息体。
    * lineCompareDetailInfos  行数对比任务表级详情。
    * contentCompareOverviewInfos  内容对比概览信息体。
    * contentCompareDetailInfos  内容对比详情信息体。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectsCompareOverviewInfo' => null,
        'objectsCompareDetailInfos' => null,
        'dataCompareTaskList' => null,
        'lineCompareOverviewInfos' => null,
        'lineCompareDetailInfos' => null,
        'contentCompareOverviewInfos' => null,
        'contentCompareDetailInfos' => null
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
    * objectsCompareOverviewInfo  objectsCompareOverviewInfo
    * objectsCompareDetailInfos  对象级对比详情信息体。
    * dataCompareTaskList  数据对比任务列表。
    * lineCompareOverviewInfos  行数对比概览信息体。
    * lineCompareDetailInfos  行数对比任务表级详情。
    * contentCompareOverviewInfos  内容对比概览信息体。
    * contentCompareDetailInfos  内容对比详情信息体。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectsCompareOverviewInfo' => 'objects_compare_overview_info',
            'objectsCompareDetailInfos' => 'objects_compare_detail_infos',
            'dataCompareTaskList' => 'data_compare_task_list',
            'lineCompareOverviewInfos' => 'line_compare_overview_infos',
            'lineCompareDetailInfos' => 'line_compare_detail_infos',
            'contentCompareOverviewInfos' => 'content_compare_overview_infos',
            'contentCompareDetailInfos' => 'content_compare_detail_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectsCompareOverviewInfo  objectsCompareOverviewInfo
    * objectsCompareDetailInfos  对象级对比详情信息体。
    * dataCompareTaskList  数据对比任务列表。
    * lineCompareOverviewInfos  行数对比概览信息体。
    * lineCompareDetailInfos  行数对比任务表级详情。
    * contentCompareOverviewInfos  内容对比概览信息体。
    * contentCompareDetailInfos  内容对比详情信息体。
    *
    * @var string[]
    */
    protected static $setters = [
            'objectsCompareOverviewInfo' => 'setObjectsCompareOverviewInfo',
            'objectsCompareDetailInfos' => 'setObjectsCompareDetailInfos',
            'dataCompareTaskList' => 'setDataCompareTaskList',
            'lineCompareOverviewInfos' => 'setLineCompareOverviewInfos',
            'lineCompareDetailInfos' => 'setLineCompareDetailInfos',
            'contentCompareOverviewInfos' => 'setContentCompareOverviewInfos',
            'contentCompareDetailInfos' => 'setContentCompareDetailInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectsCompareOverviewInfo  objectsCompareOverviewInfo
    * objectsCompareDetailInfos  对象级对比详情信息体。
    * dataCompareTaskList  数据对比任务列表。
    * lineCompareOverviewInfos  行数对比概览信息体。
    * lineCompareDetailInfos  行数对比任务表级详情。
    * contentCompareOverviewInfos  内容对比概览信息体。
    * contentCompareDetailInfos  内容对比详情信息体。
    *
    * @var string[]
    */
    protected static $getters = [
            'objectsCompareOverviewInfo' => 'getObjectsCompareOverviewInfo',
            'objectsCompareDetailInfos' => 'getObjectsCompareDetailInfos',
            'dataCompareTaskList' => 'getDataCompareTaskList',
            'lineCompareOverviewInfos' => 'getLineCompareOverviewInfos',
            'lineCompareDetailInfos' => 'getLineCompareDetailInfos',
            'contentCompareOverviewInfos' => 'getContentCompareOverviewInfos',
            'contentCompareDetailInfos' => 'getContentCompareDetailInfos'
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
        $this->container['objectsCompareOverviewInfo'] = isset($data['objectsCompareOverviewInfo']) ? $data['objectsCompareOverviewInfo'] : null;
        $this->container['objectsCompareDetailInfos'] = isset($data['objectsCompareDetailInfos']) ? $data['objectsCompareDetailInfos'] : null;
        $this->container['dataCompareTaskList'] = isset($data['dataCompareTaskList']) ? $data['dataCompareTaskList'] : null;
        $this->container['lineCompareOverviewInfos'] = isset($data['lineCompareOverviewInfos']) ? $data['lineCompareOverviewInfos'] : null;
        $this->container['lineCompareDetailInfos'] = isset($data['lineCompareDetailInfos']) ? $data['lineCompareDetailInfos'] : null;
        $this->container['contentCompareOverviewInfos'] = isset($data['contentCompareOverviewInfos']) ? $data['contentCompareOverviewInfos'] : null;
        $this->container['contentCompareDetailInfos'] = isset($data['contentCompareDetailInfos']) ? $data['contentCompareDetailInfos'] : null;
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
    * Gets objectsCompareOverviewInfo
    *  objectsCompareOverviewInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ObjectsCompareTaskInfo|null
    */
    public function getObjectsCompareOverviewInfo()
    {
        return $this->container['objectsCompareOverviewInfo'];
    }

    /**
    * Sets objectsCompareOverviewInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ObjectsCompareTaskInfo|null $objectsCompareOverviewInfo objectsCompareOverviewInfo
    *
    * @return $this
    */
    public function setObjectsCompareOverviewInfo($objectsCompareOverviewInfo)
    {
        $this->container['objectsCompareOverviewInfo'] = $objectsCompareOverviewInfo;
        return $this;
    }

    /**
    * Gets objectsCompareDetailInfos
    *  对象级对比详情信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ObjectsCompareDetailInfo[]|null
    */
    public function getObjectsCompareDetailInfos()
    {
        return $this->container['objectsCompareDetailInfos'];
    }

    /**
    * Sets objectsCompareDetailInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ObjectsCompareDetailInfo[]|null $objectsCompareDetailInfos 对象级对比详情信息体。
    *
    * @return $this
    */
    public function setObjectsCompareDetailInfos($objectsCompareDetailInfos)
    {
        $this->container['objectsCompareDetailInfos'] = $objectsCompareDetailInfos;
        return $this;
    }

    /**
    * Gets dataCompareTaskList
    *  数据对比任务列表。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\CompareJobInfo[]|null
    */
    public function getDataCompareTaskList()
    {
        return $this->container['dataCompareTaskList'];
    }

    /**
    * Sets dataCompareTaskList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\CompareJobInfo[]|null $dataCompareTaskList 数据对比任务列表。
    *
    * @return $this
    */
    public function setDataCompareTaskList($dataCompareTaskList)
    {
        $this->container['dataCompareTaskList'] = $dataCompareTaskList;
        return $this;
    }

    /**
    * Gets lineCompareOverviewInfos
    *  行数对比概览信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\LineCompareOverviewInfo[]|null
    */
    public function getLineCompareOverviewInfos()
    {
        return $this->container['lineCompareOverviewInfos'];
    }

    /**
    * Sets lineCompareOverviewInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\LineCompareOverviewInfo[]|null $lineCompareOverviewInfos 行数对比概览信息体。
    *
    * @return $this
    */
    public function setLineCompareOverviewInfos($lineCompareOverviewInfos)
    {
        $this->container['lineCompareOverviewInfos'] = $lineCompareOverviewInfos;
        return $this;
    }

    /**
    * Gets lineCompareDetailInfos
    *  行数对比任务表级详情。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TableLineCompareDetailInfo[]|null
    */
    public function getLineCompareDetailInfos()
    {
        return $this->container['lineCompareDetailInfos'];
    }

    /**
    * Sets lineCompareDetailInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TableLineCompareDetailInfo[]|null $lineCompareDetailInfos 行数对比任务表级详情。
    *
    * @return $this
    */
    public function setLineCompareDetailInfos($lineCompareDetailInfos)
    {
        $this->container['lineCompareDetailInfos'] = $lineCompareDetailInfos;
        return $this;
    }

    /**
    * Gets contentCompareOverviewInfos
    *  内容对比概览信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ContentCompareOverviewInfo[]|null
    */
    public function getContentCompareOverviewInfos()
    {
        return $this->container['contentCompareOverviewInfos'];
    }

    /**
    * Sets contentCompareOverviewInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ContentCompareOverviewInfo[]|null $contentCompareOverviewInfos 内容对比概览信息体。
    *
    * @return $this
    */
    public function setContentCompareOverviewInfos($contentCompareOverviewInfos)
    {
        $this->container['contentCompareOverviewInfos'] = $contentCompareOverviewInfos;
        return $this;
    }

    /**
    * Gets contentCompareDetailInfos
    *  内容对比详情信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ContentCompareDetailInfo[]|null
    */
    public function getContentCompareDetailInfos()
    {
        return $this->container['contentCompareDetailInfos'];
    }

    /**
    * Sets contentCompareDetailInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ContentCompareDetailInfo[]|null $contentCompareDetailInfos 内容对比详情信息体。
    *
    * @return $this
    */
    public function setContentCompareDetailInfos($contentCompareDetailInfos)
    {
        $this->container['contentCompareDetailInfos'] = $contentCompareDetailInfos;
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

