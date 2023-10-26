<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAlertConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAlertConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * displayName  告警群组描述。
    * topicUrn  告警群组的唯一标识。
    * warnConfig  warnConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'displayName' => 'string',
            'topicUrn' => 'string',
            'warnConfig' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\UpdateAlertConfigRequestBodyWarnConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * displayName  告警群组描述。
    * topicUrn  告警群组的唯一标识。
    * warnConfig  warnConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'displayName' => null,
        'topicUrn' => null,
        'warnConfig' => null
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
    * displayName  告警群组描述。
    * topicUrn  告警群组的唯一标识。
    * warnConfig  warnConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'displayName' => 'display_name',
            'topicUrn' => 'topic_urn',
            'warnConfig' => 'warn_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * displayName  告警群组描述。
    * topicUrn  告警群组的唯一标识。
    * warnConfig  warnConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'displayName' => 'setDisplayName',
            'topicUrn' => 'setTopicUrn',
            'warnConfig' => 'setWarnConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * displayName  告警群组描述。
    * topicUrn  告警群组的唯一标识。
    * warnConfig  warnConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'displayName' => 'getDisplayName',
            'topicUrn' => 'getTopicUrn',
            'warnConfig' => 'getWarnConfig'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['warnConfig'] = isset($data['warnConfig']) ? $data['warnConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
        if ($this->container['warnConfig'] === null) {
            $invalidProperties[] = "'warnConfig' can't be null";
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
    * Gets displayName
    *  告警群组描述。
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 告警群组描述。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  告警群组的唯一标识。
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn 告警群组的唯一标识。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets warnConfig
    *  warnConfig
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\UpdateAlertConfigRequestBodyWarnConfig
    */
    public function getWarnConfig()
    {
        return $this->container['warnConfig'];
    }

    /**
    * Sets warnConfig
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\UpdateAlertConfigRequestBodyWarnConfig $warnConfig warnConfig
    *
    * @return $this
    */
    public function setWarnConfig($warnConfig)
    {
        $this->container['warnConfig'] = $warnConfig;
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

