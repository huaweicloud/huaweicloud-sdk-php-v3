<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SendSecurityReportRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SendSecurityReportRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'int',
            'reportSubId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => 'int32',
        'reportSubId' => 'int32'
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
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'reportSubId' => 'report_sub_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'reportSubId' => 'setReportSubId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    * reportSubId  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'reportSubId' => 'getReportSubId'
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['reportSubId'] = isset($data['reportSubId']) ? $data['reportSubId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reportId'] === null) {
            $invalidProperties[] = "'reportId' can't be null";
        }
            if (($this->container['reportId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reportId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['reportId'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportId', must be bigger than or equal to 0.";
            }
        if ($this->container['reportSubId'] === null) {
            $invalidProperties[] = "'reportSubId' can't be null";
        }
            if (($this->container['reportSubId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reportSubId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['reportSubId'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportSubId', must be bigger than or equal to 0.";
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
    * Gets reportId
    *  **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    *
    * @return int
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param int $reportId **参数解释**: 报告ID **取值范围**: 字符长度10-2147483647位
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets reportSubId
    *  **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @return int
    */
    public function getReportSubId()
    {
        return $this->container['reportSubId'];
    }

    /**
    * Sets reportSubId
    *
    * @param int $reportSubId **参数解释**: 报告子ID **取值范围**: 字符长度10-2147483647位
    *
    * @return $this
    */
    public function setReportSubId($reportSubId)
    {
        $this->container['reportSubId'] = $reportSubId;
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

