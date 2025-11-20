<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportTaskInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportTaskInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**: 导出的类型 **约束限制**: 不涉及 **取值范围**: - operational-report：月度运营报告  **默认取值**: 不涉及
    * operationalReportData  operationalReportData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'operationalReportData' => '\HuaweiCloud\SDK\Hss\V5\Model\ExportTaskInfoRequestBodyOperationalReportData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**: 导出的类型 **约束限制**: 不涉及 **取值范围**: - operational-report：月度运营报告  **默认取值**: 不涉及
    * operationalReportData  operationalReportData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'operationalReportData' => null
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
    * type  **参数解释**: 导出的类型 **约束限制**: 不涉及 **取值范围**: - operational-report：月度运营报告  **默认取值**: 不涉及
    * operationalReportData  operationalReportData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'operationalReportData' => 'operational_report_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**: 导出的类型 **约束限制**: 不涉及 **取值范围**: - operational-report：月度运营报告  **默认取值**: 不涉及
    * operationalReportData  operationalReportData
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'operationalReportData' => 'setOperationalReportData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**: 导出的类型 **约束限制**: 不涉及 **取值范围**: - operational-report：月度运营报告  **默认取值**: 不涉及
    * operationalReportData  operationalReportData
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'operationalReportData' => 'getOperationalReportData'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['operationalReportData'] = isset($data['operationalReportData']) ? $data['operationalReportData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!preg_match("/^operational-report$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^operational-report$/.";
            }
        if ($this->container['operationalReportData'] === null) {
            $invalidProperties[] = "'operationalReportData' can't be null";
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
    * Gets type
    *  **参数解释**: 导出的类型 **约束限制**: 不涉及 **取值范围**: - operational-report：月度运营报告  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**: 导出的类型 **约束限制**: 不涉及 **取值范围**: - operational-report：月度运营报告  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets operationalReportData
    *  operationalReportData
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ExportTaskInfoRequestBodyOperationalReportData
    */
    public function getOperationalReportData()
    {
        return $this->container['operationalReportData'];
    }

    /**
    * Sets operationalReportData
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ExportTaskInfoRequestBodyOperationalReportData $operationalReportData operationalReportData
    *
    * @return $this
    */
    public function setOperationalReportData($operationalReportData)
    {
        $this->container['operationalReportData'] = $operationalReportData;
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

