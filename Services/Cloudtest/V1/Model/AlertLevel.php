<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertLevel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertChannel  告警渠道列表
    * alertGroups  告警组列表
    * alertTemplateId  告警模板ID
    * alertTimes  告警次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertChannel' => 'string[]',
            'alertGroups' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlertGroup[]',
            'alertTemplateId' => 'string',
            'alertTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertChannel  告警渠道列表
    * alertGroups  告警组列表
    * alertTemplateId  告警模板ID
    * alertTimes  告警次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertChannel' => null,
        'alertGroups' => null,
        'alertTemplateId' => null,
        'alertTimes' => 'int32'
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
    * alertChannel  告警渠道列表
    * alertGroups  告警组列表
    * alertTemplateId  告警模板ID
    * alertTimes  告警次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertChannel' => 'alert_channel',
            'alertGroups' => 'alertGroups',
            'alertTemplateId' => 'alertTemplateId',
            'alertTimes' => 'alertTimes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertChannel  告警渠道列表
    * alertGroups  告警组列表
    * alertTemplateId  告警模板ID
    * alertTimes  告警次数
    *
    * @var string[]
    */
    protected static $setters = [
            'alertChannel' => 'setAlertChannel',
            'alertGroups' => 'setAlertGroups',
            'alertTemplateId' => 'setAlertTemplateId',
            'alertTimes' => 'setAlertTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertChannel  告警渠道列表
    * alertGroups  告警组列表
    * alertTemplateId  告警模板ID
    * alertTimes  告警次数
    *
    * @var string[]
    */
    protected static $getters = [
            'alertChannel' => 'getAlertChannel',
            'alertGroups' => 'getAlertGroups',
            'alertTemplateId' => 'getAlertTemplateId',
            'alertTimes' => 'getAlertTimes'
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
        $this->container['alertChannel'] = isset($data['alertChannel']) ? $data['alertChannel'] : null;
        $this->container['alertGroups'] = isset($data['alertGroups']) ? $data['alertGroups'] : null;
        $this->container['alertTemplateId'] = isset($data['alertTemplateId']) ? $data['alertTemplateId'] : null;
        $this->container['alertTimes'] = isset($data['alertTimes']) ? $data['alertTimes'] : null;
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
    * Gets alertChannel
    *  告警渠道列表
    *
    * @return string[]|null
    */
    public function getAlertChannel()
    {
        return $this->container['alertChannel'];
    }

    /**
    * Sets alertChannel
    *
    * @param string[]|null $alertChannel 告警渠道列表
    *
    * @return $this
    */
    public function setAlertChannel($alertChannel)
    {
        $this->container['alertChannel'] = $alertChannel;
        return $this;
    }

    /**
    * Gets alertGroups
    *  告警组列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertGroup[]|null
    */
    public function getAlertGroups()
    {
        return $this->container['alertGroups'];
    }

    /**
    * Sets alertGroups
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertGroup[]|null $alertGroups 告警组列表
    *
    * @return $this
    */
    public function setAlertGroups($alertGroups)
    {
        $this->container['alertGroups'] = $alertGroups;
        return $this;
    }

    /**
    * Gets alertTemplateId
    *  告警模板ID
    *
    * @return string|null
    */
    public function getAlertTemplateId()
    {
        return $this->container['alertTemplateId'];
    }

    /**
    * Sets alertTemplateId
    *
    * @param string|null $alertTemplateId 告警模板ID
    *
    * @return $this
    */
    public function setAlertTemplateId($alertTemplateId)
    {
        $this->container['alertTemplateId'] = $alertTemplateId;
        return $this;
    }

    /**
    * Gets alertTimes
    *  告警次数
    *
    * @return int|null
    */
    public function getAlertTimes()
    {
        return $this->container['alertTimes'];
    }

    /**
    * Sets alertTimes
    *
    * @param int|null $alertTimes 告警次数
    *
    * @return $this
    */
    public function setAlertTimes($alertTimes)
    {
        $this->container['alertTimes'] = $alertTimes;
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

