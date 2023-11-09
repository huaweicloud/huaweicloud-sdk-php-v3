<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsDatasetColumn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsDatasetColumn';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  字段名称
    * comments  备注信息
    * dataId  数据集id
    * dataType  字段类型
    * flLabelType  学习数据集标签类型，UNIQUE_ID.唯一标识,FEATURE.特征,LABEL.标签,FILTER.过滤字段
    * isDiscrete  是否离散
    * length  长度
    * privacyPolicy  隐私策略，HASH.哈希处理，MASK.掩码，NONE.不处理
    * privacyPolicyExt  隐私策略描述
    * sacle  精度
    * sqlColPrivacyType  分析数据集字段隐私类别，NON_SENSITIVE.非敏感，SENSITIVE.敏感，UNIQUE_ID.唯一主键
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'comments' => 'string',
            'dataId' => 'string',
            'dataType' => 'string',
            'flLabelType' => 'string',
            'isDiscrete' => 'bool',
            'length' => 'int',
            'privacyPolicy' => 'string',
            'privacyPolicyExt' => 'string',
            'sacle' => 'int',
            'sqlColPrivacyType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  字段名称
    * comments  备注信息
    * dataId  数据集id
    * dataType  字段类型
    * flLabelType  学习数据集标签类型，UNIQUE_ID.唯一标识,FEATURE.特征,LABEL.标签,FILTER.过滤字段
    * isDiscrete  是否离散
    * length  长度
    * privacyPolicy  隐私策略，HASH.哈希处理，MASK.掩码，NONE.不处理
    * privacyPolicyExt  隐私策略描述
    * sacle  精度
    * sqlColPrivacyType  分析数据集字段隐私类别，NON_SENSITIVE.非敏感，SENSITIVE.敏感，UNIQUE_ID.唯一主键
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'comments' => null,
        'dataId' => null,
        'dataType' => null,
        'flLabelType' => null,
        'isDiscrete' => null,
        'length' => 'int32',
        'privacyPolicy' => null,
        'privacyPolicyExt' => null,
        'sacle' => 'int32',
        'sqlColPrivacyType' => null
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
    * columnName  字段名称
    * comments  备注信息
    * dataId  数据集id
    * dataType  字段类型
    * flLabelType  学习数据集标签类型，UNIQUE_ID.唯一标识,FEATURE.特征,LABEL.标签,FILTER.过滤字段
    * isDiscrete  是否离散
    * length  长度
    * privacyPolicy  隐私策略，HASH.哈希处理，MASK.掩码，NONE.不处理
    * privacyPolicyExt  隐私策略描述
    * sacle  精度
    * sqlColPrivacyType  分析数据集字段隐私类别，NON_SENSITIVE.非敏感，SENSITIVE.敏感，UNIQUE_ID.唯一主键
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'comments' => 'comments',
            'dataId' => 'data_id',
            'dataType' => 'data_type',
            'flLabelType' => 'fl_label_type',
            'isDiscrete' => 'is_discrete',
            'length' => 'length',
            'privacyPolicy' => 'privacy_policy',
            'privacyPolicyExt' => 'privacy_policy_ext',
            'sacle' => 'sacle',
            'sqlColPrivacyType' => 'sql_col_privacy_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  字段名称
    * comments  备注信息
    * dataId  数据集id
    * dataType  字段类型
    * flLabelType  学习数据集标签类型，UNIQUE_ID.唯一标识,FEATURE.特征,LABEL.标签,FILTER.过滤字段
    * isDiscrete  是否离散
    * length  长度
    * privacyPolicy  隐私策略，HASH.哈希处理，MASK.掩码，NONE.不处理
    * privacyPolicyExt  隐私策略描述
    * sacle  精度
    * sqlColPrivacyType  分析数据集字段隐私类别，NON_SENSITIVE.非敏感，SENSITIVE.敏感，UNIQUE_ID.唯一主键
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'comments' => 'setComments',
            'dataId' => 'setDataId',
            'dataType' => 'setDataType',
            'flLabelType' => 'setFlLabelType',
            'isDiscrete' => 'setIsDiscrete',
            'length' => 'setLength',
            'privacyPolicy' => 'setPrivacyPolicy',
            'privacyPolicyExt' => 'setPrivacyPolicyExt',
            'sacle' => 'setSacle',
            'sqlColPrivacyType' => 'setSqlColPrivacyType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  字段名称
    * comments  备注信息
    * dataId  数据集id
    * dataType  字段类型
    * flLabelType  学习数据集标签类型，UNIQUE_ID.唯一标识,FEATURE.特征,LABEL.标签,FILTER.过滤字段
    * isDiscrete  是否离散
    * length  长度
    * privacyPolicy  隐私策略，HASH.哈希处理，MASK.掩码，NONE.不处理
    * privacyPolicyExt  隐私策略描述
    * sacle  精度
    * sqlColPrivacyType  分析数据集字段隐私类别，NON_SENSITIVE.非敏感，SENSITIVE.敏感，UNIQUE_ID.唯一主键
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'comments' => 'getComments',
            'dataId' => 'getDataId',
            'dataType' => 'getDataType',
            'flLabelType' => 'getFlLabelType',
            'isDiscrete' => 'getIsDiscrete',
            'length' => 'getLength',
            'privacyPolicy' => 'getPrivacyPolicy',
            'privacyPolicyExt' => 'getPrivacyPolicyExt',
            'sacle' => 'getSacle',
            'sqlColPrivacyType' => 'getSqlColPrivacyType'
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
    const FL_LABEL_TYPE_FEATURE = 'FEATURE';
    const FL_LABEL_TYPE_FILTER = 'FILTER';
    const FL_LABEL_TYPE_LABEL = 'LABEL';
    const FL_LABEL_TYPE_UNIQUE_ID = 'UNIQUE_ID';
    const PRIVACY_POLICY_HASH = 'HASH';
    const PRIVACY_POLICY_MASK = 'MASK';
    const PRIVACY_POLICY_NONE = 'NONE';
    const SQL_COL_PRIVACY_TYPE_NON_SENSITIVE = 'NON_SENSITIVE';
    const SQL_COL_PRIVACY_TYPE_SENSITIVE = 'SENSITIVE';
    const SQL_COL_PRIVACY_TYPE_UNIQUE_ID = 'UNIQUE_ID';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFlLabelTypeAllowableValues()
    {
        return [
            self::FL_LABEL_TYPE_FEATURE,
            self::FL_LABEL_TYPE_FILTER,
            self::FL_LABEL_TYPE_LABEL,
            self::FL_LABEL_TYPE_UNIQUE_ID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPrivacyPolicyAllowableValues()
    {
        return [
            self::PRIVACY_POLICY_HASH,
            self::PRIVACY_POLICY_MASK,
            self::PRIVACY_POLICY_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSqlColPrivacyTypeAllowableValues()
    {
        return [
            self::SQL_COL_PRIVACY_TYPE_NON_SENSITIVE,
            self::SQL_COL_PRIVACY_TYPE_SENSITIVE,
            self::SQL_COL_PRIVACY_TYPE_UNIQUE_ID,
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
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['dataId'] = isset($data['dataId']) ? $data['dataId'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['flLabelType'] = isset($data['flLabelType']) ? $data['flLabelType'] : null;
        $this->container['isDiscrete'] = isset($data['isDiscrete']) ? $data['isDiscrete'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['privacyPolicy'] = isset($data['privacyPolicy']) ? $data['privacyPolicy'] : null;
        $this->container['privacyPolicyExt'] = isset($data['privacyPolicyExt']) ? $data['privacyPolicyExt'] : null;
        $this->container['sacle'] = isset($data['sacle']) ? $data['sacle'] : null;
        $this->container['sqlColPrivacyType'] = isset($data['sqlColPrivacyType']) ? $data['sqlColPrivacyType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFlLabelTypeAllowableValues();
                if (!is_null($this->container['flLabelType']) && !in_array($this->container['flLabelType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'flLabelType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPrivacyPolicyAllowableValues();
                if (!is_null($this->container['privacyPolicy']) && !in_array($this->container['privacyPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'privacyPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSqlColPrivacyTypeAllowableValues();
                if (!is_null($this->container['sqlColPrivacyType']) && !in_array($this->container['sqlColPrivacyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sqlColPrivacyType', must be one of '%s'",
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
    * Gets columnName
    *  字段名称
    *
    * @return string|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string|null $columnName 字段名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets comments
    *  备注信息
    *
    * @return string|null
    */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
    * Sets comments
    *
    * @param string|null $comments 备注信息
    *
    * @return $this
    */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
        return $this;
    }

    /**
    * Gets dataId
    *  数据集id
    *
    * @return string|null
    */
    public function getDataId()
    {
        return $this->container['dataId'];
    }

    /**
    * Sets dataId
    *
    * @param string|null $dataId 数据集id
    *
    * @return $this
    */
    public function setDataId($dataId)
    {
        $this->container['dataId'] = $dataId;
        return $this;
    }

    /**
    * Gets dataType
    *  字段类型
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 字段类型
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets flLabelType
    *  学习数据集标签类型，UNIQUE_ID.唯一标识,FEATURE.特征,LABEL.标签,FILTER.过滤字段
    *
    * @return string|null
    */
    public function getFlLabelType()
    {
        return $this->container['flLabelType'];
    }

    /**
    * Sets flLabelType
    *
    * @param string|null $flLabelType 学习数据集标签类型，UNIQUE_ID.唯一标识,FEATURE.特征,LABEL.标签,FILTER.过滤字段
    *
    * @return $this
    */
    public function setFlLabelType($flLabelType)
    {
        $this->container['flLabelType'] = $flLabelType;
        return $this;
    }

    /**
    * Gets isDiscrete
    *  是否离散
    *
    * @return bool|null
    */
    public function getIsDiscrete()
    {
        return $this->container['isDiscrete'];
    }

    /**
    * Sets isDiscrete
    *
    * @param bool|null $isDiscrete 是否离散
    *
    * @return $this
    */
    public function setIsDiscrete($isDiscrete)
    {
        $this->container['isDiscrete'] = $isDiscrete;
        return $this;
    }

    /**
    * Gets length
    *  长度
    *
    * @return int|null
    */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
    * Sets length
    *
    * @param int|null $length 长度
    *
    * @return $this
    */
    public function setLength($length)
    {
        $this->container['length'] = $length;
        return $this;
    }

    /**
    * Gets privacyPolicy
    *  隐私策略，HASH.哈希处理，MASK.掩码，NONE.不处理
    *
    * @return string|null
    */
    public function getPrivacyPolicy()
    {
        return $this->container['privacyPolicy'];
    }

    /**
    * Sets privacyPolicy
    *
    * @param string|null $privacyPolicy 隐私策略，HASH.哈希处理，MASK.掩码，NONE.不处理
    *
    * @return $this
    */
    public function setPrivacyPolicy($privacyPolicy)
    {
        $this->container['privacyPolicy'] = $privacyPolicy;
        return $this;
    }

    /**
    * Gets privacyPolicyExt
    *  隐私策略描述
    *
    * @return string|null
    */
    public function getPrivacyPolicyExt()
    {
        return $this->container['privacyPolicyExt'];
    }

    /**
    * Sets privacyPolicyExt
    *
    * @param string|null $privacyPolicyExt 隐私策略描述
    *
    * @return $this
    */
    public function setPrivacyPolicyExt($privacyPolicyExt)
    {
        $this->container['privacyPolicyExt'] = $privacyPolicyExt;
        return $this;
    }

    /**
    * Gets sacle
    *  精度
    *
    * @return int|null
    */
    public function getSacle()
    {
        return $this->container['sacle'];
    }

    /**
    * Sets sacle
    *
    * @param int|null $sacle 精度
    *
    * @return $this
    */
    public function setSacle($sacle)
    {
        $this->container['sacle'] = $sacle;
        return $this;
    }

    /**
    * Gets sqlColPrivacyType
    *  分析数据集字段隐私类别，NON_SENSITIVE.非敏感，SENSITIVE.敏感，UNIQUE_ID.唯一主键
    *
    * @return string|null
    */
    public function getSqlColPrivacyType()
    {
        return $this->container['sqlColPrivacyType'];
    }

    /**
    * Sets sqlColPrivacyType
    *
    * @param string|null $sqlColPrivacyType 分析数据集字段隐私类别，NON_SENSITIVE.非敏感，SENSITIVE.敏感，UNIQUE_ID.唯一主键
    *
    * @return $this
    */
    public function setSqlColPrivacyType($sqlColPrivacyType)
    {
        $this->container['sqlColPrivacyType'] = $sqlColPrivacyType;
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

