<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSinkTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSinkTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceType  源数据类型，目前只支持BLOB。
    * taskName  转储任务名称。
    * destinationType  转存的目标类型，当前只支持OBS。
    * obsDestinationDescriptor  obsDestinationDescriptor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceType' => 'string',
            'taskName' => 'string',
            'destinationType' => 'string',
            'obsDestinationDescriptor' => '\HuaweiCloud\SDK\Kafka\V2\Model\ObsDestinationDescriptor'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceType  源数据类型，目前只支持BLOB。
    * taskName  转储任务名称。
    * destinationType  转存的目标类型，当前只支持OBS。
    * obsDestinationDescriptor  obsDestinationDescriptor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceType' => null,
        'taskName' => null,
        'destinationType' => null,
        'obsDestinationDescriptor' => null
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
    * sourceType  源数据类型，目前只支持BLOB。
    * taskName  转储任务名称。
    * destinationType  转存的目标类型，当前只支持OBS。
    * obsDestinationDescriptor  obsDestinationDescriptor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceType' => 'source_type',
            'taskName' => 'task_name',
            'destinationType' => 'destination_type',
            'obsDestinationDescriptor' => 'obs_destination_descriptor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceType  源数据类型，目前只支持BLOB。
    * taskName  转储任务名称。
    * destinationType  转存的目标类型，当前只支持OBS。
    * obsDestinationDescriptor  obsDestinationDescriptor
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceType' => 'setSourceType',
            'taskName' => 'setTaskName',
            'destinationType' => 'setDestinationType',
            'obsDestinationDescriptor' => 'setObsDestinationDescriptor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceType  源数据类型，目前只支持BLOB。
    * taskName  转储任务名称。
    * destinationType  转存的目标类型，当前只支持OBS。
    * obsDestinationDescriptor  obsDestinationDescriptor
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceType' => 'getSourceType',
            'taskName' => 'getTaskName',
            'destinationType' => 'getDestinationType',
            'obsDestinationDescriptor' => 'getObsDestinationDescriptor'
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
    const SOURCE_TYPE_BLOB = 'BLOB';
    const DESTINATION_TYPE_OBS = 'OBS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_BLOB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDestinationTypeAllowableValues()
    {
        return [
            self::DESTINATION_TYPE_OBS,
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
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['destinationType'] = isset($data['destinationType']) ? $data['destinationType'] : null;
        $this->container['obsDestinationDescriptor'] = isset($data['obsDestinationDescriptor']) ? $data['obsDestinationDescriptor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceType'] === null) {
            $invalidProperties[] = "'sourceType' can't be null";
        }
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
        if ($this->container['destinationType'] === null) {
            $invalidProperties[] = "'destinationType' can't be null";
        }
            $allowedValues = $this->getDestinationTypeAllowableValues();
                if (!is_null($this->container['destinationType']) && !in_array($this->container['destinationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'destinationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['obsDestinationDescriptor'] === null) {
            $invalidProperties[] = "'obsDestinationDescriptor' can't be null";
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
    * Gets sourceType
    *  源数据类型，目前只支持BLOB。
    *
    * @return string
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string $sourceType 源数据类型，目前只支持BLOB。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets taskName
    *  转储任务名称。
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName 转储任务名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets destinationType
    *  转存的目标类型，当前只支持OBS。
    *
    * @return string
    */
    public function getDestinationType()
    {
        return $this->container['destinationType'];
    }

    /**
    * Sets destinationType
    *
    * @param string $destinationType 转存的目标类型，当前只支持OBS。
    *
    * @return $this
    */
    public function setDestinationType($destinationType)
    {
        $this->container['destinationType'] = $destinationType;
        return $this;
    }

    /**
    * Gets obsDestinationDescriptor
    *  obsDestinationDescriptor
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ObsDestinationDescriptor
    */
    public function getObsDestinationDescriptor()
    {
        return $this->container['obsDestinationDescriptor'];
    }

    /**
    * Sets obsDestinationDescriptor
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ObsDestinationDescriptor $obsDestinationDescriptor obsDestinationDescriptor
    *
    * @return $this
    */
    public function setObsDestinationDescriptor($obsDestinationDescriptor)
    {
        $this->container['obsDestinationDescriptor'] = $obsDestinationDescriptor;
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

