<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QualityInfoVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QualityInfoVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码ID，填写String类型替代Long类型。
    * tableId  表ID，只读，填写String类型替代Long类型。
    * attrId  属性ID，只读，填写String类型替代Long类型。
    * bizType  bizType
    * dataQualityId  质量ID，填写String类型替代Long类型。
    * showControl  是否要显示正则表达式。
    * dataQualityName  质量名称。
    * alertConf  告警配置。
    * expression  正则相关校验规则中正则配置。
    * extendInfo  扩展信息。
    * fromStandard  是否来源于数据标准质量配置，只读。
    * resultDescription  结果说明。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tableId' => 'string',
            'attrId' => 'string',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'dataQualityId' => 'string',
            'showControl' => 'int',
            'dataQualityName' => 'string',
            'alertConf' => 'string',
            'expression' => 'string',
            'extendInfo' => 'string',
            'fromStandard' => 'bool',
            'resultDescription' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码ID，填写String类型替代Long类型。
    * tableId  表ID，只读，填写String类型替代Long类型。
    * attrId  属性ID，只读，填写String类型替代Long类型。
    * bizType  bizType
    * dataQualityId  质量ID，填写String类型替代Long类型。
    * showControl  是否要显示正则表达式。
    * dataQualityName  质量名称。
    * alertConf  告警配置。
    * expression  正则相关校验规则中正则配置。
    * extendInfo  扩展信息。
    * fromStandard  是否来源于数据标准质量配置，只读。
    * resultDescription  结果说明。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tableId' => null,
        'attrId' => null,
        'bizType' => null,
        'dataQualityId' => null,
        'showControl' => null,
        'dataQualityName' => null,
        'alertConf' => null,
        'expression' => null,
        'extendInfo' => null,
        'fromStandard' => null,
        'resultDescription' => null,
        'createBy' => null,
        'updateBy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * id  编码ID，填写String类型替代Long类型。
    * tableId  表ID，只读，填写String类型替代Long类型。
    * attrId  属性ID，只读，填写String类型替代Long类型。
    * bizType  bizType
    * dataQualityId  质量ID，填写String类型替代Long类型。
    * showControl  是否要显示正则表达式。
    * dataQualityName  质量名称。
    * alertConf  告警配置。
    * expression  正则相关校验规则中正则配置。
    * extendInfo  扩展信息。
    * fromStandard  是否来源于数据标准质量配置，只读。
    * resultDescription  结果说明。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tableId' => 'table_id',
            'attrId' => 'attr_id',
            'bizType' => 'biz_type',
            'dataQualityId' => 'data_quality_id',
            'showControl' => 'show_control',
            'dataQualityName' => 'data_quality_name',
            'alertConf' => 'alert_conf',
            'expression' => 'expression',
            'extendInfo' => 'extend_info',
            'fromStandard' => 'from_standard',
            'resultDescription' => 'result_description',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码ID，填写String类型替代Long类型。
    * tableId  表ID，只读，填写String类型替代Long类型。
    * attrId  属性ID，只读，填写String类型替代Long类型。
    * bizType  bizType
    * dataQualityId  质量ID，填写String类型替代Long类型。
    * showControl  是否要显示正则表达式。
    * dataQualityName  质量名称。
    * alertConf  告警配置。
    * expression  正则相关校验规则中正则配置。
    * extendInfo  扩展信息。
    * fromStandard  是否来源于数据标准质量配置，只读。
    * resultDescription  结果说明。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tableId' => 'setTableId',
            'attrId' => 'setAttrId',
            'bizType' => 'setBizType',
            'dataQualityId' => 'setDataQualityId',
            'showControl' => 'setShowControl',
            'dataQualityName' => 'setDataQualityName',
            'alertConf' => 'setAlertConf',
            'expression' => 'setExpression',
            'extendInfo' => 'setExtendInfo',
            'fromStandard' => 'setFromStandard',
            'resultDescription' => 'setResultDescription',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码ID，填写String类型替代Long类型。
    * tableId  表ID，只读，填写String类型替代Long类型。
    * attrId  属性ID，只读，填写String类型替代Long类型。
    * bizType  bizType
    * dataQualityId  质量ID，填写String类型替代Long类型。
    * showControl  是否要显示正则表达式。
    * dataQualityName  质量名称。
    * alertConf  告警配置。
    * expression  正则相关校验规则中正则配置。
    * extendInfo  扩展信息。
    * fromStandard  是否来源于数据标准质量配置，只读。
    * resultDescription  结果说明。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tableId' => 'getTableId',
            'attrId' => 'getAttrId',
            'bizType' => 'getBizType',
            'dataQualityId' => 'getDataQualityId',
            'showControl' => 'getShowControl',
            'dataQualityName' => 'getDataQualityName',
            'alertConf' => 'getAlertConf',
            'expression' => 'getExpression',
            'extendInfo' => 'getExtendInfo',
            'fromStandard' => 'getFromStandard',
            'resultDescription' => 'getResultDescription',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['attrId'] = isset($data['attrId']) ? $data['attrId'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['dataQualityId'] = isset($data['dataQualityId']) ? $data['dataQualityId'] : null;
        $this->container['showControl'] = isset($data['showControl']) ? $data['showControl'] : null;
        $this->container['dataQualityName'] = isset($data['dataQualityName']) ? $data['dataQualityName'] : null;
        $this->container['alertConf'] = isset($data['alertConf']) ? $data['alertConf'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['extendInfo'] = isset($data['extendInfo']) ? $data['extendInfo'] : null;
        $this->container['fromStandard'] = isset($data['fromStandard']) ? $data['fromStandard'] : null;
        $this->container['resultDescription'] = isset($data['resultDescription']) ? $data['resultDescription'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataQualityId'] === null) {
            $invalidProperties[] = "'dataQualityId' can't be null";
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
    * Gets id
    *  编码ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 编码ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tableId
    *  表ID，只读，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表ID，只读，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets attrId
    *  属性ID，只读，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getAttrId()
    {
        return $this->container['attrId'];
    }

    /**
    * Sets attrId
    *
    * @param string|null $attrId 属性ID，只读，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setAttrId($attrId)
    {
        $this->container['attrId'] = $attrId;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets dataQualityId
    *  质量ID，填写String类型替代Long类型。
    *
    * @return string
    */
    public function getDataQualityId()
    {
        return $this->container['dataQualityId'];
    }

    /**
    * Sets dataQualityId
    *
    * @param string $dataQualityId 质量ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setDataQualityId($dataQualityId)
    {
        $this->container['dataQualityId'] = $dataQualityId;
        return $this;
    }

    /**
    * Gets showControl
    *  是否要显示正则表达式。
    *
    * @return int|null
    */
    public function getShowControl()
    {
        return $this->container['showControl'];
    }

    /**
    * Sets showControl
    *
    * @param int|null $showControl 是否要显示正则表达式。
    *
    * @return $this
    */
    public function setShowControl($showControl)
    {
        $this->container['showControl'] = $showControl;
        return $this;
    }

    /**
    * Gets dataQualityName
    *  质量名称。
    *
    * @return string|null
    */
    public function getDataQualityName()
    {
        return $this->container['dataQualityName'];
    }

    /**
    * Sets dataQualityName
    *
    * @param string|null $dataQualityName 质量名称。
    *
    * @return $this
    */
    public function setDataQualityName($dataQualityName)
    {
        $this->container['dataQualityName'] = $dataQualityName;
        return $this;
    }

    /**
    * Gets alertConf
    *  告警配置。
    *
    * @return string|null
    */
    public function getAlertConf()
    {
        return $this->container['alertConf'];
    }

    /**
    * Sets alertConf
    *
    * @param string|null $alertConf 告警配置。
    *
    * @return $this
    */
    public function setAlertConf($alertConf)
    {
        $this->container['alertConf'] = $alertConf;
        return $this;
    }

    /**
    * Gets expression
    *  正则相关校验规则中正则配置。
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 正则相关校验规则中正则配置。
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets extendInfo
    *  扩展信息。
    *
    * @return string|null
    */
    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    /**
    * Sets extendInfo
    *
    * @param string|null $extendInfo 扩展信息。
    *
    * @return $this
    */
    public function setExtendInfo($extendInfo)
    {
        $this->container['extendInfo'] = $extendInfo;
        return $this;
    }

    /**
    * Gets fromStandard
    *  是否来源于数据标准质量配置，只读。
    *
    * @return bool|null
    */
    public function getFromStandard()
    {
        return $this->container['fromStandard'];
    }

    /**
    * Sets fromStandard
    *
    * @param bool|null $fromStandard 是否来源于数据标准质量配置，只读。
    *
    * @return $this
    */
    public function setFromStandard($fromStandard)
    {
        $this->container['fromStandard'] = $fromStandard;
        return $this;
    }

    /**
    * Gets resultDescription
    *  结果说明。
    *
    * @return string|null
    */
    public function getResultDescription()
    {
        return $this->container['resultDescription'];
    }

    /**
    * Sets resultDescription
    *
    * @param string|null $resultDescription 结果说明。
    *
    * @return $this
    */
    public function setResultDescription($resultDescription)
    {
        $this->container['resultDescription'] = $resultDescription;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人，只读。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人，只读。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人，只读。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人，只读。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

