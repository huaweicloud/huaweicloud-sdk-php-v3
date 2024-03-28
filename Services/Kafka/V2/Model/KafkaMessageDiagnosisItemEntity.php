<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaMessageDiagnosisItemEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaMessageDiagnosisItemEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  诊断项名称
    * result  诊断结果
    * causeIds  诊断异常原因列表
    * adviceIds  诊断异常建议列表
    * partitions  诊断异常受影响的分区列表
    * failedPartitions  诊断失败的分区列表
    * brokerIds  诊断异常受影响的broker列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'result' => 'string',
            'causeIds' => '\HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisConclusionEntity[]',
            'adviceIds' => '\HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisConclusionEntity[]',
            'partitions' => 'int[]',
            'failedPartitions' => 'int[]',
            'brokerIds' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  诊断项名称
    * result  诊断结果
    * causeIds  诊断异常原因列表
    * adviceIds  诊断异常建议列表
    * partitions  诊断异常受影响的分区列表
    * failedPartitions  诊断失败的分区列表
    * brokerIds  诊断异常受影响的broker列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'result' => null,
        'causeIds' => null,
        'adviceIds' => null,
        'partitions' => 'int32',
        'failedPartitions' => 'int32',
        'brokerIds' => 'int32'
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
    * name  诊断项名称
    * result  诊断结果
    * causeIds  诊断异常原因列表
    * adviceIds  诊断异常建议列表
    * partitions  诊断异常受影响的分区列表
    * failedPartitions  诊断失败的分区列表
    * brokerIds  诊断异常受影响的broker列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'result' => 'result',
            'causeIds' => 'cause_ids',
            'adviceIds' => 'advice_ids',
            'partitions' => 'partitions',
            'failedPartitions' => 'failed_partitions',
            'brokerIds' => 'broker_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  诊断项名称
    * result  诊断结果
    * causeIds  诊断异常原因列表
    * adviceIds  诊断异常建议列表
    * partitions  诊断异常受影响的分区列表
    * failedPartitions  诊断失败的分区列表
    * brokerIds  诊断异常受影响的broker列表
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'result' => 'setResult',
            'causeIds' => 'setCauseIds',
            'adviceIds' => 'setAdviceIds',
            'partitions' => 'setPartitions',
            'failedPartitions' => 'setFailedPartitions',
            'brokerIds' => 'setBrokerIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  诊断项名称
    * result  诊断结果
    * causeIds  诊断异常原因列表
    * adviceIds  诊断异常建议列表
    * partitions  诊断异常受影响的分区列表
    * failedPartitions  诊断失败的分区列表
    * brokerIds  诊断异常受影响的broker列表
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'result' => 'getResult',
            'causeIds' => 'getCauseIds',
            'adviceIds' => 'getAdviceIds',
            'partitions' => 'getPartitions',
            'failedPartitions' => 'getFailedPartitions',
            'brokerIds' => 'getBrokerIds'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['causeIds'] = isset($data['causeIds']) ? $data['causeIds'] : null;
        $this->container['adviceIds'] = isset($data['adviceIds']) ? $data['adviceIds'] : null;
        $this->container['partitions'] = isset($data['partitions']) ? $data['partitions'] : null;
        $this->container['failedPartitions'] = isset($data['failedPartitions']) ? $data['failedPartitions'] : null;
        $this->container['brokerIds'] = isset($data['brokerIds']) ? $data['brokerIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
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
    * Gets name
    *  诊断项名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 诊断项名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets result
    *  诊断结果
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 诊断结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets causeIds
    *  诊断异常原因列表
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisConclusionEntity[]|null
    */
    public function getCauseIds()
    {
        return $this->container['causeIds'];
    }

    /**
    * Sets causeIds
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisConclusionEntity[]|null $causeIds 诊断异常原因列表
    *
    * @return $this
    */
    public function setCauseIds($causeIds)
    {
        $this->container['causeIds'] = $causeIds;
        return $this;
    }

    /**
    * Gets adviceIds
    *  诊断异常建议列表
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisConclusionEntity[]|null
    */
    public function getAdviceIds()
    {
        return $this->container['adviceIds'];
    }

    /**
    * Sets adviceIds
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\KafkaMessageDiagnosisConclusionEntity[]|null $adviceIds 诊断异常建议列表
    *
    * @return $this
    */
    public function setAdviceIds($adviceIds)
    {
        $this->container['adviceIds'] = $adviceIds;
        return $this;
    }

    /**
    * Gets partitions
    *  诊断异常受影响的分区列表
    *
    * @return int[]|null
    */
    public function getPartitions()
    {
        return $this->container['partitions'];
    }

    /**
    * Sets partitions
    *
    * @param int[]|null $partitions 诊断异常受影响的分区列表
    *
    * @return $this
    */
    public function setPartitions($partitions)
    {
        $this->container['partitions'] = $partitions;
        return $this;
    }

    /**
    * Gets failedPartitions
    *  诊断失败的分区列表
    *
    * @return int[]|null
    */
    public function getFailedPartitions()
    {
        return $this->container['failedPartitions'];
    }

    /**
    * Sets failedPartitions
    *
    * @param int[]|null $failedPartitions 诊断失败的分区列表
    *
    * @return $this
    */
    public function setFailedPartitions($failedPartitions)
    {
        $this->container['failedPartitions'] = $failedPartitions;
        return $this;
    }

    /**
    * Gets brokerIds
    *  诊断异常受影响的broker列表
    *
    * @return int[]|null
    */
    public function getBrokerIds()
    {
        return $this->container['brokerIds'];
    }

    /**
    * Sets brokerIds
    *
    * @param int[]|null $brokerIds 诊断异常受影响的broker列表
    *
    * @return $this
    */
    public function setBrokerIds($brokerIds)
    {
        $this->container['brokerIds'] = $brokerIds;
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

