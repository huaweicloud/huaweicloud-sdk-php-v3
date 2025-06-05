<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventStreamingSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventStreamingSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceKafka  sourceKafka
    * sourceMobileRocketmq  sourceMobileRocketmq
    * sourceCommunityRocketmq  sourceCommunityRocketmq
    * sourceDmsRocketmq  sourceDmsRocketmq
    * name  事件源类型名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceKafka' => '\HuaweiCloud\SDK\Eg\V1\Model\SourceKafkaMQParameters',
            'sourceMobileRocketmq' => '\HuaweiCloud\SDK\Eg\V1\Model\SourceMobileMQParameters',
            'sourceCommunityRocketmq' => '\HuaweiCloud\SDK\Eg\V1\Model\SourceCommunityMQParameters',
            'sourceDmsRocketmq' => '\HuaweiCloud\SDK\Eg\V1\Model\SourceDMSMQParameters',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceKafka  sourceKafka
    * sourceMobileRocketmq  sourceMobileRocketmq
    * sourceCommunityRocketmq  sourceCommunityRocketmq
    * sourceDmsRocketmq  sourceDmsRocketmq
    * name  事件源类型名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceKafka' => null,
        'sourceMobileRocketmq' => null,
        'sourceCommunityRocketmq' => null,
        'sourceDmsRocketmq' => null,
        'name' => null
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
    * sourceKafka  sourceKafka
    * sourceMobileRocketmq  sourceMobileRocketmq
    * sourceCommunityRocketmq  sourceCommunityRocketmq
    * sourceDmsRocketmq  sourceDmsRocketmq
    * name  事件源类型名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceKafka' => 'source_kafka',
            'sourceMobileRocketmq' => 'source_mobile_rocketmq',
            'sourceCommunityRocketmq' => 'source_community_rocketmq',
            'sourceDmsRocketmq' => 'source_dms_rocketmq',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceKafka  sourceKafka
    * sourceMobileRocketmq  sourceMobileRocketmq
    * sourceCommunityRocketmq  sourceCommunityRocketmq
    * sourceDmsRocketmq  sourceDmsRocketmq
    * name  事件源类型名称
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceKafka' => 'setSourceKafka',
            'sourceMobileRocketmq' => 'setSourceMobileRocketmq',
            'sourceCommunityRocketmq' => 'setSourceCommunityRocketmq',
            'sourceDmsRocketmq' => 'setSourceDmsRocketmq',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceKafka  sourceKafka
    * sourceMobileRocketmq  sourceMobileRocketmq
    * sourceCommunityRocketmq  sourceCommunityRocketmq
    * sourceDmsRocketmq  sourceDmsRocketmq
    * name  事件源类型名称
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceKafka' => 'getSourceKafka',
            'sourceMobileRocketmq' => 'getSourceMobileRocketmq',
            'sourceCommunityRocketmq' => 'getSourceCommunityRocketmq',
            'sourceDmsRocketmq' => 'getSourceDmsRocketmq',
            'name' => 'getName'
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
    const NAME_HC_DMS_ROCKETMQ = 'HC.DMS_ROCKETMQ';
    const NAME_HC_COMMUNITY_ROCKETMQ = 'HC.COMMUNITY_ROCKETMQ';
    const NAME_HC_KAFKA = 'HC.Kafka';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_HC_DMS_ROCKETMQ,
            self::NAME_HC_COMMUNITY_ROCKETMQ,
            self::NAME_HC_KAFKA,
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
        $this->container['sourceKafka'] = isset($data['sourceKafka']) ? $data['sourceKafka'] : null;
        $this->container['sourceMobileRocketmq'] = isset($data['sourceMobileRocketmq']) ? $data['sourceMobileRocketmq'] : null;
        $this->container['sourceCommunityRocketmq'] = isset($data['sourceCommunityRocketmq']) ? $data['sourceCommunityRocketmq'] : null;
        $this->container['sourceDmsRocketmq'] = isset($data['sourceDmsRocketmq']) ? $data['sourceDmsRocketmq'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNameAllowableValues();
                if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
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
    * Gets sourceKafka
    *  sourceKafka
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SourceKafkaMQParameters|null
    */
    public function getSourceKafka()
    {
        return $this->container['sourceKafka'];
    }

    /**
    * Sets sourceKafka
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SourceKafkaMQParameters|null $sourceKafka sourceKafka
    *
    * @return $this
    */
    public function setSourceKafka($sourceKafka)
    {
        $this->container['sourceKafka'] = $sourceKafka;
        return $this;
    }

    /**
    * Gets sourceMobileRocketmq
    *  sourceMobileRocketmq
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SourceMobileMQParameters|null
    */
    public function getSourceMobileRocketmq()
    {
        return $this->container['sourceMobileRocketmq'];
    }

    /**
    * Sets sourceMobileRocketmq
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SourceMobileMQParameters|null $sourceMobileRocketmq sourceMobileRocketmq
    *
    * @return $this
    */
    public function setSourceMobileRocketmq($sourceMobileRocketmq)
    {
        $this->container['sourceMobileRocketmq'] = $sourceMobileRocketmq;
        return $this;
    }

    /**
    * Gets sourceCommunityRocketmq
    *  sourceCommunityRocketmq
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SourceCommunityMQParameters|null
    */
    public function getSourceCommunityRocketmq()
    {
        return $this->container['sourceCommunityRocketmq'];
    }

    /**
    * Sets sourceCommunityRocketmq
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SourceCommunityMQParameters|null $sourceCommunityRocketmq sourceCommunityRocketmq
    *
    * @return $this
    */
    public function setSourceCommunityRocketmq($sourceCommunityRocketmq)
    {
        $this->container['sourceCommunityRocketmq'] = $sourceCommunityRocketmq;
        return $this;
    }

    /**
    * Gets sourceDmsRocketmq
    *  sourceDmsRocketmq
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SourceDMSMQParameters|null
    */
    public function getSourceDmsRocketmq()
    {
        return $this->container['sourceDmsRocketmq'];
    }

    /**
    * Sets sourceDmsRocketmq
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SourceDMSMQParameters|null $sourceDmsRocketmq sourceDmsRocketmq
    *
    * @return $this
    */
    public function setSourceDmsRocketmq($sourceDmsRocketmq)
    {
        $this->container['sourceDmsRocketmq'] = $sourceDmsRocketmq;
        return $this;
    }

    /**
    * Gets name
    *  事件源类型名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 事件源类型名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

