<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventStreamingSink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventStreamingSink';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sinkFg  sinkFg
    * sinkKafka  sinkKafka
    * sinkObs  sinkObs
    * name  事件目标类型名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sinkFg' => '\HuaweiCloud\SDK\Eg\V1\Model\SinkFGParameters',
            'sinkKafka' => '\HuaweiCloud\SDK\Eg\V1\Model\SinkKafkaParameters',
            'sinkObs' => '\HuaweiCloud\SDK\Eg\V1\Model\SinkObsParameters',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sinkFg  sinkFg
    * sinkKafka  sinkKafka
    * sinkObs  sinkObs
    * name  事件目标类型名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sinkFg' => null,
        'sinkKafka' => null,
        'sinkObs' => null,
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
    * sinkFg  sinkFg
    * sinkKafka  sinkKafka
    * sinkObs  sinkObs
    * name  事件目标类型名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sinkFg' => 'sink_fg',
            'sinkKafka' => 'sink_kafka',
            'sinkObs' => 'sink_obs',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sinkFg  sinkFg
    * sinkKafka  sinkKafka
    * sinkObs  sinkObs
    * name  事件目标类型名称
    *
    * @var string[]
    */
    protected static $setters = [
            'sinkFg' => 'setSinkFg',
            'sinkKafka' => 'setSinkKafka',
            'sinkObs' => 'setSinkObs',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sinkFg  sinkFg
    * sinkKafka  sinkKafka
    * sinkObs  sinkObs
    * name  事件目标类型名称
    *
    * @var string[]
    */
    protected static $getters = [
            'sinkFg' => 'getSinkFg',
            'sinkKafka' => 'getSinkKafka',
            'sinkObs' => 'getSinkObs',
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
    const NAME_HC_FUNCTION_GRAPH = 'HC.FunctionGraph';
    const NAME_HC_KAFKA = 'HC.Kafka';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_HC_FUNCTION_GRAPH,
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
        $this->container['sinkFg'] = isset($data['sinkFg']) ? $data['sinkFg'] : null;
        $this->container['sinkKafka'] = isset($data['sinkKafka']) ? $data['sinkKafka'] : null;
        $this->container['sinkObs'] = isset($data['sinkObs']) ? $data['sinkObs'] : null;
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
    * Gets sinkFg
    *  sinkFg
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SinkFGParameters|null
    */
    public function getSinkFg()
    {
        return $this->container['sinkFg'];
    }

    /**
    * Sets sinkFg
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SinkFGParameters|null $sinkFg sinkFg
    *
    * @return $this
    */
    public function setSinkFg($sinkFg)
    {
        $this->container['sinkFg'] = $sinkFg;
        return $this;
    }

    /**
    * Gets sinkKafka
    *  sinkKafka
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SinkKafkaParameters|null
    */
    public function getSinkKafka()
    {
        return $this->container['sinkKafka'];
    }

    /**
    * Sets sinkKafka
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SinkKafkaParameters|null $sinkKafka sinkKafka
    *
    * @return $this
    */
    public function setSinkKafka($sinkKafka)
    {
        $this->container['sinkKafka'] = $sinkKafka;
        return $this;
    }

    /**
    * Gets sinkObs
    *  sinkObs
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SinkObsParameters|null
    */
    public function getSinkObs()
    {
        return $this->container['sinkObs'];
    }

    /**
    * Sets sinkObs
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SinkObsParameters|null $sinkObs sinkObs
    *
    * @return $this
    */
    public function setSinkObs($sinkObs)
    {
        $this->container['sinkObs'] = $sinkObs;
        return $this;
    }

    /**
    * Gets name
    *  事件目标类型名称
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
    * @param string|null $name 事件目标类型名称
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

