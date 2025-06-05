<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionTarget implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionTarget';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  订阅目标ID，需保证全局唯一，由小写字母、数字、中划线组成，必须字母或数字开头。 更新订阅场景时，指定ID的订阅目标存在时则进行更新，否则进行创建； 创建订阅目标场景时，指定ID作为待创建的订阅目标对象ID，未指定时由系统自动生成。 更新订阅目标时，此字段忽略；
    * name  订阅的事件目标名称
    * providerType  订阅的事件目标的提供方类型
    * connectionId  订阅的事件目标使用的目标链接ID
    * detail  订阅的事件目标参数列表，该字段序列化后总长度不超过1024字节，函数(urn、invoke_type、agency_name)、函数流（workflow_id、agency_name）、webhook（url）订阅目标必填，其中函数、函数流委托名称必填
    * kafkaDetail  kafkaDetail
    * smnDetail  smnDetail
    * egDetail  egDetail
    * apigwDetail  apigwDetail
    * retryTimes  重试次数
    * transform  transform
    * deadLetterQueue  deadLetterQueue
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'providerType' => 'string',
            'connectionId' => 'string',
            'detail' => 'object',
            'kafkaDetail' => '\HuaweiCloud\SDK\Eg\V1\Model\KafkaTargetDetail',
            'smnDetail' => '\HuaweiCloud\SDK\Eg\V1\Model\SmnTargetDetail',
            'egDetail' => '\HuaweiCloud\SDK\Eg\V1\Model\EgTargetDetail',
            'apigwDetail' => '\HuaweiCloud\SDK\Eg\V1\Model\ApigwTargetDetail',
            'retryTimes' => 'int',
            'transform' => '\HuaweiCloud\SDK\Eg\V1\Model\TransForm',
            'deadLetterQueue' => '\HuaweiCloud\SDK\Eg\V1\Model\DeadLetterQueue'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  订阅目标ID，需保证全局唯一，由小写字母、数字、中划线组成，必须字母或数字开头。 更新订阅场景时，指定ID的订阅目标存在时则进行更新，否则进行创建； 创建订阅目标场景时，指定ID作为待创建的订阅目标对象ID，未指定时由系统自动生成。 更新订阅目标时，此字段忽略；
    * name  订阅的事件目标名称
    * providerType  订阅的事件目标的提供方类型
    * connectionId  订阅的事件目标使用的目标链接ID
    * detail  订阅的事件目标参数列表，该字段序列化后总长度不超过1024字节，函数(urn、invoke_type、agency_name)、函数流（workflow_id、agency_name）、webhook（url）订阅目标必填，其中函数、函数流委托名称必填
    * kafkaDetail  kafkaDetail
    * smnDetail  smnDetail
    * egDetail  egDetail
    * apigwDetail  apigwDetail
    * retryTimes  重试次数
    * transform  transform
    * deadLetterQueue  deadLetterQueue
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'providerType' => null,
        'connectionId' => null,
        'detail' => null,
        'kafkaDetail' => null,
        'smnDetail' => null,
        'egDetail' => null,
        'apigwDetail' => null,
        'retryTimes' => null,
        'transform' => null,
        'deadLetterQueue' => null
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
    * id  订阅目标ID，需保证全局唯一，由小写字母、数字、中划线组成，必须字母或数字开头。 更新订阅场景时，指定ID的订阅目标存在时则进行更新，否则进行创建； 创建订阅目标场景时，指定ID作为待创建的订阅目标对象ID，未指定时由系统自动生成。 更新订阅目标时，此字段忽略；
    * name  订阅的事件目标名称
    * providerType  订阅的事件目标的提供方类型
    * connectionId  订阅的事件目标使用的目标链接ID
    * detail  订阅的事件目标参数列表，该字段序列化后总长度不超过1024字节，函数(urn、invoke_type、agency_name)、函数流（workflow_id、agency_name）、webhook（url）订阅目标必填，其中函数、函数流委托名称必填
    * kafkaDetail  kafkaDetail
    * smnDetail  smnDetail
    * egDetail  egDetail
    * apigwDetail  apigwDetail
    * retryTimes  重试次数
    * transform  transform
    * deadLetterQueue  deadLetterQueue
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'providerType' => 'provider_type',
            'connectionId' => 'connection_id',
            'detail' => 'detail',
            'kafkaDetail' => 'kafka_detail',
            'smnDetail' => 'smn_detail',
            'egDetail' => 'eg_detail',
            'apigwDetail' => 'apigw_detail',
            'retryTimes' => 'retry_times',
            'transform' => 'transform',
            'deadLetterQueue' => 'dead_letter_queue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  订阅目标ID，需保证全局唯一，由小写字母、数字、中划线组成，必须字母或数字开头。 更新订阅场景时，指定ID的订阅目标存在时则进行更新，否则进行创建； 创建订阅目标场景时，指定ID作为待创建的订阅目标对象ID，未指定时由系统自动生成。 更新订阅目标时，此字段忽略；
    * name  订阅的事件目标名称
    * providerType  订阅的事件目标的提供方类型
    * connectionId  订阅的事件目标使用的目标链接ID
    * detail  订阅的事件目标参数列表，该字段序列化后总长度不超过1024字节，函数(urn、invoke_type、agency_name)、函数流（workflow_id、agency_name）、webhook（url）订阅目标必填，其中函数、函数流委托名称必填
    * kafkaDetail  kafkaDetail
    * smnDetail  smnDetail
    * egDetail  egDetail
    * apigwDetail  apigwDetail
    * retryTimes  重试次数
    * transform  transform
    * deadLetterQueue  deadLetterQueue
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'providerType' => 'setProviderType',
            'connectionId' => 'setConnectionId',
            'detail' => 'setDetail',
            'kafkaDetail' => 'setKafkaDetail',
            'smnDetail' => 'setSmnDetail',
            'egDetail' => 'setEgDetail',
            'apigwDetail' => 'setApigwDetail',
            'retryTimes' => 'setRetryTimes',
            'transform' => 'setTransform',
            'deadLetterQueue' => 'setDeadLetterQueue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  订阅目标ID，需保证全局唯一，由小写字母、数字、中划线组成，必须字母或数字开头。 更新订阅场景时，指定ID的订阅目标存在时则进行更新，否则进行创建； 创建订阅目标场景时，指定ID作为待创建的订阅目标对象ID，未指定时由系统自动生成。 更新订阅目标时，此字段忽略；
    * name  订阅的事件目标名称
    * providerType  订阅的事件目标的提供方类型
    * connectionId  订阅的事件目标使用的目标链接ID
    * detail  订阅的事件目标参数列表，该字段序列化后总长度不超过1024字节，函数(urn、invoke_type、agency_name)、函数流（workflow_id、agency_name）、webhook（url）订阅目标必填，其中函数、函数流委托名称必填
    * kafkaDetail  kafkaDetail
    * smnDetail  smnDetail
    * egDetail  egDetail
    * apigwDetail  apigwDetail
    * retryTimes  重试次数
    * transform  transform
    * deadLetterQueue  deadLetterQueue
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'providerType' => 'getProviderType',
            'connectionId' => 'getConnectionId',
            'detail' => 'getDetail',
            'kafkaDetail' => 'getKafkaDetail',
            'smnDetail' => 'getSmnDetail',
            'egDetail' => 'getEgDetail',
            'apigwDetail' => 'getApigwDetail',
            'retryTimes' => 'getRetryTimes',
            'transform' => 'getTransform',
            'deadLetterQueue' => 'getDeadLetterQueue'
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
    const PROVIDER_TYPE_CUSTOM = 'CUSTOM';
    const PROVIDER_TYPE_OFFICIAL = 'OFFICIAL';
    const PROVIDER_TYPE_APIGW = 'APIGW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderTypeAllowableValues()
    {
        return [
            self::PROVIDER_TYPE_CUSTOM,
            self::PROVIDER_TYPE_OFFICIAL,
            self::PROVIDER_TYPE_APIGW,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['kafkaDetail'] = isset($data['kafkaDetail']) ? $data['kafkaDetail'] : null;
        $this->container['smnDetail'] = isset($data['smnDetail']) ? $data['smnDetail'] : null;
        $this->container['egDetail'] = isset($data['egDetail']) ? $data['egDetail'] : null;
        $this->container['apigwDetail'] = isset($data['apigwDetail']) ? $data['apigwDetail'] : null;
        $this->container['retryTimes'] = isset($data['retryTimes']) ? $data['retryTimes'] : null;
        $this->container['transform'] = isset($data['transform']) ? $data['transform'] : null;
        $this->container['deadLetterQueue'] = isset($data['deadLetterQueue']) ? $data['deadLetterQueue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['providerType'] === null) {
            $invalidProperties[] = "'providerType' can't be null";
        }
            $allowedValues = $this->getProviderTypeAllowableValues();
                if (!is_null($this->container['providerType']) && !in_array($this->container['providerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['connectionId']) && (mb_strlen($this->container['connectionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['transform'] === null) {
            $invalidProperties[] = "'transform' can't be null";
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
    * Gets id
    *  订阅目标ID，需保证全局唯一，由小写字母、数字、中划线组成，必须字母或数字开头。 更新订阅场景时，指定ID的订阅目标存在时则进行更新，否则进行创建； 创建订阅目标场景时，指定ID作为待创建的订阅目标对象ID，未指定时由系统自动生成。 更新订阅目标时，此字段忽略；
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
    * @param string|null $id 订阅目标ID，需保证全局唯一，由小写字母、数字、中划线组成，必须字母或数字开头。 更新订阅场景时，指定ID的订阅目标存在时则进行更新，否则进行创建； 创建订阅目标场景时，指定ID作为待创建的订阅目标对象ID，未指定时由系统自动生成。 更新订阅目标时，此字段忽略；
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  订阅的事件目标名称
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
    * @param string $name 订阅的事件目标名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets providerType
    *  订阅的事件目标的提供方类型
    *
    * @return string
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param string $providerType 订阅的事件目标的提供方类型
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets connectionId
    *  订阅的事件目标使用的目标链接ID
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 订阅的事件目标使用的目标链接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets detail
    *  订阅的事件目标参数列表，该字段序列化后总长度不超过1024字节，函数(urn、invoke_type、agency_name)、函数流（workflow_id、agency_name）、webhook（url）订阅目标必填，其中函数、函数流委托名称必填
    *
    * @return object|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param object|null $detail 订阅的事件目标参数列表，该字段序列化后总长度不超过1024字节，函数(urn、invoke_type、agency_name)、函数流（workflow_id、agency_name）、webhook（url）订阅目标必填，其中函数、函数流委托名称必填
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets kafkaDetail
    *  kafkaDetail
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\KafkaTargetDetail|null
    */
    public function getKafkaDetail()
    {
        return $this->container['kafkaDetail'];
    }

    /**
    * Sets kafkaDetail
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\KafkaTargetDetail|null $kafkaDetail kafkaDetail
    *
    * @return $this
    */
    public function setKafkaDetail($kafkaDetail)
    {
        $this->container['kafkaDetail'] = $kafkaDetail;
        return $this;
    }

    /**
    * Gets smnDetail
    *  smnDetail
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SmnTargetDetail|null
    */
    public function getSmnDetail()
    {
        return $this->container['smnDetail'];
    }

    /**
    * Sets smnDetail
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SmnTargetDetail|null $smnDetail smnDetail
    *
    * @return $this
    */
    public function setSmnDetail($smnDetail)
    {
        $this->container['smnDetail'] = $smnDetail;
        return $this;
    }

    /**
    * Gets egDetail
    *  egDetail
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\EgTargetDetail|null
    */
    public function getEgDetail()
    {
        return $this->container['egDetail'];
    }

    /**
    * Sets egDetail
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\EgTargetDetail|null $egDetail egDetail
    *
    * @return $this
    */
    public function setEgDetail($egDetail)
    {
        $this->container['egDetail'] = $egDetail;
        return $this;
    }

    /**
    * Gets apigwDetail
    *  apigwDetail
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\ApigwTargetDetail|null
    */
    public function getApigwDetail()
    {
        return $this->container['apigwDetail'];
    }

    /**
    * Sets apigwDetail
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\ApigwTargetDetail|null $apigwDetail apigwDetail
    *
    * @return $this
    */
    public function setApigwDetail($apigwDetail)
    {
        $this->container['apigwDetail'] = $apigwDetail;
        return $this;
    }

    /**
    * Gets retryTimes
    *  重试次数
    *
    * @return int|null
    */
    public function getRetryTimes()
    {
        return $this->container['retryTimes'];
    }

    /**
    * Sets retryTimes
    *
    * @param int|null $retryTimes 重试次数
    *
    * @return $this
    */
    public function setRetryTimes($retryTimes)
    {
        $this->container['retryTimes'] = $retryTimes;
        return $this;
    }

    /**
    * Gets transform
    *  transform
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\TransForm
    */
    public function getTransform()
    {
        return $this->container['transform'];
    }

    /**
    * Sets transform
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\TransForm $transform transform
    *
    * @return $this
    */
    public function setTransform($transform)
    {
        $this->container['transform'] = $transform;
        return $this;
    }

    /**
    * Gets deadLetterQueue
    *  deadLetterQueue
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\DeadLetterQueue|null
    */
    public function getDeadLetterQueue()
    {
        return $this->container['deadLetterQueue'];
    }

    /**
    * Sets deadLetterQueue
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\DeadLetterQueue|null $deadLetterQueue deadLetterQueue
    *
    * @return $this
    */
    public function setDeadLetterQueue($deadLetterQueue)
    {
        $this->container['deadLetterQueue'] = $deadLetterQueue;
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

