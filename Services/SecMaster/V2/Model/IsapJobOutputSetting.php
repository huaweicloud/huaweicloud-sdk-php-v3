<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsapJobOutputSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsapJobOutputSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertCustomProperties  映射表
    * alertDescription  告警描述
    * alertGrouping  分组标志
    * alertMapping  映射表
    * alertName  告警报名称
    * alertRemediation  告警修复建议
    * alertSeverity  alertSeverity
    * alertSuppression  抑制标志
    * alertType  告警类型映射表
    * entityExtraction  提取的实体
    * fieldMapping  字段映射
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertCustomProperties' => 'map[string,string]',
            'alertDescription' => 'string',
            'alertGrouping' => 'bool',
            'alertMapping' => 'map[string,string]',
            'alertName' => 'string',
            'alertRemediation' => 'string',
            'alertSeverity' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapAlertSeverity',
            'alertSuppression' => 'bool',
            'alertType' => 'map[string,string]',
            'entityExtraction' => 'map[string,string]',
            'fieldMapping' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertCustomProperties  映射表
    * alertDescription  告警描述
    * alertGrouping  分组标志
    * alertMapping  映射表
    * alertName  告警报名称
    * alertRemediation  告警修复建议
    * alertSeverity  alertSeverity
    * alertSuppression  抑制标志
    * alertType  告警类型映射表
    * entityExtraction  提取的实体
    * fieldMapping  字段映射
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertCustomProperties' => null,
        'alertDescription' => null,
        'alertGrouping' => null,
        'alertMapping' => null,
        'alertName' => null,
        'alertRemediation' => null,
        'alertSeverity' => null,
        'alertSuppression' => null,
        'alertType' => null,
        'entityExtraction' => null,
        'fieldMapping' => null
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
    * alertCustomProperties  映射表
    * alertDescription  告警描述
    * alertGrouping  分组标志
    * alertMapping  映射表
    * alertName  告警报名称
    * alertRemediation  告警修复建议
    * alertSeverity  alertSeverity
    * alertSuppression  抑制标志
    * alertType  告警类型映射表
    * entityExtraction  提取的实体
    * fieldMapping  字段映射
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertCustomProperties' => 'alert_custom_properties',
            'alertDescription' => 'alert_description',
            'alertGrouping' => 'alert_grouping',
            'alertMapping' => 'alert_mapping',
            'alertName' => 'alert_name',
            'alertRemediation' => 'alert_remediation',
            'alertSeverity' => 'alert_severity',
            'alertSuppression' => 'alert_suppression',
            'alertType' => 'alert_type',
            'entityExtraction' => 'entity_extraction',
            'fieldMapping' => 'field_mapping'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertCustomProperties  映射表
    * alertDescription  告警描述
    * alertGrouping  分组标志
    * alertMapping  映射表
    * alertName  告警报名称
    * alertRemediation  告警修复建议
    * alertSeverity  alertSeverity
    * alertSuppression  抑制标志
    * alertType  告警类型映射表
    * entityExtraction  提取的实体
    * fieldMapping  字段映射
    *
    * @var string[]
    */
    protected static $setters = [
            'alertCustomProperties' => 'setAlertCustomProperties',
            'alertDescription' => 'setAlertDescription',
            'alertGrouping' => 'setAlertGrouping',
            'alertMapping' => 'setAlertMapping',
            'alertName' => 'setAlertName',
            'alertRemediation' => 'setAlertRemediation',
            'alertSeverity' => 'setAlertSeverity',
            'alertSuppression' => 'setAlertSuppression',
            'alertType' => 'setAlertType',
            'entityExtraction' => 'setEntityExtraction',
            'fieldMapping' => 'setFieldMapping'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertCustomProperties  映射表
    * alertDescription  告警描述
    * alertGrouping  分组标志
    * alertMapping  映射表
    * alertName  告警报名称
    * alertRemediation  告警修复建议
    * alertSeverity  alertSeverity
    * alertSuppression  抑制标志
    * alertType  告警类型映射表
    * entityExtraction  提取的实体
    * fieldMapping  字段映射
    *
    * @var string[]
    */
    protected static $getters = [
            'alertCustomProperties' => 'getAlertCustomProperties',
            'alertDescription' => 'getAlertDescription',
            'alertGrouping' => 'getAlertGrouping',
            'alertMapping' => 'getAlertMapping',
            'alertName' => 'getAlertName',
            'alertRemediation' => 'getAlertRemediation',
            'alertSeverity' => 'getAlertSeverity',
            'alertSuppression' => 'getAlertSuppression',
            'alertType' => 'getAlertType',
            'entityExtraction' => 'getEntityExtraction',
            'fieldMapping' => 'getFieldMapping'
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
        $this->container['alertCustomProperties'] = isset($data['alertCustomProperties']) ? $data['alertCustomProperties'] : null;
        $this->container['alertDescription'] = isset($data['alertDescription']) ? $data['alertDescription'] : null;
        $this->container['alertGrouping'] = isset($data['alertGrouping']) ? $data['alertGrouping'] : null;
        $this->container['alertMapping'] = isset($data['alertMapping']) ? $data['alertMapping'] : null;
        $this->container['alertName'] = isset($data['alertName']) ? $data['alertName'] : null;
        $this->container['alertRemediation'] = isset($data['alertRemediation']) ? $data['alertRemediation'] : null;
        $this->container['alertSeverity'] = isset($data['alertSeverity']) ? $data['alertSeverity'] : null;
        $this->container['alertSuppression'] = isset($data['alertSuppression']) ? $data['alertSuppression'] : null;
        $this->container['alertType'] = isset($data['alertType']) ? $data['alertType'] : null;
        $this->container['entityExtraction'] = isset($data['entityExtraction']) ? $data['entityExtraction'] : null;
        $this->container['fieldMapping'] = isset($data['fieldMapping']) ? $data['fieldMapping'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alertDescription']) && (mb_strlen($this->container['alertDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'alertDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['alertDescription']) && (mb_strlen($this->container['alertDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'alertDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alertName']) && (mb_strlen($this->container['alertName']) > 256)) {
                $invalidProperties[] = "invalid value for 'alertName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['alertName']) && (mb_strlen($this->container['alertName']) < 0)) {
                $invalidProperties[] = "invalid value for 'alertName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alertRemediation']) && (mb_strlen($this->container['alertRemediation']) > 1024)) {
                $invalidProperties[] = "invalid value for 'alertRemediation', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['alertRemediation']) && (mb_strlen($this->container['alertRemediation']) < 0)) {
                $invalidProperties[] = "invalid value for 'alertRemediation', the character length must be bigger than or equal to 0.";
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
    * Gets alertCustomProperties
    *  映射表
    *
    * @return map[string,string]|null
    */
    public function getAlertCustomProperties()
    {
        return $this->container['alertCustomProperties'];
    }

    /**
    * Sets alertCustomProperties
    *
    * @param map[string,string]|null $alertCustomProperties 映射表
    *
    * @return $this
    */
    public function setAlertCustomProperties($alertCustomProperties)
    {
        $this->container['alertCustomProperties'] = $alertCustomProperties;
        return $this;
    }

    /**
    * Gets alertDescription
    *  告警描述
    *
    * @return string|null
    */
    public function getAlertDescription()
    {
        return $this->container['alertDescription'];
    }

    /**
    * Sets alertDescription
    *
    * @param string|null $alertDescription 告警描述
    *
    * @return $this
    */
    public function setAlertDescription($alertDescription)
    {
        $this->container['alertDescription'] = $alertDescription;
        return $this;
    }

    /**
    * Gets alertGrouping
    *  分组标志
    *
    * @return bool|null
    */
    public function getAlertGrouping()
    {
        return $this->container['alertGrouping'];
    }

    /**
    * Sets alertGrouping
    *
    * @param bool|null $alertGrouping 分组标志
    *
    * @return $this
    */
    public function setAlertGrouping($alertGrouping)
    {
        $this->container['alertGrouping'] = $alertGrouping;
        return $this;
    }

    /**
    * Gets alertMapping
    *  映射表
    *
    * @return map[string,string]|null
    */
    public function getAlertMapping()
    {
        return $this->container['alertMapping'];
    }

    /**
    * Sets alertMapping
    *
    * @param map[string,string]|null $alertMapping 映射表
    *
    * @return $this
    */
    public function setAlertMapping($alertMapping)
    {
        $this->container['alertMapping'] = $alertMapping;
        return $this;
    }

    /**
    * Gets alertName
    *  告警报名称
    *
    * @return string|null
    */
    public function getAlertName()
    {
        return $this->container['alertName'];
    }

    /**
    * Sets alertName
    *
    * @param string|null $alertName 告警报名称
    *
    * @return $this
    */
    public function setAlertName($alertName)
    {
        $this->container['alertName'] = $alertName;
        return $this;
    }

    /**
    * Gets alertRemediation
    *  告警修复建议
    *
    * @return string|null
    */
    public function getAlertRemediation()
    {
        return $this->container['alertRemediation'];
    }

    /**
    * Sets alertRemediation
    *
    * @param string|null $alertRemediation 告警修复建议
    *
    * @return $this
    */
    public function setAlertRemediation($alertRemediation)
    {
        $this->container['alertRemediation'] = $alertRemediation;
        return $this;
    }

    /**
    * Gets alertSeverity
    *  alertSeverity
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapAlertSeverity|null
    */
    public function getAlertSeverity()
    {
        return $this->container['alertSeverity'];
    }

    /**
    * Sets alertSeverity
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapAlertSeverity|null $alertSeverity alertSeverity
    *
    * @return $this
    */
    public function setAlertSeverity($alertSeverity)
    {
        $this->container['alertSeverity'] = $alertSeverity;
        return $this;
    }

    /**
    * Gets alertSuppression
    *  抑制标志
    *
    * @return bool|null
    */
    public function getAlertSuppression()
    {
        return $this->container['alertSuppression'];
    }

    /**
    * Sets alertSuppression
    *
    * @param bool|null $alertSuppression 抑制标志
    *
    * @return $this
    */
    public function setAlertSuppression($alertSuppression)
    {
        $this->container['alertSuppression'] = $alertSuppression;
        return $this;
    }

    /**
    * Gets alertType
    *  告警类型映射表
    *
    * @return map[string,string]|null
    */
    public function getAlertType()
    {
        return $this->container['alertType'];
    }

    /**
    * Sets alertType
    *
    * @param map[string,string]|null $alertType 告警类型映射表
    *
    * @return $this
    */
    public function setAlertType($alertType)
    {
        $this->container['alertType'] = $alertType;
        return $this;
    }

    /**
    * Gets entityExtraction
    *  提取的实体
    *
    * @return map[string,string]|null
    */
    public function getEntityExtraction()
    {
        return $this->container['entityExtraction'];
    }

    /**
    * Sets entityExtraction
    *
    * @param map[string,string]|null $entityExtraction 提取的实体
    *
    * @return $this
    */
    public function setEntityExtraction($entityExtraction)
    {
        $this->container['entityExtraction'] = $entityExtraction;
        return $this;
    }

    /**
    * Gets fieldMapping
    *  字段映射
    *
    * @return map[string,string]|null
    */
    public function getFieldMapping()
    {
        return $this->container['fieldMapping'];
    }

    /**
    * Sets fieldMapping
    *
    * @param map[string,string]|null $fieldMapping 字段映射
    *
    * @return $this
    */
    public function setFieldMapping($fieldMapping)
    {
        $this->container['fieldMapping'] = $fieldMapping;
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

