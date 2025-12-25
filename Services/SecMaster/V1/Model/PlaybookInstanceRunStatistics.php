<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlaybookInstanceRunStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlaybookInstanceRunStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * playbookInstanceId  剧本实例ID
    * playbookInstanceName  剧本实例名称
    * playbookInstanceRunTime  剧本实例运行时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'playbookInstanceId' => 'string',
            'playbookInstanceName' => 'string',
            'playbookInstanceRunTime' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * playbookInstanceId  剧本实例ID
    * playbookInstanceName  剧本实例名称
    * playbookInstanceRunTime  剧本实例运行时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'playbookInstanceId' => null,
        'playbookInstanceName' => null,
        'playbookInstanceRunTime' => 'number'
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
    * playbookInstanceId  剧本实例ID
    * playbookInstanceName  剧本实例名称
    * playbookInstanceRunTime  剧本实例运行时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'playbookInstanceId' => 'playbook_instance_id',
            'playbookInstanceName' => 'playbook_instance_name',
            'playbookInstanceRunTime' => 'playbook_instance_run_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * playbookInstanceId  剧本实例ID
    * playbookInstanceName  剧本实例名称
    * playbookInstanceRunTime  剧本实例运行时间
    *
    * @var string[]
    */
    protected static $setters = [
            'playbookInstanceId' => 'setPlaybookInstanceId',
            'playbookInstanceName' => 'setPlaybookInstanceName',
            'playbookInstanceRunTime' => 'setPlaybookInstanceRunTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * playbookInstanceId  剧本实例ID
    * playbookInstanceName  剧本实例名称
    * playbookInstanceRunTime  剧本实例运行时间
    *
    * @var string[]
    */
    protected static $getters = [
            'playbookInstanceId' => 'getPlaybookInstanceId',
            'playbookInstanceName' => 'getPlaybookInstanceName',
            'playbookInstanceRunTime' => 'getPlaybookInstanceRunTime'
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
        $this->container['playbookInstanceId'] = isset($data['playbookInstanceId']) ? $data['playbookInstanceId'] : null;
        $this->container['playbookInstanceName'] = isset($data['playbookInstanceName']) ? $data['playbookInstanceName'] : null;
        $this->container['playbookInstanceRunTime'] = isset($data['playbookInstanceRunTime']) ? $data['playbookInstanceRunTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['playbookInstanceId']) && (mb_strlen($this->container['playbookInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookInstanceId']) && (mb_strlen($this->container['playbookInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'playbookInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['playbookInstanceName']) && (mb_strlen($this->container['playbookInstanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookInstanceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookInstanceName']) && (mb_strlen($this->container['playbookInstanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'playbookInstanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['playbookInstanceRunTime']) && ($this->container['playbookInstanceRunTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'playbookInstanceRunTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['playbookInstanceRunTime']) && ($this->container['playbookInstanceRunTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'playbookInstanceRunTime', must be bigger than or equal to 0.";
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
    * Gets playbookInstanceId
    *  剧本实例ID
    *
    * @return string|null
    */
    public function getPlaybookInstanceId()
    {
        return $this->container['playbookInstanceId'];
    }

    /**
    * Sets playbookInstanceId
    *
    * @param string|null $playbookInstanceId 剧本实例ID
    *
    * @return $this
    */
    public function setPlaybookInstanceId($playbookInstanceId)
    {
        $this->container['playbookInstanceId'] = $playbookInstanceId;
        return $this;
    }

    /**
    * Gets playbookInstanceName
    *  剧本实例名称
    *
    * @return string|null
    */
    public function getPlaybookInstanceName()
    {
        return $this->container['playbookInstanceName'];
    }

    /**
    * Sets playbookInstanceName
    *
    * @param string|null $playbookInstanceName 剧本实例名称
    *
    * @return $this
    */
    public function setPlaybookInstanceName($playbookInstanceName)
    {
        $this->container['playbookInstanceName'] = $playbookInstanceName;
        return $this;
    }

    /**
    * Gets playbookInstanceRunTime
    *  剧本实例运行时间
    *
    * @return float|null
    */
    public function getPlaybookInstanceRunTime()
    {
        return $this->container['playbookInstanceRunTime'];
    }

    /**
    * Sets playbookInstanceRunTime
    *
    * @param float|null $playbookInstanceRunTime 剧本实例运行时间
    *
    * @return $this
    */
    public function setPlaybookInstanceRunTime($playbookInstanceRunTime)
    {
        $this->container['playbookInstanceRunTime'] = $playbookInstanceRunTime;
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

