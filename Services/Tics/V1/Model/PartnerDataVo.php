<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PartnerDataVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PartnerDataVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnList  字段信息集合
    * createTime  创建时间
    * dataType  数据类型，DWS.DWS类型数据集，LOCAL_CSV.本地文件类型数集据，MRS.HIVE类型数据集，MYSQL.MySql类型数据集，ORACLE.Oracle类型数据集，RDS.RDS类型数据集
    * description  描述
    * id  数据集id
    * name  数据集名称
    * partnerDomainName  参与方租户名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnList' => '\HuaweiCloud\SDK\Tics\V1\Model\TicsDatasetColumn[]',
            'createTime' => '\DateTime',
            'dataType' => 'string',
            'description' => 'string',
            'id' => 'string',
            'name' => 'string',
            'partnerDomainName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnList  字段信息集合
    * createTime  创建时间
    * dataType  数据类型，DWS.DWS类型数据集，LOCAL_CSV.本地文件类型数集据，MRS.HIVE类型数据集，MYSQL.MySql类型数据集，ORACLE.Oracle类型数据集，RDS.RDS类型数据集
    * description  描述
    * id  数据集id
    * name  数据集名称
    * partnerDomainName  参与方租户名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnList' => null,
        'createTime' => 'date-time',
        'dataType' => null,
        'description' => null,
        'id' => null,
        'name' => null,
        'partnerDomainName' => null
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
    * columnList  字段信息集合
    * createTime  创建时间
    * dataType  数据类型，DWS.DWS类型数据集，LOCAL_CSV.本地文件类型数集据，MRS.HIVE类型数据集，MYSQL.MySql类型数据集，ORACLE.Oracle类型数据集，RDS.RDS类型数据集
    * description  描述
    * id  数据集id
    * name  数据集名称
    * partnerDomainName  参与方租户名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnList' => 'column_list',
            'createTime' => 'create_time',
            'dataType' => 'data_type',
            'description' => 'description',
            'id' => 'id',
            'name' => 'name',
            'partnerDomainName' => 'partner_domain_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnList  字段信息集合
    * createTime  创建时间
    * dataType  数据类型，DWS.DWS类型数据集，LOCAL_CSV.本地文件类型数集据，MRS.HIVE类型数据集，MYSQL.MySql类型数据集，ORACLE.Oracle类型数据集，RDS.RDS类型数据集
    * description  描述
    * id  数据集id
    * name  数据集名称
    * partnerDomainName  参与方租户名称
    *
    * @var string[]
    */
    protected static $setters = [
            'columnList' => 'setColumnList',
            'createTime' => 'setCreateTime',
            'dataType' => 'setDataType',
            'description' => 'setDescription',
            'id' => 'setId',
            'name' => 'setName',
            'partnerDomainName' => 'setPartnerDomainName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnList  字段信息集合
    * createTime  创建时间
    * dataType  数据类型，DWS.DWS类型数据集，LOCAL_CSV.本地文件类型数集据，MRS.HIVE类型数据集，MYSQL.MySql类型数据集，ORACLE.Oracle类型数据集，RDS.RDS类型数据集
    * description  描述
    * id  数据集id
    * name  数据集名称
    * partnerDomainName  参与方租户名称
    *
    * @var string[]
    */
    protected static $getters = [
            'columnList' => 'getColumnList',
            'createTime' => 'getCreateTime',
            'dataType' => 'getDataType',
            'description' => 'getDescription',
            'id' => 'getId',
            'name' => 'getName',
            'partnerDomainName' => 'getPartnerDomainName'
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
    const DATA_TYPE_DWS = 'DWS';
    const DATA_TYPE_LOCAL_CSV = 'LOCAL_CSV';
    const DATA_TYPE_MRS = 'MRS';
    const DATA_TYPE_MYSQL = 'MYSQL';
    const DATA_TYPE_ORACLE = 'ORACLE';
    const DATA_TYPE_RDS = 'RDS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataTypeAllowableValues()
    {
        return [
            self::DATA_TYPE_DWS,
            self::DATA_TYPE_LOCAL_CSV,
            self::DATA_TYPE_MRS,
            self::DATA_TYPE_MYSQL,
            self::DATA_TYPE_ORACLE,
            self::DATA_TYPE_RDS,
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
        $this->container['columnList'] = isset($data['columnList']) ? $data['columnList'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['partnerDomainName'] = isset($data['partnerDomainName']) ? $data['partnerDomainName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDataTypeAllowableValues();
                if (!is_null($this->container['dataType']) && !in_array($this->container['dataType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataType', must be one of '%s'",
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
    * Gets columnList
    *  字段信息集合
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\TicsDatasetColumn[]|null
    */
    public function getColumnList()
    {
        return $this->container['columnList'];
    }

    /**
    * Sets columnList
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\TicsDatasetColumn[]|null $columnList 字段信息集合
    *
    * @return $this
    */
    public function setColumnList($columnList)
    {
        $this->container['columnList'] = $columnList;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dataType
    *  数据类型，DWS.DWS类型数据集，LOCAL_CSV.本地文件类型数集据，MRS.HIVE类型数据集，MYSQL.MySql类型数据集，ORACLE.Oracle类型数据集，RDS.RDS类型数据集
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
    * @param string|null $dataType 数据类型，DWS.DWS类型数据集，LOCAL_CSV.本地文件类型数集据，MRS.HIVE类型数据集，MYSQL.MySql类型数据集，ORACLE.Oracle类型数据集，RDS.RDS类型数据集
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  数据集id
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
    * @param string|null $id 数据集id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  数据集名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 数据集名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets partnerDomainName
    *  参与方租户名称
    *
    * @return string|null
    */
    public function getPartnerDomainName()
    {
        return $this->container['partnerDomainName'];
    }

    /**
    * Sets partnerDomainName
    *
    * @param string|null $partnerDomainName 参与方租户名称
    *
    * @return $this
    */
    public function setPartnerDomainName($partnerDomainName)
    {
        $this->container['partnerDomainName'] = $partnerDomainName;
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

