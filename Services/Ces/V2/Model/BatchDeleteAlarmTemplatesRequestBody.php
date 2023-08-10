<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteAlarmTemplatesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteAlarmTemplatesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateIds  需要批量删除的告警模板的ID列表。未关联告警规则的模板可以批量删除多个；已关联告警规则的告警模板模板单次只允许删除一个，若同时删除多个已关联告警规则的告警模板，将返回异常
    * deleteAssociateAlarm  如果告警模板关联了告警规则，是否级联删除告警规则，true代表级联删除，false代表只删除告警模板
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateIds' => 'string[]',
            'deleteAssociateAlarm' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateIds  需要批量删除的告警模板的ID列表。未关联告警规则的模板可以批量删除多个；已关联告警规则的告警模板模板单次只允许删除一个，若同时删除多个已关联告警规则的告警模板，将返回异常
    * deleteAssociateAlarm  如果告警模板关联了告警规则，是否级联删除告警规则，true代表级联删除，false代表只删除告警模板
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateIds' => null,
        'deleteAssociateAlarm' => null
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
    * templateIds  需要批量删除的告警模板的ID列表。未关联告警规则的模板可以批量删除多个；已关联告警规则的告警模板模板单次只允许删除一个，若同时删除多个已关联告警规则的告警模板，将返回异常
    * deleteAssociateAlarm  如果告警模板关联了告警规则，是否级联删除告警规则，true代表级联删除，false代表只删除告警模板
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateIds' => 'template_ids',
            'deleteAssociateAlarm' => 'delete_associate_alarm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateIds  需要批量删除的告警模板的ID列表。未关联告警规则的模板可以批量删除多个；已关联告警规则的告警模板模板单次只允许删除一个，若同时删除多个已关联告警规则的告警模板，将返回异常
    * deleteAssociateAlarm  如果告警模板关联了告警规则，是否级联删除告警规则，true代表级联删除，false代表只删除告警模板
    *
    * @var string[]
    */
    protected static $setters = [
            'templateIds' => 'setTemplateIds',
            'deleteAssociateAlarm' => 'setDeleteAssociateAlarm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateIds  需要批量删除的告警模板的ID列表。未关联告警规则的模板可以批量删除多个；已关联告警规则的告警模板模板单次只允许删除一个，若同时删除多个已关联告警规则的告警模板，将返回异常
    * deleteAssociateAlarm  如果告警模板关联了告警规则，是否级联删除告警规则，true代表级联删除，false代表只删除告警模板
    *
    * @var string[]
    */
    protected static $getters = [
            'templateIds' => 'getTemplateIds',
            'deleteAssociateAlarm' => 'getDeleteAssociateAlarm'
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
        $this->container['templateIds'] = isset($data['templateIds']) ? $data['templateIds'] : null;
        $this->container['deleteAssociateAlarm'] = isset($data['deleteAssociateAlarm']) ? $data['deleteAssociateAlarm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateIds'] === null) {
            $invalidProperties[] = "'templateIds' can't be null";
        }
        if ($this->container['deleteAssociateAlarm'] === null) {
            $invalidProperties[] = "'deleteAssociateAlarm' can't be null";
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
    * Gets templateIds
    *  需要批量删除的告警模板的ID列表。未关联告警规则的模板可以批量删除多个；已关联告警规则的告警模板模板单次只允许删除一个，若同时删除多个已关联告警规则的告警模板，将返回异常
    *
    * @return string[]
    */
    public function getTemplateIds()
    {
        return $this->container['templateIds'];
    }

    /**
    * Sets templateIds
    *
    * @param string[] $templateIds 需要批量删除的告警模板的ID列表。未关联告警规则的模板可以批量删除多个；已关联告警规则的告警模板模板单次只允许删除一个，若同时删除多个已关联告警规则的告警模板，将返回异常
    *
    * @return $this
    */
    public function setTemplateIds($templateIds)
    {
        $this->container['templateIds'] = $templateIds;
        return $this;
    }

    /**
    * Gets deleteAssociateAlarm
    *  如果告警模板关联了告警规则，是否级联删除告警规则，true代表级联删除，false代表只删除告警模板
    *
    * @return bool
    */
    public function getDeleteAssociateAlarm()
    {
        return $this->container['deleteAssociateAlarm'];
    }

    /**
    * Sets deleteAssociateAlarm
    *
    * @param bool $deleteAssociateAlarm 如果告警模板关联了告警规则，是否级联删除告警规则，true代表级联删除，false代表只删除告警模板
    *
    * @return $this
    */
    public function setDeleteAssociateAlarm($deleteAssociateAlarm)
    {
        $this->container['deleteAssociateAlarm'] = $deleteAssociateAlarm;
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

