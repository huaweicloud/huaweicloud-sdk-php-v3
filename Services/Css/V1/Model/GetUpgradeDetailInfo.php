<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetUpgradeDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetUpgradeDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID。
    * startTime  升级开始时间。
    * endTime  升级结束时间。
    * status  任务状态。 - RUNNING：升级中。 - SUCCESS：升级成功。 - FAILED：升级失败。 - PARTIAL_FAILED：部分升级失败。
    * agencyName  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * imageInfo  imageInfo
    * totalNodes  所有需要升级的节点名称集合。
    * completedNodes  所有升级完成的节点名称集合。
    * currentNodeName  当前正在升级的节点名称。
    * executeTimes  重试次数。
    * migrateParam  集群当前升级的行为。当有query参数时显示该返回值。
    * finalAzInfoMap  集群升级预期结果。当有query参数时显示该返回值。
    * currentNodeDetail  currentNodeDetail
    * batchSize  同时有多少个节点在迁移数据。
    * currentBatchNodes  当前正在迁移数据的节点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'agencyName' => 'string',
            'imageInfo' => '\HuaweiCloud\SDK\Css\V1\Model\GetTargetImageIdDetail',
            'totalNodes' => 'string',
            'completedNodes' => 'string',
            'currentNodeName' => 'string',
            'executeTimes' => 'string',
            'migrateParam' => 'string',
            'finalAzInfoMap' => 'string',
            'currentNodeDetail' => '\HuaweiCloud\SDK\Css\V1\Model\CurrentNodeDetail[]',
            'batchSize' => 'int',
            'currentBatchNodes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID。
    * startTime  升级开始时间。
    * endTime  升级结束时间。
    * status  任务状态。 - RUNNING：升级中。 - SUCCESS：升级成功。 - FAILED：升级失败。 - PARTIAL_FAILED：部分升级失败。
    * agencyName  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * imageInfo  imageInfo
    * totalNodes  所有需要升级的节点名称集合。
    * completedNodes  所有升级完成的节点名称集合。
    * currentNodeName  当前正在升级的节点名称。
    * executeTimes  重试次数。
    * migrateParam  集群当前升级的行为。当有query参数时显示该返回值。
    * finalAzInfoMap  集群升级预期结果。当有query参数时显示该返回值。
    * currentNodeDetail  currentNodeDetail
    * batchSize  同时有多少个节点在迁移数据。
    * currentBatchNodes  当前正在迁移数据的节点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'startTime' => null,
        'endTime' => null,
        'status' => null,
        'agencyName' => null,
        'imageInfo' => null,
        'totalNodes' => null,
        'completedNodes' => null,
        'currentNodeName' => null,
        'executeTimes' => null,
        'migrateParam' => null,
        'finalAzInfoMap' => null,
        'currentNodeDetail' => null,
        'batchSize' => 'int32',
        'currentBatchNodes' => null
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
    * id  任务ID。
    * startTime  升级开始时间。
    * endTime  升级结束时间。
    * status  任务状态。 - RUNNING：升级中。 - SUCCESS：升级成功。 - FAILED：升级失败。 - PARTIAL_FAILED：部分升级失败。
    * agencyName  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * imageInfo  imageInfo
    * totalNodes  所有需要升级的节点名称集合。
    * completedNodes  所有升级完成的节点名称集合。
    * currentNodeName  当前正在升级的节点名称。
    * executeTimes  重试次数。
    * migrateParam  集群当前升级的行为。当有query参数时显示该返回值。
    * finalAzInfoMap  集群升级预期结果。当有query参数时显示该返回值。
    * currentNodeDetail  currentNodeDetail
    * batchSize  同时有多少个节点在迁移数据。
    * currentBatchNodes  当前正在迁移数据的节点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'status' => 'status',
            'agencyName' => 'agencyName',
            'imageInfo' => 'imageInfo',
            'totalNodes' => 'totalNodes',
            'completedNodes' => 'completedNodes',
            'currentNodeName' => 'currentNodeName',
            'executeTimes' => 'executeTimes',
            'migrateParam' => 'migrateParam',
            'finalAzInfoMap' => 'finalAzInfoMap',
            'currentNodeDetail' => 'currentNodeDetail',
            'batchSize' => 'batchSize',
            'currentBatchNodes' => 'currentBatchNodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID。
    * startTime  升级开始时间。
    * endTime  升级结束时间。
    * status  任务状态。 - RUNNING：升级中。 - SUCCESS：升级成功。 - FAILED：升级失败。 - PARTIAL_FAILED：部分升级失败。
    * agencyName  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * imageInfo  imageInfo
    * totalNodes  所有需要升级的节点名称集合。
    * completedNodes  所有升级完成的节点名称集合。
    * currentNodeName  当前正在升级的节点名称。
    * executeTimes  重试次数。
    * migrateParam  集群当前升级的行为。当有query参数时显示该返回值。
    * finalAzInfoMap  集群升级预期结果。当有query参数时显示该返回值。
    * currentNodeDetail  currentNodeDetail
    * batchSize  同时有多少个节点在迁移数据。
    * currentBatchNodes  当前正在迁移数据的节点。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'agencyName' => 'setAgencyName',
            'imageInfo' => 'setImageInfo',
            'totalNodes' => 'setTotalNodes',
            'completedNodes' => 'setCompletedNodes',
            'currentNodeName' => 'setCurrentNodeName',
            'executeTimes' => 'setExecuteTimes',
            'migrateParam' => 'setMigrateParam',
            'finalAzInfoMap' => 'setFinalAzInfoMap',
            'currentNodeDetail' => 'setCurrentNodeDetail',
            'batchSize' => 'setBatchSize',
            'currentBatchNodes' => 'setCurrentBatchNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID。
    * startTime  升级开始时间。
    * endTime  升级结束时间。
    * status  任务状态。 - RUNNING：升级中。 - SUCCESS：升级成功。 - FAILED：升级失败。 - PARTIAL_FAILED：部分升级失败。
    * agencyName  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * imageInfo  imageInfo
    * totalNodes  所有需要升级的节点名称集合。
    * completedNodes  所有升级完成的节点名称集合。
    * currentNodeName  当前正在升级的节点名称。
    * executeTimes  重试次数。
    * migrateParam  集群当前升级的行为。当有query参数时显示该返回值。
    * finalAzInfoMap  集群升级预期结果。当有query参数时显示该返回值。
    * currentNodeDetail  currentNodeDetail
    * batchSize  同时有多少个节点在迁移数据。
    * currentBatchNodes  当前正在迁移数据的节点。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'agencyName' => 'getAgencyName',
            'imageInfo' => 'getImageInfo',
            'totalNodes' => 'getTotalNodes',
            'completedNodes' => 'getCompletedNodes',
            'currentNodeName' => 'getCurrentNodeName',
            'executeTimes' => 'getExecuteTimes',
            'migrateParam' => 'getMigrateParam',
            'finalAzInfoMap' => 'getFinalAzInfoMap',
            'currentNodeDetail' => 'getCurrentNodeDetail',
            'batchSize' => 'getBatchSize',
            'currentBatchNodes' => 'getCurrentBatchNodes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['imageInfo'] = isset($data['imageInfo']) ? $data['imageInfo'] : null;
        $this->container['totalNodes'] = isset($data['totalNodes']) ? $data['totalNodes'] : null;
        $this->container['completedNodes'] = isset($data['completedNodes']) ? $data['completedNodes'] : null;
        $this->container['currentNodeName'] = isset($data['currentNodeName']) ? $data['currentNodeName'] : null;
        $this->container['executeTimes'] = isset($data['executeTimes']) ? $data['executeTimes'] : null;
        $this->container['migrateParam'] = isset($data['migrateParam']) ? $data['migrateParam'] : null;
        $this->container['finalAzInfoMap'] = isset($data['finalAzInfoMap']) ? $data['finalAzInfoMap'] : null;
        $this->container['currentNodeDetail'] = isset($data['currentNodeDetail']) ? $data['currentNodeDetail'] : null;
        $this->container['batchSize'] = isset($data['batchSize']) ? $data['batchSize'] : null;
        $this->container['currentBatchNodes'] = isset($data['currentBatchNodes']) ? $data['currentBatchNodes'] : null;
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
    * Gets id
    *  任务ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 任务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets startTime
    *  升级开始时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 升级开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  升级结束时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 升级结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。 - RUNNING：升级中。 - SUCCESS：升级成功。 - FAILED：升级失败。 - PARTIAL_FAILED：部分升级失败。
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
    * @param string|null $status 任务状态。 - RUNNING：升级中。 - SUCCESS：升级成功。 - FAILED：升级失败。 - PARTIAL_FAILED：部分升级失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets imageInfo
    *  imageInfo
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\GetTargetImageIdDetail|null
    */
    public function getImageInfo()
    {
        return $this->container['imageInfo'];
    }

    /**
    * Sets imageInfo
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\GetTargetImageIdDetail|null $imageInfo imageInfo
    *
    * @return $this
    */
    public function setImageInfo($imageInfo)
    {
        $this->container['imageInfo'] = $imageInfo;
        return $this;
    }

    /**
    * Gets totalNodes
    *  所有需要升级的节点名称集合。
    *
    * @return string|null
    */
    public function getTotalNodes()
    {
        return $this->container['totalNodes'];
    }

    /**
    * Sets totalNodes
    *
    * @param string|null $totalNodes 所有需要升级的节点名称集合。
    *
    * @return $this
    */
    public function setTotalNodes($totalNodes)
    {
        $this->container['totalNodes'] = $totalNodes;
        return $this;
    }

    /**
    * Gets completedNodes
    *  所有升级完成的节点名称集合。
    *
    * @return string|null
    */
    public function getCompletedNodes()
    {
        return $this->container['completedNodes'];
    }

    /**
    * Sets completedNodes
    *
    * @param string|null $completedNodes 所有升级完成的节点名称集合。
    *
    * @return $this
    */
    public function setCompletedNodes($completedNodes)
    {
        $this->container['completedNodes'] = $completedNodes;
        return $this;
    }

    /**
    * Gets currentNodeName
    *  当前正在升级的节点名称。
    *
    * @return string|null
    */
    public function getCurrentNodeName()
    {
        return $this->container['currentNodeName'];
    }

    /**
    * Sets currentNodeName
    *
    * @param string|null $currentNodeName 当前正在升级的节点名称。
    *
    * @return $this
    */
    public function setCurrentNodeName($currentNodeName)
    {
        $this->container['currentNodeName'] = $currentNodeName;
        return $this;
    }

    /**
    * Gets executeTimes
    *  重试次数。
    *
    * @return string|null
    */
    public function getExecuteTimes()
    {
        return $this->container['executeTimes'];
    }

    /**
    * Sets executeTimes
    *
    * @param string|null $executeTimes 重试次数。
    *
    * @return $this
    */
    public function setExecuteTimes($executeTimes)
    {
        $this->container['executeTimes'] = $executeTimes;
        return $this;
    }

    /**
    * Gets migrateParam
    *  集群当前升级的行为。当有query参数时显示该返回值。
    *
    * @return string|null
    */
    public function getMigrateParam()
    {
        return $this->container['migrateParam'];
    }

    /**
    * Sets migrateParam
    *
    * @param string|null $migrateParam 集群当前升级的行为。当有query参数时显示该返回值。
    *
    * @return $this
    */
    public function setMigrateParam($migrateParam)
    {
        $this->container['migrateParam'] = $migrateParam;
        return $this;
    }

    /**
    * Gets finalAzInfoMap
    *  集群升级预期结果。当有query参数时显示该返回值。
    *
    * @return string|null
    */
    public function getFinalAzInfoMap()
    {
        return $this->container['finalAzInfoMap'];
    }

    /**
    * Sets finalAzInfoMap
    *
    * @param string|null $finalAzInfoMap 集群升级预期结果。当有query参数时显示该返回值。
    *
    * @return $this
    */
    public function setFinalAzInfoMap($finalAzInfoMap)
    {
        $this->container['finalAzInfoMap'] = $finalAzInfoMap;
        return $this;
    }

    /**
    * Gets currentNodeDetail
    *  currentNodeDetail
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CurrentNodeDetail[]|null
    */
    public function getCurrentNodeDetail()
    {
        return $this->container['currentNodeDetail'];
    }

    /**
    * Sets currentNodeDetail
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CurrentNodeDetail[]|null $currentNodeDetail currentNodeDetail
    *
    * @return $this
    */
    public function setCurrentNodeDetail($currentNodeDetail)
    {
        $this->container['currentNodeDetail'] = $currentNodeDetail;
        return $this;
    }

    /**
    * Gets batchSize
    *  同时有多少个节点在迁移数据。
    *
    * @return int|null
    */
    public function getBatchSize()
    {
        return $this->container['batchSize'];
    }

    /**
    * Sets batchSize
    *
    * @param int|null $batchSize 同时有多少个节点在迁移数据。
    *
    * @return $this
    */
    public function setBatchSize($batchSize)
    {
        $this->container['batchSize'] = $batchSize;
        return $this;
    }

    /**
    * Gets currentBatchNodes
    *  当前正在迁移数据的节点。
    *
    * @return string|null
    */
    public function getCurrentBatchNodes()
    {
        return $this->container['currentBatchNodes'];
    }

    /**
    * Sets currentBatchNodes
    *
    * @param string|null $currentBatchNodes 当前正在迁移数据的节点。
    *
    * @return $this
    */
    public function setCurrentBatchNodes($currentBatchNodes)
    {
        $this->container['currentBatchNodes'] = $currentBatchNodes;
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

