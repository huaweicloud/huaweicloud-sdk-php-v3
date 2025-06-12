<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDiagnosisReportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDiagnosisReportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释**： 报告ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * consumerNums  **参数解释**： 消费者数量。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * creatAt  **参数解释**： 生成时间。 **取值范围**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项数量。 **取值范围**： 不涉及。
    * faultedNodeSum  **参数解释**： 异常节点数量。 **取值范围**： 不涉及。
    * online  **参数解释**： 是否在线。 **取值范围**： - true: 在线。 - false: 不在线。
    * messageAccumulation  **参数解释**： 消息堆积数。 **取值范围**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅一致性。 **取值范围**： - true: 订阅关系一致。 - false: 订阅关系不一致。
    * subscriptions  **参数解释**： 订阅者列表。 **取值范围**： 不涉及。
    * diagnosisNodeReportList  **参数解释**： 诊断节点报告列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'string',
            'groupName' => 'string',
            'consumerNums' => 'int',
            'status' => 'string',
            'creatAt' => 'int',
            'abnormalItemSum' => 'int',
            'faultedNodeSum' => 'int',
            'online' => 'bool',
            'messageAccumulation' => 'int',
            'subscriptionConsistency' => 'bool',
            'subscriptions' => 'string[]',
            'diagnosisNodeReportList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释**： 报告ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * consumerNums  **参数解释**： 消费者数量。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * creatAt  **参数解释**： 生成时间。 **取值范围**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项数量。 **取值范围**： 不涉及。
    * faultedNodeSum  **参数解释**： 异常节点数量。 **取值范围**： 不涉及。
    * online  **参数解释**： 是否在线。 **取值范围**： - true: 在线。 - false: 不在线。
    * messageAccumulation  **参数解释**： 消息堆积数。 **取值范围**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅一致性。 **取值范围**： - true: 订阅关系一致。 - false: 订阅关系不一致。
    * subscriptions  **参数解释**： 订阅者列表。 **取值范围**： 不涉及。
    * diagnosisNodeReportList  **参数解释**： 诊断节点报告列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => null,
        'groupName' => null,
        'consumerNums' => 'int32',
        'status' => null,
        'creatAt' => 'int64',
        'abnormalItemSum' => 'int32',
        'faultedNodeSum' => 'int32',
        'online' => null,
        'messageAccumulation' => 'int32',
        'subscriptionConsistency' => null,
        'subscriptions' => null,
        'diagnosisNodeReportList' => null
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
    * reportId  **参数解释**： 报告ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * consumerNums  **参数解释**： 消费者数量。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * creatAt  **参数解释**： 生成时间。 **取值范围**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项数量。 **取值范围**： 不涉及。
    * faultedNodeSum  **参数解释**： 异常节点数量。 **取值范围**： 不涉及。
    * online  **参数解释**： 是否在线。 **取值范围**： - true: 在线。 - false: 不在线。
    * messageAccumulation  **参数解释**： 消息堆积数。 **取值范围**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅一致性。 **取值范围**： - true: 订阅关系一致。 - false: 订阅关系不一致。
    * subscriptions  **参数解释**： 订阅者列表。 **取值范围**： 不涉及。
    * diagnosisNodeReportList  **参数解释**： 诊断节点报告列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'groupName' => 'group_name',
            'consumerNums' => 'consumer_nums',
            'status' => 'status',
            'creatAt' => 'creat_at',
            'abnormalItemSum' => 'abnormal_item_sum',
            'faultedNodeSum' => 'faulted_node_sum',
            'online' => 'online',
            'messageAccumulation' => 'message_accumulation',
            'subscriptionConsistency' => 'subscription_consistency',
            'subscriptions' => 'subscriptions',
            'diagnosisNodeReportList' => 'diagnosis_node_report_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释**： 报告ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * consumerNums  **参数解释**： 消费者数量。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * creatAt  **参数解释**： 生成时间。 **取值范围**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项数量。 **取值范围**： 不涉及。
    * faultedNodeSum  **参数解释**： 异常节点数量。 **取值范围**： 不涉及。
    * online  **参数解释**： 是否在线。 **取值范围**： - true: 在线。 - false: 不在线。
    * messageAccumulation  **参数解释**： 消息堆积数。 **取值范围**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅一致性。 **取值范围**： - true: 订阅关系一致。 - false: 订阅关系不一致。
    * subscriptions  **参数解释**： 订阅者列表。 **取值范围**： 不涉及。
    * diagnosisNodeReportList  **参数解释**： 诊断节点报告列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'groupName' => 'setGroupName',
            'consumerNums' => 'setConsumerNums',
            'status' => 'setStatus',
            'creatAt' => 'setCreatAt',
            'abnormalItemSum' => 'setAbnormalItemSum',
            'faultedNodeSum' => 'setFaultedNodeSum',
            'online' => 'setOnline',
            'messageAccumulation' => 'setMessageAccumulation',
            'subscriptionConsistency' => 'setSubscriptionConsistency',
            'subscriptions' => 'setSubscriptions',
            'diagnosisNodeReportList' => 'setDiagnosisNodeReportList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释**： 报告ID。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    * consumerNums  **参数解释**： 消费者数量。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * creatAt  **参数解释**： 生成时间。 **取值范围**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项数量。 **取值范围**： 不涉及。
    * faultedNodeSum  **参数解释**： 异常节点数量。 **取值范围**： 不涉及。
    * online  **参数解释**： 是否在线。 **取值范围**： - true: 在线。 - false: 不在线。
    * messageAccumulation  **参数解释**： 消息堆积数。 **取值范围**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅一致性。 **取值范围**： - true: 订阅关系一致。 - false: 订阅关系不一致。
    * subscriptions  **参数解释**： 订阅者列表。 **取值范围**： 不涉及。
    * diagnosisNodeReportList  **参数解释**： 诊断节点报告列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'groupName' => 'getGroupName',
            'consumerNums' => 'getConsumerNums',
            'status' => 'getStatus',
            'creatAt' => 'getCreatAt',
            'abnormalItemSum' => 'getAbnormalItemSum',
            'faultedNodeSum' => 'getFaultedNodeSum',
            'online' => 'getOnline',
            'messageAccumulation' => 'getMessageAccumulation',
            'subscriptionConsistency' => 'getSubscriptionConsistency',
            'subscriptions' => 'getSubscriptions',
            'diagnosisNodeReportList' => 'getDiagnosisNodeReportList'
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['consumerNums'] = isset($data['consumerNums']) ? $data['consumerNums'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['creatAt'] = isset($data['creatAt']) ? $data['creatAt'] : null;
        $this->container['abnormalItemSum'] = isset($data['abnormalItemSum']) ? $data['abnormalItemSum'] : null;
        $this->container['faultedNodeSum'] = isset($data['faultedNodeSum']) ? $data['faultedNodeSum'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['messageAccumulation'] = isset($data['messageAccumulation']) ? $data['messageAccumulation'] : null;
        $this->container['subscriptionConsistency'] = isset($data['subscriptionConsistency']) ? $data['subscriptionConsistency'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
        $this->container['diagnosisNodeReportList'] = isset($data['diagnosisNodeReportList']) ? $data['diagnosisNodeReportList'] : null;
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
    * Gets reportId
    *  **参数解释**： 报告ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId **参数解释**： 报告ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**： 消费组名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets consumerNums
    *  **参数解释**： 消费者数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getConsumerNums()
    {
        return $this->container['consumerNums'];
    }

    /**
    * Sets consumerNums
    *
    * @param int|null $consumerNums **参数解释**： 消费者数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setConsumerNums($consumerNums)
    {
        $this->container['consumerNums'] = $consumerNums;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets creatAt
    *  **参数解释**： 生成时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreatAt()
    {
        return $this->container['creatAt'];
    }

    /**
    * Sets creatAt
    *
    * @param int|null $creatAt **参数解释**： 生成时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatAt($creatAt)
    {
        $this->container['creatAt'] = $creatAt;
        return $this;
    }

    /**
    * Gets abnormalItemSum
    *  **参数解释**： 异常项数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAbnormalItemSum()
    {
        return $this->container['abnormalItemSum'];
    }

    /**
    * Sets abnormalItemSum
    *
    * @param int|null $abnormalItemSum **参数解释**： 异常项数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAbnormalItemSum($abnormalItemSum)
    {
        $this->container['abnormalItemSum'] = $abnormalItemSum;
        return $this;
    }

    /**
    * Gets faultedNodeSum
    *  **参数解释**： 异常节点数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getFaultedNodeSum()
    {
        return $this->container['faultedNodeSum'];
    }

    /**
    * Sets faultedNodeSum
    *
    * @param int|null $faultedNodeSum **参数解释**： 异常节点数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFaultedNodeSum($faultedNodeSum)
    {
        $this->container['faultedNodeSum'] = $faultedNodeSum;
        return $this;
    }

    /**
    * Gets online
    *  **参数解释**： 是否在线。 **取值范围**： - true: 在线。 - false: 不在线。
    *
    * @return bool|null
    */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
    * Sets online
    *
    * @param bool|null $online **参数解释**： 是否在线。 **取值范围**： - true: 在线。 - false: 不在线。
    *
    * @return $this
    */
    public function setOnline($online)
    {
        $this->container['online'] = $online;
        return $this;
    }

    /**
    * Gets messageAccumulation
    *  **参数解释**： 消息堆积数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMessageAccumulation()
    {
        return $this->container['messageAccumulation'];
    }

    /**
    * Sets messageAccumulation
    *
    * @param int|null $messageAccumulation **参数解释**： 消息堆积数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMessageAccumulation($messageAccumulation)
    {
        $this->container['messageAccumulation'] = $messageAccumulation;
        return $this;
    }

    /**
    * Gets subscriptionConsistency
    *  **参数解释**： 订阅一致性。 **取值范围**： - true: 订阅关系一致。 - false: 订阅关系不一致。
    *
    * @return bool|null
    */
    public function getSubscriptionConsistency()
    {
        return $this->container['subscriptionConsistency'];
    }

    /**
    * Sets subscriptionConsistency
    *
    * @param bool|null $subscriptionConsistency **参数解释**： 订阅一致性。 **取值范围**： - true: 订阅关系一致。 - false: 订阅关系不一致。
    *
    * @return $this
    */
    public function setSubscriptionConsistency($subscriptionConsistency)
    {
        $this->container['subscriptionConsistency'] = $subscriptionConsistency;
        return $this;
    }

    /**
    * Gets subscriptions
    *  **参数解释**： 订阅者列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
    * Sets subscriptions
    *
    * @param string[]|null $subscriptions **参数解释**： 订阅者列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;
        return $this;
    }

    /**
    * Gets diagnosisNodeReportList
    *  **参数解释**： 诊断节点报告列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getDiagnosisNodeReportList()
    {
        return $this->container['diagnosisNodeReportList'];
    }

    /**
    * Sets diagnosisNodeReportList
    *
    * @param string[]|null $diagnosisNodeReportList **参数解释**： 诊断节点报告列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiagnosisNodeReportList($diagnosisNodeReportList)
    {
        $this->container['diagnosisNodeReportList'] = $diagnosisNodeReportList;
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

