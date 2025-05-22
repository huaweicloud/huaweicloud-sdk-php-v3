<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberCheckJobInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberCheckJobInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  参数解释：processed检查完成，processing检查中，failed检查失败
    * result  result
    * createdAt  参数解释：任务创建时间。
    * updatedAt  参数解释：任务更新时间
    * jobId  参数解释：任务ID。
    * checkItemTotalNum  参数解释：检查项总个数
    * checkItemFinishedNum  参数解释：已检查完成的检查项个数
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * memberId  参数解释：后端服务器ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'result' => '\HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResult',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'jobId' => 'string',
            'checkItemTotalNum' => 'int',
            'checkItemFinishedNum' => 'int',
            'listenerId' => 'string',
            'memberId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  参数解释：processed检查完成，processing检查中，failed检查失败
    * result  result
    * createdAt  参数解释：任务创建时间。
    * updatedAt  参数解释：任务更新时间
    * jobId  参数解释：任务ID。
    * checkItemTotalNum  参数解释：检查项总个数
    * checkItemFinishedNum  参数解释：已检查完成的检查项个数
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * memberId  参数解释：后端服务器ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'result' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'jobId' => null,
        'checkItemTotalNum' => 'int32',
        'checkItemFinishedNum' => 'int32',
        'listenerId' => null,
        'memberId' => null
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
    * status  参数解释：processed检查完成，processing检查中，failed检查失败
    * result  result
    * createdAt  参数解释：任务创建时间。
    * updatedAt  参数解释：任务更新时间
    * jobId  参数解释：任务ID。
    * checkItemTotalNum  参数解释：检查项总个数
    * checkItemFinishedNum  参数解释：已检查完成的检查项个数
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * memberId  参数解释：后端服务器ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'result' => 'result',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'jobId' => 'job_id',
            'checkItemTotalNum' => 'check_item_total_num',
            'checkItemFinishedNum' => 'check_item_finished_num',
            'listenerId' => 'listener_id',
            'memberId' => 'member_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  参数解释：processed检查完成，processing检查中，failed检查失败
    * result  result
    * createdAt  参数解释：任务创建时间。
    * updatedAt  参数解释：任务更新时间
    * jobId  参数解释：任务ID。
    * checkItemTotalNum  参数解释：检查项总个数
    * checkItemFinishedNum  参数解释：已检查完成的检查项个数
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * memberId  参数解释：后端服务器ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'result' => 'setResult',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'jobId' => 'setJobId',
            'checkItemTotalNum' => 'setCheckItemTotalNum',
            'checkItemFinishedNum' => 'setCheckItemFinishedNum',
            'listenerId' => 'setListenerId',
            'memberId' => 'setMemberId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  参数解释：processed检查完成，processing检查中，failed检查失败
    * result  result
    * createdAt  参数解释：任务创建时间。
    * updatedAt  参数解释：任务更新时间
    * jobId  参数解释：任务ID。
    * checkItemTotalNum  参数解释：检查项总个数
    * checkItemFinishedNum  参数解释：已检查完成的检查项个数
    * listenerId  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    * memberId  参数解释：后端服务器ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'result' => 'getResult',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'jobId' => 'getJobId',
            'checkItemTotalNum' => 'getCheckItemTotalNum',
            'checkItemFinishedNum' => 'getCheckItemFinishedNum',
            'listenerId' => 'getListenerId',
            'memberId' => 'getMemberId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['checkItemTotalNum'] = isset($data['checkItemTotalNum']) ? $data['checkItemTotalNum'] : null;
        $this->container['checkItemFinishedNum'] = isset($data['checkItemFinishedNum']) ? $data['checkItemFinishedNum'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
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
    * Gets status
    *  参数解释：processed检查完成，processing检查中，failed检查失败
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
    * @param string|null $status 参数解释：processed检查完成，processing检查中，failed检查失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResult|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResult|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets createdAt
    *  参数解释：任务创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 参数解释：任务创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  参数解释：任务更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 参数解释：任务更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets jobId
    *  参数解释：任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 参数解释：任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets checkItemTotalNum
    *  参数解释：检查项总个数
    *
    * @return int|null
    */
    public function getCheckItemTotalNum()
    {
        return $this->container['checkItemTotalNum'];
    }

    /**
    * Sets checkItemTotalNum
    *
    * @param int|null $checkItemTotalNum 参数解释：检查项总个数
    *
    * @return $this
    */
    public function setCheckItemTotalNum($checkItemTotalNum)
    {
        $this->container['checkItemTotalNum'] = $checkItemTotalNum;
        return $this;
    }

    /**
    * Gets checkItemFinishedNum
    *  参数解释：已检查完成的检查项个数
    *
    * @return int|null
    */
    public function getCheckItemFinishedNum()
    {
        return $this->container['checkItemFinishedNum'];
    }

    /**
    * Sets checkItemFinishedNum
    *
    * @param int|null $checkItemFinishedNum 参数解释：已检查完成的检查项个数
    *
    * @return $this
    */
    public function setCheckItemFinishedNum($checkItemFinishedNum)
    {
        $this->container['checkItemFinishedNum'] = $checkItemFinishedNum;
        return $this;
    }

    /**
    * Gets listenerId
    *  参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    *
    * @return string|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string|null $listenerId 参数解释：后端服务器所关联的监听器，查询在该监听器下后端服务器的状态。
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets memberId
    *  参数解释：后端服务器ID。
    *
    * @return string|null
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string|null $memberId 参数解释：后端服务器ID。
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
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

